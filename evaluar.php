<?php 
require_once 'functions/config.php';
require_once 'clases/formClass.php';
require_once 'clases/evaluadosClass.php';
if (empty($_SESSION)) {
	header("Location: index.php");
}
$sectores = $_SESSION['sector'];
$pageTitle = "Evaluar";
$evaluadosClass = new evaluadosClass();
$data = $evaluadosClass->evaluadosBySector('Prod TN');
// echo "<pre>";
// var_dump($data);
// echo "</pre>";

// $formClass = new formClass();

// if ($_POST) {

// 	if (!empty($_POST['encuestaWebSubmit'])) {
// 		$nombre = $_SESSION['name'];
// 		$evaluado = $_POST['redactor'];
// 		$mes = $_POST['mes'];
// 		$actitud1 = $_POST['actitud1'];
// 		$actitud2 = $_POST['actitud2'];
// 		$actitud3 = $_POST['actitud3'];
// 		$redaccion1 = $_POST['redaccion1'];
// 		$redaccion2 = $_POST['redaccion2'];
// 		$redaccion3 = $_POST['redaccion3'];
// 		$redaccion4 = $_POST['redaccion4'];
// 		$rigurosidad1 = $_POST['rigurosidad1'];
// 		$rigurosidad2 = $_POST['rigurosidad2'];

// 		$id=$formClass->encuestaWeb($nombre,$evaluado,$mes,$actitud1,$actitud2,$actitud3,$redaccion1,$redaccion2,$redaccion3,$redaccion4,$rigurosidad1,$rigurosidad2);
// 	} elseif (!empty($_POST['encuestaCamarasSubmit'])) {
// 		# code...
// 	}
// }

// $db = getDB();
// $stmt = $db->prepare("
// 	SELECT *
// 	FROM users
// 	WHERE profile = 'redactor';
// 	");
// $stmt->execute();
// $data=$stmt->fetchAll(PDO::FETCH_OBJ);



// echo "<pre>";
// // var_dump($data);
// var_dump($_SESSION);
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

		<h2>Personas</h2>
		<a href=""></a>
		<?php
		foreach ($sectores as $sector) {
			$personas = $evaluadosClass->evaluadosBySector($sector);

			foreach ($personas as $persona) {
				echo '<li><a href="encuesta.php?uid='.$persona->uid.'">';
				echo $persona->name." ".$persona->lastname." (".$persona->sector.")";
				echo '</a></li>';

			}
			
		} 


		?>




		

	</div>

	
	<?php require_once 'functions/bootstrap_scripts.php'; ?>
</body>
</html>