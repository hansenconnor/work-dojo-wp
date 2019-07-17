<div class="row align-items-center">
    <div class="col-12 col-md-6 col-lg-4">
        <figure>
            <img class="shadow-lg" src="<?= get_field('profile_image')['url']; ?>" alt="<?= get_the_title(); ?>">
        </figure>        
    </div>
    <div class="col-12 col-md-6 col-lg-8">
        <h1><?= get_the_title(); ?>
        <h4><?= get_field('title'); ?></h4>
        <a href="tel:<?= get_field('phone_number'); ?>" class="btn btn-outline-primary">call now <i class="fas fa-phone text-primary fa-sm"></i></a>
        <a href="mailto:<?= get_field('email'); ?>" class="btn btn-outline-primary">email <i class="fas fa-envelope text-primary fa-sm"></i></a>
    </div>
</div>

<div class="row">
<div class="col-12">
    <hr class="my-5">
</div>
</div>

<div class="row">
    <div class="col-12 col-lg-10 offset-lg-1">
        <h3>About <? the_title(); ?></h3>
        <? the_content(); ?>
        <hr class="my-5">
        <p><a class="btn d-block d-lg-inline-block btn-outline-primary" href="/who-we-are">the Relationship Works team</a></p>
    </div>
</div>