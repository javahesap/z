$(document).ready(function() {
  var userId = getQueryParam("id");
  if (userId) {
    getUser(userId);
  }

  $("#updateUserForm").submit(function(event) {
    event.preventDefault();
    var adi = $("#adi").val();
    var soyadi = $("#soyadi").val();
    var imgpath = $("#imgpath").val();
    var degre = $("#degre").val();
    updateUser(userId, adi, soyadi, imgpath, degre);
  });

  function getUser(userId) {
    $.ajax({
      url: "get_user.php",
      method: "GET",
      data: { id: userId },
      success: function(data) {
        var user = JSON.parse(data);
        $("#userId").val(user.Id);
        $("#adi").val(user.adi);
        $("#soyadi").val(user.soyadi);
        $("#imgpath").val(user.imgpath);
        $("#degre").val(user.degre);
      }
    });
  }

  function updateUser(userId, adi, soyadi, imgpath, degre) {
    $.ajax({
      url: "updateuser.php",
      method: "POST",
      data: {
        id: userId,
        adi: adi,
        soyadi: soyadi,
        imgpath: imgpath,
        degre: degre
      },
      success: function() {
        alert("User updated successfully!");
        window.location.href = "kisiekle.php";
      }
    });
  }

  function getQueryParam(param) {
    var urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
  }
});
