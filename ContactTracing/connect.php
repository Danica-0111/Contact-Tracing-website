<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "contacttracing";

$conn = mysqli_connect($server, $username, $password, $database);

if ($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);	
}

date_default_timezone_set('Asia/Manila'); 

?>