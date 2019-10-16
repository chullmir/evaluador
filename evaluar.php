<?php 
require_once 'functions/config.php';
require_once 'clases/formClass.php';
require_once 'clases/userClass.php';
if (empty($_SESSION)) {
	header("Location: index.php");
}
$sectores = $_SESSION['sectorJefe'];
$pageTitle = "Evaluar";
$evaluadosClass = new userClass();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'componentes/head.php'; ?>
</head>
<body>
	<?php require_once 'componentes/navbar.php'; ?>
	<div class="container">

		<h2>Personas</h2>
		<a href=""></a>
		<?php
			foreach ($sectores as $sector) {
				echo "<h3>".$sector."</h3>";
				$personas = $evaluadosClass->evaluadosPorSector($sector);
				echo "<ul>";
				foreach ($personas as $persona) {
					echo '<li><a href="encuesta.php?uid='.$persona->uid.'">'.$persona->name.' '.$persona->lastname.'</a></li>';
				}
				echo "</ul>";
			}

		?>




		

	</div>

	
	<?php require_once 'functions/bootstrap_scripts.php'; ?>
</body>
</html>