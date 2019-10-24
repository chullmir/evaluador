<form action="evaluar.php" method="post">
	<input type="hidden" name="uid" value="<?= $uid ?>">
	<input type="hidden" name="evalua" value="<?= $_SESSION['uid'] ?>">
	<h2>Mes</h2>
	<p><?= date("m") ?></p>
	<input type="hidden" name="year" id="year" value="<?= date("y") ?>">
	<input type="hidden" name="month" id="month" value="<?= date("m") ?>">

	<h2>Desempeño</h2>

	<p class="pregunta">¿Es flexible ante los cambios?</p>

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

	<p class="pregunta">¿Muetra predisposición y colaboración?</p>

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

	<p class="pregunta">Autonomía. ¿Tiene capacidad y recursos en la resolución de problemas?</p>

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

	<p class="pregunta">¿Tiene capacidad de liderazgo?</p>

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

	<p class="pregunta">¿Tiene buena capacidad de comunicación?</p>

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

	<p class="pregunta">¿Tiene buena relación con sus pares y sus superiores?</p>

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

	<p class="pregunta">¿Tiene buena relación con los miembros de su equipo?</p>

	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno7" id="desempeno7Radio1" value="1" required>
		<label class="form-check-label" for="desempeno7Radio1">1</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno7" id="desempeno7Radio2" value="2" required>
		<label class="form-check-label" for="desempeno7Radio2">2</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno7" id="desempeno7Radio3" value="3" required>
		<label class="form-check-label" for="desempeno7Radio3">3</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno7" id="desempeno7Radio4" value="4" required>
		<label class="form-check-label" for="desempeno7Radio4">4</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno7" id="desempeno7Radio5" value="5" required>
		<label class="form-check-label" for="desempeno7Radio5">5</label>
	</div>

	<p class="pregunta">¿Tiene buen criterio editorial?</p>

	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno8" id="desempeno8Radio1" value="1" required>
		<label class="form-check-label" for="desempeno8Radio1">1</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno8" id="desempeno8Radio2" value="2" required>
		<label class="form-check-label" for="desempeno8Radio2">2</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno8" id="desempeno8Radio3" value="3" required>
		<label class="form-check-label" for="desempeno8Radio3">3</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno8" id="desempeno8Radio4" value="4" required>
		<label class="form-check-label" for="desempeno8Radio4">4</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno8" id="desempeno8Radio5" value="5" required>
		<label class="form-check-label" for="desempeno8Radio5">5</label>
	</div>

	<p class="pregunta">¿Es riguroso?</p>

	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno9" id="desempeno9Radio1" value="1" required>
		<label class="form-check-label" for="desempeno9Radio1">1</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno9" id="desempeno9Radio2" value="2" required>
		<label class="form-check-label" for="desempeno9Radio2">2</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno9" id="desempeno9Radio3" value="3" required>
		<label class="form-check-label" for="desempeno9Radio3">3</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno9" id="desempeno9Radio4" value="4" required>
		<label class="form-check-label" for="desempeno9Radio4">4</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno9" id="desempeno9Radio5" value="5" required>
		<label class="form-check-label" for="desempeno9Radio5">5</label>
	</div>

	<p class="pregunta">¿Es creativo?</p>

	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno10" id="desempeno10Radio1" value="1" required>
		<label class="form-check-label" for="desempeno10Radio1">1</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno10" id="desempeno10Radio2" value="2" required>
		<label class="form-check-label" for="desempeno10Radio2">2</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno10" id="desempeno10Radio3" value="3" required>
		<label class="form-check-label" for="desempeno10Radio3">3</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno10" id="desempeno10Radio4" value="4" required>
		<label class="form-check-label" for="desempeno10Radio4">4</label>
	</div>
	<div class="form-check form-check-inline">
		<input class="form-check-input" type="radio" name="desempeno10" id="desempeno10Radio5" value="5" required>
		<label class="form-check-label" for="desempeno10Radio5">5</label>
	</div>



	
	<br>
	<input type="submit" class="btn btn-primary" name="encuestaPlantilla5Submit" value="Enviar">
</form>