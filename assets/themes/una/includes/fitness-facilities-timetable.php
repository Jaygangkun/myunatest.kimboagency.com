<!--API FOR LOCATION-->
<?php 
$data;

$data['QueryString'] = "SELECT Name, ID FROM Custom.Location WHERE Name = 'Wesbrook Fitness Centre";

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
$data2['QueryString'] = "SELECT ID, LocationId, DayId, StartTime, EndTime FROM Custom.OperationHours WHERE LocationId = '46032701-b7d1-4476-b845-ac2d1c4f5eea';" ;
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
        $mondayWF[] = $v;
       }
       elseif( $v['DayId'] == 2 ) {
        $tuesdayWF[] = $v;
       }
       elseif( $v['DayId'] == 3 ) {
        $wednesdayWF[] = $v;
       }
       elseif( $v['DayId'] == 4) {
        $thursdayWF[] = $v;
       }
       elseif( $v['DayId'] == 5) {
        $fridayWF[] = $v;
       }
       elseif( $v['DayId'] == 6) {
        $saturdayWF[] = $v;
       }
       elseif( $v['DayId'] == 0) {
        $sundayWF[] = $v;
       }

    }; ?>
<!-- end of test automatic time-->


               <h5> Fitness Centre </h5>
            
<?php if(!empty( $data2 )) { ?>
                 <?php if(!empty( $mondayWF)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Mon: <?php echo date('h:i A', strtotime( $mondayWF[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $mondayWF[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Mon: Closed 
  </div>
<?php } ?>  
 <?php if(!empty( $tuesdayWF)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Tue: <?php echo date('h:i A', strtotime( $tuesdayWF[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $tuesdayWF[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Tue: Closed 
  </div>
<?php } ?>

 <?php if(!empty(  $wednesdayWF)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Wed: <?php echo date('h:i A', strtotime(  $wednesdayWF[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime(  $wednesdayWF[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Wed: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $thursdayWF)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Thu: <?php echo date('h:i A', strtotime( $thursdayWF[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $thursdayWF[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
     Thu: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $fridayWF)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                 Fri: <?php echo date('h:i A', strtotime( $fridayWF[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $fridayWF[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Fri: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $saturdayWF)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Sat: <?php echo date('h:i A', strtotime( $saturdayWF[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $saturdayWF[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Sat: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $sundayWF)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Sun: <?php echo date('h:i A', strtotime( $sundayWF[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $sundayWF[0]['EndTime'])); ?>
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
  