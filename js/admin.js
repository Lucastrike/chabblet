$(document).ready(function() {

  if (localStorage.getItem("loggedin") != "true") {
    $("#modal").modal('show');
  } else {
    getUsers();
    $(".logout").removeClass('hidden');
  }

  $(".logout").on('click', function(){
    localStorage.setItem("loggedin", "false");
    location.reload();
  });

  $("#login").on('click', function() {
    var user = $("#user").val();
    var pass = $("#pass").val();

    $.ajax({
      type: 'POST',
      url: 'php/login.php',
      data: {
        user: user,
        pass: pass
      },
      success: function(data) {
        console.log("data es " + data);
        if (data == 1) {
          $('#modal').modal('toggle');
          getUsers();
          $(".logout").removeClass('hidden');
          localStorage.setItem("loggedin", "true");
        } else if (data == 0) {
          alert("(T_T) No cuela, registrate! (T_T)");
        }
      }

    });

  });

  function getUsers(){
    $.ajax({
      type: 'GET',
      url: 'php/getUsers.php',
      dataType: 'json',
      success: function(data) {
        console.log(data);
        for (var i = 0; i < data.length; i++) {
          console.log("entra");
          $("<tr>\
              <td>" + data[i].id + "</td>\
              <td>" + data[i].name + "</td>\
              <td>" + data[i].surname + "</td>\
              <td>" + data[i].age + "</td>\
              <td>" + data[i].email + "</td>\
              <td>" + data[i].telephone + "</td>\
              </tr>").insertAfter("#table-head");
        }
      }
    });
  }

  $.ajaxSetup({

     error: function(jqXHR, textStatus, errorThrown) {
       if (jqXHR.status === 0) {

         alert('Not connect: Verify Network.');

       } else if (jqXHR.status == 404) {

         alert('Requested page not found [404]');

       } else if (jqXHR.status == 500) {

         alert('Internal Server Error [500].');

       } else if (textStatus === 'parsererror') {

         alert('Requested JSON parse failed.');

       } else if (textStatus === 'timeout') {

         alert('Time out error.');

       } else if (textStatus === 'abort') {

         alert('Ajax request aborted.');

       } else {

         alert('Uncaught Error: ' + jqXHR.responseText);

       }
     }
   });

});
