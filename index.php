<?php 
$pageTitle = "Bienvenido";
require_once 'functions/config.php';
require_once 'clases/userClass.php';
if (empty($_SESSION['name'])) {
	header("Location:home.php");
}
$userClass = new userClass();
$errorMsgReg='';
$errorMsgLogin='';
// $_SESSION['name'] = ($_SESSION['name'] ? $_SESSION['name'] : "");
/* Signup Form */
if (!empty($_POST['signupSubmit'])) 
{
	$name=$_POST['nameReg'];
	$lastname=$_POST['lastnameReg'];
	$email=$_POST['emailReg'];
	$password=$_POST['passwordReg'];
	/* Regular expression check */
	// $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.([a-zA-Z]{2,4})$~i', $email);
	// $password_check = preg_match('~^[A-Za-z0-9!@#$%^&*()_]{6,20}$~i', $password);

	$uid=$userClass->userRegistration($name,$lastname,$email,$password);
	// if($uid)
	// {
	// 	$url=BASE_URL.'home.php';
	// 	header("Location: $url"); // Page redirecting to home.php 
	// } else {
	// 	$errorMsgReg="Username or Email already exists.";
	// }

}

/* Login Form */
if (!empty($_POST['loginSubmit'])) {
	$userEmail=$_POST['userEmail'];
	$password=$_POST['password'];
	// if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 ) {
	$uid=$userClass->userLogin($userEmail,$password);
	
		// if($uid) {
		// 	$url=BASE_URL.'home.php';
		// 	header("Location: $url"); // Page redirecting to home.php 
		// } else {
		// 	$errorMsgLogin="Please check login details.";
		// }
	
}
// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'componentes/head.php'; ?>
</head>
<body>
	<?php require_once 'componentes/navbar.php'; ?>
	<div class="container">
		<h1>Bienvenido <?php echo (!empty($_SESSION['name']) ? $_SESSION['name'] : "invitado")  ?></h1>
		<?php if (!empty($_SESSION['name'])): ?>
			<p>Sector: <?php echo $_SESSION['area'] ?></p>
			
		<?php endif ?>

		
		
	</div>
	

	<?php require_once 'scripts/bootstrap_scripts.php'; ?>
</body>
</html>