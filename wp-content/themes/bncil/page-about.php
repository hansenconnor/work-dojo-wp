<?php
/**
 * Template name: About
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

                        <?
                        $page_title = 'Robert Pocica';
                        $page_subtitle = 'Over 40 Years of Investigative & Executive Enterprise Risk Management Leadership Experience.'; 
                        include(locate_template('templates/header-inside.php')); ?>
                        

                        <section class="bg-white">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <figure class="shadow-lg">
                                        <!-- Crop top and bottom : 16:9 -->
                                            <img class="img img-fluid rounded" src="" alt="Robert Pocica">
                                        </figure>              
                                    </div>
                                    <div class="col-12 col-lg-8">
                                        <h2 class="text-primary-darken">About Bob</h2>
                                        <p class="lead">
                                        Specializing in Enterprise Risk Management, Aviation Matters, Crisis Management, Analytics and Reporting for Threat Intelligence, Supply-Chain Integrity Solutions, Leadership and Coaching for Individuals and Teams
                                        </p>
                                        <p>
                                            <a class="btn btn-outline-primary" href="/services">Services</a>
                                            <a class="btn btn-primary-lighten" href="/services">Contact</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <hr class="m-0 bg-primary">

                        <section id="content" class="bg-white">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <? the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </section>



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