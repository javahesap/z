<?php
require_once "db_connect.php";

$userId = $_POST['id'];
$adi = $_POST['adi'];
$soyadi = $_POST['soyadi'];
$imgpath = $_POST['imgpath'];
$degre = $_POST['degre'];

$sql = "UPDATE users SET adi = :adi, soyadi = :soyadi, imgpath = :imgpath, degre = :degre WHERE Id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':adi', $adi);
$stmt->bindParam(':soyadi', $soyadi);
$stmt->bindParam(':imgpath', $imgpath);
$stmt->bindParam(':degre', $degre);
$stmt->bindParam(':id', $userId);

$stmt->execute();
?>
