<?php if( get_field('show_banner_image_int') == 'Yes' ) { ?>
  <div class="hero-container banner-container">


    <div class="hero_image hero_image_interior banner_below_hero" style="background:#418477<?php if( get_field('banner_hero_image_int') ) { 
$hero_image = wp_get_attachment_image_src( get_field('banner_hero_image_int'), 'large' );
?> url(<?php echo $hero_image[0]; ?>) no-repeat center center; background-size:cover<?php } ?>"
>

     </div><!--//hero_image-->

</div><!--//hero-container-->    
    
    <?php } ?>
