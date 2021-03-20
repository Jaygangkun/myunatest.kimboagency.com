<?php

// check if the repeater field has rows of data
if( have_rows('two_image_columns') ): ?>
   <div class="container-fluid two-image-columns-area">
       <div class="row">  
 <?php while ( have_rows('two_image_columns') ) : the_row(); ?>
 <div class="col-lg-6 col-md-6 col-sm-12 ">

      <div class="two-image-columns" style="background:#418477<?php if( get_sub_field('two_image_background') ) { 
    ?> url(<?php the_sub_field('two_image_background') ?>) no-repeat center center; background-size:cover<?php } ?>">
      <?php if( get_sub_field('two_image_title') ) { ?>
           <div class="text_area">
              <div class="text-container">
                <?php if( get_sub_field('two_image_title') ) { ?>
                 <div class="big_title"><h3><?php the_sub_field('two_image_title'); ?></h3></div>
               <?php } ?>               
             </div>           
           </div><!--//text_area-->
      <?php } ?>    
     </div><!--//two-image-columns-->
</div><!--//two-image-columns-->

   <?php endwhile; ?>
     </div><!--//row-->    
</div><!--//container-->
<?php endif; ?>