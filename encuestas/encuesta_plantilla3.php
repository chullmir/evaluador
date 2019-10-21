<form action="evaluar.php" method="post">
	<input type="hidden" name="uid" value="<?= $uid ?>">
	<input type="hidden" name="evalua" value="<?= $_SESSION['uid'] ?>">
	<h2>Mes</h2>
	<p><?= date("m") ?></p>
	<input type="hidden" name="year" id="year" value="<?= date("y") ?>">
	<input type="hidden" name="month" id="month" value="<?= date("m") ?>">

	<?php require_once 'encuesta_actitud.php'; ?>

	<h2>Desempeño</h2>

	<p class="pregunta">¿Está informado?</p>

	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno1" id="desempeno1Radio1" value="1" required>
		<label class="form-check-label" for="desempeno1Radio1">1</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno1" id="desempeno1Radio2" value="2" required>
		<label class="form-check-label" for="desempeno1Radio2">2</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno1" id="desempeno1Radio3" value="3" required>
		<label class="form-check-label" for="desempeno1Radio3">3</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno1" id="desempeno1Radio4" value="4" required>
		<label class="form-check-label" for="desempeno1Radio4">4</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno1" id="desempeno1Radio5" value="5" required>
		<label class="form-check-label" for="desempeno1Radio5">5</label>
	</div>

	<p class="pregunta">¿Es rápido y eficaz?</p>

	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno2" id="desempeno2Radio1" value="1" required>
		<label class="form-check-label" for="desempeno2Radio1">1</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno2" id="desempeno2Radio2" value="2" required>
		<label class="form-check-label" for="desempeno2Radio2">2</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno2" id="desempeno2Radio3" value="3" required>
		<label class="form-check-label" for="desempeno2Radio3">3</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno2" id="desempeno2Radio4" value="4" required>
		<label class="form-check-label" for="desempeno2Radio4">4</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno2" id="desempeno2Radio5" value="5" required>
		<label class="form-check-label" for="desempeno2Radio5">5</label>
	</div>

	<p class="pregunta">¿Resuelve creativamente en los pedidos de materiales?</p>

	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno3" id="desempeno3Radio1" value="1" required>
		<label class="form-check-label" for="desempeno3Radio1">1</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno3" id="desempeno3Radio2" value="2" required>
		<label class="form-check-label" for="desempeno3Radio2">2</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno3" id="desempeno3Radio3" value="3" required>
		<label class="form-check-label" for="desempeno3Radio3">3</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno3" id="desempeno3Radio4" value="4" required>
		<label class="form-check-label" for="desempeno3Radio4">4</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno3" id="desempeno3Radio5" value="5" required>
		<label class="form-check-label" for="desempeno3Radio5">5</label>
	</div>

	<p class="pregunta">¿Realiza la ingesta con rapidez y calidad, cargando los metadatos?</p>

	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno4" id="desempeno4Radio1" value="1" required>
		<label class="form-check-label" for="desempeno4Radio1">1</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno4" id="desempeno4Radio2" value="2" required>
		<label class="form-check-label" for="desempeno4Radio2">2</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno4" id="desempeno4Radio3" value="3" required>
		<label class="form-check-label" for="desempeno4Radio3">3</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno4" id="desempeno4Radio4" value="4" required>
		<label class="form-check-label" for="desempeno4Radio4">4</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno4" id="desempeno4Radio5" value="5" required>
		<label class="form-check-label" for="desempeno4Radio5">5</label>
	</div>

	<p class="pregunta">¿Tiene capacidad para resolver problemas técnicos​​?</p>

	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno5" id="desempeno5Radio1" value="1" required>
		<label class="form-check-label" for="desempeno5Radio1">1</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno5" id="desempeno5Radio2" value="2" required>
		<label class="form-check-label" for="desempeno5Radio2">2</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno5" id="desempeno5Radio3" value="3" required>
		<label class="form-check-label" for="desempeno5Radio3">3</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno5" id="desempeno5Radio4" value="4" required>
		<label class="form-check-label" for="desempeno5Radio4">4</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno5" id="desempeno5Radio5" value="5" required>
		<label class="form-check-label" for="desempeno5Radio5">5</label>
	</div>

	<p class="pregunta">Conocimiento y uso de sus herramientas</p>

	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno6" id="desempeno6Radio1" value="1" required>
		<label class="form-check-label" for="desempeno6Radio1">1</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno6" id="desempeno6Radio2" value="2" required>
		<label class="form-check-label" for="desempeno6Radio2">2</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno6" id="desempeno6Radio3" value="3" required>
		<label class="form-check-label" for="desempeno6Radio3">3</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno6" id="desempeno6Radio4" value="4" required>
		<label class="form-check-label" for="desempeno6Radio4">4</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno6" id="desempeno6Radio5" value="5" required>
		<label class="form-check-label" for="desempeno6Radio5">5</label>
	</div>

	
	<br>
	<input type="submit" class="btn btn-primary" name="encuestaPlantilla3Submit" value="Enviar">
</form>