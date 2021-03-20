
<?php 
$data2;
$data2['QueryString'] = "SELECT Name, SeasonStartDate FROM Custom.Season WHERE Name = 'Spring' OR Name = 'Summer';" ;
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





       <?php $summerStart = date("Y-m-d", strtotime($data2[1]['SeasonStartDate'])); ?>

<!-- Get all Spring Programs-->

<!-- first API Call for The first 2 Months of Spring Program-->
<?php
$springStart = date("Y-m-d", strtotime($data2[0]['SeasonStartDate'])) ;
$springTwoMonths = date("Y-m-d", strtotime($data2[0]['SeasonStartDate'] . '+ 60 days'));
$springEnding = date("Y-m-d", strtotime($data2[1]['SeasonStartDate'] . '- 1 day'));
?>



<?php
$spring_start = 'https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=' . $springStart . '&endDate=' . $springTwoMonths . '&pageSize=2000';



  $ch = curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => "$spring_start",
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
  $results_array = $array['Result'];
?>
  


  <!-- second API Call for The first 2 Months of Spring Program-->


<?php


$spring_end = 'https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=' . $springTwoMonths . '&endDate=' . $springEnding . '&pageSize=2000';



  $ch = curl_init();
  curl_setopt_array($ch, array(
    CURLOPT_URL => "$spring_end",
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
  $second_results_array = $array['Result'];
?>

<?php $final_array_for_spring= array_merge($results_array,$second_results_array); ?>

<?php
$out = [];
foreach ($final_array_for_spring as $key => $x) {
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

$final = array_values($out); ?>

<!--end of section 1-->


<!-- start to get the data for all calendar events-->
<?php 
$calendar;
$calendar['QueryString'] = "SELECT * FROM Custom.CalendarEvent WHERE ShowTo = 'Public';" ;
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


<!-- the first one is final, the second one is data, merge them and add values from second to first one-->

<?php $arr2 = array_column($calendar, "ID");

$finalArray = array();
foreach($final as $arr){
    $key = array_search($arr['ID'], $arr2);
    if($key ===false){
        $key = array_search(0, $arr2);
    }
    $finalArray[] = array_merge($arr,$calendar[$key]);
}?>


<?php foreach($finalArray as $v) 
    {
        $v['CourseID'] = ltrim($v['EventID'], '0');
        $spring_array[] = $v;
    }; ?>


<?php foreach ($spring_array as $rkey => $resource){
      if ($resource['ShowTo'] == 'Public'){
      $results_spring[] = $resource;
      }?>
<?php }?>

<?php
$newArraySpring = array();
foreach($results_spring as $arr){
   if(!isset($newArraySpring[$arr["CourseID"]])){
    $newArraySpring[$arr["CourseID"]] = $arr;
   }
} ?>


<?php $spacePrograms = array();

foreach($newArraySpring as $v) 
    {
      if ($v['Remaining'] == 0){
        $v['Availability'] = 'Full';
      } else{
        $v['Availability'] = 'Available';
      }
      $spacePrograms[] = $v;
    }; ?>

<?php $modifiedSpringPrograms = array();

foreach($spacePrograms as $v) 
    {
      if ($v['Capacity'] == 1){
        $v['Participants'] = 'Private';
      } else{
        $v['Participants'] = 'Group';
      }
      $modifiedSpringPrograms[] = $v;
    }; ?>

<?php $springPrograms = array();

foreach($modifiedSpringPrograms as $v) 
    {
        $v['Season'] = 'Spring';
        $springPrograms[] = $v;
    };
    
    ?>
    
    <?php $i=0;
foreach($springPrograms as $element) {
   //check the property of every element
     if($element['CalendarCategory'] == 'Indoor Bookings' || $element['CalendarCategory'] == 'Parking' || $element['CalendarName'] == 'UNA Community Field' || $element['EventStatus'] == 3 || $element['CalendarCategory'] == 'Fitness Centre Access' || $element['CalendarName'] == 'Sport Bookings' || $element['Subject'] == 'One-on-One Virtual Computer Help' ){
      unset($springPrograms[$i]);
   }
   $i++;
} ?>

