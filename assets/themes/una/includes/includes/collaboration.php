<!--list of titles-->
<div class="collaboration-container">
<?php if(get_field('collaboration_section_title')){?>

     <div class="center tab paddingbox single-page-section-title">
        <h2><?php the_field('collaboration_section_title'); ?></h2>
      </div>

<?php }?>


<?php if( have_rows('collaboration_section') ): ?>
<div class="container water-reduction-articles">
<div class="row">
<?php while ( have_rows('collaboration_section') ) : the_row(); ?>
<div class="col-lg-5 offset-lg-1">
    <div class="collaboration-section">



    <?php if(get_sub_field('collaboration_sub_section_title')){ ?>
        <h3 class="single-article-title"><?php the_sub_field('collaboration_sub_section_title'); ?></h3>
    <?php } ?>

    <?php if(get_sub_field('collaboration_section_content')) { ?>
                   <p><?php the_sub_field('collaboration_section_content'); ?></p>
           <?php } ?>


           <?php if( get_sub_field('collaboration_section_link_external') == TRUE ) { ?>

           <?php if( get_sub_field('collaboration_section_link') ) { ?>
              <a class="button" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('collaboration_section_link'); ?>"><?php the_sub_field('collaboration_section_link_label'); ?></a>
            <?php } ?>

           <?php } else{ ?>

            <?php if( get_sub_field('collaboration_section_link') ) { ?>
                <a class="button" href="<?php the_sub_field('collaboration_section_link'); ?>"><?php the_sub_field('collaboration_section_link_label'); ?></a>
            <?php } ?>

            <?php } ?>

</div>
</div>
<?php endwhile; ?>
</div><!--end of row-->
</div><!--end of container-->
<?php endif; ?>
</div><!--collabortation-container-->