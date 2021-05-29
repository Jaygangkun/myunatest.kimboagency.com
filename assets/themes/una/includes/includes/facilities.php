
<?php if( have_rows('single_facilities') ): ?>
<ul class="all-facilities">
<?php $z = 1; ?>

<?php while ( have_rows('single_facilities') ) : the_row(); ?>

   <li class="single-facility-<?php echo $z; ?>" id="single-facility-<?php echo $z; ?>">
   <div class="container">

   <div class="row facilities-map">

       <div class="col-lg-6 col-md-12 col-sm-12 facility-contact-info">
       <?php if(get_sub_field('facilities_centre_name')){ ?>
          <h3 class="facilities-centre-name"> <?php the_sub_field('facilities_centre_name'); ?></h3>
       <?php } ?>

       <?php if(get_sub_field('facilities_centre_address')){ ?>
          <p class="facilities-centre-address"> <?php the_sub_field('facilities_centre_address'); ?></p>
       <?php } ?>

       <?php if(get_sub_field('facilities_centre_phone')){ ?>
          <p class="facilities-centre-phone"> <?php the_sub_field('facilities_centre_phone'); ?></p>
       <?php } ?>

        <?php if(get_sub_field('facilities_centre_email')){ ?>
          <p class="facilities-centre-email"> <?php the_sub_field('facilities_centre_email'); ?></p>
       <?php } ?>

          <?php if(get_sub_field('facilities_centre_fax')){ ?>
          <p class="facilities-centre-fax"> <?php the_sub_field('facilities_centre_fax'); ?></p>
       <?php } ?>

       <?php if(get_sub_field('facilities_centre_hours')){ ?>
          <div class="facilities-hours-info"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_sub_field('facilities_centre_hours'); ?></div>
       <?php } ?>


      </div><!--facility contact info-->

      <div class="col-lg-6 col-md-12 col-sm-12 facility-map">
         <?php the_sub_field('facilities_centre_map'); ?>
      </div><!--facility contact info-->      
      </li>
      </div>
       </div>

      <?php $z++; ?>
<?php     endwhile; ?>
</ul>
<?php endif; ?>
