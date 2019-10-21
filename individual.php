<?php
require_once 'functions/config.php';
require_once 'clases/userClass.php';
$pageTitle = "Análisis Individual";
$userClass = new userClass();
$userData = $userClass->userDetails($_GET['uid']);
// $sectores = $_SESSION['sectorJefe'];
// $userClass = new userClass();
echo "<pre>";
var_dump($userData);
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
		<h2><?= $userData->name." ".$userData->lastname ?></h2>
		<table>
			<thead>
				<tr>
					<th colspan="3">Actitud</th>
					<th colspan="4">Redacción</th>
					<th colspan="2">Rigurosidad</th>
				</tr>
			</thead>
			<tbody>
				<tr>
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
			</tbody>
		</table>
	</div>
</body>
</html>