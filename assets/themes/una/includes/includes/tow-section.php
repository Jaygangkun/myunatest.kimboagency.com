
    <div class="top_pillars_area parking-tows">
    <div class="container">
   
         <div class="row top_pillars animated_arrow_buttons">
   <?php if( have_rows('tow_information_section') ):
        while ( have_rows('tow_information_section') ) : the_row();
        ?>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex">   
                <div class="single-pillar">
                    <div class="blurb">
						


                        <?php if( get_sub_field('tow_section_title') ) { ?>
                            <div class="pillar-title">
                                  <?php the_sub_field('tow_section_title'); ?>
                           </div>  
                        <?php } ?>

                        <?php if( get_sub_field('tow_section_content') ) { ?>
                            <div class="pillar-blurb">
                              <p>  <?php the_sub_field('tow_section_content'); ?> </p>  
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
