<?php if( get_field('page_banner_title') ) { ?>

   <div class="banner-box-container">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-10 offset-lg-1 banner-single-content-box">
               <div class="banner-content-wrapper">
                  <?php if( get_field('page_banner_title') ) { ?>
                     <div class="big_title"><h1><?php the_field('page_banner_title'); ?></h1></div>
                  <?php } ?>
                  <?php if( get_field('page_banner_content') ) { ?>
                     <div class="banner-content"><p><?php the_field('page_banner_content'); ?></p></div>
                  <?php } ?>
               </div><!--banner-content-wrapper-->
            </div><!--col-lg-10-->
         </div><!--row-->
      </div><!--container-fluid-->
   </div><!--banner-box-container-->

<?php } ?>