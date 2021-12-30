<?php
	include 'config.php';

	## Read value
	$stmt = $conn->prepare("SELECT * FROM textajfo_indian_science_reports.publications ORDER BY b_id DESC;");

	$stmt->execute();
	$inst_names = $stmt->fetchAll();
	$data = array();
	foreach($inst_names as $row){
		$data[] = array(
			"b_id"=>$row['b_id'],
			"title"=>$row['title'],
			"authors"=>$row['authors'],
			"journal"=>$row['journal'],
			"web_link"=>$row['web_link'],
		);
	}
	$response = array(
		"aaData" => $data,
	);

	echo json_encode($response);
