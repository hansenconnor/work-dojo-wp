<section id="BlogReel">
    <div class="container">
        <div class="row">

            <div class="col-2 text-center">
                <!-- Left arrow -->
                <span class="prev-arrow"><i class="fa fa-chevron-left"></i></span>
            </div>

            <div class="col-8 text-center">
                <!-- Slides -->
                <div class="slick-slider">
                    <div class="text-center"><h3>1</h3></div>
                    <div class="text-center"><h3>2</h3></div>
                    <div class="text-center"><h3>3</h3></div>
                    <div class="text-center"><h3>4</h3></div>
                    <div class="text-center"><h3>5</h3></div>
                    <div class="text-center"><h3>6</h3></div>
                </div>
            </div>

            <div class="col-2 text-center">
                <!-- Right arrow -->
                <span class="next-arrow"><i class="fa fa-chevron-right"></i></span>
            </div>

        </div>
    </div>
</section>

<style type="text/css">
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
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: '.next-arrow',
        prevArrow: '.prev-arrow'
    });

});
</script>