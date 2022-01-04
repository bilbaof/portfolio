<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\estilos.css">
</head>

<body id="contacto">
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
                            <a class="nav-link px-4 py-1" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 py-1" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-1 px-4 active" href="contacto.php">Contacto</a>
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
            <div class="col-12 py-4 mt-3 mb-4">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="post">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="mail" name="txtCorreo" id="txtCorreo" placeholder="Correo"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp"
                            class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtComentarios" id="txtComentarios" placeholder="Escribe aquí tu mensaje"
                            class="form-control shadow"></textarea>
                    </div>
                    <button type="Submit" id="btnEnviar" name="btnEnviar" class="btn btn-blanco px-4">ENVIAR</button>
                </form>
            </div>
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
            <a href=""><i class="fab fa-whatsapp"></i></a>
        </div>
    </footer>
</body>
<script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>