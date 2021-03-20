
<div class="parking-container community-gardens-map-container">

<div class="container paddingbox">
<div class="row all-centers">
<div class="col-lg-6 col-md-12 col-sm-12">
<?php if(get_field('community_gardens_section_title')){ ?>
                <div class="first-column-content parking-map-section">
                   <h1 class="single-article-title"><?php the_field('community_gardens_section_title'); ?></h1>

                   <?php if(get_field('community_gardens_content')) { ?>
                           <p><?php the_field('community_gardens_content'); ?></p>
                   <?php } ?>
                </div>
 <?php } ?>
 </div>



        <div class="col-lg-6 col-md-12 col-sm-12">
       

      <div class="map-wrapper">
          <?php if(get_field('community_gardens_image')){ ?>
              <div class="dashboard-image fitness-centres-image">
                   <?php the_field('community_gardens_image'); ?>
             </div>
          <?php } ?>
        </div>
     </div><!--close column-->

          </div>
          </div>
          </div><!--parking container-->