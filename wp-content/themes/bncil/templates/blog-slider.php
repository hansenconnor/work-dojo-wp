<?php
$args = array(
    'post_type' => 'partner',
    'post_status' => 'publish',
    'posts_per_page' => -1
);

$query = new WP_Query($args); ?>

<section id="BlogReel">
    <div class="container">
        <div class="row align-items-center">

            <!-- <div class="col-1 text-center">
                <span class="prev-arrow"><i class="fa fa-chevron-left"></i></span>
            </div> -->

            <div class="col-12">
                <!-- Slides -->
                <div class="slick-slider">

                <?
                    if ( $query->have_posts() ) : while ( $query->have_posts() ) :
                        $query->the_post();

                        $title = get_the_title();
                        // $author = get_the_author();
                        // $excerpt = get_the_excerpt();
                        $permalink = get_the_permalink();
                        $logo = get_field('logo') ? get_field('logo')['url']: 'https://picsum.photos/640/360'; ?>

                    <div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid" src="<?= $logo; ?>" alt="">
                                <!-- <figure style="background:url('<?= $logo; ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;" class="h-100"></figure> -->
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

            <!-- <div class="col-1 text-center">
                <span class="next-arrow"><i class="fa fa-chevron-right"></i></span>
            </div> -->

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
        slidesToShow: 3,
        slidesToScroll: 1,
        adaptiveHeight: true,
        nextArrow: '.next-arrow',
        prevArrow: '.prev-arrow',
        autoplay: true,
        duration: 2000
    });

});
</script>