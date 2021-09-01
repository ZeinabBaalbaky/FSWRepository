<?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname = "signindb";

$connection = new mysqli($server, $username, $password, $dbname);

if($connection->connect_error){
	die("Failed");
}

?>