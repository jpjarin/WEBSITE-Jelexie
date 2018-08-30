 // $(window).on('DOMContentLoaded', function() {
	// 	    var Body = $('body,html');
	// 	    Body.css({"overflow":"hidden"});
	// 	});


if (Cookies.get('noPreloader') === 'true') {
		$('.preloader').remove();
		new WOW().init();
    } 
    else  {
      $(window).on('DOMContentLoaded', function() {
          Cookies.set('noPreloader', 'true', {expires: 1}); // 1 day cookie
        
		var Body = $('body,html');
		Body.css({"overflow":"hidden"});

		
		$(window).on('load', function() {
		    $('.preloader').fadeOut();
		    new WOW().init();
		});
      });
    } 
$(document).ready(function() {
			    $('.about-heading,.about-description').css({"opacity":"100"});
			    $('.about-heading,.about-description').addClass('animated fadeIn');
			   
			});
$(window).on('load',function(){
	$('body,html').css({"overflow":"visible"});
});

// $('.navbar-brand .logo').addClass('scrolled');

// $(window).on('scroll', function() {
//         if (Math.round($(window).scrollTop()) > 100) {
//             $('.navbar-brand .logo').removeClass('scrolled');
//         } else {
//            $('.navbar-brand .logo').addClass('scrolled');
//         }
// });


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

	$(".carousel-control-prev, .carousel-control-next, .carousel-indicators").css({"visibility":"hidden"});    
  });


 $(window).on('load', function(){
   //Ads

   $(".carousel-control-prev, .carousel-control-next, .carousel-indicators").css({"visibility":"visible"});

	$('#ads').carousel({
	  interval: 4000
	});

	//Carousel
	$('#carousel').carousel({
	  interval: 5000
	});

	//our prod carousel
	$('#our-products-carousel').carousel({
	  interval: 3000,
	  pause: false
	});
  });

$(function(){
    $('.fb-page').rwd();
});