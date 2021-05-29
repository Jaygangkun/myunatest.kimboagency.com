<?php if(get_field('board_procedures_content')) { ?>

<div class="mb_blurb_container">

<div class="container">

<?php if(get_field('board_procedures_title')){?>
   <div class="paddingbox single-page-section-title">
    <h2><?php the_field('board_procedures_title'); ?></h2>
  </div><!--end of title-->
<?php }?>

<div class="row">

<?php if( get_field('board_procedures_content') ) { ?>

<div class=" col-12 mb_blurb single-page-blurb left-align-blurb">
    <?php the_field('board_procedures_content'); ?>
</div><!--//end of content-->

<?php } ?>

<?php if( get_sub_field('board_procedures_link_external') == TRUE ) { ?>


<?php if( get_field('board_procedures_link') && get_field('board_procedures_link_label') ) { ?>
   <div class="button-container">

  <a class="button" target="_blank" rel="noopener noreferrer" href="<?php the_field('board_procedures_link'); ?>"><?php the_field('board_procedures_link_label'); ?></a>

  </div><!--end of button-->
                <?php } ?>

<?php }else{ ?>

  <?php if( get_field('board_procedures_link') && get_field('board_procedures_link_label') ) { ?>
   <div class="button-container">

                    <a class="button" href="<?php the_field('board_procedures_link'); ?>"><?php the_field('board_procedures_link_label'); ?></a>

  </div><!--end of button-->
                <?php } ?>

                <?php } ?>



</div>
</div><!--end of big container-->
</div><!--end of mb_blurb container-->


<?php } ?>


