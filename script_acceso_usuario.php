<?php 
//Proceso de conexión con la base de datos
include("conec.php");
$conex =conectarse();


//Inicio de variables de sesión
if (!isset($_SESSION)) {
  session_start();
}

//Recibir los datos ingresados en el formulario
$identificacion= $_POST['identificacion'];
$contrasena= $_POST['contrasena'];

//Consultar si los datos son están guardados en la base de datos
$consulta= "SELECT * FROM usuarios WHERE id_usuario='".$identificacion."' AND contrasena='".$contrasena."'"; 
$resultado= pg_query($conex, $consulta) or die (pg_error());
$fila=pg_fetch_array($resultado);




if (!$fila[0]) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
{
	echo '<script language = javascript>
	alert("Usuario o Password incorrectos, por favor verifique.")
	self.location = "login.php"
	</script>';

	
	

}
else //opcion2: Usuario logueado correctamente
{ 
//Definimos las variables de sesión y redirigimos a la página de usuario
	$_SESSION['nombre'] = $fila['nombre'];
	$_SESSION['rol'] = $fila['rol'];
	$_SESSION['idEmpresa'] = $fila['id_empresa'];
	$_SESSION['identificacion'] = $fila['id_Usuario'];
   header("Location: index.php");

	
}

?>
