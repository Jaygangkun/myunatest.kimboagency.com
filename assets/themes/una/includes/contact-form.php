<div class="bottom-section-wrapper">

<div class="container bottom-section centre-box-content contact-form-container">
        <div class="row">
        <div class="col-lg-6 contact-info-page">

        <?php if( get_field('office_hours', 'option') ) { ?>
                    <?php if( have_rows('office_hours', 'option') ) : ?>                                           
                           <?php while ( have_rows('office_hours', 'option') ) : the_row(); ?>
                                <span class="office_hours footer_info">
                                <div class="row">
                                <div class="col-1">
                                     <i class="fa fa-clock-o" aria-hidden="true"></i>
                                </div>
                                <div class="col-10">
                                  <span class="hours-info">Office Hours</span> <br/> <?php the_sub_field('office_hours_and_days'); ?>    
                                </div>  
                                </div>  
                            </span>                                                              
                    <?php endwhile; else :
                                         // no rows found
                                         endif;?>            
            <?php } //END get_field office_hours ?>


        <?php if( get_field('association_address', 'option') ) { ?>
                 <span class="association_address footer_info">
                 <div class="row">
                 <div class="col-1">
                    <i class="far fa-map"></i>
                 </div>
                 <div class="col-10">
                    <?php the_field('association_address', 'option'); ?>
                 </div>
                 </div>
                 </span>
            <?php } //End of Address ?>

        <?php if( get_field('association_phone_number', 'option') ) { ?>
                <a href="tel:<?php the_field('association_phone_number', 'option'); ?>">
                <span class="association_phone_number footer_info">
                <div class="row">
                <div class="col-1">
                   <i class="fa fa-phone fa-flip-horizontal"></i>
                </div>
                <div class="col-10">
                 <?php the_field('association_phone_number', 'option'); ?>
                 </div>
                 </div>
               </span>
               </a>
            <?php } //End of Phone ?> 

            <?php if( get_field('association_email', 'option') ) { ?>
                <a href="mailto:<?php echo antispambot(get_field('association_email', 'option')); ?>">
                        <span class="association_email footer_info">
                        <div class="row">
                        <div class="col-1">
                              <i class="far fa-envelope"></i>
                        </div>
                        <div class="col-10">
                            <?php echo antispambot(get_field('association_email', 'option')); ?>
                        </div>
                        </div>
                        </span>
                </a>
            <?php } //End of Email ?>  



        </div><!--end of contact info-->   


        <div class="col-lg-6">

            <div class="main_text">
              <h2>Send us a message</h2>
             <?php echo do_shortcode( '[gravityform id=1 title=false description=false ajax=true]' ); ?>        
        </div>

            </div>   

         
        </div>
   </div><!--container-->
 </div><!--bottom-section-wrapper-->