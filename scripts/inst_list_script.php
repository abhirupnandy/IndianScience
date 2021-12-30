<?php
	include 'config.php';

	## Read value
	$letter = $_GET['letter'];
	$draw = $_POST['draw'];
	$row = $_POST['start'];
	$row_per_page = $_POST['length']; // Rows display per page
	$columnIndex = $_POST['order'][0]['column']; // Column index
	$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
	$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
	$searchValue = $_POST['search']['value']; // Search value
	$searchArray = array();

	## Search
	$searchQuery = " ";
	if($searchValue != ''){
		$searchQuery = " AND (name LIKE :name  ) ";
		$searchArray = array(
			'name'=>"%$searchValue%"
		);
	}
	else{
	    $searchQuery = " AND (name LIKE :name  ) ";
		$searchArray = array(
			'name'=>"$letter%"
		);
	}

	## Total number of records without filtering
	$stmt = $conn->prepare("SELECT COUNT(*) FROM institutes GROUP BY name");
	$stmt->execute();
	$totalRecords = $stmt->rowCount();

	## Total number of records with filtering
	$stmt = $conn->prepare("SELECT COUNT(*) FROM institutes  WHERE 1 ".$searchQuery." GROUP by name");
	$stmt->execute($searchArray);
	$totalRecordwithFilter = $stmt->rowCount();

	$stmt = $conn->prepare("SELECT * FROM textajfo_indian_science_reports.institutes WHERE  1 ".$searchQuery." ORDER BY name LIMIT :limit,:offset");
	foreach($searchArray as $key=>$search){
		$stmt->bindValue(':'.$key, $search,PDO::PARAM_STR);
	}

	$stmt->bindValue(':limit', (int)$row, PDO::PARAM_INT);
	$stmt->bindValue(':offset', (int)$row_per_page, PDO::PARAM_INT);
	$stmt->execute();
	$inst_names = $stmt->fetchAll();

	$data = array();
	foreach($inst_names as $row){
		$data[] = array(
			"grid"=>$row['grid'],
			"name"=>$row['name'],
			"seq_no"=>$row['seq_no'],
			"pub_count"=>$row['pub_count']
		);
	}
	$response = array(
		"draw" => intval($draw),
		"iTotalRecords" => $totalRecords,
		"iTotalDisplayRecords" => $totalRecordwithFilter,
		"aaData" => $data
	);

	echo json_encode($response);
