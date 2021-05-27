<?php if( have_rows('standard_template_content') ): ?>
    <?php while( have_rows('standard_template_content') ): the_row(); ?>
    
        <?php if( get_row_layout() == 'text_section' ): ?>
        
        <div class="container">
            <div class="row">
             <div class="col-lg-10 offset-lg-1 top-section-content">
                 <div class="main_text"><?php the_sub_field('text_area'); ?></div>
                 

                 
                 
        <?php if( get_sub_field('text_section_link_external') == TRUE && get_sub_field('text_section_button_alignment') == 'left' ) { ?>


        <?php if( get_sub_field('text_section_link') && get_sub_field('text_section_link_label') ) { ?>
            <div class="centre-button-container" style="justify-content: left; padding-left: 0;">
              <a class="button" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('text_section_link'); ?>"><?php the_sub_field('text_section_link_label'); ?></a>
            </div>
        <?php } ?>

        <?php } elseif ( get_sub_field('text_section_link_external') == TRUE && get_sub_field('text_section_button_alignment') == 'center' ){ ?>
        
        <?php if( get_sub_field('text_section_link') && get_sub_field('text_section_link_label') ) { ?>
            <div class="centre-button-container">
              <a class="button" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('text_section_link'); ?>"><?php the_sub_field('text_section_link_label'); ?></a>
            </div>
         <?php } ?>

        <?php } elseif ( get_sub_field('text_section_link_external') == FALSE && get_sub_field('text_section_button_alignment') == 'center' ) { ?>

            <?php if( get_sub_field('text_section_link') && get_sub_field('text_section_link_label') ) { ?>
            <div class="centre-button-container">

              <a class="button" href="<?php the_sub_field('text_section_link'); ?>"><?php the_sub_field('text_section_link_label'); ?></a>
                 </div>
             <?php } ?>

        <?php } elseif( get_sub_field('text_section_link_external') == FALSE && get_sub_field('text_section_button_alignment') == 'left') { ?>
          <?php if( get_sub_field('text_section_link') && get_sub_field('text_section_link_label') ) { ?>
            <div class="centre-button-container" style="justify-content: left; padding-left: 0;">

              <a class="button" href="<?php the_sub_field('text_section_link'); ?>"><?php the_sub_field('text_section_link_label'); ?></a>

                 </div>
            <?php } ?>
         <?php } ?>

            
            
            </div>            
            </div>
        </div>
        
        
    <?php elseif( get_row_layout() == 'gravity_form_section' ): ?>

        <div class="volunteers-form">
        <div class="container centre-box-content">
        <div class="row">
    
        <div class="col-lg-10 offset-lg-1">

            <div class="main_text">
                
                <?php the_sub_field('gravity_form'); ?>
             </div>

            </div>   

         
        </div>
   </div><!--container-->
   </div><!--volunteer form-->
   
   
 
       <?php elseif( get_row_layout() == 'staff_directory' ): ?>
       
       

<div class="container board-members-area" id="staff-directory">

<?php if(get_sub_field('staff_directory_section_title')){?>
   <div class="center paddingbox single-page-section-title">
    <h2><?php the_sub_field('staff_directory_section_title'); ?></h2>
  </div><!--end of title-->
<?php }?>

    <div class="row">
        
        <?php

// check if the repeater field has rows of data
if( have_rows('staff_member') ): ?>

 	<?php // loop through the rows of data
    while ( have_rows('staff_member') ) : the_row(); ?>

        <div class="col-lg-4 col-md-4 col-sm-12 d-flex staff-member">   

        <div class="board-member staff-directory">
      
    <div class="board-member-text-content">
        <?php if( get_sub_field('staff_member_name') ) { ?>
            <div class="member-name">
                  <?php the_sub_field('staff_member_name'); ?>
           </div>  
        <?php } ?>

        <?php if( get_sub_field('staff_member_title') ) { ?>
            <div class="member-title">
                  <?php the_sub_field('staff_member_title'); ?>
           </div>  
        <?php } ?>

        <?php if( get_sub_field('staff_member_phone') ) { ?>
            <div class="member-phone">
                  <?php the_sub_field('staff_member_phone'); ?>
           </div>  
        <?php } ?>

        <?php if( get_sub_field('staff_member_email') ) { ?>
            <div class="member-email">
                 <a href="mailto:<?php the_sub_field('staff_member_email'); ?>">Email: <?php the_sub_field('staff_member_email'); ?></a> 
           </div><!--member email-->  
        <?php } ?>
    </div><!--end of board member text content-->

        </div><!--end of board member-->

        </div><!--end of col-->

<?php endwhile; ?>

      </div><!--end of row-->
      </div><!--end of container-->

<?php endif; ?>




   
   
   
   
   <?php elseif( get_row_layout() == 'three_pillars' ): ?>
   
   
   


    <div class="top_pillars_area">

    <div class="container">

    <?php if(get_sub_field('three_pillars_title')){?>

     <div class="center paddingbox single-page-section-title">

        <h2><?php the_sub_field('three_pillars_title'); ?></h2>

      </div>



<?php }?>



         <div class="row top_pillars animated_arrow_buttons">



   <?php if( have_rows('pillar_field') ):

        while ( have_rows('pillar_field') ) : the_row();

        ?>

            <div class="col-lg-4 col-md-12 col-sm-12 d-flex">

                <div class="single-pillar">

                    <div class="blurb">

						<?php if( get_sub_field('pillar_icon') ) { ?>

                            <div class="pillar_icon" aria-hidden="true"><img src="<?php the_sub_field('pillar_icon'); ?>" alt="pillar-icon" /></div>

                        <?php } ?>





                        <?php if( get_sub_field('pillar_title') ) { ?>

                            <div class="pillar-title">

                                  <?php the_sub_field('pillar_title'); ?>

                           </div>

                        <?php } ?>



                        <?php if( get_sub_field('pillar_blurb') ) { ?>

                            <div class="pillar-blurb">

                              <p>  <?php the_sub_field('pillar_blurb'); ?> </p>

                           </div>

                        <?php } ?>



                    </div>



                    <?php if( get_sub_field('button_link_to_external') == TRUE ) { ?>


					<?php if( get_sub_field('button_link_to') && get_sub_field('pillar_button_label') ) { ?>

                    <a class="button" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('button_link_to'); ?>"><?php the_sub_field('pillar_button_label'); ?></a>

                    <?php } ?>

                    <?php } else{ ?>

                        <?php if( get_sub_field('button_link_to') && get_sub_field('pillar_button_label') ) { ?>
                        <a class="button" href="<?php the_sub_field('button_link_to'); ?>"><?php the_sub_field('pillar_button_label'); ?></a>
                    <?php } ?>

                        <?php } ?>

                    </div>

            </div>

                    <?php endwhile;

                    endif; ?>



         </div><!--//row-->





    <?php if(get_sub_field('three_pillars_label') && get_sub_field('three_pillars_link')){?>

          <div class="center-link paddingbox">

              <i class="fa fa-angle-right" aria-hidden="true"></i>

              <a class="button-link" href="<?php the_sub_field('three_pillars_link'); ?>"> <div class="news-button"> <?php the_sub_field('three_pillars_label'); ?></div></a>

          </div>

          <?php } ?>





    </div><!--//container-->

