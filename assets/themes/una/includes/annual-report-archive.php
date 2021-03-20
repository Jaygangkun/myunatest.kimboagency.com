<?php if( have_rows('annual_report_archive') ): ?>

<div class="archives-articles articles-section-wrapper">

<div class="container">

<div class="all-articles-wrapper">

<h2 class="center annual-report-section-title">Archives</h2>

<ul>
<div class="row">
<?php // loop through the rows of data
while ( have_rows('annual_report_archive') ) : the_row(); ?>
 <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-1 offset-md-1 dashboard-excerpt">
<li>

<?php if(get_sub_field('annual_report_single_issue') && get_sub_field('annual_report_single_issue_label')){ ?>
        <div class="first-column-content">

        <?php if( get_sub_field('annual_report_single_issue') && get_sub_field('annual_report_single_issue_label') ) { ?>
            <div class="meeting-document-with-icon">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                     <a target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('annual_report_single_issue'); ?>" target="_blank" rel="noopener noreferrer"> <?php the_sub_field('annual_report_single_issue_label'); ?></a>
             <?php }?>
            </div>
           
        </div>
<?php } ?>
</li>
</div>

<?php endwhile; ?>
</div><!--row-->
</ul>

</div><!--all articles wrapper-->
</div><!--end of container-->
</div>

<?php endif; ?>
<!--End of All Issues-->