<?php

function show_updated_only_to_admins()
{
    if (!current_user_can('update_core')) {
        remove_action( 'admin_notices', 'update_nag', 3 );
remove_action( 'network_admin_notices', 'update_nag', 3 );
    }
}
add_action( 'admin_head', 'show_updated_only_to_admins', 1 );




/* this hides the little orange circle that appears on the left side menus */
function hide_plugin_updates() { 
if (!current_user_can('administrator')) {
echo "<style type='text/css'>

.wp-menu-name .update-plugins { display:none !important }

</style>";
}
}
add_action('admin_head','hide_plugin_updates');

?>
