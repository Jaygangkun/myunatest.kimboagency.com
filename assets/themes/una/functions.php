<?php defined('ABSPATH') or die("");

// setup custom url

function custom_url() { echo site_url() . '/una'; }




// check if localhost

function is_localhost($whitelist = ['127.0.0.1', 'localhost']) {

    return in_array($_SERVER['HTTP_HOST'], $whitelist);

}



// Compile LESS using PHP

function website_scripts() {



    $check_server = $_SERVER['HTTP_HOST'];
    if ( $check_server == "localhost:8888" ) { 
        $site_path = "una"; /**** <<--- CHANGE THIS TO YOUR LOCALHOST FOLDER NAME ****/

    } else {

      $site_path = "/home/myunatest/public_html/una"; /**** <<--- CHANGE THIS TO THE LIVE SITE USERNAME ****/

    }



        include( $site_path . '/scripts/php/lessc.inc.php' );

        $inputFile  = $site_path . '/less/styles.less';

        $outputFile = $site_path . '/css/styles.css';



        // load the cache

        $cacheFile = $inputFile.".cache";



        if (file_exists($cacheFile)) {

            $cache = unserialize(file_get_contents($cacheFile));

        } else {

            $cache = $inputFile;

        }



        $less = new lessc22;

        $newCache = $less->cachedCompile($cache);



        if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {

            file_put_contents($cacheFile, serialize($newCache));

            file_put_contents($outputFile, $newCache['compiled']);

        }



    }

    add_action( 'wp_enqueue_scripts', 'website_scripts' );

    //END Compile LESS using PHP





/* deregister the default WordPress jQuery and load the jQuery from Google servers.

 * This also helps to load the proper jQuery for any WP plugins that may require it and will

 * prevent jQuery from loading twice if we happen to use our own jQuery in the header.php

 */

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

function my_jquery_enqueue() {

   wp_deregister_script('jquery');

   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", false, null);

   wp_enqueue_script('jquery');

}





function register_acf_options_pages() {



    // Check function exists.

    if( !function_exists('acf_add_options_page') )

        return;



    // register options page.

    $option_page = acf_add_options_page(array(

        'page_title'    => __('Website General Settings'),

        'menu_title'    => __('Website Settings'),

        'redirect'      => false

    ));

}



// Hook into acf initialization.

add_action('acf/init', 'register_acf_options_pages');







/* register menu navigations */

function register_my_menus() {

  register_nav_menus(

    array(   'top_main_menu' => __( 'Desktop Menu' ),

             'mobile_menu' => __( 'Header Mobile Menu' ),

             'about_menu' => __( 'About Menu' ),

             'contact_menu' => __( 'Contact Menu' ),

         'footer_mobile_menu' => __( 'Footer Mobile Menu' ),

         'footer_desktop_menu' => __( 'Footer Menu' ),

         'i_want_to_menu' => __( 'I Want To Menu' )



		  )

  );

}

add_action( 'init', 'register_my_menus' );





//Function To Limit Excerpt Characters



