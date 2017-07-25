$(document).ready(function(){

  $("#send").on('click', function(){
    $("#form-client").submit();
  });

  $.validator.addMethod("regx", function(value) {
    var expression = /^[a-zA-Z]*$/;
    if (expression.test(value) || value == "")
      return true;
    else
      return false;
  }, "");

  $("#form-client").validate({
    rules: {
      name: {
        regx: true
      },
      lastname: {
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
      alert("well done!");
    }
  });

});
