<!DOCTYPE html>
<html>
<head>
  <title>CRUD Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>CRUD Example</h1>
    <form id="crudForm">
      <div class="form-group">
        <label for="adi">Adı:</label>
        <input type="text" class="form-control" id="adi" required>
      </div>
      <div class="form-group">
        <label for="active">Active:</label>
        <input type="checkbox" class="form-control" id="active">
      </div>
      <div class="form-group">
        <label for="acitivetum">Active Tum:</label>
        <input type="checkbox" class="form-control" id="acitivetum">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <table id="gruplarTable" class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Adı</th>
          <th>Active</th>
          <th>Active Tum</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
