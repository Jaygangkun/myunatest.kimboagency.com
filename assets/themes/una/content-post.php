<li>
  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

  <?php echo mb_strimwidth( get_the_title(),  0, 42, '...'); ?>
</a>
<div>
         <?php if( get_the_date()){ ?>
                     <span> <?php echo get_the_date(); ?> </span>
         <?php } ?>
         </div>
</li>



