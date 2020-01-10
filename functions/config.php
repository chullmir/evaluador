<?php 
session_start();
require_once 'GoogleAPI/vendor/autoload.php';
$gClient = new Google_Client();
$gClient->setClientId("20816500303-po6big42g4682otkfv195884s6edja3c.apps.googleusercontent.com");
$gClient->setClientSecret("x0VsYt-1PXEoSPjTRfJxa_Zz");
$gClient->setApplicationName("Haiv Login");

if ($_SERVER["HTTP_HOST"]=='localhost') {
	// ----- LOCAL	
	$gClient->setRedirectUri("http://localhost/evaluador/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
	define('DB_SERVER','localhost');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');
	define('DB_DATABASE','tn');
	define('BASE_URL','http://localhost/evaluador/');
} else {
	// ----- HOSTING
	$gClient->setRedirectUri("http://serviciostn.online/evaluador/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
	define('DB_SERVER','localhost'); // OK
	define('DB_USERNAME','u458208539_paulo');
	define('DB_PASSWORD','palicapo1'); 
	define('DB_DATABASE','epiz_24173244_tn'); //OK
	define('BASE_URL','http://paulo.epizy.com/evaluador/'); //OK
};

// // ----- LOCAL
// $gClient->setRedirectUri("http://localhost/evaluador/g-callback.php");
// $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
// define('DB_SERVER','localhost');
// define('DB_USERNAME','root');
// define('DB_PASSWORD','');
// define('DB_DATABASE','tn');
// define('BASE_URL','http://localhost/evaluador/');


// ----- HOSTING
// $gClient->setRedirectUri("http://serviciostn.online/evaluador/g-callback.php");
// $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
// define('DB_SERVER','localhost');
// define('DB_USERNAME','u458208539_paulo');
// define('DB_PASSWORD','palicapo1');
// define('DB_DATABASE','u458208539_tn');
// define('BASE_URL','http://serviciostn.online/evaluador/');


function getDB(){
	$dbhost=DB_SERVER;
	$dbuser=DB_USERNAME;
	$dbpass=DB_PASSWORD;
	$dbname=DB_DATABASE;
	try{
		$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $dbConnection;
	}
	catch (PDOException $e){
		echo 'Connection failed: ' . $e->getMessage();
	}
}



 ?>