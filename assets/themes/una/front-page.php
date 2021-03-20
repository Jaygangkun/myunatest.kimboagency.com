<?php defined('ABSPATH') or die(""); ?>
<?php get_header(); ?>

<?php include('includes/alert-box.php'); ?>

<?php include('includes/latest-news.php'); ?>

<?php include('includes/facility-hours.php'); ?> 

<!-- to test Facility Hours -->

<?php include('includes/facility-hours-test.php'); ?>



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


<?php include('includes/featured-programs.php'); ?>

<?php include('includes/all-events-calendar.php'); ?>

<?php include('includes/top-section.php'); ?>

<?php get_footer(); ?>