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
    <title>Tech Domótica - Iniciar sesión</title>
</head>
<body id = "wow">
    <?php require_once "../views/components/navbar.php"; ?>
    <div class = "container text-center" style = "padding-top: 10px;">
        <div class = "row">
            <div class="col-12">
                <h2>Iniciar sesión</h2>
            </div>
        </div>
        <div class = "row text-center">
            <div class="col-sm-12 col-lg-4 offset-lg-4">
                <img id = "logo" src = "../media/img/logo1.png" width = "200" height = "200" class = "img-fluid" />
                <form id = "formu" action = "UsuarioController.php?methodname=validateMe" method = "POST">
                    <div class="form-group">
                        <label for = "userordni">Correo electrónico o cédula de ciudadanía</label>
                        <input class = "form-control" name = "user" id = "userordni" type = "text" placeholder = "example@example.com o 123456787890"/>
                    </div>
                    <div class="form-group">
                        <label for = "pwd">Contraseña</label>
                        <input class = "form-control" name = "pwd" id = "pwd" type = "password" placeholder = "************"/>
                    </div>                    
                </form>
                <button type = "button" onclick = "sendMe();" class = "btn btn-info">Iniciar sesión</button>
            </div>
        </div>
    </div>
    <?php require_once "../views/components/footer.php"; ?>

    <div class="modal fade" id="msgError">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header techdo-modal-header">
                    <h4 class="modal-title">Error</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body techdo-modal-content">
                    Las credenciales introducidas son erroneas. Intenalo de nuevo.
                </div>
                <div class="modal-footer techdo-modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src = "../jquery.min.js"></script>
<script src = "../bootstrap.min.js"></script>
<script>

    var form = undefined;
    window.addEventListener("DOMContentLoaded", function() {
        form = document.getElementById("formu");
    });

    function sendMe() {
        if(document.getElementById("userordni").value.length > 0 && document.getElementById("pwd").value.length > 0) {
            var fuckingLogo = document.getElementById("logo");
            fuckingLogo.classList.remove("anim");            
            fuckingLogo.classList.add("anim");
            window.setTimeout(function() {
                form.submit();
            }, 850);
        }
    }

</script>

<?php

if(isset($_GET["msgtype"])) {
    switch($_GET["msgtype"]) {
        case 1: {
            echo "
            <script>$('#msgError').modal();</script>
            ";
            break;
        }
        default: {
            echo "
            <script>
                window.addEventListener('DOMContentLoaded', function() {
                    body = document.getElementById('wow');
                    body.classList.add('fadeuwu');
                });
            </script>
            ";
            break;
        }        
    }
}


?>

<style>

    body {
        background-color: rgb(95, 95, 95);
        color: rgb(226, 226, 226);
    }

    input[type="text"], input[type="password"] {
        padding: 7px;
        background-color: transparent;
        transition: 0.2s ease-in-out;
        color: rgb(226, 226, 226);
        outline: 1px solid rgb(226, 226, 226);
    }

    input[type="text"]::placeholder, input[type="password"]::placeholder {
        color: rgb(184, 184, 184);
    }

    input[type="text"]:focus, input[type="password"]:focus {
        box-shadow: 0px 0px 1px 2px rgba(9, 134, 156, 0.555) !important;
    }

    input[type="text"]:focus, input[type="password"]:focus {
        background-color: inherit;
        color: rgb(226, 226, 226);
        box-shadow: 0px 0px 3px 5px rgba(9, 134, 156, 0.555) !important;
    }

    @keyframes wow {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    .anim {
        animation-name: 'wow';
        animation-delay: 0s;
        animation-duration: 0.7s;
    }

    @keyframes uwu {
        from {
            background-color: #FFF;
            color: #000;
        }
        to {
            background-color: rgb(95, 95, 95);
            color: rgb(226, 226, 226);
        }
    }

    .fadeuwu {
        animation-name: 'uwu';
        animation-delay: 0;
        animation-duration: 3s;
    }

</style>
</html>