<div class="seventy"> </div>

<!--old section -->

<div class="container">
<div class="row">
<div class="col-12 col-lg-12">


<?php 
                        query_posts(array( 
                         'post_type' 	=> 'post', 
                         'posts_per_page' 	=> 5,
                         'post_status' 	=> 'publish',
                         'paged' 		=> $paged
           ));
        ?>

<?php if ( have_posts() ) : ?>
<div class="main_text search-results">
        <div id="art"><?php //required for infinite scrolling ?> 


        <div class="infscr_wrap">
	    <?php while ( have_posts() ) : the_post(); ?>            
                   <div class="post_each_wrap">  
                      
                           <div class="inner_wrap">

                           <div class="row news_content single-search-result post_each">
 <div class="col-lg-3">

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


 <a href="<?php echo get_permalink();?>"><div class="calendar-image no-load" style="background-image: url('<?php echo $thumb;  ?>'); background-position: center center ; "></div></a>
                      <?php } else { ?>
                        <a href="<?php echo get_permalink();?>"><div class="calendar-image no-load" style="background-image: url('<?php custom_url(); ?>/images/UNA-default-img.png'); background-position: center center ; "></div></a>
                      <?php } ?> 
</div>

<div class="col-12 col-lg-3">
         <a class="single-title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo mb_strimwidth( $text= get_the_title(),  0, 58, '...'); ?></a>  

     <div class="meta-info">
  
  
       <div class="search-meta-author-date">
            <?php if( get_the_author()){?>
               <span class="search-meta-author">By <?php echo get_the_author(); ?> - </span>
            <?php } ?>

            <?php if( get_the_date()){ ?>
                <span class="search-meta-date"> <?php echo get_the_date(); ?> </span>
            <?php } ?>
        </div>

         <?php if( get_the_category() ){ ?>
                <span class="search-meta-category"> <?php the_category(', '); ?> </span>
         <?php } ?>
</div>
</div>



    <div class="col-12 col-lg-5">
    <?php if( get_the_content() ){ ?>
                <p><?php echo get_excerpt(120); ?></p>
    <?php } ?>
     </div>
  
                          </div>
                            <hr/>
        
                           </div><!--//inner_wrap-->
                   </div><!--//post_each_wrap-->
            <?php endwhile; ?>
            </div><!--//infscr_wrap-->

            <div id="arrow_pagination"><?php /* Infinite Scrolling - There are 3 parts to script. This is Part 2 of 3. Part 1 is in the header.php and Part 3 is in the footer.php */ ?>
                     <div class="right"><?php next_posts_link('<div class="pagination_right"></div>') ?></div>  
                     <div class="left"><?php previous_posts_link('<div class="pagination_left"></div>') ?></div>
        </div><!--//arrow_pagination-->
            
            </div><!--art-->
            </div><!--main_text-->


            <?php endif; wp_reset_query(); ?>
</div>
</div>
</div>