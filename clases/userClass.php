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
			//$stmt = $db->prepare("SELECT * FROM evaluacion_redactores WHERE uidUser = :uid");
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

	}
