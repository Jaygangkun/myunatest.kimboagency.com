
<?php 
$data;
$data['QueryString'] = "SELECT ID, RecordName, LocationId FROM Custom.Facility WHERE RecordName = 'Wesbrook Fitness Centre' ;";
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


<!--sort our monday to sunday values -->

<?php foreach ($data2 as $rkey => $resource){
    if ($resource['DayId'] == '0'){
        $mon[] = $resource;
    } else if ($resource['DayId'] == '1') {
        $tue[] = $resource;
  } else if ($resource['DayId'] == '2') {
        $wed[] = $resource;
}
else if ($resource['DayId'] == '3') {
    $thu[] = $resource;
}
else if ($resource['DayId'] == '4') {
    $fri[] = $resource;
}
else if ($resource['DayId'] == '5') {
    $sat[] = $resource;
}
else if ($resource['DayId'] == '6') {
    $sun[] = $resource;
}
}?>





<?php usort($tue, function($a, $b) {
$ad = date('h:iA', strtotime($a['EndTime']));
$bd = date('h:iA', strtotime($b['EndTime']));
  if ($ad == $bd) {
    return 0;
  }
  return $ad < $bd ? -1 : 1;
}); ?>


<?php usort($wed, function($a, $b) {
$ad = date('h:iA', strtotime($a['EndTime']));
$bd = date('h:iA', strtotime($b['EndTime']));
  if ($ad == $bd) {
    return 0;
  }
  return $ad < $bd ? -1 : 1;
}); ?>

<?php usort($thu, function($a, $b) {
$ad = date('h:iA', strtotime($a['EndTime']));
$bd = date('h:iA', strtotime($b['EndTime']));
  if ($ad == $bd) {
    return 0;
  }
  return $ad < $bd ? -1 : 1;
}); ?>

<?php usort($fri, function($a, $b) {
$ad = date('h:iA', strtotime($a['EndTime']));
$bd = date('h:iA', strtotime($b['EndTime']));
  if ($ad == $bd) {
    return 0;
  }
  return $ad < $bd ? -1 : 1;
}); ?>

<?php usort($sat, function($a, $b) {
$ad = date('h:iA', strtotime($a['EndTime']));
$bd = date('h:iA', strtotime($b['EndTime']));
  if ($ad == $bd) {
    return 0;
  }
  return $ad < $bd ? -1 : 1;
}); ?>


Wesbrook Fitness Centre

<div>
Mon, Sun : <?php  echo date('h:i A',  strtotime($mon[0]['StartTime'])); ?> - <?php echo date('h:iA',  strtotime($mon[0]['EndTime'])); ?>
</div>

<div>
Tue - Fri : <?php  echo date('h:i A',  strtotime($tue[1]['StartTime'])); ?> - <?php echo date('h:iA',  strtotime($tue[1]['EndTime'])); ?>
</div>

<div>
Sat : <?php  echo date('h:i A',  strtotime($sat[1]['StartTime'])); ?> - <?php echo date('h:iA',  strtotime($sat[1]['EndTime'])); ?>
</div>