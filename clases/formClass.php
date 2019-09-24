<?php
class formClass{
	public function encuestaWeb($evalua,$evaluado,$mes,$actitud1,$actitud2,$actitud3,$redaccion1,$redaccion2,$redaccion3,$redaccion4,$rigurosidad1,$rigurosidad2)
	{
		try {
		$conn = getDB();
		// $conn = new PDO("mysql:host=$dbhost;dbname=$db",$dbuser,$dbpass);
		// set the PDO error mode to exception
		// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("INSERT INTO evaluacion_redactores (evalua, evaluado, mes, actitud1, actitud2, actitud3, redaccion1, redaccion2, redaccion3, redaccion4, rigurosidad1, rigurosidad2) VALUES (:nombre, :redactor, :mes, :actitud1, :actitud2, :actitud3, :redaccion1, :redaccion2, :redaccion3, :redaccion4, :rigurosidad1, :rigurosidad2)");
		$stmt->bindParam(':nombre',$evalua);
		$stmt->bindParam(':redactor',$evaluado);
		$stmt->bindParam(':mes',$mes);
		$stmt->bindParam(':actitud1',$actitud1);
		$stmt->bindParam(':actitud2',$actitud2);
		$stmt->bindParam(':actitud3',$actitud3);
		$stmt->bindParam(':redaccion1',$redaccion1);
		$stmt->bindParam(':redaccion2',$redaccion2);
		$stmt->bindParam(':redaccion3',$redaccion3);
		$stmt->bindParam(':redaccion4',$redaccion4);
		$stmt->bindParam(':rigurosidad1',$rigurosidad1);
		$stmt->bindParam(':rigurosidad2',$rigurosidad2);
		$stmt->execute();
		// $conn->exec($sql);
		echo "Registro guardado exitosamente";
	}
	catch(PDOException $e)
	{
		echo '{"error":{"text":'. $e->getMessage() .'}}';
	}
	$conn = null;
	}
}

