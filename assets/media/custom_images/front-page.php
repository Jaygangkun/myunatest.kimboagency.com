<?php defined('ABSPATH') or die(""); ?>
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

<?php if( get_field('blurb_below_slider_front') ) { ?>
   <div class=" col-12 mb_blurb">
		<?php the_field('blurb_below_slider_front'); ?>
   </div><!--//mb_blurb-->
   <?php } ?>
   </div>
   </div>
</div>

<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=2020-4-1&endDate=2020-5-30",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "X-Access-Key: 5I8bxF2WG9nFZ0rf5zxW3tGlN0aSJDr9",
    "X-Client-Number: 24588"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
}

$data = json_decode($response,true);
//$total=count($data);
//echo $total;


$data = json_decode($response,true);
$total=count($data);
//echo "JUST TESTING" . count($data['Result']);

$found = count($data['Result']);
?>
<div class="operation-hours-section">
<h2 class="frontpage-section-headline dashboard-section">Hours of Operations</h2>

    <div class="container">
        <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class="operation-hours-card">
                     <div class="top-section">
                          <h3 class="name">Westbrook Community Centre</h3>    
                          <h4 class="category">Community Centre</h4>      
                          <span class="hours-info">Opening Hours</span> <br/> Monday-Friday: 9-5PM  
                    </div>
                          <h4 class="category">Fitness Centre</h4>      
                          <span class="hours-info">Opening Hours</span> <br/> Monday-Friday: 10-3PM  
                     </div>  
                  </div>    
                  <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="operation-hours-card">
                       <div class="top-section">
                        <h3 class="name">Old Barn Community Centre</h3>    
                        <h4 class="category">Community Centre</h4>      
                         <span class="hours-info">Opening Hours</span> <br/> Monday-Friday: 9-5PM    
                     </div>
                     <h4 class="category">Fitness Centre</h4>      
                          <span class="hours-info">Opening Hours</span> <br/> Monday-Friday: 10-3PM  
                    </div>
                  </div>  
                  <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="operation-hours-card">
                  <div class="top-section">
                     <h3 class="name">Main Office</h3>    
                     <h4 class="category">Community Centre</h4>      
                     <span class="hours-info">Opening Hours</span> <br/> Monday-Friday: 9-5PM    
                  </div>
                  </div>     
                  </div>      
 
        </div>
    </div>
    <div class="clearbreak twenty"></div>
    <div class="top_label view-news-button view-events-calendar">               
               <i class="fa fa-angle-right" aria-hidden="true"></i>
                           <a class="button-link"><div class="news-button"> See Full Hours</div></a>
                    </div>
    <div class="clearbreak seventy"></div>
</div>


