<li>
      <div class="activities-loop events-loop event-column all-events">
         <div class="frontpage-card">

            <?php $defaultURL = get_site_url() . "/assets/media/custom_images/una-default-image.png"; ?>
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
           	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
               <a href="<?php echo get_permalink();?>"><div class="calendar-image" style="background-image: url('<?php echo $image[0]; ?>')"></div></a>
            <?php else: ?>
               <a href="<?php echo get_permalink();?>"><div class="calendar-image" style="background-image: url('<?php echo $defaultURL; ?>');"></div></a>
            <?php endif; ?>

       <div class="events-content">
         <a href="<?php echo get_permalink();?>" class="events-title-link">
            <h3 class="frontpage-card-title">
               <?php relevanssi_the_title(); ?>   
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