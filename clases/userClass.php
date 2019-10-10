<?php 

class userClass{
	/* User Login */
	public function userLogin($userEmail,$password)
	{
		try{
			$db = getDB();
			$hash_password= hash('sha256', $password); //Password encryption 
			$stmt = $db->prepare("SELECT uid, name, area, profile FROM users WHERE email=:userEmail AND password=:hash_password"); 
			$stmt->bindParam("userEmail", $userEmail,PDO::PARAM_STR) ;
			$stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
			$stmt->execute();
			$count=$stmt->rowCount();
			$data=$stmt->fetch(PDO::FETCH_OBJ);
			$db = null;
			if($count) {
				$_SESSION['uid']=$data->uid; // Storing user session value
				$_SESSION['name']=$data->name;
				$_SESSION['area']=$data->area;
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
	/* User Registration */
	public function userRegistration($name, $lastname,$email,$s_web,$s_produccionTn,$s_programasTn,$s_arribaArgentinos,$s_noti13,$s_telenoche,$s_sintesis,$s_cronista,$s_conduColum,$s_deportes,$s_prodEsp,$s_peJefes,$s_camaras,$s_edicion,$s_directores,$s_promociones,$s_archivo,$s_ingestaSat,$s_can,$s_mesa,$s_administracion,$profile)
	{
		try{
			$db = getDB();
			$st = $db->prepare("SELECT uid FROM users WHERE email=:email"); 
			$st->bindParam("email", $email,PDO::PARAM_STR);
			$st->execute();
			$count=$st->rowCount();
			if($count<1)
				{
					$stmt = $db->prepare("INSERT INTO users(name,lastname,email,web,produccionTn,programasTn,arribaArgentinos,noti13,telenoche,sintesis,cronista,conduColum,deportes,prodEsp,peJefes,camaras,edicion,directores,promociones,archivo,ingestaSat,can,mesa,administracion,profile) VALUES (:name,:lastname,:email,:web,:produccionTn,:programasTn,:arribaArgentinos,:noti13,:telenoche,:sintesis,:cronista,:conduColum,:deportes,:prodEsp,:peJefes,:camaras,:edicion,:directores,:promociones,:archivo,:ingestaSat,:can,:mesa,:administracion,:profile)");
					$stmt->bindParam("name", $name,PDO::PARAM_STR);
					$stmt->bindParam("lastname", $lastname,PDO::PARAM_STR);
					$stmt->bindParam("email", $email,PDO::PARAM_STR);

					$stmt->bindParam("web",$s_web,PDO::PARAM_STR);
					$stmt->bindParam("produccionTn",$s_produccionTn,PDO::PARAM_STR);
					$stmt->bindParam("programasTn",$s_programasTn,PDO::PARAM_STR);
					$stmt->bindParam("arribaArgentinos",$s_arribaArgentinos,PDO::PARAM_STR);
					$stmt->bindParam("noti13",$s_noti13,PDO::PARAM_STR);
					$stmt->bindParam("telenoche",$s_telenoche,PDO::PARAM_STR);
					$stmt->bindParam("sintesis",$s_sintesis,PDO::PARAM_STR);
					$stmt->bindParam("cronista",$s_cronista,PDO::PARAM_STR);
					$stmt->bindParam("conduColum",$s_conduColum,PDO::PARAM_STR);
					$stmt->bindParam("deportes",$s_deportes,PDO::PARAM_STR);
					$stmt->bindParam("prodEsp",$s_prodEsp,PDO::PARAM_STR);
					$stmt->bindParam("peJefes",$s_peJefes,PDO::PARAM_STR);
					$stmt->bindParam("camaras",$s_camaras,PDO::PARAM_STR);
					$stmt->bindParam("edicion",$s_edicion,PDO::PARAM_STR);
					$stmt->bindParam("directores",$s_directores,PDO::PARAM_STR);
					$stmt->bindParam("promociones",$s_promociones,PDO::PARAM_STR);
					$stmt->bindParam("archivo",$s_archivo,PDO::PARAM_STR);
					$stmt->bindParam("ingestaSat",$s_ingestaSat,PDO::PARAM_STR);
					$stmt->bindParam("can",$s_can,PDO::PARAM_STR);
					$stmt->bindParam("mesa",$s_mesa,PDO::PARAM_STR);
					$stmt->bindParam("administracion",$s_administracion,PDO::PARAM_STR);
					$stmt->bindParam("profile",$profile,PDO::PARAM_STR);


					// $hash_password= hash('sha256', $password); //Password encryption
					// $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
					
					$stmt->execute();
					$uid=$db->lastInsertId(); // Last inserted row id
					$db = null;
					
					
					return true;
				} else {
					$db = null;
					return false;
				}
			} 
			catch(PDOException $e) 
			{
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
	}
