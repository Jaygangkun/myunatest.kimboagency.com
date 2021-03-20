<div class="container">
<div class="row">
<ul class="col-12 tab-list">

      <li class="selector current-year-issues-selector" rel="current-year-issues">
         <?php if(get_field('current_year_issues_section_title')){ ?>
             <?php the_field('current_year_issues_section_title'); ?>
         <?php } ?>
       </li>

       <li class="selector past-year-issues" rel="past-year-issues">
         <?php if(get_field('past_year_issues_section_title')){ ?>
             <?php the_field('past_year_issues_section_title'); ?>
         <?php } ?>
       </li>

       <li class="selector archive-issues" rel="archives-issues">
         <?php if(get_field('archive_issues_section_title')){ ?>
             <?php the_field('archive_issues_section_title'); ?>
         <?php } ?>
       </li>

</ul>
</div>
</div><!--end of container-->

<div class="container">
<div class="all-articles-wrapper">

<!--Start of Current Issues-->
<?php if( have_rows('current_year_issue') ): ?>

<div class="archive-articles articles-section-wrapper" id="current-year-issues">
<ul>
<div class="row">

<?php // loop through the rows of data
while ( have_rows('current_year_issue') ) : the_row(); ?>
 <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-1 offset-md-1 dashboard-excerpt">
<li>
<?php if(get_sub_field('current_year_file')){ ?>
        <div class="first-column-content">
        <?php if( get_sub_field('current_year_file_name') && get_sub_field('current_year_file') ) { ?>
            <div class="meeting-document-with-icon">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                     <a target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('current_year_file'); ?>" target="_blank" rel="noopener noreferrer"> <?php the_sub_field('current_year_file_name'); ?></a>
             <?php }?>
            </div>         
        </div>
<?php } ?>
</li>
</div>

<?php endwhile; ?>
</div><!--end of row-->
</ul>
</div>
<?php endif; ?>
<!--End of Current Issues-->

<!--Start of Past Issues-->
<?php if( have_rows('past_year_issue') ): ?>

<div class="past-articles articles-section-wrapper" id="past-year-issues">

<ul>
<div class="row">

<?php // loop through the rows of data
while ( have_rows('past_year_issue') ) : the_row(); ?>

<div class="col-lg-4 col-md-4 col-sm-12 offset-lg-1 offset-md-1 dashboard-excerpt">
<li>
<?php if(get_sub_field('past_year_file') && get_sub_field('past_year_file_name')){ ?>
        <div class="first-column-content">

        <?php if( get_sub_field('past_year_file_name') && get_sub_field('past_year_file') ) { ?>
            <div class="meeting-document-with-icon">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                     <a target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('past_year_file'); ?>" target="_blank" rel="noopener noreferrer"> <?php the_sub_field('past_year_file_name'); ?></a>
             <?php }?>
            </div>
           
        </div>
<?php } ?>
</li>
</div>

<?php endwhile; ?>
</div><!--row-->
</ul>
</div>

<?php endif; ?>
<!--End of 2018 Issues-->

<!--Start of All Past Issues-->
<?php if( have_rows('archive_issue') ): ?>

<div class="archives-articles articles-section-wrapper" id="archives-issues">

<ul>
<div class="row">
<?php // loop through the rows of data
while ( have_rows('archive_issue') ) : the_row(); ?>
 <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-1 offset-md-1 dashboard-excerpt">
<li>

<?php if(get_sub_field('archive_issue_file') && get_sub_field('archive_issue_label')){ ?>
        <div class="first-column-content">

        <?php if( get_sub_field('archive_issue_file') && get_sub_field('archive_issue_label') ) { ?>
            <div class="meeting-document-with-icon">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                     <a target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('archive_issue_file'); ?>" target="_blank" rel="noopener noreferrer"> <?php the_sub_field('archive_issue_label'); ?></a>
             <?php }?>
            </div>
           
        </div>
<?php } ?>
</li>
</div>

<?php endwhile; ?>
</div><!--row-->
</ul>

</div>

<?php endif; ?>
<!--End of All Issues-->

</div><!--End of All Articles Wrapper-->
</div><!--End of All Container-->



