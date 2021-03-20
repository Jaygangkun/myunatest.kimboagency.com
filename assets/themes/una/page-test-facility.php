<?php defined('ABSPATH') or die(""); ?>

<?php get_header(); ?>



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
  
  


   
      
   <pre> 
      <?php var_dump( $results_array ); ?>
   </pre> 
    

<?php get_footer(); ?>