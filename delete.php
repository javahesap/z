<?php
// Handle delete operation
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $id = $_POST["id"];

  // Perform the necessary database deletion logic here

  // Assuming you have a database connection established,
  // you can use prepared statements to delete the record from the "gruplar" table

  // Example using PDO:
  include("masterdb.php");

  try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("DELETE FROM gruplar WHERE id = ?");
    $stmt->execute([$id]);

    echo "Record deleted successfully";
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}
?>
