<?php 

$servername = "localhost";
$username = "mari";
$password = "mari";

try {
  $conn = new PDO("mysql:host=$servername;dbname=visitio", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
 ?>