<!--Beginning of Dashboard Section -->
<div class="dashboard-section-wrapper">
   <h2 class="frontpage-section-headline dashboard-section">Your UNA Activities Dashboard</h2>
      <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 dashboard-area">
            <div class="activities-button">
                <div>
                     <button class="details-button cat-children-button">Children</button>
                </div>
                <div>
                    <button class="description-button cat-youth-button">Youth</button>
               </div>
                <div>
                   <button class="description-button cat-adults-button">Adults</button>
               </div>
                <div>
                   <button class="description-button cat-seniors-button">Seniors</button>
               </div>
           </div>
          <div class="cat-children">
            <h2 class="frontpage-section-headline dashboard-section subheadline">Children's Recreational Programs</h2>
            <p class="program-description"> Our activities for children (Ages 5-12) are focused on interaction, growth, and play. All children’s programs, drop-in activities and camps are lead by professional instructors and strive for excellence through enjoyment.</p>
         </div>

         <div class="cat-youth" style="display:none">
            <h2 class="frontpage-section-headline dashboard-section subheadline">Youth Recreational Programs</h2>
            <p class="program-description"> Our activities for youth (Ages 13-17) are centred around individual expression, leadership development, and authentic friendship. Youth programs and drop-in activities are either youth lead or collaboratively planned, to ensure the best experiences possible. </p>
         </div> 

         <div class="cat-adults" style="display:none">
            <h2 class="frontpage-section-headline dashboard-section subheadline">Adults Recreational Programs</h2>
            <p class="program-description"> Our activities for adults (Ages 13-17) are centred around community and personal growth. Adult programs and drop-in activities are designed to foster well-being, enrich experiences, and build belonging. </p>
         </div> 

         <div class="cat-seniors" style="display:none">
            <h2 class="frontpage-section-headline dashboard-section subheadline">Seniors Recreational Programs</h2>
            <p class="program-description"> Programs for seniors provide new learning opportunities that foster discovery and skill development. </p>
         </div> 

         <ul class="activities-list children-activities-list">
            <li class="activities-list-item">
              Ballet - Level 1
          </li>     
           <li class="activities-list-item">
               Piano - Level 1
           </li>    
           <li class="activities-list-item">
              Violin - Level 1
            </li>   
            <li class="activities-list-item">
              Soccer - Level 1
            </li>   
         </ul>

         
         <ul class="activities-list youth-activities-list" style="display:none">
            <li class="activities-list-item">
              Ballet - Youth
          </li>     
           <li class="activities-list-item">
               Piano - Youth
           </li>    
           <li class="activities-list-item">
              Violin - Youth
            </li>   
            <li class="activities-list-item">
              Soccer - Youth
            </li>   
         </ul>

         <ul class="activities-list adults-activities-list" style="display:none">
            <li class="activities-list-item">
              Ballet - Adults
          </li>     
           <li class="activities-list-item">
               Piano - Adults
           </li>    
           <li class="activities-list-item">
              Violin - Adults
            </li>   
            <li class="activities-list-item">
              Soccer - Adults
            </li>   
         </ul>

         <ul class="activities-list seniors-activities-list" style="display:none">
            <li class="activities-list-item">
              Ballet - Seniors
          </li>     
           <li class="activities-list-item">
               Piano - Seniors
           </li>    
           <li class="activities-list-item">
              Violin - Seniors
            </li>   
            <li class="activities-list-item">
              Soccer - Seniors
            </li>   
         </ul>

         <div class="top_label view-news-button">               
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <a class="button-link"><div class="news-button"> See All Of Our Programs</div></a>
                    </div>

         </div><!--dashboard area-->
         
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 dashboard-image">
                  <?php $newImage = get_field('dashboard_children_image', 'option'); ?>
                          <div class="post_image" style="background-image: url('<?php echo esc_url($newImage);?>');"></div>
           </div>
       </div><!--end of container-->
     </div><!--end of row-->
     <div class="dashboard-button">
           <button class="upcoming-activities-button" id="button <?php echo $z; ?>">Register for your favorite activities today</button>
     </div><!--end of activities button-->
     <div class="clearbreak seventy"></div>
</div><!--end of dashboard section-->





<div class="section-wrapper">
<h2 class="frontpage-section-headline events-section">What's Happening Today?</h2>

<div class="flexslider">
<ul class="slides">

