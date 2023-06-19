<!DOCTYPE html>
<html>
<head>
  <title>Update User</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Update User</h1>

    <form id="updateUserForm">
      <input type="hidden" id="userId" name="userId">
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

        <select class="form-control" id="degre" name="degre" required>
          <option value="1">1st Degree</option>
          <option value="2">2nd Degree</option>
          <option value="3">3rd Degree</option>
        
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Update User</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="scripudate.js"></script>
</body>
</html>
