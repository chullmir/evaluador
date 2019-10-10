<?php 
if (!empty($_POST)) {
	require_once 'functions/config.php';
	require_once 'clases/userClass.php';
	$usuario = new userClass();
	$emailLogin = $_POST['email'];
	// var_dump($emailLogin);


	$db = getDB();
	$stmt = $db->prepare("SELECT * FROM users WHERE email='".$emailLogin."'"); 
	// $stmt->bindParam("email", $emailLogin,PDO::PARAM_INT);
	$stmt->execute();
	$data = $stmt->fetch(PDO::FETCH_OBJ); //User data
	
	var_dump($data->name);		





	// $datosIngreso = $usuario->userDataByEmail($email);
	// echo "<pre>";
	// var_dump($data);
	// var_dump($_SESSION);
	// echo "</pre>";
	// if (!empty($loginData)) {
		$_SESSION["name"] = $data->name;
		$_SESSION["lastname"] = $data->lastname;
		$_SESSION["email"] = $data->email;
		$_SESSION["web"] = $data->web;
		$_SESSION["produccionTn"] = $data->produccionTn;
		$_SESSION["programasTn"] = $data->programasTn;
		$_SESSION["arribaArgentinos"] = $data->arribaArgentinos;
		$_SESSION["noti13"] = $data->noti13;
		$_SESSION["telenoche"] = $data->telenoche;
		$_SESSION["sintesis"] = $data->sintesis;
		$_SESSION["cronista"] = $data->cronista;
		$_SESSION["conduColum"] = $data->conduColum;
		$_SESSION["deportes"] = $data->deportes;
		$_SESSION["prodEsp"] = $data->prodEsp;
		$_SESSION["peJefes"] = $data->peJefes;
		$_SESSION["camaras"] = $data->camaras;
		$_SESSION["edicion"] = $data->edicion;
		$_SESSION["directores"] = $data->directores;
		$_SESSION["promociones"] = $data->promociones;
		$_SESSION["archivo"] = $data->archivo;
		$_SESSION["ingestaSat"] = $data->ingestaSat;
		$_SESSION["can"] = $data->can;
		$_SESSION["mesa"] = $data->mesa;
		$_SESSION["administracion"] = $data->administracion;
		$_SESSION["profile"] = $data->profile;
	// }

	header("Location:index.php");
}
 ?>

<form action="" method="post">
	<input type="email" name="email">
	<input type="submit" value="Ingresar">
</form>