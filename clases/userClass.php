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

	}
