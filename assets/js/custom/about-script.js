new WOW().init();


//JQuery Sticky
 $(document).ready(function(){
    $("#navbar").sticky({topSpacing:0,zIndex:999});
  });

  $(document).ready(function() {
	    $('.breadcrumb').css({"opacity":"100"});
	    $('#about-page,.aboutUs,.Jelexie').css({'opacity':'100','animation-delay':'0.4s'});
	    $('.ourProducts,.Branches,.thePeople,.theCommunity').css({'opacity':'100','animation-delay':'0.7s'});
	    $('#about-page,.breadcrumb,.aboutUs,.Jelexie,.ourProducts,.Branches,.thePeople,.theCommunity').addClass('animated fadeIn');
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