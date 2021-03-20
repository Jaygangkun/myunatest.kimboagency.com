<?php defined('ABSPATH') or die(""); ?>

<?php get_header(); ?>



<?php 
$data2;
$data2['QueryString'] = "SELECT Name, SeasonStartDate FROM Custom.Season WHERE Name = 'Fall' OR Name = 'Summer';" ;
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





       <?php $summerStart = date("Y-m-d", strtotime($data2[0]['SeasonStartDate'])); ?>

<!-- Get all Spring Programs-->

<!-- first API Call for The first 2 Months of Spring Program-->
<?php
$springStart = date("Y-m-d", strtotime($data2[1]['SeasonStartDate'])) ;
$springTwoMonths = date("Y-m-d", strtotime($data2[1]['SeasonStartDate'] . '+ 60 days'));
$springEnding = date("Y-m-d", strtotime($data2[0]['SeasonStartDate'] . '- 1 day'));
?>



<?php
$spring_start = 'https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=' . $springStart . '&endDate=' . $springTwoMonths . '&pageSize=1000';



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


$spring_end = 'https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=' . $springTwoMonths . '&endDate=' . $springEnding . '&pageSize=1000';



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

<?php if($second_results_array !== null) { ?>
<?php $final_array_for_spring= array_merge($results_array,$second_results_array); ?>
<?php } else{ ?>
    <?php $final_array_for_spring= $results_array; ?>
<?php } ?>

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
  $out[$sub]['Subject'] = $x['Subject'];
  $out[$sub]['Image'] = $x['Image'];
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
$data;
$data['QueryString'] = "SELECT * FROM Custom.CalendarEvent WHERE ShowTo = 'Public';" ;
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


<!-- the first one is final, the second one is data, merge them and add values from second to first one-->

<?php foreach ($final as &$finalItem) {
    $matchID = $finalItem['ID'];    // Search for this offer_id in array 2
    $match = array_filter($data, function($v) use ($matchID ){
        return $v['ID'] == $matchID;  // Return matching offer id
    });
   $finalItem['CourseID'] = ltrim(current($match)['EventID'], '0'); // Assign matched country to array
   $finalItem['ShowTo'] = current($match)['ShowTo']; // Assign matched country to array
   $finalItem['MinimumAge'] = current($match)['MinimumAge']; // Assign matched country to array
   $finalItem['MaximumAge'] = current($match)['MaximumAge']; // Assign matched country to array
} ?>

<?php foreach ($final as $rkey => $resource){
      if ($resource['ShowTo'] == 'Staff'){
      $results[] = $resource;
      }?>
<?php }?>


<?php
$newArray = array();
foreach($final as $arr){
   if(!isset($newArray[$arr["CourseID"]])){
    $newArray[$arr["CourseID"]] = $arr;
   }
} ?>

<?php $summerPrograms = array();

foreach($newArray as $v) 
    {
        $v['Season'] = 'Summer';
        $summerPrograms[] = $v;
    }; ?>

<pre>
<?php var_dump($data); ?>

</pre>



<?php get_footer(); ?>