
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

<!-- test automatic time-->


<?php foreach($data2 as $v) 
    {
       if( $v['DayId'] == 1 ) {
        $mondayWC[] = $v;
       }
       elseif( $v['DayId'] == 2 ) {
        $tuesdayWC[] = $v;
       }
       elseif( $v['DayId'] == 3 ) {
        $wednesdayWC[] = $v;
       }
       elseif( $v['DayId'] == 4) {
        $thursdayWC[] = $v;
       }
       elseif( $v['DayId'] == 5) {
        $fridayWC[] = $v;
       }
       elseif( $v['DayId'] == 6) {
        $saturdayWC[] = $v;
       }
       elseif( $v['DayId'] == 0) {
        $sundayWC[] = $v;
       }

    }; ?>
<!-- end of test automatic time-->

<div class="operation-hours-card">
               <div class="top-section">

               <h5> Community Centre </h5>



            
<?php if(!empty( $data2 )) { ?>
                 <?php if(!empty( $mondayWC)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Mon: <?php echo date('h:i A', strtotime( $mondayWC[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $mondayWC[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Mon: Closed 
  </div>
<?php } ?>  
 <?php if(!empty( $tuesdayWC)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Tue: <?php echo date('h:i A', strtotime( $tuesdayWC[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $tuesdayWC[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Tue: Closed 
  </div>
<?php } ?>

 <?php if(!empty(  $wednesdayWC)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Wed: <?php echo date('h:i A', strtotime(  $wednesdayWC[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime(  $wednesdayWC[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Wed: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $thursday)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Thu: <?php echo date('h:i A', strtotime( $thursdayWC[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $thursdayWC[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
     Thu: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $fridayWC)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                 Fri: <?php echo date('h:i A', strtotime( $fridayWC[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $fridayWC[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Fri: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $saturdayWC)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Sat: <?php echo date('h:i A', strtotime( $saturdayWC[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $saturdayWC[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Sat: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $sundayWC)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Sun: <?php echo date('h:i A', strtotime( $sundayWC[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $sundayWC[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Sun: Closed 
  </div>
<?php } ?>
<?php } else{ ?>
  <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Closed until further notice
  </div>
<?php } ?>








            