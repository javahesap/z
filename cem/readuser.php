<?php
require_once "db_connect.php";

$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();

$result = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  $result .= "<tr>";
  $result .= "<td>".$row['Id']."</td>";
  $result .= "<td>".$row['adi']."</td>";
  $result .= "<td>".$row['soyadi']."</td>";
  $result .= "<td>".$row['imgpath']."</td>";
  $result .= "<td>".$row['degre']."</td>";
  $result .= "<td><button class='btn btn-danger delete-user' data-id='".$row['Id']."'>Sil</button></td>";
  $result .= "<td><a class='btn btn-danger delete-user' href='index2.php?id=".$row['Id']."'>Güncelle</a></td>";
  $result .= "</tr>";
}

echo $result;
?>
