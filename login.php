<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="images/favicon.html">

    <title>Instafood</title>

    <!--Core CSS -->
    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />


</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" form action="script_acceso_usuario.php" autocomplete="off" method="post" formm name="acceso">
        <h2 class="form-signin-heading"><img src="images/logo.png" width="224" height="58"></h2>
        <div class="login-wrap">
            <div class="user-login-info">
            
            
                <input type="text" id="identificacion" name="identificacion" class="form-control" placeholder="Identificación" autofocus>
                
                <input type="password" id="contrasena" name="contrasena"class="form-control" placeholder="Contraseña">
                
            </div>
            
            <button class="btn btn-lg btn-login btn-block" type="submit">Acceder</button>


        </div>

      </form>

    </div>



    <script src="js/lib/jquery.js"></script>
    <script src="bs3/js/bootstrap.min.js"></script>

  </body>
</html>
