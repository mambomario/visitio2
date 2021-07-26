<?php 

/**
 * 
 */
class Visitcard {
	
	// public function fetch_all()
	// {
	// 	// code...
	// 	global $conn;
	// 	$query = $conn->prepare("SELECT * FROM visitcards");
	// 	$query->bindValue(1, $id);
	// 	$query->execute();
	// 	return $query->fetchAll();
	// }

	public function fetch_data($visitcard_id){
		global $conn;
		$query = $conn->prepare("SELECT * FROM visitcards where id = ?");
		$query->bindValue(1, $visitcard_id);
		$query->execute();
		return $query->fetchAll();		
	}
}



?>