<li>
<div class="container">
<div class="row activities">
<?php  $z = 1; ?> 
<?php
for ( $v = 0; $v < 3; $v++ ){?>
     <div class="col-lg-4 col-md-12 col-sm-12 activities-loop" id="event_col_<?php echo $z; ?>">
     <div class="frontpage-card">
      <!--Get Title to match Image-->
      <?php 
         $text= $data['Result'][$v]['Subject'] ; 
         $resText = strtolower($text);
           ?>
         <?php $subTitle = explode(' ', $resText); ?>
         <?php $newText = preg_replace('/\d/', '', $subTitle ); ?>
          <?php $finalText = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $newText); ?>
     <!--end of get title-->

  <?php if(count($finalText) >= 2) { ?>
     <?php $imageURL = get_site_url() . "/assets/media/custom_images/" . $finalText[0] . "-" . $finalText[1] . ".jpg";
      $secondImageURL =  get_site_url() . "/assets/media/custom_images/" . $finalText[0] . ".jpg"; 
       $defaultURL = get_site_url() . "/assets/media/custom_images/una-default-image.png"; 

       $handle = @fopen($imageURL, 'r'); 
       $secondHandle = @fopen($secondImageURL, 'r'); ?> 


     <?php if ( $handle ) { ?>
      <div class="post_image" style="background-image: url('<?php echo $imageURL; ?>');"></div>
     <?php } elseif ( $secondHandle ) { ?>
      <div class="post_image" style="background-image: url('<?php echo $secondImageURL; ?>');"></div>
     <?php } else { ?>
      <div class="post_image" style="background-image: url('<?php echo $defaultURL; ?>');"></div>
     <?php } ?>

  <?php } ?>

     <div class="events-content">
     <div class="events-subject">
        <h3 class="frontpage-card-title">
          <?php echo $data['Result'][$v]['Subject']; ?>   
         </h3>
     </div>
     <div class="container">
     <div class="activities-button row">
         <button class="col-6 details-button">Details</button>
         <button class="col-6 description-button">Description</button>
     </div>
     </div>
     <div class="description" style="display: none">
     <?php if ($data['Result'][$v]['InstructorName']) {?>
              <div class="instructor row">
                     <div class="col-1 single-activity-icon instructor-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                     <div class="col-10 instructor-detail"><?php echo 'Instructor: ', $data['Result'][$v]['InstructorName']; ?> </div>
             </div><!--end of tribe category row-->  
        <?php } ?> 

        <?php if ($data['Result'][$v]['Description']) {?>
              <div class="single-activity-description row">
                     <div class="col-1 single-activity-icon info-icon"><i class="fa fa-info" aria-hidden="true"></i></div>
                     <div class="col-10 info-detail"> <?php echo wp_trim_words( $text= $data['Result'][$v]['Description'], $num_words = 18, $more = "..."); ?> <span>Learn More</span> </div>
             </div><!--end of tribe category row-->  
        <?php } ?> 
            
     </div>
    <div class="registration">
    <?php if ($data['Result'][$v]['LocationName']) {?>
              <div class="location row">
                     <div class="col-1 single-activity-icon location-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                     <div class="col-10 location-detail"><?php echo $data['Result'][$v]['LocationName']; ?> </div>
             </div><!--end of single-activity-description row-->  
        <?php } ?> 

        <?php if ($data['Result'][$v]['RegistrationStartDate']) {?>
              <div class="registration-start row">
              <?php $time = strtotime($data['Result'][$v]['RegistrationStartDate']); ?>
              <?php $new_format_time = date('M d Y', $time); ?>
                     <div class="col-1 single-activity-icon start-date-icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                     <div class="col-10 start-date-detail"><?php  echo 'Registration Start Date: ', $new_format_time ?> </div>
             </div><!--end of single-activity-description row-->  
        <?php } ?>

    </div>

        <button class="register-button" id="button <?php echo $z; ?>">Register</button>


    </div><!--events-content-->
    </div><!--frontpage-card-->
     </div><!--//col-4-->
     <?php  $z++; ?> 
<?php }?>
</div><!--//row-->
</div><!--//container-->
</li>

<li>
<div class="container">
<div class="row activities">
<?php  $z = 1; ?> 
<?php
for ( $v = 3; $v < 6; $v++ ){?>
     <div class="col-lg-4 col-md-12 col-sm-12 activities-loop" id="event_col_<?php echo $z; ?>">
     <div class="frontpage-card">
      
       <!--Get Title to match Image-->
       <?php 
         $text= $data['Result'][$v]['Subject'] ; 
         $resText = strtolower($text);
           ?>
         <?php $subTitle = explode(' ', $resText); ?>
         <?php $newText = preg_replace('/\d/', '', $subTitle ); ?>
          <?php $finalText = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $newText); ?>
     <!--end of get title-->

<?php $defaultURL = get_site_url() . "/assets/media/custom_images/una-default-image.png"; ?>

