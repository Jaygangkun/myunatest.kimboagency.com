
<!--API FOR LOCATION-->
<?php 
$data;

$data['QueryString'] = "SELECT Name, ID FROM Custom.Location WHERE Name = 'UNA Main Office' ";

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

<!-- test automatic time-->

<?php foreach($data2 as $v) 
    {
       if( $v['DayId'] == 1 ) {
        $monday[] = $v;
       }
       elseif( $v['DayId'] == 2 ) {
        $tuesday[] = $v;
       }
       elseif( $v['DayId'] == 3 ) {
        $wednesday[] = $v;
       }
       elseif( $v['DayId'] == 4) {
        $thursday[] = $v;
       }
       elseif( $v['DayId'] == 5) {
        $friday[] = $v;
       }
       elseif( $v['DayId'] == 6) {
        $saturday[] = $v;
       }
       elseif( $v['DayId'] == 0) {
        $sunday[] = $v;
       }

    }; ?>
<!-- end of test automatic time-->

<div class="operation-hours-card">
               <div class="top-section">
                 <?php if(!empty( $monday)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Mon: <?php echo date('h:i A', strtotime( $monday[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $monday[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Mon: Closed 
  </div>
<?php } ?>  
 <?php if(!empty( $tuesday)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Tue: <?php echo date('h:i A', strtotime( $tuesday[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $tuesday[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Tue: Closed 
  </div>
<?php } ?>

 <?php if(!empty(  $wednesday)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Wed: <?php echo date('h:i A', strtotime(  $wednesday[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime(  $wednesday[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Wed: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $thursday)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Thu: <?php echo date('h:i A', strtotime( $thursday[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $thursday[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
     Thu: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $friday)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                 Fri: <?php echo date('h:i A', strtotime( $friday[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $friday[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Fri: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $saturday)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Sat: <?php echo date('h:i A', strtotime( $saturday[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $saturday[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Sat: Closed 
  </div>
<?php } ?>

 <?php if(!empty( $sunday)) { ?>
                  <div class="facilities-hours-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
                Sun: <?php echo date('h:i A', strtotime( $sunday[0]['StartTime'])); ?> - <?php echo date('h:i A', strtotime( $sunday[0]['EndTime'])); ?>
                </div>       
<?php } else { ?>
   <div class="facilities-hours-info closing-info regular"><i class="fa fa-clock-o" aria-hidden="true"></i>
      Sun: Closed 
  </div>
<?php } ?>



</div>
</div>