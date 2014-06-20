<?php 

if($rolIngresado == "admin"){

                                            
                                            $consulta_empresas='select * from pedido';
                                            $consulta=pg_query($conex,$consulta_empresas);
                                              
                                            
                                            while($fila=pg_fetch_array($consulta)){
                                                echo "<tr><td>".$fila['id_pedido'].'</td>';
                                                echo "<td>".$fila['fecha'].'</td>';
                                                echo "<td>".$fila['cliente'].'</td>';
                                                echo "<td>".$fila['total_pedido'].'</td>';
                                                echo "<td>".$fila['estado'].'</td>';
                                                echo "<td>".$fila['id_empresa'].'</td>';
                                                echo " <td>
                                                        <button class = 'btn btn-info cambiarPedido'  id = '".$fila[ "id_pedido" ]."' onclick=javascript:cambiar_estadoPedido('".$fila['id_pedido']."','".$fila['id_empresa']."')>Cancelar Pedido</button><br><br>
                                                
                                                </td></tr>";
                                            }
                                            
}; 

if($rolIngresado == "Administrador" or $rolIngresado == "Cajero"){

                                            
                                            $consulta_empresas="select * from pedido where id_empresa = '".$empresaIngresado."'";
                                            $consulta=pg_query($conex,$consulta_empresas);
                                              
                                            
                                          while($fila=pg_fetch_array($consulta)){
                                                echo "<tr><td>".$fila['id_pedido'].'</td>';
                                                echo "<td>".$fila['fecha'].'</td>';
                                                echo "<td>".$fila['cliente'].'</td>';
                                                echo "<td>".$fila['total_pedido'].'</td>';
                                                echo "<td>".$fila['estado'].'</td>';
                                                echo "<td>".$fila['id_empresa'].'</td>';
                                                echo " <td>
                                                        <button class = 'btn btn-info cambiarPedido'  id = '".$fila[ "id_pedido" ]."' onclick=javascript:cambiar_estadoPedido('".$fila['id_pedido']."','".$fila['id_empresa']."')>Cancelar Pedido</button><br><br>
                                                
                                                </td></tr>";
                                            }
                                            
}; 


?>