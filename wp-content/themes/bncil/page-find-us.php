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

                        <?
                        $page_subtitle = 'Give us a call or send us a message!'; 
                        include(locate_template('templates/header-inside.php')); ?>
                        
                        <section>
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6">

                                        <h4 class="font-weight-bold">Address <i class="fas fa-map-marker-alt text-primary"></i></h4>
                                        <p class="lead">
                                        1110 W Lake Cook Road<br>Ste 152<br>Buffalo Grove, IL 60089
                                        </p>
                                        <a class="btn btn-link pl-0" href="https://www.google.com/maps/place/1110+W+Lake+Cook+Rd+%23152,+Buffalo+Grove,+IL+60089/@42.1520871,-87.9703319,17z/data=!4m5!3m4!1s0x880fbc6f37423e8d:0x52f673ec35e377da!8m2!3d42.1533686!4d-87.9617518" target="_blank">get directions</a>

                                        <hr class="my-4">

                                        
                                        <h4 class="font-weight-bold">Phone <i class="far fa-phone text-primary"></i></h4>
                                        <p>
                                            <a href="tel:8473122828"> 847.312.2828</a>
                                        </p>
                                        <p>
                                            
                                            <a class="btn btn-link pl-0" href="tel:8473122828">call now</a>
                                        </p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <figure style="background: url('/wp-content/uploads/2019/07/office-e1562870680847.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 250px;" class="rounded"></figure>
                                    </div>
                                </div>
                            </div>

                            <!-- Google Map Container -->
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2957.9158698710253!2d-87.9703319!3d42.1520871!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fbc6f37423e8d%3A0x52f673ec35e377da!2s1110+W+Lake+Cook+Rd+%23152%2C+Buffalo+Grove%2C+IL+60089!5e0!3m2!1sen!2sus!4v1562871326919!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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