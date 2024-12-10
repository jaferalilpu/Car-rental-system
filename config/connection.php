<?php

function Connect()
{
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "root";
	$dbname = "car_booking";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>