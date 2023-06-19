<?php
require_once "db_connect.php";

$userId = $_GET['id'];

$sql = "SELECT * FROM users WHERE Id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $userId);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($result);
?>
