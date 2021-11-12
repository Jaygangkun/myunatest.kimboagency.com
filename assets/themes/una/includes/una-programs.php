<!--Beginning of Dashboard Section -->
<div class="dashboard-section-wrapper">
   <h2 class="frontpage-section-headline dashboard-section">Your UNA Activities Dashboard</h2>
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 dashboard-area">

<?php if( have_rows('program_blurbs_on_front', 78) ): ?>

<ul class="tab-list frontpage-blurb">
    <?php  $z = 1; ?> 

<?php while ( have_rows('program_blurbs_on_front', 78) ) : the_row(); ?>
      <li class="water-reduction-selector selector" rel="program_blurb_<?php echo $z; ?>" for="program_image_<?php echo $z; ?>">
       <?php if(get_sub_field('program_blurb_category', 78)){ ?>
            <?php the_sub_field('program_blurb_category', 78); ?>
       <?php } ?>
     </li>
  <?php  $z++; ?> 
<?php endwhile; ?>
</ul>

<?php endif; ?>
         
           
 <?php if( have_rows('program_blurbs_on_front', 78) ): ?>

<div class="water-reduction-articles">

<?php $z = 1;
// loop through the rows of data
while ( have_rows('program_blurbs_on_front', 78) ) : the_row(); ?>

<div class="program-blurb" id="program_blurb_<?php echo $z; ?>">
<div class="all-policies">

<?php if(get_sub_field('program_blurb_content', 78)){ ?>
               <div class="first-column-content">
                  <?php if(get_sub_field('program_blurb_content', 78)) { ?>
                          <p><?php the_sub_field('program_blurb_content', 78); ?></p>
                  <?php } ?>

               </div>
<?php } ?>

</div><!--end of row-->
</div><!--end of container-->

<?php  $z++; ?> 
<?php endwhile; ?>
</div>
<?php endif; ?>
            <ul class="activities-list children-activities-list">
               <li class="activities-list-item">
                  Ballet - Level 1
               </li>
               <li class="activities-list-item">
                  Piano - Level 1
               </li>
               <li class="activities-list-item">
                  Violin - Level 1
               </li>
               <li class="activities-list-item">
                  Soccer - Level 1
               </li>
            </ul>
            <ul class="activities-list youth-activities-list" style="display:none">
               <li class="activities-list-item">
                  Ballet - Youth
               </li>
               <li class="activities-list-item">
                  Piano - Youth
               </li>
               <li class="activities-list-item">
                  Violin - Youth
               </li>
               <li class="activities-list-item">
                  Soccer - Youth
               </li>
            </ul>
            <ul class="activities-list adults-activities-list" style="display:none">
               <li class="activities-list-item">
                  Ballet - Adults
               </li>
               <li class="activities-list-item">
                  Piano - Adults
               </li>
               <li class="activities-list-item">
                  Violin - Adults
               </li>
               <li class="activities-list-item">
                  Soccer - Adults
               </li>
            </ul>
            <ul class="activities-list seniors-activities-list" style="display:none">
               <li class="activities-list-item">
                  Ballet - Seniors
               </li>
               <li class="activities-list-item">
                  Piano - Seniors
               </li>
               <li class="activities-list-item">
                  Violin - Seniors
               </li>
               <li class="activities-list-item">
                  Soccer - Seniors
               </li>
            </ul>
            <div class="top_label view-news-button">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <a class="button-link">
                  <div class="news-button"> See All Of Our Programs</div>
               </a>
            </div>
         <!--dashboard area-->

         </div><!--closing left column-->

         <?php if( have_rows('program_blurbs_on_front', 78) ):
         $z = 1; ?>
         <div class="program-blurb-wrapper col-xl-6 col-lg-6 col-md-12 col-sm-12 ">

         <?php while ( have_rows('program_blurbs_on_front', 78) ) : the_row(); ?>
        
         <?php if(get_sub_field('program_blurb_image', 78)) { ?>
           <div class="dashboard-image" id="program_image_<?php echo $z; ?>" >
              <div class="post_image featured-image" style="background-image: url('<?php the_sub_field('program_blurb_image', 78) ?>');"></div>
            </div>
         <?php } ?> 

         <?php  $z++; ?> 
         <?php endwhile; ?>
         </div>
         <?php endif; ?>

      </div>
      <!--end of container-->
   </div>
   <!--end of row-->
   <div class="dashboard-button">
      <button class="upcoming-activities-button" id="button <?php echo $z; ?>">Register for your favorite activities today</button>
   </div>
   <!--end of activities button-->
   <div class="clearbreak seventy"></div>
</div>
<!--end of dashboard section-->