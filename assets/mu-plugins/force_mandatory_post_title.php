<?php
/*
Plugin Name: Force Post Title
Plugin URI: http://www.jpsays.com
Description: Forces user to assign a Title to a post before publishing. Modified by T.N. to make the CSS look better on the Title field. The plugin can be downloaded at https://wordpress.org/plugins/force-post-title/
Contributors: j_p_s
Author: Jatinder Pal Singh
Version: 1.1
Author URI: http://www.jpsays.com/
*/ 
function force_post_title_init() 
{
  wp_enqueue_script('jquery');
}
function force_post_title() 
{
  echo "<script type='text/javascript'>\n";
  echo "
  jQuery('#publish').click(function(){
		var testervar = jQuery('[id^=\"titlediv\"]')
		.find('#title');
		if (testervar.val().length < 1)
		{
			jQuery('input#title').css('background', '#ffebe8');
			jQuery('input#title').css('border', 'solid 1px #cc0000');
		
			alert('Title is required. Please enter a title.');
		
			return false;
		} else {
			jQuery('input#title').css('background', '#fff');
			jQuery('input#title').css('border', 'inherit');
		}
  	});
  ";
   echo "</script>\n";
}
add_action('admin_init', 'force_post_title_init');
add_action('edit_form_advanced', 'force_post_title');
?>