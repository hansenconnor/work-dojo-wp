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

                        <section id="homeHero">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-8">
                                        <figure><img src="/wp-content/uploads/2019/07/rw-logo-full.png" alt="Relationship Works Logo"></figure>
                                        <a class="btn btn-primary mr-2" href="/what-is-emotionally-focused-therapy">what is EFT?</a>
                                        <a class="btn btn-outline-primary" href="/find-us">get started <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="homeTracksBanner">
                            <figure>
                                <img class="train-tracks" src="/wp-content/uploads/2019/07/tracks.png" alt="Train tracks">
                            </figure>
                        </section>
                        
                        <section id="WhoWeAre">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-6">
                                        <h2>Who We Are</h2>
                                        <h4 class="text-primary">Creating Connected Relationships</h4>
                                        <p class="mt-4 lead">
                                            We are a group of therapists who are passionate about helping our clients create loving, connected relationships.
                                        </p>
                                        <p><a class="btn btn-primary" href="/who-we-are">meet the team</a></p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <figure style="background: url('/wp-content/uploads/2019/07/team-hd.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 250px;" class="rounded"></figure>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="WhatWereAbout" class="bg-light">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-10 offset-lg-1 text-center">
                                        <h3>What We're About</h3>
                                        <p>Unique in the Northwest Suburbs, RelationshipWorks is dedicated to…you got it…relationships.  We all know that when our relationships work, we feel better, we’re often healthier, we are more resilient in the face of challenges.  We join you in the work to make your relationships work.  More than just functioning better, our goal is bigger than that: we want greater love, connection, and – dare we say – joy in all of our lives!</p>
                                        <figure><img src="/wp-content/uploads/2019/07/dots-orange.png" alt="orange dots"></figure>
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