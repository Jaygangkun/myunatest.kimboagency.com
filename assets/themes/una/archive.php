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
      <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
      <link rel="icon" href="<?php custom_url(); ?>/images/favicon.ico" type="image/png" />
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
      <link rel="stylesheet" type="text/css" href="<?php custom_url(); ?>/bootstrap/bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href="<?php custom_url(); ?>/css/styles.css?ver=<?php echo time(); ?>"/>
      <link rel="stylesheet" href="https://use.typekit.net/rst7dgd.css">
      <?php include('includes/css_variable_styles.php'); ?>
      <?php wp_head(); ?>
      <link rel="stylesheet" href="<?php custom_url(); ?>/flexslider/flexslider.css" type="text/css">
      <script src="<?php custom_url(); ?>/flexslider/jquery.flexslider.js"></script>
      <link rel="stylesheet" type="text/css" href="<?php custom_url(); ?>/mobilemenu/slicknav.css?ver=<?php echo time(); ?>"/>
      <link rel="stylesheet" type="text/css" href="<?php custom_url(); ?>/mobilemenu/slicknav.min.css?ver=<?php echo time(); ?>"/>
      <script src="<?php custom_url(); ?>/mobilemenu/jquery.slicknav.js"></script>
      <script src="<?php custom_url(); ?>/rellax/rellax.min.js"></script>
      <script src="<?php custom_url(); ?>/infinite-scroll/jquery.infinitescroll.min.js"></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-165512127-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-165512127-1');
</script>
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
            <a href="https://myuna.perfectmind.com/" target="_blank" class="tooltip-container">
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
            <a href="https://myuna.perfectmind.com/" target="_blank" class="tooltip-container">
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
<div class="banner-box-container">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-10 offset-lg-1 banner-single-content-box">
              <?php
              the_archive_title( '<h1 class="page-title">', '</h1>' );
              the_archive_description( '<div class="taxonomy-description">', '</div>' );
              ?>
            </div><!--col-lg-10-->
         </div><!--row-->
      </div><!--container-fluid-->
   </div><!--banner-box-container-->
</div><!--parallax-header-->

<div class="container">
<div class="row">
<div>
    <button class="search-toggle-button" type="button" onclick="history.back();"> Back To Previous Page </button>
</div>
<div class="col-12 col-lg-12">


<?php 
                        query_posts(array( 
                         'post_type' 	=> 'post', 
                         'cat' => get_query_var('cat'), 
                         'posts_per_page' 	=> 5,
                         'post_status' 	=> 'publish',
                         'paged' 		=> $paged
           ));
        ?>

<?php if ( have_posts() ) : ?>
<div class="main_text search-results">
        <div id="art"><?php //required for infinite scrolling ?> 


        <div class="infscr_wrap">
	    <?php while ( have_posts() ) : the_post(); ?>            
                   <div class="post_each_wrap">  
                      
                           <div class="inner_wrap">

                           <div class="row news_content single-search-result post_each">
 <div class="col-lg-3">
     
     <?php
$image = get_field('news_image');
if( $image ){

    // Image variables.
    $url = $image['url'];
    $title = $image['title'];
    $alt = $image['alt'];
    $caption = $image['caption'];

    // Thumbnail size attributes.
    $size = 'thumbnail';
    $thumb = $image['sizes'][ $size ];
    $width = $image['sizes'][ $size . '-width' ];
    $height = $image['sizes'][ $size . '-height' ]; ?>


 <a href="<?php echo get_permalink();?>"><div class="calendar-image" style="background-image: url('<?php echo $thumb;  ?>'); background-position: center center ; "></div></a>
                      <?php } else { ?>
                        <a href="<?php echo get_permalink();?>"><div class="calendar-image" style="background-image: url('<?php custom_url(); ?>/images/UNA-default-img.png'); background-position: center center ; "></div></a>
                      <?php } ?>
     
     

   
</div>

<div class="col-12 col-lg-3">
         <a class="single-title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo mb_strimwidth( $text= get_the_title(),  0, 58, '...'); ?></a>  

     <div class="meta-info">
  
  
       <div class="search-meta-author-date">
            <?php if( get_the_author()){?>
               <span class="search-meta-author">By <?php echo get_the_author(); ?> - </span>
            <?php } ?>

            <?php if( get_the_date()){ ?>
                <span class="search-meta-date"> <?php echo get_the_date(); ?> </span>
            <?php } ?>
        </div>

         <?php if( get_the_category() ){ ?>
                <span class="search-meta-category"> <?php the_category(', '); ?> </span>
         <?php } ?>
</div>
</div>



    <div class="col-12 col-lg-5">
    <?php if( get_the_content() ){ ?>
                <p><?php echo get_excerpt(120); ?></p>
    <?php } ?>
     </div>
  
                          </div>
                            <hr/>
        
                           </div><!--//inner_wrap-->
                   </div><!--//post_each_wrap-->
            <?php endwhile; ?>
            </div><!--//infscr_wrap-->

            <div id="arrow_pagination"><?php /* Infinite Scrolling - There are 3 parts to script. This is Part 2 of 3. Part 1 is in the header.php and Part 3 is in the footer.php */ ?>
                     <div class="right"><?php next_posts_link('<div class="pagination_right"></div>') ?></div>  
                     <div class="left"><?php previous_posts_link('<div class="pagination_left"></div>') ?></div>
        </div><!--//arrow_pagination-->
            
            </div><!--art-->
            </div><!--main_text-->


            <?php endif; wp_reset_query(); ?>
</div>
</div>
</div>


<?php get_footer(); ?>