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
                        $page_title = 'Services Provided';
                        $page_subtitle = 'Specializing in Enterprise Risk Management, Aviation Matters, Supply-Chain Integrity Solutions and more.';
                        include(locate_template('templates/header-inside.php')); ?>
                        
                    
                        <section id="ServicesPageIntro" class="bg-light">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-8">
                                        <p class="text-primary-lighten">
                                        <strong>BNCIL provides personalized expert counsel and advice in a variety of disciplines including:</strong> <br><br>Enterprise Risk Management, Aviation Matters, Crisis Management, Analytics and Reporting for Threat Intelligence, Supply-Chain Integrity Solutions, Leadership and Coaching for Individuals and Teams
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




                <!-- Service Cards -->
                <section id="ServiceCards">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 card-deck">

				<?php
				// Elementor `single` location
				if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) ) {
					
					// Start loop
					while ( have_posts() ) : the_post();

                        ?>
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
                        <? // get_template_part('templates/blog-slider'); ?>

                        <?

					endwhile;

                } ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Service Cards -->



                <!-- Subervice Cards -->
                <section id="SubserviceCards" class="bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 card-deck subservice-cards">
                                <? $args = array(
                                    'post_type' => 'subservice',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1
                                ); 
                                
                                $query = new WP_Query($args);

                                if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

                                    <? $services = get_field('service'); ?>

                                <div class="card">
                                    <div class="card-body">

                                        <? if ( $services ) : foreach ( $services as $service ) : ?>
                                            <h6 class="text-secondary text-uppercase"><small><strong><?= get_the_title($service->ID); ?></strong></small></h6>
                                        <? endforeach; endif; ?>

                                        <h5 class="card-title text-primary-lighten font-weight-bold"><? the_title(); ?></h5>
                                        <p class="card-text font-weight-light" style="font-size: 16px;">
                                            <?= get_field('brief_description'); ?>
                                        </p>
                                        <a href="<?= get_the_permalink(); ?>" class="stretched-link"></a>
                                    </div>
                                </div>
                                <? endwhile; endif; ?>
                            </div>
                            <div class="col-12 text-center mt-5">
                                <a class="btn btn-primary-lighten" href="/contact">Contact</a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Subervice Cards -->



				<?php do_action( 'ocean_after_content_inner' ); ?>

			</div><!-- #content -->

			<?php do_action( 'ocean_after_content' ); ?>

		</div><!-- #primary -->

		<?php do_action( 'ocean_after_primary' ); ?>

	</div><!-- #content-wrap -->

	<?php do_action( 'ocean_after_content_wrap' ); ?>

<?php get_footer(); ?>