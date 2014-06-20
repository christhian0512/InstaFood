<?php
include("conec.php");
$conex =conectarse();




$codigoPlato = $_GET['id_plato']; 
echo $codigoPlato;
$codigoAdicion = $_POST['id_adicion']; 




$consulta1 = "select * from adiciones where id_adicion='".$codigoAdicion."'";
$result1 = pg_query($conex, $consulta1);

$consulta2 = "select * from platos where id_plato='".$codigoPlato."'";
$result2 = pg_query($conex, $consulta2);
?>
           

                
                           



