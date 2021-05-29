<?php defined('ABSPATH') or die(""); ?>

<div class="footer" id="footer">

<?php// if ( is_front_page() ){ ?>
    <a class="back_top_animated_arrow" href="#page-header">
      <span>TOP</span>
      <i class="far fa-arrow-alt-circle-up"></i>
    </a>
  <?php// } ?>

    <div class="top_border"></div>
	<div class="main_area">
        <div class="container">

       <div class="row footer-area">

        <div class="col-12 footer_desktop_menu">
            <?php
               wp_nav_menu( array(
                     'theme_location' => 'footer_desktop_menu'));
             ?>
        </div>

        </div><!--end of row for footer area-->

        <div class="row social-media-nav">

        <div class="col-10 col-lg-12 social-media-options">

        <?php if( get_field('facebook_link', 'option') ) { ?>
                <div class="single-media-option">
                      <a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank" rel="noopener noreferrer" title="Like us on Facebook"><i class="fab fa-facebook-f"></i></a>
                      <a href="<?php the_field('facebook_link', 'option'); ?>" target="_blank" rel="noopener noreferrer" title="Like us on Facebook" class="social-media-tag">Facebook</a>
               </div>
         <?php } ?>

        <?php if( get_field('twitter_link', 'option') ) { ?>
            <div class="single-media-option">
                       <a href="<?php the_field('twitter_link', 'option'); ?>" target="_blank" rel="noopener noreferrer" title="Follow us on Twitter"><i class="fab fa-twitter"></i></a>
                       <a href="<?php the_field('twitter_link', 'option'); ?>" target="_blank" rel="noopener noreferrer" title="Follow us on Twitter" class="twitter-label social-media-tag">Twitter</a>
            </div>
         <?php } ?>

         <?php if( get_field('instagram_link', 'option') ) { ?>
            <div class="single-media-option">
               <a href="<?php the_field('instagram_link', 'option'); ?>" target="_blank" rel="noopener noreferrer" title="Follow us on Instagram"><i class="fab fa-instagram"></i></a>
               <a href="<?php the_field('instagram_link', 'option'); ?>" target="_blank" rel="noopener noreferrer" title="Follow us on Instagram" class="social-media-tag">Instagram</a>
            </div>
         <?php } ?>

         </div>
         </div>

        </div><!--//container-->
    </div><!--//main_area-->

    <div class="second-row-information">
       <div class="container">
       <div class="row">

       <div class="col-lg-3 col-md-6 col-sm-12">
       <div class="footer-logo">
                <img src="<?php custom_url(); ?>/images/UNA-logo-horizontal-reversed-white-trimmed.svg" class="una-icon" alt="una-icon">
          </div>
       </div>

       <div class="col-lg-3 col-md-6 col-sm-12">
       <?php if( get_field('association_address', 'option') ) { ?>
                 <span class="association_address footer_info">
                 <div class="row">
                 <div class="col-1">
                  <i class="far fa-map"></i>
                 </div>
                 <div class="col-10">
                    <?php the_field('association_address', 'option'); ?>
                 </div>
                 </div>
                 </span>
            <?php } //End of Address ?>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">
        <?php if( get_field('association_phone_number', 'option') ) { ?>
                <a href="tel:<?php the_field('association_phone_number', 'option'); ?>">
                <span class="association_phone_number footer_info">
                <div class="row">
                <div class="col-1">
                   <i class="fa fa-phone fa-flip-horizontal"></i>
                </div>
                <div class="col-10">
                 <?php the_field('association_phone_number', 'option'); ?>
                 </div>
                 </div>
               </span>
               </a>
            <?php } //End of Phone ?>

            <?php if( get_field('association_email', 'option') ) { ?>
                <a href="mailto:<?php echo antispambot(get_field('association_email', 'option')); ?>">
                        <span class="association_email footer_info">
                        <div class="row">
                        <div class="col-1">
                          <i class="far fa-envelope"></i>
                        </div>
                        <div class="col-10">
                            <?php echo antispambot(get_field('association_email', 'option')); ?>
                        </div>
                        </div>
                        </span>
                </a>
            <?php } //End of Email ?>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12">
            <?php if( get_field('office_hours', 'option') ) { ?>
                    <?php if( have_rows('office_hours', 'option') ) : ?>
                           <?php while ( have_rows('office_hours', 'option') ) : the_row(); ?>
                                <span class="office_hours footer_info">
                                <div class="row">
                                <div class="col-1">
                                     <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <div class="col-10">
                                  <span class="hours-info">Office Hours</span> <br/> <?php the_sub_field('office_hours_and_days'); ?>
                                </div>
                                </div>
                            </span>
                    <?php endwhile; else :
                                         // no rows found
                                         endif;?>
            <?php } //END get_field office_hours ?>

            <?php if( get_field('deliveries_hours', 'option') ) { ?>
                    <?php if( have_rows('deliveries_hours', 'option') ) : ?>
                           <?php while ( have_rows('deliveries_hours', 'option') ) : the_row(); ?>
                                <span class="deliveries_hours footer_info">
                                <div class="row">
                                <div class="col-1">
                                &nbsp;
                                </div>
                                <div class="col-10">
                                  <span class="hours-info">Open for Deliveries</span> <br/> <?php the_sub_field('deliveries_hours_and_days'); ?>
                                </div>
                                </div>
                            </span>
                    <?php endwhile; else :
                                         // no rows found
                                         endif;?>
            <?php } //END get_field office_hours ?>
            </div>

       </div><!--end of row-->
       </div><!--container-->
    </div><!--second-row-information-->

    <div class="copyright_area">
        <div class="container">
          <div class="row">

               <div class="col p-0">
               &copy; <?php echo date('Y'); ?>&nbsp;<?php echo get_bloginfo('name'); ?>
               </div>

               <div class="col right_column">
                   <span class="kimbo_credit"><a href="https://www.kimbodesign.ca/" target="_blank" class="no_underline" rel="noopener noreferrer">Website design</a> by <a class="kimbo_site" href="https://www.kimbodesign.ca/" target="_blank" rel="noopener noreferrer">KIMBO Design</a></span>
               </div><!--//col-->


          </div><!--//row-->
        </div><!--//container-->
    </div><!--//copyright_area-->


