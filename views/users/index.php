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
<body>
    <?php require_once "../views/components/navbar.php"; ?>
    <div class = "container text-center" style = "padding-top: 10px;">
        <div class = "row text-center">
            <div class = "col-12">
                <div class = "table-responsive">
                    <table class = "table table-dark text-center table-bordered">
                        <thead>
                            <tr>
                                <td>Nombre completo</td>
                                <td>Correo electrónico</td>
                                <td>Cédula de ciudadanía</td>
                                <td>Rol</td>
                                <td>Opciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $users = Usuario::getAll(false);
                                if($users->num_rows >= 1) {
                                    while($uwu = $users->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>{$uwu['nom1']} {$uwu['nom2']} {$uwu['apellido1']} {$uwu['apellido2']}</td>";
                                        echo "<td>{$uwu['correo']}</td>";
                                        echo "<td>{$uwu['dni']}</td>";
                                        echo "<td>{$uwu['tipo_rol']}</td>";
                                        echo "<td><a class = 'btn btn-danger' href = 'UsuarioController.php?methodname=deleto&id={$uwu['id_usuario']}'>Eliminar</a></td>";
                                        echo "</tr>";
                                    }
                                }
                                else {
                                    echo "<tr>";
                                        echo "<td colspan='5'>No hay datos</td>";
                                        echo "</tr>";
                                }
                                
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "../views/components/footer.php"; ?>
    <div class="modal fade" id="msgDeleted">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header techdo-modal-header">
                    <h4 class="modal-title">Usuario eliminado</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body techdo-modal-content">
                    El usuario fue eliminado exitosamente de la base de datos.
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
            fuckingLogo.classList.add("anim");
            window.setTimeout(function() {
                form.submit();
            }, 1500);
        }
    }

</script>
<?php
    if(isset($_GET["message"])) {
        echo "<script>
        $('#msgDeleted').modal();
        </script>";
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
            transform: rotate(360);
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
        }
        to {
            background-color: rgb(95, 95, 95);
        }
    }

    .fadeuwu {
        animation-name: 'uwu';
        animation-delay: 0;
        animation-duration: 3s;
    }

</style>
</html>