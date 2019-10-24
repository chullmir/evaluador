<?php 

class userClass{
	/* User Login */
	public function userLogin($userEmail)
	{
		try{
			$db = getDB();
			$stmt = $db->prepare("SELECT uid, name, lastname, email, sectorJefe, sectorEvaluado, profile FROM users WHERE email=:userEmail"); 
			$stmt->bindParam("userEmail", $userEmail,PDO::PARAM_STR);
			$stmt->execute();
			$count=$stmt->rowCount();
			$data=$stmt->fetch(PDO::FETCH_OBJ);
			$db = null;
			if($count) {
				$_SESSION['uid']=$data->uid; // Storing user session value
				$_SESSION['name']=$data->name;
				$_SESSION['lastname']=$data->lastname;
				$_SESSION['sectorJefe']=explode(",",$data->sectorJefe);
				$_SESSION['sectorEvaluado']=$data->sectorEvaluado;
				$_SESSION['profile']=$data->profile;
				return true;
			} else {
				return false;
			} 
		}
		catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}
	}
	
		/* User Details */
		public function userDetails($uid)
		{
			try{
				$db = getDB();
				$stmt = $db->prepare("SELECT * FROM users WHERE uid=:uid"); 
				$stmt->bindParam("uid", $uid,PDO::PARAM_INT);
				$stmt->execute();
				$data = $stmt->fetch(PDO::FETCH_OBJ); //User data
				return $data;
			}
			catch(PDOException $e)
			{
				echo '{"error":{"text":'. $e->getMessage() .'}}';
			}
		}
		/* User Details fetch by Email */
		public function userDataByEmail($email){
			try {
				$db = getDB();
				$stmt = $db->prepare("SELECT * FROM users WHERE email=:email"); 
				$stmt->bindParam("email", $email,PDO::PARAM_INT);
				$stmt->execute();
				$data = $stmt->fetch(PDO::FETCH_OBJ); //User data
				return $data;
			} catch (PDOException $e) {
				echo '{"error":{"text":'. $e->getMessage() .'}}';	
			}
		}
		/* User Details fetch by UID */
		public function userDataByUid($uid){
			try {
				$db = getDB();
				$stmt = $db->prepare("SELECT * FROM users WHERE uid=:uid"); 
				$stmt->bindParam("uid", $uid,PDO::PARAM_INT);
				$stmt->execute();
				$data = $stmt->fetch(PDO::FETCH_OBJ); //User data
				return $data;
			} catch (PDOException $e) {
				echo '{"error":{"text":'. $e->getMessage() .'}}';	
			}
		}
		/* Users a Evaluar */
		public function evaluadosPorSector($sector)
		{
			try{
				$db = getDB();
				$stmt = $db->prepare("SELECT * FROM users WHERE sectorEvaluado=:sector"); 
				$stmt->bindParam("sector", $sector);
				$stmt->execute();
				$data = $stmt->fetchAll(PDO::FETCH_OBJ);
				return $data;
			}
			catch(PDOException $e)
			{
				echo '{"error":{"text":'. $e->getMessage() .'}}';
			}
		}

		public function resultadosRedactores($uid){
			$year = date("y");
			$quarter = ceil(date("m")/4);
			$db = getDB();
			$stmt = $db->prepare("SELECT * FROM evaluacion_redactores WHERE (uidUser = :uid AND year=:year AND quarter = :quarter)");
			$stmt->bindParam("uid",$uid);
			$stmt->bindParam("year",$year);
			$stmt->bindParam("quarter",$quarter);
			$stmt->execute();
			$count = $stmt->rowCount();
			$data=$stmt->fetchAll(PDO::FETCH_OBJ);
			if ($count > 0) {
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
					$actitud1 = $actitud1 + $datum->actitud1;
					$actitud2 = $actitud2 + $datum->actitud2;
					$actitud3 = $actitud3 + $datum->actitud3;
					$redaccion1 = $redaccion1 + $datum->redaccion1;
					$redaccion2 = $redaccion2 + $datum->redaccion2;
					$redaccion3 = $redaccion3 + $datum->redaccion3;
					$redaccion4 = $redaccion4 + $datum->redaccion4;
					$rigurosidad1 = $rigurosidad1 + $datum->rigurosidad1;
					$rigurosidad2 = $rigurosidad2 + $datum->rigurosidad2;
					$contador = $contador + 1;
				}
				$datos['uidUser']=$data[0]->uidUser;
				$datos['year']=$data[0]->year;
				$datos['quarter']=$data[0]->quarter;
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

		public function resultadosPlantilla1($uid){
			$year = date("y");
			$quarter = ceil(date("m")/4);
			$db = getDB();
			$stmt = $db->prepare("SELECT * FROM evaluacion_plantilla1 WHERE (uidUser = :uid AND year=:year AND quarter = :quarter)");
			$stmt->bindParam("uid",$uid);
			$stmt->bindParam("year",$year);
			$stmt->bindParam("quarter",$quarter);
			$stmt->execute();
			$count = $stmt->rowCount();
			$data=$stmt->fetchAll(PDO::FETCH_OBJ);
			if ($count > 0) {
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
					$actitud1 = $actitud1 + $datum->actitud1;
					$actitud2 = $actitud2 + $datum->actitud2;
					$actitud3 = $actitud3 + $datum->actitud3;
					$actitud4 = $actitud4 + $datum->actitud4;
					$actitud5 = $actitud5 + $datum->actitud5;
					$actitud6 = $actitud6 + $datum->actitud6;
					$desempeno1 = $desempeno1 + $datum->desempeno1;
					$desempeno2 = $desempeno2 + $datum->desempeno2;
					$desempeno3 = $desempeno3 + $datum->desempeno3;
					$desempeno4 = $desempeno4 + $datum->desempeno4;
					$desempeno5 = $desempeno5 + $datum->desempeno5;
					$desempeno6 = $desempeno6 + $datum->desempeno6;
					$desempeno7 = $desempeno7 + $datum->desempeno7;
					$contador = $contador + 1;
				}
				$datos['uidUser']=$data[0]->uidUser;
				$datos['year']=$data[0]->year;
				$datos['quarter']=$data[0]->quarter;
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

		public function resultadosPlantilla2($uid){
			$year = date("y");
			$quarter = ceil(date("m")/4);
			$db = getDB();
			$stmt = $db->prepare("SELECT * FROM evaluacion_plantilla2 WHERE (uidUser = :uid AND year=:year AND quarter = :quarter)");
			$stmt->bindParam("uid",$uid);
			$stmt->bindParam("year",$year);
			$stmt->bindParam("quarter",$quarter);
			$stmt->execute();
			$count = $stmt->rowCount();
			$data=$stmt->fetchAll(PDO::FETCH_OBJ);
			if ($count > 0) {
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
					$actitud1 = $actitud1 + $datum->actitud1;
					$actitud2 = $actitud2 + $datum->actitud2;
					$actitud3 = $actitud3 + $datum->actitud3;
					$actitud4 = $actitud4 + $datum->actitud4;
					$actitud5 = $actitud5 + $datum->actitud5;
					$actitud6 = $actitud6 + $datum->actitud6;
					$desempeno1 = $desempeno1 + $datum->desempeno1;
					$desempeno2 = $desempeno2 + $datum->desempeno2;
					$desempeno3 = $desempeno3 + $datum->desempeno3;
					$desempeno4 = $desempeno4 + $datum->desempeno4;
					$desempeno5 = $desempeno5 + $datum->desempeno5;
					$contador = $contador + 1;
				}
				$datos['uidUser']=$data[0]->uidUser;
				$datos['year']=$data[0]->year;
				$datos['quarter']=$data[0]->quarter;
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

		public function resultadosPlantilla3($uid){
			$year = date("y");
			$quarter = ceil(date("m")/4);
			$db = getDB();
			$stmt = $db->prepare("SELECT * FROM evaluacion_plantilla3 WHERE (uidUser = :uid AND year=:year AND quarter = :quarter)");
			$stmt->bindParam("uid",$uid);
			$stmt->bindParam("year",$year);
			$stmt->bindParam("quarter",$quarter);
			$stmt->execute();
			$count = $stmt->rowCount();
			$data=$stmt->fetchAll(PDO::FETCH_OBJ);
			if ($count > 0) {
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
					$actitud1 = $actitud1 + $datum->actitud1;
					$actitud2 = $actitud2 + $datum->actitud2;
					$actitud3 = $actitud3 + $datum->actitud3;
					$actitud4 = $actitud4 + $datum->actitud4;
					$actitud5 = $actitud5 + $datum->actitud5;
					$actitud6 = $actitud6 + $datum->actitud6;
					$desempeno1 = $desempeno1 + $datum->desempeno1;
					$desempeno2 = $desempeno2 + $datum->desempeno2;
					$desempeno3 = $desempeno3 + $datum->desempeno3;
					$desempeno4 = $desempeno4 + $datum->desempeno4;
					$desempeno5 = $desempeno5 + $datum->desempeno5;
					$desempeno6 = $desempeno6 + $datum->desempeno6;
					$contador = $contador + 1;
				}
				$datos['uidUser']=$data[0]->uidUser;
				$datos['year']=$data[0]->year;
				$datos['quarter']=$data[0]->quarter;
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

		public function resultadosPlantilla4($uid){
			$year = date("y");
			$quarter = ceil(date("m")/4);
			$db = getDB();
			$stmt = $db->prepare("SELECT * FROM evaluacion_plantilla4 WHERE (uidUser = :uid AND year=:year AND quarter = :quarter)");
			$stmt->bindParam("uid",$uid);
			$stmt->bindParam("year",$year);
			$stmt->bindParam("quarter",$quarter);
			$stmt->execute();
			$count = $stmt->rowCount();
			$data=$stmt->fetchAll(PDO::FETCH_OBJ);
			if ($count > 0) {
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
					$actitud1 = $actitud1 + $datum->actitud1;
					$actitud2 = $actitud2 + $datum->actitud2;
					$actitud3 = $actitud3 + $datum->actitud3;
					$actitud4 = $actitud4 + $datum->actitud4;
					$actitud5 = $actitud5 + $datum->actitud5;
					$actitud6 = $actitud6 + $datum->actitud6;
					$desempeno1 = $desempeno1 + $datum->desempeno1;
					$desempeno2 = $desempeno2 + $datum->desempeno2;
					$desempeno3 = $desempeno3 + $datum->desempeno3;
					$desempeno4 = $desempeno4 + $datum->desempeno4;
					$contador = $contador + 1;
				}
				$datos['uidUser']=$data[0]->uidUser;
				$datos['year']=$data[0]->year;
				$datos['quarter']=$data[0]->quarter;
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

		public function resultadosPlantilla5($uid){
			$year = date("y");
			$quarter = ceil(date("m")/4);
			$db = getDB();
			$stmt = $db->prepare("SELECT * FROM evaluacion_plantilla5 WHERE (uidUser = :uid AND year=:year AND quarter = :quarter)");
			$stmt->bindParam("uid",$uid);
			$stmt->bindParam("year",$year);
			$stmt->bindParam("quarter",$quarter);
			$stmt->execute();
			$count = $stmt->rowCount();
			$data=$stmt->fetchAll(PDO::FETCH_OBJ);
			if ($count > 0) {
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
					$desempeno1 = $desempeno1 + $datum->desempeno1;
					$desempeno2 = $desempeno2 + $datum->desempeno2;
					$desempeno3 = $desempeno3 + $datum->desempeno3;
					$desempeno4 = $desempeno4 + $datum->desempeno4;
					$desempeno5 = $desempeno5 + $datum->desempeno5;
					$desempeno6 = $desempeno6 + $datum->desempeno6;
					$desempeno7 = $desempeno7 + $datum->desempeno7;
					$desempeno8 = $desempeno8 + $datum->desempeno8;
					$desempeno9 = $desempeno9 + $datum->desempeno9;
					$desempeno10 = $desempeno10 + $datum->desempeno10;
					$contador = $contador + 1;
				}
				$datos['uidUser']=$data[0]->uidUser;
				$datos['year']=$data[0]->year;
				$datos['quarter']=$data[0]->quarter;
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

	}
