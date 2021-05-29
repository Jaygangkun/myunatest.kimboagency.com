<?php defined('ABSPATH') or die(""); ?>
<?php get_header(); ?>

<?php include('includes/alert-box.php'); ?>

<?php include('includes/latest-news.php'); ?>

<?php include('includes/facility-hours.php'); ?> 

<!-- to test Facility Hours -->

<?php //include('includes/facility-hours-test.php'); ?>



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
</style>
<div id="featured_programs_lazyload" class="loading front-page">
   <div id="featured_programs_lazyload_content">
      <?php include('includes/featured-programs.php'); ?>
   </div>
   <div id="featured_programs_lazyload_waiting">
      <img src="<?php echo get_site_url()?>/assets/addons/loading-page/loading-screens/logo/images/08.svg" style="cursor:pointer;width:60px;">
   </div>
</div>

<?php include('includes/all-events-calendar.php'); ?>

<?php include('includes/core-standard.php'); ?>


<?php get_footer(); ?>