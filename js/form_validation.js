$(document).ready(function(){

  $("#send").on('click', function(){
    $("#form-client").submit();
  });

  $.validator.addMethod("regx", function(value) {
    var expression = /^[a-zA-Z]*$/;
    if (expression.test(value))
      return true;
    else
      return false;
  }, "");

  $("#form-client").validate({
    rules: {
      name: {
        required: true,
        regx: true
      },
      lastname: {
        required: true,
        regx: true
      },
      age: {
        required: true,
        digits: true
      },
      email: {
        required: true,
        email: true
      },
      telephone: {
        required: true,
        digits: true
      }
    },
    messages: {
      name: "Please enter a valid name",
      lastname: "Please enter a valid surname",
      age: "Please enter a valid age",
      email: "Please enter a valid email",
      telephone: "Please enter a valid telephone"
    },
    submitHandler: function() {
      sendMail();
    }
  });

  function sendMail(){

    var name = $("#inputName").val();
    var lastName = $("#inputLastName").val();
    var age = $("#inputAge").val();
    var email = $("#inputEmail").val();
    var telephone = $("#inputTelephone").val();

    console.log(name + "\n" + lastName + "\n" + age + "\n" + email + "\n" + telephone);

    $.ajax({
        type: 'POST',
        url: 'php/sendMail.php',
        data: {
          name: name,
          lastName: lastName,
          age: age,
          email: email,
          telephone: telephone
        },
        success: function(data){
          console.log("data es " + data);
          if (data == 1) {
            //alert("Sended! tangodown");
            alert(data);
          }
          else if (data == 0) {
            //alert("ERROR tangodown");
            alert(data);
          }
        },
        error: function(jqXHR, textStatus, errorThrown){
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
  }

});
