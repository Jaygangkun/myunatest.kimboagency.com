<?php if(get_field('how_to_access_section_title')) { ?>

<div class="container how-to-access-card">
    

    <?php if(get_field('how_to_access_section_title')){?>
     <div class="center paddingbox single-page-section-title">
        <h3><?php the_field('how_to_access_section_title'); ?></h3>
      </div>
      <?php } ?>

 <?php if(get_field('how_to_access_big_card_title')) { ?>
       <div class="row">
       <div class="col-12">
           <h4><?php the_field('how_to_access_big_card_title'); ?></h4>
           <p><?php the_field('how_to_access_big_card_description'); ?></p>
        </div>
      </div><!--row end-->
 <?php } ?>

</div><!--container end-->

<?php } ?>