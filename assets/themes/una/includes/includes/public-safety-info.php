<?php if( have_rows('public_safety_section') ): ?>
<div class="container">
     <div class="row">
        <ul class="col-12 tab-list">
            <?php  $z = 1; ?> 

       <?php while ( have_rows('public_safety_section') ) : the_row(); ?>
              <li class="water-reduction-selector selector" rel="public_safety_<?php echo $z; ?>">
               <?php if(get_sub_field('public_safety_title')){ ?>
                    <?php the_sub_field('public_safety_title'); ?>
               <?php } ?>
             </li>
          <?php  $z++; ?> 
       <?php endwhile; ?>
      </ul>
    </div>
    </div><!--end of container-->
<?php endif; ?>
 
 <?php if( have_rows('public_safety_section') ): ?>

 <div class="water-reduction-articles">
 
 <?php $z = 1;
// loop through the rows of data
while ( have_rows('public_safety_section') ) : the_row(); ?>

<div class="container paddingbox" id="public_safety_<?php echo $z; ?>">
<div class="row all-policies">

<?php if(get_sub_field('public_safety_title')){ ?>

         <div class="col-lg-10 offset-lg-1">
                <div class="first-column-content">
                   <?php if(get_sub_field('public_safety_content')) { ?>
                           <p><?php the_sub_field('public_safety_content'); ?></p>
                   <?php } ?>

                </div>
           </div>
 <?php } ?>

  
</div><!--end of row-->



</div><!--end of container-->

<?php  $z++; ?> 
<?php endwhile; ?>
</div>
<?php endif; ?>