<div class="post_image" style="background-image: url('<?php echo $defaultURL; ?>');"></div>




     <div class="events-content">
     <div class="events-subject">
     <h3 class="frontpage-card-title">
          <?php echo $data['Result'][$v]['Subject']; ?>   
         </h3>
     </div>
     <div class="container">
     <div class="activities-button row">
         <button class="col-6 second-row-details-button">Details</button>
         <button class="col-6 second-row-description-button">Description</button>
     </div>
     </div>
     <div class="description second-row-description" style="display: none">

        <?php if ($data['Result'][$v]['InstructorName']) {?>
              <div class="instructor row">
                              <div class="col-1 single-activity-icon instructor-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                              <div class="col-10 instructor-detail"><?php echo 'Instructor: ', $data['Result'][$v]['InstructorName']; ?> </div>
             </div><!--end of instructor row-->  
        <?php } ?>

        <?php if ($data['Result'][$v]['Description']) {?>
              <div class="single-activity-description row">
                              <div class="col-1 single-activity-icon info-icon"><i class="fa fa-info" aria-hidden="true"></i></div>
                              <div class="col-10 info-detail"> <?php echo wp_trim_words( $text= $data['Result'][$v]['Description'], $num_words = 18, $more = "..."); ?> <span>Learn More</span> </div>
             </div><!--end of single-activity-description row-->  
        <?php } ?> 

     </div>
    <div class="registration second-row-registration">

       <?php if ($data['Result'][$v]['LocationName']) {?>
              <div class="location row">
                              <div class="col-1 single-activity-icon location-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                              <div class="col-10 location-detail"><?php echo $data['Result'][$v]['LocationName']; ?> </div>
             </div><!--end of single-activity-description row-->  
        <?php } ?> 

        <?php if ($data['Result'][$v]['RegistrationStartDate']) {?>
              <div class="registration-start row">
              <?php $time = strtotime($data['Result'][$v]['RegistrationStartDate']); ?>
              <?php $new_format_time = date('M d Y', $time); ?>
                              <div class="col-1 single-activity-icon start-date-icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                              <div class="col-10 start-date-detail"><?php  echo 'Registration Start Date: ', $new_format_time ?> </div>
             </div><!--end of single-activity-description row-->  
        <?php } ?> 

    </div>
    <button class="register-button" id="button <?php echo $z; ?>">Register</button>

    </div><!--events-content-->
    </div><!--frontpage-card-->
     </div><!--//col-4-->
     <?php  $z++; ?> 
<?php }?>
</div><!--//row-->
</div><!--//container-->
</li>



</ul>
</div><!--flex-slider-->

     <div class="upcoming-activities-buttons">
         <button class="upcoming-activities-button" id="button <?php echo $z; ?>">What's happening tomorrow?</button>
         <button class="upcoming-activities-button" id="button <?php echo $z; ?>">What's happening next week?</button>
     </div>

<div class="clearbreak fifty"></div>
</div><!--activities-section-wrapper-->

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
               <i class="fa fa-angle-right" aria-hidden="true"></i>
               <a class="button-link"><div class="news-button"> See All Of Our Latest News </div></a>
                    </div>
             </div> <!--//news-->
         </div><!--row-->
         </div><!--container-->

</div><!--news-section-wrapper-->
<div class="clearbreak fifty"></div>

