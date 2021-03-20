<!--list of titles-->

<?php if(get_field('booking_spaces_section_title')){?>
     
     <div class="center paddingbox single-page-section-title">
        <h2><?php the_field('booking_spaces_section_title'); ?></h2>
      </div>

<?php }?>



<div class="container">
<div class="row">
<ul class="col-12 tab-list">

      <li class="room-selector small-room-selector selector" rel="small-room-bookings">
         <?php if(get_field('under_500_sqft_section_label')){ ?>
             <?php the_field('under_500_sqft_section_label'); ?>
         <?php } ?>
       </li>

       <li class="room-selector large-room-selector selector" rel="large-room-bookings">
         <?php if(get_field('over_500_sqft_label')){ ?>
             <?php the_field('over_500_sqft_label'); ?>
         <?php } ?>
       </li>

       <li class="room-selector sports-fields-selector selector" rel="sports-fields-bookings">
         <?php if(get_field('sports_fields_label')){ ?>
             <?php the_field('sports_fields_label'); ?>
         <?php } ?>
       </li>

</ul>
</div>
</div><!--end of container-->




<div class="room-wrapper">

<?php if( have_rows('room_for_under_500') ): ?>

<div class="room-articles" id="small-room-bookings">

<ul>

<?php // loop through the rows of data
$z=1; //we need this to determine if odd or even
while ( have_rows('room_for_under_500') ) : the_row(); ?>

<li>

<div class="container paddingbox" id="small_room_<?php echo $z; ?>">
   <div class="row room-booking-row">

<?php if(get_sub_field('room_name')){ ?>

 <div class="col-lg-6 col-md-12 col-sm-12 dashboard-excerpt">
        <div class="first-column-content">
           <h3 class="single-article-title"><?php the_sub_field('room_name'); ?></h3>
           <?php if(get_sub_field('room_location')) { ?>
               <h4 class="single-article-location"><?php the_sub_field('room_location'); ?></h4>
           <?php } ?>

           <?php if(get_sub_field('room_content')) { ?>
                           <p><?php the_sub_field('room_content'); ?></p>
                   <?php } ?>

           <?php if(get_sub_field('room_price')) { ?>
                 <div class="room-information">
                 <?php if(get_sub_field('room_price')) { ?>
                     <h5 class="single-article-price"><?php the_sub_field('room_price'); ?></h5>
                <?php } ?>
                <?php if(get_sub_field('room_size')) { ?>
                     <h5 class="single-article-size"><?php the_sub_field('room_size'); ?></h5>
                <?php } ?>
                <?php if(get_sub_field('room_capacity')) { ?>
                     <h5 class="single-article-capacity"><?php the_sub_field('room_capacity'); ?></h5>
                <?php } ?>    
                 </div>
           <?php } ?>


        </div>
   </div>
<?php } ?>

<?php if(get_sub_field('room_image')){ ?>
   <div class="col-lg-6 col-md-12 col-sm-12 dashboard-image">
          <?php $newImage = get_sub_field('room_image'); ?>
                  <div class="post_image tab-image" style="background-image: url('<?php echo esc_url($newImage);?>');"></div>
   </div>
<?php } ?>

    </div><!--end of row-->
</div><!--end of container-->

</li>

<?php $z++; ?>

<?php endwhile; ?>

</ul>

</div>

<?php endif; ?>

<!--Start of Big Rooms-->

<?php if( have_rows('room_for_over_500') ): ?>

<div class="room-articles large-room-articles" id="large-room-bookings">

<ul>

<?php $z = 1;
// loop through the rows of data
while ( have_rows('room_for_over_500') ) : the_row(); ?>

<li>

<div class="container paddingbox" id="large_room_<?php echo $z; ?>">
<div class="row">

