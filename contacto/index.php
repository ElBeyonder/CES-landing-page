<?php
    session_start();
    require_once '../config/config.php';

?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Contact | <?php echo $titulo; ?></title>

    <?php require_once '../config/link.php'; ?>

</head>
<body>


    <?php require_once '../nav/navbar.html'; ?>


    <!-- Start Breadcrumb  ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(https://i.imgur.com/97BHGk3.jpeg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Contact</h1> <!-- Título traducido -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo $link_general; ?>"><i class="fas fa-home"></i> Home</a></li> <!-- 'Inicio' cambiado a 'Home' -->
                            <li class="active">Contact</li> <!-- 'Contacto' cambiado a 'Contact' -->
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- End Breadcrumb -->

    <!-- Start Contact Us  ============================================= -->
    <div class="contact-area default-padding">
        <div class="container">
            <div class="row align-center">

                <div class="col-tact-stye-one col-lg-7 mb-md-50">
                    <div class="contact-form-style-one">
                        <h2 class="heading">Contact</h2>
                        <form id="form_contacto" onsubmit="event.preventDefault();" method="POST" class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input required class="form-control" id="name" name="name" placeholder="Full Name" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input required class="form-control" id="email" name="email" placeholder="Email" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input required class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea required class="form-control" id="comments" name="comments" placeholder="Tell us about your project "></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Get in touch
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-tact-stye-one col-lg-5 pl-60 pl-md-15 pl-xs-15">
                    <div class="contact-style-one-info">
                        <ul>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Our Location</h5>
                                    <p>
                                        188 Beach 91 Street, Rockaway Beach, <br> New York, 11693
                                    </p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <i class="fas fa-envelope-open-text"></i>
                                </div>
                                <div class="info">
                                    <h5 class="title">Our Official Email</h5>
                                    <a href="mailto:info@conservationes.org">info@conservationes.org</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->


    <?php require_once '../nav/footer.php'; ?>
    <?php require_once '../config/script.php'; ?>
</body>
</html>