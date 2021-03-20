<?php defined('ABSPATH') or die(""); ?>

<?php get_header(); ?>







<?php



$curl2 = curl_init();



curl_setopt_array($curl2, array(

  CURLOPT_URL => "https://myuna.perfectmind.com/api/2.0/Organizations/24588/Locations",

 // CURLOPT_URL => "https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=2020-1-1&endDate=2020-2-20&pageSize=200",

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



$response2 = curl_exec($curl2);

$err2 = curl_error($curl2);



$data2 = json_decode($response2,true);








//$total=count($data);

//echo $total;

?>


<?php $curl = curl_init();



curl_setopt_array($curl, array(

  CURLOPT_URL => "https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=2020-6-1&endDate=2020-7-30",

 // CURLOPT_URL => "https://myuna.perfectmind.com/api/2.0/B2C/Appointments?startDate=2020-1-1&endDate=2020-2-20&pageSize=200",

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



$response = curl_exec($curl);

$err = curl_error($curl);



curl_close($curl);



if ($err) {

  echo "cURL Error #:" . $err;

} else {

  //echo $response;

}



$data = json_decode($response,true);

//$total=count($data);

//echo $total;

?>

<pre> <?php var_dump($data) ?> </pre>







<?php

$data = json_decode($response,true);

$total=count($data);

//echo "JUST TESTING" . count($data['Result']);



$found = count($data['Result']);

?>

>



<?php get_footer(); ?>