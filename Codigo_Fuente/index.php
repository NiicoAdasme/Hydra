<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema de gestion de proyectos">
    <meta name="keywords" content="Gestión, Proyectos">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="vistas/assets/lib/bootstrap/css/bootstrap.css">
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="vistas/assets/css/main.css">
    <?php //require_once "vistas/extras/estilos.php"; ?>
    <title>Sistema De Gestión De Proyectos</title>
</head>
<body class="login">

      <div class="form-signin">
    <div class="text-center">
        <img class="logoubb" src="vistas/assets/img/ubb_logo_new.png" alt="Universidad Del Bío Bío">
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="" method="POST" autocomplete="off">
                <p class="text-muted text-center">
                    Ingrese su Rut y Contraseña
                </p>

               <div class="box1">
                    <input type="text" placeholder="Rut" class="form-control top" name="rut" required=""> <!-- nuevo div-->
               </div>

               <div class="box1">
                    <input type="password" placeholder="Contraseña" class="form-control bottom" name="contraseña" required=""> <!-- nuevo div-->
               </div>

                <div class="checkbox">
                    <label>
                       <input type="checkbox"> Recordar
                    </label>
		        </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form action="index.html">
                <p class="text-muted text-center">Ingresa Un Correo Valido</p>
                <input type="email" placeholder="ejemplo@dominio.com" class="form-control">
                <br>
                <button class="btn btn-lg btn-danger btn-block" type="submit">Recuperar Contraseña</button>
            </form>
        </div>
        <div id="signup" class="tab-pane">
            <form action="index.html">
                <input type="text" name="nombre" placeholder="Nombre" class="form-control top">
                <input type="email" name="correo" placeholder="ejemplo@dominio.com" class="form-control middle">
                <input type="password" name="clave" placeholder="Clave" class="form-control middle">
                <input type="password" name="clave2" placeholder="Repetir Clave" class="form-control bottom">
                <button class="btn btn-lg btn-success btn-block" type="submit">Registerarse</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Iniciar Sesión</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">Signup</a></li>
        </ul>
    </div>
  </div>
 <div class="gestion">
      <h2>Sistema de Gestión de Proyectos</h2>
      <img class="scrum" src="vistas/assets/img/kanban2.jpg" alt="">
  </div>

            <!--jQuery -->
        <script src="vistas/assets/lib/jquery/jquery.js"></script>

        <script>
                less = {
                    env: "development",
                    relativeUrls: false,
                    rootpath: "vistas/assets/"
                };
            </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
        <script src="https://kit.fontawesome.com/12c1eea883.js" crossorigin="anonymous"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/jquery.validationEngine.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/languages/jquery.validationEngine-en.min.js"></script>


        <!--Bootstrap -->
        <script src="vistas/assets/lib/bootstrap/js/bootstrap.js"></script>
        <!-- MetisMenu -->
        <script src="vistas/assets/lib/metismenu/metisMenu.js"></script>
        <!-- onoffcanvas -->
        <script src="vistas/assets/lib/onoffcanvas/onoffcanvas.js"></script>
        <!-- Screenfull -->
        <script src="vistas/assets/lib/screenfull/screenfull.js"></script>

        <script src="vistas/assets/lib/jquery-validation/jquery.validate.js"></script>
        <!-- Metis core scripts -->
        <script src="vistas/assets/js/core.js"></script>
        <!-- Metis demo scripts -->
        <script src="vistas/assets/js/app.js"></script>
        <script src="../assets/js/style-switcher.js"></script>
        <!-- Sweet Alert scripts -->
        <script src="vistas/assets/plugins/SweetAlert/dist/sweetalert2.all.min.js"></script>
        <script src="vistas/assets/js/funcion.js"></script>

  
    <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.list-inline li > a').click(function() {
                    var activeForm = $(this).attr('href') + ' > form';
                    //console.log(activeForm);
                    $(activeForm).addClass('animated fadeIn');
                    //set timer to 1 seconds, after that, unload the animate animation
                    setTimeout(function() {
                        $(activeForm).removeClass('animated fadeIn');
                    }, 1000);
                });
            });
        })(jQuery);
    </script>

<?php
		if(isset($_POST['rut']) && isset($_POST['contraseña'])){
			require_once "./controladores/login.controlador.php";

			$login = new logincontrolador();

			echo $login->ingresar_controlador();
		}
?>

</body>
</html>