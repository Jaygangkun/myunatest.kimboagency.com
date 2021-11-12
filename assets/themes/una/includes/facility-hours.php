

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

?>





<div class="operation-hours-section">
   <h2 class="frontpage-section-headline dashboard-section">Our Facilities</h2>
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="operation-hours-card">
               <div class="top-section">
               <a class="button-link" href="<?php custom_url(); ?>/our-facilities/#single-facility-2">
                  <h3 class="name"><?php echo $data[1]['Name']; ?></h3>
               </a>
                  <h4 class="category">Community Centre</h4>

                  <div class="facilities-hours-info open"><i class="fa fa-clock-o" aria-hidden="true"></i>
Open for Limited Services</div>
               </div>
               <h4 class="category">Fitness Centre</h4>
               <div class="facilities-hours-info open"><i class="fa fa-clock-o" aria-hidden="true"></i>
Open for Limited Services</div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="operation-hours-card">
               <div class="top-section">
               <a class="button-link" href="<?php custom_url(); ?>/our-facilities/#single-facility-3">

                  <h3 class="name"><?php echo $data[0]['Name']; ?></h3>
</a>
                  <h4 class="category">Community Centre</h4>

                  <div class="facilities-hours-info open"><i class="fa fa-clock-o" aria-hidden="true"></i>
Open for Limited Services</div>
                </div>
                <h4 class="category">Fitness Centre</h4>
               <div class="facilities-hours-info open"><i class="fa fa-clock-o" aria-hidden="true"></i>
Open for Limited Services</div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="operation-hours-card">
               <div class="top-section">
               <a class="button-link" href="<?php custom_url(); ?>/our-facilities/#single-facility-1">

                  <h3 class="name">UNA Services</h3>
</a>
                  <h4 class="category">Main Office</h4>

                  <div class="facilities-hours-info open"><i class="fa fa-clock-o" aria-hidden="true"></i>
Open for Limited Services</div>

               </div>
               <h4 class="category">Green Depot</h4>

                  <div class="facilities-hours-info open"><i class="fa fa-clock-o" aria-hidden="true"></i>
Open for Limited Services</div>
            </div>
         </div>
      </div>
   </div>
   <div class="clearbreak twenty"></div>
   <div class="top_label view-news-button view-events-calendar">
   <div class="center-link paddingbox">
      <a class="button-link" href="<?php custom_url(); ?>/our-facilities">
      <i class="fa fa-angle-right" aria-hidden="true"></i>
         See All Facilities Hours
      </a>
</div><!--center link paddingbox-->
   </div>
   <div class="clearbreak seventy"></div>
</div>