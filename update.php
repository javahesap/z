<?php
// Handle update operation
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Assuming you have a database connection established,
  // you can use prepared statements to update the record in the "gruplar" table

  // Example using PDO:
  include("masterdb.php");
  try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $id = $_GET["id"];
    $adi = $_POST["adi"];
    $active = isset($_POST["active"]) ? 1 : 0;
    $acitivetum = isset($_POST["acitivetum"]) ? 1 : 0;

    $stmt = $conn->prepare("UPDATE gruplar SET adi = ?, active = ?, acitivetum = ? WHERE id = ?");
    $stmt->execute([$adi, $active, $acitivetum, $id]);

    echo "Record updated successfully";
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}

echo "<script>alert('bele')</script>"
?>
