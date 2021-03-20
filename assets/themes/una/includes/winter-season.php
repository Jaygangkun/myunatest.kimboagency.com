
<?php 
$data3;
$data3['QueryString'] = "SELECT Name, SeasonStartDate FROM Custom.Season WHERE Name = 'Winter';" ;
$handle = curl_init();

$dateUrl = "https://myuna.perfectmind.com/api/2.0/B2C/Query";

curl_setopt_array($handle,
  array(
    CURLOPT_URL            => $dateUrl,
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





       <?php  $winterStart = date("Y-m-d", strtotime($data3[0]['SeasonStartDate'])); ?>

<!-- Get all Spring Programs-->

<!-- first API Call for The first 2 Months of Spring Program-->
<?php
 $winterTwoMonths = date("Y-m-d", strtotime($data3[0]['SeasonStartDate'] . '+ 60 days'));
 $winterEnding = date("Y-m-d", strtotime($data3[0]['SeasonStartDate'] . '+ 83 days'));
?>




<?php
$winter_start = 'https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=' . $winterStart . '&endDate=' . $winterTwoMonths . '&pageSize=2000';



  $ch = curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => "$winter_start",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "X-Access-Key: 5I8bxF2WG9nFZ0rf5zxW3tGlN0aSJDr9",
      "X-Client-Number: 24588"
    ),
  ));

  $response = curl_exec($ch);
  curl_close($ch);
  $array = json_decode($response,true);
  $winter_results_array = $array['Result'];
?>
  


  <!-- second API Call for The first 2 Months of Spring Program-->


<?php


$winter_end = 'https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=' . $winterTwoMonths . '&endDate=' . $winterEnding . '&pageSize=2000';



  $ch = curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => "$winter_end",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "X-Access-Key: 5I8bxF2WG9nFZ0rf5zxW3tGlN0aSJDr9",
      "X-Client-Number: 24588"
    ),
  ));

  $response = curl_exec($ch);
  curl_close($ch);
  $array = json_decode($response,true);
  $winter_second_results_array = $array['Result'];
?>

<?php if($winter_second_results_array !== null) { ?>
<?php $final_array_for_winter= array_merge($winter_results_array,$winter_second_results_array); ?>
<?php } else{ ?>
    <?php $final_array_for_winter= $winter_results_array; ?>
<?php } ?>

<?php
$out = [];
foreach ($final_array_for_winter as $key => $x) {
  $sub = $x['ID'];
  $out[$sub]['StartTimes'][] = date('h:iA', strtotime(mb_strimwidth( $text= $x['StartTime'],  0, 19)));
  $out[$sub]['EndTimes'][] = date('h:iA', strtotime(mb_strimwidth( $text= $x['EndTime'],  0, 19)));
  $out[$sub]['DatesOfWeek'][] =  date('D', strtotime(mb_strimwidth( $text= $x['StartTime'],  0, 19)));
  $out[$sub]['StartTimesInDate'][] = date('Y-m-d', strtotime(mb_strimwidth( $text= $x['StartTime'],  0, 19)));
  $out[$sub]['ExactTimes'][] = date('Y-m-d h:iA', strtotime(mb_strimwidth( $text= $x['StartTime'],  0, 19)));
  $out[$sub]['ProgramDates'][] = date('M d', strtotime(mb_strimwidth( $text= $x['StartTime'],  0, 19)));
  $out[$sub]['RegistrationEndDate'][] = date('Y-m-d', strtotime(mb_strimwidth( $text= $x['RegistrationEndDate'],  0, 19)));
  $out[$sub]['RegistrationStartDateOriginal'][] = date('Y-m-d', strtotime(mb_strimwidth( $text= $x['RegistrationStartDate'],  0, 19)));

  $out[$sub]['Subject'] = $x['Subject'];
  $out[$sub]['ImageOriginal'] = $x['Image'];
  $out[$sub]['CalendarName'] = $x['CalendarName'];
  $out[$sub]['Program'] = $x['Program'];
  $out[$sub]['CalendarCategory'] = $x['CalendarCategory'];
  $out[$sub]['Description'] = $x['Description'];
  $out[$sub]['LocationName'] = $x['LocationName'];
  $out[$sub]['InstructorName'] = $x['InstructorName'];
  $out[$sub]['Capacity'] = $x['Capacity'];
  $out[$sub]['Remaining'] = $x['Remaining'];
  $out[$sub]['ID'] = $x['ID'];
}

$final_winter = array_values($out); ?>

<!--end of section 1-->


<!-- start to get the data for all calendar events-->

<!-- the first one is final, the second one is data, merge them and add values from second to first one-->

<?php $arr2 = array_column($calendar, "ID");

$finalArray = array();
foreach($final_winter as $arr){
    $key = array_search($arr['ID'], $arr2);
    if($key ===false){
        $key = array_search(0, $arr2);
    }
    $finalArray[] = array_merge($arr,$calendar[$key]);
}?>


<?php foreach($finalArray as $v) 
    {
        $v['CourseID'] = ltrim($v['EventID'], '0');
        $winter_array[] = $v;
    }; ?>


<?php foreach ($winter_array as $rkey => $resource){
      if ($resource['ShowTo'] == 'Public'){
      $results_winter[] = $resource;
      }?>
<?php }?>

<?php
$newArrayWinter = array();
foreach($results_winter as $arr){
   if(!isset($newArrayWinter[$arr["CourseID"]])){
    $newArrayWinter[$arr["CourseID"]] = $arr;
   }
} ?>


<?php $spacePrograms = array();

foreach($newArrayWinter as $v) 
    {
      if ($v['Remaining'] == 0){
        $v['Availability'] = 'Full';
      } else{
        $v['Availability'] = 'Available';
      }
      $spacePrograms[] = $v;
    }; ?>

<?php $modifiedWinterPrograms = array();

foreach($spacePrograms as $v) 
    {
      if ($v['Capacity'] == 1){
        $v['Participants'] = 'Private';
      } else{
        $v['Participants'] = 'Group';
      }
      $modifiedWinterPrograms[] = $v;
    }; ?>

<?php $winterPrograms = array();

foreach($modifiedWinterPrograms as $v) 
    {
        $v['Season'] = 'Winter';
        $winterPrograms[] = $v;
    }; ?>