<?php if( get_field('top_section_pages')){ ?>
<div class="top-section-container-wrapper">
    <div class="container">
        <div class="row">
        <div class="col-lg-10 offset-lg-1 top-section-content">

                <div class="main_text"><?php the_field('top_section_pages'); ?></div>


    <?php if( get_field('top_section_link_external') == TRUE ) { ?>


        <?php if( get_field('top_section_link') && get_field('top_section_link_label') ) { ?>
            <div class="centre-button-container">
              <a class="button" target="_blank" rel="noopener noreferrer" href="<?php the_field('top_section_link'); ?>"><?php the_field('top_section_link_label'); ?></a>
            </div>
        <?php } ?>

        <?php } else{ ?>

            <?php if( get_field('top_section_link') && get_field('top_section_link_label') ) { ?>
            <div class="centre-button-container">

              <a class="button" href="<?php the_field('top_section_link'); ?>"><?php the_field('top_section_link_label'); ?></a>

                 </div>
        <?php } ?>

            <?php } ?>
        </div>
        </div>
   </div><!--container-->
</div> <!-- top section wrapper-->

<?php } ?>