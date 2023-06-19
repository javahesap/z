<?php
require_once "db_connect.php";

$userId = $_POST['id'];

$sql = "DELETE FROM users WHERE Id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $userId);

$stmt->execute();
?>
