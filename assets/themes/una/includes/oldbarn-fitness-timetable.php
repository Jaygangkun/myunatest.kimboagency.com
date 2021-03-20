<!--API FOR LOCATION-->
<?php 
$data;

$data['QueryString'] = "SELECT Name, ID FROM Custom.Location WHERE Name = 'Old Barn Fitness Center";

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
$data2['QueryString'] = "SELECT ID, LocationId, DayId, StartTime, EndTime FROM Custom.OperationHours WHERE LocationId = 'ff20ffa7-1bfb-4bea-8eb2-8ba3fa9960b9';" ;
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
        $mondayOF[] = $v;
       }
       elseif( $v['DayId'] == 2 ) {
        $tuesdayOF[] = $v;
       }
       elseif( $v['DayId'] == 3 ) {
        $wednesdayOF[] = $v;
       }
       elseif( $v['DayId'] == 4) {
        $thursdayOF[] = $v;
       }
       elseif( $v['DayId'] == 5) {
        $fridayOF[] = $v;
       }
       elseif( $v['DayId'] == 6) {
        $saturdayOF[] = $v;
       }
       elseif( $v['DayId'] == 0) {
        $sundayOF[] = $v;
       }

    }; ?>
<!-- end of test automatic time-->


               <h5> Fitness Centre </h5>
            
<?php if(!empty( $data2 )) { ?>
                 <?php if(!empty( $mondayOF)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Mon: <?php echo date('h:i A', strtotime( $mondayOF[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $mondayOF[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Mon: Closed 
  </div>
<?php } ?>  
 <?php if(!empty( $tuesdayOF)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Tue: <?php echo date('h:i A', strtotime( $tuesdayOF[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $tuesdayOF[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Tue: Closed 
  </div>
<?php } ?>

 <?php if(!empty(  $wednesdayOF)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Wed: <?php echo date('h:i A', strtotime(  $wednesdayOF[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime(  $wednesdayOF[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Wed: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $thursdayOF)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Thu: <?php echo date('h:i A', strtotime( $thursdayOF[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $thursdayOF[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
     Thu: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $fridayOF)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                 Fri: <?php echo date('h:i A', strtotime( $fridayOF[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $fridayOF[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Fri: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $saturdayOF)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Sat: <?php echo date('h:i A', strtotime( $saturdayOF[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $saturdayOF[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Sat: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $sundayOF)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Sun: <?php echo date('h:i A', strtotime( $sundayOF[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $sundayOF[0]['EndTime'])); ?>
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
</div>
</div>
                
         