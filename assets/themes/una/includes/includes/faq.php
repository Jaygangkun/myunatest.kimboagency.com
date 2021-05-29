<div class="parking-container faq">
  <div class="container">
    <div class="row all-centers">
      <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
        <?php if(get_field('faq_section_label')){ ?>
          <div class="first-column-content parking-map-section">
            <h2 class="single-article-title"><?php the_field('faq_section_label'); ?></h2>
          </div>
        <?php } ?>

        <?php if( have_rows('faq_repeater') ): ?>
          <ul class="green-depot-faq">
            <?php  $z = 1; ?>
              <?php while ( have_rows('faq_repeater') ) : the_row(); ?>
              <li class="water-reduction-selector green-depot-question-<?php echo $z; ?>">
                <div class="question">
                    <div class="question-content">
                  <?php if(get_sub_field('faq_question')){ ?>
                    <?php the_sub_field('faq_question'); ?>
                  <?php } ?>
                  </div>
                  <i class="fas fa-chevron-down"></i>
                </div>
                <div class="answer">
                  <?php if(get_sub_field('faq_answer')){ ?>
                  <?php the_sub_field('faq_answer'); ?>
                  <?php } ?>
                </div>
              </li>
              <?php  $z++; ?>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>