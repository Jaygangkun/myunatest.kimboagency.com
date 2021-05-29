<?php

if ( get_field('show_three_pillars') == "Yes" ) {?>

    <div class="top_pillars_area">

    <div class="container">

    <?php if(get_field('three_pillars_title')){?>

     <div class="center paddingbox single-page-section-title">

        <h2><?php the_field('three_pillars_title'); ?></h2>

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





    <?php if(get_field('three_pillars_label') && get_field('three_pillars_link')){?>

          <div class="center-link paddingbox">

              <i class="fa fa-angle-right" aria-hidden="true"></i>

              <a class="button-link" href="<?php the_field('three_pillars_link'); ?>"> <div class="news-button"> <?php the_field('three_pillars_label'); ?></div></a>

          </div>

          <?php } ?>





    </div><!--//container-->

</div><!--//top_pillars_area-->

<?php } ?>

