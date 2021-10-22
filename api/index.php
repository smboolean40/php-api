<?php
require __DIR__ . "/../database.php";

header("Content-Type: application/json");
// header('Access-Control-Allow-Origin: *');

if( !empty($_GET["gender"]) ) {
	$gender = $_GET["gender"];
	$databaseFiltered = [];

	foreach($database as $student) {
		if( $gender == $student["gender"] ) {
			$databaseFiltered[] = $student;
		}
	}

	echo json_encode($databaseFiltered);
} else {
	echo json_encode($database);
}