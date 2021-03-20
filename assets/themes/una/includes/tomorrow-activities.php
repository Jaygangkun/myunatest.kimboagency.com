<?php include('spring-season.php') ?>

<?php $dt = new DateTime();
$tz = new DateTimeZone('America/Vancouver'); // or whatever zone you're after

$dt->setTimezone($tz);
$dateTime= $dt->format('Y-m-d'); ?>

<?php $tomorrow = date('Y-m-d', strtotime($dateTime . ' +1 day')); ?>

<?php foreach ($springPrograms as $rkey => $resource){
    if (in_array($tomorrow, $resource['StartTimesInDate'])) {
      $tomorrowArray[] = $resource;
      }?>
<?php }?>

<?php usort($tomorrowArray, function($a, $b) {
  $ad = new DateTime($a['StartTimes'][0]);
  $bd = new DateTime($b['StartTimes'][0]);

  if ($ad == $bd) {
    return 0;
  }

  return $ad < $bd ? -1 : 1;
}); ?>




   <div class="flexslider" id="activities_loop_2">
    <ul class="slides">
      <?php for ($i=0; $i < count($tomorrowArray); $i++): ?>
           <?php include('single-activities-loop-tomorrow.php'); ?>
      <?php endfor; ?>
    </ul>
</div>

