<?php
include("conec.php");
$conex =conectarse();

if(isset($_POST['submit'])) {
 // Ruta donde se guardarán las imágenes
    $directorio = $_SERVER['DOCUMENT_ROOT'].'/uploads/platos/';
 
    // Recibo los datos de la imagen
    $nombre = $_FILES['imagenPlato']['name'];
    $tipo = $_FILES['imagenPlato']['type'];
    $tamano = $_FILES['imagenPlato']['size'];
    
 
    // Muevo la imagen desde su ubicación
    // temporal al directorio definitivo
    move_uploaded_file($_FILES['imagenPlato']['tmp_name'],$directorio.$nombre);


$consulta = "INSERT INTO platos(id_plato, nombre, ingredientes, fecha, precio, imagen, estado, id_empresa) VALUES ('" . pg_escape_string($_POST['codigoPlato']) . "','" . 
pg_escape_string($_POST['nombrePlato']) . "','" .
pg_escape_string ($_POST['ingredientes']) . "','" . 
pg_escape_string ($_POST['fecha']) . "','" . 
pg_escape_string ($_POST['precioPlato']) . "','" . 
"$nombre" . "','" . 
pg_escape_string ('Activo') . "','" . 
pg_escape_string($_POST['idEmpresa']) . "')";

$result = pg_query($conex, $consulta);
  if (!$result) {
    echo "Query: Un error ha occurido.\n";
    exit;
  }



if ( $_POST ) {
 echo '<script language = javascript>
	alert("Registro Insertado Correctamente")
	self.location = "registrar_plato.php"
	</script>';
}

else
echo '<script language = javascript>
	alert("Ha ocurrido un error en el registro de datos")
	self.location = "registrar_plato.php"
	</script>';

	 } 

    else {
    	'<script language = javascript>
	alert("Error, Todavia NO Ha Selecionado Nada")
	self.location = "registrar_empresa.html"
	</script>';

       

    }
?>