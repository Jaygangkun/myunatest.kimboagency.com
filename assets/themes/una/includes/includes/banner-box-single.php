<?php if( get_the_title() ) { ?>


<div class="banner-box-container">
   <div class="container-fluid">
      <div class="row">
          <div class="col-lg-10 offset-lg-1 banner-single-content-box">
         
         <div class="banner-content-wrapper">
            <?php if( get_the_title() ) { ?>
                     <div class="big_title"><h1><?php the_title(); ?></h1></div>
                     <p>By <?php echo get_the_author(); ?></p>
            <?php } ?>
         </div>
             </div><!--end of col-12-->
      </div><!--end of row-->
   </div><!--end of container-->
</div>

<?php } ?>