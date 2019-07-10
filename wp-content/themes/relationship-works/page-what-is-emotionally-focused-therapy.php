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
                        include(locate_template('templates/header-inside.php')); ?>
                        
                    
                        <section id="WhoWeAreQuote">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-10 offset-lg-1 text-center">
                                        <p>We are a group of therapists who are passionate about helping our clients create loving, connected relationships.</p>
                                        <figure><img src="http://localhost:8080/wp-content/uploads/2019/07/accent-straight-gradient.png" alt="orange accent line"></figure>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="bg-light">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <h3>Team Profiles</h3>                
                                    </div>
                                </div>
                            </div>
                        </section>

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