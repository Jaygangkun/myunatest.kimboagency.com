<?php if( get_field('display_calendar_condition') == 'Yes' ) { ?>

<div class="section-wrapper">


<div class="container">

<h2 class="frontpage-section-headline news-section">Upcoming Events</h2>

<div class="row activities">

<?php $loop = new WP_Query( array( 
            'post_type' => 'tribe_events',
            'start_date' => 'now',
            'posts_per_page' => -1, ) ); ?>

<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<div class="activities-loop events-loop event-column all-events">

<div class="news-item frontpage-card">

<?php if( get_the_post_thumbnail()) {?>
    <div class="calendar-image"><?php the_post_thumbnail( 'medium' ); ?></div>
<?php } else{ ?>
    <?php $defaultURL = get_site_url() . "/assets/media/custom_images/una-default-image.png"; ?>
    <div class="calendar-image">
        <img src="<?php echo $defaultURL; ?>" />
    </div>
<?php } ?>

                <div class="events-content">

                
                        <div class="news-heading">
                           <div class="news-title">
                           <?php if( get_the_title()){ ?>
                            <h3 class="frontpage-card-title">
                                  <?php the_title(); ?>
                           </h3>
                           <?php } ?>        
                           </div>
                        </div> <!--//news-heading-->

                        <?php if(tribe_get_start_date()) { ?> 
                                            <div class="tribe-date row">
                                               <div class="col-1 tribe-icon"> <i class="fa fa-calendar" aria-hidden="true"></i> </div>
                                               <div class="col-10 tribe-detail"> <?php echo tribe_get_start_date( $post, true, 'l, F d-Y | g:i a' ); ?> </div> 
                                           </div><!--end of tribe date row -->  
                         <?php } ?>

                          <?php if(tribe_get_venue()) { ?> 
                                            <div class="tribe-venue row">
                                               <div class="col-1 tribe-icon"><i class="fa fa-map-marker" aria-hidden="true"></i> </div>
                                               <div class="col-10 tribe-detail"><?php echo tribe_get_venue( $post ); ?> </div>
                                            </div><!--end of tribe venue row-->  
                        <?php } ?>   
        
                        <?php if(tribe_get_text_categories()) { ?> 
                                            <div class="tribe-category row">
                                                <div class="col-1 tribe-icon"><i class="fa fa-tag" aria-hidden="true"></i></div>
                                                <div class="col-10 tribe-detail"><?php echo tribe_get_text_categories (); ?> </div>
                                            </div><!--end of tribe category row-->  
                        <?php } ?>    
                        
                
                </div><!--events-content-->

                <button class="register-button calendar-register-button">Learn More </button>


           </div>




</div><!--end of news single item-->

<?php endwhile; wp_reset_query(); ?>

</div><!--end of row-->

<div class="top_label view-news-button view-events-calendar">               
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          <a class="button-link"> <div class="news-button"> See Our Complete Events Calendar</div></a>
                </div>
                
</div><!--end of container-->

</div><!--end of section wrapper-->




<?php } ?>