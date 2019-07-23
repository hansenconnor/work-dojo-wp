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

    <!-- Navbar -->
    <nav id="navbar-example" class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">WorkDojo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#HeroSection">Welcome <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#get_started">Get Started</a>
            </li>
          </ul>
        </div>
        <div id="progress_bar"></div>
      </nav>
      <!-- / Navbar -->

      <section id="HeroSection">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-12 col-lg-7">
                      <h1>Enhance your Business Culture</h1>
                      <h4 class="text-muted mt-2">Work Dojo gives your team the power and alignment you need to do your best work.</h4>
                      <p class="mt-4">
                            <button type="button" class="btn btn-primary btn-raised">Try Work Dojo for Free</button>
                      </p>
                  </div>
              </div>
          </div>
          <!-- Floating Images -->
          <img id="torii_gate__floating" src="/wp-content/uploads/2019/07/torii-gate-red.svg" alt="">
          <img id="yin_yang__floating" src="/wp-content/uploads/2019/07/yin-yang.svg" alt="">
          <img id="fishes__floating" src="/wp-content/uploads/2019/07/red-blue-fishes.svg" alt="">
      </section>

      <figure>
          <img class="img-fluid" src="/wp-content/uploads/2019/07/orange-block-accent.svg" alt="Orange Block Accent">
      </figure>

      <section id="about">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-12 col-lg-6">
                      <figure>
                          <img src="/wp-content/uploads/2019/07/red-blue-fishes.svg" alt="Red and Blue fish illustration">
                      </figure>
                  </div>
                  <div class="col-12 col-lg-6">
                      <h4>Tristique Ullamcorper</h4>
                      <h6>Amet Vestibulum Inceptos</h6>
                      <p>
                            Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo.
                      </p>
                  </div>
              </div>
          </div>
      </section>


      <section class="bg-light">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-12 col-lg-6">
                        <h4>Tristique Ullamcorper</h4>
                        <h6>Amet Vestibulum Inceptos</h6>
                        <p>
                              Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo.
                        </p>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-12">
                            <i class="fa fa-chart"></i>
                            <div class="icon-text">
                                <h6>Inceptos</h6>
                                <p class="lead">
                                    Vestibulum id ligula porta felis euismod semper.
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <i class="fa fa-chart"></i>
                            <div class="icon-text">
                                <h6>Inceptos</h6>
                                <p class="lead">
                                    Vestibulum id ligula porta felis euismod semper.
                                </p>
                            </div>
                        </div>
                        <div class="col-12">
                            <i class="fa fa-chart"></i>
                            <div class="icon-text">
                                <h6>Inceptos</h6>
                                <p class="lead">
                                    Vestibulum id ligula porta felis euismod semper.
                                </p>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="row mt-5">
                  <div class="col-12 text-center">
                        <button type="button" class="btn btn-primary btn-raised">Try Work Dojo for Free</button>
                  </div>
              </div>
          </div>
      </section>


      <section class="bg-dark">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-12 col-lg-4">
                      <figure>
                          <img src="/wp-content/uploads/2019/07/mark-white.svg" alt="Work Dojo mark">
                      </figure>
                  </div>
                  <div class="col-12 col-lg-7 offset-lg-1">
                        <h4 class="text-white">Fusce Vehicula Magna Pharetra</h4>
                        <h6 class="text-white">Cursus Mattis</h6>
                        <p class="text-white">
                            Nullam id dolor id nibh ultricies vehicula ut id elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                        </p>
                  </div>
              </div>
          </div>
      </section>


      <!-- Blog Posts -->
      <section>
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                                </div>
                            <div class="card">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                                </div>
                            <div class="card">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                                </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- / Blog Posts -->


      <!-- Pre-footer CTA -->
      <section id="get_started" class="bg-primary">
          <div class="container">
              <div class="row">
                  <div class="col-12 col-lg-10 offset-lg-1 text-center">
                      <h3 class="text-white">
                            Are you ready to enter the Dojo?
                      </h3>
                      <h5 class="text-white">
                            Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                      </h5>
                      <p class="mt-4">
                            <button type="button" class="btn btn-secondary btn-raised">Try Work Dojo for Free</button>
                      </p>
                  </div>
              </div>
          </div>
      </section>
      <!-- / Pre-footer CTA -->


      <!-- Footer -->
      <footer>
          <section id="Footer" class="bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <a href="" class="btn btn-dark"><i class="fa fa-globe"></i> workdojoapp.com</a>
                        </div>
                        <div class="col-12 col-lg-6 text-lg-right">
                            <a href="" class="mr-4 btn btn-dark">Privacy and Terms</a>
                            <a href="" class="btn btn-dark">Contact Us</a>
                        </div>
                    </div>
                </div>
            </section>
      </footer>
        <!-- / Footer -->


      <style type="text/css">
        section {
            padding: 80px 0;
        }
        #HeroSection {
            background: url('/wp-content/uploads/2019/07/fuji-mountain.svg');
            background-size: contain;
            background-position:right;
            background-repeat: no-repeat;
        }
        #HeroSection > .container > .row {
            min-height: calc(100vh - 136px);
        }

        footer #Footer {
            padding: 40px 0;
        }
      </style>



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