</div><!--//top_pillars_area-->

<?php elseif( get_row_layout() == 'three_pillars_with_full_icon' ): ?>
   
   
   


    <div class="top_pillars_area">

    <div class="container">

    <?php if(get_sub_field('three_pillars_title')){?>

     <div class="center paddingbox single-page-section-title">

        <h2><?php the_sub_field('three_pillars_title'); ?></h2>

      </div>



<?php }?>



         <div class="row top_pillars animated_arrow_buttons">



   <?php if( have_rows('pillar_field') ):

        while ( have_rows('pillar_field') ) : the_row();

        ?>

            <div class="col-lg-4 col-md-12 col-sm-12 d-flex">

                <div class="single-pillar">

                    <div class="blurb">

						<?php if( get_sub_field('pillar_icon') ) { ?>

                            <div class="pillar_icon" aria-hidden="true"><img src="<?php the_sub_field('pillar_icon'); ?>" alt="pillar-icon" style="width: 100%; height: 100%; margin: 0 0 40px;"/></div>

                        <?php } ?>





                        <?php if( get_sub_field('pillar_title') ) { ?>

                            <div class="pillar-title">

                                  <?php the_sub_field('pillar_title'); ?>

                           </div>

                        <?php } ?>



                        <?php if( get_sub_field('pillar_blurb') ) { ?>

                            <div class="pillar-blurb">

                              <p>  <?php the_sub_field('pillar_blurb'); ?> </p>

                           </div>

                        <?php } ?>



                    </div>



                    <?php if( get_sub_field('button_link_to_external') == TRUE ) { ?>


					<?php if( get_sub_field('button_link_to') && get_sub_field('pillar_button_label') ) { ?>

                    <a class="button" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('button_link_to'); ?>"><?php the_sub_field('pillar_button_label'); ?></a>

                    <?php } ?>

                    <?php } else{ ?>

                        <?php if( get_sub_field('button_link_to') && get_sub_field('pillar_button_label') ) { ?>
                        <a class="button" href="<?php the_sub_field('button_link_to'); ?>"><?php the_sub_field('pillar_button_label'); ?></a>
                    <?php } ?>

                        <?php } ?>

                    </div>

            </div>

                    <?php endwhile;

                    endif; ?>



         </div><!--//row-->





    <?php if(get_sub_field('three_pillars_label') && get_sub_field('three_pillars_link')){?>

          <div class="center-link paddingbox">

              <i class="fa fa-angle-right" aria-hidden="true"></i>

              <a class="button-link" href="<?php the_sub_field('three_pillars_link'); ?>"> <div class="news-button"> <?php the_sub_field('three_pillars_label'); ?></div></a>

          </div>

          <?php } ?>





    </div><!--//container-->

</div><!--//top_pillars_area-->


   <?php elseif( get_row_layout() == 'text_two_columns' ): ?>


<!--list of titles-->
<div class="collaboration-container">
<?php if(get_sub_field('two_columns_section_title')){?>

     <div class="center tab paddingbox single-page-section-title">
        <h2><?php the_sub_field('two_columns_section_title'); ?></h2>
      </div>

<?php }?>


<?php if( have_rows('two_columns') ): ?>
<div class="container water-reduction-articles">
<div class="row">
<?php while ( have_rows('two_columns') ) : the_row(); ?>
<div class="col-lg-5 offset-lg-1">
    <div class="collaboration-section">



    <?php if(get_sub_field('two_columns_sub_section_title')){ ?>
        <h3 class="single-article-title"><?php the_sub_field('two_columns_sub_section_title'); ?></h3>
    <?php } ?>

    <?php if(get_sub_field('two_columns_section_content')) { ?>
                   <?php the_sub_field('two_columns_section_content'); ?>
           <?php } ?>


           <?php if( get_sub_field('two_columns_section_link_external') == TRUE ) { ?>

           <?php if( get_sub_field('two_columns_section_link') ) { ?>
              <a class="button" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('two_columns_section_link'); ?>"><?php the_sub_field('two_columns_section_link_label'); ?></a>
            <?php } ?>

           <?php } else{ ?>

            <?php if( get_sub_field('two_columns_section_link') ) { ?>
                <a class="button" href="<?php the_sub_field('two_columns_section_link'); ?>"><?php the_sub_field('two_columns_section_link_label'); ?></a>
            <?php } ?>

            <?php } ?>

</div>
</div>
<?php endwhile; ?>
</div><!--end of row-->
</div><!--end of container-->
<?php endif; ?>
</div><!--collabortation-container-->


   <?php elseif( get_row_layout() == 'text_two_columns_no_header' ): ?>


<!--list of titles-->
<div class="collaboration-container">
<


<?php if( have_rows('two_columns') ): ?>
<div class="container water-reduction-articles">
<div class="row">
<?php while ( have_rows('two_columns') ) : the_row(); ?>
<div class="col-lg-5 offset-lg-1">
    <div class="collaboration-section" style="padding-top: 2rem;">



    

    <?php if(get_sub_field('two_columns_section_content')) { ?>
                   <?php the_sub_field('two_columns_section_content'); ?>
           <?php } ?>


          

</div>
</div>
<?php endwhile; ?>
</div><!--end of row-->
</div><!--end of container-->
<?php endif; ?>
</div><!--collabortation-container-->









   <?php elseif( get_row_layout() == 'news_carousel' ): ?>

    <?php if(get_sub_field('show_news')){?>
    
<?php include('latest-news.php'); ?>

<?php } ?>

<?php elseif( get_row_layout() == 'events_carousel' ): ?>

    <?php if(get_sub_field('show_events')){?>
    
<?php include('all-events-calendar.php'); ?>

<?php } ?>

<?php elseif( get_row_layout() == 'sustainability_news_carousel' ): ?>

    <?php if(get_sub_field('show_sustainability_news')){?>
    
<?php include('sustainability-news.php'); ?>

<?php } ?>

<?php elseif( get_row_layout() == 'recreation_news_carousel' ): ?>

    <?php if(get_sub_field('show_recreation_news')){?>
    
<?php include('recreation-news.php'); ?>

<?php } ?>

<?php elseif( get_row_layout() == 'second_tabs_with_images_section' ): ?>



<?php if( have_rows('tabs_with_images') ): ?>
<div class="container">
     <div class="row">
        <ul class="col-12 tab-list">
            <?php  $z = 1; ?> 

       <?php while ( have_rows('tabs_with_images') ) : the_row(); ?>
              <li class="water-reduction-selector selector" rel="second_tabs_image_<?php echo $z; ?>">
               <?php if(get_sub_field('tabs_with_images_title')){ ?>
                    <?php the_sub_field('tabs_with_images_title'); ?>
               <?php } ?>
             </li>
          <?php  $z++; ?> 
       <?php endwhile; ?>
      </ul>
    </div>
    </div><!--end of container-->
