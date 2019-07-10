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
                        
                        <section id="WhoWeAre">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <h2>Who We Are</h2>
                                        <h4 class="text-primary">Creating Connected Relationships</h4>
                                        <p class="mt-4 lead">
                                            We are a group of therapists who are passionate about helping our clients create loving, connected relationships.
                                        </p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <figure style="background: url('#'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 250px;" class="rounded shadow-md"></figure>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="WhatWereAbout" class="bg-light">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-10 offset-lg-1 text-center">
                                        <h3>What We're about</h3>
                                        <p>Unique in the Northwest Suburbs, RelationshipWorks is dedicated to…you got it…relationships.  We all know that when our relationships work, we feel better, we’re often healthier, we are more resilient in the face of challenges.  We join you in the work to make your relationships work.  More than just functioning better, our goal is bigger than that: we want greater love, connection, and – dare we say – joy in all of our lives!</p>
                                        <figure><img src="/wp-content/uploads/2019/07/dots-orange.png" alt="orange dots"></figure>
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