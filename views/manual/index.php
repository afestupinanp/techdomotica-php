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
    <title>Tech Domótica - Manual del usuario</title>
</head>
<body>
    <?php require_once "../views/components/navbar.php"; ?>
    <div class = "container" style = "padding-top: 10px;">
        <div class = "row">
            <div class = "col-12 text-center">
                <h2>Manual de usuario de Tech Domótica</h2>
            </div>
            <?php if(isset($_SESSION["user"])) { ?>
            <div class = "col-12 text-center">
                <p>Documentación adicional y técnica puede ser encontrada en <a href = "https://drive.google.com/drive/u/0/folders/1YT9865gDo-XYMWFGNIMqMJPNjmGKjweM" target ="_blank">Google Drive</a>, desde manuales técnicos y los diferentes planes de desarrollo y de calidad.</p>
            </div>
            <?php } ?>
            <div class = "embed-responsive embed-responsive-4by3">
                <iframe class = "embed-responsive-item" src = "../media/downloads/manualtechdo.pdf"></iframe>
            </div>
        </div>
    
    </div>
    <?php require_once "../views/components/footer.php"; ?>
</body>
<script src = "../jquery.min.js"></script>
<script src = "../bootstrap.min.js"></script>
</html>