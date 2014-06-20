<?php
include("conec.php");
$conex =conectarse();

if ( $_POST ) {
 $listaPedido = json_decode($_POST['items']);

 
    foreach($listaPedido as $pedido)
    {
    	$codigo = $pedido->codigoPedido;
    	$fecha = $pedido->fecha;	
    	$cliente = $pedido->cliente;
    	$precio = $pedido->total;
      $empresa = $pedido->empresa;
      $vendedor = $pedido->vendedor;
        /*echo $codigo . ', ';
        echo $fecha . ', ';
        echo $cliente . ', ';
        echo $pedido->codigoPl . ', ';
        echo $pedido->adicionesTotales . ', ';
        echo $pedido->totalA . ', ';
        echo $precio . ' ';
       echo '<br/>';*/
       break;
       /*$consulta = "INSERT INTO items_pedido (id_pedido,id_plato,adiciones,precio_adiciones) VALUES ('" .pg_escape_string ($pedido->codigoPedido) . "','" .  
			pg_escape_string($pedido->codigoPl) . "','" . 
			pg_escape_string($pedido->adicionesTotales) . "','" .
			pg_escape_string($pedido->totalA) . "')";

			$result = pg_query($conex, $consulta);*/

    };

     $consulta1 = "INSERT INTO pedido (id_pedido,fecha,cliente,id_usuario, total_pedido, estado, id_empresa) VALUES ('" .pg_escape_string ($codigo) . "','" .  
			pg_escape_string($fecha) . "','" . 
			pg_escape_string($cliente) . "','" .
			pg_escape_string($vendedor) . "','" .
      pg_escape_string($precio) . "','" .
      pg_escape_string("Activo") . "','" .
			pg_escape_string($empresa) . "')";

			$result = pg_query($consulta1);

   

   foreach($listaPedido as $pedido1)
    {
      /*$codigo = $pedido1->codigoPedido;
      $fecha = $pedido1->fecha;  
      $cliente = $pedido1->cliente;
      $precio = $pedido1->total;
        echo $codigo . ', ';
        echo $fecha . ', ';
        echo $cliente . ', ';
        echo $pedido->codigoPl . ', ';
        echo $pedido->adicionesTotales . ', ';
        echo $pedido->totalA . ', ';
        echo $precio . ' ';
       echo '<br/>';*/
       $consulta = "INSERT INTO items_pedido (id_pedido,id_plato,adiciones,precio_adiciones) VALUES ('" .pg_escape_string ($pedido1->codigoPedido) . "','" .  
      pg_escape_string($pedido1->codigoPl) . "','" . 
      pg_escape_string($pedido1->adicionesTotales) . "','" .
      pg_escape_string($pedido1->totalA) . "')";

      $result = pg_query($conex, $consulta);

    };

    echo '<script language = javascript>
  alert("Pedido Registrado")
  self.location = "registrar_pedido.php"
  </script>';
  }


if ( $_POST ) {
 echo '<script language = javascript>
	alert("Registro Insertado Correctamente")
	self.location = "registrar_pedido.php"
	</script>';
}

    else {
    	'<script language = javascript>
	alert("Error, Todavia NO Ha Selecionado Nada")
	self.location = "registrar_pedido.php"
	</script>';

       

    }

?>






