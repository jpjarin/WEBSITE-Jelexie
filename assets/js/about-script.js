new WOW().init();

//JQuery Sticky
 $(document).ready(function(){
    $("#navbar").sticky({topSpacing:0,zIndex:999});
  });

  $(window).on('load', function() {
	    $('.breadcrumb').css({"opacity":"100"});
	    $('.aboutUs,.Jelexie').css({'opacity':'100','animation-delay':'0.4s'});
	    $('.ourProducts,.Branches').css({'opacity':'100','animation-delay':'0.7s'});
	    $('.breadcrumb,.aboutUs,.Jelexie,.ourProducts,.Branches').addClass('animated fadeIn');
	});


  $(document).ready(function(){
   //The Community
	$('#the_community').carousel({
	  interval: 6000
	});

	//Carousel
	$('#the_people').carousel({
	  interval: 5000
	});
  });