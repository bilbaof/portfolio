<?php

$pg = "sobre-mi";

?>

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
    <?php include_once "header.php";?>  
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="py-4 pb-4 mt-5">
                        <h1>Sobre mí</h1>
                    </div>
                        <p class="p-1 pb-4">Soy Arquitecto, pero en los ultimos años me interese en la programacion, el diseño web y UX. Tome como un desafio personal el desarrollarme en este area para contar con las herramientas para encarar el mercado laboral actual.</p>
                    <div>
                        <a href="#" class="btn btn-rojo">Enviar mensaje</a>
                    </div>
                </div>
                <div class="col-sm-3 offset-sm-2 pt-4 pb-1 mt-3">
                    <img src="../Portfolio/images/cv2.jpg" alt="francisco-bilbao" title="francisco bilbao" class="img-fluid img-circle">
                </div>
            </div>
        </div> 
        <section id="tecnologias" class="color-gradiente pb-5">  <!--abre section tecnologias-->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="my-sm-5">Stack tecnólogico</h2>
                    </div>
                </div>
                <div class="row">
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>Javascript</h3>
                                <img class="img-fluid d-block mx-auto" width="60"
                                    src="https://img.stackshare.io/service/1209/javascript.jpeg">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>PHP</h3>
                                <img class="img-fluid d-block mx-auto" width="60"
                                    src="https://img.stackshare.io/service/991/hwUcGZ41_400x400.jpg">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                                <h3>HTML5</h3>
                                <img class="img-fluid d-block mx-auto" width="60"
                                    src="https://img.stackshare.io/service/2538/kEpgHiC9.png">
                            </div>
                        </div>
                        <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>React.js</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1020/OYIaJ1KK.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>jQuery</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1021/lxEKmMnB_400x400.jpg">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Bootstrap</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1101/C9QJ7V3X.png">
                        </div>
                    </div>
                </div>
                <div class="row mt-sm-4 mt-0">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Laravel</h3>
                            <img class="img-fluid d-block mx-auto" width="90"
                                src="https://depcsuite.com/wp-content/uploads/2019/08/220px-Laravel.svg_.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>MySQL</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1615/mariadb-logo-400x400.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>CSS</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/6727/css.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Git</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1046/git.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Apache</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/2263/apache.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
                            <h3>Mercadopago</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/12698/gUjuxmmd_400x400.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section>                              <!--cierra section tecnologias-->
        <section id="experiencias" class=""><!--abre section experiencias-->
            <div class="container">
                <div class="row">
                    <div class="col-12 pt-5 pb-4">
                        <h2><i class="fas fa-briefcase"></i> Experiencia laboral</h2>
                    </div>
                </div> 
                <div class="row shadow bg-white rounded">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-2 my-auto d-none d-sm-block">
                                <img src="images/logo MP.png" class="img-fluid baw p-5" title="MPworkplaces">
                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>Arquitecto Proyectista</h3>
                                <h4>MP Workplaces SA</h4>
                                <h5>2018 - Presente</h5>
                                <p>Encargado de la fase de diseño y desarrollo de varios proyectos de oficinas, entre los cuales se encuentran ONU, UNICEF, KAVAK, SOLUNION, etc.<br>
                                Recopilacion de las necesidades de los clientes, teniendo en consideracion necesidades especificas y llevando adelante el diseño de Layouts a medida de cada empresa.<br>Produccion de documentacion tecnica, modelos 3D y renders, asi como el pedido de presupuestos y seguimientos de contratistas.</p>
                            </div>
                            <div class="col-sm-2 my-auto d-none d-sm-block">
                                <img src="images/logo FF.png" class="img-fluid baw p-2" title="FFarquitectos">
                            </div>
                            <div class="col-12 col-sm-10 p-3">
                                <h3>Arquitecto/Sobrestante</h3>
                                <h4>FerrariFrangella Arquitectos</h4>
                                <h5>2014 - 2018</h5>
                                <p>Forme parte de un equipo, con el cual diseñamos proyectos de pequeña, mediana y gran escala, enfocandonos en edificios residenciales, de usos mistos y locales comerciales. Trabajamos para clientes como POL-KA, ARTEAR, etc.<br>
                                Produccion de documentacion 2D/3D para licitaciones y presentaciones.<br>Direccion de obra para el proyecto de Estudios LUMITON (ganador de una mencion en los premios CAPBA 2016) </p>
                            </div>
                        </div>
                            
                    </div>
                 </div>
            </div>
        </section>              <!--cierra section experiencia-->
        <section id="formacion" class="container"><!--abre section formacion-->
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Formación académica</h2>
                </div>
            </div> 
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/UBA.jpg" class="img-fluid baw" title="UBA">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Arquitecto</h3>
                            <h4>FADU - UBA</h4>
                            <h5>2008-2016</h5>
                            <p>http://www.fadu.uba.ar/</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-sm-2 my-auto d-none d-sm-block">
                            <img src="images/logo Sanjo.jpg" class="img-fluid baw" title="sanJose">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3>Bachiller mercantil</h3>
                            <h4>Colegio San Jose - Tandil</h4>
                            <h5>2005-2007</h5>
                            <p>https://www.sanjosetandil.com.ar/</p>
                        </div>
                    </div>        
                </div>
            </div>
        </section>
        <section id="formacion" class="pb-5"><!--abre section formacion-->
            <div class="container">
                <div class="row">
                    <div class="col-12 pt-5 pb-4">
                        <h2><i class="fas fa-graduation-cap"></i> Cursos de desarrollo profesional</h2>
                    </div>
                </div> 
                <div class="row shadow bg-white rounded p-1">
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="images/logo Cisca.png" class="img-fluid baw" title="Cisca">
                            </div>
                            <div class="col-12- col-sm-10 p-3">
                                <h3>BIM Manager</h3>
                                <h4>CISCA</h4>
                                <h5>Expedicion: dic 2019</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="row">
                            <div class="col-2 py-3 my-auto d-none d-sm-block">
                                <img src="images/logo depc.jpg" class="img-fluid baw" title="DePC">
                            </div>
                            <div class="col-12- col-sm-10 p-3">
                                <h3>Programación Web Full Stack</h3>
                                <h4>DePC Suite</h4>
                                <h5>Cursando actualmente</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="idiomas" >
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card pt-5">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 px-5 pt-5 pb-3 p-sm-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Advance C1</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 pb-3 ps-sm-4">
                        <div class="row mr-sm-1 bg-white card-idioma shadow me-sm-1">
                            <div class="col-4 text-center card pt-5">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 px-5 pt-5 px-sm-5 pt-sm-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Futbol</li>
                                    <li>Ir al cine</li>
                                    <li>Juntarme con amigos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
    <footer class="container mt-5 pb-3">
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