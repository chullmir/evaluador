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
				require_once 'encuestas/encuesta_plantilla1.php';
				break;
			case 'Pgms TN':
				require_once 'encuestas/encuesta_plantilla1.php';
				break;
			case 'Arriba':
				require_once 'encuestas/encuesta_plantilla1.php';
				break;
			case 'Noti 13':
				require_once 'encuestas/encuesta_plantilla1.php';
				break;
			case 'Telenoche':
				require_once 'encuestas/encuesta_plantilla1.php';
				break;
			case 'Sintesis':
				require_once 'encuestas/encuesta_plantilla1.php';
				break;
			case 'Cronistas':
				require_once 'encuestas/encuesta_plantilla1.php';
				break;
			case 'Conduc Column':
				require_once 'encuestas/encuesta_plantilla1.php';
				break;
			case 'Deportes':
				require_once 'encuestas/encuesta_plantilla1.php';
				break;
			case 'Prod Esp':
				require_once 'encuestas/encuesta_plantilla1.php';
				break;
			case 'Camaras':
				require_once 'encuestas/encuesta_plantilla2.php';
				break;
			case 'Edicion':
				require_once 'encuestas/encuesta_plantilla2.php';
				break;
			case 'Directores':
				require_once 'encuestas/encuesta_plantilla2.php';
				break;
			case 'Promociones':
				require_once 'encuestas/encuesta_plantilla2.php';
				break;
			case 'Archivo':
				require_once 'encuestas/encuesta_plantilla3.php';
				break;
			case 'Ingesta SAT':
				require_once 'encuestas/encuesta_plantilla3.php';
				break;
			case 'CAN':
				require_once 'encuestas/encuesta_plantilla3.php';
				break;
			case 'Mesa':
				require_once 'encuestas/encuesta_plantilla4.php';
				break;
			case 'Administracion':
				require_once 'encuestas/encuesta_plantilla4.php';
				break;
			case 'PE y Jefes':
				require_once 'encuestas/encuesta_plantilla5.php';
				break;
			default:
				echo "string";
				break;
		}
		?>
	</div>
</body>
</html>