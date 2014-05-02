<?php
include("conec.php");
$conex =conectarse();

# Ejecutando la Consulta
if ( $_POST ) {
$rol = $_POST['my_hidden_field'];
$consulta = "INSERT INTO usuarios (apellidos,id_usuario,rol,empresa,contrasena) VALUES ('" . pg_escape_string($_POST['nombreUsuario']) . "','" . 
pg_escape_string($_POST['cedulaUsuario']) . "','" .
pg_escape_string ($rol) . "','" . 
pg_escape_string ('00') . "','" . 
pg_escape_string($_POST['contrasenaUsuario']) . "')";

$result = pg_query($conex, $consulta);
  if (!$result) {
    echo "Query: Un error ha occurido.\n";
    exit;
  }
}


if ( $_POST ) {
 echo '<script language = javascript>
	alert("Registro Insertado Correctamente")
	self.location = "registrar_usuario.html"
	</script>';
}
else
echo '<script language = javascript>
	alert("Ha ocurrido un error en el registro de datos")
	self.location = "registrar_usuario.html"
	</script>';
?>