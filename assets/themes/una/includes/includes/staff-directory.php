<?php

// check if the repeater field has rows of data
if( have_rows('staff_member') ): ?>

<div class="container board-members-area" id="staff-directory">

<?php if(get_field('staff_directory_section_title')){?>
   <div class="center paddingbox single-page-section-title">
    <h2><?php the_field('staff_directory_section_title'); ?></h2>
  </div><!--end of title-->
<?php }?>

    <div class="row">

 	<?php // loop through the rows of data
    while ( have_rows('staff_member') ) : the_row(); ?>

        <div class="col-lg-4 col-md-4 col-sm-12 d-flex staff-member">   

        <div class="board-member staff-directory">
      
    <div class="board-member-text-content">
        <?php if( get_sub_field('staff_member_name') ) { ?>
            <div class="member-name">
                  <?php the_sub_field('staff_member_name'); ?>
           </div>  
        <?php } ?>

        <?php if( get_sub_field('staff_member_title') ) { ?>
            <div class="member-title">
                  <?php the_sub_field('staff_member_title'); ?>
           </div>  
        <?php } ?>

        <?php if( get_sub_field('staff_member_phone') ) { ?>
            <div class="member-phone">
                  <?php the_sub_field('staff_member_phone'); ?>
           </div>  
        <?php } ?>

        <?php if( get_sub_field('staff_member_email') ) { ?>
            <div class="member-email">
                 <a href="mailto:<?php the_sub_field('staff_member_email'); ?>">Email: <?php the_sub_field('staff_member_email'); ?></a> 
           </div><!--member email-->  
        <?php } ?>
    </div><!--end of board member text content-->

        </div><!--end of board member-->

        </div><!--end of col-->

<?php endwhile; ?>

      </div><!--end of row-->
      </div><!--end of container-->

<?php endif; ?>