<?php endif; ?>
 
 <?php if( have_rows('tabs_with_images') ): ?>

 <div class="water-reduction-articles">
 
 <?php $z = 1;
// loop through the rows of data
while ( have_rows('tabs_with_images') ) : the_row(); ?>

<div class="container paddingbox" id="second_tabs_image_<?php echo $z; ?>">
<div class="row all-centers">

<?php if(get_sub_field('tabs_with_images_title')){ ?>

         <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="first-column-content">
                   <h3 class="single-article-title"><?php the_sub_field('tabs_with_images_title'); ?></h3>

                   <?php if(get_sub_field('tabs_with_images_content')) { ?>
                          <?php the_sub_field('tabs_with_images_content'); ?>
                   <?php } ?>
                   
                     <?php if( get_sub_field('tab_link_external') == TRUE ) { ?>

                   <?php if( get_sub_field('tab_link') ) { ?>
                        <a class="button" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('tab_link'); ?>"><?php the_sub_field('tab_link_label'); ?></a>
                    <?php } ?>

                    <?php } else{ ?>

                      <?php if( get_sub_field('tab_link') ) { ?>
                        <a class="button" href="<?php the_sub_field('tab_link'); ?>"><?php the_sub_field('tab_link_label'); ?></a>
                    <?php } ?>
                    <?php } ?>

                </div>
           </div>
 <?php } ?>

   <?php if(get_sub_field('tab_image')){ ?>
           <div class="col-lg-6 col-md-12 col-sm-12 dashboard-image fitness-centres-image">
                  <?php $newImage = get_sub_field('tab_image'); ?>
                          <div class="post_image" style="background-image: url('<?php echo esc_url($newImage);?>');"></div>
           </div>
   <?php } ?>

</div><!--end of row-->


   <?php if(get_sub_field('fitness_centre_abbreviation')){ ?>

<table class="price-table">
  <tr>
    <th>
      <?php the_sub_field('fitness_centre_abbreviation'); ?>
    </th>
    <th>UNA</th>
    <th>Public</th>
  </tr> 

   <?php if( have_rows('fitness_centre_prices') ): ?>

 <?php while ( have_rows('fitness_centre_prices') ) : the_row(); ?>

  <tr class="data-row">
  <?php if(get_sub_field('fitness_centre_price_label')){ ?>
    <td><?php the_sub_field('fitness_centre_price_label'); ?></td>
 <?php } ?>

   <?php if(get_sub_field('fitness_price_ubc')){ ?>
    <td>$ <?php the_sub_field('fitness_price_ubc'); ?></td>
 <?php } ?>

   <?php if(get_sub_field('fitness_price_public')){ ?>
    <td>$ <?php the_sub_field('fitness_price_public'); ?></td>
 <?php } ?>

</tr>
  
 <?php endwhile; ?>
<?php endif; ?>


</table>

   <?php } ?>




</div><!--end of container-->

<?php  $z++; ?> 
<?php endwhile; ?>
</div>
<?php endif; ?>





 <?php elseif( get_row_layout() == 'tabs_with_images_section' ): ?>



<?php if( have_rows('tabs_with_images') ): ?>
<div class="container">
     <div class="row">
        <ul class="col-12 tab-list">
            <?php  $z = 1; ?> 

       <?php while ( have_rows('tabs_with_images') ) : the_row(); ?>
              <li class="water-reduction-selector selector" rel="tabs_image_<?php echo $z; ?>">
               <?php if(get_sub_field('tabs_with_images_title')){ ?>
                    <?php the_sub_field('tabs_with_images_title'); ?>
               <?php } ?>
             </li>
          <?php  $z++; ?> 
       <?php endwhile; ?>
      </ul>
    </div>
    </div><!--end of container-->
<?php endif; ?>
 
 <?php if( have_rows('tabs_with_images') ): ?>

 <div class="water-reduction-articles">
 
 <?php $z = 1;
// loop through the rows of data
while ( have_rows('tabs_with_images') ) : the_row(); ?>

<div class="container paddingbox" id="tabs_image_<?php echo $z; ?>">
<div class="row all-centers">

<?php if(get_sub_field('tabs_with_images_title')){ ?>

         <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="first-column-content">
                   <h3 class="single-article-title"><?php the_sub_field('tabs_with_images_title'); ?></h3>

                   <?php if(get_sub_field('tabs_with_images_content')) { ?>
                          <?php the_sub_field('tabs_with_images_content'); ?>
                   <?php } ?>
                   
                     <?php if( get_sub_field('tab_link_external') == TRUE ) { ?>

                   <?php if( get_sub_field('tab_link') ) { ?>
                        <a class="button" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('tab_link'); ?>"><?php the_sub_field('tab_link_label'); ?></a>
                    <?php } ?>

                    <?php } else{ ?>

                      <?php if( get_sub_field('tab_link') ) { ?>
                        <a class="button" href="<?php the_sub_field('tab_link'); ?>"><?php the_sub_field('tab_link_label'); ?></a>
                    <?php } ?>
                    <?php } ?>

                </div>
           </div>
 <?php } ?>

   <?php if(get_sub_field('tab_image')){ ?>
           <div class="col-lg-6 col-md-12 col-sm-12 dashboard-image fitness-centres-image">
                  <?php $newImage = get_sub_field('tab_image'); ?>
                          <div class="post_image" style="background-image: url('<?php echo esc_url($newImage);?>');"></div>
           </div>
   <?php } ?>

</div><!--end of row-->


   <?php if(get_sub_field('fitness_centre_abbreviation')){ ?>

<table class="price-table">
  <tr>
    <th>
      <?php the_sub_field('fitness_centre_abbreviation'); ?>
    </th>
    <th>UNA</th>
    <th>Public</th>
  </tr> 

   <?php if( have_rows('fitness_centre_prices') ): ?>

 <?php while ( have_rows('fitness_centre_prices') ) : the_row(); ?>

  <tr class="data-row">
  <?php if(get_sub_field('fitness_centre_price_label')){ ?>
    <td><?php the_sub_field('fitness_centre_price_label'); ?></td>
 <?php } ?>

   <?php if(get_sub_field('fitness_price_ubc')){ ?>
    <td>$ <?php the_sub_field('fitness_price_ubc'); ?></td>
 <?php } ?>

   <?php if(get_sub_field('fitness_price_public')){ ?>
    <td>$ <?php the_sub_field('fitness_price_public'); ?></td>
 <?php } ?>

</tr>
  
 <?php endwhile; ?>
<?php endif; ?>


</table>

   <?php } ?>




</div><!--end of container-->

<?php  $z++; ?> 
<?php endwhile; ?>
</div>
<?php endif; ?>



   <?php elseif( get_row_layout() == 'room_booking_tabs' ): ?>


