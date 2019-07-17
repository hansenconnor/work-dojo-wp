<?php
/**
 * Template name: Service Single
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
                        // $page_title = 'Services Provided';
                        $page_subtitle = get_field('subtitle');
                        include(locate_template('templates/header-inside.php')); ?>

                        <div class="container">
                            <div class="row">
                                <div class="col-5 col-md-4 col-lg-3">
                                    <hr class="m-0 py-1 bg-primary-darken rounded">
                                </div>
                            </div>
                        </div>
                    
                    <?if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


                        <section id="ServicesPageIntro" class="pb-0">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <?= get_the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </section>

                    <? endwhile;
                else: ?>
                  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <? endif; ?>

                <style type="text/css">
                    #ServicesPageIntro p {
                        color: white;
                    }
                </style>


                <!-- Subervice Cards -->
                <section id="SubserviceCards pt-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 card-deck subservice-cards">
                                <? $args = array(
                                    'post_type' => 'subservice',
                                    'meta_query' => array(
                                        array(
                                            'key' => 'service', // name of custom field
                                            'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
                                            'compare' => 'LIKE'
                                        )
                                    ),
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1
                                ); 
                                
                                $query = new WP_Query($args);

                                if ($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

                                    <? $services = get_field('service'); ?>

                                <div class="card">
                                    <div class="card-body">

                                        <h5 class="card-title text-primary-lighten font-weight-bold"><? the_title(); ?></h5>
                                        <p class="card-text font-weight-light" style="font-size: 16px;">
                                            <?= get_field('brief_description'); ?>
                                        </p>
                                        <a class="stretched-link" data-toggle="modal" href="#subserviceModal" data-whatever="<?= get_the_content();?>"></a>
                                    </div>
                                </div>
                                <div class="modal fade" id="subserviceModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary-lighten font-weight-bold">More</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <p class="text-primary-lighten">
                                        <?= get_the_content(); ?>
                                    </p>
                                    </div>
                                    </div>
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

                <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $('#subserviceModal').on('show.bs.modal', function (e) {
                    // Get content from button attr
                    var content = e.relatedTarget.getAttribute('data-whatever');
                    // Store content in modal
                    $(this).children().find('.modal-body > p').html(content);
                    });
                }); 
                </script>



				<?php do_action( 'ocean_after_content_inner' ); ?>

			</div><!-- #content -->

			<?php do_action( 'ocean_after_content' ); ?>

		</div><!-- #primary -->

		<?php do_action( 'ocean_after_primary' ); ?>

	</div><!-- #content-wrap -->

	<?php do_action( 'ocean_after_content_wrap' ); ?>

<?php get_footer(); ?>