function get_excerpt($limit, $source = null){



    $excerpt = $source == "content" ? get_the_content() : get_the_excerpt();

    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);

    $excerpt = strip_shortcodes($excerpt);

    $excerpt = strip_tags($excerpt);

    $excerpt = substr($excerpt, 0, $limit);

    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));

    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));

    $excerpt = $excerpt.'... <a href="'.get_permalink().'" class="news-read-more">Read More</a>';

    return $excerpt;

    }





    /*

    https://wordpress.stackexchange.com/questions/70913



    Sample...  Lorem ipsum habitant morbi (26 characters total)



    Returns first three words which is exactly 21 characters including spaces

    Example..  echo get_excerpt(21);

    Result...  Lorem ipsum habitant



    Returns same as above, not enough characters in limit to return last word

    Example..  echo get_excerpt(24);

    Result...  Lorem ipsum habitant



    Returns all 26 chars of our content, 30 char limit given, only 26 characters needed.

    Example..  echo get_excerpt(30);

    Result...  Lorem ipsum habitant morbi

    */



    add_theme_support( 'post-thumbnails' );



    if ( class_exists('Tribe__Events__Main') ){



        /* get event category names in text format */

        function tribe_get_text_categories ( $event_id = null ) {



            if ( is_null( $event_id ) ) {

                $event_id = get_the_ID();

            }

            $event_cats = '';

            $term_list = wp_get_post_terms( $event_id, Tribe__Events__Main::TAXONOMY );

            foreach( $term_list as $term_single ) {

                $event_cats .= $term_single->name . ', ';

            }

            return rtrim($event_cats, ', ');

        }

    }





  function catch_that_image() {

    global $post, $posts;

    $first_img = '';

    ob_start();

    ob_end_clean();

    if( preg_match_all('/<img.+?src=[\'"]([^\'"]+)[\'"].*?>/i', $post->post_content, $matches)){

    return $first_img = $matches[1][0];

    }

      return null;

    if(empty($first_img)) {

      $first_img = "/path/to/default.png";

    }

    return $first_img;

  }





	function add_slug_body_class( $classes ) {

		global $post;

		if ( isset( $post ) ) {

		$classes[] = $post->post_type . '-' . $post->post_name;

		}

		return $classes;

		}

		add_filter( 'body_class', 'add_slug_body_class' );

        function red_starter_widgets_init() {
            register_sidebar( array(
                'name'          => esc_html( 'Sidebar' ),
                'id'            => 'sidebar-1',
                'description'   => '',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ) );
        }
        add_action( 'widgets_init', 'red_starter_widgets_init' );

        is_admin() || add_action( 'pre_get_posts', function( \WP_Query $query ) {

            $post_type = filter_input( INPUT_GET, 'post_type', FILTER_SANITIZE_STRING );
        
            if ( $post_type && $query->is_main_query() && $query->is_search() )
                $query->set( 'post_type', [ $post_type ] );
        });

        function template_chooser($template)   
{    
  global $wp_query;   
  $post_type = get_query_var('post_type');   
  if( $wp_query->is_search && $post_type[0] == 'post' || $wp_query->is_search && $post_type[0] == 'page' )   
  {
    return locate_template('post-search.php');  //  redirect to post-search.php
  }
  return $template;   
}
add_filter('template_include', 'template_chooser');   

function custom_posts_per_page($query) {
    
    global $wp_query;   
    $post_type = get_query_var('post_type');   
    if( $wp_query->is_search && $post_type[0] == 'post' || $wp_query->is_search && $post_type[0] == 'page' )   {
        $query->set('posts_per_page', 5);

    } //endif 
   

} //function

//this adds the function above to the 'pre_get_posts' action     
add_action('pre_get_posts', 'custom_posts_per_page');

//Function to Display Breadcrumbs

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

add_filter('relevanssi_remove_punctuation', 'relevanssi_remove_s', 9);
function relevanssi_remove_s($term) {
	$end2 = substr($term, -2, 2);
	if ("es" == $end2) {
		$term = substr($term, 0, -2);
	}

	$end1 = substr($term, -1, 1);
	if ("s" == $end1) {
		$term = substr($term, 0, -1);
	}

	return $term;
}

add_theme_support( 'post-thumbnails' );

// add editor the privilege to edit theme

// get the the role object
$role_object = get_role( 'editor' );

// add $cap capability to this role object
$role_object->add_cap( 'edit_theme_options' );

function hide_menu() {

    if (current_user_can('editor')) {

        remove_submenu_page( 'themes.php', 'themes.php' ); // hide the theme selection submenu
        remove_submenu_page( 'themes.php', 'widgets.php' ); // hide the widgets submenu
    }
}

add_action('admin_head', 'hide_menu');

add_filter( 'relevanssi_do_not_index', 'rlv_no_past_events', 10, 2 );
add_filter( 'relevanssi_post_ok', 'rlv_no_past_events', 10, 2 );
 
/**
 * Blocks past events from search results and indexing.
 *
 * @param boolean $status  Should the post be indexed/searched or not?
 * @param int     $post_id The post ID.
 *
 * @return boolean For relevanssi_post_ok, return false if the event has passed.
 *                 For relevanssi_do_not_index, return true if the event has passed.
 */
