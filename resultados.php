<?php
require_once 'functions/config.php';
require_once 'clases/userClass.php';
$pageTitle = "Resultados";
$sectores = $_SESSION['sectorJefe'];
$userClass = new userClass();
// echo "<pre>";
// var_dump($_SESSION);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'componentes/head.php'; ?>
</head>
<body>
	<?php require_once 'componentes/navbar.php'; ?>
	<div class="container">
		<h2>Ver Resultados</h2>
		<?php
		foreach ($sectores as $sector) {
			echo "<h3>".$sector."</h3>";
			$personas = $userClass->evaluadosPorSector($sector);
			echo "<ul>";
			foreach ($personas as $persona) {
				echo '<li><a href="individual.php?uid='.$persona->uid.'">'.$persona->name.' '.$persona->lastname.'</a></li>';
			}
			echo "</ul>";

		}

		?>
	</div>
	
</body>
</html>