<?php if( have_rows('fitness_centres') ): ?>
<div class="container">
     <div class="row">
        <ul class="col-12 tab-list">
            <?php  $z = 1; ?> 

       <?php while ( have_rows('fitness_centres') ) : the_row(); ?>
              <li class="water-reduction-selector selector" rel="fitness_centre_<?php echo $z; ?>">
               <?php if(get_sub_field('fitness_centre_title')){ ?>
                    <?php the_sub_field('fitness_centre_title'); ?>
               <?php } ?>
             </li>
          <?php  $z++; ?> 
       <?php endwhile; ?>
      </ul>
    </div>
    </div><!--end of container-->
<?php endif; ?>
 
 <?php if( have_rows('fitness_centres') ): ?>

 <div class="water-reduction-articles">
 
 <?php $z = 1;
// loop through the rows of data
while ( have_rows('fitness_centres') ) : the_row(); ?>

<div class="container paddingbox" id="fitness_centre_<?php echo $z; ?>">
<div class="row all-centers">

<?php if(get_sub_field('fitness_centre_title')){ ?>

         <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="first-column-content">
                   <h3 class="single-article-title"><?php the_sub_field('fitness_centre_title'); ?></h3>

                   <?php if(get_sub_field('fitness_centre_content')) { ?>
                           <p><?php the_sub_field('fitness_centre_content'); ?></p>
                   <?php } ?>

                </div>
           </div>
 <?php } ?>

   <?php if(get_sub_field('fitness_centre_image')){ ?>
           <div class="col-lg-6 col-md-12 col-sm-12 dashboard-image fitness-centres-image">
                  <?php $newImage = get_sub_field('fitness_centre_image'); ?>
                          <div class="post_image" style="background-image: url('<?php echo esc_url($newImage);?>');"></div>
           </div>
   <?php } ?>

</div><!--end of row-->


<table class="price-table">
  <tr>
    <th>
      <?php the_sub_field('fitness_centre_abbreviation'); ?>
    </th>
    <th>UNA</th>
    <th>Public</th>
  </tr> 

   <?php if( have_rows('fitness_centre_prices') ): ?>

 <?php while ( have_rows('fitness_centre_prices') ) : the_row(); ?>

  <tr class="data-row">
  <?php if(get_sub_field('fitness_centre_price_label')){ ?>
    <td><?php the_sub_field('fitness_centre_price_label'); ?></td>
 <?php } ?>

   <?php if(get_sub_field('fitness_price_ubc')){ ?>
    <td>$ <?php the_sub_field('fitness_price_ubc'); ?></td>
 <?php } ?>

   <?php if(get_sub_field('fitness_price_public')){ ?>
    <td>$ <?php the_sub_field('fitness_price_public'); ?></td>
 <?php } ?>

</tr>
  
 <?php endwhile; ?>
<?php endif; ?>


</table>
</div><!--end of container-->

<?php  $z++; ?> 
<?php endwhile; ?>
</div>
<?php endif; ?>