function rlv_no_past_events( $status, $post_id ) {
	$end_date = get_post_meta( $post_id, '_EventEndDate', true );
	if ( $end_date ) {
		if ( strtotime( $end_date ) < time() ) {
			if ( 'relevanssi_post_ok' === current_filter() ) {
				$status = false;
			} else {
				$status = true;
			}
		}
	}
	return $status;
}

add_filter('relevanssi_modify_wp_query', 'rlv_asc_date');
function rlv_asc_date($query) {
 
    return $query;
    }


    // Customize Login page with custom css
function my_custom_login_stylesheet() {
	wp_enqueue_style( 'custom-login',  '/una/css/style-login.css' );
}
//This loads the function above on the login page
add_action( 'login_enqueue_scripts', 'my_custom_login_stylesheet' );

add_filter( 'gform_confirmation_anchor_1', '__return_false' );

// Changing login logo.
function login_logo() { ?>
	<style type="text/css">
			#login h1 a, .login h1 a {
					background-image: url(<?php custom_url(); ?>/images/UNA-logo-horizontal-reversed-white-trimmed.svg);
		background-size: 100%; 
		width: 100%;
		height: 80px%;
	}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'login_logo' );

//Changing login logo link to website Homepage.
function login_logo_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'login_logo_url' );

// Changes Gravity Forms Ajax Spinner (next, back, submit) to a transparent image
// this allows you to target the css and create a pure css spinner like the one used below in the style.css file of this gist.
add_filter( 'gform_ajax_spinner_url', 'spinner_url', 10, 2 );
function spinner_url( $image_src, $form ) {
    return  'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'; // relative to you theme images folder

}




  // http://biostall.com/get-the-current-season-using-php/
    // $date - A date in any English textual format. If blank
    // defaults to the current date
    // $hemisphere - "northern", "southern" or "australia"
    function get_season($date="", $hemisphere="northern") {

        // Set $date to today if no date specified
        if ($date=="") { $date = date("Y-m-d"); }
  
        // Specify the season names
        $season_names = array('Winter', 'Spring', 'Summer', 'Fall');
  
        // Get year of date specified
        $date_year = date("Y", strtotime($date));
  
        // Declare season date ranges
        switch (strtolower($hemisphere)) {
            case "northern": {
                if (
                    strtotime($date)<strtotime($date_year.'-03-21') ||
                    strtotime($date)>=strtotime($date_year.'-12-21')
                ) {
                    return $season_names[0]; // Must be in Winter
                }elseif (strtotime($date)>=strtotime($date_year.'-09-23')) {
                    return $season_names[3]; // Must be in Fall
                }elseif (strtotime($date)>=strtotime($date_year.'-06-21')) {
                    return $season_names[2]; // Must be in Summer
                }elseif (strtotime($date)>=strtotime($date_year.'-03-21')) {
                    return $season_names[1]; // Must be in Spring
                }
                break;
            }
            case "southern": {
                if (
                    strtotime($date)<strtotime($date_year.'-03-21') ||
                    strtotime($date)>=strtotime($date_year.'-12-21')
                ) {
                    return $season_names[2]; // Must be in Summer
                }elseif (strtotime($date)>=strtotime($date_year.'-09-23')) {
                    return $season_names[1]; // Must be in Spring
                }elseif (strtotime($date)>=strtotime($date_year.'-06-21')) {
                    return $season_names[0]; // Must be in Winter
                }elseif (strtotime($date)>=strtotime($date_year.'-03-21')) {
                    return $season_names[3]; // Must be in Fall
                }
                break;
            }
            case "australia": {
                if (
                    strtotime($date)<strtotime($date_year.'-03-01') ||
                    strtotime($date)>=strtotime($date_year.'-12-01')
                ) {
                    return $season_names[2]; // Must be in Summer
                }elseif (strtotime($date)>=strtotime($date_year.'-09-01')) {
                    return $season_names[1]; // Must be in Spring
                }elseif (strtotime($date)>=strtotime($date_year.'-06-01')) {
                    return $season_names[0]; // Must be in Winter
                }elseif (strtotime($date)>=strtotime($date_year.'-03-01')) {
                    return $season_names[3]; // Must be in Fall
                }
                break;
            }
            default: { echo "Invalid hemisphere set"; }
        }
  
    }
  


function slugify($text)
{
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}