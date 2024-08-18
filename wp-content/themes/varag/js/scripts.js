(function ($) {
  $(document).ready(function () {
    "use strict";


    //INPUT MASK
    let phoneInput = document.querySelector(".phone");
    let btn = document.querySelector(".btn-form");

    // const phoneMask = new IMask(phoneInput, {
    //   mask: "+{7}(000)000-00-00",
    // });

    /* phoneInput.addEventListener("input", phoneInputHandler);
    btn.addEventListener("click", btnHandler);

    function phoneInputHandler() {
      if (phoneMask.masked.isComplete) {
        btn.classList.add("btn--active");
      } else {
        btn.classList.remove("btn--active");
      }
    } */

    async function btnHandler(e) {
      e.preventDefault();
      return await fetch("send_msg.php", {
        method: "POST",
        body: phoneMask.unmaskedValue,
      });
    }


    // BACK BUTTON RELOAD
    window.onpageshow = function (event) {
      if (event.persisted) {
        window.location.reload()
      }
    };

    /*PRELOADER*/
   /*  $(window).on('load', function () {
      $('#preloader-active').delay(450).fadeOut('slow');
      $('body').delay(450).css({
          'overflow': 'visible'
      });
      var counter = 0;
      var c = 0;
      var i = setInterval(function () {
          $(".loading-page .counter .number").html(c + "%");
          $(".loading-page .counter .line").css("width", c + "%");

          counter++; c++;
          if (counter == 101) {
              clearInterval(i);
          }
      }, 10);
  });
 */


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

      $('input[name="phone"]').mask('+7 (999) 999-99-99');

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
    slidesPerView: 2,
    spaceBetween: 20,
    pagination: {
      el: '.swiper-pagination',
      type: 'progressbar',
    },
    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev',
    },
    breakpoints: {
      320: {
        // slidesPerView: 2,
        spaceBetween: 20,
      },
      640: {
        // slidesPerView: 2,
        spaceBetween: 20,
      },
      992: {
        // slidesPerView: 2,
        spaceBetween: 20,
      },
      1024: {
        // slidesPerView: 2,
        spaceBetween: 20,
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


  /*   // SLIDER
    var mainslider = new Swiper('.slider-main', {
      spaceBetween: 0,
      autoplay: {
        delay: 9500,
        disableOnInteraction: false,
      },
      loop: true,
      direction: 'vertical',
      loopedSlides: 1,
      touchRatio: 0,
      thumbs: {
        swiper: slidercontent
      }
    }); */


  // SLIDER CONTENT
  /*   var slidercontent = new Swiper('.slider-content', {
      spaceBetween: 10,
      centeredSlides: true,
      slidesPerView: 1,
      touchRatio: 0,
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
    } else {} */


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

  // FORM CALCULATOR
  $(".form").change(function () {
    var totalPrice = parseFloat($('#value1').val()) + parseFloat($('#value2').val()) + parseFloat($('#value3').val()) + parseFloat($('#value4').val()),
      values = [];

    $('input[type=checkbox], input[type=radio]').each(function () {
      if ($(this).is(':checked')) {
        values.push($(this).val());
        totalPrice += parseInt($(this).val());
      }
    });

    $("#result").text(totalPrice);


  });

  $(".form").change(function () {
    total = 0;
    totalPrice();
  }).trigger("change");

  /* FILTER */
  $('.cd-filter-trigger').on('click', function () {
    triggerFilter(true);
  });
  $('.cd-filter .cd-close').on('click', function () {
    triggerFilter(false);
  });

  function triggerFilter($bool) {
    var elementsToTrigger = $([$('.cd-filter-trigger'), $('.cd-filter'), $('.cd-tab-filter'), $('.cd-gallery')]);
    elementsToTrigger.each(function () {
      $(this).toggleClass('filter-is-visible', $bool);
    });
  }

  //mobile version - detect click event on filters tab
  var filter_tab_placeholder = $('.cd-tab-filter .placeholder a'),
    filter_tab_placeholder_default_value = 'Select',
    filter_tab_placeholder_text = filter_tab_placeholder.text();

  $('.cd-tab-filter li').on('click', function (event) {
    //detect which tab filter item was selected
    var selected_filter = $(event.target).data('type');

    //check if user has clicked the placeholder item
    if ($(event.target).is(filter_tab_placeholder)) {
      (filter_tab_placeholder_default_value == filter_tab_placeholder.text()) ? filter_tab_placeholder.text(filter_tab_placeholder_text) : filter_tab_placeholder.text(filter_tab_placeholder_default_value);
      $('.cd-tab-filter').toggleClass('is-open');

      //check if user has clicked a filter already selected 
    } else if (filter_tab_placeholder.data('type') == selected_filter) {
      filter_tab_placeholder.text($(event.target).text());
      $('.cd-tab-filter').removeClass('is-open');

    } else {
      //close the dropdown and change placeholder text/data-type value
      $('.cd-tab-filter').removeClass('is-open');
      filter_tab_placeholder.text($(event.target).text()).data('type', selected_filter);
      filter_tab_placeholder_text = $(event.target).text();

      //add class selected to the selected filter item
      $('.cd-tab-filter .selected').removeClass('selected');
      $(event.target).addClass('selected');
    }
  });

  //close filter dropdown inside lateral .cd-filter 
  $('.cd-filter-block h4').on('click', function () {
    $(this).toggleClass('closed').siblings('.cd-filter-content').slideToggle(300);
  })

  // //fix lateral filter and gallery on scrolling
  // $(window).on('scroll', function () {
  //   (!window.requestAnimationFrame) ? fixGallery() : window.requestAnimationFrame(fixGallery);
  // });

  // function fixGallery() {
  //   var offsetTop = $('.cd-main-content').offset().top,
  //     scrollTop = $(window).scrollTop();
  //   (scrollTop >= offsetTop) ? $('.cd-main-content').addClass('is-fixed') : $('.cd-main-content').removeClass('is-fixed');
  // }

  /************************************
    MitItUp filter settings
    More details: 
    https://mixitup.kunkalabs.com/
    or:
    http://codepen.io/patrickkunka/
  *************************************/

  // buttonFilter.init();
  // $('.cd-gallery ul').mixItUp({
  //   controls: {
  //     enable: false
  //   },
  //   callbacks: {
  //     onMixStart: function () {
  //       $('.cd-fail-message').fadeOut(200);
  //     },
  //     onMixFail: function () {
  //       $('.cd-fail-message').fadeIn(200);
  //     }
  //   }
  // });

  //search filtering
  //credits http://codepen.io/edprats/pen/pzAdg
  var inputText;
  var $matching = $();

  var delay = (function () {
    var timer = 0;
    return function (callback, ms) {
      clearTimeout(timer);
      timer = setTimeout(callback, ms);
    };
  })();

  $(".cd-filter-content input[type='search']").keyup(function () {
    // Delay function invoked to make sure user stopped typing
    delay(function () {
      inputText = $(".cd-filter-content input[type='search']").val().toLowerCase();
      // Check to see if input field is empty
      if ((inputText.length) > 0) {
        $('.mix').each(function () {
          var $this = $(this);

          // add item to be filtered out if input text matches items inside the title   
          if ($this.attr('class').toLowerCase().match(inputText)) {
            $matching = $matching.add(this);
          } else {
            // removes any previously matched item
            $matching = $matching.not(this);
          }
        });
        $('.cd-gallery ul').mixItUp('filter', $matching);
      } else {
        // resets the filter to show all item if input is empty
        $('.cd-gallery ul').mixItUp('filter', 'all');
      }
    }, 200);
  });

})(jQuery);
