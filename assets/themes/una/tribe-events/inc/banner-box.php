
<div class="banner-box-container">
   <div class="container-fluid">
      <div class="row">
          <div class="col-lg-10 offset-lg-1 banner-single-content-box">
         
         <?php if( get_field('calendar_page_title', 'option') ) { ?>
         <div class="banner-content-wrapper">
                     <div class="big_title"><h1><?php the_field('calendar_page_title', 'option'); ?></h1></div>
                     <?php if( get_field('calendar_page_content', 'option' ) ) { ?>
                      <div class="banner-content"><p><?php the_field('calendar_page_content', 'option'); ?></p></div>
            <?php } ?>
         </div>
         <?php } ?>

      

             </div><!--end of col-12-->
      </div><!--end of row-->
   </div><!--end of container-->
</div>