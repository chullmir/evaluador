<?php 
$pageTitle = "Administrar Usuarios";
require_once 'functions/config.php';
require_once 'clases/userClass.php';

$db = getDB();
$stmt = $db->prepare("SELECT * FROM users");
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_OBJ);

// echo "<pre>";
// var_dump($data);
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
		<h1>Listado de Usuarios</h1>

		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Apellido</th>
					<th scope="col">Area</th>
					<th scope="col">Editar</th>
				</tr>
			</thead>
			<tbody>

				<?php foreach ($data as $key => $value): ?>
					<tr>
						<td><?= $data[$key]->name ?></td>
						<td><?= $data[$key]->lastname ?></td>
						<td><?= $data[$key]->area ?></td>
						<td>Editar | Borrar</td>
					</tr>
				<?php endforeach ?>
			
			</tbody>
		</table>
	</div>
</body>
</html>