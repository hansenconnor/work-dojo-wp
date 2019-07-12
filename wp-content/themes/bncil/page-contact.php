<?php
/**
 * Template name: Contact
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
                        $page_subtitle = 'Let\'s work together'; 
                        include(locate_template('templates/header-inside.php')); ?>
                        
                        <section class="bg-light">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6">

                                        <h4 class="font-weight-bold text-primary-lighten">Please contact us to assist you with managing your risk.</h4>
                                        <h6>Give me a call or send me a message!</h6>

                                        <div class="row">
                                            <div class="col-12 col-md-4 col-lg-3">
                                                <hr>
                                            </div>
                                        </div>
                                        
                                        <p>
                                            <i class="far fa-phone mr-3"></i><a href="tel:8473122828"> 847.312.2828</a>
                                        </p>
                                        <p>
                                        <i class="far fa-envelope mr-3"></i><a class="pl-0" href="mailto:bob@bncil.com">bob@bncil.com</a>
                                        </p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <!-- Contact form -->
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