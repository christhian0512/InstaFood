<?php
include("conec.php");
$conex =conectarse();
	
	
	//$categorias = array('MES');
	$platos = array('PLATOS');
	$numero = array('NUM');
	
	$consulta_grafica = "select id_plato, COUNT(*) as cuenta from pedido,items_pedido where pedido.id_pedido=items_pedido.id_pedido and fecha = '2014-06-19' GROUP BY id_plato ORDER BY cuenta DESC";
	$consulta=pg_query($conex,$consulta_grafica);
	//$result = $conexion->query($consulta);
	 while($fila=pg_fetch_array($consulta)){
	 	$platos[] = $fila['id_plato'];
		$numero[] = $fila['cuenta'];
		echo $platos;
	 }
	

	echo json_encode( array($platos,$numero) );
	
?>