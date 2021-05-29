<li>
  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
  <?php echo mb_strimwidth( get_the_title(),  0, 42, '...'); ?>
  </a>

  <div>
       <?php if( get_permalink() ){ ?>
            <?php
                $str = get_permalink();
                $str = preg_replace('#^https?://#', '', $str);
                $search = 'myuna.ca' ;
                $trimmed = str_replace($search, '', $str) ;
                echo $trimmed; // www.google.com ?>
         <?php } ?>
  </div>
</li>