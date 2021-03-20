
<!--API FOR LOCATION-->
<?php 
$data3;

$data3['QueryString'] = "SELECT Name, ID FROM Custom.Location WHERE Name = 'Old Barn Fitness Centre'";

$handle = curl_init();

$url = "https://myuna.perfectmind.com/api/2.0/B2C/Query";

curl_setopt_array($handle,
  array(
    CURLOPT_URL            => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => 
    json_encode($data3),
    CURLOPT_HTTPHEADER => array(
      "X-Access-Key: 5I8bxF2WG9nFZ0rf5zxW3tGlN0aSJDr9",
      "X-Client-Number: 24588",
      "Content-Type: application/json"
    ),
  )
);

echo curl_error($handle);

$output = curl_exec($handle);
$data3 = json_decode($output,true);
curl_close($handle);
?>
<!-- End of API for Location-->

<!-- Start of API For Operation hours-->
<?php 
$data2;
$data2['QueryString'] = "SELECT ID, LocationId, DayId, StartTime, EndTime FROM Custom.OperationHours WHERE LocationId = 'da4f4609-d76b-41f0-a517-ca525d71c914';" ;
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

<?php
$out = [];
foreach ($data2 as $key => $x) {
  $sub = $x['EndTime'];
  $out[$sub]['DayIds'][] = $x['DayId'];
  $out[$sub]['StartTime'] = $x['StartTime'];
  $out[$sub]['EndTime'] = $x['EndTime'];
  $out[$sub]['LocationId'][] = $x['LocationId'];
}

$final = array_values($out); ?>



<!-- End of API for Operation Hours-->

<div class="all-facilities-hours">
           <?php $monStartTime = date('h:i A', strtotime($final[0]['StartTime'])); ?>
           <?php $monEndTime = date('h:i A', strtotime($final[0]['EndTime'])); ?>
           <?php $satStartTime = date('h:i A', strtotime($final[1]['StartTime'])); ?>
           <?php $satEndTime = date('h:i A', strtotime($final[1]['EndTime'])); ?>
</div>


<!-- Determine if centre is opening or close-->   


<?php

$times = array(
'sun' => $satStartTime . ' - ' . $satEndTime,
'mon' => $monStartTime . ' - ' . $monEndTime,
'tue' => $monStartTime . ' - ' . $monEndTime,
'wed' => $monStartTime . ' - ' . $monEndTime,
'thu' => $monStartTime . ' - ' . $monEndTime,
'fri' => $monStartTime . ' - ' . $monEndTime,
'sat' => $satStartTime . ' - ' . $satEndTime
); ?>


<?php $dt = new DateTime();
$tz = new DateTimeZone('America/Vancouver'); // or whatever zone you're after
$dt->setTimezone($tz);
$now = strtotime($dt->format('h:i A')); 

//Function to Calculate Time Until Closing
$open = isOpen($now, $times); ?>


<?php
$monStart = date('H:i', strtotime($final[0]['StartTime'])); 
$monEnd = date('H:i', strtotime($final[0]['EndTime'])); 
$satStart = date('H:i', strtotime($final[1]['StartTime'])); 
$satEnd = date('H:i', strtotime($final[1]['EndTime'])); 
$timeNow = date('H:i');
?>





<?php if(!empty($final)) { ?>
<?php if ( $open == 0 && $today !== 'sat' && $today !== 'sun' && $timeNow < $monStart) {?>
  <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Closed
  </div>
  <div class="facilities-hours-info regular">
      Open today <?php echo $monStartTime; ?> - <?php echo $monEndTime; ?>
  </div>
<?php }  elseif( $open == 0 && $today !== 'sat' && $today !== 'fri' && $today !== 'sun' && $timeNow >= $monEnd ) { ?>
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
<?php } elseif( $open/60  <= 45 && $open/60 !== 1 && $open > 0 && $today !== 'sat' && $today !== 'sun' ) { ?>
   <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
    Close soon in <?php echo ceil($open/60); ?> minutes
  </div>
  <div class="facilities-hours-info regular">
     Open today <?php echo $monStartTime; ?> - <?php echo $monEndTime; ?>
    </div>
<?php }  elseif( $open/60  == 1 && $today !== 'sat' && $today !== 'sun') { ?>
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
<?php } elseif ( $open/60 > 45 && $today !== 'sat' && $today !== 'sun') { ?>
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
<?php } ?>

<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Closed until further notice
  </div>
<?php } ?>