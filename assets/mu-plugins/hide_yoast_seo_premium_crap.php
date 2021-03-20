<?php 
/* fix some styles in the backend */
function hide_yoast_premium_crap() { 
echo "<style type='text/css'>

button.wpseo-multiple-keywords,
button.wpseo-keyword-synonyms,
button[id*='additional-keyphrase'],
.wpseo-metabox-content [class*='Upsell'],
#wpseo_meta [class*='upsell'],
.wpseo-metabox-root [class*='upsell'], 
.yoast-alert.notice-warning,
.wp-submenu a[href*='wpseo_licenses'],
#wpseo-upsell-notice,
.yoast-notice-go-premium,
.wpseo-metabox-buy-premium,
.wpseo-add-keyword,
.yoast-help-center,
a[href*='yoast-seo-credits'],
.yoast_premium_upsell_admin_block,
.yoast-alert,
.wpseo_content_cell #sidebar { display:none !important }

</style>
";
}
add_action('admin_head','hide_yoast_premium_crap');
/* END fix some styles in the backend  */


?>