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
$plantilla = plantilla($userData->sectorEvaluado);
// echo $plantilla;
// echo "<pre>";
// var_dump($userData);
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
					<?php if ($plantilla == "Plantilla Web"): ?>
						<th colspan="3">Actitud</th>
						<th colspan="4">Redacción</th>
						<th colspan="2">Rigurosidad</th>	
					<?php endif ?>

					<?php if ($plantilla == "Plantilla1"): ?>
						<th colspan="6">Actitud</th>
						<th colspan="7">Desempeño</th>
					<?php endif ?>

					<?php if ($plantilla == "Plantilla2"): ?>
						<th colspan="6">Actitud</th>
						<th colspan="5">Desempeño</th>
					<?php endif ?>

					<?php if ($plantilla == "Plantilla3"): ?>
						<th colspan="6">Actitud</th>
						<th colspan="6">Desempeño</th>
					<?php endif ?>

					<?php if ($plantilla == "Plantilla4"): ?>
						<th colspan="6">Actitud</th>
						<th colspan="4">Desempeño</th>
					<?php endif ?>

					<?php if ($plantilla == "Plantilla5"): ?>
						<th colspan="10">Desempeño</th>
					<?php endif ?>
				</tr>
			</thead>
			<tbody>
				<tr>
					<!-- ------ ACTITUD ------ -->
					<td></td>
					<td>¿Es flexible ante los cambios?</td>
					<td>¿Muestra predisposición? (viaja, reemplazos, ofrece colaboración, etc)</td>
					<td>¿Es una persona creativa?</td>
					<td>¿Interactúa y colabora con su equipo?</td>
					<td>¿Interactúa y colabora con otras áreas?</td>
					<td>¿Se adapta y usa nuevas tecnologías?</td>
					
					<!-- ------ PLANTILLA 1 ------ -->
					<td>¿Está informado?</td>
					<td>¿Propone temas propios fuera de agenda?</td>
					<td>Ortografía y sintaxis  ¿Tiene recursos de redacción?</td>
					<td>¿Utiliza recursos multimedia?</td>
					<td>¿Rechequea los datos?</td>
					<td>¿Realiza seguimiento de la información al aire?</td>
					<td>¿Realiza seguimiento de la cobertura diaria?</td>
				</tr>
				<tr>
					<td>Valores</td>
				</tr>
			</tbody>
		</table>
		
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