<?php
// check if the repeater field has rows of data
if( have_rows('annual_documents') ): ?>
  <div class="meeting-documents-area annual-meetings">
      <div class="container ">
    <?php if(get_field('annual_documents_section_title')){?>
      <div class="center paddingbox single-page-section-title">
          <h2><?php the_field('annual_documents_section_title'); ?></h2>
      </div><!--end of title-->
    <?php }?>

    <?php if(get_field('annual_documents_blurb')){?>
      <div class="paddingbox center">
        <?php the_field('annual_documents_blurb'); ?>
      </div><!--end of title-->
    <?php }?>

        <div class="row">
      <?php // loop through the rows of data
        while ( have_rows('annual_documents') ) : the_row(); ?>

            <div class="col-lg-5 col-md-5 col-sm-12 offset-lg-1 offset-md-1">
                <div class="single-meeting-document">

                <?php if( get_sub_field('annual_document_pdf') && get_sub_field('annual_document_label') ) { ?>
                      <div class="meeting-document-with-icon">
                        <img src="<?php custom_url(); ?>/images/icon-pdf.png">
                        <a target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('annual_document_pdf'); ?>"> <?php the_sub_field('annual_document_label'); ?></a>
                    <?php }?>
                    </div>
                </div>
            </div><!--end of col-->
      <?php endwhile; ?>
    </div><!--end of row-->
    </div><!--end of container-->
</div>
<?php endif; ?>