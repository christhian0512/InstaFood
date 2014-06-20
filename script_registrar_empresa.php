<?php
include("conec.php");
$conex =conectarse();


if(isset($_POST['submit'])) {

 
    // Ruta donde se guardarán las imágenes
    $directorio = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
 
    // Recibo los datos de la imagen
    $nombre = $_FILES['logoEmpresa']['name'];
    $tipo = $_FILES['logoEmpresa']['type'];
    $tamano = $_FILES['logoEmpresa']['size'];
   // echo "Aqui nombre imagen $nombre";
 
    // Muevo la imagen desde su ubicación
    // temporal al directorio definitivo
    
    chmod($directorio, 0777);
    move_uploaded_file($_FILES['logoEmpresa']['tmp_name'],$directorio.$nombre);
  
 

   $consulta = "INSERT INTO empresas (id_empresa,nombre,direccion,telefono,url,logo) VALUES ('" .pg_escape_string ($_POST['nitEmpresa']) . "','" .  
	pg_escape_string($_POST['nombreEmpresa']) . "','" . 
	pg_escape_string($_POST['direccionEmpresa']) . "','" .
	pg_escape_string($_POST['telEmpresa']) . "','" .
	pg_escape_string($_POST['urlEmpresa']) . "','$nombre')";

$result = pg_query($conex, $consulta);
  if (!$result) {
    echo "Query: Un error ha occurido.\n";
    exit;
  }

if ( $_POST ) {
 echo '<script language = javascript>
	alert("Registro Insertado Correctamente")
	self.location = "registrar_empresa.php"
	</script>';
}
else
echo '<script language = javascript>
	alert("Ha ocurrido un error en el registro de datos")
	self.location = "registrar_empresa.php"
	</script>';

       

    } 

    else {
    	'<script language = javascript>
	alert("Error, Todavia NO Ha Selecionado Nada")
	self.location = "registrar_empresa.php"
	</script>';

       

    }

?>






