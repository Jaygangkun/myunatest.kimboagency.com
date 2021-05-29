<div class="container">
<div class="row">
<ul class="col-12 tab-list">

      <li class="selector current-year-issues-selector" rel="current-year-issues">
         <?php if(get_field('meeting_documents_section_title')){ ?>
             <?php the_field('meeting_documents_section_title'); ?>
         <?php } ?>
       </li>

       <li class="selector past-year-issues" rel="past-year-issues">
         <?php if(get_field('previous_meeting_documents_section_title')){ ?>
             <?php the_field('previous_meeting_documents_section_title'); ?>
         <?php } ?>
       </li>

       <li class="selector archive-issues" rel="archives-issues">
         <?php if(get_field('all_meeting_documents_section_title')){ ?>
             <?php the_field('all_meeting_documents_section_title'); ?>
         <?php } ?>
       </li>

</ul>
</div>
</div><!--end of container-->



<div class="all-boards-wrapper water-reduction-articles" id="all-board-meetings">
<?php

// check if the repeater field has rows of data
if( have_rows('meeting_documents') ): ?>

<div class="container meeting-documents-area" id="current-year-issues">

<?php if(get_field('meeting_documents_section_title')){?>
   <div class="center paddingbox single-page-section-title">
    <h2><?php the_field('meeting_documents_section_title'); ?></h2>
  </div><!--end of title-->
<?php }?>

    <div class="row">

 	<?php // loop through the rows of data
    while ( have_rows('meeting_documents') ) : the_row(); ?>

        <div class="col-lg-3 col-md-4 col-sm-12 d-flex">  
            <div class="single-meeting-document">

        <?php if( get_sub_field('meeting_document_section_header') ) { ?>
            <div class="meeting-document-section-header">
            <?php if( get_sub_field('meeting_document_section_header') ) { ?>
                  <?php the_sub_field('meeting_document_section_header'); ?>
            <?php }?>
           </div>  
        <?php } ?>

       <?php if( have_rows('meeting_document') ): ?>
              <?php while ( have_rows('meeting_document') ) : the_row(); ?>

             <?php if( get_sub_field('meeting_document_pdf') && get_sub_field('meeting_document_label') ) { ?>
            <div class="meeting-document-with-icon">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                     <a target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('meeting_document_pdf'); ?>"> <?php the_sub_field('meeting_document_label'); ?></a>
             <?php }?>
            </div>

             <?php endwhile; ?>
        <?php endif; ?>

             </div>

        </div><!--end of col-->

<?php endwhile; ?>

      </div><!--end of row-->

  

      </div><!--end of container-->

<?php endif; ?>

<!-- Start of Previous Year -->


<?php

// check if the repeater field has rows of data
if( have_rows('previous_meeting_documents') ): ?>

<div class="container meeting-documents-area" id="past-year-issues">

<?php if(get_field('previous_meeting_documents_section_title')){?>
   <div class="center paddingbox single-page-section-title">
    <h2><?php the_field('previous_meeting_documents_section_title'); ?></h2>
  </div><!--end of title-->
<?php }?>

    <div class="row">

 	<?php // loop through the rows of data
    while ( have_rows('previous_meeting_documents') ) : the_row(); ?>

        <div class="col-lg-3 col-md-4 col-sm-12 d-flex">  
            <div class="single-meeting-document">

        <?php if( get_sub_field('previous_meeting_document_section_header') ) { ?>
            <div class="meeting-document-section-header">
            <?php if( get_sub_field('previous_meeting_document_section_header') ) { ?>
                  <?php the_sub_field('previous_meeting_document_section_header'); ?>
            <?php }?>
           </div>  
        <?php } ?>

       <?php if( have_rows('previous_meeting_document') ): ?>
              <?php while ( have_rows('previous_meeting_document') ) : the_row(); ?>

             <?php if( get_sub_field('previous_meeting_document_pdf') && get_sub_field('previous_meeting_document_label') ) { ?>
            <div class="meeting-document-with-icon">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                     <a target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('previous_meeting_document_pdf'); ?>"> <?php the_sub_field('previous_meeting_document_label'); ?></a>
             <?php }?>
            </div>

             <?php endwhile; ?>
        <?php endif; ?>

             </div>

        </div><!--end of col-->

<?php endwhile; ?>

      </div><!--end of row-->

      

      </div><!--end of container-->

<?php endif; ?>

<?php

// check if the repeater field has rows of data
if( have_rows('all_meeting_documents') ): ?>

<div class="container meeting-documents-area" id="archives-issues">

<?php if(get_field('all_meeting_documents_section_title')){?>
   <div class="center paddingbox single-page-section-title">
    <h2><?php the_field('all_meeting_documents_section_title'); ?></h2>
  </div><!--end of title-->
<?php }?>

    <div class="row">

 	<?php // loop through the rows of data
    while ( have_rows('all_meeting_documents') ) : the_row(); ?>

        <div class="col-lg-3 col-md-4 col-sm-12 d-flex">  
            <div class="single-meeting-document">

        <?php if( get_sub_field('all_meeting_document_section_header') ) { ?>
            <div class="meeting-document-section-header">
            <?php if( get_sub_field('all_meeting_document_section_header') ) { ?>
                  <?php the_sub_field('all_meeting_document_section_header'); ?>
            <?php }?>
           </div>  
        <?php } ?>

       <?php if( have_rows('all_meeting_document') ): ?>
              <?php while ( have_rows('all_meeting_document') ) : the_row(); ?>

             <?php if( get_sub_field('all_meeting_document_pdf') && get_sub_field('all_meeting_document_label') ) { ?>
            <div class="meeting-document-with-icon">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                     <a target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('all_meeting_document_pdf'); ?>"> <?php the_sub_field('all_meeting_document_label'); ?></a>
             <?php }?>
            </div>

             <?php endwhile; ?>
        <?php endif; ?>

             </div>

        </div><!--end of col-->

<?php endwhile; ?>

      </div><!--end of row-->

      

      </div><!--end of container-->

<?php endif; ?>

             </div>