<?php 
$pageTitle = "Bienvenido";
require_once 'functions/config.php';
require_once 'clases/userClass.php';
$userClass = new userClass();
$errorMsgReg='';
$errorMsgLogin='';
// var_dump($_POST);
/* Signup Form */
if (!empty($_POST['signupSubmit'])) 
	{
		$name=$_POST['nameReg'];
		$apellido=$_POST['lastnameReg'];
		$email=$_POST['emailReg'];
		$password=$_POST['passwordReg'];
		/* Regular expression check */
		$email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.([a-zA-Z]{2,4})$~i', $email);
		$password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);
		if($email_check && $password_check && strlen(trim($name))>0) 
		{
			$uid=$userClass->userRegistration($name,$lastname,$email,$password);
			if($uid)
			{
				$url=BASE_URL.'home.php';
				header("Location: $url"); // Page redirecting to home.php 
			} else {
				$errorMsgReg="Username or Email already exists.";
			}
		}
	}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'componentes/head.php'; ?>
</head>
<body>
	<?php require_once 'componentes/navbar.php'; ?>

	
	<?php
	
	/* Login Form */
	if (!empty($_POST['loginSubmit'])) {
		$usernameEmail=$_POST['usernameEmail'];
		$password=$_POST['password'];
		if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 ) {
			$uid=$userClass->userLogin($usernameEmail,$password);
			if($uid) {
				$url=BASE_URL.'home.php';
				header("Location: $url"); // Page redirecting to home.php 
			} else {
				$errorMsgLogin="Please check login details.";
			}
		}
	}
	/* Signup Form */
	if (!empty($_POST['signupSubmit'])) 
		{
			$name=$_POST['nameReg'];
			$apellido=$_POST['lastnameReg'];
			$email=$_POST['emailReg'];
			$password=$_POST['passwordReg'];
			/* Regular expression check */
			$email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.([a-zA-Z]{2,4})$~i', $email);
			$password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

			if($email_check && $password_check && strlen(trim($name))>0) 
				{
					$uid=$userClass->userRegistration($name,$lastname,$email,$password);
					if($uid)
						{
							$url=BASE_URL.'home.php';
							header("Location: $url"); // Page redirecting to home.php 
						} else {
							$errorMsgReg="Username or Email already exists.";
						}
					}
				}
	?>
	




	<?php require_once 'scripts/bootstrap_scripts.php'; ?>
</body>
</html>