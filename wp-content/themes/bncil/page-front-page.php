<?php
/**
 * Template name: Front Page
 */

get_header(); ?>

	<?php do_action( 'ocean_before_content_wrap' ); ?>

	<div id="content-wrap" class="clr">

		<?php do_action( 'ocean_before_primary' ); ?>

		<div id="primary" class="content-area clr">

			<?php do_action( 'ocean_before_content' ); ?>

			<div id="content" class="site-content clr">

				<?php do_action( 'ocean_before_content_inner' ); ?>

				<?php
				// Elementor `single` location
				if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {
					
					// Start loop
					while ( have_posts() ) : the_post();

						?>

                        <section id="homeHero" 
                        style="background: url('/wp-content/uploads/2019/07/hero-background.png');
                        background-size: cover;
                        background-position: center;
                        background-repeat: no-repeat;
                        min-height: calc(100vh - 74px);"
                        class="pb-0">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <figure><img src="/wp-content/uploads/2019/07/bncil-logo-hd.png" alt="Relationship Works Logo"></figure>
                                        <h3 class="text-white">Enterprise Risk Management Advisory Services</h3>
                                        <h4 class="text-white">Specializing in <a class="text-secondary" href="#">Aviation</a>, <a class="text-secondary" href="#">Crisis management</a>, <a class="text-secondary" href="#">Analytics & Reporting for Threat Intelligence</a>, and <a class="text-secondary" href="#">Supply Chain Integrity Solutions</a></h4>
                                        
                                       <p class="mt-5">
                                        <a class="btn btn-primary-lighten mr-2" href="/contact">Contact<a>
                                        <a class="btn btn-outline-primary text-light" href="/services">Services</a>
                                       </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="homeCompanySlider" class="bg-primary-lighten">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Slider Here -->
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="WelcomeToBNCIL" class="bg-light">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <h6 class="text-primary"><small><strong>WELCOME TO BNCIL</strong></small></h6>
                                        <h3 class="text-primary-darken font-weight-bold">YOUR PERSONALIZED SOLUTION FOR RISK MANAGEMENT</h3>
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <hr>
                                            </div>
                                        </div>
                                        <p class="text-dark">
                                        As an expert in several risk areas, BNCIL is uniquely qualified and experienced in assessing, identifying and providing risk mitigation strategies. Through our collaboration with partner risk mitigation companies we can provide solutions and strategies for any size company small, large or global.BNCIL provides expert counsel and advice in a variety of disciplines, to include: <br><br>Aviation Matters, Enterprise Risk Management, Supply-Chain Solutions, Threat Intelligence Analytics & Reporting, Crisis Management Resources and Leadership and Coaching for Executives and Teams.
                                        </p>
                                        <p>
                                            <a class="btn btn-primary-lighten" href="/contact">contact</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <figure>
                                            <img src="#" alt="">
                                        </figure>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </section>
                        
                        <section id="ServicesOverview">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h2 class="text-white text-uppercase text-center">Services Overview</h2>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                       <!-- Add Service Cards -->
                                    </div>
                                    <div class="col-12 text-center">
                                       <a class="btn btn-light" href="/services">View All</a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="PreFooter" class="bg-primary-darken">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <figure>
                                            <img src="/wp-content/uploads/2019/07/collage.png" alt="Airport collage">
                                        </figure>
                                    </div>
                                    <div class="col-12 col-lg-8">
                                        <h6 class="text-white"><small><strong>BNCIL CEO – ROBERT POCICA</strong></small></h6>
                                        <h3 class="text-white">Over 40 Years Of Experience</h3>
                                        <h5 class="text-white">Specializing in <a class="text-secondary" href="#">Crisis Management</a> & <a class="text-secondary" href="#">Data Analytics</a></h5>
                                        <p class="text-white-50">Over 40 Years of Investigative & Executive Enterprise Risk Management Leadership Experience. Specializing in Aviation Matters, Enterprise Risk Management, Supply-Chain Solutions, Threat Intelligence Analytics and Reporting and Crisis Management</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <script type="text/javascript">
                            // Initialize simple parallax 
                            var image = document.getElementsByClassName('train-tracks');
                            new simpleParallax(image, {
                                delay: .6,
                                transition: 'cubic-bezier(0,0,0,1)'
                            });
                        </script>

                        <? get_template_part('templates/blog-slider'); ?>

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