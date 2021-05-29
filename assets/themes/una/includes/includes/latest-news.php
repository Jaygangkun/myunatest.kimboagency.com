<?php
 $feature_post_type = 'post';
?>

<?php
		$feature_section = array(
      'post_type'		=> $feature_post_type,
		  'posts_per_page' => -1,
      'orderby'		=> 'date',
			'order' 		=> 'DESC'
		);
    $the_query = new WP_Query( $feature_section );
    $total = $the_query->found_posts;

if( $the_query->have_posts() ): ?>

<div class="section-wrapper calendar-section all-events-calendar-section latest-news-carousel-section">

   <h2 class="frontpage-section-headline news-section">Latest News</h2>

  <div class="flexslider">
    <ul class="slides">
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li>
        <div class="activities-loop events-loop event-column all-events">

<div class="news-item frontpage-card three-card-news">

                  <?php
$image = get_field('news_image');
if( $image ){

    // Image variables.
    $url = $image['url'];
    $title = $image['title'];
    $alt = $image['alt'];
    $caption = $image['caption'];

    // Thumbnail size attributes.
    $size = 'thumbnail';
    $thumb = $image['sizes'][ $size ];
    $width = $image['sizes'][ $size . '-width' ];
    $height = $image['sizes'][ $size . '-height' ]; ?>


 <a href="<?php echo get_permalink();?>"><div class="post_image" style="background-image: url('<?php echo $thumb;  ?>'); background-position: center center ; "></div></a>
                      <?php } else { ?>
                        <a href="<?php echo get_permalink();?>"><div class="post_image" style="background-image: url('<?php custom_url(); ?>/images/UNA-default-img.png'); background-position: center center ; "></div></a>
                      <?php } ?>
   

                    <div class="events-content">

                    <div class="news-date">
                               <?php if( get_the_date()){ ?>
                                   <p> <?php echo get_the_date(); ?> </span>
                                <?php } ?>
                    </div><!--end of news date-->

                            <div class="news-heading">
                               <div class="news-title">
                               <?php if( get_the_title()){ ?>
                                <a href="<?php echo get_permalink();?>"><h3 class="frontpage-card-title">
                                  <?php echo wp_trim_words( get_the_title(), 8 ); ?>
                               </h3></a>
                               <?php } ?>
                               </div>
                            </div> <!--//news-heading-->

                    <div class="news-body">

                        <div class="news-excerpt">
                        <?php if( get_the_excerpt()){ ?>
                             <p><?php echo get_excerpt(120); ?></p>
                         <?php } ?>
                         </div>
                    </div><!--//news-body-->
                    </div><!--events-content-->
               </div>
</div><!--end of news single item-->
        </li>
        <?php endwhile; ?>
    </ul>
    <div class="number-results">
      <p><?php echo $total; ?> Results</p>
    </div>
  </div><!-- .flexslider -->

  <div class="top_label view-news-button view-events-calendar">
    <div class="center-link paddingbox">
      <a class="button-link" href="/news/"><i class="fa fa-angle-right" aria-hidden="true"></i>See All News</a>
    </div>
  </div>
</div><!-- .section-wrapper -->

<?php endif; wp_reset_query(); ?>

