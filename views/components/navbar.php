<nav class = "navbar navbar-expand-lg navbar-fixed-top tech-navbar">
<a style = "z-index: 1;" href = "UsuarioController.php?methodname=index" class = "navbar-brand"><img src = "../media/img/logo1.png" width = "32" height = "32" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span style = "color: #FFF;">&#9776;</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class = "navbar-nav mr-auto">
            <li class = "nav-item"><a class = "nav-link" href = "UsuarioController.php?methodname=index">Inicio</a></li>
            <li class = "nav-item"><a class = "nav-link" href = "UsuarioController.php?methodname=about">Acerca de Tech Domótica</a></li>
            <li class = "nav-item"><a class = "nav-link" href = "UsuarioController.php?methodname=thanks">Agradecimientos</a></li>
            <li class = "nav-item"><a class = "nav-link" href = "UsuarioController.php?methodname=usermanual">Manual del usuario</a></li>
            <?php
            if(isset($_SESSION["user"])) {
            ?>
            <li class = "nav-item"><a class = "nav-link" href = "UsuarioController.php?methodname=gestionUsers">Lista de usuarios</a></li>
            <li class = "nav-item"><a class = "nav-link" href = "DeviceController.php?methodname=gestionDevices">Lista de dispositivos</a></li>
            <?php } ?>
        </ul>
        <ul class = "navbar-nav ml-auto">
            <li class = "nav-item"><a class = "nav-link" href = "UsuarioController.php?methodname=download">Descarga Tech Domótica</a></li>
            <?php
            if(isset($_SESSION["user"])) {
            ?>
            <li class = "nav-item"><a class = "nav-link" href = "UsuarioController.php?methodname=delog">Cerrar sesión</a></li>
            <?php } else {
            ?>
            <li class = "nav-item"><a class = "nav-link" href = "UsuarioController.php?methodname=login">Iniciar sesión</a></li>
            <?php } ?>
        </ul>
    </div>
</nav>