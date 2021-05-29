   <?php if( have_rows('services_section') ): ?>
   <div class="container-fluid">
          <div class="row services-sections dashboard-image">
     <?php while ( have_rows('services_section') ) : the_row();?>

     <?php if(get_sub_field('services_section_image')){?>
                <?php $newImage = get_sub_field('services_section_image'); ?>
                    <div class="post_image col-lg-4 col-md-6 col-sm-12" style="background-image: url('<?php echo esc_url($newImage);?>');">

     <?php if( get_sub_field('services_section_label') ) { ?>
      <div class="text_area">
        <div class="big_title services-sections">
           <h3><?php the_sub_field('services_section_label'); ?></h3>
           <?php if(get_sub_field('services_section_link_label') && get_sub_field('services_section_link')){?>
          <div class="content-inside-link">               
              <i class="fa fa-angle-right" aria-hidden="true"></i>
              <a class="button-link" href="<?php the_sub_field('services_section_link'); ?>"> <div class="news-button"> <?php the_sub_field('services_section_link_label'); ?></div></a>
          </div>     
          <?php } ?> 
         </div>
        
            </div><!--//text_area-->
         <?php } ?>

         <?php if( get_sub_field('services_section_label') ) { ?>
      <div class="overlay_area">
        <div class="big_title"><?php the_sub_field('services_section_label'); ?></div>
        <p><?php the_sub_field('services_section_content'); ?></p>
        <?php if(get_sub_field('services_section_link_label') && get_sub_field('services_section_link')){?>
          <div class="content-inside-link">               
              <i class="fa fa-angle-right" aria-hidden="true"></i>
              <a class="button-link" href="<?php the_sub_field('services_section_link'); ?>"> <div class="news-button"> <?php the_sub_field('services_section_link_label'); ?></div></a>
          </div>     
          <?php } ?> 
            </div><!--//text_area-->
         <?php } ?>
                    
                    </div>
         <?php } ?>
       
  
    <?php endwhile;?>
         </div>
         </div><!--end of container-->
  <?php endif; ?>