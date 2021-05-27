<?php defined('ABSPATH') or die(""); ?>

<?php get_header(); ?>


<?php 
$data;
$data['QueryString'] = "SELECT Name, ID FROM Custom.Location WHERE ( Name = 'Old Barn Community Centre') OR ( Name = 'Wesbrook Community Centre') OR ( Name = 'Wesbrook Fitness Centre') OR ( Name = 'UNA Main Office')";
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
$data2['QueryString'] = "SELECT * FROM Custom.OperationHours WHERE ( LocationId = '1460086f-b904-4373-833b-72f094a08205 ') OR ( LocationId = 'e55cf215-d6af-4663-93fa-37acc9ba14c9') OR ( LocationId = 'da4f4609-d76b-41f0-a517-ca525d71c914') OR ( LocationId = '7b79b1f2-2b7d-41fe-b7ea-cb6c489ae824') ;" ;
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

<?php get_footer(); ?>