
<?php if ( $open == 0 && $today !== 'sat' && $today !== 'sun' && $today !== 'fri' && $timeNow < $monStart) {?>
  <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Closed
  </div>
  <div class="facilities-hours-info regular">
      Open today <?php echo $monStartTime; ?> - <?php echo $monEndTime; ?>
  </div>
<?php }  elseif( $open == 0 && $today == 'fri' && $timeNow < $monStart ) { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Closed 
  </div>
  <div class="facilities-hours-info regular">      
     Open today <?php echo $friStartTime; ?> - <?php echo $friEndTime; ?>
  </div>
<?php } elseif( $open == 0 && $today !== 'sat' && $today !== 'fri' && $today !== 'sun' && $today !== 'thu' && $timeNow >= $monEnd ) { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Closed 
  </div>
  <div class="facilities-hours-info regular">      
      Open tomorrow <?php echo $monStartTime; ?> - <?php echo $monEndTime; ?>
  </div>
<?php } elseif( $open == 0 && $today == 'fri' && $timeNow >= $monEnd ) { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Closed
  </div>
  <div class="facilities-hours-info regular">
     Open tomorrow <?php echo $satStartTime; ?> - <?php echo $satEndTime; ?>
  </div>
<?php } elseif( $open == 0 && $today == 'thu' && $timeNow >= $monEnd ) { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Closed
  </div>
  <div class="facilities-hours-info regular">
     Open tomorrow <?php echo $friStartTime; ?> - <?php echo $friEndTime; ?>
  </div>
<?php } elseif( $open == 0 && $today !== 'mon' && $today !== 'tue' && $today !== 'wed' && $today !== 'thu' && $today !== 'fri' && $timeNow < $satStart) { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Closed
  </div>
  <div class="facilities-hours-info regular">
     Open today <?php echo $satStartTime; ?> - <?php echo $satEndTime; ?>
  </div>
<?php } elseif( $open == 0 && $today == 'sat' && $timeNow >= $satEnd) { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Closed
  </div>
  <div class="facilities-hours-info regular">
     Open tomorrow <?php echo $satStartTime; ?> - <?php echo $satEndTime; ?>
  </div>
<?php } elseif( $open == 0 && $today == 'sun' && $timeNow >= $satEnd) { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Closed
  </div>
  <div class="facilities-hours-info regular">
    Open tomorrow <?php echo $monStartTime; ?> - <?php echo $monEndTime; ?>
  </div>
<?php } elseif( $open/60  <= 45 && $open/60 !== 1 && $open > 0 && $today !== 'sat' && $today !== 'sun' && $today !== 'fri' ) { ?>
   <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
    Close soon in <?php echo ceil($open/60); ?> minutes
  </div>
  <div class="facilities-hours-info regular">
     Open today <?php echo $monStartTime; ?> - <?php echo $monEndTime; ?>
    </div>
<?php }  elseif( $open/60  == 1 && $today !== 'sat' && $today !== 'sun' && $today !== 'fri') { ?>
   <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Close soon in 1 minute
  </div>
  <div class="facilities-hours-info regular">
      Open today <?php echo $monStartTime; ?> - <?php echo $monEndTime; ?>
  </div>
<?php } elseif( $open/60  <= 45 && $open/60 !== 1 && $open > 0 && $today == 'sat') { ?>
   <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
    Close soon in <?php echo ceil($open/60); ?> minutes
  </div>
  <div class="facilities-hours-info regular">
     Open today <?php echo $satStartTime; ?> - <?php echo $satEndTime; ?>
    </div>
<?php }  elseif( $open/60  == 1 && $today == 'sat') { ?>
   <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Close soon in 1 minute
  </div>
  <div class="facilities-hours-info regular">
      Open today <?php echo $satStartTime; ?> - <?php echo $satEndTime; ?>
  </div>
<?php } elseif( $open/60  <= 45 && $open/60 !== 1 && $open > 0 && $today == 'fri') { ?>
   <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
    Close soon in <?php echo ceil($open/60); ?> minutes
  </div>
  <div class="facilities-hours-info regular">
     Open today <?php echo $friStartTime; ?> - <?php echo $friEndTime; ?>
    </div>
<?php }  elseif( $open/60  == 1 && $today == 'fri') { ?>
   <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Close soon in 1 minute
  </div>
  <div class="facilities-hours-info regular">
      Open today <?php echo $friStartTime; ?> - <?php echo $friEndTime; ?>
  </div>
<?php }elseif( $open/60  <= 45 && $open/60 !== 1 && $open > 0 && $today == 'sun' ) { ?>
   <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
    Close soon in <?php echo ceil($open/60); ?> minutes
  </div>
  <div class="facilities-hours-info regular">
     Open today <?php echo $satStartTime; ?> - <?php echo $satEndTime; ?>
    </div>
<?php }  elseif( $open/60  == 1 && $today == 'sun') { ?>
   <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Close soon in 1 minute
  </div>
  <div class="facilities-hours-info regular">
      Open today <?php echo $satStartTime; ?> - <?php echo $satEndTime; ?>
  </div>
<?php } elseif ( $open/60 > 45 && $today !== 'sat' && $today !== 'sun' && $today !== 'fri') { ?>
<div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
  Open Now 
</div>
<div class="facilities-hours-info regular">
  Open today <?php echo $monStartTime; ?> - <?php echo $monEndTime; ?>
</div>
<?php } elseif ( $open/60 > 45 && $today == 'sat') { ?>
<div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
  Open Now 
</div>
<div class="facilities-hours-info regular">
  Open today <?php echo $satStartTime; ?> - <?php echo $satEndTime; ?>
</div>
<?php } elseif ( $open/60 > 45 && $today == 'sun') { ?>
<div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
  Open Now 
</div>
<div class="facilities-hours-info regular">
  Open today <?php echo $satStartTime; ?> - <?php echo $satEndTime; ?>
</div>
<?php } elseif ( $open/60 > 45 && $today == 'fri') { ?>
<div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
  Open Now 
</div>
<div class="facilities-hours-info regular">
  Open today <?php echo $friStartTime; ?> - <?php echo $friEndTime; ?>
</div>
<?php }  ?>