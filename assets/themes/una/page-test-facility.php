<?php defined('ABSPATH') or die(""); ?>

<?php get_header(); ?>

<?php include('includes/spring-season'); ?>

<!-- start to get the data for all calendar events-->
<?php 
$calendar;
$calendar['QueryString'] = "SELECT * FROM Custom.CalendarEvent WHERE Subject = 'UBC Softball - Practices - Fall 2021';" ;
$handle = curl_init();

$url = "https://myuna.perfectmind.com/api/2.0/B2C/Query";

curl_setopt_array($handle,
  array(
    CURLOPT_URL            => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => 
    json_encode($calendar),
    CURLOPT_HTTPHEADER => array(
      "X-Access-Key: 5I8bxF2WG9nFZ0rf5zxW3tGlN0aSJDr9",
      "X-Client-Number: 24588",
      "Content-Type: application/json"
    ),
  )
);

echo curl_error($handle);

$output = curl_exec($handle);
$calendar = json_decode($output,true);
curl_close($handle);
?>

<pre>
    AAAA <?php var_dump($calendar); ?>
</pre>





<?php 
$data3;
$data3['QueryString'] = "SELECT Name, SeasonStartDate FROM Custom.Season WHERE Name = 'Fall' OR Name = 'Winter';" ;
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





       <?php  $fallStart = date("Y-m-d", strtotime($data3[2]['SeasonStartDate'])); ?>

<!-- Get all Spring Programs-->

<!-- first API Call for The first 2 Months of Spring Program-->
<?php
 $summerStart = date("Y-m-d", strtotime($data3[2]['SeasonStartDate'])) ;
 $summerTwoMonths = date("Y-m-d", strtotime($data3[2]['SeasonStartDate'] . '+ 60 days'));
 $summerEnding = date("Y-m-d", strtotime($data3[2]['SeasonStartDate'] . '+ 120 days'));
?>



<?php
$summer_start = 'https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=' . $summerStart . '&endDate=' . $summerTwoMonths . '&pageSize=2000';



  $ch = curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => "$summer_start",
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
  $fall_results_array = $array['Result'];
?>
  


  <!-- second API Call for The first 2 Months of Spring Program-->


<?php


$summer_end = 'https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=' . $summerTwoMonths . '&endDate=' . $summerEnding . '&pageSize=2000';



  $ch = curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => "$summer_end",
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
  $fall_second_results_array = $array['Result'];
?>

<?php if($fall_second_results_array !== null) { ?>
<?php $final_array_for_fall= array_merge($fall_results_array,$fall_second_results_array); ?>
<?php } else{ ?>
    <?php $final_array_for_fall= $fall_results_array; ?>
<?php } ?>

<?php
$out = [];
foreach ($final_array_for_fall as $key => $x) {
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

$final_fall = array_values($out); ?>

<!--end of section 1-->




<?php $arr2 = array_column($calendar, "ID");

$finalArray = array();
foreach($final_fall as $arr){
    $key = array_search($arr['ID'], $arr2);
    if($key ===false){
        $key = array_search(0, $arr2);
    }
    $finalArray[] = array_merge($arr,$calendar[$key]);
}?>


<?php foreach($finalArray as $v) 
    {
        $v['CourseID'] = ltrim($v['EventID'], '0');
        $fall_array[] = $v;
    }; ?>


<?php foreach ($fall_array as $rkey => $resource){
      if ($resource['ShowTo'] == 'Public'){
      $results_fall[] = $resource;
      }?>
<?php }?>

<?php
$newArrayFall = array();
foreach($results_fall as $arr){
   if(!isset($newArrayFall[$arr["CourseID"]])){
    $newArrayFall[$arr["CourseID"]] = $arr;
   }
} ?>


<?php $spacePrograms = array();

foreach($newArrayFall as $v) 
    {
      if ($v['Remaining'] == 0){
        $v['Availability'] = 'Full';
      } else{
        $v['Availability'] = 'Available';
      }
      $spacePrograms[] = $v;
    }; ?>

<?php $modifiedFallPrograms = array();

foreach($spacePrograms as $v) 
    {
      if ($v['Capacity'] == 1){
        $v['Participants'] = 'Private';
      } else{
        $v['Participants'] = 'Group';
      }
      $modifiedFallPrograms[] = $v;
    }; ?>

<?php $fallPrograms = array();

foreach($modifiedFallPrograms as $v) 
    {
        $v['Season'] = 'Fall';
        $fallPrograms[] = $v;
    }; ?>





<?php $i=0;
foreach($fallPrograms as $element) {
   //check the property of every element
     if($element['CalendarCategory'] == 'Indoor Bookings' || $element['CalendarCategory'] == 'Parking' || $element['CalendarName'] == 'UNA Community Field' || $element['EventStatus'] == 3 || $element['CalendarCategory'] == 'Fitness Centre Access' || $element['CalendarName'] == 'Sport Bookings'|| $element['Subject'] == 'One-on-One Virtual Computer Help' || $element['CalendarName'] == 'Parks'|| $element['CalendarName'] == 'Outdoor Bookings'|| $element['CalendarName'] == 'Sports Fields'|| $element['CalendarName'] == 'Volunteer' || $element['Subject'] == 'One-on-One Computer Help | Virtual' || $element['Subject'] == "Seniors'  One-on-One Computer Help | In-person" || $element['CalendarCategory'] == 'Outdoor Bookings' ){
      unset($fallPrograms[$i]);
   }
   $i++;
} ?>

<pre>
    <?php var_dump($fallPrograms); ?>
</pre>

<?php get_footer(); ?>