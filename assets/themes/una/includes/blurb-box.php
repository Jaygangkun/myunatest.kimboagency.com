<?php if( get_field('display_blurb_box_int') == 'Yes' ) { ?>

    <div class="mb_blurb_container">
<div class="container">

<?php if(get_field('blurb_box_title')){?>
     <div class="center paddingbox single-page-section-title">
        <h3><?php the_field('blurb_box_title'); ?></h3>
      </div>
<?php }?>

<div class="row">

<?php if( get_field('blurb_box_int') ) { ?>
   <div class="col-lg-10 offset-lg-1 mb_blurb single-page-blurb left-align-blurb">
		<?php the_field('blurb_box_int'); ?>
   </div><!--//mb_blurb-->
   <?php } ?>

   <?php if( get_field('blurb_box_link') && get_field('blurb_box_link_label') ) { ?>
    <div class="button-container">

      <a class="button" href="<?php the_field('blurb_box_link'); ?>"><?php the_field('blurb_box_link_label'); ?></a>

      </div>

                    <?php } ?>

   </div>

   </div>
</div>


<?php } ?>