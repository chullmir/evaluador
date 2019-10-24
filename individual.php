<?php
require_once 'functions/config.php';
require_once 'clases/userClass.php';
require_once 'clases/formClass.php';
require_once 'functions/functions.php';
$pageTitle = "Análisis Individual";
$formClass = new formClass();
$userClass = new userClass();
$userData = $userClass->userDetails($_GET['uid']);
$promedios = $formClass->promediosWeb();

$encuestas = $userClass->resultadosRedactores($_GET['uid']);
// echo "<pre>";
// var_dump($promedios);
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
		<table>
			<thead>
				<tr>
					<th></th>
					<th colspan="3">Actitud</th>
					<th colspan="4">Redacción</th>
					<th colspan="2">Rigurosidad</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>¿Reacciona rápido ante los pedidos de un editor?</td>
					<td>¿Es proactivo ante situaciones de Breaking News?</td>
					<td>¿Interactúa y colabora con el resto del equipo?</td>
					<td>¿Tiene recursos narrativos?</td>
					<td>¿Utiliza recursos multimedia?</td>
					<td>¿Escribe sin errores de tipeo?</td>
					<td>¿Escribe sin errores de sintaxis?</td>
					<td>¿Rechequea datos / información antes de publicar?</td>
					<td>¿Las fuentes o partes involucradas en la noticia están citadas y bien distinguidas?</td>
				</tr>
				<tr>
					<td>Valores</td>
					<td><?= calificacion($encuestas['actitud1']) ?></td>
					<td><?= calificacion($encuestas['actitud2']) ?></td>
					<td><?= calificacion($encuestas['actitud3']) ?></td>
					<td><?= calificacion($encuestas['redaccion1']) ?></td>
					<td><?= calificacion($encuestas['redaccion2']) ?></td>
					<td><?= calificacion($encuestas['redaccion3']) ?></td>
					<td><?= calificacion($encuestas['redaccion4']) ?></td>
					<td><?= calificacion($encuestas['rigurosidad1']) ?></td>
					<td><?= calificacion($encuestas['rigurosidad2']) ?></td>
				</tr>
				<tr>
					<td>Promedio</td>
					<td><?= calificacion($promedios['actitud1']) ?></td>
					<td><?= calificacion($promedios['actitud2']) ?></td>
					<td><?= calificacion($promedios['actitud3']) ?></td>
					<td><?= calificacion($promedios['redaccion1']) ?></td>
					<td><?= calificacion($promedios['redaccion2']) ?></td>
					<td><?= calificacion($promedios['redaccion3']) ?></td>
					<td><?= calificacion($promedios['redaccion4']) ?></td>
					<td><?= calificacion($promedios['rigurosidad1']) ?></td>
					<td><?= calificacion($promedios['rigurosidad2']) ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>