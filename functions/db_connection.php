<?php 
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="tn";

try {
	$conn = new PDO("mysql:host=$dbhost;dbname=$db",$dbuser,$dbpass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected succesfully";
	
} catch (PDOException $e) {
	echo "Connection failed: ".$e->getMessage();
	
}

 ?>