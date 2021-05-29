<?php defined('ABSPATH') or die(""); ?>
<?php get_header('no-parallax'); ?>
<div class="clearbreak fifty top_space"></div>



<?php include('includes/spring-season.php') ?>
<?php include('includes/summer-season.php') ?>
<?php include('includes/winter-season.php') ?>

<?php $gmtNow = date('Y-m-d H:i:s'); ?>




<?php $springStart = '2021-03-29 08:00:00'; ?>

<?php $summerStart = '2021-06-28 08:00:00'; ?>

<?php $displayTime = '2021-03-05 08:00:00'; ?>


<?php if ($gmtNow >= $displayTime && $gmtNow >= $springStart  && $gmtNow < $summerStart) { ?>
   <?php $springAndSummer= array_merge( $springPrograms, $summerPrograms); ?>
<?php } elseif ( $gmtNow >= $displayTime && $gmtNow >= $summerStart){ ?>
  <?php $springAndSummer= array_merge( $summerPrograms); ?>
  <?php } elseif ( $gmtNow >= $displayTime && $gmtNow < $springStart){ ?>
  <?php $springAndSummer= array_merge( $springPrograms, $summerPrograms, $winterPrograms); ?>
<?php } elseif( $gmtNow < $displayTime) { ?>
  <?php $springAndSummer= array_merge( $winterPrograms); ?>
<?php }; ?>

<?php $searchTerm = ucfirst(get_search_query());
foreach ($springAndSummer as $rkey => $resource){
if ( preg_match("/$searchTerm/", $resource['InstructorName']) || preg_match("/$searchTerm/", $resource['Subject']) || preg_match("/$searchTerm/", $resource['CalendarName']) || preg_match("/$searchTerm/", $resource['CalendarCategory']) ){
  $brandNewArray[] = $resource;
}
} ?>




 <?php if( have_posts() || (!empty($brandNewArray)) ){ ?>


    <div class="container">
          <div class="row">
          <div class="search-query-search-page">
               <h1> Your search for <span>'<?php the_search_query()?>'</span> show the following results...</h1>
               <p class="research-text">Make another search</p> <?php get_search_form(); ?>
          </div>
        </div>
    </div>

   <?php $types = array('post', 'page', 'tribe_events' );
    foreach( $types as $type ){ ?>

     <?php if($type == 'post') { ?>
     <div class="container search-section">
        <div class="row">
        <div class="col-offset-4 col-lg-4">
          <div class="search-container-wrapper">
            <h2>News & Updates</h2>

            
  <ul class="news-and-update-list" id="all-post-results">
  <h3 id="posts-error-message"> No posts containing your search terms were found </h3>

    <?php } elseif($type == 'tribe_events'){ ?>
      <div class="section-wrapper calendar-section all-events-calendar-section">
         <h2 class="frontpage-section-headline news-section">Upcoming Events</h2>
          <div class="flexslider">
             <ul class="slides calendar-list">
             <h3 id="calendar-error-message"> No events containing your search terms were found </h3>

    <?php } elseif($type == 'page'){ ?>
      <div class="col-offset-4 col-lg-4">
          <div class="search-container-wrapper">

             <h2>Pages</h2>
      <ul id="all-page-results">
      <h3 id="pages-error-message"> No pages containing your search terms were found </h3>

    <?php } ?>


 <?php if ( have_posts() ) : ?>

     <?php while( have_posts() ){
            the_post();
            if( $type == get_post_type() ){
                get_template_part('content', $type);
            }
        }?>
          
<?php endif; ?>




        <?php if($type == 'post') { ?>
                 </div><!--col-4-->
          </ul>
          <a href="/?s=<?php the_search_query(); ?>&post_type=post">
          <div>
                   <button class="register-button search-toggle-button news-search-button">More 'News & Updates' Results ></button>
            </div>
          </a>
        </div><!--end of search container -->
      
         <?php } elseif($type == 'tribe_events'){ ?>
          </ul>
       </div><!-- .flexslider -->
       </div><!-- .section-wrapper -->
        <?php } elseif($type == "page") { ?>
             </div><!--col-4-->
 
             
             <a href="/?s=<?php the_search_query(); ?>&post_type=page">
             <div>
                   <button class="register-button search-toggle-button pages-search-button">More 'Pages' Results ></button>
            </div>
            </a>
             </div><!--end of search container -->
             <!-- not showing for now-->
        

       


            </div><!--end of row-->
           </div><!--end of container-->
  <div class="events-section">
<div class="activities-time-loop sixty">
<h2>Our Programs</h2>
<?php include('includes/all-programs-results.php'); ?>
</div>
</div>
   
        <?php }

        rewind_posts(); ?>
  <?php  }
} else { ?>
    <div class="container">
          <div class="row">
          <div class="search-query-search-page">
            <h1 style='font-weight:bold;color:#000'>Nothing Found for <span>'<?php the_search_query()?>'</span> </h1>
            <p class="research-text">Make another search</p> <?php get_search_form(); ?>
          </div>
        </div>
    </div>
    
    <div class="alert alert-info">
      <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
    </div>
<?php } ?>




<?php get_footer(); ?>