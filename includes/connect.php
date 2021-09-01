<?php 

$servername = "localhost";
$username = "mari";
$database = "visitio";
$password = "mari";

// $servername = "md90.wedos.net";
// $username = "a174250_visitio";
// $database = "d174250_visitio";
// $password = "CT2W4GVK";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8mb4;", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
 ?>