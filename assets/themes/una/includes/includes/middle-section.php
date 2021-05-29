<?php if( get_field('add_middle_content_section') == 'Yes' ) { ?>


<div class="container middle-content-section-container">

  <?php if( get_field('middle_content_title')){ ?>
    <h2 class="frontpage-section-headline"><?php the_field('middle_content_title'); ?></h2>
  <?php } ?>

  <div class="row">
    <div class="col-lg-12">

      <div class="main_text">
        <?php if( get_field('map_image')){ ?>
          <div class="map-images">
            <img src="<?php the_field('map_image'); ?>" alt="UNA Map">
          </div>
        <?php } ?>
        <?php if( get_field('middle_section_main_content')){ ?>
          <?php the_field('middle_section_main_content'); ?>
        <?php } ?>
      </div>

    </div>
  </div>

</div><!--container-->

<?php } ?>