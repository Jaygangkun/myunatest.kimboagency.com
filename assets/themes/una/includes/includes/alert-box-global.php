<?php
  $today = date("d/m/Y");
  if( have_rows('global_alert_messages', 'option') ):
?>

  <div class="global-alert-container">

    <?php while( have_rows('global_alert_messages', 'option') ): the_row();
      // vars
      $alertText = get_sub_field('global_alert_text', 'option');
      $alertLink = get_sub_field('global_alert_link', 'option');
      $alertIcon = get_sub_field('global_alert_icon', 'option');
      $alertStartDate = get_sub_field('global_alert_start_date', 'option');
      $alertEndDate = get_sub_field('global_alert_end_date', 'option');
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
      <?php if($today >= $showDate && $today <= $hideDate ): ?>
        <div class="global-alert" data-cookie="una-alert-<?php echo get_row_index(); ?>">
          <div class="alert-icon">
            <?php if ($alertIcon == "highpriority") : ?>
              <i class="fas fa-exclamation-triangle"></i>
            <?php else : ?>
              <img src="<?php custom_url(); ?>/images/attention-icon-plain.svg" class="attention-icon">
            <?php endif; ?>
          </div>
          <div class="alert-box">
            <?php if($alertText) : ?><?php echo $alertText; ?><?php endif; ?>
            <?php if($alertLink) : ?>
              <?php $linkTarget = $alertLink['target'] ? $alertLink['target'] : '_self'; ?>
              <a href="<?php echo esc_url( $alertLink['url'] ); ?>" target="<?php echo esc_attr( $linkTarget ); ?>"><?php echo $alertLink['title']; ?></a>
            <?php endif; ?>
            <button class="alert-close" data-cookie="una-alert-<?php echo get_row_index(); ?>">
            <i class="fas fa-times"></i></button>
          </div>
        </div>
      <?php endif; ?>

    <?php endwhile; ?>
  </div>
<?php endif; ?>