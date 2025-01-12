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

    <title>Nosotros | <?php echo $titulo; ?></title>

    <?php require_once '../config/link.php'; ?>

</head>
<body>

    <?php require_once '../nav/navbar.html'; ?>

    <!-- Start Breadcrumb
  ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(<?php echo $link_general; ?>inicio/dom/img/fox-g0f710e3b3_1280-min.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Sobre nosotros</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Inicio</a></li>
                            <li class="active">Nosotros</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About
   ============================================= -->
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
                            <h2 class="heading text-center">Quienes somos</h2>
                            <p>
                                Karamagua Pachamama es un grupo empresarial que se dedica al desarrollo agroforestal integrado y a la venta y adquisición de bonos de carbono y certificados de reducción de emisiones de GEI. Su labor se enfoca en implementar iniciativas para la mitigación de la huella de carbono en el mundo y fomentar el desarrollo socioeconómico equitativo en las zonas rurales, valorizando el trabajo de los propietarios de la tierra. Su CEO ha expresado la importancia de ser productivos y aprovechar el sistema integrado monetario del CO2 para lograr una inclusión financiera tanto de empresas como de personas naturales. Para respaldar financieramente sus proyectos, utilizan información verificada de la cuantificación de los datos de procesamiento de los gases de efecto invernadero. El objetivo principal de Karamagua Pachamama es promover la armonía entre el ser humano y la naturaleza, y reducir la contaminación generada por la humanidad en el planeta.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6 col-lg-6 about-style-one">
                    <div class="row align-center">
                        <div class="col-xl-12 col-lg-12">
                            <h2 class="heading">Mision</h2>
                            <p>
                                Nuestro objetivo es acercar a los propietarios, tenedores y poseedores de la tierra a un planeta más ecológico,
                                mediante un acuerdo moral con el ecosistema y la biodiversidad del planeta. Buscamos crear un planeta verde donde hombres,
                                especies diversas y la naturaleza convivan en armonía, cuidándonos mutuamente y asegurando un aire limpio y saludable para todos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6 col-lg-6 about-style-one">
                    <div class="row align-center">
                        <div class="col-xl-12 col-lg-12">
                            <h2 class="heading">Vision</h2>
                            <p>
                                Nos consolidamos como la empresa más dinámica, eficaz y eficiente en promover y defender el ecosistema y
                                el equilibrio armónico entre el ser humano y la naturaleza, incluyendo todas las especies.
                                Aspiramos a la coexistencia armoniosa entre la fauna, la flora, los minerales y los seres humanos,
                                entendiendo que cada uno de ellos es una pieza fundamental para el equilibrio de nuestro hogar: la Tierra.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Farmer
    ============================================= -->
    <div class="farmer-area default-padding bottom-less bg-gray" style="background-image: url(<?php echo $link_general; ?>lib/agrul/assets/img/shape/36.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h5 class="sub-title">Nuestros profesionales</h5>
                        <h2 class="title">Conoce a nuestros expertos en agroforestería</h2>
                        <div class="devider"></div>
                        <p>
                            Nuestros miembros de Karamagua son líderes comprometidos con la sostenibilidad ambiental y el desarrollo socioeconómico equitativo.
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
                                    <span>Farmer of tomatoes</span>
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
                                    <span>Farmer of cherry</span>
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
                                    <span>Farmer of potato</span>
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


    <!-- Start Why Choose Us
   ============================================= -->
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
                                <span class="medium">Agricultura, Productos Orgánicos</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 choose-us-style-one">
                    <h5 class="sub-title">CONÓCENOS</h5>
                    <h2 class="title">La agricultura es importante para <br> el futuro del desarrollo</h2>
                    <div class="accordion accordion-regular mt-35" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ¿Qué agregas al suelo antes de plantar un cultivo?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Depende del tipo de cultivo y del tipo de suelo, pero generalmente se agregan fertilizantes y nutrientes para mejorar la calidad del suelo
                                        y proporcionar a las plantas los nutrientes necesarios para crecer saludablemente. También se pueden agregar enmiendas orgánicas como compost,
                                        estiércol, ceniza de madera, entre otros, para mejorar la estructura del suelo y aumentar la retención de agua y nutrientes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ¿Usas herbicidas?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Si estás buscando alternativas más ecológicas y sostenibles para el manejo de malezas en tus cultivos,
                                        hay algunas opciones a considerar. Algunas alternativas a los herbicidas químicos incluyen el control manual de malezas,
                                        el uso de mulch para suprimir su crecimiento, la rotación de cultivos y la intercalación de cultivos y la utilización de cultivos
                                        de cobertura que son sembrados entre las temporadas de cultivo para proteger y mejorar la salud del suelo.
                                        También puedes investigar y considerar el uso de herbicidas orgánicos y biodegradables que se derivan de fuentes naturales.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿De dónde proviene el agua que usan en sus cultivos?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p>
                                        Es importante asegurarse de utilizar agua de fuentes sostenibles,
                                        como ríos o pozos que no estén sobreexplotados. También se puede recolectar agua de lluvia y utilizar sistemas de riego eficientes para minimizar
                                        el desperdicio de agua.
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