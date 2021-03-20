
<!--API FOR LOCATION-->
<?php 
$data;

$data['QueryString'] = "SELECT Name, ID FROM Custom.Location WHERE Name = 'UNA Main Office'";

$handle = curl_init();

$url = "https://myuna.perfectmind.com/api/2.0/B2C/Query";

curl_setopt_array($handle,
  array(
    CURLOPT_URL            => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => 
    json_encode($data),
    CURLOPT_HTTPHEADER => array(
      "X-Access-Key: 5I8bxF2WG9nFZ0rf5zxW3tGlN0aSJDr9",
      "X-Client-Number: 24588",
      "Content-Type: application/json"
    ),
  )
);

echo curl_error($handle);

$output = curl_exec($handle);
$data = json_decode($output,true);
curl_close($handle);
?>
<!-- End of API for Location-->

<!-- Start of API For Operation hours-->
<?php 
$data2;
$data2['QueryString'] = "SELECT ID, LocationId, DayId, StartTime, EndTime FROM Custom.OperationHours WHERE LocationId = '7b79b1f2-2b7d-41fe-b7ea-cb6c489ae824';" ;
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


<!-- End of API for Operation Hours-->
<div class="all-facilities-hours">
           <?php $monStartTime = date('h:i A', strtotime($data2[1]['StartTime'])); ?>
           <?php $monEndTime = date('h:i A', strtotime($data2[1]['EndTime'])); ?>
</div>


<!-- Determine if centre is opening or close-->   


<?php

$times = array(
'sun' => '',
'mon' => $monStartTime . ' - ' . $monEndTime,
'tue' => $monStartTime . ' - ' . $monEndTime,
'wed' => $monStartTime . ' - ' . $monEndTime,
'thu' => $monStartTime . ' - ' . $monEndTime,
'fri' => $monStartTime . ' - ' . $monEndTime,
'sat' => ''
);

$dt = new DateTime();
$tz = new DateTimeZone('America/Vancouver'); // or whatever zone you're after
$dt->setTimezone($tz);
$now = strtotime($dt->format('h:i A'));


//Function to Calculate Time Until Closing
$open = isOpen($now, $times); ?>


<?php
$monStart = date('H:i', strtotime($data2[1]['StartTime'])); 
$monEnd = date('H:i', strtotime($data2[1]['EndTime'])); 
$timeNow = date('H:i');
?>


<?php if(!empty($data2)) { ?>

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
       Closed till Monday
   </div>
   <div class="facilities-hours-info regular">
       Open Monday <?php echo $monStartTime; ?> - <?php echo $monEndTime; ?>
   </div>
<?php } elseif( $open == 0 && $today == 'sat') { ?>
    <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
       Closed till Monday
   </div>
   <div class="facilities-hours-info regular">
       Open Monday <?php echo $monStartTime; ?> - <?php echo $monEndTime; ?>
   </div>
<?php } elseif( $open == 0 && $today == 'sun') { ?>
    <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
       Closed till Monday 
   </div>
   <div class="facilities-hours-info regular">
       Open Monday <?php echo $monStartTime; ?> - <?php echo $monEndTime; ?>
   </div>
<?php } elseif( $open/60  <= 45 && $open/60 !== 1 && $open > 0) { ?>
    <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
     Close soon in <?php echo ceil($open/60); ?> minutes
   </div>
   <div class="facilities-hours-info regular">
   Open today <?php echo $monStartTime; ?> - <?php echo $monEndTime; ?>
     </div>
<?php }  elseif( $open/60  == 1) { ?>
    <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
       Close soon in 1 minute
   </div>
   <div class="facilities-hours-info regular">
       Open today <?php echo $monStartTime; ?> - <?php echo $monEndTime; ?>
   </div>
<?php } elseif ( $open/60 > 45 && $today !== 'sat' && $today !== 'sun') { ?>
<div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
   Open Now 
</div>
<div class="facilities-hours-info regular">
   Open today <?php echo $monStartTime; ?> - <?php echo $monEndTime; ?>
</div>
<?php } ?>


<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Closed until further notice
  </div>
<?php } ?>