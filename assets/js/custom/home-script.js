new WOW().init();

 // $(window).on('DOMContentLoaded', function() {
	// 	    var Body = $('body,html');
	// 	    Body.css({"overflow":"hidden"});
	// 	});

if (Cookies.get('noPreloader') === 'true') {
        $('.preloader').hide();
        $(document).ready(function() {
	    $('.about-heading,.about-description,.read-more').css({"opacity":"100"});
	    $('.about-heading,.about-description').addClass('animated fadeIn');
	    $('.read-more').addClass('animated bounceIn');
	});
    } 
    else  {
      $(window).on('DOMContentLoaded', function() {
          Cookies.set('noPreloader', 'true', {expires: 3}); // 1 day cookie
        // Animate loader off screen
		var Body = $('body,html');
		Body.css({"overflow":"hidden"});

		
		$(window).on('load', function() {
		    $('.preloader').fadeOut();
		});
		$(document).ready(function() {
			    $('.about-heading,.about-description').css({"opacity":"100"});
			    $('.about-heading,.about-description').addClass('animated fadeIn');
			   
			});
      });
    } 

$(window).on('load',function(){
	$('body,html').css({"overflow":"visible"});
});

//Preloader
// $(window).on('DOMContentLoaded', function() {
// 	    var Body = $('body,html');
// 	    Body.css({"overflow":"hidden"});
// 	});
// 	$(window).on('load', function() {
// 	    $('.preloader').fadeOut();
// 	    $('body,html').css({"overflow":"visible"});
// 	});


//if no preloader
// $(document).ready(function() {
// 	    $('.about-heading,.about-description,.read-more').css({"opacity":"100"});
// 	    $('.about-heading,.about-description').addClass('animated fadeIn');
// 	    $('.read-more').addClass('animated bounceIn');
// 	});

//JQuery Sticky
 $(document).ready(function(){
    $("#navbar").sticky({topSpacing:0,zIndex:999});
  });


 $(window).on('load', function(){
   //Ads
	$('#ads').carousel({
	  interval: 4000
	});

	//Carousel
	$('#carousel').carousel({
	  interval: 5000
	});
  });