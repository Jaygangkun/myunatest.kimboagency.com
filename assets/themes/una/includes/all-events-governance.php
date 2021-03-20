<?php
 $feature_post_type = 'tribe_events';
?>

<?php
		$feature_section = array(
      'post_type'		=> $feature_post_type,
		  'posts_per_page' => -1,
      'orderby'		=> 'date',
            'order' 		=> 'ASC',
            'tax_query'=> array(
                array(
                    'taxonomy' => 'tribe_events_cat',
                    'field' => 'slug',
                        'terms' => 'una-governance'
                    )
            )
		);
    $the_query = new WP_Query( $feature_section );
    $total = $the_query->found_posts;

if( $the_query->have_posts() ): ?>

<div class="section-wrapper calendar-section all-events-calendar-section upcoming-events-section">

   <h2 class="frontpage-section-headline news-section">Upcoming Events</h2>

  <div class="flexslider">
    <ul class="slides">
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li>
          <div class="activities-loop events-loop event-column all-events">
            <div class="frontpage-card">

            <?php $defaultURL = get_site_url() . "/assets/media/custom_images/una-default-image.png"; ?>
           <?php if (has_post_thumbnail( $post->ID ) ): ?>
           	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
               <a href="<?php echo get_permalink();?>"><div class="calendar-image" style="background-image: url('<?php echo $image[0]; ?>')"></div></a>
               <?php else: ?>
                  <a href="<?php echo get_permalink();?>"><div class="calendar-image" style="background-image: url('<?php custom_url(); ?>/images/UNA-default-img.png');"></div></a>
            <?php endif; ?>

       <div class="events-content">
         <a href="<?php echo get_permalink();?>" class="events-title-link">
            <h3 class="frontpage-card-title">
              <?php echo wp_trim_words( get_the_title(), 8 ); ?>
            </h3>
         </a>


           <div class="all-event-calendar-description">
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


            <?php if(tribe_get_text_categories()) { ?>
                                 <div class="tribe-category row">
                                    <div class="col-1 tribe-icon"><i class="fa fa-tag" aria-hidden="true"></i></div>
                                    <div class="col-10 tribe-detail"><?php echo tribe_get_text_categories (); ?> </div>
                                 </div>
             <?php } ?>
             </div><!--all-events-calendar-description -->

            <div class="button-wrapper-for-program-loop">
              <a href="<?php echo get_permalink();?>" class="register-button">Learn More</a>
            </div>


         </div><!-- .events.content -->



            </div><!-- .frontpage-card -->
          </div><!-- .activities-loop -->
        </li>
        <?php endwhile; ?>
    </ul>
    <div class="number-results">
      <p><?php echo $total; ?> Results</p>
    </div>
  </div><!-- .flexslider -->

  <div class="top_label view-news-button view-events-calendar">
    <div class="center-link paddingbox">
      <a class="button-link" href="<?php echo site_url(); ?>/events/"><i class="fa fa-angle-right" aria-hidden="true"></i>See All Upcoming Events</a>
    </div>
  </div>
</div><!-- .section-wrapper -->

<?php endif; wp_reset_query(); ?>