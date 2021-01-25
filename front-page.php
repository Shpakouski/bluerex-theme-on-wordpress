<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BlueRex</title>
    <?php wp_head(); ?>
</head>

<body>
<header class="main-header"<?php echo bluerex_get_background('header_bg'); ?> >
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
            <?php $custom_logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'));
            if ($custom_logo): ?>
                <img src="<?php echo $custom_logo[0]; ?>" alt="<?php bloginfo('name'); ?>">
            <?php endif; ?>
            <?php bloginfo('name'); ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header_menu',
                'container' => false,
                'menu_class' => 'navbar-nav ml-auto',
            ));
            ?>
        </div>
    </nav>
    <div class="main-header-text">
        <?php if (get_field('header1')): ?>
            <h3><?php the_field('header1'); ?></h3>
        <?php endif; ?>
        <?php if (get_field('header2')): ?>
            <h4><?php the_field('header2'); ?></h4>
        <?php endif; ?>
        <?php if (get_field('header_text')): ?>
            <p><?php the_field('header_text'); ?></p>
        <?php endif; ?>
        <div class="main-header-buttons">
            <?php if (get_field('header_btn1')):
                $link = get_field('header_btn1');
                ?>
                <a href="<?php echo esc_url($link['url']); ?>"
                   class="btn btn-pink rounded-pill"><?php echo esc_html($link['title']); ?></a>
            <?php endif; ?>
            <?php if (get_field('header_btn2')):
                $link = get_field('header_btn2');
                ?>
                <a href="<?php echo esc_url($link['url']); ?>"
                   class="btn btn-violet rounded-pill"><?php echo esc_html($link['title']); ?></a>
            <?php endif; ?>
        </div>
    </div>
</header>

<section class="section-watch section-tabs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5">
                <h3>Dream Big Inspire the World</h3>
                <h4>We turn creative ideas into your business</h4>
                <ul class="nav nav-pills" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link rounded-pill active" id="webdesign-tab" data-toggle="tab"
                           href="#webdesign" role="tab" aria-controls="webdesign"
                           aria-selected="true">Webdesign</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill " id="mobileapp-tab" data-toggle="tab" href="#mobileapp"
                           role="tab" aria-controls="mobileapp" aria-selected="false">Mobile app</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill" id="branding-tab" data-toggle="tab" href="#branding"
                           role="tab" aria-controls="branding" aria-selected="false">Branding</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="webdesign" role="tabpanel"
                         aria-labelledby="webdesign-tab">
                        <p>Webdesign Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur obcaecati
                            vero aliquid libero doloribus ad, unde tempora maiores, ullam, modi qui quidem minima
                            debitis perferendis vitae cumque et quo impedit.</p>
                        <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
                    </div>
                    <div class="tab-pane fade" id="mobileapp" role="tabpanel" aria-labelledby="mobileapp-tab">
                        <p>Mobile app Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur obcaecati
                            vero aliquid libero doloribus ad, unde tempora maiores, ullam, modi qui quidem minima
                            debitis perferendis vitae cumque et quo impedit.</p>
                        <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
                    </div>
                    <div class="tab-pane fade" id="branding" role="tabpanel" aria-labelledby="branding-tab">
                        <p>Branding Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur obcaecati
                            vero aliquid libero doloribus ad, unde tempora maiores, ullam, modi qui quidem minima
                            debitis perferendis vitae cumque et quo impedit.</p>
                        <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/watch.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="section-progress text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4 progress-item">
                <div><i class="fas fa-bullhorn"></i></div>
                <div class="num">500+</div>
                <h4><span>Successfully</span> completed projects</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore aspernatur quas voluptatibus
                    sed dolor optio architecto, praesentium ullam dolorum alias soluta deserunt quod quidem quaerat
                    officiis ipsa quae, magnam esse?</p>
            </div>
            <div class="col-md-4 progress-item">
                <div><i class="fas fa-bullhorn"></i></div>
                <div class="num">254+</div>
                <h4><span>Highly</span> specialised employees</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore aspernatur quas voluptatibus
                    sed dolor optio architecto, praesentium ullam dolorum alias soluta deserunt quod quidem quaerat
                    officiis ipsa quae, magnam esse?</p>
            </div>
            <div class="col-md-4 progress-item">
                <div><i class="fas fa-bullhorn"></i></div>
                <div class="num">45+</div>
                <h4><span>Awards</span> around the world</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore aspernatur quas voluptatibus
                    sed dolor optio architecto, praesentium ullam dolorum alias soluta deserunt quod quidem quaerat
                    officiis ipsa quae, magnam esse?</p>
            </div>
        </div>
    </div>
</section>

<section class="section-lets text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Let's Grow Together</h3>
                <h4>We turn creative ideas into your business</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ipsa voluptas delectus sed,
                    assumenda voluptates ab adipisci perspiciatis earum magnam fugit quasi culpa, repellendus totam
                    in unde neque sapiente quod.</p>
                <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
            </div>
        </div>
    </div>
</section>

