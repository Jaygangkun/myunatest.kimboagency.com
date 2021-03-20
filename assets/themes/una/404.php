<?php get_header(); ?>
<div class="error-page-container">
   <div class="container">
      <div class="row">
      <div class="col-lg-12">

          <div class="error-content">
             <h4>Sorry, we can't find the page you were looking for</h2>
             <h6>Maybe you would like to visit our <a class="button-link" href="<?php echo site_url(); ?>">homepage?</a> Our <a class="button-link" href="<?php custom_url(); ?>/news">news and events?</a></h3>
          </div>
</div>
     </div><!--row-->
   </div><!--container-->
</div>


<?php include('includes/latest-news.php'); ?>

<?php include('includes/all-events-calendar.php'); ?>

<?php get_footer(); ?>