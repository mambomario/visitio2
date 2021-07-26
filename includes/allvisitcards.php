<?php 

/**
 * 
 */
class AllVisitcards {
	
	public function fetch_all()
	{
		// code...
		global $conn;
		$query = $conn->prepare("SELECT * FROM visitcards");
		$query->execute();
		return $query->fetchAll();
	}
}


class OneVisitcard {
	
	public function fetch_all($visitcard_id)
	{
		// code...
		global $conn;
		$query = $conn->prepare("SELECT * FROM visitcards  where id = ?");
		$query->bindValue(1, $visitcard_id);
		$query->execute();
		return $query->fetchAll();
	}
}

function current_url(){
	$uri = $_SERVER['REQUEST_URI'];
	// echo $uri; // Outputs: URI
	 
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	 
	$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	echo $url; // Outputs: Full URL
	 
	// $query = $_SERVER['QUERY_STRING'];
	// echo $query; // Outputs: Query String
}

?>