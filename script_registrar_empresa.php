<?php
include("conec.php");
$conex =conectarse();

# Ejecutando la Consulta
if ( $_POST ) {
$consulta = "INSERT INTO empresas (nombre,direccion,id_Empresa,telefono,url,logo) VALUES ('" . pg_escape_string($_POST['nombreEmpresa']) . "','" . 
pg_escape_string($_POST['direccionEmpresa']) . "','" .
pg_escape_string ($_POST['nitEmpresa']) . "','" . 
pg_escape_string($_POST['telEmpresa']) . "','" .
pg_escape_string($_POST['urlEmpresa']) . "','" .
pg_escape_bytea($_POST['logoEmpresa']) . "')";

$result = pg_query($conex, $consulta);
  if (!$result) {
    echo "Query: Un error ha occurido.\n";
    exit;
  }
}


if ( $_POST ) {
 echo '<script language = javascript>
	alert("Registro Insertado Correctamente")
	self.location = "registrar_empresa.html"
	</script>';
}
else
echo '<script language = javascript>
	alert("Ha ocurrido un error en el registro de datos")
	self.location = "registrar_empresa.html"
	</script>';
?>