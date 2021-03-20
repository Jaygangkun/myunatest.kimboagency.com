<!--list of titles-->
<div class="transportation-container">

<?php if( have_rows('sustainability_sub') ): ?>

<div class="transportation-mode-articles water-reduction-articles">

<?php $z = 1;
// loop through the rows of data
while ( have_rows('sustainability_sub') ) : the_row(); ?>

<div class="container paddingbox sustainability-box" id="sustainability_sub_<?php echo $z; ?>">
<div class="row">

<?php if(get_sub_field('sustainability_sub_image')){ ?>
   <div class="col-lg-6 col-md-12 col-sm-12 dashboard-image">
          <?php $newImage = get_sub_field('sustainability_sub_image'); ?>
                  <div class="post_image featured-image " style="background-image: url('<?php echo esc_url($newImage);?>');"></div>
   </div>
<?php } ?>

<?php if(get_sub_field('sustainability_sub_title')){ ?>

 <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="first-column-content">
           <h3 class="single-article-title"><?php the_sub_field('sustainability_sub_title'); ?></h3>

           <?php if(get_sub_field('sustainability_sub_content')) { ?>
                   <p><?php the_sub_field('sustainability_sub_content'); ?></p>
           <?php } ?>

           <div class="transportation-buttons">

           <?php if( get_sub_field('sustainability_sub_link_external') == TRUE ) { ?>

           <?php if( get_sub_field('sustainability_sub_link') ) { ?>

                <a  class="button first-button" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('sustainability_sub_link'); ?>"><?php the_sub_field('sustainability_sub_link_label'); ?></a>

            <?php } ?>

            <?php } else{ ?>

               <?php if( get_sub_field('sustainability_sub_link') ) { ?>

                <a class="button first-button" href="<?php the_sub_field('sustainability_sub_link'); ?>"><?php the_sub_field('sustainability_sub_link_label'); ?></a>

            <?php } ?>

            <?php } ?>
      </div>

        </div>
   </div>
<?php } ?>



</div><!--end of row-->
</div><!--end of container-->

<?php  $z++; ?>

<?php endwhile; ?>

</div>

<?php endif; ?>
</div>