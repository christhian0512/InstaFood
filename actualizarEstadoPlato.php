<?php
include("conec.php");
$conex =conectarse();

$idPlato = $_POST['id_plato'];
$idEmpresa = $_POST['id_empresa'];

$consulta1 = "select * from platos where id_plato='".$idPlato."' AND id_empresa='".$idEmpresa."'";
$result1 = pg_query($conex, $consulta1);
$fila=pg_fetch_array($result1);
$estadoActual = $fila['estado'];




if($estadoActual=='Activo'){

	$consulta2 = "UPDATE platos set estado='Innactivo' WHERE id_plato='".$idPlato."' and id_empresa='".$idEmpresa."'";
	pg_query($consulta2);
	echo ('Ha cambiado el estado del Plato: "'.$idPlato." - ".$fila['nombre'].'" de Activo a Innactivo');

	
} else{
	$consulta3 = "UPDATE platos set estado='Activo' WHERE id_plato='".$idPlato."' and id_empresa='".$idEmpresa."'";
	pg_query($consulta3);
	echo ('Ha cambiado el estado del Plato: '.$idPlato." - ".$fila['nombre'].' de Innactivo a Activo');
}

?>