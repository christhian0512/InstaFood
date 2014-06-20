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
    <meta name="description" content="">
    <link rel="shortcut icon" href="images/favicon.html">
    <title>InstaFood</title>

     <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
     <script src = "js/jquery.js" ></script>
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/uniform.default.css">
    <!--dynamic table-->
    <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <script src = "js/FuncionesAjax.js" ></script>
    <script src = "js/tabla.js" ></script>
    

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
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Pedidos
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                    </header>
                    
                    <div class="panel-body">
                   
                    <div class="box-head tabs">
                            <ul class="nav nav-tabs">
                                <li class='active'>
                                    <a href="#pedidos" data-toggle="tab">Pedidos</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="box-content box-nomargin">
                        <fieldset >
                          <div class="alert alert-block alert-info fade in" id="addpedido">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                               
                            </div>
                            </fieldset>
                           <div class="table-responsive">
                            <div class="tab-content">
                                <div class="tab-pane active table-with-action" id="pedidos">
                                    <table class='table table-has-pover table-striped table-bordered dataTable dataTable-nosort' data-nosort="0">
                                        <thead>
                                            <tr>
                                               
                                                <th>Código Pedido</th>
                                                <th>Fecha</th>
                                                <th>Cliente</th>
                                                <th>Total</th>
                                                <th>Estado</th>
                                                <th>Empresa</th>
                                                <th>Acción</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="cuerpo">
                                                <?php include('desplegar_pedidos.php') ?>
                                        </tbody>
                                    </table>
                                   
                                </div>
                            </div>
                           </div> 
                        </div>
                    
    

            
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
        </section>
    </section>
  

</section>

    
    <!--main content end-->


<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<script src="js/lib/jquery.js"></script>
<script src="bs3/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/accordion-menu/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scrollTo/jquery.scrollTo.min.js"></script>
<script src="js/nicescroll/jquery.nicescroll.js" type="text/javascript"></script>
<!--Easy Pie Chart-->
<script src="assets/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="assets/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="assets/flot-chart/jquery.flot.js"></script>
<script src="assets/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="assets/flot-chart/jquery.flot.resize.js"></script>
<script src="assets/flot-chart/jquery.flot.pie.resize.js"></script>

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
<!--common script init for all pages-->
<script src="js/scripts.js"></script>

<!--dynamic table initialization -->
<script src="js/dynamic_table/dynamic_table_init.js"></script>



<!--script for this page-->
</body>
</html>