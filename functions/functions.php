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

function plantilla($sector)
{
	switch ($sector) {
		case 'Redactor Web':
			return "Plantilla Web";
			break;
		case 'Prod TN':
			return "Plantilla1";
			break;
		case 'Pgms TN':
			return "Plantilla1";
			break;
		case 'Arriba':
			return "Plantilla1";
			break;
		case 'Noti 13':
			return "Plantilla1";
			break;
		case 'Telenoche':
			return "Plantilla1";
			break;
		case 'Sintesis':
			return "Plantilla1";
			break;
		case 'Cronistas':
			return "Plantilla1";
			break;
		case 'Conduc Column':
			return "Plantilla1";
			break;
		case 'Deportes':
			return "Plantilla1";
			break;
		case 'Prod Esp':
			return "Plantilla1";
			break;
		case 'Camaras':
			return "Plantilla2";
			break;
		case 'Edicion':
			return "Plantilla2";
			break;
		case 'Directores':
			return "Plantilla2";
			break;
		case 'Promociones':
			return "Plantilla2";
			break;
		case 'Archivo':
			return "Plantilla3";
			break;
		case 'Ingesta SAT':
			return "Plantilla3";
			break;
		case 'CAN':
			return "Plantilla3";
			break;
		case 'Mesa':
			return "Plantilla4";
			break;
		case 'Administracion':
			return "Plantilla4";
			break;
		case 'PE y Jefes':
			return "Plantilla5";
			break;
		default:
			return "Falla";
			break;
	}
}

?>