<?php

include("php/conexion.php");
session_start();

if (isset($_SESSION['datos'])) /*{
        $id_User = $_SESSION['datos']['id'];

        $consulta = "SELECT * FROM carrito_compras WHERE id_usuario = '$id_User'";
        $resultado = mysqli_query($conexion, $consulta);

        $cantidad = mysqli_num_rows($resultado);
    }else {
        $cantidad = 0;
    }*/
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Organic Life</title>
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="iconos/style.css">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed" rel="stylesheet">
</head>

<body>
    <header id="cabecera">
        <img src="imagenes/logo.png" class="img-logo">
        <h1 class="logo">No ala violencia intrafamiliar</h1>
        <img src="imagenes/menu.png" class="icon-menu" id="boton-menu">
        <nav>
            <div class="container-buscador" id="contenido">
                <form action="php/buscar.php?url=<?php echo $_SERVER["REQUEST_URI"] ?>" method="POST">
                    <input type="text" id="campoBuscar" placeholder="Buscar..." name="productoBuscar">
                    <span class="icon-search"></span>
                </form>
            </div>
            <ul id="lista-principal">
                <?php
                if (empty($_SESSION['datos'])) { ?>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="login.php?url=<?php echo $_SERVER["REQUEST_URI"] ?>">Entrar</a></li>
                    <li><a href="registro.php">Registrarse</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><span class="icon-search" id="buscador"></span></li>

                <?php } else { ?>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><span class="icon-search" id="buscador"></span></li>
                    <li class="li-perfilUsuario">
                        <img src="imagenes/usuario.png" class="img-usuario" id="img-perfil">
                    </li>

                <?php } ?>
            </ul>
            <?php if (isset($_SESSION['objetoNoEncontrado'])) { ?>
                <h3 class="errorBusqueda" id="messageError"><?php echo $_SESSION['objetoNoEncontrado'] ?></h3>
            <?php unset($_SESSION['objetoNoEncontrado']);
            } ?>
        </nav>
    </header>
    <div class="sub-menu">
        <ul class="lista-submenu">
            <li><a href="organiclife.php">No a la violencia intrafamiliar</a></li>
            <li><a href="blog.php">Blog</a></li>
            <ul class="subMenu-usuario" id="submenu-perfil">
                <li><a href="php/validarUsuario.php">Perfil</a></li>
                <li><a href="php/cerrar.php">Cerrar sesión</a></li>
            </ul>

        </ul>
    </div>
    <div class="menu-lateralResponsive" id="menu-responsive">
        <nav class="nav-responsive">
            <ul>
                <?php
                if (empty($_SESSION['datos'])) { ?>

                    <li><a href="login.php?url=<?php echo $_SERVER["REQUEST_URI"] ?>">Entrar</a></li>
                    <li><a href="registro.php">Registrarse</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href=""><span class="icon-search"></span></a></li>

                    <li><a href="organiclife.php">No a la violencia intrafamiliar</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <ul class="subMenu-usuario" id="submenu-perfil">
                        <li><a href="php/validarUsuario.php">Perfil</a></li>
                        <li><a href="php/cerrar.php">Cerrar sesión</a></li>
                    </ul>

                <?php } else { ?>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href=""><span class="icon-search"></span></a></li>
                    <li class="li-perfilUsuario">
                        <img src="imagenes/usuario.png" class="img-usuario" id="img-perfil">
                    </li>

                    <li><a href="organiclife.html">No a la violencia intrafamiliar</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <ul class="subMenu-usuario" id="submenu-perfil">
                        <li><a href="php/validarUsuario.php">Perfil</a></li>
                        <li><a href="php/cerrar.php">Cerrar sesión</a></li>
                    </ul>

                <?php } ?>
            </ul>
        </nav>
    </div>

    <div class="parte1">
        <h1>No a la violencia Inntrafamiliar</h1>
        <p> Bienvenidos a nuestro portal dedicado a promover un mensaje de amor, respeto y seguridad en el hogar. Aquí, estamos comprometidos a crear conciencia y promover un ambiente libre de violencia intrafamiliar. Creemos en la importancia de construir relaciones saludables y apoyar a quienes enfrentan situaciones difíciles.</p>
    </div>

    <section class="main">
        <section class="articles">

            <article class="article1">
                <img src="imagenes/organico.jpg" alt="">
                <h2>¿Qué es la violencia intrafamiliar?</h2>
                <p>La violencia intrafamiliar abarca cualquier forma de abuso, ya sea físico, emocional, psicológico o económico, que ocurre entre miembros de una misma familia o en relaciones íntimas. Creemos firmemente que todos merecen vivir en un entorno seguro y amoroso, y trabajamos para que esta visión sea una realidad para todos.</p>

                <h5><img class="encabezado" src="imagenes/logo.png"> No a la violencia | <img class="encabezado" src="imagenes/calendar.png"> agosto 29, 2023</h5>
            </article>

            <article class="article1">
                <img src="imagenes/beneficios.jpg" alt="">
                <h2>Recursos y Apoyo</h2>
                <p> Si tú o alguien que conoces está enfrentando violencia intrafamiliar, es importante saber que no están solos. Hay una amplia gama de recursos disponibles para brindar apoyo y ayuda. Organizaciones locales y nacionales ofrecen líneas de ayuda confidenciales donde las víctimas pueden hablar con consejeros capacitados y recibir orientación. Además, refugios y casas de acogida proporcionan un refugio seguro para aquellos que necesitan escapar de situaciones abusivas. Los profesionales de la salud, terapeutas y asesores legales también pueden ofrecer asistencia vital. Recordemos que buscar ayuda no es un signo de debilidad, sino un paso valiente hacia la seguridad y la recuperación.</p>
                <h5><img class="encabezado" src="imagenes/logo.png"> Organic Life | <img class="encabezado" src="imagenes/calendar.png"> abril 10, 2018</h5>

            </article>
            <article class="article1">
                <img src="imagenes/inorganicos.jpg" alt="">
                <h2>Señales de Alerta</h2>
                <p>Reconocer las señales de alerta es crucial para identificar y abordar la violencia intrafamiliar a tiempo. Estas señales pueden variar y pueden manifestarse de manera física, emocional y comportamental. Las víctimas pueden mostrar signos de ansiedad extrema, depresión, aislamiento social repentino, cambios en el comportamiento, lesiones inexplicables, o vestir ropa inusualmente larga para ocultar heridas. También pueden parecer temerosas o ansiosas cuando están en presencia de una persona específica. Estar atentos a estos indicadores y brindar un espacio seguro para la comunicación puede marcar la diferencia para alguien que está experimentando violencia en su hogar.</p>
                <h5><img class="encabezado" src="imagenes/logo.png"> Organic Life | <img class="encabezado" src="imagenes/calendar.png"> marzo 14, 2018</h5>

            </article>

        </section>
        <!--Lado derecho-->
        <div class="suscripcion">
            <h1> Envianos tu correo si necesitas ayuda</h1>
            <input type="email" name="emailUser" id="nameUser" placeholder="Correo electrónico" required="">
            <input type="submit" name="" value="Suscríbete">
        </div>
        <aside>
            <img src="imagenes/sabiasque.jpg" alt="">
            <h3>¿Sabias qu&eacute?</h3>
            <p>A pesar de los avances en la conciencia sobre la violencia intrafamiliar, a menudo se subestima la prevalencia del problema. Sorprendentemente, la Organización Mundial de la Salud (OMS) estima que aproximadamente 1 de cada 3 mujeres en todo el mundo ha experimentado violencia física o sexual por parte de su pareja o expareja en algún momento de sus vidas. Sin embargo, es importante destacar que la violencia intrafamiliar no se limita a un género específico: un número significativo de hombres también son víctimas. Estos datos resaltan la urgencia de seguir educando y creando conciencia sobre la importancia de erradicar la violencia en el hogar, independientemente de género u origen cultural.</p>
        </aside>

        <div class="recomendados">
            <h1> Nuestras recomendaciones </h1>
            <iframe src="https://www.youtube.com/watch?v=OlMO6nvTSNQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p> Youtube | <em>Salud</em></p>
        </div>
       
        <!--Videos agg
            <div class="recomendados">
                <iframe src="https://www.youtube.com/embed/PtMWDb9rPno" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p> Youtube | <em>COMO COMBINAR FRUTAS Y VERDURAS</em></p>
            </div>-->

    </section>

    <!-- FOOTER -->
    <footer>
        <div class="contenedor">
            <div class="cont-body">
                <div class="columna1">
                    <div class="suscripcionfooter">
                        <h1> Entérate de nuevos eventos</h1>
                        <input type="email" name="emailUser" id="suscribefooter" placeholder="Correo electrónico" required="">
                        <input type="submit" id="submitfooter" name="" value="Suscríbete">
                    </div>
                </div>
                <div class="columna2">

                    <h1> Nuestras Redes Sociales </h1>
                    <div class="fila">
                        <img src="imagenes/facebook1.png">
                        <label> Síguenos en Facebook</label>
                    </div>

                    <div class="fila">
                        <img src="imagenes/google1.png">
                        <label> Síguenos en Google+</label>
                    </div>

                    <div class="fila">
                        <img src="imagenes/twitter1.png">
                        <label> Síguenos en Twitter</label>
                    </div>
                </div>
                <div class="columna3">
                    <h1> Cambiar Idioma </h1>
                    <div class="fila-columna3">
                        <fieldset>
                            <div class="form-group">
                                <select class="custom-select">
                                    <option selected="">Español</option>
                                    <option value="1">Inglés</option>
                                    <option value="2">Portugés</option>
                                </select>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <br>
            <div class="cont-footer">
                <div class="alineacion">
                    <div class="copyright">
                        © 2019 Todos los derechos reservados | Diseñado por <a href="index.html"> OrganicLife </a>
                    </div>
                    <div class="nosotros">
                        <a href=""> Preguntas Frecuentes |</a>
                        <a href=""> Términos y condiciones </a>
                    </div>
                </div>
            </div>
    </footer>

    <script src="js/buscar.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/aparecerIcono.js"></script>
</body>

</html>