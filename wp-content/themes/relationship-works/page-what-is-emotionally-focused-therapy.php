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
                        
                    
                        <section>
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-4">
                                        <figure><img class="rounded shadow-lg" src="/wp-content/uploads/2019/07/signal.png" alt="Red train signal"></figure>
                                    </div>
                                    <div class="col-12 col-lg-7 offset-lg-1">
                                        <h3>Emotionally Focused Therapy</h3>
                                        <p>Emotionally Focused Therapy (EFT) is a research-backed, proven approach to couples therapy.  Some people wonder, “why do you emphasis emotion in therapy? Don’t we just need to learn how to communicate better?”  Communicating better includes understanding emotion.</p>
                                        <figure><img class="float-left" src="http://localhost:8080/wp-content/uploads/2019/07/accent-straight-gradient.png" alt="orange accent line"></figure>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="container">
                        <hr>
                        </div>
                        <section>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-10 offset-lg-1">
                                        <?= get_the_content(); ?>
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