<?php
include("conec.php");
$conex =conectarse();

$idPedido = $_POST['id_pedido'];
$idEmpresa = $_POST['id_empresa'];

$consulta1 = "select * from pedido where id_pedido='".$idPedido."' AND id_empresa='".$idEmpresa."'";
$result1 = pg_query($conex, $consulta1);
$fila=pg_fetch_array($result1);
$estadoActual = $fila['estado'];




if($estadoActual=='Activo'){

	$consulta2 = "UPDATE pedido set estado='Cancelado' WHERE id_pedido='".$idPedido."' and id_empresa='".$idEmpresa."'";
	pg_query($consulta2);
	echo ('Ha cambiado el estado del Pedido: "'.$idPedido.'" de Activo a Cancelado');

	
} else{
	$consulta3 = "UPDATE pedido set estado='Activo' WHERE id_pedido='".$idPedido."' and id_empresa='".$idEmpresa."'";
	pg_query($consulta3);
	echo ('Ha cambiado el estado del Pedido: "'.$idPedido.'" de Cancelado a Activo');
}

?>