<?php defined('ABSPATH') or die(""); ?>
<!doctype html>
   <head>
       <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-2948964-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-2948964-1');
</script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="format-detection" content="telephone=no">
      
      <meta name="robots" content="noindex">

      <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
      <link rel="icon" href="<?php custom_url(); ?>/images/favicon.ico" type="image/png" />
      <!-- Begin Mailchimp Signup Form -->

<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

<style type="text/css">

            #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }

            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.

               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */

</style>
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
      <link rel="stylesheet" type="text/css" href="<?php custom_url(); ?>/bootstrap/bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href="<?php custom_url(); ?>/css/styles.css?ver=<?php echo time(); ?>"/>
      <link rel="stylesheet" href="https://use.typekit.net/rst7dgd.css">
      <?php include('includes/css_variable_styles.php'); ?>
      <?php wp_head(); ?>
      <link rel="stylesheet" href="<?php custom_url(); ?>/flexslider/flexslider.css" type="text/css">
      <script src="<?php custom_url(); ?>/flexslider/jquery.flexslider.js"></script>
      <link rel="stylesheet" href="<?php custom_url(); ?>/flickity/flickity.min.css" type="text/css">
      <script src="<?php custom_url(); ?>/flickity/flickity.pkgd.min.js"></script>
      <link rel="stylesheet" type="text/css" href="<?php custom_url(); ?>/mobilemenu/slicknav.css?ver=<?php echo time(); ?>"/>
      <link rel="stylesheet" type="text/css" href="<?php custom_url(); ?>/mobilemenu/slicknav.min.css?ver=<?php echo time(); ?>"/>
      <script src="<?php custom_url(); ?>/mobilemenu/jquery.slicknav.js"></script>
      <script src="<?php custom_url(); ?>/rellax/rellax.min.js"></script>
      <script src="<?php custom_url(); ?>/infinite-scroll/jquery.infinitescroll.min.js"></script>


   </head>
   <body <?php body_class(); ?>>

<?php if(!is_front_page()): ?>

<header class="mobile-header" id="page-header">
  <div class="search-container desktop">
    <div class="searchclose-container">
      <span class="search-close"><img src="<?php custom_url(); ?>/images/search-close.svg" alt="Close icon">CANCEL SEARCH</span>
    </div>
    <form class="form-inline" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
      <div class="form-group">
        <input class="form-control" type="text" value="" name="s" id="s" placeholder="What are you looking for?" />
      </div>
      <button type="submit" class="btn btn-default">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </form>
  </div>
  <div class="container-fluid header-section">
    <div class="row">
      <div class="col-4 col-md-3 header-logo">
        <a href="<?php echo site_url(); ?>">
          <img src="<?php custom_url(); ?>/images/UNA-logo-horizontal-reversed-white-trimmed.svg" class="una-icon" alt="una-icon">
        </a>
      </div><!--header-logo-->
      <div class="col-lg-8 desktop_menu col-md-8 col-sm-12">
        <div class="row top-level-menu">
          <div class="top_static_options col-sm-12 col-md-6">
            <span id= "search" class="open-search tooltip-container">
              <span class="tooltiptext">Search</span>
              <i class="fa fa-search"></i>
            </span>
            <a target="_blank" rel="noopener noreferrer" href="<?php custom_url(); ?>/login" class="tooltip-container">
              <span class="tooltiptext">Log In</span>
              <i class="fas fa-sign-in-alt"></i>
            </a>
          </div><!--top_static_options-->
        </div><!--top-level-menu-->
      </div><!--desktop_menu-->
    </div><!--row-->
  </div><!--header-section-->
</header>

