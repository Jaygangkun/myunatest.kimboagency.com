<?php if( get_field('show_hero_image_int') == 'Yes' ) { ?>
  <div class="hero-container">



       <div class="container">
          <div class="row">
             
             <?php if( get_field('hero_image_title') ) { ?>
             <div class="text_area">
                   <?php if( get_field('hero_image_title') ) { ?>
                   <div class="big_title"><?php the_field('hero_image_title'); ?></div>
                   <?php } ?>
             </div><!--//text_area-->
             <?php } ?>
          
             
          </div><!--//row-->
       </div><!--//container-->    


        </div><!--//hero-container-->    
    
                   <?php } ?>


