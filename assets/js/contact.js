$(function() {

  $("#contact-form input,#contact-form select,#contact-form textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM
      var name = $("input#name").val();
      var email = $("input#email").val();
      var subject = $("select#subject option:selected").val();
      var message = $("textarea#message").val();
      var firstName = name; // For Success/Failure Message
      // Check for white space in name for Success/Fail message
      if (firstName.indexOf(' ') >= 0) {
        firstName = name.split(' ').slice(0, -1).join(' ');
      }
      $this = $("#sendMessageBtn");
      $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
      $.ajax({
        url: "././assets/contact.php",
        type: "POST",
        data: {
          name: name,
          email: email,
          subject: subject,
          message: message
        },
        cache: false,
        success: function() {
          // Success message
          $('#success').html("<div class='animated jackInTheBox alert alert-success alert-dismissible'>");
          $('#success > .alert-success').html("<a class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</a>");
          $('#success > .alert-success')
            .append("<strong>Thank you! Your message will be highly regarded. </strong>");
          $('#success > .alert-success')
            .append('</div>');
          //clear all fields
          $('#contact-form').trigger("reset");
        },
        error: function() {
          // Fail message
          $('#success').html("<div class='animated pulse alert alert-danger alert-dismissible'>");
          $('#success > .alert-danger').html("<a class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</a>");
          $('#success > .alert-danger').append($("<strong>").text("Sorry " + firstName + ", it seems that our mail server is not responding. You can try again later or Email us via info@jelexie.com"));
          $('#success > .alert-danger').append('</div>');
          //clear all fields
          $('#contact-form').trigger("reset");
        },
        complete: function() {
          setTimeout(function() {
            $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
          }, 1000);
        }
      });
    },
    filter: function() {
      return $(this).is(":visible");
    },
  });

  $("a[data-toggle=\"tab\"]").click(function(e) {
    e.preventDefault();
    $(this).tab("show");
  });
});

/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
  $('#success').html('');
});