<div class="parallax-header">
<header class="desktop-header" id="page-header">
  <div class="search-container desktop">
    <div class="searchclose-container">
      <span class="search-close"><img src="<?php custom_url(); ?>/images/search-close.svg" alt="Close icon">CANCEL SEARCH</span>
    </div>
    <form class="form-inline" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
      <div class="form-group">
        <input class="form-control" type="text" value="" name="s" id="s" placeholder="What are you looking for?" />
      </div>
      <button type="submit" class="btn btn-default">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </form>
  </div>
  <div class="container-fluid header-section">
    <div class="row">
      <div class="col-4 col-md-3 header-logo">
        <a href="<?php echo site_url(); ?>">
          <img src="<?php custom_url(); ?>/images/UNA-logo-horizontal-reversed-white-trimmed.svg" class="una-icon" alt="una-icon">
        </a>
      </div><!--header-logo-->
      <div class="col-lg-8 desktop_menu col-md-8 col-sm-12">
        <div class="row top-level-menu">
          <div class="top_static_options col-sm-12 col-md-6">
            <span id= "search" class="open-search tooltip-container">
              <span class="tooltiptext">Search</span>
              <i class="fa fa-search"></i>
            </span>
            <a target="_blank" rel="noopener noreferrer" href="<?php custom_url(); ?>/login" class="tooltip-container">
              <span class="tooltiptext">Log In</span>
              <i class="fas fa-sign-in-alt"></i>
            </a>
          </div><!--top_static_options-->
          <div class="top_want_menu_area">
            <div class="want_menu_tab">
              <span class="i-want-to-text">I want to...</span>
              <i class="fa fa-caret-down"></i>
              <div class="top_want_menu col-sm-12" style="display:none">
                <?php
                  $menu_locations = get_nav_menu_locations();
                  $menuID 		= $menu_locations['i_want_to_menu'];
                  $want_nav 		= wp_get_nav_menu_items($menuID);
                  foreach ( $want_nav as $nav_item ) {
                     echo '<a href="' . $nav_item->url . '" title="' . $nav_item->title . '">'. $nav_item->title . '</a>';
                  } ?>
              </div><!--//top_want_menu-->
            </div><!--want_menu_tab-->
          </div><!--top_want_menu_area-->
        </div><!--top-level-menu-->
        <div class="row col-12 second-level-menu">
          <?php wp_nav_menu( array( 'theme_location' => 'top_main_menu' ) ); ?>
          <div id="menu" class="mobile_menu"><?php wp_nav_menu( array( 'theme_location' => 'mobile_menu' ) ); ?></div>
        </div><!--second-level-menu-->
      </div><!--desktop_menu-->
    </div><!--row-->
  </div><!--header-section-->
</header>
<?php include('includes/banner-box.php'); ?>
</div><!--parallax-header-->

