<?php
echo "<br>";
require_once 'functions/db_connection.php';
echo "<br>";

$sql = "INSERT INTO evaluacion_redactores (evalua, evaluado, mes, actitud1, actitud2, actitud3, redaccion1, redaccion2, redaccion3, redaccion4, rigurosidad1, rigurosidad2) VALUES ('nombre', 'redactor', 'mes', )";


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Evaluar</title>
</head>
<body>
	
	<?php require_once 'componentes/navbar.php'; ?>

	<div class="container evaluar">
		<h2>Bienvenid@ [NOMBRE]</h2>
		
		<form method="post">
		
			<div class="form-group">
				<label for="redactor">Elija un Redactor:</label>
				<select class="form-control" name="redactor" id="redactor">
					<option>Redactor 1</option>
					<option>Redactor 2</option>
					<option>Redactor 3</option>
					<option>Redactor 4</option>
					<option>Redactor 5</option>
				</select>
			</div>
			<div class="form-group">
				<label for="mes">Mes</label>
				<input type="number" class="form-control" name="mes" id="mes" value="8">
			</div>
			<h2>Actitud</h2>
			<p class="pregunta">¿Reacciona rápido ante los pedidos de un editor?</p>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="actitud1" id="actitud1Radio1" value="1" required>
				<label class="form-check-label" for="actitud1Radio1">1</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="actitud1" id="actitud1Radio2" value="2" required>
				<label class="form-check-label" for="actitud1Radio2">2</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="actitud1" id="actitud1Radio3" value="3" required>
				<label class="form-check-label" for="actitud1Radio3">3</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="actitud1" id="actitud1Radio4" value="4" required>
				<label class="form-check-label" for="actitud1Radio4">4</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="actitud1" id="actitud1Radio5" value="5" required>
				<label class="form-check-label" for="actitud1Radio5">5</label>
			</div>

			<p class="pregunta">¿Es proactivo ante situaciones de Breaking News?</p>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="actitud2" id="actitud2Radio1" value="1" required>
				<label class="form-check-label" for="actitud2Radio1">1</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="actitud2" id="actitud2Radio2" value="2" required>
				<label class="form-check-label" for="actitud2Radio2">2</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="actitud2" id="actitud2Radio3" value="3" required>
				<label class="form-check-label" for="actitud2Radio3">3</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="actitud2" id="actitud2Radio4" value="4" required>
				<label class="form-check-label" for="actitud2Radio4">4</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="actitud2" id="actitud2Radio5" value="5" required>
				<label class="form-check-label" for="actitud2Radio5">5</label>
			</div>

			<p class="pregunta">¿Interactúa y colabora con el resto del equipo?</p>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="actitud3" id="actitud3Radio1" value="1" required>
				<label class="form-check-label" for="actitud3Radio1">1</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="actitud3" id="actitud3Radio2" value="2" required>
				<label class="form-check-label" for="actitud3Radio2">2</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="actitud3" id="actitud3Radio3" value="3" required>
				<label class="form-check-label" for="actitud3Radio3">3</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="actitud3" id="actitud3Radio4" value="4" required>
				<label class="form-check-label" for="actitud3Radio4">4</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="actitud3" id="actitud3Radio5" value="5" required>
				<label class="form-check-label" for="actitud3Radio5">5</label>
			</div>

			<h2>Redacción</h2>
			<p class="pregunta">¿Tiene recursos narrativos?</p>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion1" id="redaccion1Radio1" value="1" required>
				<label class="form-check-label" for="redaccion1Radio1">1</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion1" id="redaccion1Radio2" value="2" required>
				<label class="form-check-label" for="redaccion1Radio2">2</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion1" id="redaccion1Radio3" value="3" required>
				<label class="form-check-label" for="redaccion1Radio3">3</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion1" id="redaccion1Radio4" value="4" required>
				<label class="form-check-label" for="redaccion1Radio4">4</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion1" id="redaccion1Radio5" value="5" required>
				<label class="form-check-label" for="redaccion1Radio5">5</label>
			</div>

			<p class="pregunta">¿Utiliza recursos multimedia?</p>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion2" id="redaccion2Radio1" value="1" required>
				<label class="form-check-label" for="redaccion2Radio1">1</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion2" id="redaccion2Radio2" value="2" required>
				<label class="form-check-label" for="redaccion2Radio2">2</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion2" id="redaccion2Radio3" value="3" required>
				<label class="form-check-label" for="redaccion2Radio3">3</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion2" id="redaccion2Radio4" value="4" required>
				<label class="form-check-label" for="redaccion2Radio4">4</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion2" id="redaccion2Radio5" value="5" required>
				<label class="form-check-label" for="redaccion2Radio5">5</label>
			</div>

			<p class="pregunta">¿Escribe sin errores de tipeo?</p>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion3" id="redaccion3Radio1" value="1" required>
				<label class="form-check-label" for="redaccion3Radio1">1</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion3" id="redaccion3Radio2" value="2" required>
				<label class="form-check-label" for="redaccion3Radio2">2</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion3" id="redaccion3Radio3" value="3" required>
				<label class="form-check-label" for="redaccion3Radio3">3</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion3" id="redaccion3Radio4" value="4" required>
				<label class="form-check-label" for="redaccion3Radio4">4</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion3" id="redaccion3Radio5" value="5" required>
				<label class="form-check-label" for="redaccion3Radio5">5</label>
			</div>

			<p class="pregunta">¿Escribe sin errores de sintaxis?</p>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion4" id="redaccion4Radio1" value="1" required>
				<label class="form-check-label" for="redaccion4Radio1">1</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion4" id="redaccion4Radio2" value="2" required>
				<label class="form-check-label" for="redaccion4Radio2">2</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion4" id="redaccion4Radio3" value="3" required>
				<label class="form-check-label" for="redaccion4Radio3">3</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion4" id="redaccion4Radio4" value="4" required>
				<label class="form-check-label" for="redaccion4Radio4">4</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="redaccion4" id="redaccion4Radio5" value="5" required>
				<label class="form-check-label" for="redaccion4Radio5">5</label>
			</div>

			<h2>Rigurosidad</h2>

			<p class="pregunta">¿Rechequea datos / información antes de publicar?</p>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="rigurosidad1" id="rigurosidad1Radio1" value="1" required>
				<label class="form-check-label" for="rigurosidad1Radio1">1</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="rigurosidad1" id="rigurosidad1Radio2" value="2" required>
				<label class="form-check-label" for="rigurosidad1Radio2">2</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="rigurosidad1" id="rigurosidad1Radio3" value="3" required>
				<label class="form-check-label" for="rigurosidad1Radio3">3</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="rigurosidad1" id="rigurosidad1Radio4" value="4" required>
				<label class="form-check-label" for="rigurosidad1Radio4">4</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="rigurosidad1" id="rigurosidad1Radio5" value="5" required>
				<label class="form-check-label" for="rigurosidad1Radio5">5</label>
			</div>

			<p class="pregunta">¿Las fuentes o partes involucradas en la noticia están citadas y bien distinguidas?</p>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="rigurosidad2" id="rigurosidad2Radio1" value="1" required>
				<label class="form-check-label" for="rigurosidad2Radio1">1</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="rigurosidad2" id="rigurosidad2Radio2" value="2" required>
				<label class="form-check-label" for="rigurosidad2Radio2">2</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="rigurosidad2" id="rigurosidad2Radio3" value="3" required>
				<label class="form-check-label" for="rigurosidad2Radio3">3</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="rigurosidad2" id="rigurosidad2Radio4" value="4" required>
				<label class="form-check-label" for="rigurosidad2Radio4">4</label>
			</div>
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="rigurosidad2" id="rigurosidad2Radio5" value="5" required>
				<label class="form-check-label" for="rigurosidad2Radio5">5</label>
			</div>
			
			<br>
			<input type="submit" class="btn btn-primary" value="Enviar">


		</form>




	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>