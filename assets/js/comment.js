$(function() {

  $("#comment-form input,#comment-form textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // additional error messages or events
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
      // get values from FORM
      var productName = $("input#product-name").val();
      var comment = $("textarea#comment").val();
      $this = $("button#sendCommentBtn");
      $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
      $.ajax({
        url: "././assets/comment.php",
        type: "POST",
        data: {
          productName: productName,
          comment: comment
        },
        cache: false,
        success: function() {
          // Success message
          $('#success').html("<div class='animated jackInTheBox alert alert-success alert-dismissible'>");
          $('#success > .alert-success').html("<a class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</a>");
          $('#success > .alert-success')
            .append("<strong>Thank you! Your comment will be valued. </strong>");
          $('#success > .alert-success')
            .append('</div>');
          //clear all fields
          $('#comment-form').trigger("reset");
        },
        error: function() {
          // Fail message
          $('#success').html("<div class='animated pulse alert alert-danger alert-dismissible'>");
          $('#success > .alert-danger').html("<a class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</a>");
          $('#success > .alert-danger').append($("<strong>").text("Sorry " + firstName + ", it seems that my mail server is not responding. You can try again later or Email us via info@jelexie.com"));
          $('#success > .alert-danger').append('</div>');
          //clear all fields
          $('#comment-form').trigger("reset");
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
