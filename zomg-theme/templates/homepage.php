<?php
/* Template Name: Fullpage scroll template */
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
                                  <a href="<?php the_sub_field('slide_link'); ?>" class="link">learn more</a>
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
                <div class="col-xs-10 col-xs-offset-1 col-md-12 col-md-offset-0">

                  <div class="col-xs-12 col-md-4">
                    <p class="title"><?php the_field('left_section_header'); ?></p>
                    <img src="<?php the_field('left_section_image'); ?>" class="img-responsive">
                    <p><?php the_field('left_section_text'); ?></p>
                  </div><!-- col-xs-4 -->

                  <div class="col-xs-12 col-md-4">
                    <p class="title"><?php the_field('center_section_header'); ?></p>
                    <img src="<?php the_field('center_section_image'); ?>" class="img-responsive">
                    <p><?php the_field('center_section_text'); ?></p>
                  </div><!-- col-xs-4 -->

                  <div class="col-xs-12 col-md-4">
                    <p class="title"><?php the_field('right_section_header'); ?></p>
                    <img src="<?php the_field('right_section_image'); ?>" class="img-responsive">
                    <p><?php the_field('right_section_text'); ?></p>
                  </div><!-- col-xs-4 -->

                </div><!-- col-xs-10 -->
              </div><!-- row -->
            </div><!-- container -->
          </article><!-- services -->

          <article class="approach section">
            <div class="container">
              <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-12 col-md-offset-0">

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

                  
                	<div class="owl-carousel">

                    <div class="item">
                      <div class="col-xs-12 col-md-5 col-md-offset-1 text">
                        <p class="title">Talented Dlley</p>
                        <p class="description">Zomg ishly-skilled hardware engineers and take selective hardware projects.</p><br>
                        <a href="#" data-toggle="modal" data-target="#modal">More</a>
                      </div><!-- col-md-6 -->
                      <div class="col-xs-12 col-md-6 hidden-xs">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.png">
                      </div><!-- col-md-6 -->
                    </div><!-- item -->

                    <div class="item">
                      <div class="col-xs-12 col-md-5 col-md-offset-1 text">
                        <p class="title">Talented Devs From the Valley</p>
                        <p class="description">Zomg is located at the heart ohave highly-skilled hardware engineers and take selective hardware projects.</p><br>
                        <a href="#">More</a>
                      </div><!-- col-md-6 -->
                      <div class="col-xs-12 col-md-6 hidden-xs">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.png">
                      </div><!-- col-md-6 -->
                    </div><!-- item -->

                  </div><!-- owl-carousel -->

            
          </article><!-- portfolio -->

          <article class="about section">
            <div class="container">
              <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-md-12 col-md-offset-0">
                  <div class="owl-carousel">

                    <div class="item">
                      <div class="col-xs-12 col-md-6">
                        <p class="title">Talented Devs From the Valley</p>
                        <p class="description">Zomg is located at the heart of the Silicon Valley and is comprised of engineers with experience from large Silicon Valley corporations such as Linkedin, Intel, Google, Apple. We focus on software and application development, web development, prototyping. We also have highly-skilled hardware engineers and take selective hardware projects.</p>
                      </div><!-- col-md-6 -->
                      <div class="col-xs-12 col-md-6">
                        <p class="quote"><span>"</span>Zomg folks developed an API for us in very productive and efficient way, meeting short deadlines” - 
                        <span class="author">Alina Kharina, CEO of SkillGravity</span>
                        </p>
                      </div><!-- col-md-6 -->
                    </div><!-- item -->

                    <div class="item">
                      <div class="col-xs-12 col-md-6">
                        <p class="title">Talented Devs From the Valley</p>
                        <p class="description">Zomg is located at the heart ohave highly-skilled hardware engineers and take selective hardware projects.</p>
                      </div><!-- col-md-6 -->
                      <div class="col-xs-12 col-md-6">
                        <p class="quote"><span>"</span>Zomg for us in very productive and efficient way, meeting short deadlines” - 
                        <span class="author">Alinina, CEO of SkillGravity</span>
                        </p>
                      </div><!-- col-md-6 -->
                    </div><!-- item -->

                    <div class="item">
                      <div class="col-xs-12 col-md-6">
                        <p class="title">Talented Devs Fr</p>
                        <p class="description">Zomg is l. We also have highly-skilled hardware engineers and take selective hardware projects.</p>
                      </div><!-- col-md-6 -->
                      <div class="col-xs-12 col-md-6">
                        <p class="quote"><span>"</span>Zomg folks developeAPI for us in very produt way, meeting short deadlines” - 
                        <span class="author">Alina KhlGravity</span>
                        </p>
                      </div><!-- col-md-6 -->
                    </div><!-- item -->

                  </div><!-- owl-carousel -->
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

        <!-- Modal -->
		<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class="modal-body">
		        <button type="button" class="close top" data-dismiss="modal" aria-label="Close">CLOSE<br><span aria-hidden="true">&times;</span></button>
		          <div class="row">
		            <div class="col-xs-10 col-xs-offset-1 first">
		              <div class="col-xs-12 col-md-6">
		                <p class="title">Kindara</p>
		                <p>At Kindara, we give you the knowledge, support, and proper tools to understand your fertility and be in the driver’s seat of your own body.</p>
		                <br><br>
		                <p>At Kindara, we give you the knowledge, support, and proper tools to understand your fertility and be in the driver’s seat of your own body.</p>
		              </div><!-- col-md-6 -->
		              <div class="col-xs-12 col-md-6">
		                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/modal/1.png" class="img-responsive">
		              </div><!-- col-md-6 -->
		            </div><!-- col-xs-10 -->
		          </div><!-- row -->

		          <div class="row">
		            <div class="col-xs-10 col-xs-offset-1">
		              <div class="col-xs-12">
		                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/modal/2.png" class="img-responsive">
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fermentum felis eu arcu vestibulum suscipit quis ut quam. Nam dapibus augue turpis, nec sodales ante mollis et. </p>
		              </div><!-- col-md-6 -->
		            </div><!-- col-xs-10 -->
		          </div><!-- row -->

		          <div class="row">
		            <div class="col-xs-10 col-xs-offset-1">
		              <div class="col-xs-12">
		                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/modal/3.png" class="img-responsive">
		                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/modal/4.png" class="img-responsive">
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fermentum felis eu arcu vestibulum suscipit quis ut quam. Nam dapibus augue turpis, nec sodales ante mollis et. </p>
		                <p class="title">Thank you!</p>
		              </div><!-- col-md-6 -->
		            </div><!-- col-xs-10 -->
		          </div><!-- row -->
		          <div class="close-modal">
		            <button type="button" class="close bottom" data-dismiss="modal" aria-label="Close">CLOSE<br><span aria-hidden="true">&times;</span></button>
		          </div><!-- close-modal -->
		        
		      </div>
		    </div>
		  </div>
		</div><!-- modal -->

<?php get_footer(); ?>
