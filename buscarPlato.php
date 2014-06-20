<?php
	require_once( "script_buscar_plato.php");
	session_start();
$rolIngresado = $_SESSION['rol'];
$empresaIngresado = $_SESSION['idEmpresa'];	


	$opciones = array();
	
	$consulta = new Platos();


	
	if( $_POST[ "type" ] == 1)
	{
		if($rolIngresado=='Administrador' || $rolIngresado == 'Cajero'){

			$resultado = $consulta -> buscarPlatoPorPalabra( $_POST[ "busqueda" ], $empresaIngresado );
		}
		if($rolIngresado == 'admin'){
			$resultado = $consulta -> buscarPlatoPorPalabraAdmin( $_POST[ "busqueda" ]);
		}

			
	
	foreach( $resultado as $valor )
	{
		echo "<tr class = 'info'>
				<td>".$valor[ "id_plato" ]."</td>
				<td>".$valor[ "nombre" ]."</td>
				<td>".$valor[ "ingredientes" ]."</td>
				<td>".$valor[ "fecha" ]."</td>
				<td>".$valor[ "precio" ]."</td>
				<td>".$valor[ "id_empresa" ]."</td>
				<td>".$valor[ "estado" ]."</td>
				<td>
					<button class = 'btn btn-warning cambiarEstado' empresa = '".$valor[ "id_empresa" ]."' id = '".$valor[ "id_plato" ]."' onclick=javascript:cambiar_estadoPlato('".$valor['id_plato']."','".$valor['id_empresa']."')>Cambiar Estado</button><br><br>
				</td>
			  </tr>";
	}
		}

?>