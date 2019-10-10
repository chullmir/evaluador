<?php 
$pageTitle = "Evaluar";
require_once 'functions/config.php';
require_once 'clases/userClass.php';
$uid = $_GET["uid"];
$userClass = new userClass();
$userData = $userClass->userDataByUid($uid);

// echo "<pre>";
// var_dump($userData);
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
		<h2><?= $userData->name." ".$userData->lastname ?></h2>
		<?php require_once 'encuestas/encuesta_web.php'; ?>
	</div>
</body>
</html>