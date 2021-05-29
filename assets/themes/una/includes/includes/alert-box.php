<?php
  $alertShow = get_field('do_you_want_to_turn_on_alert');
  $alertTitle = get_field('alert_title');
  $alertContent = get_field('alert_content');
  $alertStartDate = get_field('start_date');
  $alertEndDate = get_field('end_date');
  $today = date("d/m/Y");
  if($alertStartDate) {
    $showDate = $alertStartDate;
  } else {
    $showDate = $today;
  }
  if($alertEndDate) {
    $hideDate = $alertEndDate;
  } else {
    $hideDate = date('d/m/Y', strtotime('+1 year'));
  }
?>

<!-- Alert Show needs to be YES, and Todays date needs to be before or the same as end date. -->
<?php if($alertShow == "yes" && $today >= $showDate && $today <= $hideDate ): ?>
  <div class="container page-alert alert-big-container" data-cookie="una-alert-<?php echo sanitize_title($alertTitle) ?>">
    <div class="alert-container">
      <div class="alert-icon">
        <img src="<?php custom_url(); ?>/images/attention-icon-plain.svg" class="attention-icon">
      </div>
      <div class="alert-box">
        <?php if($alertTitle) : ?><h2><?php echo $alertTitle; ?></h2><?php endif; ?>
        <?php if($alertContent) : ?><?php echo $alertContent; ?><?php endif; ?>
        <button class="alert-close" data-cookie="una-alert-<?php echo sanitize_title($alertTitle) ?>"><i class="fas fa-times"></i></button>
      </div>
    </div>
  </div>
<?php endif; ?>