<?php if(get_sub_field('room_over_500_label')){ ?>

 <div class="col-lg-6 col-md-12 col-sm-12 dashboard-excerpt">
        <div class="first-column-content">
           <h3 class="single-article-title"><?php the_sub_field('room_over_500_label'); ?></h3>
           <?php if(get_sub_field('room_over_500_location')) { ?>
               <h4 class="single-article-location"><?php the_sub_field('room_over_500_location'); ?></h4>
           <?php } ?>
           <?php if(get_sub_field('room_over_500_content')) { ?>
                           <p><?php the_sub_field('room_over_500_content'); ?></p>
                   <?php } ?>

        <?php if(get_sub_field('room_over_500_price')) { ?>
                 <div class="room-information">
                 <?php if(get_sub_field('room_over_500_price')) { ?>
                     <h5 class="single-article-price"><?php the_sub_field('room_over_500_price'); ?></h5>
                <?php } ?>
                <?php if(get_sub_field('room_over_500_size')) { ?>
                     <h5 class="single-article-size"><?php the_sub_field('room_over_500_size'); ?></h5>
                <?php } ?>
                <?php if(get_sub_field('room_over_500_capacity')) { ?>
                     <h5 class="single-article-capacity"><?php the_sub_field('room_over_500_capacity'); ?></h5>
                <?php } ?>    
                 </div>
           <?php } ?>

        </div>
   </div>
<?php } ?>

<?php if(get_sub_field('room_over_500_image')){ ?>
   <div class="col-lg-6 col-md-12 col-sm-12 dashboard-image">
          <?php $newImage = get_sub_field('room_over_500_image'); ?>
                  <div class="post_image tab-image" style="background-image: url('<?php echo esc_url($newImage);?>');"></div>
   </div>
<?php } ?>



</div><!--end of row-->
</div><!--end of container-->

<?php  $z++; ?> 

</li>

<?php endwhile; ?>

</ul>

</div>

<?php endif; ?>

<!--Start of Sports Fields-->

<?php if( have_rows('sports_fields_content_repeater') ): ?>

<div class="room-articles sports-fields-articles" id="sports-fields-bookings">

<ul>

<?php $z = 1;
// loop through the rows of data
while ( have_rows('sports_fields_content_repeater') ) : the_row(); ?>

<li>

<div class="container paddingbox" id="sports_field_<?php echo $z; ?>">
<div class="row">

<?php if(get_sub_field('sports_fields_single_label')){ ?>

 <div class="col-lg-6 col-md-12 col-sm-12 dashboard-excerpt">
        <div class="first-column-content">
           <h3 class="single-article-title"><?php the_sub_field('sports_fields_single_label'); ?></h3>
           <?php if(get_sub_field('sports_fields_location')) { ?>
               <h4 class="single-article-location"><?php the_sub_field('sports_fields_location'); ?></h4>
           <?php } ?>
           <?php if(get_sub_field('sports_fields_content')) { ?>
                           <p><?php the_sub_field('sports_fields_content'); ?></p>
           <?php } ?>

            <?php if(get_sub_field('sports_fields_price')) { ?>
                 <div class="room-information">
                 <?php if(get_sub_field('sports_fields_price')) { ?>
                     <h5 class="single-article-price"><?php the_sub_field('sports_fields_price'); ?></h5>
                <?php } ?>
                <?php if(get_sub_field('sports_fields_size')) { ?>
                     <h5 class="single-article-size"><?php the_sub_field('sports_fields_size'); ?></h5>
                <?php } ?>
                <?php if(get_sub_field('sports_fields_capacity')) { ?>
                     <h5 class="single-article-capacity"><?php the_sub_field('sports_fields_capacity'); ?></h5>
                <?php } ?>    
                 </div>
           <?php } ?>


        </div>
   </div>
<?php } ?>

<?php if(get_sub_field('sports_fields_image')){ ?>
   <div class="col-lg-6 col-md-12 col-sm-12 dashboard-image">
          <?php $newImage = get_sub_field('sports_fields_image'); ?>
                  <div class="post_image tab-image" style="background-image: url('<?php echo esc_url($newImage);?>');"></div>
   </div>
<?php } ?>

</div><!--end of row-->
</div><!--end of container-->

<?php  $z++; ?> 

</li>

<?php endwhile; ?>

</ul>

</div>

</div>

<?php endif; ?>
