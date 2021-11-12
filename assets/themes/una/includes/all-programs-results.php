<?php
  $dt = new DateTime();
  $tz = new DateTimeZone('America/Vancouver'); // or whatever zone you're after
  $dt->setTimezone($tz);
  $dateTime= $dt->format('Y-m-d');
?>

<div id="activities_loop_1">
  <?php if ( $brandNewArray) { ?>
<div class="flexslider" style="background: none;">
    <ul class="slides" >  
    <?php for ($i=0; $i < count($brandNewArray); $i++): ?>
      <?php include('single-activities-in-loop.php'); ?>
    <?php endfor; ?>
  </ul>
  </div>
    <?php } else { ?>
      <h3 id="programs-error-message"> No programs containing your search terms were found </h3>

          <?php } ?>
</div>