<?php
if ( get_field('show_four_pillars') == "Yes" ) {?>
    <div class="top_pillars_area">
    <div class="container">
         <div class="row top_pillars animated_arrow_buttons">
   <?php if( have_rows('four_pillar_field') ):
        while ( have_rows('four_pillar_field') ) : the_row();
        ?>
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex">
                <div class="single-pillar">
                    <div class="blurb">
						<?php if( get_sub_field('four_pillar_icon') ) { ?>
                            <div class="pillar_icon" aria-hidden="true"><img src="<?php the_sub_field('four_pillar_icon'); ?>" alt="pillar-icon" /></div>
                        <?php } ?>


                        <?php if( get_sub_field('four_pillar_title') ) { ?>
                            <div class="pillar-title">
                                  <?php the_sub_field('four_pillar_title'); ?>
                           </div>
                        <?php } ?>

                        <?php if( get_sub_field('four_pillar_blurb') ) { ?>
                            <div class="pillar-blurb">
                                  <?php the_sub_field('four_pillar_blurb'); ?>
                           </div>
                        <?php } ?>

                    </div>

                    <?php if( get_sub_field('four_button_link_to_external') == TRUE ) { ?>

					<?php if( get_sub_field('four_button_link_to') ) { ?>

                      <a class="button" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('four_button_link_to'); ?>"><?php the_sub_field('four_button_label'); ?></a>

                    <?php } ?>

                    <?php } else{ ?>

                        <?php if( get_sub_field('four_button_link_to') ) { ?>

                     <a class="button" href="<?php the_sub_field('four_button_link_to'); ?>"><?php the_sub_field('four_button_label'); ?></a>

                    <?php } ?>

                        <?php } ?>

                    </div>
            </div>
                    <?php endwhile;
                    endif; ?>
         </div><!--//row-->
    </div><!--//container-->
</div><!--//top_pillars_area-->
<?php } ?>
