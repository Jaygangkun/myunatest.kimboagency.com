<?php defined('ABSPATH') or die(""); ?>

<?php get_header(); ?>

<?php include('includes/alert-box.php'); ?>

<?php include('includes/left-overlay-columns.php'); ?>


<div class="events-section">
<div class="activities-time-loop sixty">
    <style type="text/css">
        #activities_content_lazy_waiting{
            display: none;
            text-align: center;
        }

        .loading #activities_content_lazy_waiting{
            display: block;
        }
    </style>
    <div id="activities_content" class="loading programs-page">
        <div id="activities_content_wrap">
            <?php include('includes/all-activities.php'); ?>
        </div>
        <div id="activities_content_lazy_waiting">
            <img src="<?php echo get_site_url()?>/assets/addons/loading-page/loading-screens/logo/images/08.svg" style="cursor:pointer;width:60px;">
        </div>
    </div>
</div>
</div>

<?php include('includes/core-standard.php'); ?>

<?php include('includes/helpful.php'); ?>

<?php get_footer(); ?>