<div class="section-wrapper calendar-section-wrapper">
  <h2 class="frontpage-section-headline calendar-section">Upcoming Events</h2>
   <div class="flexslider">
    <ul class="slides">
        <li>
         <div class="container">
           <div class="row">
              <?php  $z = 1; ?> 
                <?php
                      $events = tribe_get_events( [ 'posts_per_page' => -1, 'start_date' => 'now',]  );
                      $firstEvents = array_slice($events, 0, 3);
                                  // Loop through the events: set up each one as
                                  // the current post then use template tags to
                                  // display the title and content
                        foreach ( $firstEvents as $post )  {?>    
                              <?php  setup_postdata( $post ); ?>
                                <div class="col-lg-4 col-md-12 col-sm-12 events-loop">
                                <div class="frontpage-card">
                                <?php if( get_the_post_thumbnail()) {?>
                                    <div class="calendar-image"><?php the_post_thumbnail( 'medium' ); ?></div>
                                <?php } else{ ?>
                               <?php $defaultURL = get_site_url() . "/assets/media/custom_images/una-default-image.png"; ?>
                                  <div class="calendar-image">
                                      <img src="<?php echo $defaultURL; ?>" />
                                  </div>
                                <?php } ?>

                     <div class="events-content">
                        <div class="events-content-top">
                           <div class="events-calendar-subject">
                               <h3 class="frontpage-card-title">
                                    <?php echo  $post->post_title; ?>   
                               </h3>
                    </div>
                    <div class="event-calendar-description description">

                    <?php if(tribe_get_start_date()) { ?> 
                          <div class="tribe-date row">
                                <div class="col-1 tribe-icon"> <i class="fa fa-calendar" aria-hidden="true"></i> </div>
                                <div class="col-10 tribe-detail"> <?php echo tribe_get_start_date( $post, true, 'l, F d-Y | g:i a' ); ?> </div> 
                          </div><!--end of tribe date row -->  
                    <?php } ?>   
                     <?php if(tribe_get_venue()) { ?> 
                          <div class="tribe-venue row">
                              <div class="col-1 tribe-icon"><i class="fa fa-map-marker" aria-hidden="true"></i> </div>
                              <div class="col-10 tribe-detail"><?php echo tribe_get_venue( $post ); ?> </div>
                         </div><!--end of tribe venue row-->  
                    <?php } ?>   
                    <?php if(tribe_get_text_categories()) { ?> 
                          <div class="tribe-category row">
                              <div class="col-1 tribe-icon"><i class="fa fa-tag" aria-hidden="true"></i></div>
                              <div class="col-10 tribe-detail"><?php echo tribe_get_text_categories (); ?> </div>
                         </div><!--end of tribe category row-->  
                    <?php } ?>   

                    </div><!--event-calendar-desciprion-->
                    </div><!--end of event-content-top-->
                         <button class="register-button calendar-register-button">Learn More </button>
                    </div><!--events-content-->
                 </div><!--frontpage-card-->
               </div><!--//col-4-->
           <?php  $z++; ?> 
         <?php }?>
         </div><!--//row-->
        </div><!--//container-->
        </li>
      
        <li>
        <div class="container">
           <div class="row">
                <?php
                      $events = tribe_get_events( [ 'posts_per_page' => -1, 'start_date' => 'now',] );
                      $secondEvents = array_slice($events, 3, 6);
                                  // Loop through the events: set up each one as
                                  // the current post then use template tags to
                                  // display the title and content
                        foreach ( $secondEvents as $post )  {?>    
                                
                              <?php  setup_postdata( $post ); ?>
                                <div class="col-lg-4 col-md-12 col-sm-12 events-loop">
                                <div class="frontpage-card">
                                <?php if( get_the_post_thumbnail()) {?>
                                    <div class="calendar-image"><?php the_post_thumbnail( 'medium' ); ?></div>
                                <?php } else{ ?>
                               <?php $defaultURL = get_site_url() . "/assets/media/custom_images/una-default-image.png"; ?>
                                  <div class="calendar-image">
                                      <img src="<?php echo $defaultURL; ?>" />
                                  </div>
                                <?php } ?>
                                   
                                    <div class="events-content">
                                      <div class="events-content-top">
                                       <div class="events-calendar-subject">
                                                  <h3 class="frontpage-card-title">
                                                       <?php echo  $post->post_title; ?>   
                                                  </h3>
                                       </div>
                                        <div class="event-calendar-description description">

                                        <?php if(tribe_get_start_date()) { ?> 
                                            <div class="tribe-date row">
                                               <div class="col-1 tribe-icon"> <i class="fa fa-calendar" aria-hidden="true"></i> </div>
                                               <div class="col-10 tribe-detail"> <?php echo tribe_get_start_date( $post, true, 'l, F d-Y | g:i a' ); ?> </div> 
                                           </div><!--end of tribe date row -->  
                                        <?php } ?>   
                                       <?php if(tribe_get_venue()) { ?> 
                                            <div class="tribe-venue row">
                                               <div class="col-1 tribe-icon"><i class="fa fa-map-marker" aria-hidden="true"></i> </div>
                                               <div class="col-10 tribe-detail"><?php echo tribe_get_venue( $post ); ?> </div>
                                            </div><!--end of tribe venue row-->  
                                      <?php } ?>   
                                      <?php if(tribe_get_text_categories()) { ?> 
                                            <div class="tribe-category row">
                                                <div class="col-1 tribe-icon"><i class="fa fa-tag" aria-hidden="true"></i></div>
                                                <div class="col-10 tribe-detail"><?php echo tribe_get_text_categories (); ?> </div>
                                            </div><!--end of tribe category row-->  
                                      <?php } ?>   
                                          
                                       </div>
                                      </div><!--end of events content top-->  

                                      <button class="register-button calendar-register-button">Learn More </button>
 
                            </div><!--events-content-->
                              </div><!--frontpage-card-->
                               </div><!--//col-4-->                        
         <?php }?>
         </div><!--//row-->
        </div><!--//container-->
        </li>
      </ul>
      </div>
      <div class="top_label view-news-button view-events-calendar">               
              <i class="fa fa-angle-right" aria-hidden="true"></i>
              <a class="button-link"> <div class="news-button"> See Our Complete Events Calendar</div></a>
                    </div>
      <div class="clearbreak fifty"></div>
   </div><!--end of section-wrapper-->
 
<?php get_footer(); ?>