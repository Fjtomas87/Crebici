<?php
if(isset($_POST['modificarEstado'])){
    $estado = $_POST['selectEstado'];
    $idA = $_POST['id'];
    $alquilerm = new Alquiler();
    $alquilerm->modificarEstado($idA, $estado);
    
}

if(isset($_SESSION['usuario'])){
    
    if($_SESSION['usuario']=="admin"){
        $alquiler = new Alquiler();
        $alquiler->getTodos();
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
                                <form action="index.php?p=alquiler" method="POST">
                                <td><?php echo $row['idA']; ?></td>
                                <td><?php echo $row['fechaIni']; ?></td>
                                <td><?php echo $row['dias']; ?></td>
                                <td><?php echo $row['idC']; ?></td>
                                <td><?php echo $row['idBici']; ?></td>
                                <td>
                                   <input name="id" class="d-none" type="text" value="<?php echo $row['idA']; ?>">
                                        <select class="custom-select form-control" id="estado<?php echo $row['idA']; ?>" name="selectEstado">
                                            <option value="reservado" <?php if($row['estado'] == "reservado"){ echo "selected"; } ?>>Reservado</option>
                                            <option value="nopresentado" <?php if($row['estado'] == "nopresentado"){ echo "selected"; } ?>>No presentado</option>
                                            <option value="alquilado" <?php if($row['estado'] == "alquilado"){ echo "selected"; } ?>>Alquilado</option>
                                            <option value="devuelto" <?php if($row['estado'] == "devuelto"){ echo "selected"; } ?>>Devuelto</option>
                                            <option value="nodevuelto" <?php if($row['estado'] == "nodevuelto"){ echo "selected"; } ?>>No devuelto</option>
                                            <option value="cancelado" <?php if($row['estado'] == "cancelado"){ echo "selected"; } ?>>Cancelado</option>
                                        </select>

                                </td>
                                <td><input type="submit" name="modificarEstado" id="<?php echo $row['idA'] ?>" value="Modificar Estado"></td>
                                </form>
                           </tr>                                          
                        <?php  
                       }
                       ?>
                   </table>
                </div>

       <?php

    }
}

?>