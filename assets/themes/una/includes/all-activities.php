<?php include('spring-season.php') ?>
<?php include('summer-season.php') ?>
<?php include('fall-season.php') ?>
<?php include('winter-season.php') ?>



<?php $gmtNow = date('Y-m-d H:i:s'); ?>




<?php $springStart = '2021-03-29 08:00:00'; ?>

<?php $summerStart = '2021-06-28 08:00:00'; ?>

<?php $displayTime = '2021-03-05 08:00:00'; ?>


<?php if ($gmtNow >= $displayTime && $gmtNow >= $springStart  && $gmtNow < $summerStart) { ?>
   <?php $springAndSummer= array_merge( $springPrograms, $summerPrograms); ?>
<?php } elseif ( $gmtNow >= $displayTime && $gmtNow >= $summerStart){ ?>
  <?php $springAndSummer= array_merge( $summerPrograms); ?>
  <?php } elseif ( $gmtNow >= $displayTime && $gmtNow < $springStart){ ?>
  <?php $springAndSummer= array_merge( $springPrograms, $summerPrograms, $winterPrograms); ?>
<?php } elseif( $gmtNow < $displayTime) { ?>
  <?php $springAndSummer= array_merge( $winterPrograms); ?>
<?php }; ?>




<?php
  $dt = new DateTime();
  $tz = new DateTimeZone('America/Vancouver'); // or whatever zone you're after
  $dt->setTimezone($tz);
  $dateTime= $dt->format('Y-m-d');

  $allPrograms = array();
  $allSeasons = array();
  $allGroups = array();
  $allAvailability = array();
  $allLocations = array();

  foreach ($springAndSummer as $rkey => $resource){
    $brandNewArray[] = $resource;
  }


  // Programs
  for ($i=0; $i < count($brandNewArray); $i++) {
    if(!empty($brandNewArray[$i]['CalendarName'])){
      array_push($allPrograms,$brandNewArray[$i]['CalendarName']);
    }
  }
  $uniquePrograms = array_unique($allPrograms);

  //Seasons
  for ($i=0; $i < count($brandNewArray); $i++) {
    if(!empty($brandNewArray[$i]['Season'])){
      array_push($allSeasons,$brandNewArray[$i]['Season']);
    }
  }
  $uniqueSeasons = array_unique($allSeasons);

  //Capacity
  for ($i=0; $i < count($brandNewArray); $i++) {
    if(!empty($brandNewArray[$i]['Participants'])){
      array_push($allGroups,$brandNewArray[$i]['Participants']);
    }
  }
  $uniqueGroups = array_unique($allGroups);

  //Availability
  for ($i=0; $i < count($brandNewArray); $i++) {
    if(!empty($brandNewArray[$i]['Availability'])){
      array_push($allAvailability,$brandNewArray[$i]['Availability']);
    }
  }
  $uniqueAvailability = array_unique($allAvailability);

  //Location
  for ($i=0; $i < count($brandNewArray); $i++) {
    if(!empty($brandNewArray[$i]['LocationName'])){
      array_push($allLocations,$brandNewArray[$i]['LocationName']);
    }
  }
  $uniqueLocations = array_unique($allLocations);

?>