</div><!--//footer-->






<?php wp_footer(); ?>

<script>
  // Accepts any class name
  //var rellax = new Rellax('.rellax');
</script>


<script type="text/javascript">
	var infinite_scroll = {
		loading: {
			img: "<?php custom_url(); ?>/images/ajax-loader.gif",
			msgText: "<div align='center' class='main_text' style='width:100%; clear:both; display:block; padding-bottom:50px;'><?php _e( 'Loading the next set of posts...', 'custom' ); ?></div>",
			finishedMsg: "<div align='center' class='main_text' style='display:block; clear:both; padding-top:20px; padding-bottom:50px;'><?php _e( 'All posts loaded.', 'custom' ); ?></div>"
		},
		"nextSelector":"#arrow_pagination .right a",
		"navSelector":"#arrow_pagination",
		"itemSelector":"#art div.infscr_wrap",
		"contentSelector":"#art"
	};
	jQuery( infinite_scroll.contentSelector ).infinitescroll( infinite_scroll );
</script>



<script src="<?php custom_url(); ?>/js-cookie/js.cookie-2.2.1.min.js"></script>
<script src="<?php custom_url(); ?>/filter/isotope.pkgd.min.js"></script>

<?php include('includes/footer_jquery.php'); ?>
<?php include('includes/footer-jquery2.php'); ?>

<!-- Start of myuna Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6da259b0-48fe-474c-8483-d4d2e581393c"> </script>
<!-- End of myuna Zendesk Widget script -->

</body>
</html>