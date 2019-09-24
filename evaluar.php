<?php 
session_start();
if (empty($_SESSION)) {
	header("Location: index.php");
}
$pageTitle = "Evaluar";

// if ($_POST) {
// 	$nombre = "Prueba";

// 	$dbhost="localhost";
// 	$dbuser="root";
// 	$dbpass="";
// 	$db="tn";

// 	try {
// 		$conn = new PDO("mysql:host=$dbhost;dbname=$db",$dbuser,$dbpass);
// 		// set the PDO error mode to exception
// 		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 		$stmt = $conn->prepare("INSERT INTO evaluacion_redactores (evalua, evaluado, mes, actitud1, actitud2, actitud3, redaccion1, redaccion2, redaccion3, redaccion4, rigurosidad1, rigurosidad2) VALUES (:nombre, :redactor, :mes, :actitud1, :actitud2, :actitud3, :redaccion1, :redaccion2, :redaccion3, :redaccion4, :rigurosidad1, :rigurosidad2)");
// 		$stmt->bindParam(':nombre',$nombre);
// 		$stmt->bindParam(':redactor',$_POST["redactor"]);
// 		$stmt->bindParam(':mes',$_POST["mes"]);
// 		$stmt->bindParam(':actitud1',$_POST["actitud1"]);
// 		$stmt->bindParam(':actitud2',$_POST["actitud2"]);
// 		$stmt->bindParam(':actitud3',$_POST["actitud3"]);
// 		$stmt->bindParam(':redaccion1',$_POST["redaccion1"]);
// 		$stmt->bindParam(':redaccion2',$_POST["redaccion2"]);
// 		$stmt->bindParam(':redaccion3',$_POST["redaccion3"]);
// 		$stmt->bindParam(':redaccion4',$_POST["redaccion4"]);
// 		$stmt->bindParam(':rigurosidad1',$_POST["rigurosidad1"]);
// 		$stmt->bindParam(':rigurosidad2',$_POST["rigurosidad2"]);
// 		$stmt->execute();
// 		// $conn->exec($sql);
// 		echo "Registro guardado exitosamente";
// 	}
// 	catch(PDOException $e)
// 	{
// 		echo $sql . "<br>" . $e->getMessage();
// 	}
// 	$conn = null;
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once 'componentes/head.php'; ?>
</head>
<body>
	<?php require_once 'componentes/navbar.php'; ?>
	<div class="container">
		<h2>Evaluador: <?= $_SESSION['name'] ?></h2>
		<h2>Sector: <?= $_SESSION['area'] ?></h2>

		<?php if ($_SESSION['area'] == "web"): ?>
			<?php require_once 'encuestas/encuesta_web.php'; ?>
		<?php endif ?>
		<?php if ($_SESSION['area'] == "otro"): ?>
			<?php echo "Encuesta Otro" ?>
		<?php endif ?>


	</div>

	
	
</body>
</html>