<?php 
$dbhost="localhost";
// $dbuser="root";
// $dbpass="";
// $db="tn";
$dbuser="u458208539_paulo";
$dbpass="palicapo1";
$db="u458208539_tn";

try {
	$conn = new PDO("mysql:host=$dbhost;dbname=$db",$dbuser,$dbpass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected succesfully";
	
} catch (PDOException $e) {
	echo "Connection failed: ".$e->getMessage();
	
}

 ?>