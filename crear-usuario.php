<?php
$pageTitle = "Crear Usuario";
require_once 'functions/config.php';
//require_once 'functions/validacion_superadmin.php';


// echo "<pre>";
// // var_dump($_SESSION['profile']);
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
		<form method="post" action="ajustes.php">
			<h1>Crear Usuario</h1>
			<div class="form-group">
				<label for="inputName">Nombre</label>
				<input type="text" class="form-control" id="inputName" placeholder="Nombre" name="name" required>
			</div>
			<div class="form-group">
				<label for="inputLastName">Apellido</label>
				<input type="text" class="form-control" id="inputLastName" placeholder="Apellido" name="lastName" required>
			</div>
			<div class="form-group">
				<label for="inputEmail">Email</label>
				<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
			</div>

			<div class="form-group">
				<label for="">Area</label>
				<div class="row">
					<div class="col">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="webCheck" name="web">
							<label class="form-check-label" for="webCheck">Redactor Web</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="prodCheck" name="produccionTn">
							<label class="form-check-label" for="prodCheck">Produccion TN</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="programasCheck" name="programasTn">
							<label class="form-check-label" for="programasCheck">Programas TN</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="arribaCheck" name="arribaArgentinos">
							<label class="form-check-label" for="arribaCheck">Arriba Argentinos</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="noti13Check" name="noti13">
							<label class="form-check-label" for="noti13Check">Noti 13</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="telenocheCheck" name="telenoche">
							<label class="form-check-label" for="telenocheCheck">Telenoche</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="sintesisCheck" name="sintesis">
							<label class="form-check-label" for="sintesisCheck">Síntesis</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="cronistaCheck" name="cronista">
							<label class="form-check-label" for="cronistaCheck">Cronista</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="conduColumCheck" name="conduColum">
							<label class="form-check-label" for="conduColumCheck">Conductor / Columnista</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="deportesCheck" name="deportes">
							<label class="form-check-label" for="deportesCheck">Deportes</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="prodEspCheck" name="prodEsp">
							<label class="form-check-label" for="prodEspCheck">Producciones Especiales</label>
						</div>
					</div>
					<div class="col">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="peJefesCheck" name="peJefes">
							<label class="form-check-label" for="peJefesCheck">PE / Jefes</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="camarasCheck" name="camaras">
							<label class="form-check-label" for="camarasCheck">Cámaras</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="edicionCheck" name="edicion">
							<label class="form-check-label" for="edicionCheck">Edición</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="directoresCheck" name="directores">
							<label class="form-check-label" for="directoresCheck">Directores</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="promocionesCheck" name="promociones">
							<label class="form-check-label" for="promocionesCheck">Promociones</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="archivoCheck" name="archivo">
							<label class="form-check-label" for="archivoCheck">Archivo</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="ingestaSatCheck" name="ingestaSat">
							<label class="form-check-label" for="ingestaSatCheck">Ingesta / SAT</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="canCheck" name="can">
							<label class="form-check-label" for="canCheck">CAN</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="mesaCheck" name="mesa">
							<label class="form-check-label" for="mesaCheck">Mesa</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="1" id="administracionCheck" name="administracion">
							<label class="form-check-label" for="administracionCheck">Administración</label>
						</div>
					</div>
				</div>
				
			</div>


			<div class="form-group">
				<label for="profileSelect">Perfil</label>
				<select class="form-control" id="profileSelect" name="profile">
					<option value="redactor">Redactor</option>
					<option value="evaluador">Evaluador</option>
					<option value="admin">Admin</option>
					<option value="superadmin">Superadmin</option>
				</select>
			</div>




			<input type="submit" class="btn btn-primary" name="userCreateSubmit" value="Crear">
		</form>
	</div>
	
</body>
</html>