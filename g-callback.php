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

	$uid=$userClass->userLogin($userData['email']);
	
	
	header("Location:index.php");
	exit();

 ?>