<?php elseif(is_front_page()): ?>

  <header class="mobile-header" id="page-header">
    <div class="search-container desktop">
      <div class="searchclose-container">
        <span class="search-close"><img src="<?php custom_url(); ?>/images/search-close.svg" alt="Close icon">CANCEL SEARCH</span>
      </div>
      <form class="form-inline" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
        <div class="form-group">
          <input class="form-control" type="text" value="" name="s" id="s" placeholder="What are you looking for?" />
        </div>
        <button type="submit" class="btn btn-default">
          <i class="fa fa-search" aria-hidden="true"></i>
        </button>
      </form>
    </div>
    <div class="container-fluid header-section">
      <div class="row">
        <div class="col-4 col-md-3 header-logo">
          <a href="<?php echo site_url(); ?>">
            <img src="<?php custom_url(); ?>/images/UNA-logo-horizontal-reversed-white-trimmed.svg" class="una-icon" alt="una-icon">
          </a>
        </div><!--header-logo-->
        <div class="col-lg-8 desktop_menu col-md-8 col-sm-12">
          <div class="row top-level-menu">
            <div class="top_static_options col-sm-12 col-md-6">
              <span id= "search" class="open-search tooltip-container">
                <span class="tooltiptext">Search</span>
                <i class="fa fa-search"></i>
              </span>
              <a target="_blank" rel="noopener noreferrer" href="<?php custom_url(); ?>/login" class="tooltip-container">
                <span class="tooltiptext">Log In</span>
                <i class="fas fa-sign-in-alt"></i>
              </a>
            </div><!--top_static_options-->
          </div><!--top-level-menu-->
        </div><!--desktop_menu-->
      </div><!--row-->
    </div><!--header-section-->
  </header>

  <div class="parallax-header">
    <div class="hero-parallax-container">
      <header class="desktop-header" id="page-header">
        <div class="search-container desktop">
          <div class="searchclose-container">
            <span class="search-close"><img src="<?php custom_url(); ?>/images/search-close.svg" alt="Close icon">CANCEL SEARCH</span>
          </div>
          <form class="form-inline" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
            <div class="form-group">
              <input class="form-control" type="text" value="" name="s" id="s" placeholder="What are you looking for?" />
            </div>
            <button type="submit" class="btn btn-default">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
        </div>
        <div class="container-fluid header-section">
          <div class="row">
            <div class="col-4 col-md-3 header-logo">
              <a href="<?php echo site_url(); ?>">
                <img src="<?php custom_url(); ?>/images/UNA-logo-horizontal-reversed-white-trimmed.svg" class="una-icon" alt="una-icon">
              </a>
            </div><!--header-logo-->
            <div class="col-lg-8 desktop_menu col-md-8 col-sm-12">
              <div class="row top-level-menu">
                <div class="top_static_options col-sm-12 col-md-6">
                  <span id= "search" class="open-search tooltip-container">
                    <span class="tooltiptext">Search</span>
                    <i class="fa fa-search"></i>
                  </span>
                  <a target="_blank" rel="noopener noreferrer" href="<?php custom_url(); ?>/login" class="tooltip-container">
                    <span class="tooltiptext">Log In</span>
                    <i class="fas fa-sign-in-alt"></i>
                  </a>
                </div><!--top_static_options-->
                <div class="top_want_menu_area">
                  <div class="want_menu_tab">
                    <span class="i-want-to-text">I want to...</span>
                    <i class="fa fa-caret-down"></i>
                    <div class="top_want_menu col-sm-12" style="display:none">
                      <?php
                        $menu_locations = get_nav_menu_locations();
                        $menuID 		= $menu_locations['i_want_to_menu'];
                        $want_nav 		= wp_get_nav_menu_items($menuID);
                        foreach ( $want_nav as $nav_item ) {
                          echo '<a href="' . $nav_item->url . '" title="' . $nav_item->title . '">'. $nav_item->title . '</a>';
                        } ?>
                    </div><!--//top_want_menu-->
                  </div><!--want_menu_tab-->
                </div><!--top_want_menu_area-->
              </div><!--top-level-menu-->
              <div class="row col-12 second-level-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'top_main_menu' ) ); ?>
                <div id="menu" class="mobile_menu"><?php wp_nav_menu( array( 'theme_location' => 'mobile_menu' ) ); ?></div>
              </div><!--second-level-menu-->
            </div><!--desktop_menu-->
          </div><!--row-->
        </div><!--header-section-->
      </header>
  </div>
<div class="flexslider frontpage-top-flexslider" >
   <div id="hero-slideshow">

   <div class="mb_blurb_container">
   <div class="container">
      <div class="row">
         <?php if( get_field('blurb_below_slider_front') ) { ?>
         <div class="col-lg-10 offset-lg-1 mb_blurb">
            <?php the_field('blurb_below_slider_front'); ?>
         </div>
         <!--//mb_blurb-->
         <?php } ?>
      </div>
   </div>
   </div><!--mb blurb container-->

   <ul class="slides">
         <?php
            if( have_rows('image_slider') ):

            while ( have_rows('image_slider') ) : the_row(); ?>
         <li>
            <?php
               /* NOTE: This image slider displays just fine even when there is only 1 image in the slider. There is NO need to do a conditional statement of 1 image. */

               $the_image = wp_get_attachment_image_src( get_sub_field('image_slide'), 'large' ); ?>
            <div class="bg_image parallax-hero"  style="background-image: url(<?php echo $the_image[0]; ?>);"></div>
         </li>
         <?php
            endwhile;

            else :

            endif;

            ?>
      </ul>
   </div>
   <!--//hero-slideshow-->
</div>
</div><!--parallax-header-->

