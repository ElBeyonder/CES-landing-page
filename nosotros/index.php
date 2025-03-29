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

    <title>About US | <?php echo $titulo; ?></title>

    <?php require_once '../config/link.php'; ?>
    <link rel="stylesheet" href="dom/about-us.css?v=<?php echo $timeVersion; ?>">


</head>
<body>

    <?php require_once '../nav/navbar.html'; ?>

    <!-- Start Breadcrumb ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light"
         style="background-image: url(https://i.imgur.com/ILZU1bp.jpeg); background-position: bottom|center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>About Us</h1>
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


    <!-- Start Farmer ============================================= -->
    <div class="farmer-area default-padding bottom-less bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row justify-content-center">

                        <!-- Single Item -->
                        <div class="col-lg-4 farmer-stye-one">
                            <div class="farmer-style-one-item">
                                <div class="thumb">
                                    <img class="img-team" src="https://i.imgur.com/HzW8vB6.jpeg" alt="Image Not Found">

                                </div>
                                <div class="info">
                                    <h4><a href="#">Rolando Gutierrez</a></h4>
                                    <span>My passion for the natural world began in my childhood, growing up in rural Colombia.
                                        <br>
                                        <br>
                                        I pursued this passion through an Ecology degree in Colombia,
                                        followed by a Master in Management and Conservation of Tropical Forests and Biodiversity in Costa Rica.
                                        After further developing my English language skills,
                                        I am pursuing a second Master in Earth and Atmospheric
                                        Science at The City College of New York where I'm focus my thesis research in Coastal Water Quality and Flooding
                                        in the New York City coast.
                                        <br>
                                        <br>
                                        My conservation experience encompasses academic research and volunteer work in National Parks and protected areas across Colombia,
                                        Costa Rica, Panama, the Dominican Republic,
                                        and the United States.
                                        I have also contributed to educational projects and served as a biodiversity consultant.
                                    </span>
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



    <?php require_once '../nav/footer.php'; ?>
    <?php require_once '../config/script.php'; ?>
</body>
</html>