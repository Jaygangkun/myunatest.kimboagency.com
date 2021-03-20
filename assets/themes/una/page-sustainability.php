<?php defined('ABSPATH') or die(""); ?>

<?php get_header(); ?>

<?php include('includes/alert-box.php'); ?>

<?php include('includes/blurb-box.php'); ?>

<?php include('includes/top-section.php'); ?>

 
<?php include('includes/three-pillars.php'); ?>

<?php include('includes/sustainability-news.php'); ?>


<?php include('includes/four-pillars.php'); ?>

<?php include('includes/overlay-columns.php'); ?>

<?php include('includes/water-reduction-columns.php'); ?>

<?php include('includes/transportation-tabs.php'); ?>

<?php include('includes/left-overlay-columns.php'); ?>

<?php include('includes/two-pillars.php'); ?>

<?php include('includes/collaboration.php'); ?>

<div class="container">
  <div class="row">
    <?php the_content(); ?>
  </div>
</div>

<?php get_footer(); ?>