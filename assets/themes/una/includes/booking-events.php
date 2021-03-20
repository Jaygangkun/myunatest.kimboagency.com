<!--list of titles-->

<?php if(get_field('booking_events_title')){?>

     <div class="center paddingbox single-page-section-title">
        <h2><?php the_field('booking_events_title'); ?></h2>
      </div>

<?php }?>



<?php if( have_rows('booking_event_section') ): ?>
<div class="container">
<div class="row">
<ul class="col-12 tab-list">
    <?php  $z = 1; ?>

<?php while ( have_rows('booking_event_section') ) : the_row(); ?>
      <li class="water-reduction-selector" rel="booking_event_<?php echo $z; ?>">
       <?php if(get_sub_field('booking_event_title')){ ?>
            <?php the_sub_field('booking_event_title'); ?>
       <?php } ?>
     </li>
  <?php  $z++; ?>
<?php endwhile; ?>
</ul>
</div>
</div><!--end of container-->
<?php endif; ?>






<?php if( have_rows('booking_event_section') ): ?>

<div class="water-reduction-articles">

<?php $z = 1;
// loop through the rows of data
while ( have_rows('booking_event_section') ) : the_row(); ?>

<div class="container paddingbox" id="booking_event_<?php echo $z; ?>">
<div class="row">

<?php if(get_sub_field('booking_event_title')){ ?>

 <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="first-column-content">
           <h3 class="single-article-title"><?php the_sub_field('booking_event_title'); ?></h3>

           <?php if(get_sub_field('booking_event_content')) { ?>
                   <p><?php the_sub_field('booking_event_content'); ?></p>
           <?php } ?>

           <?php if( get_sub_field('booking_event_link') ) { ?>
            <a class="button" href="<?php the_sub_field('booking_event_link'); ?>"><?php the_sub_field('booking_event_link_label'); ?></a>
            <?php } ?>
        </div>
   </div>
<?php } ?>

<?php if(get_sub_field('booking_event_image')){ ?>
   <div class="col-lg-6 col-md-12 col-sm-12 dashboard-image">
          <?php $newImage = get_sub_field('booking_event_image'); ?>
                  <div class="post_image" style="background-image: url('<?php echo esc_url($newImage);?>');"></div>
   </div>
<?php } ?>

</div><!--end of row-->
</div><!--end of container-->

<?php  $z++; ?>

<?php endwhile; ?>

</div>

<?php endif; ?>
