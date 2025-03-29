<?php
    session_start();
    require_once 'config/config.php';

?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Home | <?php echo $titulo; ?> </title>

    <?php require_once 'config/link.php'; ?>

    <link rel="stylesheet" href="inicio/dom/index.css?v=<?php echo $timeVersion; ?>">

</head>
<body>

    <?php require_once 'nav/navbar.html'; ?>

    <!-- Start Banner Area ============================================= -->
    <div class="banner-area navigation-circle text-light banner-style-one zoom-effect overflow-hidden ">
        <!-- Slider main container -->
        <div class="banner-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Single Item -->
                <div class="swiper-slide banner-style-one">
                    <div class="container">

                    </div>
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(https://i.imgur.com/ztqcsly.jpeg);"></div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="swiper-slide banner-style-one">
                    <div class="container">

                    </div>
                    <div class="banner-thumb bg-cover shadow dark" style="background: url(https://i.imgur.com/AHq2eNH.jpeg);"></div>
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
        <div class="container">
            <div class="row align-center">
                <div class="col-md-12 about-style-one mb-5">
                    <div class="row align-center justify-content-center">
                        <div class="col-xl-6 col-lg-12 justify-content-center">
                            <h2 class="heading text-center">Who We Are?</h2> <!-- Quienes somos -->
                            <p class="wow fadeIn" data-wow-delay="300ms">
                                Conservation of Endangered Species (CES) is a non-profit organization based in Rockaway Beach,
                                Queens, New York, United States,
                                dedicated to wildlife and environmental conservation through research and education.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 about-style-one mb-5">
                    <div class="row align-center justify-content-center">
                        <div class="justify-content-center">
                            <h2 class="heading text-center">What we do?</h2> <!-- Quienes somos -->
                            <p class="wow fadeInLeft" data-wow-delay="300ms">
                                Our work focuses on protecting terrestrial and marine ecosystems
                                by prioritizing species classified as threatened or endangered under local,
                                state, federal, and international laws.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 about-style-one mb-5">
                    <div class="row align-center justify-content-center">
                        <div class="justify-content-center">
                            <h2 class="heading text-center">Where we operate?</h2> <!-- Quienes somos -->
                            <p class="wow fadeInUp" data-wow-delay="300ms">
                                We operate locally, regionally, and globally to address the biodiversity crisis,
                                driven by factors like habitat loss,
                                deforestation, pollution, and climate change.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->



    <!-- Start Gallery ============================================= -->
    <div class="gallery-style-one-area default-padding-top mb-5">
        <div class="container container-stage">
            <div class="row">
                <div class="col-xl-12">
                    <div class="carousel-stage-right carousel-style-one swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="https://i.imgur.com/97BHGk3.jpeg" alt="Thumb">
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="https://i.imgur.com/b1TuVLv.jpeg" alt="Thumb">
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="https://i.imgur.com/2N9WhI6.jpeg" alt="Thumb">
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="https://i.imgur.com/ILZU1bp.jpeg" alt="Thumb">
                                </div>
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="gallery-style-one">
                                    <img src="https://i.imgur.com/ztqcsly.jpeg" alt="Thumb">
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


    <?php require_once 'nav/footer.php'; ?>
    <?php require_once 'config/script.php'; ?>

</body>
</html>