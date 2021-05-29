<?php if( get_field('bottom_section_pages')){ ?>


    <div class="container bottom-section centre-box-content">
        <div class="row">
        <div class="col-lg-10 offset-lg-1">

            <div class="main_text"><?php the_field('bottom_section_pages'); ?></div>

            </div>

        <?php if( get_field('bottom_section_link_external') == TRUE ) { ?>

            <?php if( get_field('bottom_section_link') && get_field('bottom_section_link_label') ) { ?>
              <div class="centre-button-container">
                <a target="_blank" rel="noopener noreferrer" class="button" href="<?php the_field('bottom_section_link'); ?>"><?php the_field('bottom_section_link_label'); ?></a>
              </div><!--end of button-->
         <?php } ?>
            <?php } else{ ?>

                <?php if( get_field('bottom_section_link') && get_field('bottom_section_link_label') ) { ?>
               <div class="centre-button-container">
                    <a class="button" href="<?php the_field('bottom_section_link'); ?>"><?php the_field('bottom_section_link_label'); ?></a>
              </div><!--end of button-->
         <?php } ?>
                <?php } ?>


        </div>
   </div><!--container-->


<?php } ?>
