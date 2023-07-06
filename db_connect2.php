<?php
$servername = "localhost";
$username = "Ibrahim_7373.";
$password = "Ibrahim_7373.";
$dbname = "vipcemil_com_tr_cemil";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
