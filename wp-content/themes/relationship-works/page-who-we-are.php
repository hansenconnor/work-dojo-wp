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
                        $page_subtitle = 'Passionate about helping our clients create loving, connected relationships'; 
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
                                    <div class="col-12 col-lg-10 offset-lg-1">
                                        <figure class="shadow-lg">
                                        <!-- Crop top and bottom : 16:9 -->
                                            <img class="img img-fluid rounded" src="/wp-content/uploads/2019/07/team-hd-e1562878796661.jpg" alt="Relationship Works Team">
                                        </figure>              
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="teamCards">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h3>Our Team</h3>
                                        <h4>Read our profiles and contact the therapist you’d like to consult.</h4>
                                        <figure class="my-4"><img class="ml-0" src="http://localhost:8080/wp-content/uploads/2019/07/accent-straight-gradient.png" alt="orange accent line"></figure>
                                        <p class="lead">We provide brief, <strong>free phone consultations</strong> to help you find the therapist best suited to work with you.</p>
                                        <hr class="my-5">
                                    </div>
                                    <div class="col-12">
                                        <div class="card-deck">
                                            <?php
                                                $args = array(
                                                    'post_type' => 'team_member',
                                                    'post_status' => 'publish',
                                                    'posts_per_page' => -1,
                                                    'order' => 'ASC'
                                                );

                                                $query = new WP_Query($args);

                                                if ( $query->have_posts() ) : while ( $query->have_posts() ) :
                                                
                                                    $query->the_post();

                                                    $profile_picture = get_field('profile_image');
                                                    $name = get_the_title();
                                                    $title = get_field('title');
                                                    $phone_number = get_field('phone_number');
                                                    $email = get_field('email');
                                                    $profile_link = get_the_permalink();
                                            ?>
                                            
                                                <div class="card team-card mb-4">
                                                    <img src="<?= $profile_picture['url']; ?>" class="card-img-top" alt="<?= $name; ?>">
                                                    <div class="card-body">
                                                        <h5><?= $name; ?></h5>
                                                        <p><small><?= $title; ?></small></p>
                                                        <a class="btn btn-primary px-4" href="<?= $profile_link; ?>">view profile</a>
                                                        <a href="tel:<?= get_field('phone_number'); ?>" class="btn btn-circle btn-primary"><i class="fa fa-phone text-white"></i></a>
                                                        <a href="mailto:<?= get_field('email'); ?>" class="btn btn-circle btn-primary"><i class="fa fa-envelope text-white"></i></a>
                                                    </div>
                                                </div>
                                            <?
                                                endwhile;
                                            endif;
                                            ?>
                                        </div>
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