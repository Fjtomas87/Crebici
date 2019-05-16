<?php
if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario']=="admin"){
        $usuario = new Usuario();
        $usuario->getTodos($_SESSION['email']);
        $rows=$usuario->getUsers();
        ?>
        
           <div class="col-12">
              <h2 class="text-center">Cuentas Usuarios</h2>
               <table class="table table-responsive table-hover bg-info p-3 m-3" id="tablaUsuarios">
                  <thead>
                       <tr>
                           <th>Nombre</th>
                           <th>1º Apellido</th>
                           <th>Tipo Usuario</th>
                           <th></th>
                       </tr>
                   </thead>
                   <?php
                   foreach($rows as $row){
                   ?>
                       <tr>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['apellido1']; ?></td>
                            <td><?php echo $row['tipoUser']; ?></td>
                            <td><input type="button" class="botonPerfil" id="<?php echo $row['idC'] ?>" value="Perfil"></td>
                       </tr>                                          
                    <?php  
                   }
                   ?>
               </table> 
           </div>
            
                <?php
                    foreach($rows as $row){
                ?>
                    
                        <form action="index.php?p=cuentas" method="POST" id="form<?php echo $row['idC'] ?>" class="perfil col-12 d-none m-3 p-3">
                            <label class="p-1 mt-2" for="nombre">Id</label><input type="text" name="idC" id="idC" value="<?php echo $row['idC'] ?>" class="form-control col-sm-8">
                            <label class="p-1 mt-2" for="nombre">Nombre</label><input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre'] ?>" class="form-control col-sm-8">
                            <label class="p-1 mt-2" for="apellido1">1º Apellido</label><input type="text" id="apellido1" name="apellido1" value="<?php echo $row['apellido1'] ?>" class="form-control col-sm-8"> 
                            <label class="p-1 mt-2" for="apellido2">2º Apellido</label><input type="text" id="apellido2" name="apellido2" value="<?php echo $row['apellido2'] ?>" class="form-control col-sm-8"> 
                            <label class="p-1 mt-2" for="email">Email</label><input type="email" id="email" name="email" value="<?php echo $row['email'] ?>" class="form-control col-sm-8">
                            <label class="p-1 mt-2" for="dni">Dni</label><input type="text" id="dni" name="dni" value="<?php echo $row['dni'] ?>" class="form-control col-sm-8"> 
                            <label class="p-1 mt-2" for="direccion">Direccion</label><input type="text" id="direccion" name="direccion" value="<?php echo $row['direccion'] ?>" class="form-control col-sm-8"><br>
                            <select class="custom-select form-control col-sm-8" id="tipoUser" name="tipoUser">
                                <option value="cliente">Cliente</option>
                                <option value="admin">Admin</option>
                            </select><br><br>
                            <input type="submit" value="Modificar" name="modificar" class="btn btn-warning">
                             
                        </form>
                   
                       <?php
                   }
                ?>    
                    
                    
                    
            
            
       
        <?php
    }
}
?>