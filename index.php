<?php
//Proceso de conexión con la base de datos
include("conec.php");
$conex =conectarse();

//Iniciar Sesión
session_start();
$rolIngresado = $_SESSION['rol'];
$empresaIngresado = $_SESSION['idEmpresa'];


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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.html">
    <title>InstaFood</title>
    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <link href="css/clndr.css" rel="stylesheet">
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

            <a href="index.php" class="logo">
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
               <!--  <li>
                    <input type="text" class="form-control search" placeholder=" Búsqueda">
                </li> -->
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
                
               
                                    <?php if($rolIngresado == "admin"){?>

                                            <li class="sub-menu" >
                                                <a href="javascript:;">
                                                    <i class="fa fa-book"></i>
                                                    <span>Registro</span>
                                                </a>
                                                <ul class="collapsed-nav closed">                               
                                                    <li><a href="registrar_empresa.php">Registrar Empresa</a></li>
                                                    <li><a href="registrar_usuario.php">Registrar Usuario</a></li>
                                                </ul>
                                            </li>


                                             <li class="sub-menu" >
                                                <a href="javascript:;">
                                                    <i class="fa fa-cutlery"></i>
                                                    <span>Gestión de Platos</span>
                                                </a>
                                                <ul class="collapsed-nav closed">
                                                    <li><a href="registrar_plato.php">Registrar Platos</a></li>
                                                    <li><a href="visualizar_platos.php">Visualizar Platos</a></li>
                                                    <li><a href="registrar_adicion_plato.php">Regitrar Adición</a></li>
                                                </ul>
                                            </li>

                                            <li class="sub-menu" >
                                                <a href="javascript:;">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span>Gestión de Pedidos</span>
                                                </a>
                                                <ul class="collapsed-nav closed">
                                                    <li><a href="registrar_pedido.php">Registrar Pedido</a></li>
                                                    <li><a href="visualizar_pedidos.php">Visualizar Pedidos</a></li>
                                                </ul>
                                            </li>

                                             <li class="sub-menu" >
                                                <a href="javascript:;">
                                                    <i class="fa fa-bar-chart-o"></i>
                                                    <span>Reportes</span>
                                                </a>
                                                <ul class="collapsed-nav closed">
                                                    <li><a href="reporte_ventas.php">Ventas Totales</a></li>
                                                    <li><a href="reporte_platos.php">Reporte Platos</a></li>
                                                    <li><a href="reporte_variabilidad.php">Reporte Variabilidad</a></li>
                                                </ul>
                                            </li>


                                       <?php }; ?>
                                     <?php if($rolIngresado == "Administrador"){?>
                                             <li class="sub-menu" >
                                                <a href="javascript:;">
                                                    <i class="fa fa-book"></i>
                                                    <span>Registro</span>
                                                </a>
                                                <ul class="collapsed-nav closed">                               
                                                    <li><a href="registrar_usuario.php">Registrar Usuario</a></li>
                                                </ul>
                                            </li>

                                               <li class="sub-menu" >
                                                <a href="javascript:;">
                                                    <i class="fa fa-cutlery"></i>
                                                    <span>Gestión de Platos</span>
                                                </a>
                                                <ul class="collapsed-nav closed">
                                                    <li><a href="registrar_plato.php">Registrar Platos</a></li>
                                                    <li><a href="visualizar_platos.php">Visualizar Platos</a></li>
                                                    <li><a href="registrar_adicion_plato.php">Regitrar Adición</a></li>
                                                </ul>
                                            </li>

                                             <li class="sub-menu" >
                                                <a href="javascript:;">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span>Gestión de Pedidos</span>
                                                </a>
                                                <ul class="collapsed-nav closed">
                                                    <li><a href="registrar_pedido.php">Registrar Pedido</a></li>
                                                    <li><a href="visualizar_pedidos.php">Visualizar Pedidos</a></li>
                                                </ul>
                                            </li>

                                             <li class="sub-menu" >
                                                <a href="javascript:;">
                                                    <i class="fa fa-bar-chart-o"></i>
                                                    <span>Reportes</span>
                                                </a>
                                                <ul class="collapsed-nav closed">
                                                    <li><a href="reporte_ventas.php">Ventas Totales</a></li>
                                                    <li><a href="reporte_platos.php">Reporte Platos</a></li>
                                                    <li><a href="reporte_variabilidad.php">Reporte Variabilidad</a></li>
                                                </ul>
                                            </li>




                                       <?php }; ?>

                                       <?php if($rolIngresado == "Cajero"){?>

                                          <li class="sub-menu" >
                                                <a href="javascript:;">
                                                    <i class="fa fa-cutlery"></i>
                                                    <span>Gestión de Platos</span>
                                                </a>
                                                <ul class="collapsed-nav closed">
                                                    
                                                    <li><a href="visualizar_platos.php">Visualizar Platos</a></li>
                                                    
                                                </ul>
                                            </li>

                                             <li class="sub-menu" >
                                                <a href="javascript:;">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span>Gestión de Pedidos</span>
                                                </a>
                                                <ul class="collapsed-nav closed">
                                                    <li><a href="registrar_pedido.php">Registrar Pedido</a></li>
                                                     <li><a href="visualizar_pedidos.php">Visualizar Pedidos</a></li>
                                                </ul>
                                            </li>

                                             <li class="sub-menu" >
                                                <a href="javascript:;">
                                                    <i class="fa fa-bar-chart-o"></i>
                                                    <span>Reportes</span>
                                                </a>
                                                <ul class="collapsed-nav closed">
                                                    <li><a href="reporte_ventas.php">Ventas Totales</a></li>
                                                    <li><a href="reporte_platos.php">Reporte Platos</a></li>
                                                    <li><a href="reporte_variabilidad.php">Reporte Variabilidad</a></li>
                                                </ul>
                                            </li>

                                       <?php }; ?>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>


<section id="main-content">
        <section class="wrapper">

    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <div class="panel-body">
                    <div class="top-stats-panel">
                        <div class="gauge-canvas">
                            <h4 class="widget-h">Bienvenidos</h4>
                        </div>
                       <div class="wdgt-row">
                   		 <img src="images/logo2.png" height="350" alt="">
                    </div>
                </div>
            </section>
        </div>
     </div>

     </section>
  </section>




</section>
    <!--sidebar end-->
    <!--main content start-->
    



    <!--main content end-->


<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<!--Core js-->
<script src="js/lib/jquery.js"></script>
<script src="js/lib/jquery-1.8.3.min.js"></script>
<script src="bs3/js/bootstrap.min.js"></script>
<script src="js/lib/jquery-ui-1.9.2.custom.min.js"></script>
<script class="include" type="text/javascript" src="js/accordion-menu/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scrollTo/jquery.scrollTo.min.js"></script>
<script src="assets/easypiechart/jquery.easypiechart.js"></script>
<script src="js/nicescroll/jquery.nicescroll.js" type="text/javascript"></script>

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

<script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>

<script src="assets/jquery-tags-input/jquery.tagsinput.js"></script>

<!--common script init for all pages-->
<script src="js/scripts.js"></script>

<script src="js/toggle-button/toggle-init.js"></script>

<script src="js/advanced-form/advanced-form.js"></script>
<!--Easy Pie Chart-->
<script src="assets/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="assets/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="assets/flot-chart/jquery.flot.js"></script>
<script src="assets/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="assets/flot-chart/jquery.flot.resize.js"></script>
<script src="assets/flot-chart/jquery.flot.pie.resize.js"></script>

<!--script for this page-->
</body>
</html>