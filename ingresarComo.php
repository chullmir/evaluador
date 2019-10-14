<?php 
if (!empty($_POST)) {
	require_once 'functions/config.php';
	require_once 'clases/userClass.php';
	$usuario = new userClass();
	$emailLogin = $_POST['email'];
	// var_dump($emailLogin);

	$uid=$usuario->userLogin($emailLogin);


	header("Location:index.php");
}
 ?>

<form action="" method="post">
	<input type="email" name="email">
	<input type="submit" value="Ingresar">
</form>