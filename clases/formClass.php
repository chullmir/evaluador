<?php
class formClass{
	public function storeEncuestaWeb($POST)
	{
		try {
		$conn = getDB();
		// $conn = new PDO("mysql:host=$dbhost;dbname=$db",$dbuser,$dbpass);
		// set the PDO error mode to exception
		// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("INSERT INTO evaluacion_redactores (uidUser, uidEvalua, year, month, actitud1, actitud2, actitud3, redaccion1, redaccion2, redaccion3, redaccion4, rigurosidad1, rigurosidad2) VALUES (:uid, :evalua, :year, :month, :actitud1, :actitud2, :actitud3, :redaccion1, :redaccion2, :redaccion3, :redaccion4, :rigurosidad1, :rigurosidad2)");
		$stmt->bindParam(':uid',$POST['uid']);
		$stmt->bindParam(':evalua',$POST['evalua']);
		$stmt->bindParam(':year',$POST['year']);
		$stmt->bindParam(':month',$POST['month']);
		$stmt->bindParam(':actitud1',$POST['actitud1']);
		$stmt->bindParam(':actitud2',$POST['actitud2']);
		$stmt->bindParam(':actitud3',$POST['actitud3']);
		$stmt->bindParam(':redaccion1',$POST['redaccion1']);
		$stmt->bindParam(':redaccion2',$POST['redaccion2']);
		$stmt->bindParam(':redaccion3',$POST['redaccion3']);
		$stmt->bindParam(':redaccion4',$POST['redaccion4']);
		$stmt->bindParam(':rigurosidad1',$POST['rigurosidad1']);
		$stmt->bindParam(':rigurosidad2',$POST['rigurosidad2']);
		$stmt->execute();
		// $conn->exec($sql);
		// echo "Registro guardado exitosamente";
	}
	catch(PDOException $e)
	{
		echo '{"error":{"text":'. $e->getMessage() .'}}';
	}
	$conn = null;
	}


	public function yaEvaluadoWeb($uid,$evalua)
	{
		$year = date("y");
		$month = date("m");
		$db = getDB();
		$stmt = $db->prepare("SELECT month FROM evaluacion_redactores WHERE (uidUser = :uid AND uidEvalua = :evalua AND year = :year AND month = :month)");
		$stmt->bindParam("uid",$uid);
		$stmt->bindParam("evalua",$evalua);
		$stmt->bindParam("year",$year);
		$stmt->bindParam("month",$month);
		$stmt->execute();
		$count=$stmt->rowCount();
		$data=$stmt->fetch(PDO::FETCH_OBJ);
		if ($count) {
			return true;
		} else {
			return false;
		}

	}


	public function storeEncuestaPlantilla1($POST)
	{
		try {
		$conn = getDB();
		// $conn = new PDO("mysql:host=$dbhost;dbname=$db",$dbuser,$dbpass);
		// set the PDO error mode to exception
		// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("INSERT INTO evaluacion_redactores (uidUser, uidEvalua, year, month, actitud1, actitud2, actitud3, redaccion1, redaccion2, redaccion3, redaccion4, rigurosidad1, rigurosidad2) VALUES (:uid, :evalua, :year, :month, :actitud1, :actitud2, :actitud3, :redaccion1, :redaccion2, :redaccion3, :redaccion4, :rigurosidad1, :rigurosidad2)");
		$stmt->bindParam(':uid',$POST['uid']);
		$stmt->bindParam(':evalua',$POST['evalua']);
		$stmt->bindParam(':year',$POST['year']);
		$stmt->bindParam(':month',$POST['month']);
		$stmt->bindParam(':actitud1',$POST['actitud1']);
		$stmt->bindParam(':actitud2',$POST['actitud2']);
		$stmt->bindParam(':actitud3',$POST['actitud3']);
		$stmt->bindParam(':redaccion1',$POST['redaccion1']);
		$stmt->bindParam(':redaccion2',$POST['redaccion2']);
		$stmt->bindParam(':redaccion3',$POST['redaccion3']);
		$stmt->bindParam(':redaccion4',$POST['redaccion4']);
		$stmt->bindParam(':rigurosidad1',$POST['rigurosidad1']);
		$stmt->bindParam(':rigurosidad2',$POST['rigurosidad2']);
		$stmt->execute();
		// $conn->exec($sql);
		// echo "Registro guardado exitosamente";
	}
	catch(PDOException $e)
	{
		echo '{"error":{"text":'. $e->getMessage() .'}}';
	}
	$conn = null;
	}
	// public function 
}

