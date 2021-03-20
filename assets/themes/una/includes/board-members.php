<?php

// check if the repeater field has rows of data
if( have_rows('board_member') ): ?>

<div class="container board-members-area">

<?php if(get_field('board_members_section_title')){?>
   <div class="center paddingbox single-page-section-title">
    <h2><?php the_field('board_members_section_title'); ?></h2>
  </div><!--end of title-->
<?php }?>

    <div class="row">

 	<?php // loop through the rows of data
    while ( have_rows('board_member') ) : the_row(); ?>

        <div class="col-lg-3 col-md-4 col-sm-12 d-flex">   

        <div class="board-member">
        <?php if( get_sub_field('board_member_image') ) { ?>
            <div class="bg_image" style="background:#fff url(<?php the_sub_field('board_member_image'); ?>) no-repeat center center; background-size:cover"></div>
        <?php } ?>

    <div class="board-member-text-content">
        <?php if( get_sub_field('board_member_name') ) { ?>
            <div class="member-name">
                  <?php the_sub_field('board_member_name'); ?>
           </div>  
        <?php } ?>

        <?php if( get_sub_field('board_member_title') ) { ?>
            <div class="member-title">
                  <?php the_sub_field('board_member_title'); ?>
           </div>  
        <?php } ?>

        <?php if( get_sub_field('board_member_email') ) { ?>
            <div class="member-email">
                 <a href="mailto:<?php the_sub_field('board_member_email'); ?>">Email: <?php the_sub_field('board_member_email'); ?></a> 
           </div><!--member email-->  
        <?php } ?>
    </div><!--end of board member text content-->

        </div><!--end of board member-->

        </div><!--end of col-->

<?php endwhile; ?>

      </div><!--end of row-->
      </div><!--end of container-->

<?php endif; ?>