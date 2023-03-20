$(document).ready(function() {
    $("#signupForm").submit(function(event) {
      event.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        type: "POST",
        url: "register.php",
        data: formData,
        success: function(response) {
          alert(response);
        }
      });
    });
  });
  