<?php
/* Template Name: Fullpage scroll template (RU) */
/* Template Author: Konstantin Golosov <kongol.ml@gmail.com> */
get_header(); ?>

  <section id="fullpage">

          <article class="intro section">
            <div class="container">
              <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-12 col-md-offset-0">
                  <div class="col-xs-12 col-md-5">

                    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('text_slider') ) { ?>

                      <div class="owl-carousel">

                        <?php  
                          // loop through the rows of data
                          while ( have_rows('text_slider') ) : the_row();

                              ?>

                                <div class="item">
                                  <p class="title">
                                    <?php the_sub_field('slide_title'); ?>
                                  </p>
                                  <p class="description">
                                    <?php the_sub_field('slide_body'); ?>
                                  </p>
                                  <a href="#" class="link">learn more</a>
                                </div><!-- item -->

                              <?php

                          endwhile;
                        ?>

                      </div><!-- owl-carousel -->

                    <?php 
                      }
                    ?>
                    
                  </div><!-- col-xs-12 -->
                </div><!-- col-xs-10 -->
              </div><!-- row -->
            </div><!-- container -->
          </article><!-- intro -->

          <article class="services section">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-md-12 col-md-offset-0">

                  <div class="col-xs-12 col-md-4">
                    <p class="title"><?php the_field('left_section_header'); ?></p>
                    <img src="<?php the_field('left_section_image'); ?>" class="img-responsive hidden-xs">
                    <p><?php the_field('left_section_text'); ?></p>
                  </div><!-- col-xs-4 -->

                  <div class="col-xs-12 col-md-4">
                    <p class="title"><?php the_field('center_section_header'); ?></p>
                    <img src="<?php the_field('center_section_image'); ?>" class="img-responsive hidden-xs">
                    <p><?php the_field('center_section_text'); ?></p>
                  </div><!-- col-xs-4 -->

                  <div class="col-xs-12 col-md-4">
                    <p class="title"><?php the_field('right_section_header'); ?></p>
                    <img src="<?php the_field('right_section_image'); ?>" class="img-responsive hidden-xs">
                    <p><?php the_field('right_section_text'); ?></p>
                  </div><!-- col-xs-4 -->

                </div><!-- col-xs-10 -->
              </div><!-- row -->
            </div><!-- container -->
          </article><!-- services -->

          <article class="approach section">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-md-12 col-md-offset-0">

                  <?php

                    // check if the repeater field has rows of data
                    if( have_rows('approach_slider') ) { ?>

                      <div class="owl-carousel">

                        <?php  
                          // loop through the rows of data
                          while ( have_rows('approach_slider') ) : the_row();

                              ?>

                                <div class="item">
                                  <p class="title">
                                    <div class="col-xs-12 col-md-4">
                                      <img src="<?php the_sub_field('slide_image') ?>" class="img-responsive">
                                    </div><!-- col-md-4 -->
                                  </p>
                                  <div class="col-xs-12 col-md-8">
                                    <p><?php the_sub_field('slide_text') ?></p>
                                  </div><!-- col-md-8 -->
                                </div><!-- item -->

                              <?php

                          endwhile;
                        ?>

                      </div><!-- owl-carousel -->

                    <?php 
                      }
                    ?>

                </div><!-- col-xs-10 -->
              </div><!-- row -->
            </div><!-- container -->
          </article><!-- approach -->

          <article class="team section">
            <div class="container">

              <div class="row">
                <div class="col-xs-12 col-md-4 col-md-offset-4">
                  <p class="title"><?php the_field('team_slide_title'); ?></p>
                  <p><?php the_field('team_slide_description'); ?></p>
                </div><!-- col-md-4 -->
              </div><!-- row -->

              <div class="row">

                <?php

                $team_args = array(
                  'posts_per_page' => -1,
                  'cat' => 2,
                  'order' => 'ASC'
                );

                $team_query = new WP_Query( $team_args );

                // The Loop
                if ( $team_query->have_posts() ) {
                  ?>
                    <div class="navs"></div>
                      <div class="owl-carousel">

                        <?php
                        while ( $team_query->have_posts() ) {
                          $team_query->the_post();
                          ?>
                            <div class="item">
                              <?php echo get_the_post_thumbnail( $page->ID, array( 'class' => 'img-responsive' ) ); ?>
                              <p class="name"><?php the_title(); ?></p>
                              <p class="position"><?php echo get_post_meta($post->ID, 'Position', true); ?></p>
                              <p class="description"><?php echo get_the_content(); ?></p>
                            </div><!-- item -->
                          <?php
                        }
                        ?>

                    </div><!-- owl-carousel -->
                  <?php
                } else {
                  
                }
                wp_reset_postdata();
                ?>
            
              </div><!-- row -->

            </div><!-- container -->
          </article><!-- team -->

          <article class="portfolio section">

                <?php

                  $portfolio_args = array(
                    'posts_per_page' => -1,
                    'cat' => 5,
                    'order' => 'ASC'
                  );

                  $portfolio_query = new WP_Query( $portfolio_args );

                  // The Loop
                  if ( $portfolio_query->have_posts() ) {
                    ?>
                        <div class="owl-carousel">

                          <?php
                          while ( $portfolio_query->have_posts() ) {
                            $portfolio_query->the_post();
                            ?>
                              


                    <?php

                      // check if the repeater field has rows of data
                      if( have_rows('portfolio_content') ) { 

                      //seting up links for modal windows
                      $slideNum = 0;

                    ?>

                        <?php  
                          // loop through the rows of data
                          while ( have_rows('portfolio_content') ) : the_row();
                          $slideNum++;
                              ?>

                                <div class="item">
                                  <div class="col-xs-12 col-md-5 col-md-offset-1 text">
                                    <p class="title"><?php the_sub_field('slide_title') ?></p>
                                    <p class="description"><?php the_sub_field('slide_description') ?></p><br>
                                    <a href="#" data-toggle="modal" data-target="#modal-<?php echo $slideNum ?>">More</a>
                                  </div><!-- col-md-6 -->
                                  <div class="col-xs-12 col-md-6 hidden-xs">
                                    <img src="<?php the_sub_field('slide_image') ?>">
                                  </div><!-- col-md-6 -->
                                </div><!-- item -->

                              <?php

                          endwhile;
                        ?>

            
                    <?php 
                      }
                    ?>




                            <?php
                          }
                          ?>

                      </div><!-- owl-carousel -->


                      <?php

                      // check if the repeater field has rows of data
                      if( have_rows('portfolio_content') ) { 

                      //seting up links for modal windows
                      $slideNum = 0;

                    ?>

                        <?php  
                          // loop through the rows of data
                          while ( have_rows('portfolio_content') ) : the_row();
                          $slideNum++;
                              ?>

                              <!-- Modal -->
                                <div class="modal fade" id="modal-<?php echo $slideNum ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-body">
                                        <button type="button" class="close top" data-dismiss="modal" aria-label="Close">CLOSE<br><span aria-hidden="true">&times;</span></button>
                                          <div class="row">
                                            <?php the_content(); ?>
                                          </div><!-- row -->
                                          <div class="close-modal">
                                            <button type="button" class="close bottom" data-dismiss="modal" aria-label="Close">CLOSE<br><span aria-hidden="true">&times;</span></button>
                                          </div><!-- close-modal -->
                                        
                                      </div>
                                    </div>
                                  </div>
                                </div><!-- modal -->

                              <?php

                          endwhile;
                        ?>
                    <?php 
                      }
                    ?>


                    <?php
                  } else {
                    
                  }
                wp_reset_postdata();
                ?>
            
          </article><!-- portfolio -->

          <article class="about section">
            <div class="container">
              <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-12 col-md-offset-0">

                  <?php

                    // check if the repeater field has rows of data
                    if( have_rows('about_slider') ) { ?>

                      <div class="owl-carousel">

                        <?php  
                          // loop through the rows of data
                          while ( have_rows('about_slider') ) : the_row();

                              ?>

                                <div class="item">
                                  <div class="col-xs-12 col-md-5">
                                    <p class="title"><?php the_sub_field('slide_title') ?></p>
                                    <p class="description"><?php the_sub_field('slide_description') ?></p>
                                    </div><!-- col-md-6 -->
                                  </p>
                                  <div class="col-xs-12 col-md-6 col-md-offset-1">
                                    <p class="quote"><span>"</span><?php the_sub_field('slide_testimonial') ?>” - 
                                      <span class="author"><?php the_sub_field('testimonial_author') ?></span>
                                    </p>
                                  </div><!-- col-md-6 -->
                                </div><!-- item -->

                              <?php

                          endwhile;
                        ?>

                      </div><!-- owl-carousel -->

                    <?php 
                      }
                    ?>

                </div><!-- col-xs-10 -->
              </div><!-- row -->
            </div><!-- container -->
          </article><!-- about -->

          <article class="contact section">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <p class="title">Contact Us</p>
                  <p class="description">Interested to know more?<br>Drop us a line!</p>
                </div><!--  col-md-6 -->
                <div class="col-xs-12 col-md-6">
                  <?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]'); ?>
                </div><!--  col-md-6 -->
              </div><!-- row -->
            </div><!-- container -->
          </article><!-- contact -->

        </section>

<?php get_footer(); ?>
