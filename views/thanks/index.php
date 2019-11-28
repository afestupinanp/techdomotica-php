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
    <title>Tech Domótica - Agradecimientos y herramientas</title>
</head>
<body>
    <?php require_once "../views/components/navbar.php"; ?>
    <div class = "container welcoming" style = "padding-top: 10px;">
        <div class = "row text-center">
            <div class="col-12">
                <h2>Agradecimientos</h2>
                <p>Deseamos dar agradecimientos por el apoyo durante el desarrollo del proyecto a las siguientes entidades. Sin ellas y su guía y visión, Tech Domótica no podría haber sido creado.</p>
            </div>
        </div>
        <div class = "row text-center">
            <div class = "col-lg-6 col-sm-12">
                <img src = "../media/img/senalogo.png" width = "300" height = "300" class = "img-fluid" />
            </div>
            <div class = "col-lg-6 col-sm-12 text-justify">
                <p>Agradecimientos a los siguientes instructores del Servicio Nacional de Aprendizaje SENA de Cali, Valle, Colombia.</p>
                <ul>
                    <li>Instructor Julio Cesar Hernández</li>
                    <li>Instructor Luis Carlos Ospina</li>
                    <li>Instructor Sergio Esteban Ramírez</li>
                    <li>Instructora Karen Saldarriaga</li>
                    <li>Instructor Diego Fernando Lenis</li>
                    <li>Instructor Jonatan Velasco</li>
                </ul>
            </div>
        </div>
        <div style = "margin-top: 25px; margin-bottom: 25px;" class = "row text-center">
            <div class="col-12">
                <h4>Herramientas y librerias</h4>
            </div>
        </div>
        <div class = "row text-center">
            <div class = "col-lg-6 col-sm-12 text-justify">
                <p>Se listarán aquí los elementos usados para la construcción de Tech Domótica</p>
                <ul>
                    <li>Java: Java es un lenguaje de programación de propósito general, concurrente, orientado a objetos, que fue diseñado específicamente para tener tan pocas dependencias de implementación como fuera posible.<br />
                    Tanto la implementación de código abierto OpenJDK 1.8 y el JDK 1.8 de Oracle fueron usados durante el desarrollo.</li>
                    <li>MySQL: MySQL es un sistema de gestión de bases de datos relacional desarrollado bajo licencia dual: Licencia pública general/Licencia comercial por Oracle Corporation y está considerada como la base datos de código abierto más popular del mundo, y una de las más populares en general junto a Oracle y Microsoft SQL Server, sobre todo para entornos de desarrollo web.<br/>
                    MySQL Workbench fue usado para la construcción del modelo relacional de la base de datos.
                    </li>
                    <li>Dia: Dia es una aplicación grauita para el modelado de elementos, orientada especialmente a crear el modelo entidad relación de una base de datos.
                    </li>
                </ul>
            </div>
            <div class = "col-lg-6 col-sm-12 text-center">
                <img src = "../media/img/java.png" width = "150" height = "150" class = "img-fluid" />
                <img src = "../media/img/mysql.png" width = "150" height = "150" class = "img-fluid" />
                <img src = "../media/img/dialogo.jpg" width = "300" height = "300" class = "img-fluid" />
            </div>
        </div>
        <div class = "row text-center">
            <div class = "col-lg-6 col-sm-12 text-center">
                    <img src = "../media/img/androidstudio.png" width = "150" height = "150" class = "img-fluid" />
                    <img src = "../media/img/netbeanslogo.png" width = "150" height = "150" class = "img-fluid" />
                    <img src = "../media/img/vscodelogo.png" width = "150" height = "150" class = "img-fluid" />
                    <img src = "../media/img/github.png" width = "150" height = "150" class = "img-fluid" />
                </div>    
            <div class = "col-lg-6 col-sm-12 text-justify">
                <ul>
                    <li>Android Studio: Android Studio es un entorno de desarrollo integrado (IDE) creado por Google para el desarrollo exclusivo de aplicaciones en el sistema operativo de móviles Android. Usa el lenguaje de programación de Java crear aplicaciones, y usa entornos similares a los que ofrece Eclipse.
                    </li>
                    <li>Visual Studio Code: Es un entorno de desarrollo creado por Microsoft de código abierto. Esta aplicación es compatible con múltiples lenguajes de programación, y el usuario puede agregar extensiones para añadir más funcionalidad, tanto extensiones para el autocompletado de IntelliSense como extensiones para la compilación de programas.
                    </li>
                    <li>NetBeans: Es un entorno de desarrollo integrado de código abierto creado por Apache, escrita especialmente para su uso con el lenguaje de programación Java, aunque existen ciertos plugins que extienden su funcionalidad para añadir compatibilidad con múltiples lenguajes de programación.<br>
                    Adicionalmente, en el desarrollo de la versión de escritorio de Tech Domótica, se uso la libreria de Apache Commoncs Codec para la encriptación de contraseñas.
                    </li>
                    <li>GitHub: GitHub es una plataforma para el desarrollo de código abierto, en la cual se pueden alojar repositorios de código públicos y privados de código.<br />
                    Tech Domótica en las versiones de escritorio fue desarrollada y su código fue <a href = "https://github.com/xman40100/techdomotica-java/releases">puesto en GitHub.</a>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
    <?php require_once "../views/components/footer.php"; ?>
</body>
<script src = "../jquery.min.js"></script>
<script src = "../bootstrap.min.js"></script>
</html>