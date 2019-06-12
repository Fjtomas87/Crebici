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
                    <table class="table table-hover opac p-3 m-3 mx-auto text-center" style="width:auto" id="tablaReservas">
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
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=mreservas" method="POST">
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
                                    <input type="submit" name="cancelAlq" id="<?php echo $row['idA'] ?>" value="Cancelar">
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
}else{
    ?>
<div class="container">
    <h1 class="m-3 p-3">Registrate para acceder a nuestro servicio de reserva</h1>
    <div class=" m-3 p-3">
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=registro" class="bg-warning btn mr-4">Registrar</a>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" class="bg-warning btn">Acceder</a>
    </div>
                       
</div>
<?php
}

?>


