<?php defined('ABSPATH') or die(""); ?>

<?php
  $sectionOneContent = get_field("section_one_content");
  $sectionTwoContent = get_field("section_two_content");
  $accordionTitle = get_field("accordion_title");
  $sectionThreeContent = get_field("section_three_content");
  $sectionThreeDownloadstitle = get_field("section_three_downloads_title");
  $sectionFourContent = get_field("section_four_content");
  $sectionFiveContent = get_field("section_five_content");
  $reportsTitle = get_field("reports_title");
  $reportsSubitle = get_field("reports_subtitle");
?>

<?php get_header(); ?>

<?php include('includes/alert-box.php'); ?>

<?php include('includes/top-section.php'); ?>

<?php include('includes/overlay-columns.php'); ?>

<?php if ($sectionOneContent) : ?>
  <div class="container top-margin">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="main_text">
          <?php echo $sectionOneContent; ?>
        </div>
        <?php
          if( have_rows('section_one_buttons') ):
              while ( have_rows('section_one_buttons') ) : the_row();
                  $link = get_sub_field('link');
                  if( $link ):
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                      ?>
                      <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><?php if($link['target']) : ?>&nbsp;<i class="fas fa-external-link-alt"></i><?php endif; ?></a>
                  <?php endif;
              endwhile;
          endif;
        ?>

      </div>
    </div>
  </div>
<?php endif; ?>

<?php if ($sectionTwoContent) : ?>
  <div class="container top-margin">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
      <div class="main_text">
        <?php echo $sectionTwoContent; ?>
      </div>

        <?php
          if( have_rows('section_two_buttons') ):
              while ( have_rows('section_two_buttons') ) : the_row();
                  $link = get_sub_field('link');
                  if( $link ):
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                      ?>
                      <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><?php if($link['target']) : ?>&nbsp;<i class="fas fa-external-link-alt"></i><?php endif; ?></a>
                  <?php endif;
              endwhile;
          endif;
        ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php if($accordionTitle) : ?>
  <div class="container top-margin" id="faq">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="main_text center">
          <h2><?php echo $accordionTitle; ?></h2>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php include('includes/faq.php'); ?>

<?php if ($sectionThreeContent) : ?>
  <div class="container top-margin" id="neighbours-fund">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
      <div class="main_text">
        <?php echo $sectionThreeContent; ?>
      </div>

        <?php
          if( have_rows('section_three_buttons') ):
              while ( have_rows('section_three_buttons') ) : the_row();
                  $link = get_sub_field('link');
                  if( $link ):
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                      ?>
                      <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><?php if($link['target']) : ?>&nbsp;<i class="fas fa-external-link-alt"></i><?php endif; ?></a>
                  <?php endif;
              endwhile;
          endif;
        ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<div class="meeting-documents-area">
  <div class="container">
    <?php if($sectionThreeDownloadstitle) : ?>
      <div class="center paddingbox single-page-section-title">
        <h2><?php echo $sectionThreeDownloadstitle; ?></h2>
      </div>
    <?php endif; ?>
    <?php if( have_rows('section_three_downloads') ): ?>
      <div class="row">
        <div class="col-sm-12 col-lg-10 offset-lg-1">

            <?php while ( have_rows('section_three_downloads') ) : the_row(); ?>
              <?php
                $title = get_sub_field('title');
                $file = get_sub_field('file');
              ?>
              <div class="meeting-document-with-icon">
                <img src="<?php custom_url(); ?>/images/icon-pdf.png">
                <a target="_blank" rel="noopener noreferrer" href="<?php the_sub_field('file'); ?>"><?php echo $title; ?></a>
              </div>
            <?php endwhile; ?>

        </div>
      </div>
    <?php endif; ?>
  </div>
</div>


<?php if ($sectionFourContent) : ?>
  <div class="container top-margin">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
      <div class="main_text">
      <?php echo $sectionFourContent; ?>
      </div>

        <?php
          if( have_rows('section_four_buttons') ):
              while ( have_rows('section_four_buttons') ) : the_row();
                  $link = get_sub_field('link');
                  if( $link ):
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                      ?>
                      <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><?php if($link['target']) : ?>&nbsp;<i class="fas fa-external-link-alt"></i><?php endif; ?></a>
                  <?php endif;
              endwhile;
          endif;
        ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php if ($sectionFiveContent) : ?>
  <div class="container top-margin">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
      <div class="main_text">
        <?php echo $sectionFiveContent; ?>
      </div>

        <?php
          if( have_rows('section_five_buttons') ):
              while ( have_rows('section_five_buttons') ) : the_row();
                  $link = get_sub_field('link');
                  if( $link ):
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                      ?>
                      <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><?php if($link['target']) : ?>&nbsp;<i class="fas fa-external-link-alt"></i><?php endif; ?></a>
                  <?php endif;
              endwhile;
          endif;
        ?>
      </div>
    </div>
  </div>
<?php endif; ?>


<div class="meeting-documents-area">
  <div class="container">
    <?php if($reportsTitle || $reportsSubitle ) : ?>
      <div class="center paddingbox single-page-section-title">
        <h2 class="big-title"><?php echo $reportsTitle; ?></h2>
        <h3><?php echo $reportsSubitle; ?></h3>
      </div>
    <?php endif; ?>
    <?php if( have_rows('reports_downloads') ): ?>
      <div class="row">
        <div class="col-sm-12 col-lg-8 offset-lg-2">

            <?php while ( have_rows('reports_downloads') ) : the_row(); ?>
              <?php
                $title = get_sub_field('title');
                $file = get_sub_field('file');
              ?>
              <div class="meeting-document-with-icon">
                <img src="<?php custom_url(); ?>/images/icon-pdf.png">
                <a target="_blank" rel="noopener noreferrer" href="<?php echo $file['url']; ?>"><?php echo $title; ?></a>
              </div>
            <?php endwhile; ?>

        </div>
      </div>
    <?php endif; ?>
  </div>
</div>




<?php get_footer(); ?>