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

                        <!-- #Hero -->
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
                                        <h4 class="text-white">Specializing in <a class="text-secondary-lighten" href="#">Aviation</a>, <a class="text-secondary-lighten" href="#">Crisis Management</a>, <a class="text-secondary-lighten" href="#">Analytics & Reporting for Threat Intelligence</a>, <a class="text-secondary-lighten" href="#">Supply Chain Integrity Solutions</a>, <a class="text-secondary-lighten" href="#">Leadership and Coaching for Individuals and Teams</a></h4>
                                        
                                       <p class="mt-5">
                                        <a class="btn btn-primary-lighten mr-2" href="/contact">Contact<a>
                                        <a class="btn btn-outline-primary text-light" href="/services">Services</a>
                                       </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- // #Hero -->


                        <!-- #PartnerSlider -->
                        <section id="homeCompanySlider" class="bg-primary-lighten">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Slider Here -->
                                        <? get_template_part('templates/blog-slider'); ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- // #PartnerSlider -->


                        <!-- #Intro -->
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
                                        As an expert in several risk areas, BNCIL is uniquely qualified and experienced in assessing, identifying and providing risk mitigation strategies. Through our collaboration with partner risk mitigation companies we can provide solutions and strategies for any size company small, large or global. <br><br><strong>BNCIL provides expert counsel and advice in a variety of disciplines including:</strong> <br><br>Enterprise Risk Management Advisory Services, Aviation Matters, Crisis Management Resources, Analytics & Reporting for Threat Intelligence, Supply-Chain Solutions, Leadership and Coaching for Executives and Teams.
                                        </p>
                                        <p class="mt-5">
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
                        <!-- // #Intro -->
                        

                        <!-- #ServicesOverview -->
                        <section id="ServicesOverview">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12 mb-5">
                                        <h2 class="text-white text-uppercase text-center">Services Overview</h2>
                                    </div>

                                    <!-- Service Card Deck -->
                                    <div class="col-12 card-deck">
                                        

                                        <? // Get Services
                                        $args = array(
                                            'post_type' => 'service',
                                            'post_status' => 'publish',
                                            'posts_per_page' => -1
                                        ); 
                                        
                                        $query = new WP_Query($args);

                                        if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

                                        <div class="card mb-5">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary-lighten font-weight-bold"><? the_title(); ?></h4>
                                                <p class="card-text text-primary-lighten" style="font-size: 16px;">
                                                    <?= get_field('subtitle'); ?>
                                                </p>
                                            </div>
                                            <div class="card-footer">
                                                <a class="btn btn-outline-primary btn-block" href="<?= get_the_permalink(); ?>">View</a>
                                            </div>
                                        </div>

                                        <? endwhile; endif; ?>

                                    </div>
                                    <!-- // Service Card Deck -->


                                    <div class="col-12 text-center">
                                       <a class="btn btn-light" href="/services">View All</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- // #ServicesOverview -->


                        <!-- #PreFooter -->
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
                                        <h5 class="text-white">Specializing in <a class="text-secondary-lighten" href="#">Enterprise Risk Management</a>, <a class="text-secondary-lighten" href="#">Aviation</a>, <a class="text-secondary-lighten" href="#">Crisis Management</a>, <a class="text-secondary-lighten" href="#">Analytics & Reporting for Threat Intelligence</a>, <a class="text-secondary-lighten" href="#">Supply Chain Integrity Solutions</a>, <a class="text-secondary-lighten" href="#">Leadership and Coaching for Individuals and Teams</a></h5>
                                        <p class="text-white-50">Over 40 Years of Investigative & Executive Enterprise Risk Management Leadership Experience. Specializing in Aviation Matters, Enterprise Risk Management, Supply-Chain Solutions, Threat Intelligence Analytics and Reporting and Crisis Management</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- // #PreFooter -->


                        <script type="text/javascript">
                            // Initialize simple parallax 
                            var image = document.getElementsByClassName('train-tracks');
                            new simpleParallax(image, {
                                delay: .6,
                                transition: 'cubic-bezier(0,0,0,1)'
                            });
                        </script>


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