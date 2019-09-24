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
	public function userRegistration($name, $lastname,$email,$area,$password)
	{
		try{
			$db = getDB();
			$st = $db->prepare("SELECT uid FROM users WHERE email=:email"); 
			$st->bindParam("email", $email,PDO::PARAM_STR);
			$st->execute();
			$count=$st->rowCount();
			if($count<1)
				{
					$stmt = $db->prepare("INSERT INTO users(name,lastname,email,area,password) VALUES (:name,:lastname,:email,:area,:hash_password)");
					$stmt->bindParam("name", $name,PDO::PARAM_STR);
					$stmt->bindParam("lastname", $lastname,PDO::PARAM_STR);
					$stmt->bindParam("email", $email,PDO::PARAM_STR);
					$stmt->bindParam("area", $area,PDO::PARAM_STR);
					$hash_password= hash('sha256', $password); //Password encryption
					$stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
					
					$stmt->execute();
					$uid=$db->lastInsertId(); // Last inserted row id
					$db = null;
					$_SESSION['uid']=$uid;
					$_SESSION['name']=$name;
					$_SESSION['area']=$area;
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
				$stmt = $db->prepare("SELECT email,username,name FROM users WHERE uid=:uid"); 
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
	}
