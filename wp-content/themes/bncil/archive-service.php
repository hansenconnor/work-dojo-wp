<?php
/**
 * Template name: Services
 */

get_header(); ?>

	<?php do_action( 'ocean_before_content_wrap' ); ?>

	<div id="content-wrap" class="clr">

		<?php do_action( 'ocean_before_primary' ); ?>

		<div id="primary" class="content-area clr">

			<?php do_action( 'ocean_before_content' ); ?>

			<div id="content" class="site-content clr">

                <?php do_action( 'ocean_before_content_inner' ); ?>
                
                <?
                        $page_subtitle = 'Crisis Management, Data Analytics & Crisis Recovery';
                        include(locate_template('templates/header-inside.php')); ?>
                        
                    
                        <section id="ServicesPageIntro" class="bg-light">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-8">
                                        <p class="text-primary-lighten">
                                        BNCIL provides personalized expert counsel and advice in a variety of disciplines, to include: <br><br>Aviation Matters, Enterprise Risk Management, Supply-Chain Solutions, Threat Intelligence Analytics &Reporting, Crisis Management Resources and Leadership and Coaching for Executives and Teams.
                                        </p>
                                        <p class="text-primary-darken">
                                            <strong>
                                                <i class="fas fa-arrow-alt-down mr-3"></i> Scroll Down to View Services 
                                            </strong>
                                        </p>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <figure><img src="/wp-content/uploads/2019/07/services-icons.png" alt="Shield Icon, Data Icon and Custom Icon"></figure>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <section id="ServiceCards">
                            <div class="container">
                                <div class="row col-12">
                                    
                                </div>
                            </div>
                        </section>


                        <div class="container">
                        <hr>
                        </div>


                        <section id="SubserviceCards">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- subservice cards -->
                                    </div>
                                </div>
                            </div>
                        </section>

				<?php
				// Elementor `single` location
				if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {
					
					// Start loop
					while ( have_posts() ) : the_post();

						?>

                        <? // get_template_part('templates/blog-slider'); ?>

                        <?

					endwhile;

				} ?>

				<?php do_action( 'ocean_after_content_inner' ); ?>

			</div><!-- #content -->

			<?php do_action( 'ocean_after_content' ); ?>

		</div><!-- #primary -->

		<?php do_action( 'ocean_after_primary' ); ?>

	</div><!-- #content-wrap -->

	<?php do_action( 'ocean_after_content_wrap' ); ?>

<?php get_footer(); ?>