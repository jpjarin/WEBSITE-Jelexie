new WOW().init();


//Preloader
$(window).on('DOMContentLoaded', function() {
	    var Body = $('body,html');
	    Body.css({"overflow":"hidden"});
	});
	$(window).on('load', function() {
	    $('.preloader').fadeOut();
	    $('body,html').css({"overflow":"visible"});
	});



$(window).on('load', function() {
	    $('.about-heading,.about-description,.read-more').css({"opacity":"100"});
	    $('.about-heading,.about-description').addClass('animated fadeIn');
	    $('.read-more').addClass('animated bounceIn');
	});

//JQuery Sticky
 $(document).ready(function(){
    $("#navbar").sticky({topSpacing:0,zIndex:999});
  });


 $(document).ready(function(){
   //Ads
	$('#ads').carousel({
	  interval: 6000
	});

	//Carousel
	$('#carousel').carousel({
	  interval: 5000
	});
  });