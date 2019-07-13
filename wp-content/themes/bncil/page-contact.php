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

                        <section class="bg-primary-lighten">
                            <div class="container">
                                <div class="row col-12">
                                    <p class="text-light text-center">
                                    If you require a near term response or the development of a longer-term strategy BNCIL is prepared to assist you in a professional and confidential manner. Remember, luck and hope are not a risk mitigation strategy….
                                    </p>
                                    <hr class="py-1 bg-primary w-25 rounded-sm mx-auto">
                                </div>
                            </div>
                        </section>
                        
                        <section class="bg-light">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-6">

                                        <h4 class="font-weight-bold text-primary-lighten">Please contact us to assist you with managing your risk.</h4>
                                        <h6>Give me a call or send me a message!</h6>

                                        <div class="row">
                                            <div class="col-12 col-md-4 col-lg-3">
                                                <hr class="py-1 rounded-sm bg-primary-lighten">
                                            </div>
                                        </div>
                                        
                                        <p>
                                            <i class="far fa-phone mr-3"></i><a href="tel:4154887625"> 415-488-7625</a>
                                        </p>
                                        <p>
                                        <i class="far fa-envelope mr-3"></i><a class="pl-0" href="mailto:bob@bncil.com">bob@bncil.com</a>
                                        </p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <!-- Contact form -->
                                        <?= do_shortcode('[formidable id=1]'); ?>
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