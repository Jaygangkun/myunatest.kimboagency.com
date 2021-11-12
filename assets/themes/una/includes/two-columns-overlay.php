<!--this column section is first used to showcase membership card-->

<?php if(get_field('access_card_image') || get_field('access_card_content')) {?>

<div class="hero-container access-card-container">

    <div class="hero_image hero_image_interior access-container" style="background:#DCEDEA">

</div><!--//hero_image-->

        <div class="container access-section">
          <div class="row">

          <?php if(get_field('access_card_image')){?>
                <?php $newImage = get_field('access_card_image'); ?>
                    <div class="col-lg-6 col-sm-12 left-overlay-column" style="background-image: url('<?php echo esc_url($newImage);?>');">
                     </div>
          <?php } ?>


          <div class="col-lg-6 col-sm-12 right-overlay-column">

        <?php if(get_field('access_card_title')) {?>
          <div class="big_title"><?php the_field('access_card_title'); ?></div>
         <?php } ?>    

         <?php if(get_field('access_card_content')) {?>
          <p><?php the_field('access_card_content'); ?></p>
          <?php } ?>    


          <?php if( get_field('access_card_link') && get_field('access_card_label') ) { ?>
                    <div class="button blue">
                        <a href="<?php the_field('access_card_link'); ?>"><?php the_field('access_card_label'); ?></a>
                    </div>
                    <?php } ?>      
      

          </div>
             
             
          
             
          </div><!--//row-->
        </div><!--//container-->    

        </div><!--//hero-container-->    

                   <?php } ?>
    
