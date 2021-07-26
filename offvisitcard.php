<?php 
include_once('includes/connect.php');
include_once('includes/visitcard.php');
include_once('includes/allvisitcards.php');
$visitcard = new Visitcard;

if ( isset($_GET('id')) ) {
	// code...
	$id=$_GET('id');
	$data = $visitcard->fetch_data($id);
	print_r($data);
	?>


	<?php 
} else {
	header('Location:index.php');
	exit();

}
 ?>
