<?php 
$pageTitle = "Evaluar";
require_once 'functions/config.php';
require_once 'clases/userClass.php';
require_once 'clases/evaluadosClass.php';
$uid = $_GET["uid"];
$evaluadosClass = new userClass();
$userData = $evaluadosClass->userDataByUid($uid);
if (!empty($_POST)) {
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";
}

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
		
		<?php
		$sector = $userData->sectorEvaluado;
		switch ($sector) {
			case 'Redactor Web':
				require_once 'encuestas/encuesta_web.php';
				break;
			case 'Prod TN':
				echo "Hola";
				break;
			default:
				echo "string";
				break;
		}
		?>
	</div>
</body>
</html>