<!--list of titles-->

<?php if(get_sub_field('booking_spaces_section_title')){?>
     
     <div class="center paddingbox single-page-section-title">
        <h2><?php the_sub_field('booking_spaces_section_title'); ?></h2>
      </div>

<?php }?>



<div class="container">
<div class="row">
<ul class="col-12 tab-list">

      <li class="room-selector small-room-selector selector" rel="small-room-bookings">
         <?php if(get_sub_field('under_500_sqft_section_label')){ ?>
             <?php the_sub_field('under_500_sqft_section_label'); ?>
         <?php } ?>
       </li>

       <li class="room-selector large-room-selector selector" rel="large-room-bookings">
         <?php if(get_sub_field('over_500_sqft_label')){ ?>
             <?php the_sub_field('over_500_sqft_label'); ?>
         <?php } ?>
       </li>

       <li class="room-selector sports-fields-selector selector" rel="sports-fields-bookings">
         <?php if(get_sub_field('sports_fields_label')){ ?>
             <?php the_sub_field('sports_fields_label'); ?>
         <?php } ?>
       </li>

</ul>
</div>
</div><!--end of container-->




<div class="room-wrapper">

<?php if( have_rows('room_for_under_500') ): ?>

<div class="room-articles" id="small-room-bookings">

<ul>

<?php // loop through the rows of data
$z=1; //we need this to determine if odd or even
while ( have_rows('room_for_under_500') ) : the_row(); ?>

<li>

<div class="container paddingbox" id="small_room_<?php echo $z; ?>">
   <div class="row room-booking-row">

<?php if(get_sub_field('room_name')){ ?>

 <div class="col-lg-6 col-md-12 col-sm-12 dashboard-excerpt">
        <div class="first-column-content">
           <h3 class="single-article-title"><?php the_sub_field('room_name'); ?></h3>
           <?php if(get_sub_field('room_location')) { ?>
               <h4 class="single-article-location"><?php the_sub_field('room_location'); ?></h4>
           <?php } ?>

           <?php if(get_sub_field('room_content')) { ?>
                           <p><?php the_sub_field('room_content'); ?></p>
                   <?php } ?>

           <?php if(get_sub_field('room_price')) { ?>
                 <div class="room-information">
                 <?php if(get_sub_field('room_price')) { ?>
                     <h5 class="single-article-price"><?php the_sub_field('room_price'); ?></h5>
                <?php } ?>
                <?php if(get_sub_field('room_size')) { ?>
                     <h5 class="single-article-size"><?php the_sub_field('room_size'); ?></h5>
                <?php } ?>
                <?php if(get_sub_field('room_capacity')) { ?>
                     <h5 class="single-article-capacity"><?php the_sub_field('room_capacity'); ?></h5>
                <?php } ?>    
                 </div>
           <?php } ?>


        </div>
   </div>
<?php } ?>

<?php if(get_sub_field('room_image')){ ?>
   <div class="col-lg-6 col-md-12 col-sm-12 dashboard-image">
          <?php $newImage = get_sub_field('room_image'); ?>
                  <div class="post_image tab-image" style="background-image: url('<?php echo esc_url($newImage);?>');"></div>
   </div>
<?php } ?>

    </div><!--end of row-->
</div><!--end of container-->

</li>

<?php $z++; ?>

<?php endwhile; ?>

</ul>

</div>

<?php endif; ?>

<!--Start of Big Rooms-->

<?php if( have_rows('room_for_over_500') ): ?>

<div class="room-articles large-room-articles" id="large-room-bookings">

<ul>

<?php $z = 1;
// loop through the rows of data
while ( have_rows('room_for_over_500') ) : the_row(); ?>

<li>

<div class="container paddingbox" id="large_room_<?php echo $z; ?>">
<div class="row">

<?php if(get_sub_field('room_over_500_label')){ ?>

 <div class="col-lg-6 col-md-12 col-sm-12 dashboard-excerpt">
        <div class="first-column-content">
           <h3 class="single-article-title"><?php the_sub_field('room_over_500_label'); ?></h3>
           <?php if(get_sub_field('room_over_500_location')) { ?>
               <h4 class="single-article-location"><?php the_sub_field('room_over_500_location'); ?></h4>
           <?php } ?>
           <?php if(get_sub_field('room_over_500_content')) { ?>
                           <p><?php the_sub_field('room_over_500_content'); ?></p>
                   <?php } ?>

        <?php if(get_sub_field('room_over_500_price')) { ?>
                 <div class="room-information">
                 <?php if(get_sub_field('room_over_500_price')) { ?>
                     <h5 class="single-article-price"><?php the_sub_field('room_over_500_price'); ?></h5>
                <?php } ?>
                <?php if(get_sub_field('room_over_500_size')) { ?>
                     <h5 class="single-article-size"><?php the_sub_field('room_over_500_size'); ?></h5>
                <?php } ?>
                <?php if(get_sub_field('room_over_500_capacity')) { ?>
                     <h5 class="single-article-capacity"><?php the_sub_field('room_over_500_capacity'); ?></h5>
                <?php } ?>    
                 </div>
           <?php } ?>

        </div>
   </div>
<?php } ?>

<?php if(get_sub_field('room_over_500_image')){ ?>
   <div class="col-lg-6 col-md-12 col-sm-12 dashboard-image">
          <?php $newImage = get_sub_field('room_over_500_image'); ?>
                  <div class="post_image tab-image" style="background-image: url('<?php echo esc_url($newImage);?>');"></div>
   </div>
<?php } ?>



</div><!--end of row-->
</div><!--end of container-->

<?php  $z++; ?> 

</li>

<?php endwhile; ?>

</ul>

</div>

<?php endif; ?>

<!--Start of Sports Fields-->

<?php if( have_rows('sports_fields_content_repeater') ): ?>

<div class="room-articles sports-fields-articles" id="sports-fields-bookings">

<ul>

<?php $z = 1;
// loop through the rows of data
while ( have_rows('sports_fields_content_repeater') ) : the_row(); ?>

<li>

<div class="container paddingbox" id="sports_field_<?php echo $z; ?>">
<div class="row">

<?php if(get_sub_field('sports_fields_single_label')){ ?>

 <div class="col-lg-6 col-md-12 col-sm-12 dashboard-excerpt">
        <div class="first-column-content">
           <h3 class="single-article-title"><?php the_sub_field('sports_fields_single_label'); ?></h3>
           <?php if(get_sub_field('sports_fields_location')) { ?>
               <h4 class="single-article-location"><?php the_sub_field('sports_fields_location'); ?></h4>
           <?php } ?>
           <?php if(get_sub_field('sports_fields_content')) { ?>
                           <p><?php the_sub_field('sports_fields_content'); ?></p>
           <?php } ?>

            <?php if(get_sub_field('sports_fields_price')) { ?>
                 <div class="room-information">
                 <?php if(get_sub_field('sports_fields_price')) { ?>
                     <h5 class="single-article-price"><?php the_sub_field('sports_fields_price'); ?></h5>
                <?php } ?>
                <?php if(get_sub_field('sports_fields_size')) { ?>
                     <h5 class="single-article-size"><?php the_sub_field('sports_fields_size'); ?></h5>
                <?php } ?>
                <?php if(get_sub_field('sports_fields_capacity')) { ?>
                     <h5 class="single-article-capacity"><?php the_sub_field('sports_fields_capacity'); ?></h5>
                <?php } ?>    
                 </div>
           <?php } ?>


        </div>
   </div>
<?php } ?>

