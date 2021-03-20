<?php get_header('no-parallax'); ?>    




<div class="container single-search-page">


<div>
    <button class="search-toggle-button" type="button" onclick="history.back();"> Back To All Results... </button>
</div>



<?php if ( have_posts() ) : ?>

<?php if($post_type[0] == "post" ){ ?>
    <h1 class="single-category-search-title"> Your search for <strong>'<?php the_search_query()?>'</strong> show the following <strong>News and Updates</strong> results... <br>Not finding what you're looking for? 
    <span class="open-search"> Search Again </span> </h1>
<?php }?>

<?php if($post_type[0] == "page" ){ ?>
    <h1 class="single-category-search-title"> Your search for <strong>'<?php the_search_query()?>'</strong> show the following <strong>Pages</strong> results... <br>Not finding what you're looking for? <span class="open-search"> Search Again </span> </h1>
<?php }?>
   



   <?php  $post_type = get_query_var('post_type'); ?>   
   

  <div class="search-results">
  <div id="art"><?php //required for infinite scrolling ?>  


 

  <?php while ( have_posts() ) : the_post(); ?>
  
  <div class="infscr_wrap">
  <ul>                        
             <li>     

    <div class="row single-search-result post_each">    
       
      <div class="col-12 col-lg-3">
         <a class="single-title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>  

     <div class="meta-info">
  
    <div>
     <?php if($post_type[0] == "page" ){ ?>
         <?php if( get_permalink() ){ ?>
            <?php
                $str = get_permalink();
                $str = preg_replace('#^https?://#', '', $str);
                $search = 'myuna.ca' ;
                $trimmed = str_replace($search, '', $str) ;
                echo $trimmed; // www.google.com ?>
         <?php } ?>
       <?php } ?>
   </div><!--end of permalink for pages-->

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
    <div class="col-12 col-lg-7 offset-lg-1">
    <?php if( get_the_excerpt() ){ ?>
                <p><?php echo get_excerpt(120); ?></p>
    <?php } ?>
     </div> 
    

    </div><!--end of row-->
    </li>
    </ul>
    </div><!--//infscr_wrap-->

    <?php endwhile;  ?>
    </div><!--end of art-->


    </div><!--search results-->
    <?php endif; ?>
    <div id="arrow_pagination"><?php /* Infinite Scrolling - There are 3 parts to script. This is Part 2 of 3. Part 1 is in the header.php and Part 3 is in the footer.php */ ?>
         <div class="right"><?php next_posts_link('<div class="pagination_right"></div>') ?></div>  
         <div class="left"><?php previous_posts_link('<div class="pagination_left"></div>') ?></div>
      </div><!--//arrow_pagination-->

 </div><!--end of container-->
 <?php get_footer(); ?>