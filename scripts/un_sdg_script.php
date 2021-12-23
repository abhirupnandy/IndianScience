<?php
	include 'config.php';

	## Read value
	#$grid = 'grid.429017.9';//$_GET['grid'];
	$sdgs = array("No Poverty","Zero Hunger","Good Health and Well Being","Quality Education",
	"Gender Equality","Clean Water and Sanitation","Affordable and Clean Energy","Decent Work and Economic Growth",
	"Industry, Innovation and Infrastructure","Reduced Inequalities","Sustainable Cities and Communities",
	"Responsible Consumption and Production","Climate Action","Life Below Water","Life on Land",
	"Peace, Justice and Strong Institutions","Partnerships for the Goals",);
	$grid = $_POST['grid'];
	$stmt = $conn->prepare("SELECT * FROM textajfo_indian_science_reports.year_wise_sdg_table WHERE grid='".$grid."' ORDER BY SDG;");
	$stmt->execute();
	$inst_names = $stmt->fetchAll();
	$data = array();
	$i=0;
	foreach($inst_names as $row){
		$sum = $row['2010']+$row['2011']+$row['2012']+$row['2013']+$row['2014']+$row['2015']+$row['2016']+$row['2017']+
			$row['2018']+$row['2019'];
		$sum = ''.$sum;
		$data[] = array(
			"sdgs"=>$sdgs[$i++],
			"2010"=>$row['2010'],
			"2011"=>$row['2011'],
			"2012"=>$row['2012'],
			"2013"=>$row['2013'],
			"2014"=>$row['2014'],
			"2015"=>$row['2015'],
			"2016"=>$row['2016'],
			"2017"=>$row['2017'],
			"2018"=>$row['2018'],
			"2019"=>$row['2019'],
			"sum"=>$sum,
		);
	}
	$response = array(
		"aaData" => $data,
	);

	echo json_encode($response);
