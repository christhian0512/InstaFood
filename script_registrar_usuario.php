<?php
include("conec.php");
$conex =conectarse();

# Ejecutando la Consulta


$consulta = "INSERT INTO usuarios (id_usuario, id_empresa, nombre, rol,contrasena,cargo) VALUES ('" . pg_escape_string($_POST['cedulaUsuario']) . "','" . 
pg_escape_string ($_POST['idEmpresa']) . "','" .
pg_escape_string ($_POST['nombreUsuario']) . "','" . 
pg_escape_string ($_POST['rolseleccionado']) . "','" . 
pg_escape_string ($_POST['contrasenaUsuario']) . "','" . 
pg_escape_string('Asistente') . "')";

$result = pg_query($conex, $consulta);
  if (!$result) {
    echo "Query: Un error ha occurido.\n";
    exit;
  }



if ( $_POST ) {
 echo '<script language = javascript>
	alert("Registro Insertado Correctamente")
	self.location = "registrar_usuario.php"
	</script>';
}
else
echo '<script language = javascript>
	alert("Ha ocurrido un error en el registro de datos")
	self.location = "registrar_usuario.php"
	</script>';



?>