<?php elseif(is_page_template( 'default-template.php' )): ?>
  <header class="mobile-header" id="page-header">
    <div class="search-container desktop">
      <div class="searchclose-container">
        <span class="search-close"><img src="<?php custom_url(); ?>/images/search-close.svg" alt="Close icon">CANCEL SEARCH</span>
      </div>
      <form class="form-inline" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
        <div class="form-group">
          <input class="form-control" type="text" value="" name="s" id="s" placeholder="What are you looking for?" />
        </div>
        <button type="submit" class="btn btn-default">
          <i class="fa fa-search" aria-hidden="true"></i>
        </button>
      </form>
    </div>
    <div class="container-fluid header-section">
      <div class="row">
        <div class="col-4 col-md-3 header-logo">
          <a href="<?php echo site_url(); ?>">
            <img src="<?php custom_url(); ?>/images/UNA-logo-horizontal-reversed-white-trimmed.svg" class="una-icon" alt="una-icon">
          </a>
        </div><!--header-logo-->
        <div class="col-lg-8 desktop_menu col-md-8 col-sm-12">
          <div class="row top-level-menu">
            <div class="top_static_options col-sm-12 col-md-6">
              <span id= "search" class="open-search tooltip-container">
                <span class="tooltiptext">Search</span>
                <i class="fa fa-search"></i>
              </span>
              <a target="_blank" rel="noopener noreferrer" href="<?php custom_url(); ?>/login" class="tooltip-container">
                <span class="tooltiptext">Log In</span>
                <i class="fas fa-sign-in-alt"></i>
              </a>
            </div><!--top_static_options-->
          </div><!--top-level-menu-->
        </div><!--desktop_menu-->
      </div><!--row-->
    </div><!--header-section-->
  </header>

  <div class="parallax-header">
<header class="desktop-header" id="page-header">
  <div class="search-container desktop">
    <div class="searchclose-container">
      <span class="search-close"><img src="<?php custom_url(); ?>/images/search-close.svg" alt="Close icon">CANCEL SEARCH</span>
    </div>
    <form class="form-inline" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
      <div class="form-group">
        <input class="form-control" type="text" value="" name="s" id="s" placeholder="What are you looking for?" />
      </div>
      <button type="submit" class="btn btn-default">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </form>
  </div>
  <div class="container-fluid header-section">
    <div class="row">
      <div class="col-4 col-md-3 header-logo">
        <a href="<?php echo site_url(); ?>">
          <img src="<?php custom_url(); ?>/images/UNA-logo-horizontal-reversed-white-trimmed.svg" class="una-icon" alt="una-icon">
        </a>
      </div><!--header-logo-->
      <div class="col-lg-8 desktop_menu col-md-8 col-sm-12">
        <div class="row top-level-menu">
          <div class="top_static_options col-sm-12 col-md-6">
            <span id= "search" class="open-search tooltip-container">
              <span class="tooltiptext">Search</span>
              <i class="fa fa-search"></i>
            </span>
            <a target="_blank" rel="noopener noreferrer" href="<?php custom_url(); ?>/login" class="tooltip-container">
              <span class="tooltiptext">Log In</span>
              <i class="fas fa-sign-in-alt"></i>
            </a>
          </div><!--top_static_options-->
          <div class="top_want_menu_area">
            <div class="want_menu_tab">
              <span class="i-want-to-text">I want to...</span>
              <i class="fa fa-caret-down"></i>
              <div class="top_want_menu col-sm-12" style="display:none">
                <?php
                  $menu_locations = get_nav_menu_locations();
                  $menuID 		= $menu_locations['i_want_to_menu'];
                  $want_nav 		= wp_get_nav_menu_items($menuID);
                  foreach ( $want_nav as $nav_item ) {
                     echo '<a href="' . $nav_item->url . '" title="' . $nav_item->title . '">'. $nav_item->title . '</a>';
                  } ?>
              </div><!--//top_want_menu-->
            </div><!--want_menu_tab-->
          </div><!--top_want_menu_area-->
        </div><!--top-level-menu-->
        <div class="row col-12 second-level-menu">
          <?php wp_nav_menu( array( 'theme_location' => 'top_main_menu' ) ); ?>
          <div id="menu" class="mobile_menu"><?php wp_nav_menu( array( 'theme_location' => 'mobile_menu' ) ); ?></div>
        </div><!--second-level-menu-->
      </div><!--desktop_menu-->
    </div><!--row-->
  </div><!--header-section-->
