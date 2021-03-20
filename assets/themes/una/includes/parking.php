
<div class="parking-container">

<div class="container paddingbox">
<div class="row all-centers">
<div class="col-lg-6 col-md-12 col-sm-12">
<?php if(get_field('parking_maps_section_title')){ ?>
                <div class="first-column-content parking-map-section">
                   <h1 class="single-article-title"><?php the_field('parking_maps_section_title'); ?></h1>
                   <?php if(get_field('parking_maps_content')) { ?>
                           <p><?php the_field('parking_maps_content'); ?></p>
                   <?php } ?>
                </div>
 <?php } ?>
 </div>



        <?php if( have_rows('parking_map') ): ?>
        <div class="col-lg-6 col-md-12 col-sm-12">

        <ul class="tab-list">
            <?php  $z = 1; ?> 
       <?php while ( have_rows('parking_map') ) : the_row(); ?>
              <li class="water-reduction-selector selector" rel="parking_<?php echo $z; ?>">
               <?php if(get_sub_field('parking_map_title')){ ?>
                    <?php the_sub_field('parking_map_title'); ?>
               <?php } ?>
             </li>
             <?php  $z++; ?> 
      <?php endwhile; ?>
      </ul>

      <div class="map-wrapper">
      <?php  $z = 1; ?> 
      <?php while ( have_rows('parking_map') ) : the_row(); ?>
          <?php if(get_sub_field('parking_map_image')){ ?>
              <div class="dashboard-image fitness-centres-image" id="parking_<?php echo $z; ?>">
                   <?php the_sub_field('parking_map_image'); ?>
             </div>
          <?php } ?>
          <?php  $z++; ?> 
       <?php endwhile; ?>
        </div>
     </div><!--close column-->
 <?php endif; ?>

          </div>
          </div>
          </div><!--parking container-->


    



