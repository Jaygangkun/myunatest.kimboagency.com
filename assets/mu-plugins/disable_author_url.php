<?php 

/* Prevent outside visitors and potential hackers from attemting to guess at usernames by
 * hiding the author URL so that it redirects them to the home page if they do it.
 * For example "www.mywebsite.com/?author=1" will redirect them to the home page
 */
function author_page_redirect() {
    if ( is_author() ) {
        wp_redirect( home_url() );
    }
}
add_action( 'template_redirect', 'author_page_redirect' );

?>