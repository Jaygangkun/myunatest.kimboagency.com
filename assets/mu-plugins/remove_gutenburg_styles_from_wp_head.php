<?php 

/* Remove the Gutenburg style.css from wp_head
 * References from 
 * http://justintadlock.com/archives/2009/08/06/how-to-disable-scripts-and-styles
 * https://css-tricks.com/taking-control-cssjs-wordpress-plugins-load/
 */

add_action('wp_print_styles', 'my_deregister_styles', 100);

function my_deregister_styles() {
  wp_deregister_style('wp-block-library');
}

?>