<?php

$pg = "proyectos";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css?v=<?php echo rand(100,500); ?>">
</head>

<body id="proyectos">
    <?php include_once "header.php";?>
    <main class="container">
        <div class="row">
            <div class="col-12 py-4 pb-5 mt-2">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 mb-2">
                <p class="p-1">Estos son algunos de los proyectos que se realizaron durante la cursada</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 proyecto">
                <div class="m-1 border bg-white">
                    <img src="images/abmclientes.png" alt="ABMclientes" class="img-fluid">
                    <div>
                        <h3 class="py-3 px-2">ABM CLIENTES</h3>
                    </div>
                    <div>
                        <p class="py-2 px-2 p-proyectos">Alta, baja y modificación de un registro de clientes. Realizado
                            en HTML,
                            CSS, PHP, Bootstrap y Json.</p>
                    </div>
                    <div class="row">
                        <div class="col-6 ps-4 py-5">
                            <a href="#" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 p-0 pb-5 pt-5 mt-1 text-center">
                            <a href="http://github.com" class="btn-link">Ver codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 proyecto">
                <div class="m-1 border bg-white">
                    <img src="images/abmventas.png" alt="ABMclientes" class="img-fluid">
                    <div>
                        <h3 class="py-3 px-2">SISTEMA DE GÉSTION DE VENTA</h3>
                    </div>
                    <div>
                        <p class="py-2 px-2 p-proyectos">Sistema de gestión de clientes, productos y ventas. Realizado
                            en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="row">
                        <div class="col-6 ps-4 py-5">
                            <a href="#" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 p-0 pb-5 pt-5 mt-1 text-center">
                            <a href="http://github.com" class="btn-link">Ver codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 proyecto">
                <div class="m-1 border bg-white">
                    <img src="images/proyecto-integrador.png" alt="ABMclientes" class="img-fluid">
                    <div>
                        <h3 class="py-3 px-2">PROYECTO INTEGRADOR</h3>
                    </div>
                    <div>
                        <p class="py-2 px-2 p-proyectos">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript,
                            jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de
                            permisos y funcionalidades a fines.</p>
                    </div>
                    <div class="row">
                        <div class="col-6 ps-4 py-5">
                            <a href="#" class="btn btn-rojo">Ver online</a>
                        </div>
                        <div class="col-6 p-0 pb-5 pt-5 mt-1 text-center">
                            <a href="http://github.com" class="btn-link">Ver codigo fuente</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <footer class="container my-5">
        <div class="row">
            <div class="col-12 col-sm-3 text-center text-sm-start"> <!--revisar color rojo y circulo de Linkdin -->
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/francisco-bilbao/" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-12 col-sm-3 text-center">Sponsor <a target="_blank" href="https://depcsuite.com/">DePC
                    Suite</a></div>
            <div class="col-12 col-sm-3 text-center"><a
                    href="to:info@franciscobilbao.com.ar">info@franciscobilbao.com.ar</a></div>
        </div>
        <div class="bloque-whatsapp pb-3 pt-2 px-3">
            <a href="https://api.whatsapp.com/send?phone=31644459593" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
    </footer>
</body>
<script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>