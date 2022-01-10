<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sobre-mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css?v=<?php echo rand(100,500); ?>">
</head>

<body id="sobre-mi">
    <header class="container px-0">
        <nav class="navbar navbar-expand-md px-0">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">
                        <li class="nav-item">
                            <a class="nav-link py-1" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link active px-4 py-1" href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link py-1" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link py-1" href="contacto.php">Contacto</a>
                        </li>
                    </ul>
                    <div class="d-inline">
                        <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
                    </div>
                </div>

            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="py-4 pb-4 mt-5">
                    <h1>Sobre mí</h1>
                </div>
                <p class="p-1 pb-5">Estudie y me recibi de Arquitecto, pero en los ultimos años me fui interesando en la programacion, el diseño web y el diseño UX. Tome como un desafio personal el desarrollarme en este area para contar con mas herramientas a la hora de encarar el mercado laboral actual.</p>
                <div>
                    <a href="#" class="btn btn-rojo">Enviar mensaje</a>
                </div>
            </div>
            <div class="col-sm-3 offset-sm-2 py-5 mt-2">
                <img src="../Portfolio/images/cv.jpg" alt="francisco-bilbao" title="francisco bilbao" class="img-fluid img-circle">
            </div>
        </div>
        <div class="row container-fluid">
            <div class="col-12 bg-danger">
                A
            </div>
        </div>
        <div>
            A
        </div>
    </main>
    <footer class="container">
        <div class="row mb-2 mt-5">
            <div class="col-12 col-sm-3 text-center text-sm-start"> <!--sigue estando muy arriba -->
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