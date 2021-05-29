<?php defined('ABSPATH') or die(""); ?>

<script type="text/javascript">
$(document).ready(function() {



  <?php /**************************** Alerts ************************************/ ?>

    // Vars
    var $globalaAlertBars = $(".global-alert"),
        $globalaAlertContainer = $(".global-alert-container"),
        $globalaAlertClose = $(".global-alert .alert-close"),
        $pageAlertBars = $(".page-alert"),
        $pageAlertClose = $(".page-alert .alert-close");

    // Check for exsisting Cookies, Hide alerts if nessacery
    $globalaAlertBars.each(function( index ) {
      var $this = $(this),
          alertCookie = $this.data("cookie");
      if (Cookies.get(alertCookie)) {
        hideAlert($this);
      } else {
        showAlert($globalaAlertContainer);
      }
    });

    // On Close, Hide and set Cookie
    $globalaAlertClose.click(function() {
      var $this = $(this),
          $thisAlertBar = $this.parents(".global-alert"),
          alertCookie = $this.data("cookie");
      closeAlert($thisAlertBar, alertCookie)
    });

    // Check for exsisting Cookies, Hide alerts if nessacery
    $pageAlertBars.each(function( index ) {
      var $this = $(this),
          alertCookie = $this.data("cookie");
      if (Cookies.get(alertCookie)) {
        hideAlert($this);
      }
    });

    // On Close, Hide and set Cookie
    $pageAlertClose.click(function() {
      var $this = $(this),
          $thisAlertBar = $this.parents(".page-alert"),
          alertCookie = $this.data("cookie");
      closeAlert($thisAlertBar, alertCookie)
    });

    function hideAlert($alertBar) {
      $alertBar.hide();
    }

    function showAlert($alertBar) {
      $alertBar.css( "opacity", "1" );
    }

    function closeAlert($alertBar, cookieName) {
      Cookies.set(cookieName, 'viewed');
      $alertBar.fadeOut();
    }

  <?php /**************************** END Alerts ************************************/ ?>

  <?php /**************************** Scroll to Top ************************************/ ?>
  var backToTopButton = $(".back_top_animated_arrow");

  function backToTop(lengthOfScroll) {
    var pageScroll = $(window).scrollTop(),
    pageScroll = $(window).scrollTop();
    if (pageScroll >= lengthOfScroll){
      backToTopButton.fadeIn();
    } else {
      backToTopButton.fadeOut();
    }
  }

  backToTopButton.click(function(event) {
    event.preventDefault();
    window.scrollTo(0, 0);
  })

  <?php /**************************** END Scroll to Top ************************************/ ?>

<?php /**************************** SEARCH BAR ************************************/ ?>


  $(window).on('load', function() {
	$(".slides").delay(2000).fadeIn(1);
	
	    console.log("form submitted");
});

var parallax = document.querySelectorAll(".parallax-hero");
var	speed = -0.25;

window.onscroll = function() {
	[].slice.call(parallax).forEach(function(el, i) {

		var windowYOffset = window.pageYOffset,
			elBackgrounPos = "50% " + (windowYOffset * speed + i * 800) + "-10px";

		el.style.backgroundPosition = elBackgrounPos;

	});
};


$(function() {


  $('div.want_menu_tab').click(function () {
    $('.top_want_menu').toggle()
  });

  <?php /**** BEGIN "I want to..." TAB ****/ ?>
  $('div.want_menu_tab').mouseover(function(){
    $('div.top_want_menu').css('display','inline-block');
  });

  $('div.want_menu_tab').mouseout(function() {
    $('div.top_want_menu').css('display','none');
  });
  <?php /**** END "I want to..." TAB ****/ ?>


  $('.open-search').click(function() {
    $('div.search-container').fadeIn('fast');
    $('div.search-container input[type=text]').focus();
    //$('div.search-container').addClass('active');
  });

  $('span.search-close').click(function() {
    $('div.search-container').fadeOut('fast');
  });



  $('div.search-container').click(function(event) {
    if ($(event.target).hasClass("search-container")) {
      $('div.search-container').fadeOut('fast');
    }
  });

});


     $('.selector').on('click', function(){
        $(this).css('border-bottom-color', '#e9e980');
        $(this).siblings().css('border-bottom-color', '#418477');
        var target = $(this).attr('rel');
        $("#"+target).show().siblings("div").hide();
        $("."+target).show().siblings("ul").hide();
        $("."+target).show().siblings("div").hide();

     });

      $('.selector-loop').on('click', function(){
        $(this).css('border-bottom-color', '#e9e980');
        $(this).siblings().css('border-bottom-color', '#418477');
        var target = $(this).attr('rel');
        $("#"+target).children().children('.slides').addClass( "display" );
        $("#"+target).siblings().children().children('.slides').removeClass( "display" );
        $("#"+target).siblings().children().children('.slides').css( 'display', 'none' );
        $("#"+target).show();
        $("#"+target).siblings().hide();



     });




  $('ul#menu-desktop-menu > li').hover(function(){
    $(this).children('ul.sub-menu, a').addClass("hover-link");
  }, function () {
    $(this).children('ul.sub-menu, a').removeClass("hover-link");
});

$('ul#menu-about-menu > li').hover(function(){
    $(this).children('ul.sub-menu, a').addClass("hover-link");
  }, function () {
    $(this).children('ul.sub-menu, a').removeClass("hover-link");
});

$('ul#menu-contact-menu > li').hover(function(){
    $(this).children('ul.sub-menu, a').addClass("hover-link");
  }, function () {
    $(this).children('ul.sub-menu, a').removeClass("hover-link");
});

$('.desktop_menu ul.sub-menu li').hover(function(){
    $(this).find('a:first').addClass("hover-page");
  }, function () {
    $(this).find('a:first').removeClass("hover-page");
});




//First Column First Loop



//Clara Edits

$('.events-section .flexslider').flexslider({
  // slideshowSpeed:	3000,
  animation: 'slide',
  itemWidth: 349,
  itemMargin: 32,
  touch: true,
  slideshow: true,
  minItems: 1,
  maxItems: 3,
});

$('.calendar-section .flexslider').flexslider({
  // slideshowSpeed:	3000,
  animation: 'slide',
  itemWidth: 349,
  itemMargin: 27,
  touch: true,
  slideshow: false,
  minItems: 1,
  maxItems: 3,
});

$('.flexslider').flexslider({
  // slideshowSpeed:	3000
});

$('.flex-viewport').addClass('container');



//Slick nav

  $('#menu-desktop-menu-1').slicknav();
// Fade In Effect
  // animateInView();

// Trigger events when objects scroll into view
// if ( $(window).width() > 991) {
//  $(window).scroll(function () {
//    animateInView();
// });
// }

$(window).scroll(function () {
        animateInView();
        backToTop(300);
    });

  function animateInView(){
    var scrolledAmount = $(window).scrollTop(),
        bottomOfWindow = scrolledAmount + $(window).height();

        // $('.pillar_icon img').addClass('expand-icon');

        $('.fading').each(function () {
            var cardTop = $(this).offset().top;

            if(cardTop <= bottomOfWindow ){
                $(this).addClass('animate');
                $(this).find('.pillar_icon img').addClass('expand-icon');
            } else { // else is for testing only without refreshing. either keep or remove later.
                $(this).removeClass('animate');
                $(this).find('.pillar_icon img').removeClass('expand-icon');
            }
        });

  }



  // Paralax Hero on Homepage
  var winWidth = $(window).width();
  var winHeight = $(window).height();
  $(window).on('resize', function(){
    winWidth = $(window).width();
  });

  $(window).scroll(function() {
    if (winWidth > 1024 ) {
      var scrolled = $(window).scrollTop();
      $('.parallax-hero').each(function(index, element) {
        var pageScroll = $(window).scrollTop();
        var percentscrolled = (pageScroll / 800)*100;
        var pxValue = percentscrolled * 1.5 + 'px';
        $(this).css('background-position-y', pxValue);
      })
    }
  })

    //   // const els = document.getElementsByClassName("parallax-hero");
  //   // Array.prototype.forEach.call(els, function(el) {
  //   //   window.addEventListener("scroll", () => {
  //   //     let offset = window.pageYOffset;
  //   //     el.style.backgroundPositionY = `${offset * 0.6}px`;
  //   //   });
  //   // });


//Toggle FAQ

$('ul.green-depot-faq div.answer').hide();

$('ul.green-depot-faq div.question').click(function() {
  var toggle = $(this).nextUntil('div.question');
  toggle.slideToggle('fast');
  $(this).toggleClass("open");
  $('div.answer').not(toggle).slideUp('fast');
});

//Display Search Error
if ($('#all-page-results li').length == 0){
$('#pages-error-message').css('display', 'block');
}

if ($('.calendar-list li').length == 0){
$('#calendar-error-message').css('display', 'block');
}

if ($('#all-post-results li').length == 0){
$('#posts-error-message').css('display', 'block');
}

if ($('#all-post-results li').length < 6 ){
$('.news-search-button').css('display', 'none');
}

if ($('#all-pages-results li').length < 6 ){
$('.pages-search-button').css('display', 'none');
}


$('.top_want_menu a').first().attr('target', '_blank');


});


</script>

