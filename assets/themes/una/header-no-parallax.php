<?php defined('ABSPATH') or die(""); ?>
<!doctype html>
<html lang="en">
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
               </div>
               <div class="col-lg-8 desktop_menu col-md-8 col-sm-12">
                  <div class="row top-level-menu">
                      <div class="top_static_options col-sm-12 col-md-6">
                      <span id= "search" class="open-search tooltip-container">
                        <span class="tooltiptext">Search</span>
                        <i class="fa fa-search"></i>
                     </span>
                     <a href="<?php custom_url(); ?>/login" target="_blank" class="tooltip-container">
                        <span class="tooltiptext">Log In</span>
                        <i class="fas fa-sign-in-alt"></i>
                     </a>
                     </div>
                     <div class="top_want_menu_area">
                        <div class="want_menu_tab">
                          <span class="i-want-to-text">I want to...</span>
                          <i class="fa fa-caret-down"></i>
                          <div class="top_want_menu col-sm-12" style="display:none">
                           <?php
                              /* echo out the menu items instead of using wp_nav_menu
                              * https://wordpress.stackexchange.com/questions/111060/
                              */
                              $menu_locations = get_nav_menu_locations();
                              $menuID 		= $menu_locations['i_want_to_menu'];
                              $want_nav 		= wp_get_nav_menu_items($menuID);
                              foreach ( $want_nav as $nav_item ) {
                                 echo '<a href="' . $nav_item->url . '" title="' . $nav_item->title . '">'. $nav_item->title . '</a>';
                              }
                           ?>
                        </div>
                        <!--//top_want_menu-->
                        </div>
                     </div><!--top want menu area div -->
                  </div>
                  <!-- end of first row-->
                  <div class="row col-12 second-level-menu">
                     <?php wp_nav_menu( array( 'theme_location' => 'top_main_menu' ) ); ?>
                     <div id="menu" class="mobile_menu"><?php wp_nav_menu( array( 'theme_location' => 'mobile_menu' ) ); ?></div>
                     </div>
                  </div>


               </div>
            </div>
            <!--end of row-->
         </div>
         <!--end of container-->
      </header>
