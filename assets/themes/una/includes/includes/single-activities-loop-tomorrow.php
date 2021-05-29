<li>
          <div class="activities-loop event-column">
            <div class="frontpage-card">

              <?php $defaultURL = get_site_url() . "/assets/media/custom_images/una-default-image.png"; ?>
              <?php if( $tomorrowArray[$i]['Image'] ): ?>
                <div class="post_image" style="background-image: url('<?php echo $tomorrowArray[$i]['Image']; ?>');"></div>
              <?php else: ?>
                <div class="post_image" style="background-image: url('<?php echo $defaultURL; ?>');"></div>
              <?php endif; ?>

              <div class="events-content">

                <div class="events-subject">
                  <h3 class="frontpage-card-title"><?php echo mb_strimwidth( $text= $tomorrowArray[$i]['Subject'],  0, 32, '...'); ?></h3>

                  <h4 class="frontpage-card-category">
                  <div class="row">
                  <?php if( $tomorrowArray[$i]['MinimumAge'] && $tomorrowArray[$i]['MaximumAge'] ){ ?>
                    <div class="col-6">
                    <span class="program-number">Ages <?php echo $tomorrowArray[$i]['MinimumAge'];?> - <?php echo $tomorrowArray[$i]['MaximumAge'];?> </span>
                  </div>
                  <div class="col-6">      
                    <span class="program-number"> Prog <?php echo $tomorrowArray[$i]['CourseID'];?></span>
                  </div>
                  <?php } elseif( $tomorrowArray[$i]['MinimumAge']) { ?>

                    <div class="col-6">
                    <span class="program-number">Ages <?php echo $tomorrowArray[$i]['MinimumAge'];?> + </span>
                  </div>
                  <div class="col-6">      
                    <span class="program-number"> Prog <?php echo $tomorrowArray[$i]['CourseID'];?></span>
                  </div>

                  <?php } elseif( $tomorrowArray[$i]['MaximumAge']) { ?>
                    <div class="col-6">
                    <span class="program-number">Ages Under <?php echo $tomorrowArray[$i]['MaximumAge'];?> </span>
                  </div>
                  <div class="col-6">      
                    <span class="program-number"> Prog <?php echo $tomorrowArray[$i]['CourseID'];?></span>
                  </div>
                  <?php } else{ ?>                  
                  <div class="col-1">
                    <i class="fa fa-tag" aria-hidden="true"></i>
                  </div>
                  <div class="col-10">      
                    <span class="program-number"> Prog <?php echo $tomorrow[$i]['CourseID'];?></span>
                  </div>
                  <?php } ?>
                 </div>
                   </h4>

                   <div class="row program-date">
               <div class="col-1">
                  <i class="fa fa-clock-o" aria-hidden="true"></i>  
              </div>          
              <div class="col-10">      

                <?php $uniqueDatesOfWeek = array_unique($tomorrowArray[$i]['DatesOfWeek']); ?>

           <?php  $prefix = $fruitList = ''; ?>

                 <span class="program-date">
                  <?php  foreach ( $uniqueDatesOfWeek as $key => $val) {
                        $fruitList .= $prefix . date('D', strtotime($val));
                         $prefix = ', ';
                   } ?>
                   <?php echo $fruitList; ?>
                   <?php echo $tomorrowArray[$i]['StartTimes'][0]; ?> - <?php echo $tomorrowArray[$i]['EndTimes'][0]; ?>

                   </span>

              
                </div>
            </div>
                </div><!-- .events-subject -->

                <div class="container">
                  <div class="activities-button row">
                     <button class="col-6 details-button selector" rel="tomorrow-details-content-<?php echo $i ?>">Details</button>
                    <button class="col-6 description-button selector" rel="tomorrow-description-content-<?php echo $i ?>">Description</button>
                  </div>
                </div><!-- .container -->

                <div class="description-registration-wrapper">

                <div class="description" id="tomorrow-description-content-<?php echo $i ?>" style="display: none">
                  <?php if ($tomorrowArray[$i]['Description']){ ?>
                    <div class="single-activity-description row">
                      <div class="col-1 single-activity-icon info-icon">
                        <i class="fa fa-info" aria-hidden="true"></i>
                      </div>
                      <div class="col-10 info-detail">
                        <?php echo wp_trim_words( $text= $tomorrowArray[$i]['Description'], $num_words = 20, $more = "..."); ?>
                        <span>Learn More</span>
                      </div>
                    </div>
                  <?php }else{ ?>
                    <div class="single-activity-description row">
                      <div class="col-1 single-activity-icon info-icon">
                        <i class="fa fa-info" aria-hidden="true"></i>
                      </div>
                      <div class="col-10 info-detail">
                            No Description Available
                      </div>
                    </div>

                   <?php } ?>
                </div><!-- .description -->

                <div class="registration" id="tomorrow-details-content-<?php echo $i ?>">

                  <?php if ($tomorrowArray[$i]['LocationName']): ?>
                    <div class="location row">
                      <div class="col-1 single-activity-icon location-icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                      </div>
                      <div class="col-10 location-detail">
                        <?php echo $tomorrowArray[$i]['LocationName']; ?>
                      </div>
                    </div>
                  <?php endif; ?>

                 <?php if ($tomorrowArray[$i]['InstructorName']): ?>
                 <div class="instructor row">
                      <div class="col-1 single-activity-icon instructor-icon">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      </div>
                      <div class="col-10 instructor-detail">
                        Instructor: <strong><?php echo $tomorrowArray[$i]['InstructorName']; ?></strong>
                      </div>
                    </div>
                 <?php endif; ?>

                  <?php if ($tomorrowArray[$i]['Capacity']): ?>
                    <div class="capacity row">
                      <div class="col-1 single-activity-icon capacity-icon">
                      <i class="fa fa-users" aria-hidden="true"></i>
                      </div>
                      <div class="col-10 capacity-detail">
                        <?php echo $tomorrowArray[$i]['Remaining']; ?> spaces available (<?php echo $tomorrowArray[$i]['Capacity']; ?> total)
                      </div>
                    </div>
                  <?php endif; ?>


                  <?php if ($tomorrowArray[$i]['ProgramDates']): ?>
                    <div class="registration-start row">
                      <div class="col-1 single-activity-icon start-date-icon">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                      </div>
                      <div class="col-10 start-date-detail">
                           <?php echo $tomorrowArray[$i]['ProgramDates'][0];  ?> - <?php echo end($tomorrowArray[$i]['ProgramDates']) . ',';  ?>
                           <?php echo count($tomorrowArray[$i]['ProgramDates']) . ' sessions';  ?>
                      </div>
                    </div>
                  <?php endif; ?>


                  
                </div><!-- .registration -->
                </div><!-- details and registration wrapper-->
                <div class="button-wrapper-for-program-loop">
                <?php $eventID = $tomorrowArray[$i]['ID']; ?>
                   <a target="_blank" rel="noopener noreferrer" href="https://myuna.perfectmind.com/Services/BookMe4EventParticipants?eventId=<?php echo $eventID; ?>">
                   <button class="register-button" id="button <?php echo $i; ?>">Register</button>
                </a>
                </div>
              </div><!-- .events.content -->

            </div><!-- .frontpage-card -->
          </div><!-- .activities-loop -->
        </li>