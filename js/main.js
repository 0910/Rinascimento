;(function () {
	
	'use strict';

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};

	// Animations

	var contentWayPoint = function() {
		var i = 0;
		$('.animate-box').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .animate-box.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn animated');
							} else {
								el.addClass('fadeInUp animated');
							}

							el.removeClass('item-animate');
						},  k * 200, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '85%' } );
	};

	var sliderMain = function() {
		
	  	$('#hero .flexslider').flexslider({
			animation: "fade",
			slideshowSpeed: 5000,
			directionNav: true,
			start: function(){
				setTimeout(function(){
					$('.slider-text').removeClass('animated fadeInUp');
					$('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
				}, 500);
			},
			before: function(){
				setTimeout(function(){
					$('.slider-text').removeClass('animated fadeInUp');
					$('.flex-active-slide').find('.slider-text').addClass('animated fadeInUp');
				}, 500);
			}

	  	});

	  	$('#hero .flexslider .slides > li').css('height', $(window).height());	
	  	$(window).resize(function(){
	  		$('#hero .flexslider .slides > li').css('height', $(window).height());	
	  	});

	};

  var instaFeed = function(){
    var token = '37878349.1677ed0.12559962ecad4f8cb828b1ec65fd589b',
      num_photos = 4;
   
    $.ajax({
      url: 'https://api.instagram.com/v1/users/self/media/recent',
      dataType: 'jsonp',
      type: 'GET',
      data: {access_token: token, count: num_photos},
      success: function(data){
          console.log(data);
          $.each(data.data, function(i, x) {
            $('#instafeed').append('<div class="col-md-3 text-center"><div class="post" style="background-image: url('+x.images.low_resolution.url+');"><a href="#" class="view"><span>View Demo</span></a></div></div>');
          })
      },
      error: function(data){
          console.log(data);
      }
    });
  }

	// Document on load.
	$(function(){
    $('.swipebox').swipebox();
		fullHeight();
		sliderMain();
		contentWayPoint();
    instaFeed();
	});

}());
