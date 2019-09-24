<?php 
$pageTitle = "Registrarse";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'componentes/head.php'; ?>
</head>
<body>
	<?php require_once 'componentes/navbar.php'; ?>
	<div class="container" id="signup">
		<h3>Registration</h3>
		<form method="post" action="index.php" name="signup">
			<div class="form-group">
				<label for="inputName">Nombre</label>
				<input type="text" name="nameReg" autocomplete="off" id="inputName" class="form-control" placeholder="Nombre">
			</div>
			<div class="form-group">
				<label for="inputLastname">Apellido</label>
				<input type="text" name="lastnameReg" autocomplete="off" id="inputLastname" class="form-control" placeholder="Apellido">
			</div>
				
			<div class="form-group">
				<label for="inputEmail">Email</label>
				<input type="text" name="emailReg" autocomplete="off" id="inputEmail" class="form-control" placeholder="Email">
			</div>

			<div class="form-group">
				<label for="selectSector">Sector</label>
				<select class="form-control" id="selectSector" name="areaReg">
					<option value="web">Web</option>
					<option value="produccion">Producción</option>
					<option value="camaras">Cámaras</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>

			<div class="form-group">
				<label for="inputPassword">Password</label>
				<input type="password" name="passwordReg" autocomplete="off" id="inputPassword" class="form-control" placeholder="Contraseña">
			</div>
				<div class="errorMsg"><?php echo ($_POST) ? $errorMsgReg : ''; ?></div>
				<input type="submit" class="button btn btn-primary" name="signupSubmit" value="Signup">
		</form>
	</div>

<?php require_once 'scripts/bootstrap_scripts.php'; ?>
</body>
</html>