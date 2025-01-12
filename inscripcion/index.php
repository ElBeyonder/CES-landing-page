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

    <title>Contacto | <?php echo $titulo; ?></title>

    <link href="https://res.cloudinary.com/finnhvman/raw/upload/matter/matter-0.2.2.min.css" rel="stylesheet">
    <?php require_once '../config/link.php'; ?>

</head>
<body>

    <?php require_once '../nav/navbar.html'; ?>


    <!-- Start Breadcrumb
   ============================================= -->
    <div class="breadcrumb-area text-center shadow dark bg-fixed text-light" style="background-image: url(<?php echo $link_general; ?>contacto/dom/img/beach-ga85e1959b_1280.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>Únete para crear un mundo mejor.</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo $link_general; ?>"><i class="fas fa-home"></i> Inicio</a></li>
                            <li class="active">Incripcion</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Us
    ============================================= -->
    <div class="contact-area default-padding" style="background-image: url(<?php echo $link_general; ?>lib/agrul/assets/img/shape/28.png);">
        <div class="container">
            <div class="row align-center justify-content-center">
                <div class="col-sm-12 col-md-5 col-xl-5 col-lg-4">
                    <div class="row align-center justify-content-center">

                        <div class="col-sm-12 mb-3 mt-3">
                            <label class="matter-textfield-filled col-12">
                                <input required name="nombre_completo" placeholder=" "/>
                                <span>Nombre Completo</span>
                            </label>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3 mt-3">
                            <label class="matter-textfield-filled col-12">
                                <input required name="nombre_completo" placeholder=" "/>
                                <span>N° Documento identidad</span>
                            </label>
                        </div>
                         <div class="col-sm-12 col-md-6 mb-3 mt-3">
                            <label class="matter-textfield-filled col-12">
                                <input required name="nombre_completo" placeholder=" "/>
                                <span>Fecha expedicion</span>
                            </label>
                        </div>
                         <div class="col-sm-12 col-md-6 mb-3 mt-3">
                            <label class="matter-textfield-filled col-12">
                                <input required name="correo" type="email" placeholder=" "/>
                                <span>Correo</span>
                            </label>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3 mt-3">
                            <label class="matter-textfield-filled col-12">
                                <input required name="celular" type="number" placeholder=" "/>
                                <span>Celular</span>
                            </label>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3 mt-3">
                            <label>Departamento</label>
                            <select class="js-select2 col-12" id="departamento" name="departamento">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3 mt-3">
                            <label>Municipio</label>
                            <select class="js-select2 col-12" id="ciudad" name="ciudad">
                                <option value="AL">Alabama</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3 mt-3">
                            <label class="matter-textfield-filled col-12">
                                <input required name="corregimiento" type="text" placeholder=" "/>
                                <span>Corregimiento</span>
                            </label>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3 mt-3">
                            <label class="matter-textfield-filled col-12">
                                <input required name="vereda" type="text" placeholder=" "/>
                                <span>Vereda</span>
                            </label>
                        </div>
                        <div class="col-sm-12 mb-3 mt-3">
                            <label class="matter-textfield-filled col-12">
                                <input required name="nombre_finca" type="text" placeholder=" "/>
                                <span>Nombre finca</span>
                            </label>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3 mt-3">
                            <label class="matter-textfield-filled col-12">
                                <input required name="hectareas" type="number" placeholder=" "/>
                                <span>Hectareas</span>
                            </label>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3 mt-3">
                            <label class="matter-textfield-filled col-12">
                                <input required name="metros" type="number" placeholder=" "/>
                                <span>Metros</span>
                            </label>
                        </div>
                        <div class="col-sm-12 col-md-4 mb-3 mt-3">
                            <label class="matter-textfield-filled col-12">
                                <input required name="matricula" type="number" placeholder=" "/>
                                <span>Matricula</span>
                            </label>
                        </div>
                        <div class="col-sm-12 col-md-4 mb-3 mt-3">
                            <label class="matter-textfield-filled col-12">
                                <input required name="numero_bien" type="number" placeholder=" "/>
                                <span>N°/# de bien</span>
                            </label>
                        </div>
                        <div class="col-sm-12 col-md-4 mb-3 mt-3">
                            <label class="matter-textfield-filled col-12">
                                <input required name="gestor" type="number" placeholder=" "/>
                                <span>Gestor</span>
                            </label>
                        </div>
                        <div class="col-sm-12 mb-3 mt-3 text-center">
                            <button class="matter-button-contained">Incribirme!</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->


    <?php require_once '../nav/footer.php'; ?>
    <?php require_once '../config/script.php'; ?>
    <script src="apli/inscripcion.js"></script>

</body>
</html>