<?php
	include 'config.php';

	## Read value
	$grid = $_POST['grid'];
	$stmt = $conn->prepare("SELECT * FROM textajfo_indian_science_reports.inter_grant_agencies WHERE grid='".$grid."';");
	$stmt->execute();
	$inst_names = $stmt->fetchAll();
	$data = array();
	$i=0;
	foreach($inst_names as $row){
		$data[] = array(
			"name"=>$row['agency'],
			"amount"=>$row['amount'],
		);
	}
	$response = array(
		"aaData" => $data,
	);

	echo json_encode($response);
