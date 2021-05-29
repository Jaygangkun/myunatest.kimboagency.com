
<div class="parking-container">

<div class="container paddingbox">
<div class="row all-centers">
<div class="col-lg-6 col-md-12 col-sm-12">
<?php if(get_field('green_depot_section_title')){ ?>
                <div class="first-column-content parking-map-section">
                   <h1 class="single-article-title"><?php the_field('green_depot_section_title'); ?></h1>


<table class="price-table green-depot-hours-table">
 

   <?php if( have_rows('green_depot_hours_row') ): ?>

 <?php while ( have_rows('green_depot_hours_row') ) : the_row(); ?>

  <tr class="data-row">
  <?php if(get_sub_field('green_depot_hours_date')){ ?>
    <td><?php the_sub_field('green_depot_hours_date'); ?></td>
 <?php } ?>

   <?php if(get_sub_field('green_depot_hours')){ ?>
    <td><?php the_sub_field('green_depot_hours'); ?></td>
 <?php } ?>

   
</tr>
  
 <?php endwhile; ?>
<?php endif; ?>


</table>
                   <?php if(get_field('green_depot_content')) { ?>
                           <p><?php the_field('green_depot_content'); ?></p>
                   <?php } ?>
                </div>
 <?php } ?>
 </div>



        <div class="col-lg-6 col-md-12 col-sm-12">
       

      <div class="map-wrapper">
          <?php if(get_field('green_depot_image')){ ?>
              <div class="dashboard-image fitness-centres-image">
                   <?php the_field('green_depot_image'); ?>
             </div>
          <?php } ?>
        </div>
     </div><!--close column-->

          </div>
          </div>
          </div><!--parking container-->