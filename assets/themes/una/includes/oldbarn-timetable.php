            <!--API FOR LOCATION-->
<?php 
$data;

$data['QueryString'] = "SELECT Name, ID FROM Custom.Location WHERE Name = 'Old Barn Community Centre'";

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
$data2['QueryString'] = "SELECT ID, LocationId, DayId, StartTime, EndTime FROM Custom.OperationHours WHERE LocationId = 'e55cf215-d6af-4663-93fa-37acc9ba14c9';" ;
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
        $mondayOC[] = $v;
       }
       elseif( $v['DayId'] == 2 ) {
        $tuesdayOC[] = $v;
       }
       elseif( $v['DayId'] == 3 ) {
        $wednesdayOC[] = $v;
       }
       elseif( $v['DayId'] == 4) {
        $thursdayOC[] = $v;
       }
       elseif( $v['DayId'] == 5) {
        $fridayOC[] = $v;
       }
       elseif( $v['DayId'] == 6) {
        $saturdayOC[] = $v;
       }
       elseif( $v['DayId'] == 0) {
        $sundayOC[] = $v;
       }

    }; ?>
<!-- end of test automatic time-->

<div class="operation-hours-card">
               <div class="top-section">

               <h5> Community Centre </h5>



            
<?php if(!empty( $data2 )) { ?>
                 <?php if(!empty( $mondayOC)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Mon: <?php echo date('h:i A', strtotime( $mondayOC[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $mondayOC[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Mon: Closed 
  </div>
<?php } ?>  
 <?php if(!empty( $tuesdayOC)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Tue: <?php echo date('h:i A', strtotime( $tuesdayOC[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $tuesdayOC[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Tue: Closed 
  </div>
<?php } ?>

 <?php if(!empty(  $wednesdayOC)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Wed: <?php echo date('h:i A', strtotime(  $wednesdayOC[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime(  $wednesdayOC[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Wed: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $thursdayOC)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Thu: <?php echo date('h:i A', strtotime( $thursdayOC[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $thursdayOC[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
     Thu: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $fridayOC)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                 Fri: <?php echo date('h:i A', strtotime( $fridayOC[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $fridayOC[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Fri: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $saturdayOC)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Sat: <?php echo date('h:i A', strtotime( $saturdayOC[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $saturdayOC[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Sat: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $sundayOC)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Sun: <?php echo date('h:i A', strtotime( $sundayOC[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $sundayOC[0]['EndTime'])); ?>
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
