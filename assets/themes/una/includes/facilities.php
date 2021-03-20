
<ul class="all-facilities">


   <li class="single-facility-1" id="single-facility-1">
   <div class="container">

   <div class="row facilities-map">

       <div class="col-lg-6 col-md-12 col-sm-12 facility-contact-info">
       <?php if(get_field('main_office_name')){ ?>
          <h3 class="facilities-centre-name"> <?php the_field('main_office_name'); ?></h3>
       <?php } ?>

       <?php if(get_field('main_office_address')){ ?>
          <p class="facilities-centre-address"> <?php the_field('main_office_address'); ?></p>
       <?php } ?>

       <?php if(get_field('main_office_phone')){ ?>
          <p class="facilities-centre-phone"> <?php the_field('main_office_phone'); ?></p>
       <?php } ?>

        <?php if(get_field('main_office_email')){ ?>
          <p class="facilities-centre-email"> <?php the_field('main_office_email'); ?></p>
       <?php } ?>

          <?php if(get_field('main_office_fax')){ ?>
          <p class="facilities-centre-fax"> <?php the_field('main_office_fax'); ?></p>
       <?php } ?>

       <?php include('main-office-timetable.php'); ?>
       

       

      


      </div><!--facility contact info-->

      <div class="col-lg-6 col-md-12 col-sm-12 facility-map">
         <?php the_field('main_office_map'); ?>
      </div><!--facility contact info-->      
      </div>
       </div>
       </li>


       <li class="single-facility-2" id="single-facility-2">
   <div class="container">

   <div class="row facilities-map">

       <div class="col-lg-6 col-md-12 col-sm-12 facility-contact-info">
       <?php if(get_field('wesbrook_community_name')){ ?>
          <h3 class="facilities-centre-name"> <?php the_field('wesbrook_community_name'); ?></h3>
       <?php } ?>

       <?php if(get_field('wesbrook_community_address')){ ?>
          <p class="facilities-centre-address"> <?php the_field('wesbrook_community_address'); ?></p>
       <?php } ?>

       <?php if(get_field('wesbrook_community_phone')){ ?>
          <p class="facilities-centre-phone"> <?php the_field('wesbrook_community_phone'); ?></p>
       <?php } ?>

        <?php if(get_field('wesbrook_community_email')){ ?>
          <p class="facilities-centre-email"> <?php the_field('wesbrook_community_email'); ?></p>
       <?php } ?>

          <?php if(get_field('wesbrook_community_fax')){ ?>
          <p class="facilities-centre-fax"> <?php the_field('wesbrook_community_fax'); ?></p>
       <?php } ?>

       <?php include('single-facilities-timetable.php'); ?>
       
       <?php include('fitness-facilities-timetable.php'); ?>

       <?php include('green-depot-timetable.php'); ?>

       

      


      </div><!--facility contact info-->

      <div class="col-lg-6 col-md-12 col-sm-12 facility-map">
         <?php the_field('wesbrook_community_map'); ?>
      </div><!--facility contact info-->      
      
      </div>
       </div>
       </li>



       <li class="single-facility-3" id="single-facility-3">
   <div class="container">

   <div class="row facilities-map">

       <div class="col-lg-6 col-md-12 col-sm-12 facility-contact-info">
       <?php if(get_field('old_barn_name')){ ?>
          <h3 class="facilities-centre-name"> <?php the_field('old_barn_name'); ?></h3>
       <?php } ?>

       <?php if(get_field('old_barn_address')){ ?>
          <p class="facilities-centre-address"> <?php the_field('old_barn_address'); ?></p>
       <?php } ?>

       <?php if(get_field('old_barn_phone')){ ?>
          <p class="facilities-centre-phone"> <?php the_field('old_barn_phone'); ?></p>
       <?php } ?>

        <?php if(get_field('old_barn_email')){ ?>
          <p class="facilities-centre-email"> <?php the_field('old_barn_email'); ?></p>
       <?php } ?>

          <?php if(get_field('old_barn_fax')){ ?>
          <p class="facilities-centre-fax"> <?php the_field('old_barn_fax'); ?></p>
       <?php } ?>

       <?php include('oldbarn-timetable.php'); ?>
       
        <?php include('oldbarn-fitness-timetable.php'); ?>



       

      


      </div><!--facility contact info-->

      <div class="col-lg-6 col-md-12 col-sm-12 facility-map">
         <?php the_field('old_barn_map'); ?>
      </div><!--facility contact info-->      
      
      </div>
       </div>
       </li>

</ul>

