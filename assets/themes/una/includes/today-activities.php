

<?php include('spring-season.php') ?>

<?php $dt = new DateTime();
$tz = new DateTimeZone('America/Vancouver'); // or whatever zone you're after

$dt->setTimezone($tz);
$dateTime= $dt->format('Y-m-d'); ?>


  <?php foreach ($springPrograms as $rkey => $resource){
    if (in_array($dateTime, $resource['StartTimesInDate'])) {
      $brandNewArray[] = $resource;
      }?>
<?php }?>


<?php usort($brandNewArray, function($a, $b) {
  $ad = new DateTime($a['StartTimes'][0]);
  $bd = new DateTime($b['StartTimes'][0]);

  if ($ad == $bd) {
    return 0;
  }

  return $ad < $bd ? -1 : 1;
}); ?>

  <div class="flexslider" id="activities_loop_1">


    <ul class="slides">
      <?php for ($i=0; $i < count($brandNewArray); $i++): ?>
      <?php include('single-activities-in-loop.php'); ?>
      <?php endfor; ?>
    </ul>


    </div>



