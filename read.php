<?php
// Handle read operation
if ($_SERVER["REQUEST_METHOD"] === "GET") {
  // Perform the necessary database retrieval logic here

  // Assuming you have a database connection established,
  // you can use prepared statements to fetch the data from the "gruplar" table

  // Example using PDO:
  include("masterdb.php");

  try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM gruplar");
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}
?>
