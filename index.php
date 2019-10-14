<?php 
$pageTitle = "Bienvenido";
require_once 'functions/config.php';
require_once 'clases/userClass.php';
// if (empty($_SESSION['name'])) {
// 	header("Location:home.php");
// }
$userClass = new userClass();
$errorMsgReg='';
$errorMsgLogin='';

/* Login Form */
// if (!empty($_POST['loginSubmit'])) {
	// $userEmail=$_POST['userEmail'];
	// $password=$_POST['password'];
	// $uid=$userClass->userLogin($userEmail,$password);
	
		// if($uid) {
		// 	$url=BASE_URL.'home.php';
		// 	header("Location: $url"); // Page redirecting to home.php 
		// } else {
		// 	$errorMsgLogin="Please check login details.";
		// }
	
// }
 
// echo "<pre>";
// var_dump($sector);
// var_dump($_SESSION);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'componentes/head.php'; ?>
</head>
<body>
	<?php require_once 'componentes/navbar.php'; ?>
	<div class="container">
		<h1>Hola <?php echo (!empty($_SESSION['name']) ? $_SESSION['name'] : "invitado")  ?></h1>
		<?php if (!empty($_SESSION['name'])): ?>
			<h2>Área(s)</h2>
			<ul>
			<?php foreach ($_SESSION['sector'] as $value): ?>
				<li><?= $value ?></li>
			<?php endforeach ?>
			</ul>
			
		<?php endif ?>
		

		
		
	</div>
	

	<?php require_once 'scripts/bootstrap_scripts.php'; ?>
</body>
</html>