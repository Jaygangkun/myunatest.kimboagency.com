<?php defined('ABSPATH') or die(""); ?>
<?php /**
* Template Name: Single Info Template
* @package WordPress

*/ ?>
<?php get_header(); ?>

<?php include('includes/alert-box.php'); ?>


<?php
  if (is_page(10605)) { ?>
    <?php
      $covideUpdatesTitle = get_field("covid_updates_title");
      $covideUpdatesSubtitle = get_field("covid_updates_subtitle");
    ?>

    <div class="container covid-updates">
      <div class="row">
        <div class="col-12 center">
          <?php if($covideUpdatesTitle) : ?><h2><?php echo $covideUpdatesTitle; ?></h2><?php endif; ?>
          <?php if($covideUpdatesSubtitle) : ?><h3><?php echo $covideUpdatesSubtitle; ?></h3><?php endif; ?>
        </div>
      </div>
    </div>

    <?php include('includes/policies-sections.php'); ?>
  <?php } else {
    include('includes/top-section.php');
  } ?>

<?php include('includes/two-pillars.php'); ?>
<?php include('includes/bottom-section.php'); ?>
<?php include('includes/helpful.php'); ?>

<?php get_footer(); ?>