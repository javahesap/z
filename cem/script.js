$(document).ready(function() {
  // Load Users on page load
  loadUsers();

  // Add User form submission
  $("#addUserForm").submit(function(event) {
    event.preventDefault();
   
    var adi = $("#adi").val();
    var soyadi = $("#soyadi").val();
    var imgpath = $("#imgpath").val();
    var degre = $("#degre").val();
    var tiktoklink = $("#tiktoklink").val();

   
    addUser(adi, soyadi, imgpath, degre,tiktoklink);
  });

  // Delete User button click
  $("#userTable").on("click", ".delete-user", function() {
    var userId = $(this).data("id");
    deleteUser(userId);
  });

  // Load Users
  function loadUsers() {
    $.ajax({
      url: "readuser.php",
      method: "GET",
      success: function(data) {
        $("#userTable tbody").html(data);
      }
    });
  }

  // Add User
  function addUser(adi, soyadi, imgpath, degre,tiktoklink) {

    $.ajax({
      url: "createuser.php",
      method: "POST",
      data: { adi: adi, soyadi: soyadi, imgpath: imgpath, degre: degre, tiktoklink: tiktoklink },
      success: function() {
        loadUsers();
        $("#addUserForm")[0].reset();
      }
    });
  }

  // Delete User
  function deleteUser(userId) {
    $.ajax({
      url: "deleteuser.php",
      method: "POST",
      data: { id: userId },
      success: function() {
        loadUsers();
      }
    });
  }
});
