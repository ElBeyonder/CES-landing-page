<?php
    session_start();
    require_once '../config/config.php';

?>
<!doctype html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>About US | <?php echo $titulo; ?></title>

    <?php require_once '../config/link.php'; ?>

</head>
<body>

    <?php require_once '../nav/navbar.html'; ?>

    <!-- Start Breadcrumb ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light"
         style="background-image: url(<?php echo $link_general; ?>nosotros/dom/img/beach-ga85e1959b_1280.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>About CES</h1> <!-- Sobre CES -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li> <!-- Inicio -->
                            <li class="active">About Us</li> <!-- Sobre nosotros -->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About ============================================= -->
    <div class="about-style-one-area default-padding">

        <!-- Shape -->
        <div class="shape-right-top">
            <img src="<?php echo $link_general; ?>lib/agrul/assets/img/shape/leaf.png" alt="Image not found">
        </div>
        <!-- End Shape -->

        <div class="container">
            <div class="row align-center">
                <div class="col-md-12 about-style-one mb-5">
                    <div class="row align-center justify-content-center">
                        <div class="col-xl-6 col-lg-12 justify-content-center">
                            <h2 class="heading text-center">Who We Are</h2> <!-- Quienes somos -->
                            <p>

                                CES (Conservation of Endangered Species) is a global organization dedicated to promoting
                                sustainable practices through integrated agroforestry development and the trading of carbon
                                credits and greenhouse gas emission reduction certificates. Our mission is to mitigate
                                the carbon footprint while fostering equitable socio-economic development in rural
                                areas by valuing the work of landowners. CES leverages verified data
                                on greenhouse gas processing to finance projects that bridge the gap
                                between productivity and environmental responsibility. Our vision is to harmonize
                                human activities with nature, ensuring a sustainable and healthier planet for future generations.

                                <!-- CES es una organización global dedicada a promover prácticas sostenibles mediante el desarrollo agroforestal integrado y el comercio de créditos de carbono y certificados de reducción de emisiones de GEI. Nuestra misión es mitigar la huella de carbono mientras fomentamos el desarrollo socioeconómico equitativo en las zonas rurales, valorando el trabajo de los propietarios de la tierra. CES utiliza datos verificados sobre el procesamiento de gases de efecto invernadero para financiar proyectos que combinan productividad y responsabilidad ambiental. Nuestra visión es armonizar las actividades humanas con la naturaleza, garantizando un planeta sostenible y saludable para las generaciones futuras. -->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6 col-lg-6 about-style-one">
                    <div class="row align-center">
                        <div class="col-xl-12 col-lg-12">
                            <h2 class="heading">Mission</h2> <!-- Mision -->
                            <p>
                                Our mission is to guide landowners and stakeholders towards a greener planet by fostering a moral agreement with the Earth's ecosystem and biodiversity. We aim to create a green world where humans, diverse species, and nature coexist in harmony, nurturing each other and ensuring clean and healthy air for all.
                                <!-- Nuestra misión es guiar a los propietarios y actores interesados hacia un planeta más verde mediante un acuerdo moral con el ecosistema y la biodiversidad de la Tierra. Aspiramos a crear un mundo verde donde los humanos, las especies diversas y la naturaleza coexistan en armonía, cuidándose mutuamente y asegurando un aire limpio y saludable para todos. -->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6 col-lg-6 about-style-one">
                    <div class="row align-center">
                        <div class="col-xl-12 col-lg-12">
                            <h2 class="heading">Vision</h2> <!-- Vision -->
                            <p>
                                We aim to become the most dynamic and effective organization in promoting and defending the ecosystem while ensuring a harmonious balance between humans and nature, including all species. Our vision encompasses a world where fauna, flora, minerals, and humanity coexist, recognizing that each is a vital piece in maintaining the balance of our shared home: Earth.
                                <!-- Nuestro objetivo es convertirnos en la organización más dinámica y eficaz en la promoción y defensa del ecosistema, asegurando un equilibrio armónico entre los humanos y la naturaleza, incluidas todas las especies. Nuestra visión abarca un mundo donde la fauna, la flora, los minerales y la humanidad coexistan, reconociendo que cada uno es una pieza vital en el mantenimiento del equilibrio de nuestro hogar compartido: la Tierra. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End About -->

    <!-- Start Farmer ============================================= -->
    <div class="farmer-area default-padding bottom-less bg-gray" style="background-image: url(<?php echo $link_general; ?>lib/agrul/assets/img/shape/36.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Our professionals</h5> <!-- Nuestros profesionales -->
                        <h2 class="title">Meet our environmental sustainability experts</h2> <!-- Conoce a nuestros expertos en sostenibilidad ambiental -->
                        <div class="devider"></div>
                        <p>
                            Our CES members are leaders committed to advancing environmental sustainability and promoting equitable socio-economic development. <!-- Nuestros miembros de CES son líderes comprometidos con avanzar en la sostenibilidad ambiental y promover un desarrollo socioeconómico equitativo. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">

                        <!-- Single Item -->
                        <div class="col-lg-4 farmer-stye-one">
                            <div class="farmer-style-one-item">
                                <div class="thumb">
                                    <img src="<?php echo $link_general; ?>lib/agrul/assets/img/800x800.png" alt="Image Not Found">
                                    <div class="social">
                                        <i class="fas fa-share-alt"></i>
                                        <ul>
                                            <li class="facebook">
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>Specialist in renewable energy</span> <!-- Especialista en energía renovable -->
                                    <h4><a href="#">Aleesha Brown</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="col-lg-4 farmer-stye-one">
                            <div class="farmer-style-one-item">
                                <div class="thumb">
                                    <img src="<?php echo $link_general; ?>lib/agrul/assets/img/800x800.png" alt="Image Not Found">
                                    <div class="social">
                                        <i class="fas fa-share-alt"></i>
                                        <ul>
                                            <li class="facebook">
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>Climate change advocate</span> <!-- Defensor del cambio climático -->
                                    <h4><a href="#">Kevin Martin</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="col-lg-4 farmer-stye-one">
                            <div class="farmer-style-one-item">
                                <div class="thumb">
                                    <img src="<?php echo $link_general; ?>lib/agrul/assets/img/800x800.png" alt="Image Not Found">
                                    <div class="social">
                                        <i class="fas fa-share-alt"></i>
                                        <ul>
                                            <li class="facebook">
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="#">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>Sustainable agriculture expert</span> <!-- Experta en agricultura sostenible -->
                                    <h4><a href="#">Sarah Albert</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Farmer -->


    <!-- Start Why Choose Us ============================================= -->
    <div class="choose-us-style-one-area overflow-hidden default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-6 choose-us-style-one">
                    <div class="thumb">
                        <img src="<?php echo $link_general; ?>nosotros/dom/img/products-mujer-afroamericana.jpg" alt="Image Not Found">
                        <div class="shape">
                            <img class="wow fadeInDown" src="<?php echo $link_general; ?>lib/agrul/assets/img/shape/22.png" alt="Image not found">
                        </div>
                        <div class="product-produce">
                            <div class="icon">
                                <i class="flaticon-farmer"></i>
                            </div>
                            <div class="fun-fact">
                                <div class="counter">
                                    <div class="timer" data-to="258" data-speed="2000">258</div>
                                    <div class="operator">K</div>
                                </div>
                                <span class="medium">Agriculture, Organic Products</span> <!-- Agricultura, Productos Orgánicos -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 choose-us-style-one">
                    <h5 class="sub-title">GET TO KNOW US</h5> <!-- CONÓCENOS -->
                    <h2 class="title">Agriculture is key to <br> the future of sustainable development</h2> <!-- La agricultura es importante para el futuro del desarrollo -->
                    <div class="accordion accordion-regular mt-35" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What do you add to the soil before planting a crop?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        It depends on the type of crop and soil, but generally, fertilizers and nutrients are added to enhance soil quality
                                        and provide plants with the nutrients needed for healthy growth. Organic amendments like compost, manure, wood ash, and others
                                        can also be used to improve soil structure and increase water and nutrient retention. <!-- Traducción del primer párrafo -->
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Do you use herbicides?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        If you're looking for more eco-friendly and sustainable alternatives for weed management in your crops, there are several options to consider.
                                        These include manual weed control, using mulch to suppress growth, crop rotation, intercropping, and cover crops to protect and enrich the soil.
                                        You might also explore organic and biodegradable herbicides derived from natural sources. <!-- Traducción del segundo párrafo -->
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Where does the water for your crops come from?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        It is crucial to use water from sustainable sources, such as rivers or wells that are not overexploited. Rainwater harvesting and efficient irrigation systems can also help minimize water waste. <!-- Traducción del tercer párrafo -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose us -->

    <?php require_once '../nav/footer.php'; ?>
    <?php require_once '../config/script.php'; ?>
</body>
</html>