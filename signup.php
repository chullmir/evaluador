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
				<label for="inputLastname">Apellido</label>
				<input type="text" name="lastnameReg" autocomplete="off" id="inputLastname" class="form-control" placeholder="Apellido">
				<label for="inputEmail">Email</label>
				<input type="text" name="emailReg" autocomplete="off" id="inputEmail" class="form-control" placeholder="Email">
				<label for="inputPassword">Password</label>
				<input type="password" name="passwordReg" autocomplete="off" id="inputPassword" class="form-control" placeholder="Contraseña">
				<div class="errorMsg"><?php echo ($_POST) ? $errorMsgReg : ''; ?></div>
				<input type="submit" class="button btn btn-primary" name="signupSubmit" value="Signup">
			</div>
		</form>
	</div>

<?php require_once 'scripts/bootstrap_scripts.php'; ?>
</body>
</html>