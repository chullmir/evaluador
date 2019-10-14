<?php 
class evaluadosClass{
	public function listadoEvaluados()
	{
		try{
			$db = getDB();
			$stmt = $db->prepare("SELECT * FROM evaluados");
			$stmt->execute();
			$data=$stmt->fetchAll(PDO::FETCH_OBJ);
			$db = null;
			return $data;
		}
		catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}	
	}
	public function evaluadosBySector($sector)
	{
		try{
			$db = getDB();
			$stmt = $db->prepare("SELECT * FROM evaluados WHERE sector = :sector");
			$stmt->bindParam("sector", $sector, PDO::PARAM_STR);
			$stmt->execute();
			$data=$stmt->fetchAll(PDO::FETCH_OBJ);
			$db = null;
			return $data;
		}
		catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}
	}
	public function evaluadoByUid($uid)
	{
		try{
			$db = getDB();
			$stmt = $db->prepare("SELECT * FROM evaluados WHERE uid = :uid");
			$stmt->bindParam("uid", $uid, PDO::PARAM_STR);
			$stmt->execute();
			$data=$stmt->fetch(PDO::FETCH_OBJ);
			$db = null;
			return $data;
		}
		catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}';
		}

	}
}

?>