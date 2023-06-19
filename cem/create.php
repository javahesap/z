<?php
require_once "db_connect.php";

$adi = $_POST['adi'];
$soyadi = $_POST['soyadi'];
$imgpath = $_POST['imgpath'];
$degre = $_POST['degre'];

$sql = "INSERT INTO users (adi, soyadi, imgpath, degre) VALUES (:adi, :soyadi, :imgpath, :degre)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':adi', $adi);
$stmt->bindParam(':soyadi', $soyadi);
$stmt->bindParam(':imgpath', $imgpath);
$stmt->bindParam(':degre', $degre);

$stmt->execute();
?>
