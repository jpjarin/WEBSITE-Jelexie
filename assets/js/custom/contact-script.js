new WOW().init();

//JQuery Sticky
 $(document).ready(function(){
    $("#navbar").sticky({topSpacing:0,zIndex:999});
  });

  $(document).ready(function() {
	    $('.breadcrumb').css({"opacity":"100"});
      $('#contact-page').css({'opacity':'100','animation-delay':'0.3s'});
	    $('.breadcrumb').addClass('animated fadeIn');
       $('#contact-page').addClass('animated fadeIn');
	});