<section class="section-design">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>We are best and creative agency</h3>
                <h4>We turn creative ideas into your business</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam ipsam, quas, illo laborum
                    molestias nihil dolore nobis quis, quam reiciendis asperiores. Accusamus consequatur ipsum
                    asperiores dolore perferendis, tempore ducimus blanditiis.</p>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <span><i class="far fa-comments"></i></span>
                        <h2>Graphic Design</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam harum vero asperiores
                            vitae, magnam et dolores repudiandae exercitationem voluptatibus veniam rerum voluptas
                            architecto alias culpa tempore dolorem incidunt quasi fuga.</p>
                        <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <span><i class="fas fa-bullhorn"></i></span>
                        <h2>Graphic Design</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam harum vero asperiores
                            vitae, magnam et dolores repudiandae exercitationem voluptatibus veniam rerum voluptas
                            architecto alias culpa tempore dolorem incidunt quasi fuga.</p>
                        <p><a href="#" class="btn btn-pink btn-shadow">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="embed-responsive embed-responsive-16by9 mt-5">
                    <iframe id="videoPlayer" class="embed-responsive-item"
                            src="https://www.youtube.com/embed/LhFkgYXYU4g" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <div id="videoPlayBtn"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-work section-tabs">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h4>Our Recent Work</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati ipsum cumque, sit earum
                    quasi, nisi repudiandae perspiciatis culpa praesentium cupiditate, distinctio maiores mollitia.
                    Similique quidem, harum aliquam consectetur qui ut.</p>
            </div>
            <div class="col-md-12">
                <ul class="nav nav-pills justify-content-center" id="myTab-gallery" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active rounded-pill" id="webdesign-tab2" data-toggle="tab"
                           href="#webdesign2" role="tab" aria-controls="webdesign2"
                           aria-selected="true">Webdesign</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill" id="mobileapp-tab2" data-toggle="tab" href="#mobileapp2"
                           role="tab" aria-controls="mobileapp2" aria-selected="false">Mobile app</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link rounded-pill" id="branding-tab2" data-toggle="tab" href="#branding2"
                           role="tab" aria-controls="branding2" aria-selected="false">Branding</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="webdesign2" role="tabpanel"
                         aria-labelledby="webdesign-tab2">
                        <div class="gallery text-center row">
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/1.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/1_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/2.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/2_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/3.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/3_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/4.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/4_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/5.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/5_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/6.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/6_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/7.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/7_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/8.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/8_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/9.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/9_s.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mobileapp2" role="tabpanel" aria-labelledby="mobileapp-tab2">
                        <div class="gallery text-center row">
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/4.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/4_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/5.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/5_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/6.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/6_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/1.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/1_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/2.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/2_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/3.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/3_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/7.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/7_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/8.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/8_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/9.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/9_s.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="branding2" role="tabpanel" aria-labelledby="branding-tab2">
                        <div class="gallery text-center row">
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/7.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/7_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/8.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/8_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/9.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/9_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/1.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/1_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/2.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/2_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/3.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/3_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/4.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/4_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/5.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/5_s.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-sm-4 gallery-item">
                                <a href="img/gallery/6.jpg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/gallery/6_s.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-reviews">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="carousel-caption">
                                <h3>Our Happy Client</h3>
                                <h4>Testimonials</h4>
                                <blockquote class="blockquote">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                        posuere erat a ante.</p>
                                    <footer class="blockquote-footer">Mr. John Doe</footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-sm-5 d-none d-sm-block">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/client.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="carousel-caption">
                                <h3>Our Happy Client</h3>
                                <h4>Testimonials</h4>
                                <blockquote class="blockquote">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                        posuere erat a ante.</p>
                                    <footer class="blockquote-footer">Mr. Jack</footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-sm-5 d-none d-sm-block">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/client.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="carousel-caption">
                                <h3>Our Happy Client</h3>
                                <h4>Testimonials</h4>
                                <blockquote class="blockquote">
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                        posuere erat a ante.</p>
                                    <footer class="blockquote-footer">Mr. David</footer>
                                </blockquote>
                            </div>
                        </div>
                        <div class="col-sm-5 d-none d-sm-block">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/client.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section class="section-form text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Need Help?</h4>
                <h5>Don't Forget to Contact With Us</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente iusto modi illo quasi maiores
                    iure expedita vel quo, magnam quia temporibus consectetur unde, repellendus odit culpa rerum.
                    Suscipit, nihil, provident!</p>

                <form class="text-left">
                    <div class="row">
                        <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-md-5">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-md-2 text-center text-md-left">
                            <button type="submit" class="btn btn-violet btn-shadow">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-6">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Aproach</a></li>
                            <li><a href="#">Sustainability</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Aproach</a></li>
                            <li><a href="#">Sustainability</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Aproach</a></li>
                            <li><a href="#">Sustainability</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h5>Company</h5>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Aproach</a></li>
                            <li><a href="#">Sustainability</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 footer-images">
                <div class="row">
                    <div class="col-6">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/footer_img1.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/footer_img1.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/footer_img1.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/footer_img1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav">
                    <li class="nav-item">
                        <span class="nav-link">&copy; 2021 Uladzimir</span>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link">Privacy</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Terms of Use</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Site Map</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<button class="scrollToTop"><i class="fas fa-angle-up"></i></button>

<!-- <div class="preloader d-flex justify-content-center align-items-center">
    <div class="spinner-border text-danger" style="width: 10rem; height: 10rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div> -->

<?php wp_footer(); ?>
</body>

</html>