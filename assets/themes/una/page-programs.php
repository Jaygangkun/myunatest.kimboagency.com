<?php defined('ABSPATH') or die(""); ?>

<?php get_header(); ?>

<?php include('includes/alert-box.php'); ?>

<?php include('includes/left-overlay-columns.php'); ?>

<div class="events-section">
<div class="activities-time-loop sixty">
    <div class="myuna-all-programs">
        <?php echo do_shortcode("[myuna-all-programs]")?>
    </div>
</div>
</div>

<?php include('includes/core-standard.php'); ?>

<?php include('includes/helpful.php'); ?>

<?php get_footer(); ?>