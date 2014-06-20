<?php
include("conec.php");
$conex =conectarse();



class Platos{

    public function buscarPlatoPorPalabra( $palabra, $empresaIngresado )
	{
        $resultado = Array();
        $consulta = "SELECT id_plato, nombre, ingredientes, fecha, precio, imagen, estado, id_empresa FROM platos WHERE nombre LIKE '%".$palabra."%' AND id_empresa='".$empresaIngresado."'";

		$res=pg_query($consulta);

         while($fila=pg_fetch_array($res)){
            array_push($resultado, $fila);
         }

         return $resultado;
        
    }
    public function buscarPlatoPorPalabraAdmin( $palabra)
    {
        $resultado = Array();
        $consulta = "SELECT id_plato, nombre, ingredientes, fecha, precio, imagen, estado, id_empresa FROM platos WHERE nombre LIKE '%".$palabra."%'";

        $res=pg_query($consulta);

         while($fila=pg_fetch_array($res)){
            array_push($resultado, $fila);
         }

         return $resultado;
        
    }


     public function actualizarPlato( $codigo, $empresa, $estadoNuevo)
    {
        
        $consulta = "UPDATE platos set estado='".$estadoNuevo."' WHERE id_plato='".$codigo."' and estado = 'Activo' and id_empresa='".$empresa."'";
        pg_query($consulta,$conex);
        
    }
}
?>