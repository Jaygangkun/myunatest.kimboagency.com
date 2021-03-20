<?php defined('ABSPATH') or die(""); ?>

<?php get_header(); ?>

<?php 
$data;
$data['QueryString'] = "SELECT LocationId, RecordName FROM Custom.Facility WHERE ( RecordName = 'Wesbrook Fitness Centre') OR ( RecordName = 'Green Depot');";
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
echo '<pre>'; var_dump($data); echo '</pre>'

?>

<?php 
$data2;
$data2['QueryString'] = "SELECT LocationId, StartTime, EndTime FROM Custom.OperationHours WHERE ( LocationId = '1460086f-b904-4373-833b-72f094a08205 ');" ;
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
echo '<pre>'; var_dump($data2); echo '</pre>'

?>


<?php
foreach($data as $key => $value){?>
  <div>
  <?php echo $value['RecordName']; ?>
  </div>
<?php } ?>


<div>Start Time <?php echo $data2[3]['StartTime'] ?></div>

<div>End Time <?php echo $data2[3]['EndTime'] ?></div>





<?php get_footer(); ?>
