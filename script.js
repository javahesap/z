$(document).ready(function() {
    // Load initial data on page load
    loadTableData();
  
    // Submit form data
    $("#crudForm").submit(function(event) {
      event.preventDefault();
      var adi = $("#adi").val();
      var active = $("#active").is(":checked");
      var acitivetum = $("#acitivetum").is(":checked");
  
      if (adi.trim() !== "") {
        // Create a new record
        createRecord(adi, active, acitivetum);
      } else {
        alert("Please enter a valid Adı.");
      }
    });
  });
  
  // Function to create a new record
  function createRecord(adi, active, acitivetum) {
    $.ajax({
      url: "create.php",
      type: "POST",
      data: { adi: adi, active: active, acitivetum: acitivetum },
      success: function(response) {
        // Clear form inputs
        $("#adi").val("");
        $("#active").prop("checked", false);
        $("#acitivetum").prop("checked", false);
  
        // Refresh table data
        loadTableData();
      },
        error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
  
  // Function to load table data
  function loadTableData() {
    $.ajax({
      url: "read.php",
      type: "GET",
      success: function(response) {
        var data = JSON.parse(response);
        var tableBody = $("#gruplarTable tbody");
        tableBody.empty();
  
        if (data.length > 0) {
          data.forEach(function(record) {
            var row = `<tr>
              <td>${record.id}</td>
              <td>${record.adi}</td>
              <td>${record.active ? 'Yes' : 'No'}</td>
              <td>${record.acitivetum ? 'Yes' : 'No'}</td>
              <td>
                <button class="btn btn-sm btn-primary" onclick="editRecord(${record.id})">Edit</button>
                <button class="btn btn-sm btn-danger" onclick="deleteRecord(${record.id})">Delete</button>
              </td>
            </tr>`;
            tableBody.append(row);
          });
        } else {
          tableBody.append('<tr><td colspan="5">No records found</td></tr>');
        }
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
  
  // Function to delete a record
  function deleteRecord(id) {
    $.ajax({
      url: "delete.php",
      type: "POST",
      data: { id: id },
      success: function(response) {
        loadTableData();
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
    });
  }
  

  function editRecord(id) {
    
    // Fetch the record details based on the given ID
    $.ajax({
      url: "fetch.php",
      type: "GET",
      data: { id: id },
      success: function(response) {
        var data = JSON.parse(response);
       
        // Check if record details were successfully fetched
        if (data) {
       
          // Populate the form inputs with the fetched data
          $("#adi").val(data.adi);
          $("#active").prop("checked", data.active);
          $("#acitivetum").prop("checked", data.acitivetum);
   
          // Set the form action to update the record
          $("#crudForm").attr("action", "update.php?id=" + id);
        } else {
          alert("Failed to fetch record details.");
        }
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
       
      }
    });
  }