/*-------------------------------------------------------------------------------------------------------------------------------*/
/*This is main JS file that contains custom style rules used in this template*/
/*-------------------------------------------------------------------------------------------------------------------------------*/
/* Template Name: "Title"*/
/* Version: 1.0 Initial Release*/
/* Build Date: 06-02-2016*/
/* Author: Title*/
/* Copyright: (C) 2016 */
/*-------------------------------------------------------------------------------------------------------------------------------*/

/*--------------------------------------------------------*/
/* TABLE OF CONTENTS: */
/*--------------------------------------------------------*/
/* 01 - VARIABLES */
/* 02 - page calculations */
/* 03 - function on document ready */
/* 04 - function on page load */
/* 05 - function on page resize */
/* 06 - function on page scroll */
/* 07 - swiper sliders */
/* 08 - buttons, clicks, hovers */

var _functions = {};

$(function() {

	"use strict";

	/*================*/
	/* 01 - VARIABLES */
	/*================*/
	var swipers = [], winW, winH, headerH, winScr, footerTop, _isresponsive, _ismobile = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i);

	/*========================*/
	/* 02 - page calculations */
	/*========================*/
	_functions.pageCalculations = function(){
		winW = $(window).width();
		winH = $(window).height();
	};

	/*============================*/
	/* 04 - function on page load */
	/*============================*/
	$(window).load(function(){
		_functions.initSwiper();
		$('body').addClass('loaded');
		$('#loader-wrapper').fadeOut();
	});

	/*==============================*/
	/* 05 - function on page resize */
	/*==============================*/
	_functions.resizeCall = function(){
		_functions.pageCalculations();
	};
	if(!_ismobile){
		$(window).resize(function(){
			_functions.resizeCall();
		});
	} else{
		window.addEventListener("orientationchange", function() {
			_functions.resizeCall();
		}, false);
	}

	/*==============================*/
	/* 06 - function on page scroll */
	/*==============================*/
	$(window).scroll(function(){
		_functions.scrollCall();
	});

	_functions.scrollCall = function(){
		winScr = $(window).scrollTop();
        if (winScr >= 100) $('header').addClass('scrolled');
        else $('header').removeClass('scrolled');

				if (winScr >= 100) $('.logo img').addClass('imgScrolled');
        else $('.logo img').removeClass('imgScrolled');

				if (winScr >= 100) $('.fontScroll a').addClass('imgScrolled');
        else $('.fontScroll a').removeClass('imgScrolled');
	};

    /*=================================*/
	/* 03 - function on document ready */
	/*=================================*/
	if(_ismobile) $('body').addClass('mobile');
	_functions.pageCalculations();
    _functions.scrollCall();

	/*=====================*/
	/* 07 - swiper sliders */
	/*=====================*/
	var initIterator = 0;
	_functions.initSwiper = function(){
		$('.swiper-container').not('.initialized').each(function(){
			var $t = $(this);

			var index = 'swiper-unique-id-'+initIterator;

			$t.addClass('swiper-'+index+' initialized').attr('id', index);
			$t.find('.swiper-pagination').addClass('swiper-pagination-'+index);
			$t.find('.swiper-button-prev').addClass('swiper-button-prev-'+index);
			$t.find('.swiper-button-next').addClass('swiper-button-next-'+index);

			var slidesPerViewVar = ($t.data('slides-per-view'))?$t.data('slides-per-view'):1;
			if(slidesPerViewVar!='auto') slidesPerViewVar = parseInt(slidesPerViewVar, 10);

			swipers['swiper-'+index] = new Swiper('.swiper-'+index,{
				pagination: '.swiper-pagination-'+index,
		        paginationClickable: true,
		        nextButton: '.swiper-button-next-'+index,
		        prevButton: '.swiper-button-prev-'+index,
		        slidesPerView: slidesPerViewVar,
		        autoHeight:($t.is('[data-auto-height]'))?parseInt($t.data('auto-height'), 10):0,
		        loop: ($t.is('[data-loop]'))?parseInt($t.data('loop'), 10):0,
				autoplay: ($t.is('[data-autoplay]'))?parseInt($t.data('autoplay'), 10):0,
		        breakpoints: ($t.is('[data-breakpoints]'))? { 767: { slidesPerView: parseInt($t.attr('data-xs-slides'), 10) }, 991: { slidesPerView: parseInt($t.attr('data-sm-slides'), 10) }, 1199: { slidesPerView: parseInt($t.attr('data-md-slides'), 10) } } : {},
		        initialSlide: ($t.is('[data-ini]'))?parseInt($t.data('ini'), 10):0,
		        speed: ($t.is('[data-speed]'))?parseInt($t.data('speed'), 10):500,
		        keyboardControl: true,
		        mousewheelControl: ($t.is('[data-mousewheel]'))?parseInt($t.data('mousewheel'), 10):0,
		        mousewheelReleaseOnEdges: true,
		        direction: ($t.is('[data-direction]'))?$t.data('direction'):'horizontal',
                spaceBetween: ($t.is('[data-space]'))?parseInt($t.data('space'), 10):0,
			});
			swipers['swiper-'+index].update();
			initIterator++;
		});
		$('.swiper-container.swiper-control-top').each(function(){
			swipers['swiper-'+$(this).attr('id')].params.control = swipers['swiper-'+$(this).parent().find('.swiper-control-bottom').attr('id')];
		});
		$('.swiper-container.swiper-control-bottom').each(function(){
			swipers['swiper-'+$(this).attr('id')].params.control = swipers['swiper-'+$(this).parent().find('.swiper-control-top').attr('id')];
		});
	};

	/*==============================*/
	/* 08 - buttons, clicks, hovers */
	/*==============================*/

	//open and close popup
	$(document).on('click', '.open-popup', function(){
		openPopup($(this).data('rel'));
		return false;
	});

	$(document).on('click', '.popup-wrapper .button-close, .popup-wrapper .layer-close', function(){
        closePopup();
		return false;
	});

    function openPopup(foo){
        $('.popup-content').removeClass('active');
		$('.popup-wrapper, .popup-content[data-rel="'+foo+'"]').addClass('active');
		$('html').addClass('overflow-hidden');
    }

    function closePopup(){
        $('.popup-wrapper, .popup-content').removeClass('active').find('.embed-responsive').html('');
		$('html').removeClass('overflow-hidden');
    }

    $('.open-video').on('click', function(){
        openPopup($(this).data('rel'));
        $('.popup-content[data-rel="'+$(this).data('rel')+'"]').find('.embed-responsive').html('<iframe class="embed-responsive-item" src="'+$(this).data('src')+'?autoplay=1&amp;controls=1&amp;loop=1&amp;modestbranding=1&amp;rel=0&amp;showinfo=0&amp;autohide=0&amp;color=white&amp;iv_load_policy=3&amp;wmode=transparent"></iframe>');
    });

    //menuIcon toggle
    $('.menuIcon').on('click', function() {
        $(this).toggleClass('menuIconActive');
        $('.mobileWrapper').toggleClass('mobileActive');
    });



	//tabs
	var tabsFinish = 0;
	$('.tab-menu').on('click', function() {
		if($(this).hasClass('active') || tabsFinish) return false;
		tabsFinish = 1;
        var tabsWrapper = $(this).closest('.tabs-block'),
        	tabsMenu = tabsWrapper.find('.tab-menu'),
        	tabsItem = tabsWrapper.find('.tab-entry'),
        	index = tabsMenu.index(this);

        tabsItem.filter(':visible').fadeOut(function(){
        	tabsItem.eq(index).fadeIn(function(){
        		tabsFinish = 0;
        	});
        });
        tabsMenu.removeClass('active');
        $(this).addClass('active');
    });

	//accordeon
	$('.accordeon-title').on('click', function(){
		$(this).closest('.accordeon').find('.accordeon-title').not(this).removeClass('active').next().slideUp();
		$(this).addClass('active').next().slideDown();
	});


    // Isotope
    var $grid = $('.grid').isotope({
      itemSelector: '.element-item',
      layoutMode: 'fitRows',
      columnWidth: '.grid-sizer'
    });

    // filter functions
    var filterFns = {
      // show if name ends with -ium
      ium: function() {
        var name = $(this).find('.name').text();
        return name.match( /ium$/ );
      }
    };

    // bind filter button click
    $('.filters-button-group').on( 'click', 'div', function() {
      var filterValue = $( this ).attr('data-filter');
      // use filterFn if matches value
      filterValue = filterFns[ filterValue ] || filterValue;
      $grid.isotope({ filter: filterValue });
    });

    // change is-checked class on buttons
    $('.button-group').each( function( i, buttonGroup ) {
      var $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', 'div', function() {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        $( this ).addClass('is-checked');
      });
    });

    var timeLineContent = '<div class="timeLineShortcode2"><div class="flexWrapper2"><div class="imgTimeLineWrapper rotateRight"><a class="imgLayer" href="blog2.html"><img class="imgShortcode2" src="img/history-time-line4.jpg" alt=""><span></span><span></span></a></div><div class="emptySpace20"></div><div class="normall contentTimeLineWrapper rotateLeft"><a href="blog2.html"><h4 class="h4">Vivamus nisl lorem</h4></a><div class="emptySpace15"></div><p>Integer ipsum ipsum, suscipit et gravida non, imperdiet eget nisl. Curabitur semper semper nunc, id suscipit diam ornare quis. Ut venenatis, diam nec blandit facilisis, mi justo porttitor risus</p>  </div>   </div><div class="monthWrapper"><h4 class="h4 historyMonth">21, November</h4></div></div>' + '<div class="timeLineShortcode2"><div class="flexWrapper2"><div class="imgTimeLineWrapper"><a class="imgLayer" href="blog2.html"><img class="imgShortcode2" src="img/history-time-line5.jpg" alt=""><span></span><span></span></a></div><div class="emptySpace25"></div><div class="normall contentTimeLineWrapper"><a href="blog2.html"><h4 class="h4">Fusce id elit et tellus egestas</h4></a><div class="emptySpace15"></div><p>Integer ipsum ipsum, suscipit et gravida non, imperdiet eget nisl. Curabitur semper semper nunc, id suscipit diam ornare quis. Ut venenatis, diam nec blandit facilisis, mi justo porttitor risus</p></div> </div><div class="monthWrapper"><h4 class="h4 historyMonth">29, September</h4></div></div>';

    $('.historySeeMore').on('click', function() {
        $(timeLineContent).insertBefore('.loadedMore');
    });

    var timeLineContent2 = '<div class="timeLineShortcode"><h4 class="h4 month">19, July</h4><a class="imgLayer floatL2" href="blog3.html"><img class="imgShortcode" src="img/blog-image.jpg" alt=""><span></span><span></span></a><div class="normall contentTimeline"><a href="blog3.html"> <h4 class="h4">Fusce id elit et tellus egestas</h4></a><div class="emptySpace15"></div><p>Integer ipsum ipsum, suscipit et gravida non, imperdiet eget nisl. Curabitur semper semper nunc, id suscipit diam ornare quis. Ut venenatis, diam nec blandit facilisis, mi justo porttitor risus</p><div class="emptySpace15"></div><div class="small like"> <span>24</span></div><div class="small comment"> <span>65</span></div></div>   </div>' + '<div class="timeLineShortcode"><h4 class="h4 month">13, April</h4><a class="imgLayer floatL2" href="blog3.html"><img class="imgShortcode" src="img/blog-image2.jpg" alt=""><span></span><span></span></a><div class="normall contentTimeline"><a href="blog3.html"><h4 class="h4">Aenean egestas placerat</h4></a><div class="emptySpace15"></div><p>Integer ipsum ipsum, suscipit et gravida non, imperdiet eget nisl. Curabitur semper semper nunc,quis. Ut venenatis, diam nec blandit facilisis, mi justo porttitor risus</p><div class="emptySpace15"></div><div class="small like"> <span>35</span></div><div class="small comment"> <span>78</span></</div></div>';

    $('.seeMore').on('click', function() {
       $(timeLineContent2).insertBefore('.seeMore');
    });
    $(".skill").each(function(){
         $(this).circliful({
            animation: 1,
            foregroundBorderWidth: 4,
            backgroundBorderWidth: 1,
            foregroundColor: '#6d3a2f',
            backgroundColor: '#d2d2d2',
            percent: parseInt($(this).data('percent'),10),
            fontColor: '#6d3a2f',
            animateInView: true
        });
    });

	//Menu-Drop-Down-Slide-Toggle

	$('.drowDownIcon').on('click', function(){
		$(this).parent().find('.dropDownMenu').slideToggle(250);
	});

});
