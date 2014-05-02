<?php
function conectarse() {
$user = 'postgres';
$passwd = 'katty09';
$db = 'instafood';
$port = 5432;
$host = 'localhost';
$strCnx = "host=$host port=$port dbname=$db user=$user password=$passwd";
$cnx = pg_connect($strCnx) or die ("Error de conexion. ". pg_last_error());
return $cnx;
echo "Conexion exitosa <hr>"; 
exit();
}
?>
