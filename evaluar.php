<?php 
require_once 'functions/config.php';
require_once 'clases/formClass.php';
if (empty($_SESSION)) {
	header("Location: index.php");
}
$pageTitle = "Evaluar";
$formClass = new formClass();

if ($_POST) {

	if (!empty($_POST['encuestaWebSubmit'])) {
		$nombre = $_SESSION['name'];
		$evaluado = $_POST['redactor'];
		$mes = $_POST['mes'];
		$actitud1 = $_POST['actitud1'];
		$actitud2 = $_POST['actitud2'];
		$actitud3 = $_POST['actitud3'];
		$redaccion1 = $_POST['redaccion1'];
		$redaccion2 = $_POST['redaccion2'];
		$redaccion3 = $_POST['redaccion3'];
		$redaccion4 = $_POST['redaccion4'];
		$rigurosidad1 = $_POST['rigurosidad1'];
		$rigurosidad2 = $_POST['rigurosidad2'];

		$id=$formClass->encuestaWeb($nombre,$evaluado,$mes,$actitud1,$actitud2,$actitud3,$redaccion1,$redaccion2,$redaccion3,$redaccion4,$rigurosidad1,$rigurosidad2);
	} elseif (!empty($_POST['encuestaCamarasSubmit'])) {
		# code...
	}
}
// echo "<pre>";
// var_dump($_POST);
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
		<h2>Evaluador: <?= $_SESSION['name'] ?></h2>
		
<!-- 
		<?php if ($_SESSION['area'] == "web"): ?>
			<?php require_once 'encuestas/encuesta_web.php'; ?>
		<?php endif ?>
		<?php if ($_SESSION['area'] == "camaras"): ?>
			<?php require_once 'encuestas/encuesta_camaras.php'; ?>
		<?php endif ?>
 -->

	</div>

	
	<?php require_once 'functions/bootstrap_scripts.php'; ?>
</body>
</html>