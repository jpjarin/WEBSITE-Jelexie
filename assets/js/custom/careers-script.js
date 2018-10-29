new WOW().init();

//TEMPORARY
$(window).on('load',function(){
  $('.alert').alert();
  $('.site-update').css({"opacity":"1"});
  $('.site-update').addClass('slideInUp');
  $('#site-update').on('click',function(){
    $('.site-update').fadeOut();
  });
});

//JQuery Sticky
 $(document).ready(function(){
    $("#navbar").sticky({topSpacing:0,zIndex:999});
  });

  $(document).ready(function() {
	    $('.breadcrumb').css({"opacity":"100"});
	    $('#careers-section').css({'opacity':'100','animation-delay':'0.4s'});
	    $('.breadcrumb,#careers-section').addClass('animated fadeIn');
	});


  $(window).on('load', function(){
   //The Community
	$('#the_community').carousel({
	  interval: 5000
	});

	//Carousel
	$('#the_people').carousel({
	  interval: 6000
	});
  });

//online application
// $(document).ready(function() {
// $('#online-application-form').submit( function( e ) {
// var formData = new FormData($(this)[0]);

//     $.ajax({
//         url: "././assets/online-application.php",
//         type: 'POST',
//         data: formData,
//         async: false,
//         success: function (data) {
//             alert(data)
//         },
//         cache: false,
//         contentType: false,
//         processData: false
//     });
//     return false; 
//     });
// });