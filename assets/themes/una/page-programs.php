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

        .loading #activities_content_wrap {
            display: none;
        }
    </style>
    <div id="activities_content" class="loading programs-page">
        <div id="activities_content_wrap">
            <div class="myuna-all-programs">
                <?php echo do_shortcode("[myuna-all-programs]")?>
            </div>
        </div>
        <div id="activities_content_lazy_waiting">
            <div class="init-ui">
                <?php include('includes/all-activities.php'); ?>
            </div>
            <img src="<?php custom_url(); ?>/images/loading-screen.svg" style="cursor:pointer;width:60px;">
        </div>
    </div>
</div>
</div>

<?php include('includes/core-standard.php'); ?>

<?php include('includes/helpful.php'); ?>

<?php get_footer(); ?>