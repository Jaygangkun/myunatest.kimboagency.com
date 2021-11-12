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
        showAlert($this);
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
      } else {
        $this.show();
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
      // $alertBar.css( "opacity", "1" );
      $alertBar.css( "display", "flex" );
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
  
function initProgramPage(){


  var $carousel = $('.main-carousel').flickity({
    cellAlign: 'left',
    contain: true,
    imagesLoaded: true,
    draggable: '>4',
    wrapAround: false,
    imagesLoaded: true,
    pageDots: false,
    percentPosition: true
  });

    <?php /**************************** Filtering Programs ************************************/ ?>

  // This is here to allow us to use Isotope without Layoutmode - Do not delete
  Isotope.Item.prototype._create = function() {
  // assign id, used for original-order sorting
    this.id = this.layout.itemGUID++;
    // transition objects
    this._transn = {
      ingProperties: {},
      clean: {},
      onEnd: {}
    };
    this.sortData = {};
  };

  Isotope.Item.prototype.layoutPosition = function() {
    this.emitEvent( 'layout', [ this ] );
  };

  Isotope.prototype.arrange = function( opts ) {
    // set any options pass
    this.option( opts );
    this._getIsInstant();
    // just filter
    this.filteredItems = this._filter( this.items );
    // flag for initalized
    this._isLayoutInited = true;
  };

  // layout mode that does not position items
  Isotope.LayoutMode.create('none');

  // --------------- //
  
  // quick search regex
var qsRegex;
var buttonFilter;
var gridFilter = function(element){
  var $this = $(this);
  
  var searchResult = qsRegex ? $this.text().match( qsRegex ) : true;

  var matchResult = this.matches(filterValueWithInclusives );
  return searchResult && matchResult;
  // return searchResult;
};

  var filters = [],
      inclusives = [],
      inclusivesString = "",
      filterValue = "",
      filterValueWithInclusivesArray = [],
      filterValueWithInclusives = "",
      $checkboxes = $('.day-checks .weekday, .day-checks .weekend'),
      $filterSeason = $('#filter-season'),
      $filterAge = $('#filter-age'),
      $filterGroups = $('#filter-groups'),
      $filterActivity = $('#filter-activity'),
      $filterAvail = $('#filter-space'),
      $filterLocation = $('#filter-location'),
      $slider = $('.events-section .filtered-programs-container'),
      $weekdaysCheck = $('#weekdays'),
      $weekdays = $('.weekday'),
      $weekendsCheck = $('#weekends'),
      $weekends = $('.weekend'),
      $noPrograms = $('.no-programs');

  // init Isotope
  $noPrograms.hide();

  var $grid = $('.filtered-programs-container').isotope({
    itemSelector: '.program',
    layoutMode: 'none',
    transitionDuration: 0
  });

  $grid.on( 'layoutComplete',
    function( event, laidOutItems ) {
      if (laidOutItems.length <= 0 ) {
        $noPrograms.show();
        $('.filtered-programs-container').hide();
      } else {
        $noPrograms.hide();
        $('.filtered-programs-container').show();
      }
    }
  );
  
  // use value of search field to filter
var $quicksearch = $('#quicksearch').keyup( debounce( function() {
  qsRegex = new RegExp( $quicksearch.val(), 'gi' );
  // $grid.isotope({filter: gridFilter});
  getFilters($grid);
}) );

// set parameters from location url
// '?season=' + seasonValue + '&age=' + ageValue + '&activity=' + activityValue + '&availability=' + availValue + '&location=' + locationValue + '&group=' + groupsValue + '&search=' + $('#quicksearch').val();
const urlParams = new URLSearchParams(location.search);
if(urlParams.get('season')){
  $filterSeason.val(urlParams.get('season'));
}

if(urlParams.get('age')){
  $filterAge.val(urlParams.get('age'));
}

if(urlParams.get('activity')){
  $filterActivity.val(urlParams.get('activity'));
}

if(urlParams.get('availability')){
  $filterAvail.val(urlParams.get('availability'));
}

if(urlParams.get('location')){
  $filterLocation.val(urlParams.get('location'));
}

if(urlParams.get('group')){
  $filterGroups.val(urlParams.get('group'));
}

if(urlParams.get('search')){
  $('#quicksearch').val(urlParams.get('search'));
  qsRegex = new RegExp( $quicksearch.val(), 'gi' );
}

if(urlParams.get('days')){
  var days = (urlParams.get('days')).split(',');
  for(var dindex = 0; dindex < days.length; dindex++){
    $('[value="' + days[dindex] + '"]').prop( "checked", true );
  }
}

getFilters($grid);
// debounce so filtering doesn't happen every millisecond
function debounce( fn, threshold ) {
  var timeout;
  threshold = threshold || 100;
  return function debounced() {
    clearTimeout( timeout );
    var args = arguments;
    var _this = this;
    function delayed() {
      fn.apply( _this, args );
    }
    timeout = setTimeout( delayed, threshold );
  };
}


  // bind Filter on season change
  $filterSeason.on( 'change', function () {
    getFilters($grid);
  });

  // Filter Age Range
  $filterAge.on( 'change', function() {
    getFilters($grid);
  });

  // Filter Activity
  $filterActivity.on( 'change', function() {
    getFilters($grid)
  });

   // Filter Groups
   $filterGroups.on( 'change', function() {
    getFilters($grid)
  });

  // Filter Availability
   $filterAvail.on( 'change', function() {
    getFilters($grid)
  });

  // Filter Location
   $filterLocation.on( 'change', function() {
    getFilters($grid)
  });

  // Combination Days
  $checkboxes.change( function() {
    getFilters($grid)
  });

  // Weekdays
  $weekdaysCheck.change( function() {
    if(this.checked) {
      $weekdays.prop( "checked", true );
    } else {
      $weekdays.prop( "checked", false );
    }
    getFilters($grid)
  });

  // Weekends
  $weekendsCheck.change( function() {
    if(this.checked) {
      $weekends.prop( "checked", true );
    } else {
      $weekends.prop( "checked", false );
    }
    getFilters($grid)
  });

  function getFilters($grid) {
    // Display/Reset all hidden list items
    $('.filtered-programs-container li.is-filtered').show();

    // Reset Filters + Inclusives
    filters.splice(0, filters.length);
    inclusives.splice(0, inclusives.length);
    inclusivesString = "";
    filterValue = "";
    filterValueWithInclusivesArray.splice(0, filterValueWithInclusivesArray.length);
    filterValueWithInclusives = "";

    var seasonValue = $filterSeason.val(),
        ageValue = $filterAge.val(),
        activityValue = $filterActivity.val(),
        availValue = $filterAvail.val(),
        locationValue = $filterLocation.val(),
        groupsValue = $filterGroups.val();

    // Season Filter
    if (seasonValue != "*" ) {
      filters.push(seasonValue);
    }

    // Age Filter
    if (ageValue != "*" ) {
      filters.push(ageValue);
    }

    // Activity Filter
    if (activityValue != "*" ) {
      filters.push(activityValue);
    }

    // Groups Filter
    if (groupsValue != "*" ) {
      filters.push(groupsValue);
    }

    // Avail Filter
    if (availValue != "*" ) {
      filters.push(availValue);
    }

    // Location Filter
    if (locationValue != "*" ) {
      filters.push(locationValue);
    }

    // Grab Inclusive Filters (activity / season / etc)
    filterValue = filters.length ? filters.join('') : '*';

    // Days Filters
    $checkboxes.each( function( i, elem ) {
      if ( elem.checked ) {
        inclusives.push( elem.value );
      }
    });

    // If Days ticked
      // Loop though all Days
      // Add filterValue to that day if not *
      // Join with comas
      // Add Filter Value
    // Else
      // Fliter Value

      if (inclusives.length) {
        for (var i = 0; i < inclusives.length; i++) {
          if (filterValue == "*") {
            filterValueWithInclusivesArray.push( inclusives[i]);
          } else {
            filterValueWithInclusivesArray.push( inclusives[i] + filterValue);
          }
        }
        filterValueWithInclusives = filterValueWithInclusivesArray.join(', ');
      } else {
        filterValueWithInclusives = filterValue;
      }

    // console.log(filterValueWithInclusives);

     // make new location url
        seasonValue = $filterSeason.val(),
          ageValue = $filterAge.val(),
          activityValue = $filterActivity.val(),
          availValue = $filterAvail.val(),
          locationValue = $filterLocation.val(),
          groupsValue = $filterGroups.val();
        var new_url = location.protocol + '//' + location.hostname + location.pathname + '?season=' + seasonValue + '&age=' + ageValue + '&activity=' + activityValue + '&availability=' + availValue + '&location=' + locationValue + '&group=' + groupsValue + '&search=' + $('#quicksearch').val() + '&days=' + inclusives.join(',');
        // console.log('new_url:', new_url);
        history.pushState(null, '', new_url);

  //  $grid.isotope({ filter: filterValueWithInclusives });
        $grid.isotope({filter: gridFilter});
    

    $('.program').removeClass('is-filtered');
    $('.program:visible').addClass('is-filtered');
 // $('.number-results').remove();
      var numItems = $('.is-filtered').length/2;
      if ( numItems != 0) {
        // $('.filtered-programs-container').append('<div class="number-results"><p>' + numItems + ' Results</p></div>');
        $('.number-results').html('<p>' + numItems + ' Results</p>')
      }

    // Hide list items to reset infinite scrolling
    $('.filtered-programs-list-container li.is-filtered').slice(5).hide();
    maxcount = 6;

    //here
    var isFlickity = true;
    if ( isFlickity ) {
      $carousel.flickity('destroy')
      $('.main-carousel').flickity({
        cellSelector: '.carousel-cell.is-filtered',
        cellAlign: 'left',
        contain: true,
        imagesLoaded: true,
        draggable: '>4',
        wrapAround: false,
        pageDots: false,
        percentPosition: true,
        resize: true
      });
    }
    isFlickity = !isFlickity;


  }


  $filterSeason.val('.fall').trigger('change');

  $("option[value='.fitness-centre-access']").remove();

<?php /**************************** END Filtering Programs ************************************/ ?>

//INFINITE SCROLLING ON PROGRAMS PAGE
$('.filtered-programs-list-container li.is-filtered').slice(5).hide();
  var mincount = 3;
  var maxcount = 6;

$(window).scroll(function() {
  if($(window).scrollTop() + $(window).height() >= $('.filtered-programs-list-container').height() + 1600) {
    // Fade in filtered list items
    $('.filtered-programs-list-container li.is-filtered').slice(mincount,maxcount).fadeIn(1200);
    // $("#loading").fadeIn(100).delay(1000).fadeOut(100);
    mincount = mincount;
    maxcount = maxcount+1;
  }
});
//INFINITE SCROLLING ON PROGRAMS PAGE

//TOGGLE BW LIST AND GRID VIEW
$('#list-button').click(function() {
  $('.filtered-programs-section ul.filtered-programs-list-container').addClass('display');
  $('.main-carousel.filtered-programs-container').addClass('hide');
  $(this).css('border-bottom-color', '#e9e980');
  $(this).siblings().css('border-bottom-color', '#418477');
});

$('#grid-button').click(function() {
  var numberedItems = $('.is-filtered').length;
  $('.filtered-programs-section ul.filtered-programs-list-container').removeClass('display');
  $('.main-carousel.filtered-programs-container').removeClass('hide');
  if ( numberedItems == 0) {
    $('.flickity-prev-next-button').hide();
  }
  $(this).css('border-bottom-color', '#e9e980');
  $(this).siblings().css('border-bottom-color', '#418477');
});
//TOGGLE BW LIST AND GRID VIEW
  $(document).on('click', '.selector', function() {
  $(this).css('border-bottom-color', '#e9e980');
        $(this).siblings().css('border-bottom-color', '#418477');
        var target = $(this).attr('rel');
        $("#"+target).show().siblings("div").hide();
        $("."+target).show().siblings("ul").hide();
        $("."+target).show().siblings("div").hide();

});

  }






<?php /**************************** SEARCH BAR ************************************/ ?>

$(window).on('load', function() {

    if($('.front-page').length > 0){
      $.ajax({
        url: '<?php echo get_site_url()?>/assets/themes/una/includes/featured-programs-lazyload.php',
        type: 'get',
        success: function(resp){
          $('#featured_programs_lazyload_content').html(resp);
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
          $('.flex-viewport').addClass('container');
          $(".slides").delay(2000).fadeIn(1);

          $('#featured_programs_lazyload').removeClass('loading');
          
          $(document).on('click', '.selector', function() {
  $(this).css('border-bottom-color', '#e9e980');
        $(this).siblings().css('border-bottom-color', '#418477');
        var target = $(this).attr('rel');
        $("#"+target).show().siblings("div").hide();
        $("."+target).show().siblings("ul").hide();
        $("."+target).show().siblings("div").hide();

});
        }
      })
    }

    if(    $('.programs-page').length > 0  && $('body').hasClass('page-programs')  ){
      $.ajax({
              url: '<?php echo get_site_url()?>/assets/themes/una/includes/all-activities-lazyload.php?v=' + new Date().getTime(),
        type: 'get',
        success: function(resp){
          $('#activities_content_wrap').html(resp);
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
          $('.flex-viewport').addClass('container');
          $(".slides").delay(2000).fadeIn(1);

          $('#activities_content').removeClass('loading');
          initProgramPage();
        }
      })
    }
    
});


  $(window).on('load', function() {
	$(".slides").delay(2000).fadeIn(1);
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
        $("#"+target).children('.flexslider').children().children('.slides').addClass( "display" );
        $("#"+target).siblings().children('.flexslider').children().children('.slides').removeClass( "display" );
        $("#"+target).siblings().children('.flexslider').children().children('.slides').css( 'display', 'none' );
        $("#"+target).children('.flexslider').children('.flex-direction-nav').addClass( "display" );
        $("#"+target).children('.container').children('.alert-container').addClass( "display" );

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
      $("div.question").not(this).removeClass("open");
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


if ($('#all-page-results li').length < 6 ){
$('.pages-search-button').css('display', 'none');
}





$('.top_want_menu a').first().attr('target', '_blank');


});

$(document).on('click', '#btn_show_filter', function(){
  
  if($(this).attr('status') == 'hide'){
    $('#filter_form').show();

    $(this).attr('status', 'show');
    $(this).html('Hide Filter');
  }
  else{
    $('#filter_form').hide();

    $(this).attr('status', 'hide');
    $(this).html('Show Filter');
  }
})
</script>