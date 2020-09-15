$(document).ready(function () {
	"use strict"; // start of use strict

	/*==============================
	Header
	==============================*/
	$(window).on('scroll', function () {
		if ($(this).scrollTop() > 0){
			$('.header').addClass("header--active");
		} else {
			$('.header').removeClass("header--active");
		}
	});
	$(window).trigger('scroll');

	/*==============================
	Mobile navigation
	==============================*/
	$('.header__menu').on('click', function() {
		$(this).toggleClass('header__menu--active');
		$('.header__nav').toggleClass('header__nav--active');
	});

	/*==============================
	Partners slider
	==============================*/
	$('.partners__slider').owlCarousel({
		mouseDrag: false,
		dots: false,
		loop: true,
		autoplay: true,
		autoplayTimeout: 5000,
		smartSpeed: 600,
		autoplayHoverPause: true,
		responsive : {
			0 : {
				items: 2,
				margin: 20
			},
			576 : {
				items: 3,
				margin: 20
			},
			768 : {
				items: 4,
				margin: 20
			},
			992 : {
				items: 5,
				margin: 25
			},
			1200 : {
				items: 6,
				margin: 30
			}
		}
	});

	/*==============================
	Testimonial slider
	==============================*/
	$('.testimonial-slider').owlCarousel({
		mouseDrag: false,
		dots: true,
		loop: true,
		autoplay: true,
		autoplayTimeout: 6000,
		smartSpeed: 600,
		autoplayHoverPause: true,
		margin: 0,
		responsive : {
			0 : {
				items: 1,
				margin: 15,
			},
			576 : {
				items: 1,
				margin: 0,
			},
			992 : {
				items: 2,
			},
			1200 : {
				items: 3,
			}
		}
	});

	/*==============================
	Section background img
	==============================*/
	$('.section--bg').each(function(){
		if ($(this).attr('data-bg')){
			$(this).css({
				'background': 'url(' + $(this).data('bg') + ')',
				'background-position': 'center center',
				'background-repeat': 'no-repeat',
				'background-size': 'cover'
			});
		}
	});

	/*==============================
	Smooth scroll
	==============================*/
	var scroll = new SmoothScroll('[data-scroll]', {
		ignore: '[data-scroll-ignore]',
		header: '.header',
		speed: 600,
		offset: 0,
		easing: 'easeInOutCubic',
	});

	/*==============================
	Modal
	==============================*/
	$('.section__video').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 200,
		preloader: false,
		callbacks: {
			open: function() {
				if ($(window).width() > 1199) {
					$('.header').css('margin-right',  getScrollBarWidth() + "px");
				}
			},
			close: function() {
				if ($(window).width() > 1199) {
					$('.header').css('margin-right', 0);
				}
			},
		}
	});

	function getScrollBarWidth () {
		var $outer = $('<div>').css({visibility: 'hidden', width: 100, overflow: 'scroll'}).appendTo('body'),
			widthWithScroll = $('<div>').css({width: '100%'}).appendTo($outer).outerWidth();
		$outer.remove();
		return 100 - widthWithScroll;
	};

});