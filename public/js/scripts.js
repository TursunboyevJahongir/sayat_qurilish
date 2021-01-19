(function ($) {
  $(document).ready(function () {
    "use strict";


    /* MENU TOGGLE */
    $('.side-widget .site-menu ul li i').on('click', function (e) {
      $(this).parent().children('.side-widget .site-menu ul li ul').toggle();
      return true;
    });


    // TAB
    $(".tab-nav li").on('click', function (e) {
      $(".tab-item").hide();
      $(".tab-nav li").removeClass('active');
      $(this).addClass("active");
      var selected_tab = $(this).find("a").attr("href");
      $(selected_tab).stop().show();
      return false;
    });


    // SEARCH BOX
    $('.navbar .search').on('click', function (e) {
      $(this).toggleClass('open');
      $(".search-box").toggleClass('active');
      $("body").toggleClass("overflow");
    });


    // HAMBURGER MENU
    $('.hamburger').on('click', function (e) {
      $(this).toggleClass('open');
      $(".side-widget").toggleClass('active');
      $("body").toggleClass("overflow");
    });


    // SCROLL TOP
    $('.scroll-top').on('click', function (e) {
      $("html, body").animate({
        scrollTop: 0
      }, 600);
      return false;
    });


    // PAGE TRANSITION
    $('body a').on('click', function (e) {
      if (typeof $(this).data('fancybox') == 'undefined') {
        e.preventDefault();
        var url = this.getAttribute("href");
        if (url.indexOf('#') != -1) {
          var hash = url.substring(url.indexOf('#'));
          if ($('body ' + hash).length != 0) {
            $('.page-transition').removeClass("active");
            $(".sandiwch").toggleClass("open");
            $(".site-menavigation").removeClass("active");
          }
        } else {
          $('.page-transition').toggleClass("active");
          setTimeout(function () {
            window.location = url;
          }, 1000);
        }
      }
    });


    // LOGO HOVER
    $(".logo-item").hover(function () {
        $('.logo-item').not(this).css({
          "opacity": "0.3"
        });
      },
      function () {
        $('.logo-item').not(this).css({
          "opacity": "1"
        });
      });


  });
  // END DOCUMENT READY


  // MASONRY
  $(window).load(function () {
    $('.projects').isotope({
      itemSelector: '.projects li',
      percentPosition: true
    });
  });


  // ISOTOPE FILTER
  var $container = $('.projects');
  $container.isotope({
    filter: '*',
    animationOptions: {
      duration: 750,
      easing: 'linear',
      queue: false
    }
  });


  // ISOTOPE FILTER
  $('.isotope-filter li').on('click', function (e) {
    $('.isotope-filter li.current').removeClass('current');
    $(this).addClass('current');

    var selector = $(this).attr('data-filter');
    $container.isotope({
      filter: selector,
      animationOptions: {
        duration: 750,
        easing: 'linear',
        queue: false
      }
    });
    return false;
  });


  // RANGE SLIDER
  var rangeSlider = function () {
    var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');

    slider.each(function () {

      value.each(function () {
        var value = $(this).prev().attr('value');
        $(this).html(value);
      });

      range.on('input', function () {
        $(this).next(value).html(this.value);
      });
    });
  };

  rangeSlider();


  // OUR HISTORY
  var swiper = new Swiper('.our-history', {
    slidesPerView: 5,
    spaceBetween: 0,
    pagination: {
      el: '.swiper-pagination',
      type: 'progressbar',
    },
    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
    },
	  breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    }
  });


  // TESTIMONIALS SLIDER
  var swiper = new Swiper('.testimonials-slider', {
    slidesPerView: 2,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
    }
  });


  // PROJECT SLIDER
  var swiper = new Swiper('.project-slider', {
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 30,
    centeredSlides: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
    }
  });


  // SLIDER
  var mainslider = new Swiper('.slider-main', {
    spaceBetween: 0,
    autoplay: {
      delay: 9500,
      disableOnInteraction: false,
    },
    loop: true,
    direction: 'vertical',
    loopedSlides: 1,
    thumbs: {
      swiper: slidercontent
    }
  });


  // SLIDER THUMBS
  var slidercontent = new Swiper('.slider-content', {
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 1,
    touchRatio: 0.2,
    slideToClickedSlide: true,
    loop: true,
    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'fraction',
    },
  });

  if ($(".slider-main")[0]) {
    mainslider.controller.control = slidercontent;
    slidercontent.controller.control = mainslider;
  } else {}


  // DATA BACKGROUND IMAGE
  var pageSection = $("*");
  pageSection.each(function (indx) {
    if ($(this).attr("data-background")) {
      $(this).css("background", "url(" + $(this).data("background") + ")");
    }
  });

  // DATA BACKGROUND COLOR
  var pageSection = $("*");
  pageSection.each(function (indx) {
    if ($(this).attr("data-background")) {
      $(this).css("background", $(this).data("background"));
    }
  });


  // COUNTER
  $(document).scroll(function () {
    $('.odometer').each(function () {
      var parent_section_postion = $(this).closest('section').position();
      var parent_section_top = parent_section_postion.top;
      if ($(document).scrollTop() > parent_section_top - 300) {
        if ($(this).data('status') == 'yes') {
          $(this).html($(this).data('count'));
          $(this).data('status', 'no');
        }
      }
    });
  });


  // STICKY NAVBAR
  $(window).on("scroll touchmove", function () {
    $('.navbar').toggleClass('sticky', $(document).scrollTop() > 0);

  });


  // STICKY UP DOWN
  var didScroll;
  var lastScrollTop = 0;
  var delta = 0;
  var navbarHeight = $('.navbar').outerHeight();

  $(window).scroll(function (event) {
    didScroll = true;
  });

  setInterval(function () {
    if (didScroll) {
      hasScrolled();
      didScroll = true;
    }
  }, 0);

  function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta)
      return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
      // Scroll Down
      $('.navbar').removeClass('nav-down').addClass('nav-up');
    } else {
      // Scroll Up
      if (st + $(window).height() < $(document).height()) {
        $('.navbar').removeClass('nav-up').addClass('nav-down');
      }
    }

    lastScrollTop = st;
  };


})(jQuery);
