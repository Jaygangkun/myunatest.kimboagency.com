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
                  <div class="post_image featured-image" style="background-image: url('<?php echo esc_url($image); ?>'); background-position: center center ; "></div>
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
               </div>
               <!--//news-heading-->
               <div class="news-body">
                  <div class="news-date">
                     <?php if( get_the_date()){ ?>
                     <p> <?php echo get_the_date(); ?> </span>
                        <?php } ?>
                  </div>
                  <?php if( get_the_excerpt()){ ?>
                  <p><?php echo get_excerpt(120); ?></p>
                  <?php } ?>
               </div>
               <!--//news-body-->
            </div>
            <?php endwhile; wp_reset_query(); ?>
            <div class="top_label view-news-button">
              <a class="button-link" href="/news/"><i class="fa fa-angle-right" aria-hidden="true"></i>See All News</a>
            </div>
         </div>
         <!--//news-->
      </div>
      <!--row-->
   </div>
   <!--container-->
</div>
<!--news-section-wrapper-->