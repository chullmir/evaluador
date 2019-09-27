<?php 	
	require_once 'functions/config.php';
	require_once 'clases/userClass.php';
	$userClass = new userClass();
	if (isset($_SESSION['access_token'])) {
		$gClient->setAccessToken($_SESSION['access_token']);
	} else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header("Location:login.php");
	}


	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();

	// echo "<pre>";
	// var_dump($userData['email']);
	// echo "</pre>";

	$loginData = $userClass->userDataByEmail($userData['email']);
	// echo "<pre>";
	// // var_dump($prueba);
	// var_dump($loginData->name);
	// echo "</pre>";
	if (!empty($loginData)) {
		$_SESSION["name"] = $loginData->name;
		$_SESSION["lastname"] = $loginData->lastname;
		$_SESSION["email"] = $loginData->email;
		$_SESSION["web"] = $loginData->web;
		$_SESSION["produccionTn"] = $loginData->produccionTn;
		$_SESSION["programasTn"] = $loginData->programasTn;
		$_SESSION["arribaArgentinos"] = $loginData->arribaArgentinos;
		$_SESSION["noti13"] = $loginData->noti13;
		$_SESSION["telenoche"] = $loginData->telenoche;
		$_SESSION["sintesis"] = $loginData->sintesis;
		$_SESSION["cronista"] = $loginData->cronista;
		$_SESSION["conduColum"] = $loginData->conduColum;
		$_SESSION["deportes"] = $loginData->deportes;
		$_SESSION["prodEsp"] = $loginData->prodEsp;
		$_SESSION["peJefes"] = $loginData->peJefes;
		$_SESSION["camaras"] = $loginData->camaras;
		$_SESSION["edicion"] = $loginData->edicion;
		$_SESSION["directores"] = $loginData->directores;
		$_SESSION["promociones"] = $loginData->promociones;
		$_SESSION["archivo"] = $loginData->archivo;
		$_SESSION["ingestaSat"] = $loginData->ingestaSat;
		$_SESSION["can"] = $loginData->can;
		$_SESSION["mesa"] = $loginData->mesa;
		$_SESSION["administracion"] = $loginData->administracion;
		$_SESSION["profile"] = $loginData->profile;
	}

	// $_SESSION['email'] = $userData['email'];
	// $_SESSION['familyName'] = $userData['familyName'];
	// $_SESSION['givenName'] = $userData['givenName'];

	header("Location:index.php");
	exit();

 ?>