<?php if(get_sub_field('sports_fields_image')){ ?>
   <div class="col-lg-6 col-md-12 col-sm-12 dashboard-image">
          <?php $newImage = get_sub_field('sports_fields_image'); ?>
                  <div class="post_image tab-image" style="background-image: url('<?php echo esc_url($newImage);?>');"></div>
   </div>
<?php } ?>

</div><!--end of row-->
</div><!--end of container-->

<?php  $z++; ?> 

</li>

<?php endwhile; ?>

</ul>

</div>

</div>

<?php endif; ?>



   <?php elseif( get_row_layout() == 'tabs_section' ): ?>
   
       <?php
      $covideUpdatesTitle = get_sub_field("tabs_title");
      $covideUpdatesSubtitle = get_sub_field("tabs_subtitle");
    ?>

<?php if(get_sub_field("tabs_title")) {  ?>
    <div class="container covid-updates">
      <div class="row">
        <div class="col-12 center">
          <?php if($covideUpdatesTitle) : ?><h2><?php echo $covideUpdatesTitle; ?></h2><?php endif; ?>
          <?php if($covideUpdatesSubtitle) : ?><h3><?php echo $covideUpdatesSubtitle; ?></h3><?php endif; ?>
        </div>
      </div>
    </div>
<?php }; ?>    


<?php if( have_rows('single_tab') ): ?>
<div class="container">
     <div class="row">
        <ul class="col-12 tab-list">
            <?php  $z = 1; ?> 

       <?php while ( have_rows('single_tab') ) : the_row(); ?>
              <li class="water-reduction-selector selector" rel="strategic_plan_<?php echo $z; ?>">
               <?php if(get_sub_field('single_tab_title')){ ?>
                    <?php the_sub_field('single_tab_title'); ?>
               <?php } ?>
             </li>
          <?php  $z++; ?> 
       <?php endwhile; ?>
      </ul>
    </div>
    </div><!--end of container-->
<?php endif; ?>
 
 <?php if( have_rows('single_tab') ): ?>

 <div class="water-reduction-articles strategic-plan-section">
 
 <?php $z = 1;
// loop through the rows of data
while ( have_rows('single_tab') ) : the_row(); ?>

<div class="container paddingbox" id="strategic_plan_<?php echo $z; ?>">
<div class="row all-policies">

<?php if(get_sub_field('single_tab_content')){ ?>

         <div class="col-lg-10 offset-lg-1">
                <div class="first-column-content">
                   <?php if(get_sub_field('single_tab_content')) { ?>
                           <p><?php the_sub_field('single_tab_content'); ?></p>
                   <?php } ?>

                </div>
           </div>
 <?php } ?>

  
</div><!--end of row-->



</div><!--end of container-->

<?php  $z++; ?> 
<?php endwhile; ?>
</div>
<?php endif; ?>

 <?php elseif( get_row_layout() == 'tabs_section_with_pdfs' ): ?>
   
       <?php
      $covideUpdatesTitle = get_sub_field("tabs_title");
      $covideUpdatesSubtitle = get_sub_field("tabs_subtitle");
    ?>

<?php if(get_sub_field("tabs_title")) {  ?>
    <div class="container covid-updates">
      <div class="row">
        <div class="col-12 center">
          <?php if($covideUpdatesTitle) : ?><h2><?php echo $covideUpdatesTitle; ?></h2><?php endif; ?>
          <?php if($covideUpdatesSubtitle) : ?><h3><?php echo $covideUpdatesSubtitle; ?></h3><?php endif; ?>
        </div>
      </div>
    </div>
<?php }; ?>    


<?php if( have_rows('single_tab') ): ?>
<div class="container">
     <div class="row">
        <ul class="col-12 tab-list">
            <?php  $z = 1; ?> 

       <?php while ( have_rows('single_tab') ) : the_row(); ?>
              <li class="water-reduction-selector selector" rel="tab_pdf_<?php echo $z; ?>">
               <?php if(get_sub_field('single_tab_title')){ ?>
                    <?php the_sub_field('single_tab_title'); ?>
               <?php } ?>
             </li>
          <?php  $z++; ?> 
       <?php endwhile; ?>
      </ul>
    </div>
    </div><!--end of container-->
<?php endif; ?>
 
 <?php if( have_rows('single_tab') ): ?>

 <div class="water-reduction-articles strategic-plan-section">
 
 <?php $z = 1;
// loop through the rows of data
while ( have_rows('single_tab') ) : the_row(); ?>

<div class="container paddingbox" id="tab_pdf_<?php echo $z; ?>">
    


 <?php if(get_sub_field('single_tab_title')){?>
   <div class="center paddingbox single-page-section-title">
    <h2><?php the_sub_field('single_tab_title'); ?></h2>
  </div><!--end of title-->
<?php }?>

  <?php if( have_rows('meeting_documents') ): ?>
              <?php while ( have_rows('meeting_documents') ) : the_row(); ?>
 <div class="col-lg-3 col-md-4 col-sm-12 d-flex">  
            <div class="single-meeting-document">
                
                 <?php if( get_sub_field('meeting_document_section_header') ) { ?>
            <div class="meeting-document-section-header">
            <?php if( get_sub_field('meeting_document_section_header') ) { ?>
                  <?php the_sub_field('meeting_document_section_header'); ?>
            <?php }?>
           </div>  
        <?php } ?>


 <?php if( have_rows('meeting_document') ): ?>
              <?php while ( have_rows('meeting_document') ) : the_row(); ?>
             <?php if( get_sub_field('meeting_document_pdf') && get_sub_field('meeting_document_label') ) { ?>
            <div class="meeting-document-with-icon">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                     <a target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('meeting_document_pdf'); ?>"> <?php the_sub_field('meeting_document_label'); ?></a>
             <?php }?>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        
</div>
</div>

             <?php endwhile; ?>
        <?php endif; ?>
    

    
</div><!--end of container-->

<?php  $z++; ?> 
<?php endwhile; ?>
</div>
<?php endif; ?>

 <?php elseif( get_row_layout() == 'tabs_section_with_pdfs_no_sub_header' ): ?>
   
       <?php
      $covideUpdatesTitle = get_sub_field("tabs_title");
      $covideUpdatesSubtitle = get_sub_field("tabs_subtitle");
    ?>

