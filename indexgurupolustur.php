
<!DOCTYPE html>
<html>
<head>
  <title>CRUD Example</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Yarışmaacı Eklme</h1>

    <!-- Add User Form -->
    <form id="addUserForm">
      <div class="form-group">
        <label for="adi">Adi:</label>
        <input type="text" class="form-control" id="adi" name="adi" required>
      </div>
      <div class="form-group">
        <label for="soyadi">Soyadi:</label>
        <input type="text" class="form-control" id="soyadi" name="soyadi" required>
      </div>
      <div class="form-group">
        <label for="imgpath">Img Path:</label>
        <input type="text" class="form-control" id="imgpath" name="imgpath" required>
      </div>
      <div class="form-group">
        <label for="degre">Degre:</label>
  
        <select class="form-control" id="degre" name="degre">
        <?php
require_once "db_connect.php";

$sql = "SELECT * FROM `gruplar`";
$stmt = $conn->prepare($sql);
$stmt->execute();  

$result = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

  echo  "<option value=".$row[id].">".$row["adi"]."</option>";

 }

?>
       
      
        
        </select>
        
      </div>
      <button type="submit" class="btn btn-primary">Add User</button>
    </form>

    <!-- User Table -->
    <table id="userTable" class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Adi</th>
          <th>Soyadi</th>
          <th>Img Path</th>
          <th>Degre</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="scriptuser.js"></script>
</body>
</html>
<?php
require_once "db_connect.php";

$sql = "SELECT * FROM `gruplar`";
$stmt = $conn->prepare($sql);
$stmt->execute();  

$result = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
  echo  $row['adi'];
  echo  $row['id'];
<?php }

?>