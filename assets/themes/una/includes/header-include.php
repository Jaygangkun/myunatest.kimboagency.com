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
            <img src="<?php custom_url(); ?>/images/UNA-logo-horizontal-reversed-white-trimmed.svg" class="una-icon">
          </a>
        </div><!--header-logo-->
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
      <div class="col-4 col-md-3 offset-1 header-logo">
        <a href="<?php echo site_url(); ?>">
          <img src="<?php custom_url(); ?>/images/UNA-logo-horizontal-reversed-white-trimmed.svg" class="una-icon">
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