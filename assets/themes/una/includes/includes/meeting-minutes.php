<?php

// check if the repeater field has rows of data
if( have_rows('meeting_documents') ): ?>

<div class="container meeting-documents-area">

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
              <img src="<?php custom_url(); ?>/images/icon-pdf.png">
                     <a target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('meeting_document_pdf'); ?>"> <?php the_sub_field('meeting_document_label'); ?></a>
             <?php }?>
            </div>

             <?php endwhile; ?>
        <?php endif; ?>

             </div>

        </div><!--end of col-->

<?php endwhile; ?>

      </div><!--end of row-->

      <?php if( get_field('meeting_documents_button_link') && get_field('meeting_documents_button_link_label') ) { ?>
    <div class="mb_blurb_container meeting-minutes-container">
       <div class="button-container">

    <a class="button" href="<?php the_field('meeting_documents_button_link'); ?>"><?php the_field('meeting_documents_button_link_label'); ?></a>

         </div><!--end of button-->
         </div><!--end of blurb container-->

        <?php } ?>

      </div><!--end of container-->

<?php endif; ?>