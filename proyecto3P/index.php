<?php 
    session_start();
    include("php/conexion.php");

    if (isset($_SESSION['datos'])) {
    //$id_User = $_SESSION['datos']['id'];

       // $consulta = "SELECT * FROM carrito_compras WHERE id_usuario = '$id_User'";
        //$resultado = mysqli_query($conexion, $consulta);

       // $cantidad = mysqli_num_rows($resultado);
    }//else {
       // $cantidad = 0;
    //}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Organic Life</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/testimonios.css">

    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed" rel="stylesheet">

    <!-- Testimonios -->

    <link rel="stylesheet" href="testimonios/sss/sss.css">
	<link rel="stylesheet" href="testimonios/estilos.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="testimonios/sss/sss.js"></script>
	<script>
	    jQuery(function($){
	        $('.slider-testimonial').sss({
	        	slideShow : true,
	        	speed : 3500
	        });
	    });
	</script>



    <!-- Foonts -->
    <link rel="stylesheet" href="iconos/style.css">
    

    <!-- Slider -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <link rel="stylesheet" type="text/css" href="css/nivo-slider.css">
    <link rel="stylesheet" type="text/css" href="css/mi-slider.css">
    <script type="text/javascript"> 
        $(window).on('load', function() {
            $('#slider').nivoSlider(); 
        }); 
    </script>
</head>
<body>
    <header id="cabecera">
        <img src="imagenes/logo.png" class="img-logo">
        <h1 class="logo">No a la violencia intrafamiliar</h1>
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
                    <li><a href="login.php?url=<?php echo $_SERVER["REQUEST_URI"]?>">Entrar</a></li>
                    <li><a href="registro.php">Registrarse</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><span class="icon-search" id="buscador"></span></li>
                    
                <?php }else { ?>
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
            <?php unset($_SESSION['objetoNoEncontrado']); } ?>
        </nav>
    </header>
    <div class="sub-menu">
        <ul class="lista-submenu">
            <?php /*<li><a href="catalogo.php">Catálogo</a></li> */?>
            <li><a href="organiclife.php">No a la Violencia intrafamiliar</a></li>
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
                     
                    <li><a href="login.php?url=<?php echo $_SERVER["REQUEST_URI"]?>">Entrar</a></li>
                    <li><a href="registro.php">Registrarse</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href=""><span class="icon-search"></span></a></li>
                   
                    <li><a href="organiclife.html">No a la Violencia intrafamiliar</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <ul class="subMenu-usuario" id="submenu-perfil">
                        <li><a href="php/validarUsuario.php">Perfil</a></li>
                        <li><a href="php/cerrar.php">Cerrar sesión</a></li>
                    </ul>
              
                            <?php }else { ?>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href=""><span class="icon-search"></span></a></li>
                <li class="li-perfilUsuario">
                    <img src="imagenes/usuario.png" class="img-usuario" id="img-perfil">
                </li>
               
                <li><a href="organiclife.html">No a la Violencia intrafamiliar</a></li>
                <li><a href="blog.php">Blog</a></li>
                <ul class="subMenu-usuario" id="submenu-perfil">
                    <li><a href="php/validarUsuario.php">Perfil</a></li>
                    <li><a href="php/cerrar.php">Cerrar sesión</a></li>
                </ul>
               
                <?php } ?>
            </ul>
        </nav>  
    </div>

    <div class="container-inicio">
        <div class="slider-wrapper theme-mi-slider">
            <div id="slider" class="nivoSlider">     
                <img src="img-slider/slider1.png">
                <img src="img-slider/slider2.png">
                <img src="img-slider/slider3.png">
            </div> 
        </div>
    </div>


    

   
    <!--Footer-->
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
                            </select>
                        </div>
                    </fieldset> 
                </div>  
            </div>
        </div>
        <br><div class="cont-footer">
            <div class="alineacion">
            <div class="copyright">
                © 2019 Todos los derechos reservados | Diseñado por Sebas
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