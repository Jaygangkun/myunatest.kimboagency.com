<!--list of titles-->

<?php if(get_field('water_reduction_section_title')){?>

             <div class="center paddingbox single-page-section-title tab">
                <h2><?php the_field('water_reduction_section_title'); ?></h2>
              </div>

    <?php }?>



<?php if( have_rows('water_reduction') ): ?>
<div class="container">
     <div class="row">
        <ul class="col-12 tab-list">
            <?php  $z = 1; ?>

       <?php while ( have_rows('water_reduction') ) : the_row(); ?>
              <li class="selector" rel="water_reduction_<?php echo $z; ?>">
               <?php if(get_sub_field('water_reduction_title')){ ?>
                    <?php the_sub_field('water_reduction_title'); ?>
               <?php } ?>
             </li>
          <?php  $z++; ?>
       <?php endwhile; ?>
      </ul>
    </div>
    </div><!--end of container-->
<?php endif; ?>






 <?php if( have_rows('water_reduction') ): ?>

 <div class="water-reduction-articles">

 <?php $z = 1;
// loop through the rows of data
while ( have_rows('water_reduction') ) : the_row(); ?>

<div class="container paddingbox" id="water_reduction_<?php echo $z; ?>">
<div class="row">

<?php if(get_sub_field('water_reduction_title')){ ?>

         <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="first-column-content">
                   <h3 class="single-article-title"><?php the_sub_field('water_reduction_title'); ?></h3>

                   <?php if(get_sub_field('water_reduction_content')) { ?>
                           <p><?php the_sub_field('water_reduction_content'); ?></p>
                   <?php } ?>

                   <?php if( get_sub_field('waste_reduction_link_external') == TRUE ) { ?>

                   <?php if( get_sub_field('water_reduction_link') ) { ?>
                        <a class="button" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('water_reduction_link'); ?>"><?php the_sub_field('water_reduction_link_label'); ?></a>
                    <?php } ?>

                    <?php } else{ ?>

                      <?php if( get_sub_field('water_reduction_link') ) { ?>
                        <a class="button" href="<?php the_sub_field('water_reduction_link'); ?>"><?php the_sub_field('water_reduction_link_label'); ?></a>
                    <?php } ?>
                    <?php } ?>

                </div>
           </div>
 <?php } ?>

   <?php if(get_sub_field('water_reduction_image')){ ?>
           <div class="col-lg-6 col-md-12 col-sm-12 dashboard-image">
                  <?php $newImage = get_sub_field('water_reduction_image'); ?>
                          <div class="post_image featured-image " style="background-image: url('<?php echo esc_url($newImage);?>');"></div>
           </div>
   <?php } ?>

</div><!--end of row-->
</div><!--end of container-->

<?php  $z++; ?>

<?php endwhile; ?>

</div>

<?php endif; ?>
