<?php defined('ABSPATH') or die(""); ?>
<?php get_header(); ?>

<div class="clearbreak "></div>

<?php include('includes/alert-box.php'); ?>

<?php include('includes/banner-box-single.php'); ?>

<div class="single-hero-container">
<?php if( get_field('news_image')) { ?>
    <?php $image = get_field('news_image');?>
    <div class="single-hero-image" style="background-image: url('<?php echo esc_url($image); ?>');"></div>
<?php } ?>
</div>

<div class="container">

<div class="row">
   
<div class="single-meta-container">
    <span class="single-meta-date"><?php echo get_the_date(); ?> </span>
    <span class="single-meta-category"> <i class="fa fa-tag"></i> <?php the_category(', '); ?> </span>
</div>

<?php include('includes/alert-box.php'); ?>

    <div class="single-post-container col-lg-10 col-sm-12 col-md-12 offset-lg-1">

        <div class="main_text"><?php the_content(); ?></div>

        <div class="clearbreak fifty"></div>

        

    </div><!--//col-->

</div><!--//row-->

</div><!--//container-->

<div class="clearbreak fifty"></div>

<?php include('includes/latest-news.php'); ?>

<?php get_footer(); ?>