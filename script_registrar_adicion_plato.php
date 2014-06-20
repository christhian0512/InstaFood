<?php
include("conec.php");
$conex =conectarse();

if(isset($_POST['submit'])) {
 // Ruta donde se guardarán las imágenes

$consulta = "INSERT INTO adiciones(id_adicion, nombre, precio, id_plato) VALUES ('" . pg_escape_string($_POST['codigoAdicion']) . "','" . 
pg_escape_string($_POST['nombreAdicion']) . "','" .
pg_escape_string ($_POST['precioAdicion']) . "','" . 
pg_escape_string($_POST['idPlato']) . "')";

$result = pg_query($conex, $consulta);
  if (!$result) {
    echo "Query: Un error ha occurido.\n";
    exit;
  }



if ( $_POST ) {
 echo '<script language = javascript>
	alert("Registro Insertado Correctamente")
	self.location = "registrar_adicion_plato.php"
	</script>';
}

else
echo '<script language = javascript>
	alert("Ha ocurrido un error en el registro de datos")
	self.location = "registrar_adicion_plato.php"
	</script>';

	 } 

    else {
    	'<script language = javascript>
	alert("Error, Todavia NO Ha Selecionado Nada")
	self.location = "registrar_adicion_plato.php"
	</script>';

       

    }
?>