<?php if(get_sub_field("tabs_title")) {  ?>
    <div class="container covid-updates">
      <div class="row">
        <div class="col-12 center">
          <?php if($covideUpdatesTitle) : ?><h2><?php echo $covideUpdatesTitle; ?></h2><?php endif; ?>
          <?php if($covideUpdatesSubtitle) : ?><h3><?php echo $covideUpdatesSubtitle; ?></h3><?php endif; ?>
        </div>
      </div>
    </div>
<?php }; ?>    


<?php if( have_rows('single_tab') ): ?>
<div class="container">
     <div class="row">
        <ul class="col-12 tab-list">
            <?php  $z = 1; ?> 

       <?php while ( have_rows('single_tab') ) : the_row(); ?>
              <li class="water-reduction-selector selector" rel="tab_pdf_<?php echo $z; ?>">
               <?php if(get_sub_field('single_tab_title')){ ?>
                    <?php the_sub_field('single_tab_title'); ?>
               <?php } ?>
             </li>
          <?php  $z++; ?> 
       <?php endwhile; ?>
      </ul>
    </div>
    </div><!--end of container-->
<?php endif; ?>
 
 <?php if( have_rows('single_tab') ): ?>

 <div class="water-reduction-articles strategic-plan-section">
 
 <?php $z = 1;
// loop through the rows of data
while ( have_rows('single_tab') ) : the_row(); ?>

<div class="container paddingbox" id="tab_pdf_<?php echo $z; ?>">
    



 

                
             
<div class="row">
 <?php if( have_rows('meeting_document') ): ?>
              <?php while ( have_rows('meeting_document') ) : the_row(); ?>
             <?php if( get_sub_field('meeting_document_pdf') && get_sub_field('meeting_document_label') ) { ?>
              <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-1 offset-md-1 dashboard-excerpt">  
            <div class="single-meeting-document">
            <div class="meeting-document-with-icon">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                     <a target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('meeting_document_pdf'); ?>"> <?php the_sub_field('meeting_document_label'); ?></a>
             <?php }?>
            </div>
            </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
</div>


          
    

    
</div><!--end of container-->

<?php  $z++; ?> 
<?php endwhile; ?>
</div>
<?php endif; ?>




   <?php elseif( get_row_layout() == 'left_overlay_columns' ): ?>
   
   
<div class="overlay-image left-overlay-image" style="background:#418477<?php if( get_sub_field('left_overlay_image') ) {
       $left_overlay_image = wp_get_attachment_image_src( get_sub_field('left_overlay_image'), 'large' );
       ?> url(<?php echo $left_overlay_image[0]; ?>) no-repeat center center; background-size:cover<?php } ?>">
    <div class="container-fluid">
      <div class="row">

         <?php if( get_sub_field('left_overlay_image_title') ) { ?>
         <div class="text_area">
              <div class="text-container">
                   <?php if( get_sub_field('left_overlay_image_title') ) { ?>
                    <div class="big_title"><?php the_sub_field('left_overlay_image_title'); ?></div>
                  <?php } ?>
                   <?php if( get_sub_field('left_overlay_image_small_title') ) { ?>
                    <div class="small_title"><h2><?php the_sub_field('left_overlay_image_small_title'); ?></h2></div>
                      <?php } ?>
                   <?php if( get_sub_field('left_overlay_image_text_content') ) { ?>
                        <div class="overlay_content"><p><?php the_sub_field('left_overlay_image_text_content'); ?></p></div>
               <?php } ?>
               </div>

               <?php if( get_sub_field('left_overlay_image_button_link_external') == TRUE ) { ?>

               <?php if( get_sub_field('left_overlay_image_button_link') ) { ?>

                    <a class="button" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('left_overlay_image_button_link'); ?>" target="_blank" rel="noopener noreferrer" ><?php the_sub_field('left_overlay_image_button_label'); ?></a>

                <?php } ?>

               <?php } else{ ?>

                <?php if( get_sub_field('left_overlay_image_button_link') ) { ?>
                  <a class="button" href="<?php the_sub_field('left_overlay_image_button_link'); ?>" rel="noopener noreferrer" ><?php the_sub_field('left_overlay_image_button_label'); ?></a>
                <?php } ?>

                <?php } ?>


         </div><!--//text_area-->
         <?php } ?>




      </div><!--//row-->
    </div><!--//container-->
