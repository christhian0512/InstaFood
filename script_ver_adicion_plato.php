

<?php
include("conec.php");
$conex =conectarse();

$datosPlato = $_GET['id'];
list($codigo, $nombre, $precio) = explode(' - ', $datosPlato);

$consulta1 = "select * from adiciones where id_plato='".$codigo."'";
$result1 = pg_query($conex, $consulta1);
$result2 = pg_query($conex, $consulta1);
$result3 = pg_query($conex, $consulta1);
$result4 = pg_query($conex, $consulta1);
$result5 = pg_query($conex, $consulta1);

?>
           
                           
                            <div class="form-group ">    
                                 <label  class="control-label col-lg-3">Adición 1: </label>   
                                        <div class="col-lg-6">
                                         <select class="form-control m-bot15" name="adicion1" id = "adicion1">
                                         <option value='0'>Seleccionar Adición</option>
                                           <?php while($fila=pg_fetch_array($result1)){ 
                                                        echo $consulta1;?>
                                                        <?php echo $fila['nombre'];?>
                                                <option><?php echo $fila['nombre']." - ". $fila['precio']?></option>
                                             <?php }?>
                                            </select>
                                        </div>

                             </div>

                             <div class="form-group ">    
                                 <label  class="control-label col-lg-3">Adición 2: </label>   
                                        <div class="col-lg-6">
                                         <select class="form-control m-bot15" name="adicion2" id = "adicion2">
                                         <option value='0'>Seleccionar Adición</option>
                                           <?php while($fila=pg_fetch_array($result2)){ echo $consulta1;?>
                                                        <?php echo $fila['nombre'];?>
                                                <option><?php echo $fila['nombre']." - ". $fila['precio']?></option>
                                             <?php }?>
                                            </select>
                                        </div>

                             </div>

                             <div class="form-group ">    
                                 <label  class="control-label col-lg-3">Adición 3: </label>   
                                        <div class="col-lg-6">
                                         <select class="form-control m-bot15" name="adicion" id = "adicion3">
                                         <option value='0'>Seleccionar Adición</option>
                                           <?php while($fila=pg_fetch_array($result3)){ echo $consulta1;?>
                                                        <?php echo $fila['nombre'];?>
                                                <option><?php echo $fila['nombre']." - ". $fila['precio']?></option>
                                             <?php }?>
                                            </select>
                                        </div>

                             </div>
                            
                            


