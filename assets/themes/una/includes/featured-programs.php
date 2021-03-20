<?php  $dt = new DateTime();
  $tz = new DateTimeZone('America/Vancouver'); // or whatever zone you're after
  $dt->setTimezone($tz);
  $dateTime= $dt->format('Y-m-d'); ?>



<?php include('spring-season.php') ?>
<?php include('summer-season.php') ?>
<?php include('fall-season.php') ?>
<?php include('winter-season.php') ?>


<?php $gmtNow = date('Y-m-d H:i:s'); ?>

<?php var_dump($gmtNow); ?>




<?php $springStart = '2021-03-29 08:00:00'; ?>

<?php $summerStart = '2021-06-28 08:00:00'; ?>

<?php $displayTime = '2021-03-05 08:00:00'; ?>


<?php if ($gmtNow >= $displayTime && $gmtNow >= $springStart  && $gmtNow < $summerStart) { ?>
   <?php $springAndSummer= array_merge( $springPrograms, $summerPrograms); ?>
<?php } elseif ( $gmtNow >= $displayTime && $gmtNow >= $summerStart){ ?>
  <?php $springAndSummer= array_merge( $summerPrograms); ?>
  <?php } elseif ( $gmtNow >= $displayTime && $gmtNow < $springStart){ ?>
  <?php $springAndSummer= array_merge( $springPrograms, $summerPrograms, $winterPrograms); ?>
<?php } elseif( $gmtNow < $displayTime) { ?>
  <?php $springAndSummer= array_merge( $winterPrograms); ?>
<?php }; ?>





<?php foreach ($springAndSummer as $rkey => $resource){
      if ($resource['Featureonwebsite'] == true){
      $featured_results_fall[] = $resource;
      }?>
<?php }?>



 <?php foreach ( $featured_results_fall as $rkey => $resource){
    $brandNewArray[] = $resource;
  }
  
  ?>
  

<h2 class="frontpage-section-headline news-section">Featured Programs</h2>

<?php if($brandNewArray == null){ ?>


<?php $alertText = get_field('no_program_alert_title_programs', 'option');
$alertLink = get_field('no_program_alert_content_programs', 'option'); ?>

<div class="container">
  <div class="alert-container">
    <div class="alert-icon">
      <img src="<?php custom_url(); ?>/images/attention-icon-plain.svg" class="attention-icon">
    </div>
    <div class="alert-box">
    <?php if($alertText){ ?>
    <h4><?php  echo $alertText; } ?> </h4>
        <?php if($alertLink){ 
      echo $alertLink; } ?>        </div>
  </div>
</div>

<div class="top_label view-news-button view-events-calendar">
    <div class="center-link paddingbox">
      <a class="button-link" href="/programs/"><i class="fa fa-angle-right" aria-hidden="true"></i>See All Programs</a>
    </div>
  </div>


<?php } else{ ?>


<div class="activities-time-loop events-section featured-programs">
    
   <div class="flexslider">
    <ul class="slides">
      <?php for ($i=0; $i < count($brandNewArray); $i++): ?>
      <?php include('single-activities-in-loop.php'); ?>
      <?php endfor; ?>
    </ul>
    <div class="number-results">
      <p><?php echo count($brandNewArray); ?> Results</p>
    </div>
    </div>
</div>

<div class="top_label view-news-button view-events-calendar">
    <div class="center-link paddingbox">
      <a class="button-link" href="/programs/"><i class="fa fa-angle-right" aria-hidden="true"></i>See All Programs</a>
    </div>
  </div>

<?php } ?>