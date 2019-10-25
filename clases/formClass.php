<?php
class formClass{
	public function storeEncuestaWeb($POST)
	{
		try {
		$conn = getDB();
		$quarter = ceil(date("m")/4);
		$stmt = $conn->prepare("INSERT INTO evaluacion_redactores (uidUser, uidEvalua, year, month, quarter, actitud1, actitud2, actitud3, redaccion1, redaccion2, redaccion3, redaccion4, rigurosidad1, rigurosidad2) VALUES (:uid, :evalua, :year, :month, :quarter, :actitud1, :actitud2, :actitud3, :redaccion1, :redaccion2, :redaccion3, :redaccion4, :rigurosidad1, :rigurosidad2)");
		$stmt->bindParam(':uid',$POST['uid']);
		$stmt->bindParam(':evalua',$POST['evalua']);
		$stmt->bindParam(':year',$POST['year']);
		$stmt->bindParam(':month',$POST['month']);
		$stmt->bindParam(':quarter',$quarter);
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
		$quarter = ceil(date("m")/4);
		$db = getDB();
		$stmt = $db->prepare("SELECT quarter FROM evaluacion_redactores WHERE (uidUser = :uid AND uidEvalua = :evalua AND year = :year AND quarter = :quarter)");
		$stmt->bindParam("uid",$uid);
		$stmt->bindParam("evalua",$evalua);
		$stmt->bindParam("year",$year);
		$stmt->bindParam("quarter",$quarter);
		$stmt->execute();
		$count=$stmt->rowCount();
		$data=$stmt->fetch(PDO::FETCH_OBJ);
		if ($count) {
			return true;
		} else {
			return false;
		}

	}
	public function yaEvaluadoPlantilla1($uid,$evalua)
	{
		$year = date("y");
		$quarter = ceil(date("m")/4);
		$db = getDB();
		$stmt = $db->prepare("SELECT quarter FROM evaluacion_plantilla1 WHERE (uidUser = :uid AND uidEvalua = :evalua AND year = :year AND quarter = :quarter)");
		$stmt->bindParam("uid",$uid);
		$stmt->bindParam("evalua",$evalua);
		$stmt->bindParam("year",$year);
		$stmt->bindParam("quarter",$quarter);
		$stmt->execute();
		$count=$stmt->rowCount();
		$data=$stmt->fetch(PDO::FETCH_OBJ);
		if ($count) {
			return true;
		} else {
			return false;
		}

	}
	public function yaEvaluadoPlantilla2($uid,$evalua)
	{
		$year = date("y");
		$quarter = ceil(date("m")/4);
		$db = getDB();
		$stmt = $db->prepare("SELECT quarter FROM evaluacion_plantilla2 WHERE (uidUser = :uid AND uidEvalua = :evalua AND year = :year AND quarter = :quarter)");
		$stmt->bindParam("uid",$uid);
		$stmt->bindParam("evalua",$evalua);
		$stmt->bindParam("year",$year);
		$stmt->bindParam("quarter",$quarter);
		$stmt->execute();
		$count=$stmt->rowCount();
		$data=$stmt->fetch(PDO::FETCH_OBJ);
		if ($count) {
			return true;
		} else {
			return false;
		}

	}
	public function yaEvaluadoPlantilla3($uid,$evalua)
	{
		$year = date("y");
		$quarter = ceil(date("m")/4);
		$db = getDB();
		$stmt = $db->prepare("SELECT quarter FROM evaluacion_plantilla3 WHERE (uidUser = :uid AND uidEvalua = :evalua AND year = :year AND quarter = :quarter)");
		$stmt->bindParam("uid",$uid);
		$stmt->bindParam("evalua",$evalua);
		$stmt->bindParam("year",$year);
		$stmt->bindParam("quarter",$quarter);
		$stmt->execute();
		$count=$stmt->rowCount();
		$data=$stmt->fetch(PDO::FETCH_OBJ);
		if ($count) {
			return true;
		} else {
			return false;
		}

	}
	public function yaEvaluadoPlantilla4($uid,$evalua)
	{
		$year = date("y");
		$quarter = ceil(date("m")/4);
		$db = getDB();
		$stmt = $db->prepare("SELECT quarter FROM evaluacion_plantilla4 WHERE (uidUser = :uid AND uidEvalua = :evalua AND year = :year AND quarter = :quarter)");
		$stmt->bindParam("uid",$uid);
		$stmt->bindParam("evalua",$evalua);
		$stmt->bindParam("year",$year);
		$stmt->bindParam("quarter",$quarter);
		$stmt->execute();
		$count=$stmt->rowCount();
		$data=$stmt->fetch(PDO::FETCH_OBJ);
		if ($count) {
			return true;
		} else {
			return false;
		}

	}
	public function yaEvaluadoPlantilla5($uid,$evalua)
	{
		$year = date("y");
		$quarter = ceil(date("m")/4);
		$db = getDB();
		$stmt = $db->prepare("SELECT quarter FROM evaluacion_plantilla5 WHERE (uidUser = :uid AND uidEvalua = :evalua AND year = :year AND quarter = :quarter)");
		$stmt->bindParam("uid",$uid);
		$stmt->bindParam("evalua",$evalua);
		$stmt->bindParam("year",$year);
		$stmt->bindParam("quarter",$quarter);
		$stmt->execute();
		$count=$stmt->rowCount();
		$data=$stmt->fetch(PDO::FETCH_OBJ);
		if ($count) {
			return true;
		} else {
			return false;
		}

	}
	public function promediosWeb()
	{
		$db = getDB();
		$stmt = $db->prepare("SELECT * FROM evaluacion_redactores WHERE quarter = :quarter");
		$quarter = ceil(date('m') / 4);
		$stmt->bindParam("quarter",$quarter);
		$stmt->execute();
		$count = $stmt->rowCount();
		$data = $stmt->fetchAll();
		if ($count>0) {
			$contador = 0;
			$actitud1 = 0;
			$actitud2 = 0;
			$actitud3 = 0;
			$redaccion1 = 0;
			$redaccion2 = 0;
			$redaccion3 = 0;
			$redaccion4 = 0;
			$rigurosidad1 = 0;
			$rigurosidad2 = 0;
			foreach ($data as $datum) {
				$actitud1 = $actitud1 + $datum['actitud1'];
				$actitud2 = $actitud2 + $datum['actitud2'];
				$actitud3 = $actitud3 + $datum['actitud3'];
				$redaccion1 = $redaccion1 + $datum['redaccion1'];
				$redaccion2 = $redaccion2 + $datum['redaccion2'];
				$redaccion3 = $redaccion3 + $datum['redaccion3'];
				$redaccion4 = $redaccion4 + $datum['redaccion4'];
				$rigurosidad1 = $rigurosidad1 + $datum['rigurosidad1'];
				$rigurosidad2 = $rigurosidad2 + $datum['rigurosidad2'];
				$contador = $contador + 1;
			}
			$datos['actitud1'] = $actitud1 / $contador;
			$datos['actitud2'] = $actitud2 / $contador;
			$datos['actitud3'] = $actitud3 / $contador;
			$datos['redaccion1'] = $redaccion1 / $contador;
			$datos['redaccion2'] = $redaccion2 / $contador;
			$datos['redaccion3'] = $redaccion3 / $contador;
			$datos['redaccion4'] = $redaccion4 / $contador;
			$datos['rigurosidad1'] = $rigurosidad1 / $contador;
			$datos['rigurosidad2'] = $rigurosidad2 / $contador;
		} else {
			$datos['actitud1'] = 0;
			$datos['actitud2'] = 0;
			$datos['actitud3'] = 0;
			$datos['redaccion1'] = 0;
			$datos['redaccion2'] = 0;
			$datos['redaccion3'] = 0;
			$datos['redaccion4'] = 0;
			$datos['rigurosidad1'] = 0;
			$datos['rigurosidad2'] = 0;
		}
		return $datos;
	}

	public function promediosPlantilla1()
	{
		$db = getDB();
		$stmt = $db->prepare("SELECT * FROM evaluacion_plantilla1 WHERE quarter = :quarter");
		$quarter = ceil(date('m') / 4);
		$stmt->bindParam("quarter",$quarter);
		$stmt->execute();
		$count = $stmt->rowCount();
		$data = $stmt->fetchAll();
		if ($count>0) {
			$contador = 0;
			$actitud1 = 0;
			$actitud2 = 0;
			$actitud3 = 0;
			$actitud4 = 0;
			$actitud5 = 0;
			$actitud6 = 0;
			$desempeno1 = 0;
			$desempeno2 = 0;
			$desempeno3 = 0;
			$desempeno4 = 0;
			$desempeno5 = 0;
			$desempeno6 = 0;
			$desempeno7 = 0;
			foreach ($data as $datum) {
				$actitud1 = $actitud1 + $datum['actitud1'];
				$actitud2 = $actitud2 + $datum['actitud2'];
				$actitud3 = $actitud3 + $datum['actitud3'];
				$actitud4 = $actitud4 + $datum['actitud4'];
				$actitud5 = $actitud5 + $datum['actitud5'];
				$actitud6 = $actitud6 + $datum['actitud6'];
				$desempeno1 = $desempeno1 + $datum['desempeno1'];
				$desempeno2 = $desempeno2 + $datum['desempeno2'];
				$desempeno3 = $desempeno3 + $datum['desempeno3'];
				$desempeno4 = $desempeno4 + $datum['desempeno4'];
				$desempeno5 = $desempeno5 + $datum['desempeno5'];
				$desempeno6 = $desempeno6 + $datum['desempeno6'];
				$desempeno7 = $desempeno7 + $datum['desempeno7'];
				$contador = $contador + 1;
			}
			$datos['actitud1'] = $actitud1 / $contador;
			$datos['actitud2'] = $actitud2 / $contador;
			$datos['actitud3'] = $actitud3 / $contador;
			$datos['actitud4'] = $actitud4 / $contador;
			$datos['actitud5'] = $actitud5 / $contador;
			$datos['actitud6'] = $actitud6 / $contador;
			$datos['desempeno1'] = $desempeno1 / $contador;
			$datos['desempeno2'] = $desempeno2 / $contador;
			$datos['desempeno3'] = $desempeno3 / $contador;
			$datos['desempeno4'] = $desempeno4 / $contador;
			$datos['desempeno5'] = $desempeno5 / $contador;
			$datos['desempeno6'] = $desempeno6 / $contador;
			$datos['desempeno7'] = $desempeno7 / $contador;
		} else {
			$datos['actitud1'] = 0;
			$datos['actitud2'] = 0;
			$datos['actitud3'] = 0;
			$datos['actitud4'] = 0;
			$datos['actitud5'] = 0;
			$datos['actitud6'] = 0;
			$datos['desempeno1'] = 0;
			$datos['desempeno2'] = 0;
			$datos['desempeno3'] = 0;
			$datos['desempeno4'] = 0;
			$datos['desempeno5'] = 0;
			$datos['desempeno6'] = 0;
			$datos['desempeno7'] = 0;
		}
		return $datos;
	}

	public function promediosPlantilla2()
	{
		$db = getDB();
		$stmt = $db->prepare("SELECT * FROM evaluacion_plantilla2 WHERE quarter = :quarter");
		$quarter = ceil(date('m') / 4);
		$stmt->bindParam("quarter",$quarter);
		$stmt->execute();
		$count = $stmt->rowCount();
		$data = $stmt->fetchAll();
		if ($count>0) {
			$contador = 0;
			$actitud1 = 0;
			$actitud2 = 0;
			$actitud3 = 0;
			$actitud4 = 0;
			$actitud5 = 0;
			$actitud6 = 0;
			$desempeno1 = 0;
			$desempeno2 = 0;
			$desempeno3 = 0;
			$desempeno4 = 0;
			$desempeno5 = 0;
			foreach ($data as $datum) {
				$actitud1 = $actitud1 + $datum['actitud1'];
				$actitud2 = $actitud2 + $datum['actitud2'];
				$actitud3 = $actitud3 + $datum['actitud3'];
				$actitud4 = $actitud4 + $datum['actitud4'];
				$actitud5 = $actitud5 + $datum['actitud5'];
				$actitud6 = $actitud6 + $datum['actitud6'];
				$desempeno1 = $desempeno1 + $datum['desempeno1'];
				$desempeno2 = $desempeno2 + $datum['desempeno2'];
				$desempeno3 = $desempeno3 + $datum['desempeno3'];
				$desempeno4 = $desempeno4 + $datum['desempeno4'];
				$desempeno5 = $desempeno5 + $datum['desempeno5'];
				$contador = $contador + 1;
			}
			$datos['actitud1'] = $actitud1 / $contador;
			$datos['actitud2'] = $actitud2 / $contador;
			$datos['actitud3'] = $actitud3 / $contador;
			$datos['actitud4'] = $actitud4 / $contador;
			$datos['actitud5'] = $actitud5 / $contador;
			$datos['actitud6'] = $actitud6 / $contador;
			$datos['desempeno1'] = $desempeno1 / $contador;
			$datos['desempeno2'] = $desempeno2 / $contador;
			$datos['desempeno3'] = $desempeno3 / $contador;
			$datos['desempeno4'] = $desempeno4 / $contador;
			$datos['desempeno5'] = $desempeno5 / $contador;
		} else {
			$datos['actitud1'] = 0;
			$datos['actitud2'] = 0;
			$datos['actitud3'] = 0;
			$datos['actitud4'] = 0;
			$datos['actitud5'] = 0;
			$datos['actitud6'] = 0;
			$datos['desempeno1'] = 0;
			$datos['desempeno2'] = 0;
			$datos['desempeno3'] = 0;
			$datos['desempeno4'] = 0;
			$datos['desempeno5'] = 0;
		}
		return $datos;
	}

	public function promediosPlantilla3()
	{
		$db = getDB();
		$stmt = $db->prepare("SELECT * FROM evaluacion_plantilla3 WHERE quarter = :quarter");
		$quarter = ceil(date('m') / 4);
		$stmt->bindParam("quarter",$quarter);
		$stmt->execute();
		$count = $stmt->rowCount();
		$data = $stmt->fetchAll();
		if ($count>0) {
			$contador = 0;
			$actitud1 = 0;
			$actitud2 = 0;
			$actitud3 = 0;
			$actitud4 = 0;
			$actitud5 = 0;
			$actitud6 = 0;
			$desempeno1 = 0;
			$desempeno2 = 0;
			$desempeno3 = 0;
			$desempeno4 = 0;
			$desempeno5 = 0;
			$desempeno6 = 0;
			foreach ($data as $datum) {
				$actitud1 = $actitud1 + $datum['actitud1'];
				$actitud2 = $actitud2 + $datum['actitud2'];
				$actitud3 = $actitud3 + $datum['actitud3'];
				$actitud4 = $actitud4 + $datum['actitud4'];
				$actitud5 = $actitud5 + $datum['actitud5'];
				$actitud6 = $actitud6 + $datum['actitud6'];
				$desempeno1 = $desempeno1 + $datum['desempeno1'];
				$desempeno2 = $desempeno2 + $datum['desempeno2'];
				$desempeno3 = $desempeno3 + $datum['desempeno3'];
				$desempeno4 = $desempeno4 + $datum['desempeno4'];
				$desempeno5 = $desempeno5 + $datum['desempeno5'];
				$desempeno6 = $desempeno6 + $datum['desempeno6'];
				$contador = $contador + 1;
			}
			$datos['actitud1'] = $actitud1 / $contador;
			$datos['actitud2'] = $actitud2 / $contador;
			$datos['actitud3'] = $actitud3 / $contador;
			$datos['actitud4'] = $actitud4 / $contador;
			$datos['actitud5'] = $actitud5 / $contador;
			$datos['actitud6'] = $actitud6 / $contador;
			$datos['desempeno1'] = $desempeno1 / $contador;
			$datos['desempeno2'] = $desempeno2 / $contador;
			$datos['desempeno3'] = $desempeno3 / $contador;
			$datos['desempeno4'] = $desempeno4 / $contador;
			$datos['desempeno5'] = $desempeno5 / $contador;
			$datos['desempeno6'] = $desempeno6 / $contador;
		} else {
			$datos['actitud1'] = 0;
			$datos['actitud2'] = 0;
			$datos['actitud3'] = 0;
			$datos['actitud4'] = 0;
			$datos['actitud5'] = 0;
			$datos['actitud6'] = 0;
			$datos['desempeno1'] = 0;
			$datos['desempeno2'] = 0;
			$datos['desempeno3'] = 0;
			$datos['desempeno4'] = 0;
			$datos['desempeno5'] = 0;
			$datos['desempeno6'] = 0;
		}
		return $datos;
	}

	public function promediosPlantilla4()
	{
		$db = getDB();
		$stmt = $db->prepare("SELECT * FROM evaluacion_plantilla4 WHERE quarter = :quarter");
		$quarter = ceil(date('m') / 4);
		$stmt->bindParam("quarter",$quarter);
		$stmt->execute();
		$count = $stmt->rowCount();
		$data = $stmt->fetchAll();
		if ($count>0) {
			$contador = 0;
			$actitud1 = 0;
			$actitud2 = 0;
			$actitud3 = 0;
			$actitud4 = 0;
			$actitud5 = 0;
			$actitud6 = 0;
			$desempeno1 = 0;
			$desempeno2 = 0;
			$desempeno3 = 0;
			$desempeno4 = 0;
			foreach ($data as $datum) {
				$actitud1 = $actitud1 + $datum['actitud1'];
				$actitud2 = $actitud2 + $datum['actitud2'];
				$actitud3 = $actitud3 + $datum['actitud3'];
				$actitud4 = $actitud4 + $datum['actitud4'];
				$actitud5 = $actitud5 + $datum['actitud5'];
				$actitud6 = $actitud6 + $datum['actitud6'];
				$desempeno1 = $desempeno1 + $datum['desempeno1'];
				$desempeno2 = $desempeno2 + $datum['desempeno2'];
				$desempeno3 = $desempeno3 + $datum['desempeno3'];
				$desempeno4 = $desempeno4 + $datum['desempeno4'];
				$contador = $contador + 1;
			}
			$datos['actitud1'] = $actitud1 / $contador;
			$datos['actitud2'] = $actitud2 / $contador;
			$datos['actitud3'] = $actitud3 / $contador;
			$datos['actitud4'] = $actitud4 / $contador;
			$datos['actitud5'] = $actitud5 / $contador;
			$datos['actitud6'] = $actitud6 / $contador;
			$datos['desempeno1'] = $desempeno1 / $contador;
			$datos['desempeno2'] = $desempeno2 / $contador;
			$datos['desempeno3'] = $desempeno3 / $contador;
			$datos['desempeno4'] = $desempeno4 / $contador;
		} else {
			$datos['actitud1'] = 0;
			$datos['actitud2'] = 0;
			$datos['actitud3'] = 0;
			$datos['actitud4'] = 0;
			$datos['actitud5'] = 0;
			$datos['actitud6'] = 0;
			$datos['desempeno1'] = 0;
			$datos['desempeno2'] = 0;
			$datos['desempeno3'] = 0;
			$datos['desempeno4'] = 0;
		}
		return $datos;
	}

	public function promediosPlantilla5()
	{
		$db = getDB();
		$stmt = $db->prepare("SELECT * FROM evaluacion_plantilla5 WHERE quarter = :quarter");
		$quarter = ceil(date('m') / 4);
		$stmt->bindParam("quarter",$quarter);
		$stmt->execute();
		$count = $stmt->rowCount();
		$data = $stmt->fetchAll();
		if ($count>0) {
			$contador = 0;
			$desempeno1 = 0;
			$desempeno2 = 0;
			$desempeno3 = 0;
			$desempeno4 = 0;
			$desempeno5 = 0;
			$desempeno6 = 0;
			$desempeno7 = 0;
			$desempeno8 = 0;
			$desempeno9 = 0;
			$desempeno10 = 0;
			foreach ($data as $datum) {
				$desempeno1 = $desempeno1 + $datum['desempeno1'];
				$desempeno2 = $desempeno2 + $datum['desempeno2'];
				$desempeno3 = $desempeno3 + $datum['desempeno3'];
				$desempeno4 = $desempeno4 + $datum['desempeno4'];
				$desempeno5 = $desempeno5 + $datum['desempeno5'];
				$desempeno6 = $desempeno6 + $datum['desempeno6'];
				$desempeno7 = $desempeno7 + $datum['desempeno7'];
				$desempeno8 = $desempeno8 + $datum['desempeno8'];
				$desempeno9 = $desempeno9 + $datum['desempeno9'];
				$desempeno10 = $desempeno10 + $datum['desempeno10'];
				$contador = $contador + 1;
			}
			$datos['desempeno1'] = $desempeno1 / $contador;
			$datos['desempeno2'] = $desempeno2 / $contador;
			$datos['desempeno3'] = $desempeno3 / $contador;
			$datos['desempeno4'] = $desempeno4 / $contador;
			$datos['desempeno5'] = $desempeno5 / $contador;
			$datos['desempeno6'] = $desempeno6 / $contador;
			$datos['desempeno7'] = $desempeno7 / $contador;
			$datos['desempeno8'] = $desempeno8 / $contador;
			$datos['desempeno9'] = $desempeno9 / $contador;
			$datos['desempeno10'] = $desempeno10 / $contador;
		} else {
			$datos['desempeno1'] = 0;
			$datos['desempeno2'] = 0;
			$datos['desempeno3'] = 0;
			$datos['desempeno4'] = 0;
			$datos['desempeno5'] = 0;
			$datos['desempeno6'] = 0;
			$datos['desempeno7'] = 0;
			$datos['desempeno8'] = 0;
			$datos['desempeno9'] = 0;
			$datos['desempeno10'] = 0;
		}
		return $datos;
	}


	public function storeEncuestaPlantilla1($POST)
	{
		try {
		$conn = getDB();
		$stmt = $conn->prepare("INSERT INTO evaluacion_plantilla1 (uidUser, uidEvalua, year, month, quarter, actitud1, actitud2, actitud3, actitud4, actitud5, actitud6, desempeno1, desempeno2, desempeno3, desempeno4, desempeno5, desempeno6, desempeno7) VALUES (:uidUser, :uidEvalua, :year, :month, :quarter, :actitud1, :actitud2, :actitud3, :actitud4, :actitud5, :actitud6, :desempeno1, :desempeno2, :desempeno3, :desempeno4, :desempeno5, :desempeno6, :desempeno7)");
		$stmt->bindParam(':uidUser',$POST['uid']);
		$stmt->bindParam(':uidEvalua',$POST['evalua']);
		$stmt->bindParam(':year',$POST['year']);
		$stmt->bindParam(':month',$POST['month']);
		$stmt->bindParam(':quarter',$POST['quarter']);
		$stmt->bindParam(':actitud1',$POST['actitud1']);
		$stmt->bindParam(':actitud2',$POST['actitud2']);
		$stmt->bindParam(':actitud3',$POST['actitud3']);
		$stmt->bindParam(':actitud4',$POST['actitud4']);
		$stmt->bindParam(':actitud5',$POST['actitud5']);
		$stmt->bindParam(':actitud6',$POST['actitud6']);
		$stmt->bindParam(':desempeno1',$POST['desempeno1']);
		$stmt->bindParam(':desempeno2',$POST['desempeno2']);
		$stmt->bindParam(':desempeno3',$POST['desempeno3']);
		$stmt->bindParam(':desempeno4',$POST['desempeno4']);
		$stmt->bindParam(':desempeno5',$POST['desempeno5']);
		$stmt->bindParam(':desempeno6',$POST['desempeno6']);
		$stmt->bindParam(':desempeno7',$POST['desempeno7']);
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		echo '{"error":{"text":'. $e->getMessage() .'}}';
	}
	$conn = null;
	}

	public function storeEncuestaPlantilla2($POST)
	{
		try {
		$conn = getDB();
		$stmt = $conn->prepare("INSERT INTO evaluacion_plantilla2 (uidUser, uidEvalua, year, month, quarter, actitud1, actitud2, actitud3, actitud4, actitud5, actitud6, desempeno1, desempeno2, desempeno3, desempeno4, desempeno5) VALUES (:uidUser, :uidEvalua, :year, :month, :quarter, :actitud1, :actitud2, :actitud3, :actitud4, :actitud5, :actitud6, :desempeno1, :desempeno2, :desempeno3, :desempeno4, :desempeno5)");
		$stmt->bindParam(':uidUser',$POST['uid']);
		$stmt->bindParam(':uidEvalua',$POST['evalua']);
		$stmt->bindParam(':year',$POST['year']);
		$stmt->bindParam(':month',$POST['month']);
		$stmt->bindParam(':quarter',$POST['quarter']);
		$stmt->bindParam(':actitud1',$POST['actitud1']);
		$stmt->bindParam(':actitud2',$POST['actitud2']);
		$stmt->bindParam(':actitud3',$POST['actitud3']);
		$stmt->bindParam(':actitud4',$POST['actitud4']);
		$stmt->bindParam(':actitud5',$POST['actitud5']);
		$stmt->bindParam(':actitud6',$POST['actitud6']);
		$stmt->bindParam(':desempeno1',$POST['desempeno1']);
		$stmt->bindParam(':desempeno2',$POST['desempeno2']);
		$stmt->bindParam(':desempeno3',$POST['desempeno3']);
		$stmt->bindParam(':desempeno4',$POST['desempeno4']);
		$stmt->bindParam(':desempeno5',$POST['desempeno5']);
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		echo '{"error":{"text":'. $e->getMessage() .'}}';
	}
	$conn = null;
	}

	public function storeEncuestaPlantilla3($POST)
	{
		try {
		$conn = getDB();
		$stmt = $conn->prepare("INSERT INTO evaluacion_plantilla3 (uidUser, uidEvalua, year, month, quarter, actitud1, actitud2, actitud3, actitud4, actitud5, actitud6, desempeno1, desempeno2, desempeno3, desempeno4, desempeno5, desempeno6) VALUES (:uidUser, :uidEvalua, :year, :month, :quarter, :actitud1, :actitud2, :actitud3, :actitud4, :actitud5, :actitud6, :desempeno1, :desempeno2, :desempeno3, :desempeno4, :desempeno5, :desempeno6)");
		$stmt->bindParam(':uidUser',$POST['uid']);
		$stmt->bindParam(':uidEvalua',$POST['evalua']);
		$stmt->bindParam(':year',$POST['year']);
		$stmt->bindParam(':month',$POST['month']);
		$stmt->bindParam(':quarter',$POST['quarter']);
		$stmt->bindParam(':actitud1',$POST['actitud1']);
		$stmt->bindParam(':actitud2',$POST['actitud2']);
		$stmt->bindParam(':actitud3',$POST['actitud3']);
		$stmt->bindParam(':actitud4',$POST['actitud4']);
		$stmt->bindParam(':actitud5',$POST['actitud5']);
		$stmt->bindParam(':actitud6',$POST['actitud6']);
		$stmt->bindParam(':desempeno1',$POST['desempeno1']);
		$stmt->bindParam(':desempeno2',$POST['desempeno2']);
		$stmt->bindParam(':desempeno3',$POST['desempeno3']);
		$stmt->bindParam(':desempeno4',$POST['desempeno4']);
		$stmt->bindParam(':desempeno5',$POST['desempeno5']);
		$stmt->bindParam(':desempeno6',$POST['desempeno6']);
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		echo '{"error":{"text":'. $e->getMessage() .'}}';
	}
	$conn = null;
	}

	public function storeEncuestaPlantilla4($POST)
	{
		try {
		$conn = getDB();
		$stmt = $conn->prepare("INSERT INTO evaluacion_plantilla4 (uidUser, uidEvalua, year, month, quarter, actitud1, actitud2, actitud3, actitud4, actitud5, actitud6, desempeno1, desempeno2, desempeno3, desempeno4) VALUES (:uidUser, :uidEvalua, :year, :month, :quarter, :actitud1, :actitud2, :actitud3, :actitud4, :actitud5, :actitud6, :desempeno1, :desempeno2, :desempeno3, :desempeno4)");
		$stmt->bindParam(':uidUser',$POST['uid']);
		$stmt->bindParam(':uidEvalua',$POST['evalua']);
		$stmt->bindParam(':year',$POST['year']);
		$stmt->bindParam(':month',$POST['month']);
		$stmt->bindParam(':quarter',$POST['quarter']);
		$stmt->bindParam(':actitud1',$POST['actitud1']);
		$stmt->bindParam(':actitud2',$POST['actitud2']);
		$stmt->bindParam(':actitud3',$POST['actitud3']);
		$stmt->bindParam(':actitud4',$POST['actitud4']);
		$stmt->bindParam(':actitud5',$POST['actitud5']);
		$stmt->bindParam(':actitud6',$POST['actitud6']);
		$stmt->bindParam(':desempeno1',$POST['desempeno1']);
		$stmt->bindParam(':desempeno2',$POST['desempeno2']);
		$stmt->bindParam(':desempeno3',$POST['desempeno3']);
		$stmt->bindParam(':desempeno4',$POST['desempeno4']);
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		echo '{"error":{"text":'. $e->getMessage() .'}}';
	}
	$conn = null;
	}

	public function storeEncuestaPlantilla5($POST)
	{
		try {
		$conn = getDB();
		$stmt = $conn->prepare("INSERT INTO evaluacion_plantilla5 (uidUser, uidEvalua, year, month, quarter, desempeno1, desempeno2, desempeno3, desempeno4, desempeno5, desempeno6, desempeno7, desempeno8, desempeno9, desempeno10) VALUES (:uidUser, :uidEvalua, :year, :month, :quarter, :desempeno1, :desempeno2, :desempeno3, :desempeno4, :desempeno5, :desempeno6, :desempeno7, :desempeno8, :desempeno9, :desempeno10)");
		$stmt->bindParam(':uidUser',$POST['uid']);
		$stmt->bindParam(':uidEvalua',$POST['evalua']);
		$stmt->bindParam(':year',$POST['year']);
		$stmt->bindParam(':month',$POST['month']);
		$stmt->bindParam(':quarter',$POST['quarter']);
		$stmt->bindParam(':desempeno1',$POST['desempeno1']);
		$stmt->bindParam(':desempeno2',$POST['desempeno2']);
		$stmt->bindParam(':desempeno3',$POST['desempeno3']);
		$stmt->bindParam(':desempeno4',$POST['desempeno4']);
		$stmt->bindParam(':desempeno3',$POST['desempeno5']);
		$stmt->bindParam(':desempeno4',$POST['desempeno6']);
		$stmt->bindParam(':desempeno3',$POST['desempeno7']);
		$stmt->bindParam(':desempeno4',$POST['desempeno8']);
		$stmt->bindParam(':desempeno3',$POST['desempeno9']);
		$stmt->bindParam(':desempeno4',$POST['desempeno10']);
		$stmt->execute();
	}
	catch(PDOException $e)
	{
		echo '{"error":{"text":'. $e->getMessage() .'}}';
	}
	$conn = null;
	}
	 
}

