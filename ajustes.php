<?php 
$pageTitle = "Administrar Usuarios";
require_once 'functions/config.php';
require_once 'clases/userClass.php';
require_once 'functions/validacion_superadmin.php';
$userClass = new userClass();

$db = getDB();
$stmt = $db->prepare("SELECT * FROM users");
$stmt->execute();
$data=$stmt->fetchAll(PDO::FETCH_OBJ);

// if (!empty($_POST['userCreateSubmit'])) {
// 	$name = $_POST['name'];
// 	$lastName = $_POST['lastName'];
// 	$email = $_POST['email'];
// 	$s_web = (!empty($_POST['web']) ? $_POST['web'] : '');
// 	$s_produccionTn = (!empty($_POST['produccionTn']) ? $_POST['produccionTn'] : '');
// 	$s_programasTn = (!empty($_POST['programasTn']) ? $_POST['programasTn'] : '');
// 	$s_arribaArgentinos = (!empty($_POST['arribaArgentinos']) ? $_POST['arribaArgentinos'] : '');
// 	$s_noti13 = (!empty($_POST['noti13']) ? $_POST['noti13'] : '');
// 	$s_telenoche = (!empty($_POST['telenoche']) ? $_POST['telenoche'] : '');
// 	$s_sintesis = (!empty($_POST['sintesis']) ? $_POST['sintesis'] : '');
// 	$s_cronista = (!empty($_POST['cronista']) ? $_POST['cronista'] : '');
// 	$s_conduColum = (!empty($_POST['conduColum']) ? $_POST['conduColum'] : '');
// 	$s_deportes = (!empty($_POST['deportes']) ? $_POST['deportes'] : '');
// 	$s_prodEsp = (!empty($_POST['prodEsp']) ? $_POST['prodEsp'] : '');
// 	$s_peJefes = (!empty($_POST['peJefes']) ? $_POST['peJefes'] : '');
// 	$s_camaras = (!empty($_POST['camaras']) ? $_POST['camaras'] : '');
// 	$s_edicion = (!empty($_POST['edicion']) ? $_POST['edicion'] : '');
// 	$s_directores = (!empty($_POST['directores']) ? $_POST['directores'] : '');
// 	$s_promociones = (!empty($_POST['promociones']) ? $_POST['promociones'] : '');
// 	$s_archivo = (!empty($_POST['archivo']) ? $_POST['archivo'] : '');
// 	$s_ingestaSat = (!empty($_POST['ingestaSat']) ? $_POST['ingestaSat'] : '');
// 	$s_can = (!empty($_POST['can']) ? $_POST['can'] : '');
// 	$s_mesa = (!empty($_POST['mesa']) ? $_POST['mesa'] : '');
// 	$s_administracion = (!empty($_POST['administracion']) ? $_POST['administracion'] : '');
// 	$profile = $_POST['profile']; 
// 	$uid=$userClass->userRegistration($name, $lastName,$email,$s_web,$s_produccionTn,$s_programasTn,$s_arribaArgentinos,$s_noti13,$s_telenoche,$s_sintesis,$s_cronista,$s_conduColum,$s_deportes,$s_prodEsp,$s_peJefes,$s_camaras,$s_edicion,$s_directores,$s_promociones,$s_archivo,$s_ingestaSat,$s_can,$s_mesa,$s_administracion,$profile);
// 	header("Location:ajustes.php");
// }


echo "<pre>";
// var_dump($_SESSION);
var_dump($_POST);
// // // var_dump($data);
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
		<h1>Listado de Usuarios</h1>
		

		<div class="table-wrapper-scroll-y my-custom-scrollbar">
			
			<table id="myTable" class="table table-hover table-sm dataTable" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th class="th-sm" onclick="sortTable(0)">Nombre</th>
						<th class="th-sm" onclick="sortTable(1)">Apellido</th>
						<th class="th-sm" onclick="sortTable(2)">Perfil</th>
						<th class="th-sm">Editar</th>
					</tr>
				</thead>

			
				<tbody>

					<?php foreach ($data as $key => $value): ?>
						<tr>
							<td><?= $data[$key]->name ?></td>
							<td><?= $data[$key]->lastname ?></td>
							<td><?= $data[$key]->profile ?></td>
							<td><a href="#" class="btn btn-info">Editar</a> <a href="#" class="btn btn-danger">Borrar</a></td>
						</tr>
					<?php endforeach ?>
				
				</tbody>
				<tfoot>
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Perfil</th>
						<th>Editar</th>
					</tr>
				</tfoot>
			</table>
		</div>

		<div class="comandos">
			<a href="crear-usuario.php" class="btn btn-success">Nuevo Usuario</a>
		</div>

	</div>
<script src="functions/sortTable.js"></script>
</body>
</html>