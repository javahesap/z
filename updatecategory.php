<!DOCTYPE html>
<html>
<head>
  <title>Update Form Example</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2>Update Form Example</h2>
    <form id="crudForm" action="update.php" method="post">
      <div class="form-group">
        <label for="adi">Adı:</label>
        <input type="text" class="form-control" id="adi" name="adi" required="">
      </div>
      <div class="form-group">
        <label for="active">Active:</label>
        <input type="checkbox" class="form-control" id="active" name="active">
      </div>
      <div class="form-group">
        <label for="acitivetum">Active Tum:</label>
        <input type="checkbox" class="form-control" id="acitivetum" name="acitivetum">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div id="result"></div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script >

    // No changes required from the previous example

$(document).ready(function() {
  $('#crudForm').submit(function(e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: $(this).attr('action') + '?id=' + getUrlParameter('id'), // Pass the ID in the URL
      data: $(this).serialize(),
      success: function(response) {
        $('#result').html(response);
      }
    });
  });

  function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
  }
});

  </script>
</body>
</html>
