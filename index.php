<?php
    session_start();
    require_once 'config/config.php';

?>
<!doctype html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Inicio | <?php echo $titulo; ?> </title>

    <?php require_once 'config/link.php'; ?>

</head>
<body>
    <?php require_once 'nav/navbar.html'; ?>

    <!-- Start Banner Area ============================================= -->
    <div class="banner-area navigation-circle text-light banner-style-one zoom-effect overflow-hidden">
        <!-- Slider main container -->
        <div class="banner-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Single Item -->
                <div class="swiper-slide banner-style-one">
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(inicio/dom/img/alberta-g7ce0e37c9_1280.jpg);"></div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-7">
                                <div class="content">
                                    <h4>Wildlife Conservation</h4>
                                    <h2><strong>Protecting Endangered Species and Ecosystems</strong></h2>
                                    <p>
                                        CES focuses on protecting endangered species and ecosystems through dedicated research and conservation efforts. By addressing the factors that threaten biodiversity, such as habitat loss, deforestation, and pollution, CES works globally to ensure the survival of vulnerable species.
                                    </p>
                                    <div class="button">
                                        <a class="btn btn-theme secondary btn-md radius animation" href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="swiper-slide banner-style-one">
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(inicio/dom/img/hintersee-g2cb931eb8_1280.jpg);"></div>
                    <div class="container">
                        <div class="row align-center">
                            <div class="col-xl-7">
                                <div class="content">
                                    <h4>Marine Ecosystems Protection</h4>
                                    <h2><strong>Preserving Our Oceans and Coastal Areas</strong></h2>
                                    <p>
                                        CES is committed to the conservation of marine ecosystems, focusing on protecting coastal and oceanic environments. Through research and sustainable practices, CES aims to restore damaged ecosystems and ensure the long-term survival of marine species.
                                    </p>
                                    <div class="button">
                                        <a class="btn btn-theme secondary btn-md radius animation" href="#">Discover More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
            <!-- Navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>


    <!-- End Main -->

    <!-- Start About ============================================= -->
    <div class="about-style-one-area default-padding">

        <!-- Shape -->
        <div class="shape-right-top">
            <img src="<?php echo $link_general; ?>lib/agrul/assets/img/shape/leaf.png" alt="Image not found">
        </div>
        <!-- End Shape -->

        <div class="container">
            <div class="row align-center">
                <div class="col-xl-5 col-lg-6 about-style-one pr-50 pr-md-15 pr-xs-15">
                    <div class="thumb">
                        <img src="<?php echo $link_general; ?>inicio/dom/img/mountains-g15678e16a_1280-min.jpg" alt="Image Not Found">
                        <div class="sub-item">
                            <img src="<?php echo $link_general; ?>lib/agrul/assets/img/1.jpg" alt="Image Not Found">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 about-style-one">
                    <div class="row align-center">
                        <div class="col-xl-7 col-lg-12">
                            <h2 class="heading">Wildlife and Ecosystem Conservation</h2>
                            <p>
                                At CES, we are dedicated to protecting endangered species and ecosystems worldwide. Our efforts focus on combating habitat loss, deforestation, pollution, and climate change through research, education, and conservation programs. We aim to ensure the survival of vulnerable species and restore the balance of our planet's ecosystems.
                            </p>
                            <ul class="check-solid-list mt-20">
                                <li>We protect terrestrial and marine ecosystems</li>
                                <li>Our work focuses on species threatened by habitat loss and climate change</li>
                                <li>We collaborate globally to preserve biodiversity and ensure a sustainable future</li>
                            </ul>
                        </div>
                        <div class="col-xl-5 col-lg-12 pl-50 pl-md-15 pl-xs-15">
                            <div class="top-product-item">
                                <img src="<?php echo $link_general; ?>lib/agrul/assets/img/icon/1.svg" alt="Icon">
                                <h5><a href="#">Terrestrial Ecosystem Conservation</a></h5>
                                <p>
                                    We work to protect and restore endangered terrestrial ecosystems, addressing issues such as deforestation and land degradation.
                                </p>
                            </div>
                            <div class="top-product-item">
                                <img src="<?php echo $link_general; ?>lib/agrul/assets/img/icon/2.svg" alt="Icon">
                                <h5><a href="#">Marine Ecosystem Protection</a></h5>
                                <p>
                                    Our conservation efforts extend to marine ecosystems, focusing on the protection of oceans, coasts, and marine biodiversity.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End About -->

    <!-- Start Services ============================================= -->
    <div class="services-style-one-area default-padding bg-gray half-bg-theme">
        <div class="shape-extra">
            <img src="<?php echo $link_general; ?>lib/agrul/assets/img/shape/18.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="left-info">
                            <h5 class="sub-title">Our Approach</h5>
                            <h2 class="title">We protect ecosystems and biodiversity through conservation and carbon credits</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="right-info">
                            <p>
                                At CES, we are dedicated to the conservation of wildlife and ecosystems through the preservation of natural habitats and the reduction of carbon footprints. Through ecological restoration projects, protection of endangered species, and the issuance of green and blue carbon credits, we aim to mitigate the effects of climate change and promote a healthier environment.
                                We believe in a future where nature conservation is essential for the well-being of future generations.
                            </p>
                            <a class="btn btn-theme btn-md radius animation" href="#">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-style-one-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="<?php echo $link_general; ?>lib/agrul/assets/img/thumb/1.png" alt="Ecosystem Conservation">
                                    </div>
                                    <h5><a href="#">Restoration of Terrestrial Ecosystems</a></h5>
                                    <p>
                                        We work on the restoration of terrestrial ecosystems, protecting forests and natural habitats.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="<?php echo $link_general; ?>lib/agrul/assets/img/thumb/2.png" alt="Marine Conservation">
                                    </div>
                                    <h5><a href="#">Protection of Marine Ecosystems</a></h5>
                                    <p>
                                        Our mission also focuses on the protection of oceans and marine ecosystems vital for global biodiversity.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="<?php echo $link_general; ?>lib/agrul/assets/img/thumb/3.png" alt="Biodiversity Restoration">
                                    </div>
                                    <h5><a href="#">Biodiversity Restoration</a></h5>
                                    <p>
                                        We focus on recovering endangered species and promoting biodiversity in our conservation projects.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="<?php echo $link_general; ?>lib/agrul/assets/img/thumb/4.png" alt="Conservation Projects">
                                    </div>
                                    <h5><a href="#">Ecological Conservation Projects</a></h5>
                                    <p>
                                        We develop projects that restore and protect critical habitats for species at risk of extinction.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="services-style-one">
                                    <div class="thumb">
                                        <img src="<?php echo $link_general; ?>lib/agrul/assets/img/thumb/6.png" alt="Environmental Education">
                                    </div>
                                    <h5><a href="#">Environmental Education and Awareness</a></h5>
                                    <p>
                                        We carry out educational campaigns to raise awareness about the importance of conservation and climate change.
                                    </p>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->


    <!-- Start Gallery ============================================= -->
    <div class="gallery-style-one-area default-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Our Gallery</h5>
                        <h2 class="title">Lands</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-stage">
            <div class="row">
                <div class="col-xl-12">
                    <div class="carousel-stage-right carousel-style-one swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="inicio/dom/img/trees-g1610847e2_1280.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <span>Fruit</span>
                                        <h4><a href="#">Healthy Food</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="inicio/dom/img/tree-gbcee13c57_1280.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <span>Organic</span>
                                        <h4><a href="#">Cow Milk</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="inicio/dom/img/river-gc2136a945_1280.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <span>Vegetables</span>
                                        <h4><a href="#">Organic Vegetables</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="inicio/dom/img/nature-gaabdcf799_1280-min.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <span>Cereals</span>
                                        <h4><a href="#">Fresh Mandarins</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="inicio/dom/img/lake-g90b55e3bd_1280.jpg" alt="Thumb">
                                    <div class="overlay">
                                        <span>Harvest</span>
                                        <h4><a href="#">Crunchy Cucumbers</a></h4>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>

                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Gallery -->

    <!-- Start Fun Factor Area ============================================= -->
    <div class="fun-facts-area default-padding">
        <div class="shape-left">
            <img src="<?php echo $link_general; ?>lib/agrul/assets/img/shape/27.png" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="item-inner">
                <div class="shape-right">
                    <img src="<?php echo $link_general; ?>lib/agrul/assets/img/shape/26.png" alt="Image Not Found">
                </div>
                <div class="row">
                    <div class="col-lg-4 fun-fact-style-one">
                        <div class="heading">
                            <div class="sub-title">Achievements</div>
                            <h2 class="title">Creating value <br> since 1990</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 fun-fact-style-one text-end">
                        <div class="row">
                            <!-- Single item -->
                            <div class="col-lg-4 col-md-4 item">
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="1000" data-speed="2000">1000</div>
                                        <div class="operator">H</div>
                                    </div>
                                    <span class="medium">Sustainable Land Cultivation</span>
                                </div>
                            </div>
                            <!-- End Single item -->

                            <!-- Single item -->
                            <div class="col-lg-4 col-md-4 item">
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="99" data-speed="2000">99</div>
                                        <div class="operator">%</div>
                                    </div>
                                    <span class="medium">Satisfied Customers</span>
                                </div>
                            </div>
                            <!-- End Single item -->

                            <!-- Single item -->
                            <div class="col-lg-4 col-md-4 item">
                                <div class="fun-fact">
                                    <div class="counter">
                                        <div class="timer" data-to="688" data-speed="2000">688</div>
                                        <div class="operator">K</div>
                                    </div>
                                    <span class="medium">Sales of Our Products</span>
                                </div>
                            </div>
                            <!-- End Single item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->

    <?php require_once 'nav/footer.php'; ?>
    <?php require_once 'config/script.php'; ?>
</body>
</html>