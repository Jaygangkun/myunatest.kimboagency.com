7<?php if( get_field('left_overlay_image')) { ?>



<div class="overlay-image left-overlay-image" style="background:#418477<?php if( get_field('left_overlay_image') ) {
       $left_overlay_image = wp_get_attachment_image_src( get_field('left_overlay_image'), 'large' );
       ?> url(<?php echo $left_overlay_image[0]; ?>) no-repeat center center; background-size:cover<?php } ?>">
    <div class="container-fluid">
      <div class="row">

         <?php if( get_field('left_overlay_image_title') ) { ?>
         <div class="text_area">
              <div class="text-container">
                   <?php if( get_field('left_overlay_image_title') ) { ?>
                    <div class="big_title"><?php the_field('left_overlay_image_title'); ?></div>
                  <?php } ?>
                   <?php if( get_field('left_overlay_image_small_title') ) { ?>
                    <div class="small_title"><h2><?php the_field('left_overlay_image_small_title'); ?></h2></div>
                      <?php } ?>
                   <?php if( get_field('left_overlay_image_text_content') ) { ?>
                        <div class="overlay_content"><p><?php the_field('left_overlay_image_text_content'); ?></p></div>
               <?php } ?>
               </div>

               <?php if( get_sub_field('left_overlay_image_button_link_external') == TRUE ) { ?>

               <?php if( get_field('left_overlay_image_button_link') ) { ?>

                    <a class="button" target="_blank" rel="noopener noreferrer" href="<?php the_field('left_overlay_image_button_link'); ?>" target="_blank" rel="noopener noreferrer" ><?php the_field('left_overlay_image_button_label'); ?></a>

                <?php } ?>

               <?php } else{ ?>

                <?php if( get_field('left_overlay_image_button_link') ) { ?>
                  <a class="button" href="<?php the_field('left_overlay_image_button_link'); ?>" rel="noopener noreferrer" ><?php the_field('left_overlay_image_button_label'); ?></a>
                <?php } ?>

                <?php } ?>


         </div><!--//text_area-->
         <?php } ?>




      </div><!--//row-->
    </div><!--//container-->
</div><!--//hero_image-->

<?php } ?>