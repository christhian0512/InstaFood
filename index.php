<?php
//Proceso de conexión con la base de datos
include("conec.php");
$conex =conectarse();

//Iniciar Sesión
session_start();

    $inactivo = 1000;


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

$identificacion = $_SESSION['identificacion'];

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
                        <span class="username"><?php echo $_SESSION['nombre'];?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Perfil</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Configuración</a></li>
                        <li><a href="login.html"><i class="fa fa-key"></i> Salir</a></li>
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
                        <i class="fa fa-book"></i>
                        <span>Registro</span>
                    </a>
                    <ul class="collapsed-nav closed">
                        <li><a href="registrar_empresa.html">Registrar Empresa</a></li>
                        <li><a href="registrar_usuario.html">Registrar Usuario</a></li>
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
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