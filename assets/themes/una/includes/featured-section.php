<?php
/**
 * Template part for displaying feature report.
 */
?>

<?php
 $feature_post_type = 'tribe_events';
 $feature_post_id = get_field('featured_event_calendar_post_id');
?>

<?php
		$feature_section = array(
      'post_type'		=> $feature_post_type,
      'p' => $feature_post_id,
		  'posts_per_page' => 1,
      'orderby'		=> 'date',
			'order' 		=> 'DESC'
		);
		$the_query = new WP_Query( $feature_section );

if( $the_query->have_posts() ): ?>
<div class="container-fluid overlap_two_column">
   <div class="row">
	  <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <div class="col-12">
                    <div class="new-image-calendar-featured" style="background-image: url('<?php the_field('featured_event_calendar_image');?>');">

                      <div class="container calendar-featured-content">
                          <div class="row">
                         <h3 class="frontpage-card-title">
                            <?php echo  $post->post_title; ?>
                         </h3>
                         </div>


               <?php if(tribe_get_start_date()) { ?>
                     <div class="tribe-date row">
                                    <div class="col-1 tribe-icon"> <i class="fa fa-calendar" aria-hidden="true"></i> </div>
                                    <div class="col-10 tribe-detail"> <?php echo tribe_get_start_date( $post, true, 'l, F d-Y' ); ?> </div>
                     </div>
                   <?php } ?>

              <?php if(tribe_get_venue()) { ?>
                                 <div class="tribe-venue row">
                                    <div class="col-1 tribe-icon"><i class="fa fa-map-marker" aria-hidden="true"></i> </div>
                                    <div class="col-10 tribe-detail"><?php echo tribe_get_venue( $post ); ?> </div>
                                 </div>
                  <?php } ?>

                <div class="centre-button-container">
                    <a class="button" href="https://myuna.ca/events-calendar/">Book Now</a>
              </div><!--end of button-->


                      </div><!--end of container-->


                   </div>

      <?php endwhile; ?>
   </div><!--//row-->
</div><!--//container-->
<?php endif; wp_reset_query(); ?>

