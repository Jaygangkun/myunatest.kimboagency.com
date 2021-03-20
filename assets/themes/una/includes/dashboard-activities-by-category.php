<!--Beginning of Dashboard Section -->
<!-- Start of API Section-->

<?php
$currentDateTime = date('Y-m-d');
$currentEndTime = date('Y-m-d', strtotime(' +60 day'));



$today_date = 'https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=' . $currentDateTime . '&endDate=' . $currentEndTime;



  $ch = curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => "$today_date",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "X-Access-Key: 5I8bxF2WG9nFZ0rf5zxW3tGlN0aSJDr9",
      "X-Client-Number: 24588"
    ),
  ));

  $response = curl_exec($ch);
  curl_close($ch);
  $array = json_decode($response,true);
  $results_array = $array['Result'];


   foreach ($results_array as $rkey => $resource){
    if ($resource['CalendarCategory'] == 'Adults & Seniors'){
        $adults[] = $resource;
    } else if ($resource['CalendarCategory'] == 'Early Years') {
        $early[] = $resource;
  } else if ($resource['CalendarCategory'] == 'Children & Youth') {
        $children[] = $resource;
}
}?>

<?php $arr = array();
 for ($i=0; $i < count($early); $i++): 
     $arr[] = $early[$i]['Subject']; ?>
 <?php endfor; ?>



<?php $unique_data = array_unique($arr); ?>

<?php $newUniqueData= array_filter($unique_data, static function($var){return $var !== null;} ); ?>



<?php $childrenArr = array();
 for ($i=0; $i < count($children); $i++): 
     $childrenArr[] = $children[$i]['Subject']; ?>
 <?php endfor; ?>


<?php $children_unique_data = array_unique($childrenArr); ?>


<?php $adultsnArr = array();
 for ($i=0; $i < count($adults); $i++): 
     $adultsArr[] = $adults[$i]['Subject']; ?>
 <?php endfor; ?>


<?php $adults_unique_data = array_unique($adultsArr); ?>



<!--end of API-->
<div class="dashboard-section-wrapper">
   <h2 class="frontpage-section-headline dashboard-section">Your UNA Activities Dashboard</h2>
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 dashboard-area">

<?php if( have_rows('program_blurbs_on_front') ): ?>

<ul class="tab-list frontpage-blurb">
    <?php  $z = 1; ?>

<?php while ( have_rows('program_blurbs_on_front') ) : the_row(); ?>
      <li class="water-reduction-selector selector" rel="program_blurb_<?php echo $z; ?>">
       <?php if(get_sub_field('program_blurb_category')){ ?>
            <?php the_sub_field('program_blurb_category'); ?>
       <?php } ?>
     </li>
  <?php  $z++; ?>
<?php endwhile; ?>
</ul>

<?php endif; ?>


 <?php if( have_rows('program_blurbs_on_front') ): ?>

<div class="water-reduction-articles">

<?php $z = 1;
// loop through the rows of data
while ( have_rows('program_blurbs_on_front') ) : the_row(); ?>

<div class="program-blurb" id="program_blurb_<?php echo $z; ?>">
<div class="all-policies">

<?php if(get_sub_field('program_blurb_content')){ ?>
               <div class="first-column-content">
                  <?php if(get_sub_field('program_blurb_content')) { ?>
                          <p><?php the_sub_field('program_blurb_content'); ?></p>
                  <?php } ?>

               </div>
<?php } ?>

</div><!--end of row-->
</div><!--end of container-->

<?php  $z++; ?>
<?php endwhile; ?>
</div>
<?php endif; ?>
<div class="activities-by-categories-wrapper">

        <ul class="activities-list children-activities-list program_blurb_1">
            <?php for ($i=0; $i < 5; $i++): ?>
            <?php if (!empty($unique_data[$i])){?>
           <li class="activities-list-item">
               <?php echo $unique_data[$i]; ?>
           </li>
            <?php } ?>
           <?php endfor; ?>
         </ul>     
            <ul class="activities-list youth-activities-list program_blurb_2" style="display: none">
            <?php for ($i=0; $i < 5; $i++): ?>
            <?php if (!empty($children_unique_data[$i])){?>
           <li class="activities-list-item">
               <?php echo $children_unique_data[$i]; ?>
           </li>
            <?php } ?>
           <?php endfor; ?>
            </ul>
            <ul class="activities-list adults-activities-list program_blurb_3" style="display: none">
            <?php for ($i=0; $i < 4; $i++): ?>
            <?php if (!empty($adults_unique_data[$i])){?>
           <li class="activities-list-item">
               <?php echo $adults_unique_data[$i]; ?>
           </li>
           <?php } ?>
           <?php endfor; ?>
            </ul>
</div>

      
            <div class="top_label view-news-button">
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <a class="button-link">
                  <div class="news-button"> See All Of Our Programs</div>
               </a>
            </div>
         <!--dashboard area-->

         </div><!--closing left column-->

         <?php if( have_rows('program_blurbs_on_front') ):
         $z = 1; ?>
         <div class="program-blurb-wrapper col-xl-6 col-lg-6 col-md-12 col-sm-12 ">

         <?php while ( have_rows('program_blurbs_on_front') ) : the_row(); ?>

         <?php if(get_sub_field('program_blurb_image')) { ?>
           <div class="dashboard-image program_blurb_<?php echo $z; ?>" id="program_image_<?php echo $z; ?>" >
              <div class="post_image featured-image" style="background-image: url('<?php the_sub_field('program_blurb_image') ?>');"></div>
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