<?php

//DATABASE CONNECTOR

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "barangaysalitranii";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
	die($conn->connect_error);
}
?>