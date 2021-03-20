<!--list of titles-->
<div class="transportation-container">
<?php if(get_field('transportation_section_title')){?>

     <div class="center tab paddingbox single-page-section-title">
        <h2><?php the_field('transportation_section_title'); ?></h2>
      </div>

<?php }?>



<?php if( have_rows('transportation_mode') ): ?>
<div class="container">
<div class="row">
<ul class="col-12 tab-list">
    <?php  $z = 1; ?>

<?php while ( have_rows('transportation_mode') ) : the_row(); ?>
      <li class="selector" rel="transportation_mode_<?php echo $z; ?>">
       <?php if(get_sub_field('transportation_mode_title')){ ?>
            <?php the_sub_field('transportation_mode_title'); ?>
       <?php } ?>
     </li>
  <?php  $z++; ?>
<?php endwhile; ?>
</ul>
</div>
</div><!--end of container-->
<?php endif; ?>






<?php if( have_rows('transportation_mode') ): ?>

<div class="transportation-mode-articles water-reduction-articles">

<?php $z = 1;
// loop through the rows of data
while ( have_rows('transportation_mode') ) : the_row(); ?>

<div class="container paddingbox" id="transportation_mode_<?php echo $z; ?>">
<div class="row">

<?php if(get_sub_field('transportation_mode_title')){ ?>

 <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="first-column-content">
           <h3 class="single-article-title"><?php the_sub_field('transportation_mode_title'); ?></h3>

           <?php if(get_sub_field('transportation_mode_content')) { ?>
                   <p><?php the_sub_field('transportation_mode_content'); ?></p>
           <?php } ?>

           <div class="transportation-buttons">

           <?php if( get_sub_field('transportation_mode_link_external') == TRUE ) { ?>

           <?php if( get_sub_field('transportation_mode_link') ) { ?>
                <a class="button first-button" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('transportation_mode_link'); ?>"><?php the_sub_field('transportation_mode_link_label'); ?></a>

            <?php } ?>

            <?php } else{ ?>

               <?php if( get_sub_field('transportation_mode_link') ) { ?>
                <a class="button first-button" href="<?php the_sub_field('transportation_mode_link'); ?>"><?php the_sub_field('transportation_mode_link_label'); ?></a>

            <?php } ?>

            <?php } ?>



            <?php if( get_sub_field('transportation_mode_second_link_external') == TRUE ) { ?>

           <?php if( get_sub_field('transportation_mode_second_link') ) { ?>

                <a class="button" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('transportation_mode_second_link'); ?>"><?php the_sub_field('transportation_mode_second_link_label'); ?></a>

            <?php } ?>

            <?php } else{ ?>

               <?php if( get_sub_field('transportation_mode_second_link') ) { ?>
                <a class="button" href="<?php the_sub_field('transportation_mode_second_link'); ?>"><?php the_sub_field('transportation_mode_second_link_label'); ?></a>
            <?php } ?>

            <?php } ?>



            </div>

        </div>
   </div>
<?php } ?>

<?php if(get_sub_field('transportation_mode_image')){ ?>
   <div class="col-lg-6 col-md-12 col-sm-12 dashboard-image">
          <?php $newImage = get_sub_field('transportation_mode_image'); ?>
                  <div class="post_image featured-image " style="background-image: url('<?php echo esc_url($newImage);?>');"></div>
   </div>
<?php } ?>

</div><!--end of row-->
</div><!--end of container-->

<?php  $z++; ?>

<?php endwhile; ?>

</div>

<?php endif; ?>
</div>