<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "../bootstrap.min.css" />
    <link rel = "stylesheet" href = "../style.css" />
    <link rel="icon" href="../media/img/logo1.png" type="image/x-icon" />
    <meta name="theme-color" content="#3f3f3f" />
    <title>Tech Domótica - Acerca de</title>
</head>
<body>
    <?php require_once "../views/components/navbar.php"; ?>
    <div class = "container text-center" style = "padding-top: 10px;">
        <div style = "padding-top: 35px;" class="row">
            <div class="col-lg-12">
                <h2 style = "text-align: center;">Acerca de Tech Domótica</h2>
                <p>Tech Domótica es un gestor de ambientes simulado hecho para Android, Windows, Linux y macOS, escrito en Java.<br>Tech Domótica es un colectivo de múltiples módulos funcionando al mismo tiempo, que permite el control de un ambiente domotizado, generado como proyecto formativo.</p>
            </div>
        </div>
        <div class="row">
            <div class = "stuff-box stuff-box1 col-lg-6 col-sm-12">
                <img src = "../media/img/mision.png" class = "img-fluid" width = "225" height = "225" />
                <p style = "margin-top: 15px; text-align: justify;">
                    Promover el uso de ambientes inteligentes y automatizados mediante el uso de un sistema de información confiable, eficiente y sencillo de usar.
                </p>
            </div>
            <div class="stuff-box stuff-box2 col-lg-6 col-sm-12">
                <img src = "../media/img/vision.png" class = "img-fluid" width = "225" height = "225" />
                <p style = "margin-top: 15px; text-align: justify;">
                    Para el 2019, deseamos tener una implementación piloto de Tech Domótica, en uno de los ambientes de aprendizaje de SENA Salomia.
                </p>
            </div>
        </div>
        <div class = "row" style = "margin-top: 15px;">
            <div class="col-12">
                <img src = "../media/img/logo-big.png" width = "500" height = "500" class = "img-fluid"/>
            </div>
        </div>
    </div>
    <?php require_once "../views/components/footer.php"; ?>
</body>
<script src = "../jquery.min.js"></script>
<script src = "../bootstrap.min.js"></script>
<style>

    .stuff-box {
        transition: 0.2s ease-in-out;
        border-radius: 30px;
    }

    .stuff-box1 {
        background-color: rgb(226, 165, 108);
    }

    .stuff-box2 {
        background-color: rgb(108, 226, 177);
    }

    .stuff-box:hover {
        z-index: 1;
        transform: scale(1.02);
        background-color: #FFF;
        box-shadow: 0px 0px 3px 6px rgba(0, 0, 0, 0.15);
    }

    .stuff-box1:hover {
        color: rgb(143, 89, 38);
    }

    .stuff-box2:hover {
        color: rgb(39, 114, 83);
    }

</style>
</html>