<!-- Filter -->
<div class="programs-filter">
  <div class="container">
    <div class="row">
      <div class="col-12 programs-filter-title">
        <h2>Our Programs</h2>
        <p><strong>Filter</strong> Programs to focus on your interests</p>
      </div>
    </div>

    <form action="#">
      <div class="row dropdowns">
        <p class="filter-by">Filter By</p>
        <select name="season" id="filter-season">
          <option value="*">All Seasons</option>
          <?php
            foreach ($uniqueSeasons as $season) {
              echo '<option value=".'.slugify($season).'">'. $season. '</option>';
            }
          ?>
        </select>

        <i class="fas fa-plus"></i>
        <select name="season" id="filter-age">
          <option value="*">All Ages</option>
          <option value=".early-years">Early Years</option>
          <option value=".children-youth">Children & Youth</option>
          <option value=".adults-seniors">Adults & Seniors</option>
        </select>

        <i class="fas fa-plus"></i>
        <select name="activity" id="filter-activity">
          <option value="*">All Activities</option>
          <?php
            foreach ($uniquePrograms as $program) {
              echo '<option value=".'.slugify($program).'">'. $program. '</option>';
            }
          ?>
        </select>
      </div>
      <div class="row dropdowns">

        <i class="fas fa-plus"></i>
        <select name="groups" id="filter-groups">
          <option value="*">All Groups</option>
          <?php
            foreach ($uniqueGroups as $group) {
              echo '<option value=".'.slugify($group).'">'. $group. '</option>';
            }
          ?>
        </select>

        <i class="fas fa-plus"></i>
        <select name="space" id="filter-space">
          <option value="*">All Availabilies</option>
          <?php
            foreach ($uniqueAvailability as $availability) {
              echo '<option value=".'.slugify($availability).'">'. $availability. '</option>';
            }
          ?>
        </select>

        <i class="fas fa-plus"></i>
        <select name="location" id="filter-location">
          <option value="*">All Locations</option>
          <?php
            foreach ($uniqueLocations as $location) {
              echo '<option value=".'.slugify($location).'">'. $location. '</option>';
            }
          ?>
        </select>

      </div>

      <div class="row">
        <div class="col-12">
          <p class="choose-days"><i class="fas fa-plus"></i> choose your days</p>
          <div class="day-checks multi-selects">
            <input type="checkbox" id="weekdays" name="weekdays" value=".day-mon .day-tue .day-wed .day-thu .day-fri"><label for="weekdays">Weekdays</label>
            <input type="checkbox" id="weekends" name="weekends" value=".day-sat .day-sun"><label for="weekends">Weekends</label>
          </div>
          <div class="day-checks weekdays">
            <div class="day-checks-wrapper">
              <input type="checkbox" class="weekday" id="monday" name="monday" value=".day-mon">
              <label for="monday">Monday</label>
            </div>
            <div class="day-checks-wrapper">
              <input type="checkbox" class="weekday" id="tuesday" name="tuesday" value=".day-tue">
              <label for="tuesday">Tuesday</label>
            </div>
            <div class="day-checks-wrapper">
             <input type="checkbox" class="weekday" id="wednesday" name="wednesday" value=".day-wed">
             <label for="wednesday">Wednesday</label>
            </div>
            <div class="day-checks-wrapper">
              <input type="checkbox" class="weekday" id="thursday" name="thursday" value=".day-thu">
              <label for="thursday">Thursday</label>
            </div>
            <div class="day-checks-wrapper">
              <input type="checkbox" class="weekday" id="friday" name="friday" value=".day-fri">
              <label for="friday">Friday</label>
            </div>
            <div class="day-checks-wrapper">
              <input type="checkbox" class="weekend" id="saturday" name="saturday" value=".day-sat">
              <label for="saturday">Saturday</label>
            </div>
            <div class="day-checks-wrapper">
              <input type="checkbox" class="weekend" id="sunday" name="sunday" value=".day-sun">
              <label for="sunday">Sunday</label>
            </div>
          </div>
        </div>
      </div>

    </form>
  </div>
</div>


<div class="filtered-programs-section" id="activities_loop_1">
  <div class="toggle-button-container">
    <li class="toggle-program-button" id="grid-button">Grid View</button>
    <li class="toggle-program-button" id="list-button">List View</button>
  </div>

  <!-- Flickity View -->
  <ul class="main-carousel filtered-programs-container">
    <?php for ($i=0; $i < count($brandNewArray); $i++): ?>
      <?php include('single-activities-in-loop.php'); ?>
    <?php endfor; ?>
    <div class="number-results">
      <p><?php echo count($brandNewArray); ?></p>
    </div>
  </ul>

  <!-- List View -->
  <ul class="filtered-programs-container filtered-programs-list-container" style="opacity: 1;">
    <?php for ($i=0; $i < count($brandNewArray); $i++): ?>
      <?php include('single-activities-in-loop-list.php'); ?>
    <?php endfor; ?>
  </ul>

  <div class="no-programs">
  <div class="container">
  <div class="alert-container">
    <div class="alert-icon">
      <img src="<?php custom_url(); ?>/images/attention-icon-plain.svg" class="attention-icon">

    </div>
<?php    $alertText = get_field('no_program_alert_title_programs', 'option');
$alertLink = get_field('no_program_alert_content_programs', 'option'); ?>

    <div class="alert-box">
    <?php if($alertText){ ?>
     <h4>  <?php echo $alertText; } ?> </h4>
          <?php if($alertLink){
        echo $alertLink; } ?>      </div>
  </div>
</div>
</div><!-- end of no programs-->
</div>