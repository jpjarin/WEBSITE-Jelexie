new WOW().init();


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