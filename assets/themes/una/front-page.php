<?php defined('ABSPATH') or die(""); ?>
<?php get_header(); ?>

<?php include('includes/alert-box.php'); ?>

<?php include('includes/latest-news.php'); ?>

<?php //include('includes/facility-hours.php'); ?> 

<!-- to test Facility Hours -->

<?php //include('includes/facility-hours-test.php'); ?>

<?php include('includes/overlay-columns.php'); ?>


<?php
  $ch = curl_init();
  $today_date = 'https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=' . date("Y-6-1") . '&endDate=' . date("Y-7-30");
  $today_date_test = 'https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=' . date("Y-n-j") . '&endDate=' . date("Y-5-30");
  curl_setopt_array($ch, array(
   //  CURLOPT_URL => "https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=2020-4-1&endDate=2020-5-30",
   //  CURLOPT_URL => "https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=2020-1-20&endDate=2020-1-20",
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
?>

<!--hide this for launch-->
<div class="section-wrapper events-section" style="display: none">
  <h2 class="frontpage-section-headline">What's Coming Up?</h2>
  <!-- <p><?php echo "$today_date_test"; ?></p> -->
  <!-- <div class="events-button-container">
   <button type="button" id="today-button">today</button>
   <button type="button" id="tomorrow-button">Tomorrow</button>
   <button type="button" id="nextweek-button">Next Week</button>
  </div> -->

<div class="container">
<div class="row">
<ul class="col-12 tab-list">

      <li class="selector-loop" rel="activities_loop_1">
           Today
       </li>

       <li class="selector-loop" rel="activities_loop_2">
          Tomorrow
       </li>

       <!-- <li class="selector-loop" rel="activities_loop_3">
          Next Week
       </li> -->


</ul>
</div>
</div><!--end of container-->

<!-- remove loop for laucnhing-->
<!-- <div class="activities-time-loop sixty"> -->
    <?php //include('includes/today-activities.php'); ?>
    <?php //include('includes/tomorrow-activities.php'); ?>
   
   <?php // include('includes/next-week-activities.php'); ?>

<!-- </div> -->
 
</div><!-- .section-wrapper -->

<style type="text/css">
   .loading #featured_programs_lazyload_waiting{
      display: block;
   }

   #featured_programs_lazyload_waiting{
      display: none;
      text-align: center;
      padding-bottom: 35px;
   }

   .loading #featured_programs_lazyload_content {
      display: none;
   }

   #featured_programs_lazyload .flexslider .slides > li {
      width: auto !important;
   }
</style>
<div id="featured_programs_lazyload" class="loading front-page">
   <div id="featured_programs_lazyload_content">
      <?php echo do_shortcode("[myuna-featured-programs]")?>
   </div>
   <div id="featured_programs_lazyload_waiting">
      <h2 class="frontpage-section-headline news-section">Featured Programs</h2>
      <img src="<?php custom_url(); ?>/images/loading-screen.svg" style="cursor:pointer;width:60px;">
   </div>
</div>

<?php include('includes/all-events-calendar.php'); ?>

<?php include('includes/core-standard.php'); ?>

<?php get_footer(); ?>