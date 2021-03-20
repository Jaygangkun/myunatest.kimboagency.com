<?php
  $dt = new DateTime();
  $tz = new DateTimeZone('America/Vancouver'); // or whatever zone you're after
  $dt->setTimezone($tz);
  $dateTime= $dt->format('Y-m-d');
?>

<div class="filtered-programs-section" id="activities_loop_1">
  <?php if ( $brandNewArray) { ?>
  <ul class="main-carousel filtered-programs-container">
    <?php for ($i=0; $i < count($brandNewArray); $i++): ?>
      <?php include('single-activities-in-loop.php'); ?>
    <?php endfor; ?>
  </ul>
    <?php } else { ?>
      <h3 id="programs-error-message"> No programs containing your search terms were found </h3>

          <?php } ?>
</div>