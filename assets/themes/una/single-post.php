<?php defined('ABSPATH') or die(""); ?>
<?php get_header('single-post'); ?>

<div class="clearbreak "></div>

<?php include('includes/alert-box.php'); ?>


<div class="single-hero-container">
    <?php include('includes/alert-box-global.php'); ?>
    <div class="banner-single-content-box"> 
        <div class="banner-content-wrapper">
            <?php if( get_the_title() ) { ?>
                <div class="big_title"><h1><?php the_title(); ?></h1></div>
                <div class="banner-content-meta">
                    <i class="fas fa-user"></i>
                    <p>By <?php echo get_the_author(); ?></p>
                </div>
            <?php } ?>
         </div>
    </div><!--col-12-->
    
      <?php
$image = get_field('news_image');
if( $image ){

    // Image variables.
    $url = $image['url'];
    $title = $image['title'];
    $alt = $image['alt'];
    $caption = $image['caption'];

    // Thumbnail size attributes.
    $size = 'large';
    $thumb = $image['sizes'][ $size ];
    $width = $image['sizes'][ $size . '-width' ];
    $height = $image['sizes'][ $size . '-height' ]; ?>
        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
        
    <?php }    else { ?>
        
         <img src="<?php custom_url(); ?>/images/UNA-default-img.png" alt="UNA-default" />
                        
    
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



<?php get_footer(); ?>