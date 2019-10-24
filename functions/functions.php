<?php
function calificacion($valor)
{
	if ($valor == 0) {
		return "N/A";
	} else if ($valor < 3) {
		return "Malo";
	} else if ($valor < 3.5) {
		return "Regular";
	} else if ($valor < 4) {
		return "Bueno";
	} else {
		return "Muy bueno";
	}
}

?>