</div><!--//hero_image-->

   <?php elseif( get_row_layout() == 'right_overlay_columns' ): ?>


    <div class="overlay-image" style="background:#418477<?php if( get_sub_field('overlay_image') ) {
           $overlay_image = wp_get_attachment_image_src( get_sub_field('overlay_image'), 'large' );
           ?> url(<?php echo $overlay_image[0]; ?>) no-repeat center center; background-size:cover<?php } ?>">
        <div class="container">
          <div class="row">

             <?php if( get_sub_field('overlay_image_title') ) { ?>
             <div class="text_area">
                  <div class="text-container">
                       <?php if( get_sub_field('overlay_image_title') ) { ?>
                        <div class="big_title"><?php the_sub_field('overlay_image_title'); ?></div>
                      <?php } ?>
                       <?php if( get_sub_field('overlay_image_small_title') ) { ?>
                        <div class="small_title"><h2><?php the_sub_field('overlay_image_small_title'); ?></h2></div>
                          <?php } ?>
                       <?php if( get_sub_field('overlay_image_text_content') ) { ?>
                            <div class="overlay_content"><p><?php the_sub_field('overlay_image_text_content'); ?></p></div>
                   <?php } ?>
                   </div>

                   <?php if( get_sub_field('overlay_image_button_link_external') == TRUE ) { ?>

                   <?php if( get_sub_field('overlay_image_button_link') ) { ?>

                        <a target="_blank" class="button" rel="noopener noreferrer" href="<?php the_sub_field('overlay_image_button_link'); ?>"><?php the_sub_field('overlay_image_button_label'); ?></a>

                    <?php } ?>

                   <?php } else{ ?>

                    <?php if( get_sub_field('overlay_image_button_link') ) { ?>
                        <a class="button" href="<?php the_sub_field('overlay_image_button_link'); ?>"><?php the_sub_field('overlay_image_button_label'); ?></a>
                    <?php } ?>

                   <?php } ?>
             </div><!--//text_area-->
             <?php } ?>




          </div><!--//row-->
        </div><!--//container-->
    </div><!--//hero_image-->
    
    
       <?php elseif( get_row_layout() == 'governance_carousel' ): ?>

    <?php if(get_sub_field('show_governance_events')) { ?>
    
    
    <?php
 $feature_post_type = 'tribe_events';
?>

<?php
		$feature_section = array(
      'post_type'		=> $feature_post_type,
		  'posts_per_page' => -1,
      'orderby'		=> 'date',
            'order' 		=> 'ASC',
            'tax_query'=> array(
                array(
                    'taxonomy' => 'tribe_events_cat',
                    'field' => 'slug',
                        'terms' => 'una-governance'
                    )
            )
		);
    $the_query = new WP_Query( $feature_section );
    $total = $the_query->found_posts;

if( $the_query->have_posts() ): ?>

<div class="section-wrapper calendar-section all-events-calendar-section upcoming-events-section">

   <h2 class="frontpage-section-headline news-section">Upcoming Events</h2>

  <div class="flexslider">
    <ul class="slides">
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li>
          <div class="activities-loop events-loop event-column all-events">
            <div class="frontpage-card">

            <?php $defaultURL = get_site_url() . "/assets/media/custom_images/una-default-image.png"; ?>
           <?php if (has_post_thumbnail( $post->ID ) ): ?>
           	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
               <a href="<?php echo get_permalink();?>"><div class="calendar-image" style="background-image: url('<?php echo $image[0]; ?>')"></div></a>
               <?php else: ?>
                  <a href="<?php echo get_permalink();?>"><div class="calendar-image" style="background-image: url('<?php custom_url(); ?>/images/UNA-default-img.png');"></div></a>
            <?php endif; ?>

       <div class="events-content">
         <a href="<?php echo get_permalink();?>" class="events-title-link">
            <h3 class="frontpage-card-title">
              <?php echo wp_trim_words( get_the_title(), 8 ); ?>
            </h3>
         </a>


           <div class="all-event-calendar-description">
            <?php if(tribe_get_start_date()) { ?>
                     <div class="tribe-date row">
                                    <div class="col-1 tribe-icon"> <i class="fa fa-calendar" aria-hidden="true"></i> </div>
                                    <div class="col-10 tribe-detail"> <?php echo tribe_get_start_date( $post, true, 'l, F d-Y' ); ?> </div>
                     </div>
            <?php } ?>

            <?php if(tribe_get_venue()) { ?>
                                 <div class="tribe-venue row">
                                    <div class="col-1 tribe-icon"><i class="fa fa-map-marker" aria-hidden="true"></i> </div>
                                    <div class="col-10 tribe-detail"><?php echo tribe_get_venue( $post ); ?> </div>
                                 </div>
            <?php } ?>


            <?php if(tribe_get_text_categories()) { ?>
                                 <div class="tribe-category row">
                                    <div class="col-1 tribe-icon"><i class="fa fa-tag" aria-hidden="true"></i></div>
                                    <div class="col-10 tribe-detail"><?php echo tribe_get_text_categories (); ?> </div>
                                 </div>
             <?php } ?>
             </div><!--all-events-calendar-description -->

            <div class="button-wrapper-for-program-loop">
              <a href="<?php echo get_permalink();?>" class="register-button">Learn More</a>
            </div>


         </div><!-- .events.content -->



            </div><!-- .frontpage-card -->
          </div><!-- .activities-loop -->
        </li>
        <?php endwhile; ?>
    </ul>
    <div class="number-results">
      <p><?php echo $total; ?> Results</p>
    </div>
  </div><!-- .flexslider -->

  <div class="top_label view-news-button view-events-calendar">
    <div class="center-link paddingbox">
      <a class="button-link" href="<?php echo site_url(); ?>/events/"><i class="fa fa-angle-right" aria-hidden="true"></i>See All Upcoming Events</a>
    </div>
  </div>
</div><!-- .section-wrapper -->

<?php endif; wp_reset_query(); ?>

<?php } ?>

   <?php elseif( get_row_layout() == 'two_columns_left_image' ): ?>
   

<!--list of titles-->
<div class="transportation-container">

<?php if( have_rows('two_columns_single_content') ): ?>

<div class="transportation-mode-articles water-reduction-articles">

<?php $z = 1;
// loop through the rows of data
while ( have_rows('two_columns_single_content') ) : the_row(); ?>

<div class="container paddingbox sustainability-box" id="sustainability_sub_<?php echo $z; ?>">
<div class="row">

<?php if(get_sub_field('two_columns_single_content_image')){ ?>
   <div class="col-lg-6 col-md-12 col-sm-12 dashboard-image">
          <?php $newImage = get_sub_field('two_columns_single_content_image'); ?>
                  <div class="post_image featured-image " style="background-image: url('<?php echo esc_url($newImage);?>');"></div>
   </div>
<?php } ?>

<?php if(get_sub_field('two_columns_sub_title')){ ?>

 <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="first-column-content">
           <h3 class="single-article-title"><?php the_sub_field('two_columns_sub_title'); ?></h3>

           <?php if(get_sub_field('two_columns_sub_content')) { ?>
                   <p><?php the_sub_field('two_columns_sub_content'); ?></p>
           <?php } ?>

           <div class="transportation-buttons">

           <?php if( get_sub_field('two_columns_link_external') == TRUE ) { ?>

           <?php if( get_sub_field('two_columns_link') ) { ?>

                <a  class="button first-button" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('two_columns_link'); ?>"><?php the_sub_field('two_columns_link_label'); ?></a>

            <?php } ?>

            <?php } else{ ?>

               <?php if( get_sub_field('two_columns_link') ) { ?>

                <a class="button first-button" href="<?php the_sub_field('two_columns_link'); ?>"><?php the_sub_field('two_columns_link_label'); ?></a>

            <?php } ?>

            <?php } ?>
      </div>

        </div>
   </div>
<?php } ?>



</div><!--end of row-->
</div><!--end of container-->

<?php  $z++; ?>

<?php endwhile; ?>

</div>

<?php endif; ?>
</div>





    
    
   <?php elseif( get_row_layout() == 'pdf_archive' ): ?>

    <?php if( get_sub_field('archive_title') ){ ?>

<div class="archives-articles articles-section-wrapper">

<div class="container">

<div class="all-articles-wrapper">

<h2 class="center"><?php the_sub_field('archive_title'); ?></h2>

 <?php if(get_sub_field('archive_blurb')){?>
      <div class="paddingbox center">
        <?php the_sub_field('archive_blurb'); ?>
      </div><!--end of title-->
    <?php }?>

<?php } ?>
    <?php if( have_rows('report_archive') ): ?>


<ul style="padding-top: 3rem">
<div class="row">
<?php // loop through the rows of data
while ( have_rows('report_archive') ) : the_row(); ?>
 <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-1 offset-md-1 dashboard-excerpt">
<li>

<?php if(get_sub_field('report_single_file') && get_sub_field('report_single_label')){ ?>
        <div class="first-column-content">

        <?php if( get_sub_field('report_single_file') && get_sub_field('report_single_label') ) { ?>
            <div class="meeting-document-with-icon">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                     <a target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('report_single_file'); ?>" target="_blank" rel="noopener noreferrer"> <?php the_sub_field('report_single_label'); ?></a>
             <?php }?>
            </div>
           
        </div>
<?php } ?>
</li>
</div>

<?php endwhile; ?>
</div><!--row-->
</ul>
<?php endif; ?>

</div><!--all articles wrapper-->
</div>
</div>

