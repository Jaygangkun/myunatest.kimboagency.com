<?php defined('ABSPATH') or die(""); ?>

<?php get_header(); ?>

<?php include('includes/alert-box.php'); ?>

<?php include('includes/left-overlay-columns.php'); ?>

<div class="events-section">
<div class="activities-time-loop sixty">
    <?php include('includes/all-activities.php'); ?>
</div>
</div>

<?php include('includes/bottom-section.php'); ?>

<?php include('includes/helpful.php'); ?>

<?php get_footer(); ?>