</header>
<p>testttt</p>
<?php include('tribe-events/inc/banner-box.php'); ?>
</div><!--parallax-header-->
<?php elseif(is_archive( 'default-template.php' )): ?>
  <header class="mobile-header" id="page-header">
    <div class="search-container desktop">
      <div class="searchclose-container">
        <span class="search-close"><img src="<?php custom_url(); ?>/images/search-close.svg" alt="Close icon">CANCEL SEARCH</span>
      </div>
      <form class="form-inline" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
        <div class="form-group">
          <input class="form-control" type="text" value="" name="s" id="s" placeholder="What are you looking for?" />
        </div>
        <button type="submit" class="btn btn-default">
          <i class="fa fa-search" aria-hidden="true"></i>
        </button>
      </form>
    </div>
    <div class="container-fluid header-section">
      <div class="row">
        <div class="col-4 col-md-3 header-logo">
          <a href="<?php echo site_url(); ?>">
            <img src="<?php custom_url(); ?>/images/UNA-logo-horizontal-reversed-white-trimmed.svg" class="una-icon" alt="una-icon">
          </a>
        </div><!--header-logo-->
        <div class="col-lg-8 desktop_menu col-md-8 col-sm-12">
          <div class="row top-level-menu">
            <div class="top_static_options col-sm-12 col-md-6">
              <span id= "search" class="open-search tooltip-container">
                <span class="tooltiptext">Search</span>
                <i class="fa fa-search"></i>
              </span>
              <a target="_blank" rel="noopener noreferrer" href="<?php custom_url(); ?>/login" class="tooltip-container">
                <span class="tooltiptext">Log In</span>
                <i class="fas fa-sign-in-alt"></i>
              </a>
            </div><!--top_static_options-->
          </div><!--top-level-menu-->
        </div><!--desktop_menu-->
      </div><!--row-->
    </div><!--header-section-->
  </header>

  <div class="parallax-header">
<header class="desktop-header" id="page-header">
  <div class="search-container desktop">
    <div class="searchclose-container">
      <span class="search-close"><img src="<?php custom_url(); ?>/images/search-close.svg" alt="Close icon">CANCEL SEARCH</span>
    </div>
    <form class="form-inline" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
      <div class="form-group">
        <input class="form-control" type="text" value="" name="s" id="s" placeholder="What are you looking for?" />
      </div>
      <button type="submit" class="btn btn-default">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </form>
  </div>
  <div class="container-fluid header-section">
    <div class="row">
      <div class="col-4 col-md-3 header-logo">
        <a href="<?php echo site_url(); ?>">
          <img src="<?php custom_url(); ?>/images/UNA-logo-horizontal-reversed-white-trimmed.svg" class="una-icon" alt="una-icon">
        </a>
      </div><!--header-logo-->
      <div class="col-lg-8 desktop_menu col-md-8 col-sm-12">
        <div class="row top-level-menu">
          <div class="top_static_options col-sm-12 col-md-6">
            <span id= "search" class="open-search tooltip-container">
              <span class="tooltiptext">Search</span>
              <i class="fa fa-search"></i>
            </span>
            <a target="_blank" rel="noopener noreferrer" href="<?php custom_url(); ?>/login" class="tooltip-container">
              <span class="tooltiptext">Log In</span>
              <i class="fas fa-sign-in-alt"></i>
            </a>
          </div><!--top_static_options-->
          <div class="top_want_menu_area">
            <div class="want_menu_tab">
              <span class="i-want-to-text">I want to...</span>
              <i class="fa fa-caret-down"></i>
              <div class="top_want_menu col-sm-12" style="display:none">
                <?php
                  $menu_locations = get_nav_menu_locations();
                  $menuID 		= $menu_locations['i_want_to_menu'];
                  $want_nav 		= wp_get_nav_menu_items($menuID);
                  foreach ( $want_nav as $nav_item ) {
                     echo '<a href="' . $nav_item->url . '" title="' . $nav_item->title . '">'. $nav_item->title . '</a>';
                  } ?>
              </div><!--//top_want_menu-->
            </div><!--want_menu_tab-->
          </div><!--top_want_menu_area-->
        </div><!--top-level-menu-->
        <div class="row col-12 second-level-menu">
          <?php wp_nav_menu( array( 'theme_location' => 'top_main_menu' ) ); ?>
          <div id="menu" class="mobile_menu"><?php wp_nav_menu( array( 'theme_location' => 'mobile_menu' ) ); ?></div>
        </div><!--second-level-menu-->
      </div><!--desktop_menu-->
    </div><!--row-->
  </div><!--header-section-->
</header>
<?php include('tribe-events/inc/banner-box.php'); ?>
</div><!--parallax-header-->

<?php endif; ?><!-- end of if statement for pages-->


<?php include('includes/alert-box-global.php'); ?>