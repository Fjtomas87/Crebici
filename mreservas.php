<?php

if(isset($_POST['cancelAlq'])){
    $alquiler = new Alquiler();
    $idA = $_POST['idAlq'];
    $estado = "cancelado";
    $alquiler->modificarEstado($idA, $estado);
}



if(isset($_SESSION['idC'])){
    $alquiler = new Alquiler();
    $alquiler->getByIdC($_SESSION['idC']);
    $rows = $alquiler->getAlquileres();
  ?>
    
    <div class="col-11 mx-auto" style="overflow-x: auto">
                    <h2 class="text-center">Cuentas Usuarios</h2>
                    <table class="table table-hover opac p-3 m-3 mx-auto text-center" style="width:auto" id="tablaUsuarios">
                        <thead>
                            <tr>
                                <th>ID Alquiler</th>
                                <th>Fecha Alquiler</th>
                                <th>Dias</th>
                                <th>ID Cliente</th>
                                <th>ID Bicicleta</th>
                                <th>Estado</th>
                                <th></th>
                            </tr>
                        </thead>
                       <?php
                       foreach($rows as $row){
                       ?>
                           <tr>
                                <form action="index.php?p=mreservas" method="POST">
                                <td><?php echo $row['idA']; ?></td>
                                <td><?php echo $row['fechaIni']; ?></td>
                                <td><?php echo $row['dias']; ?></td>
                                <td><?php echo $row['idC']; ?></td>
                                <td><?php echo $row['idBici']; ?></td>
                                <td><?php echo $row['estado']; ?></td>
                                <?php
                                    if($row['estado']=="reservado"){
                                ?>
                                <td>
                                    <input name="idAlq" class="d-none" type="text" value="<?php echo $row['idA']; ?>">
                                    <input type="submit" name="cancelAlq" id="<?php echo $row['idA'] ?>" value="Cancelar Alquiler">
                                </td>
                                
                                <?php
                                    }  
                                ?>
                                </form>
                           </tr>                                          
                        <?php  
                       }
                       ?>
                   </table>
                </div>
    
    <?php
}

?>


