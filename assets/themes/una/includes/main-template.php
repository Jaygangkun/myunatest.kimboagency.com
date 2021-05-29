<?php defined('ABSPATH') or die(""); ?>
<?php /**
* Template Name: Main Template
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/ ?>
<?php get_header(); ?>

<div class="flexslider frontpage-top-flexslider">
      <div id="hero-slideshow">
        <ul class="slides">

<?php
   if( have_rows('image_slider') ):
	while ( have_rows('image_slider') ) : the_row(); ?>
   <li>
		<?php
		/* NOTE: This image slider displays just fine even when there is only 1 image in the slider. There is NO need to do a conditional statement of 1 image. */
		$the_image = wp_get_attachment_image_src( get_sub_field('image_slide'), 'large' ); ?>
		<div class="bg_image" style="background:#fff url(<?php echo $the_image[0]; ?>) no-repeat center center; background-size:cover"></div>
   </li>
<?php
	endwhile;
else :
endif;
?>
       </ul>
     </div><!--//hero-slideshow-->
</div>

<div class="mb_blurb_container">
<div class="container">
<div class="row">

<?php if( get_field('blurb_below_slider_front') || get_field('blurb_below_slider_title') ) { ?>
   <div class=" col-12 mb_blurb">
      <h2><?php the_field('blurb_below_slider_title'); ?></h2>
      <p>
		   <?php the_field('blurb_below_slider_front'); ?>
      </p>
   </div><!--//mb_blurb-->
   <?php } ?>
   </div>
   </div>
</div>

<?php if( get_field('video_url') ) {  ?>
   <div class="embedded-video">
      <iframe src="<?php the_field('video_url'); ?>" width="950" height="550" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
   </div>
<?php } ?>

<?php if( get_field('main_excerpt') ) {  ?>
<div class="container">
   <div class="row">
     <div class="col-12">
      <div class="main-excerpt">
       <p><?php the_field('main_excerpt'); ?></p>
     </div>
     </div>
   </div>
 </div>


<?php } ?>

<div class="news-section-wrapper">
<div class="clearbreak twenty"></div>

<?php $loop = new WP_Query( array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 3 ) ); ?>


   <h2 class="frontpage-section-headline news-section">Latest News</h2>
      <div class="container">
        <div class="row">
             <div class="flexslider col-xl-7 col-lg-7 col-md-12 col-sm-12 news-images">
               <ul class="slides">

                   <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                   <?php if( get_field('news_image')) { ?>
                     <?php $imageID = get_the_ID(); ?>
                      <?php  $postID = get_the_ID(); ?>

                   <li class="post_image_<?php echo $imageID; ?>">
                       <?php
                          $image = get_field('news_image');?>
                          <div class="post_image" style="background-image: url('<?php echo esc_url($image); ?>'); background-position: center center ; "></div>
                    </li>
<!--Script to render Image for News Section-->
    <script type="text/javascript">
        $(document).ready(function() {
            const targetNode = document.querySelector('.post_image_<?php echo $imageID; ?>');
            const config = { attributes: true, attributeFilter: ['class'], childList: false, subtree: false };
            const callback = function(mutationsList, observer) {
                  for(let mutation of mutationsList) {
                     if (targetNode.classList.contains('flex-active-slide')) {
                     $('.news-item-<?php echo $postID; ?>').css('background', '#c3c3c3');
                   }
                 else{
                     $('.news-item-<?php echo $postID; ?>').css('background', '#EFEEED');
                   }
                  }
            };
          const observer = new MutationObserver(callback);
          observer.observe(targetNode, config);
            });
   </script>
<!--Script to render Image for News Section-->

                    <?php } ?>
              <?php endwhile; wp_reset_query(); ?>
                 </ul>
              </div>
         <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 news">
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php
                       $postID = get_the_ID();
                 ?>
                <div class="news-item news-item-<?php echo $postID; ?>">
                            <div class="news-heading">
                               <div class="news-title">
                               <?php if( get_the_title()){ ?>
                                      <?php the_title(); ?>
                               <?php } ?>
                               </div>
                            </div> <!--//news-heading-->

                    <div class="news-body">
                    <div class="news-date">
                               <?php if( get_the_date()){ ?>
                                   <p> <?php echo get_the_date(); ?> </span>
                                <?php } ?>
                            </div>

                        <?php if( get_the_excerpt()){ ?>
                             <p><?php echo get_excerpt(120); ?></p>
                         <?php } ?>

                    </div><!--//news-body-->
               </div>
               <?php endwhile; wp_reset_query(); ?>

               <div class="top_label view-news-button">
                <a class="button-link" href="/news/"><i class="fa fa-angle-right" aria-hidden="true"></i>See All News</a>
              </div>
             </div> <!--//news-->
         </div><!--row-->
         </div><!--container-->

</div><!--news-section-wrapper-->
<div class="clearbreak fifty"></div>



<?php get_footer(); ?>