
<!DOCTYPE html>
<html>
<head>
  <title>Yarışmacı Ekleme</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body style="background-color: ghostwhite;" >
  <div class="container  p-5">
    <h1>Yarışmacı Ekleme</h1>

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
        <label for="imgpath">Tiktoklink Link:</label>
        <input type="text" class="form-control" id="tiktoklink" name="tiktoklink" required>
      </div>
      <div class="form-group">
        <label for="degre">Degre:</label>
  
        <select class="form-control" id="degre" name="degre">
         
        <?php
require_once "db_connect.php";

$sql = "SELECT * FROM gruplar";
$stmt = $conn->prepare($sql);
$stmt->execute();

$result = "";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
          <option value="<?php echo $row['id'] ?>"><?php echo $row['adi'] ?></option>
     
       
       
        <?php
        }
   
        ?>
        </select>
        
      </div>
      <button type="submit" class="btn btn-primary m-3">Yarışmacı Ekle</button>
    </form>

    <!-- User Table -->
    <table id="userTable" class="table">
      <thead style="background-color: lavender;">
        <tr>
          <th>Id</th>
          <th>Adi</th>
          <th>Soyadi</th>
          <th>Img Path</th>
          <th>Degre</th>
          <th>Sil</th>
          <th>Güncelle</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
