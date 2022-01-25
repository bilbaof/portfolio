<?php

$pg = "index";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css?v=<?php echo rand(100,500); ?>">
</head>

<body id="inicio">
    <?php include_once "header.php";?>
    <main class="container">
        <div class="row">
            <div class="col-12 mt-5 text-center div-cohete">
                <a href="#"><img src="images/cohete.svg" class="cohete"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                <div class="input-home">
                    <p class="p-1">Bienvenid@ a mis trabajos realizados.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.html" class="btn btn-blanco shadow">Conoce mis proyectos</a>
            </div>
        </div>

    </main>

    <footer class="container mt-5 pb-3">
        <div class="row">
            <div class="col-12 col-sm-3 text-center text-sm-start">
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