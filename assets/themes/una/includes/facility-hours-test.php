<!--API FOR LOCATION-->
<?php 
$data;

$data['QueryString'] = "SELECT Name, ID FROM Custom.Location WHERE ( Name = 'Old Barn Community Centre') OR ( Name = 'Wesbrook Community Centre') OR ( Name = 'Wesbrook Fitness Centre') OR ( Name = 'UNA Main Office')";

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
}

$final = array_values($out); ?>
<!-- End of API for Operation Hours-->



<div class="operation-hours-section">
   <h2 class="frontpage-section-headline dashboard-section">Our Facilities</h2>
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="operation-hours-card">
               <div class="top-section">

               <!--Wesbrook Community-->
               <a class="button-link" href="<?php custom_url(); ?>/our-facilities/#single-facility-2">
                  <h3 class="name"><?php echo $data[1]['Name']; ?></h3>  
               </a>
                  <h4 class="category">Community Centre</h4>
                  <?php include('wesbrook-community.php'); ?>

               </div>
               <h4 class="category">Fitness Centre</h4>
               <div class="all-facilities-hours">
           

           <?php $monStartTime = date('h:i A', strtotime($final[0]['StartTime'])); ?>
           <?php $monEndTime = date('h:i A', strtotime($final[0]['EndTime'])); ?>

           <?php $friStartTime = date('h:i A', strtotime($final[1]['StartTime'])); ?>
           <?php $friEndTime = date('h:i A', strtotime($final[1]['EndTime'])); ?>

           <?php $satStartTime = date('h:i A', strtotime($final[2]['StartTime'])); ?>
           <?php $satEndTime = date('h:i A', strtotime($final[2]['EndTime'])); ?>
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


<?php function compileHours($times, $timestamp) {
$times = $times[strtolower(date('D',$timestamp))];
if(!strpos($times, '-')) return array();
$hours = explode(",", $times);
$hours = array_map('explode', array_pad(array(),count($hours),'-'), $hours);
$hours = array_map('array_map', array_pad(array(),count($hours),'strtotime'), $hours, array_pad(array(),count($hours),array_pad(array(),2,$timestamp)));
end($hours);
if ($hours[key($hours)][0] > $hours[key($hours)][1]) $hours[key($hours)][1] = strtotime('+1 day', $hours[key($hours)][1]);
return $hours;
};


//Function to Calculate Time Until Closing




function isOpen($now, $times) {
$open = 0; // time until closing in seconds or 0 if closed
// merge opening hours of today and the day before
$hours = array_merge(compileHours($times, strtotime('yesterday',$now)),compileHours($times, $now)); 

foreach ($hours as $h) {
   if ($now >= $h[0] and $now < $h[1]) {
       $open = $h[1] - $now;
       return $open;
   } 
}
return $open;
}


$dt = new DateTime();
$tz = new DateTimeZone('America/Vancouver'); // or whatever zone you're after
$dt->setTimezone($tz);
$now = strtotime($dt->format('h:i A')); 

//Function to Calculate Time Until Closing
$open = isOpen($now, $times); ?>


<?php
$monStart = date('H:i', strtotime($final[0]['StartTime'])); 
$monEnd = date('H:i', strtotime($final[0]['EndTime'])); 
$friStart = date('H:i', strtotime($final[1]['StartTime'])); 
$friEnd = date('H:i', strtotime($final[1]['EndTime'])); 
$satStart = date('H:i', strtotime($final[2]['StartTime'])); 
$satEnd = date('H:i', strtotime($final[2]['EndTime'])); 
$timeNow = date('H:i');




if(!empty($final)) {
include('wesbrook-fitness.php'); }
else{ ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Closed until further notice
  </div>
<?php }
?>
               
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="operation-hours-card">
               <div class="top-section">
               <a class="button-link" href="<?php custom_url(); ?>/our-facilities/#single-facility-3">
                  <h3 class="name"><?php echo $data[0]['Name']; ?></h3>
               </a>
               <h4 class="category">Community Centre</h4>


               <!--OLD Barn HOURS-->

               <?php include('old-barn-open.php'); ?>
               
              
               <!--end for OLD BARN -->
                </div>
                 <h4 class="category">Fitness Centre</h4>

               
                              <?php include('old-barn-fitness.php'); ?>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="operation-hours-card">
               <div class="top-section">
               <a class="button-link" href="<?php custom_url(); ?>/our-facilities/#single-facility-1">

                  <h3 class="name">UNA Services</h3>
</a>
                  <h4 class="category">Main Office</h4>
                  <?php include('main-office-open.php'); ?>
               </div>
                                 <h4 class="category">Green Depot</h4>
                  <?php include('green-depot-open.php'); ?>

            </div>
         </div>
      </div>
   </div>
   <div class="clearbreak twenty"></div>
   <div class="top_label view-news-button view-events-calendar">
   <div class="center-link paddingbox">
      <a class="button-link" href="<?php custom_url(); ?>/our-facilities">
      <i class="fa fa-angle-right" aria-hidden="true"></i>
         See All Facilities Hours
      </a>
</div><!--center link paddingbox-->
   </div>
   <div class="clearbreak seventy"></div>
</div>