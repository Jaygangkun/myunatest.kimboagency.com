<?php include('spring-season.php') ?>

<?php $dt = new DateTime($utc);
$tz = new DateTimeZone('America/Vancouver'); // or whatever zone you're after

$dt->setTimezone($tz);
$dateTime= $dt->format('Y-m-d'); ?>


<?php $nextWeek1 = date('Y-m-d', strtotime($dateTime . ' +7 day')); ?>
<?php $nextWeek2 = date('Y-m-d', strtotime($dateTime . ' +8 day')); ?>
<?php $nextWeek3 = date('Y-m-d', strtotime($dateTime . ' +9 day')); ?>
<?php $nextWeek4 = date('Y-m-d', strtotime($dateTime . ' +10 day')); ?>
<?php $nextWeek5 = date('Y-m-d', strtotime($dateTime . ' +11 day')); ?>
<?php $nextWeek6 = date('Y-m-d', strtotime($dateTime . ' +12 day')); ?>
<?php $nextWeek7 = date('Y-m-d', strtotime($dateTime . ' +13 day')); ?>




<?php foreach ($springPrograms as $rkey => $resource){
    if ( in_array($nextWeek1, $resource['StartTimesInDate']) || in_array($nextWeek2, $resource['StartTimesInDate']) || in_array($nextWeek3, $resource['StartTimesInDate']) || in_array($nextWeek4, $resource['StartTimesInDate']) || in_array($nextWeek5, $resource['StartTimesInDate']) || in_array($nextWeek6, $resource['StartTimesInDate']) || in_array($nextWeek7, $resource['StartTimesInDate']) ) {
      $nextWeekArray[] = $resource;
      }?>
<?php }?>






<?php usort($nextWeekArray, function($a, $b) {
  $ad = new DateTime($a['StartTimes'][0]);
  $bd = new DateTime($b['StartTimes'][0]);

  if ($ad == $bd) {
    return 0;
  }

  return $ad < $bd ? -1 : 1;
}); ?>



  <div class="flexslider" id="activities_loop_3">


    <ul class="slides">
      <?php for ($i=0; $i < count($nextWeekArray); $i++): ?>
      <?php include('single-activities-loop-next.php'); ?>

      <?php endfor; ?>
    </ul>


    </div>


