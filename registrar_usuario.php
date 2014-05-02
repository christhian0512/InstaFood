<?php
//Proceso de conexión con la base de datos
include("conec.php");
$conex =conectarse();

//Iniciar Sesión
session_start();
$rolIngresado = $_SESSION['rol'];

   // $inactivo = 1000;


    /*if(isset($_SESSION['tiempo']) ) {
    $vida_session = time() - $_SESSION['tiempo'];
        if($vida_session > $inactivo)
        {
            session_destroy();
            echo '<script language = javascript>
            alert("Su sesión ha expirado")
            self.location = "login.php"
            </script>';
            
        }
    }

      $_SESSION['tiempo'] = time();*/


//Validar si se está ingresando con sesión correctamente
if (!$_SESSION){
echo '<script language = javascript>
alert("usuario no autenticado")
self.location = "login.php"
</script>';
}

// $identificacion = $_SESSION['identificacion'];
// $consulta= "SELECT apellidos,edad FROM usuarios WHERE id_usuario='".$id_usuario."'";
// $resultado= mysql_query($consulta,$conex) or die (mysql_error());
// $fila=mysql_fetch_array($resultado);
// $apellidos = $fila['apellidos'];
// $edad = $fila['edad'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.html">
    <title>InstaFood</title>
    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="css/clndr.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap-switch-master/build/css/bootstrap3/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/jquery-multi-select/css/multi-select.css" />
    <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />
    <!--clock css-->
    <link href="assets/css3clock/css/style.css" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/morris-chart/morris.css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">

            <a href="index.html" class="logo">
                <img src="images/logo.png" width="182" height="49">
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->

        
        <div class="top-nav">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder=" Búsqueda">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="images/avatar1_small.jpg">
                        <span class="username">Autentificado: <?php echo $_SESSION['nombre'];?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Perfil</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Configuración</a></li>
                        <li><a href="login.php"><i class="fa fa-key"></i> Salir</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
                
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse" >
            <!-- sidebar menu start-->
            <ul class="sidebar-menu clearfix" id="nav-accordion">
                
                <li class="sub-menu" >
                    <a href="javascript:;">
                        <i class="fa fa-edit"></i>
                        <span>Registro</span>
                    </a>
                    <ul class="collapsed-nav closed">
                        <li><a href="registrar_empresa.php">Registrar Empresa</a></li>
                        <li><a href="registrar_usuario.php">Registrar Usuario</a></li>
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>

        <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
           
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Registrar Usuario
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " action="script_registrar_usuario.php" id="signupForm" method="POST" action="#">
                                    <div class="form-group ">

                                        <label for="nombreUsuario" class="control-label col-lg-3">Nombre: </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="nombreUsuario" name="nombreUsuario" type="text" required />
                                        </div>

                                    </div>
                                    <div class="form-group ">

                                        <label for="cedulaUsuario" class="control-label col-lg-3">Cédula: </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cedulaUsuario" name="cedulaUsuario" type="text" required />
                                        </div>

                                    </div>

                                    <div class="form-group ">

                                        <label for="nit" class="control-label col-lg-3">Rol: </label>
                                        <div class="col-lg-6">
                                           <select class="form-control m-bot15" name="rolseleccionado">
                                                <option>Administrador</option>
                                                <option>Cajero</option>
                                             </select>
                                        </div>

                                    </div>
                                    <div class="form-group ">
                                        <label for="contrasenaUsuario" class="control-label col-lg-3">Contrasena: </label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="contrasenaUsuario" name="contrasenaUsuario" type="password" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="nombreEmpresa" class="control-label col-lg-3">Empresa: </label>
                                        <div class="col-lg-6">
                                        
                                        <?php if($rolIngresado == "admin"){?>

                                            <?php 
                                            $consulta_empresas='select * from empresas';
                                            $consulta=pg_query($conex,$consulta_empresas);
                                              
                                            echo '<select class="form-control m-bot15" name="idEmpresa">';
                                            while($fila=pg_fetch_array($consulta)){
                                                echo "<option>".$fila['id_empresa'].'</option>';
                                            }
                                            echo '</select>';
                                            ?>
                                       <?php }; ?>
                                     <?php if($rolIngresado != "Administrador"){?>
                                            <input class="form-control " id="nombreEmpresa" name="idEmpresa" type="text" placeholder=<?php echo $_SESSION['idEmpresa'];?> disabled />
                                       <?php }; ?>
                                        </div>
                                    </div>

                        
                                     <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Guardar</button>
                                            <button class="btn btn-default" type="button">Cancelar</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </section>
    </section>
</section>
    <!--sidebar end-->
    <!--main content start-->
    
    <!--main content end-->


<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<script src="js/lib/jquery.js"></script>
<script src="assets/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="bs3/js/bootstrap.min.js"></script>
<script src="js/accordion-menu/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scrollTo/jquery.scrollTo.min.js"></script>
<script src="js/nicescroll/jquery.nicescroll.js" type="text/javascript"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="assets/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="assets/skycons/skycons.js"></script>
<script src="assets/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="assets/calendar/clndr.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script src="assets/calendar/moment-2.2.1.js"></script>
<script src="js/calendar/evnt.calendar.init.js"></script>
<script src="assets/jvector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/jvector-map/jquery-jvectormap-us-lcc-en.js"></script>
<script src="assets/gauge/gauge.js"></script>

<script src="assets/bootstrap-switch-master/build/js/bootstrap-switch.js"></script>

<script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>
<script type="text/javascript" src="js/jquery-validate/jquery.validate.min.js"></script>
<!--clock init-->
<script src="assets/css3clock/js/script.js"></script>
<!--Easy Pie Chart-->
<script src="assets/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="assets/sparkline/jquery.sparkline.js"></script>
<!--Morris Chart-->
<script src="assets/morris-chart/morris.js"></script>
<script src="assets/morris-chart/raphael-min.js"></script>
<!--jQuery Flot Chart-->
<script src="assets/flot-chart/jquery.flot.js"></script>
<script src="assets/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="assets/flot-chart/jquery.flot.resize.js"></script>
<script src="assets/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="assets/flot-chart/jquery.flot.animator.min.js"></script>
<script src="assets/flot-chart/jquery.flot.growraf.js"></script>
<script src="js/dashboard.js"></script>
<script src="js/custom-select/jquery.customSelect.min.js" ></script>
<!--common script init for all pages-->
<script src="js/scripts.js"></script>

<!--script for this page-->
</body>
</html>