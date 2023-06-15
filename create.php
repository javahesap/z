<?php
// Handle create operation
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $adi = $_POST["adi"];
  $active = $_POST["active"] === "true" ? 1 : 0;
  $acitivetum = $_POST["acitivetum"] === "true" ? 1 : 0;

  // Assuming you have a database connection established,
  // you can use prepared statements to insert the data into the "gruplar" table

  // Example using PDO:
  include("masterdb.php");

  try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO gruplar (adi, active, acitivetum) VALUES (?, ?, ?)");
    $stmt->execute([$adi, $active, $acitivetum]);

    echo "Record created successfully";
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}
echo "<script>alert('bele')</script>"
?>