<?php elseif( get_row_layout() == 'information_boxes' ): ?>


    <div class="top_pillars_area parking-tows">
    <div class="container">
   
         <div class="row top_pillars animated_arrow_buttons">
   <?php if( have_rows('information_section') ):
        while ( have_rows('information_section') ) : the_row();
        ?>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex">   
                <div class="single-pillar">
                    <div class="blurb">
						


                        <?php if( get_sub_field('info_title') ) { ?>
                            <div class="pillar-title">
                                  <?php the_sub_field('info_title'); ?>
                           </div>  
                        <?php } ?>

                        <?php if( get_sub_field('info_content') ) { ?>
                            <div class="pillar-blurb">
                              <p>  <?php the_sub_field('info_content'); ?> </p>  
                           </div>  
                        <?php } ?>

                    </div>  
					  
                    </div>       
            </div>
                    <?php endwhile; 
                    endif; ?>    
         </div><!--//row--> 


    </div><!--//container-->
</div><!--//top_pillars_area-->


<?php elseif( get_row_layout() == 'tabs_same_content_different_images' ): ?>


<div class="parking-container">

<div class="container paddingbox">
<div class="row all-centers">
<div class="col-lg-6 col-md-12 col-sm-12">
<?php if(get_sub_field('tabs_section_title')){ ?>
                <div class="first-column-content parking-map-section">
                   <h1 class="single-article-title"><?php the_sub_field('tabs_section_title'); ?></h1>
                   <?php if(get_sub_field('tabs_section_content')) { ?>
                           <p><?php the_sub_field('tabs_section_content'); ?></p>
                   <?php } ?>
                </div>
 <?php } ?>
 </div>



        <?php if( have_rows('single_tab') ): ?>
        <div class="col-lg-6 col-md-12 col-sm-12">

        <ul class="tab-list">
            <?php  $z = 1; ?> 
       <?php while ( have_rows('single_tab') ) : the_row(); ?>
              <li class="water-reduction-selector selector" rel="parking_<?php echo $z; ?>">
               <?php if(get_sub_field('single_tab_title')){ ?>
                    <?php the_sub_field('single_tab_title'); ?>
               <?php } ?>
             </li>
             <?php  $z++; ?> 
      <?php endwhile; ?>
      </ul>

      <div class="map-wrapper">
      <?php  $z = 1; ?> 
      <?php while ( have_rows('single_tab') ) : the_row(); ?>
          <?php if(get_sub_field('single_tab_image')){ ?>
              <div class="dashboard-image fitness-centres-image" id="parking_<?php echo $z; ?>">
                   <?php the_sub_field('single_tab_image'); ?>
             </div>
          <?php } ?>
          <?php  $z++; ?> 
       <?php endwhile; ?>
        </div>
     </div><!--close column-->
 <?php endif; ?>

          </div>
          </div>
          </div><!--parking container-->



<?php elseif( get_row_layout() == 'board_members_section' ): ?>
           
           
<div class="container board-members-area">

<?php if(get_sub_field('board_members_section_title')){?>
   <div class="center paddingbox single-page-section-title">
    <h2><?php the_sub_field('board_members_section_title'); ?></h2>
  </div><!--end of title-->
<?php }?>

<?php if( have_rows('board_member') ): ?>

    <div class="row">

 	<?php // loop through the rows of data
    while ( have_rows('board_member') ) : the_row(); ?>

        <div class="col-lg-3 col-md-4 col-sm-12 d-flex">   

        <div class="board-member">
        <?php if( get_sub_field('board_member_image') ) { ?>
            <div class="bg_image" style="background:#fff url(<?php the_sub_field('board_member_image'); ?>) no-repeat center center; background-size:cover"></div>
        <?php } ?>

    <div class="board-member-text-content">
        <?php if( get_sub_field('board_member_name') ) { ?>
            <div class="member-name">
                  <?php the_sub_field('board_member_name'); ?>
           </div>  
        <?php } ?>

        <?php if( get_sub_field('board_member_title') ) { ?>
            <div class="member-title">
                  <?php the_sub_field('board_member_title'); ?>
           </div>  
        <?php } ?>

        <?php if( get_sub_field('board_member_email') ) { ?>
            <div class="member-email">
                 <a href="mailto:<?php the_sub_field('board_member_email'); ?>">Email: <?php the_sub_field('board_member_email'); ?></a> 
           </div><!--member email-->  
        <?php } ?>
    </div><!--end of board member text content-->

        </div><!--end of board member-->

        </div><!--end of col-->

<?php endwhile; ?>

      </div><!--end of row-->
      </div><!--end of container-->

<?php endif; ?>
           



   <?php elseif( get_row_layout() == 'accordion_section' ): ?>


<div class="parking-container faq">
  <div class="container">
    <div class="row all-centers">
      <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
        <?php if(get_sub_field('faq_section_label')){ ?>
          <div class="first-column-content parking-map-section">
            <h2 class="single-article-title"><?php the_sub_field('faq_section_label'); ?></h2>
          </div>
        <?php } ?>

        <?php if( have_rows('faq_repeater') ): ?>
          <ul class="green-depot-faq">
            <?php  $z = 1; ?>
              <?php while ( have_rows('faq_repeater') ) : the_row(); ?>
              <li class="water-reduction-selector green-depot-question-<?php echo $z; ?>">
                <div class="question">
                    <div class="question-content">
                  <?php if(get_sub_field('faq_question')){ ?>
                    <?php the_sub_field('faq_question'); ?>
                  <?php } ?>
                  </div>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <div class="answer">
                  <?php if(get_sub_field('faq_answer')){ ?>
                  <?php the_sub_field('faq_answer'); ?>
                  <?php } ?>
                </div>
              </li>
              <?php  $z++; ?>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>





   <?php elseif( get_row_layout() == 'cards_list' ): ?>

<div class="container">
<?php if(get_sub_field('cards_list_title')) {?>
      <div class="center paddingbox single-page-section-title">
        <h3><?php the_sub_field('cards_list_title'); ?></h3>
      </div>
 <?php } ?>


    <?php while ( have_rows('single_card') ) : the_row(); ?>
    <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex">
                <div class="single-job-card">

                        <?php if( get_sub_field('single_card_title') ) { ?>
                            <div class="job-title vertical-paddingbox">
                                 <h5> <?php the_sub_field('single_card_title'); ?> </h5>
                           </div>
                        <?php } ?>

                         <?php if( get_sub_field('single_card_content') ) { ?>
                            <div class="job-content vertical-paddingbox">
                                 <p> <?php the_sub_field('single_card_content'); ?> </p>
                           </div>
                        <?php } ?>

                        <?php if( get_sub_field('single_card_pdf') ) { ?>
                    <div class="centre-button-container">
                            <a class="button blue" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('single_card_pdf'); ?>"><?php the_sub_field('single_card_link_label'); ?></a>
                    </div>
                    <?php } ?>

                </div>
             </div>
        </div>
      <?php endwhile; ?>
 </div>




        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>