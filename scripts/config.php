<?php
	$server = "localhost";
	$username = "textajfo_guest";
	$password = "guest@123";
	//$dbname = "test";
	$dbname = "textajfo_indian_science_reports";

// Create connection
	try{
		$conn = new PDO("mysql:host=$server;dbname=$dbname","$username","$password");
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		die('Unable to connect with the database');
	}
