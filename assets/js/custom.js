new WOW().init();

$(window).on('load', function() {
	    $('.about-heading,.about-description,.read-more').css({"opacity":"100"});
	    $('.about-heading,.about-description').addClass('animated fadeIn');
	    $('.read-more').addClass('animated bounceIn');
	});

//JQuery Sticky
 $(document).ready(function(){
    $("#navbar").sticky({topSpacing:0,zIndex:999});
  });

 jQuery.fn.extend({
	rwd: function(){
		var fb = this;
		var id = 'fb-box-container-' + Math.floor(Math.random() * 10000);
		$(fb).wrap('<div id="' + id + '" style="width: 100%; height: 100%;">');
		
		$(window).resize(function(){
			var r_w = 1;
			//clear transform
			$(fb).attr('style', '');
			
			var win_w = $('#' + id).width();
			
			//default width height 500px
			var fb_w = parseInt($(fb).attr('data-width')) || 500;
			var fb_h = fb_w;
			r_w = win_w/fb_w;
			
			$(fb)
				.css('left', ((fb_w*r_w-fb_w)/2) + 'px')
				.css('top',  ((fb_h*r_w-fb_h)/2) + 'px')
				.css('transform', 'scale('+r_w+', '+r_w+')');
				
		}).resize();
	}
});

//Ads
$('#ads').carousel({
  interval: 6000
})

//Carousel
$('#carousel').carousel({
  interval: 500000
})