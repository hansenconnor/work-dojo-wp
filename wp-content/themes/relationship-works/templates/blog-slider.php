<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1
);

$query = new WP_Query($args); ?>

<section id="BlogReel">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-1 text-center">
                <!-- Left arrow -->
                <span class="prev-arrow"><i class="fa fa-chevron-left"></i></span>
            </div>

            <div class="col-10">
                <!-- Slides -->
                <div class="slick-slider">

                <?
                    if ( $query->have_posts() ) : while ( $query->have_posts() ) :
                        $query->the_post();

                        $title = get_the_title();
                        $author = get_the_author();
                        $excerpt = get_the_excerpt();
                        $permalink = get_the_permalink();
                        $featured_image = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : 'https://picsum.photos/640/360'; ?>

                    <div>
                        <div class="row">
                            <div class="col-4">
                                <figure style="background:url('<?= $featured_image; ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;" class="h-100"></figure>
                            </div>
                            <div class="col-8 py-5">
                                <h3><?= $title; ?></h3>
                                <p class="small text-uppercase"><?= $author; ?></p>
                                <p><?= $excerpt; ?></p>
                                <a class="btn btn-primary" href="<?= $permalink; ?>">continue reading</a>
                            </div>        
                        </div>
                    </div>

                    <? 
                        endwhile; endif;

                        wp_reset_postdata();
                        wp_reset_query(); 
                    ?>

                </div><!-- # Slides -->
            </div>

            <div class="col-1 text-center">
                <!-- Right arrow -->
                <span class="next-arrow"><i class="fa fa-chevron-right"></i></span>
            </div>

        </div>
    </div>
</section>

<style type="text/css">
.slick-slide {
    border-radius: 5px;
    overflow: hidden;
}

.prev-arrow,
.next-arrow {
    text-align: center;
    display: inline-block;
    height: 40px;
    width: 40px;
    border-radius: 40px;
    line-height: 40px;
    background: #D1D1D1;
}

.prev-arrow:hover,
.next-arrow:hover {
    cursor: pointer;
}

.prev-arrow i,
.next-arrow i {
    color: #5E5E5E;
}
</style>

<script type="text/javascript">
jQuery(document).ready(function($) {
    $(".slick-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        nextArrow: '.next-arrow',
        prevArrow: '.prev-arrow'
    });

});
</script>