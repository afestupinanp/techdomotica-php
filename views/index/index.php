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
    <title>Tech Domótica - Inicio</title>
</head>
<body>
    <?php require_once "../views/components/navbar.php"; ?>
    <div class = "container welcoming" style = "padding-top: 10px;">
        <div class = "row">
            <div class = "col-12 text-center">
                <img src = "../media/img/logo-big.png" width = "500" height = "500" class = "img-fluid"/>
                <h2 style = "margin-top: 25px; text-align: center;">Inteligente, simple y fácil de usar.</h2>
                <hr style = "margin-top: 35px; margin-bottom: 35px;" />
                <img src = "../media/img/sala.png" class = "img-fluid tech-img-exalt" />
            </div>
        </div>
        <div class = "row text-center" style = "margin-top: 25px;">
            <div class = "col-sm-12 col-lg-6">
                <h5>¿Qué es Tech Domótica?</h5>
                <p style = "text-align: justify;">El creciente uso de ambientes automatizados con gran cantidad de tecnología aumentó la demanda por aplicaciones que permitan a los usuarios la facilidad de manejar dichas tecnologías sencilla y desde cualquier lugar.<br>
                Tech Domótica es un simulador de ambientes domotizados que permite la gestión eficiente de un ambiente automatizado, utilizando diferentes componentes y diferentes tecnologías para su desarrollo.</p>
                <img src = "../media/img/java.png" class = "img-fluid" width = "128" height = "128" />
                <img src = "../media/img/mysql.png" class = "img-fluid" width = "128" height = "128" />
            </div>
            <div class = "col-sm-12 col-lg-6">
                <h5>¿En dónde está disponible Tech Domótica?</h5>
                <img src = "../media/img/linuxandwindows.png" class = "img-fluid" width = "128" height = "128" />
                <img src = "../media/img/android-logo.png" class = "img-fluid" width = "128" height = "128" />
                <p style = "margin-top: 10px; text-align: justify;">Nuestra idea es que los usuarios puedan usar la aplicación en el dispositivo en que deseen. Tech Domótica, al estar escrito en Java, está disponible para su uso en Windows, Linux, macOS y Android.<br><a href = "UsuarioController.php?methodname=download">¡Descarga la aplicación</a> en las diferentes plataformas disponibles para tu mejor experiencia!</p>
            </div>
        </div>
    </div>
    <?php require_once "../views/components/footer.php"; ?>
</body>
<script src = "../jquery.min.js"></script>
<script src = "../bootstrap.min.js"></script>
</html>