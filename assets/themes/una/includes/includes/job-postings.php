<?php if( have_rows('job_opportunity') ): ?>
<div class="container">
<?php if(get_field('job_opportunities_section_title')) {?>
      <div class="center paddingbox single-page-section-title">
        <h3><?php the_field('job_opportunities_section_title'); ?></h3>
      </div>
 <?php } ?>


    <?php while ( have_rows('job_opportunity') ) : the_row(); ?>
    <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 d-flex">
                <div class="single-job-card">

                        <?php if( get_sub_field('job_opportunity_title') ) { ?>
                            <div class="job-title vertical-paddingbox">
                                 <h5> <?php the_sub_field('job_opportunity_title'); ?> </h5>
                           </div>
                        <?php } ?>

                         <?php if( get_sub_field('job_opportunity_content') ) { ?>
                            <div class="job-content vertical-paddingbox">
                                 <p> <?php the_sub_field('job_opportunity_content'); ?> </p>
                           </div>
                        <?php } ?>

                        <?php if( get_sub_field('job_opportunity_link') ) { ?>
                    <div class="centre-button-container">
                            <a class="button blue" target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('job_opportunity_link'); ?>"><?php the_sub_field('job_opportunity_link_label'); ?></a>
                    </div>
                    <?php } ?>

                </div>
             </div>
        </div>
      <?php endwhile; ?>
 </div>

<?php endif; ?>