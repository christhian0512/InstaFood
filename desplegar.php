<?php 

if($rolIngresado == "admin"){

                                            
                                            $consulta_empresas='select * from platos';
                                            $consulta=pg_query($conex,$consulta_empresas);
                                              
                                            
                                            while($fila=pg_fetch_array($consulta)){
                                                echo "<tr><td>".$fila['id_plato'].'</td>';
                                                echo "<td>".$fila['nombre'].'</td>';
                                                echo "<td>".$fila['ingredientes'].'</td>';
                                                echo "<td>".$fila['fecha'].'</td>';
                                                echo "<td>".$fila['precio'].'</td>';
                                                echo "<td>".$fila['id_empresa'].'</td>';
                                                echo "<td>".$fila['estado'].'</td>';
                                                echo " <td>
                                                        <button class = 'btn btn-warning cambiarEstado' empresa = '".$fila[ "id_empresa" ]."' id = '".$fila[ "id_plato" ]."' onclick=javascript:cambiar_estadoPlato('".$fila['id_plato']."','".$fila['id_empresa']."')>Cambiar Estado</button><br><br>
                                                
                                                </td></tr>";
                                            }
                                            
}; 

if($rolIngresado == "Administrador" or $rolIngresado == "Cajero"){

                                            
                                            $consulta_empresas="select * from platos where id_empresa = '".$empresaIngresado."'";
                                            $consulta=pg_query($conex,$consulta_empresas);
                                              
                                            
                                          while($fila=pg_fetch_array($consulta)){
                                                echo "<tr><td>".$fila['id_plato'].'</td>';
                                                echo "<td>".$fila['nombre'].'</td>';
                                                echo "<td>".$fila['ingredientes'].'</td>';
                                                echo "<td>".$fila['fecha'].'</td>';
                                                echo "<td>".$fila['precio'].'</td>';
                                                echo "<td>".$fila['id_empresa'].'</td>';
                                                echo "<td>".$fila['estado'].'</td>';
                                                echo " <td>
                                                        <button class = 'btn btn-warning cambiarEstado' empresa = '".$fila[ "id_empresa" ]."' id = '".$fila[ "id_plato" ]."' onclick=javascript:cambiar_estadoPlato('".$fila['id_plato']."','".$fila['id_empresa']."')>Cambiar Estado</button><br><br>
                                                
                                                </td></tr>";
                                            }
                                            
}; 


?>