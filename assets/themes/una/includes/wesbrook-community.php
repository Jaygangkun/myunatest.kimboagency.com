                  <!-- Start of API For Operation hours-->
                  <?php 
$data2;
$data2['QueryString'] = "SELECT ID, LocationId, DayId, StartTime, EndTime FROM Custom.OperationHours WHERE LocationId = '1460086f-b904-4373-833b-72f094a08205';" ;
$handle = curl_init();

$url = "https://myuna.perfectmind.com/api/2.0/B2C/Query";

curl_setopt_array($handle,
  array(
    CURLOPT_URL            => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => 
    json_encode($data2),
    CURLOPT_HTTPHEADER => array(
      "X-Access-Key: 5I8bxF2WG9nFZ0rf5zxW3tGlN0aSJDr9",
      "X-Client-Number: 24588",
      "Content-Type: application/json"
    ),
  )
);

echo curl_error($handle);

$output = curl_exec($handle);
$data2 = json_decode($output,true);
curl_close($handle);
?>




<?php $dt = new DateTime();
$tz = new DateTimeZone('America/Vancouver'); // or whatever zone you're after
$dt->setTimezone($tz);
$now = strtotime($dt->format('h:i A')); ?>

<?php date_default_timezone_set('America/Vancouver'); 
$today = strtolower(date('D'));;
?>

<!-- End of API for Operation Hours-->


<div class="all-facilities-hours">
           <?php $monStartTime = date('h:i A', strtotime($data2[5]['StartTime'])); ?>
           <?php $monEndTime = date('h:i A', strtotime($data2[5]['EndTime'])); ?>
           <?php $satStartTime = date('h:i A', strtotime($data2[3]['StartTime'])); ?>
           <?php $satEndTime = date('h:i A', strtotime($data2[3]['EndTime'])); ?>
           <?php $friStartTime = date('h:i A', strtotime($data2[6]['StartTime'])); ?>
           <?php $friEndTime = date('h:i A', strtotime($data2[6]['EndTime'])); ?>
</div>


<!-- Determine if centre is opening or close-->   


<?php

$times = array(
'sun' => $satStartTime . ' - ' . $satEndTime,
'mon' => $monStartTime . ' - ' . $monEndTime,
'tue' => $monStartTime . ' - ' . $monEndTime,
'wed' => $monStartTime . ' - ' . $monEndTime,
'thu' => $monStartTime . ' - ' . $monEndTime,
'fri' => $friStartTime . ' - ' . $friEndTime,
'sat' => $satStartTime . ' - ' . $satEndTime
); ?>


<?php 

$dt = new DateTime();
$tz = new DateTimeZone('America/Vancouver'); // or whatever zone you're after
$dt->setTimezone($tz);
$now = strtotime($dt->format('h:i A')); 



//Function to Calculate Time Until Closing
 $open = isOpen($now, $times); ?>


<?php
$monStart = date('H:i', strtotime($data2[5]['StartTime'])); 
$monEnd = date('H:i', strtotime($data2[5]['EndTime'])); 
$friStart = date('H:i', strtotime($data2[6]['StartTime'])); 
$friEnd = date('H:i', strtotime($data2[6]['EndTime'])); 
$satStart = date('H:i', strtotime($data2[3]['StartTime'])); 
$satEnd = date('H:i', strtotime($data2[3]['EndTime'])); 
$timeNow = date('H:i'); ?>
 

<?php if(!empty($data2)) { ?>

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

<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Closed until further notice
  </div>
<?php } ?>