<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_GET['id']; // Assuming the ID is passed in the URL
  $adi = $_POST['adi'];
  $active = isset($_POST['active']) ? 1 : 0;
  $acitivetum = isset($_POST['acitivetum']) ? 1 : 0;

  include("masterdb.php");

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE `gruplar` SET `adi` = :adi, `active` = :active, `acitivetum` = :acitivetum WHERE `id` = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':adi', $adi);
    $stmt->bindParam(':active', $active);
    $stmt->bindParam(':acitivetum', $acitivetum);
    $stmt->bindParam(':id', $id);

    $stmt->execute();

    echo 'Data updated successfully';
  } catch (PDOException $e) {
    echo 'Error updating data: ' . $e->getMessage();
  }

  $conn = null;
}
?>
