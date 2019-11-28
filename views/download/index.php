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
    <title>Tech Domótica - Descargas</title>
</head>
<body>
    <?php require_once "../views/components/navbar.php"; ?>
    <div class = "container" style = "padding-top: 10px;">
        <div class = "row text-center">
            <div class="col-12">
                <h2>Descarga Tech Domótica</h2>
            </div>
        </div>
        <div class = "row">
            <div class = "col-lg-6 col-sm-12 text-center">
                <h4>Versión de escritorio</h4>
                <img src = "../media/img/linuxandwindows.png" class = "img-fluid" width = "128" height = "128" />
                <p style = "text-align: justify;">
                Simple y práctica. Esencial para la gestión del ambiente domótico en cualquier escritorio.<br>
                Escrito en Java, Tech Domótica está disponible para su uso en donde esté instalada la máquina virtual de Java, por lo que puedes correr Tech Domótica en Windows, Linux, y macOS.</p>
                <a type = "button" class = "btn btn-info" href = "../media/downloads/techdomotica-java.jar" download>Descargar Tech Domótica para escritorio</a>
                <img src = "../media/img/ver-pc.png" class = "img-fluid" style = "margin-top: 30px;" />
            </div>
            <div class = "col-lg-6 col-sm-12 text-center">
                <h4>Versión de Android</h4>
                <img src = "../media/img/android-logo.png" class = "img-fluid" width = "128" height = "128" />
                <p style = "text-align: justify;">
                Desde cualquier lugar, y siempre contigo.<br>
                Descarga la versión de Android para un uso remoto de Tech Domótica, permitiendo un uso remoto estando en una misma red de forma eficiente. Posee una gran mayoría de los elementos de escritorio.</p>
                <a type = "button" class = "btn btn-info" href = "../media/downloads/techdomotica-android.apk" download>Descargar Tech Domótica para Android</a>
                <img src = "../media/img/ver-android.png" height = "450" width = "275" class = "img-fluid" style = "margin-top: 30px;"/>
            </div>
        </div>
    </div>
    <?php require_once "../views/components/footer.php"; ?>
</body>
<script src = "../jquery.min.js"></script>
<script src = "../bootstrap.min.js"></script>
</html>