<?php
if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario']=="admin"){
        $usuario = new Usuario();
        $usuario->getTodos($_SESSION['email']);
        $rows=$usuario->getUsers();
        ?>
        
           <div class="col-11" style="overflow-x: auto">
              <h2 class="text-center">Cuentas Usuarios</h2>
               <table class="table table-hover bg-info p-3 m-3 mx-auto" style="width:auto" id="tablaUsuarios">
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
                    <div class="container perfil d-none mx-auto" id="form<?php echo $row['idC'] ?>">
                        <form action="index.php?p=cuentas" method="POST" id="form<?php echo $row['idC'] ?>" class="m-3 p-3 border form">
                           
                            <div class="form-group">
                                <label class="control-label p-1 mt-2" for="nombre">Id</label>
                                <div class="div-input">
                                    <input type="text" name="idC" id="idC" value="<?php echo $row['idC'] ?>" class="form-control  col-sm-8" disabled>
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group has-error has-feedbac">
                                <label class="control-label p-1 mt-2" for="nombre">Nombre</label>
                                <div class="div-input">
                                    <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre'] ?>" class="form-control col-sm-8">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group invalid">
                                <label class="control-label p-1 mt-2" for="apellido1">1º Apellido</label>
                                <div class="div-input">
                                    <input type="text" id="apellido1" name="apellido1" value="<?php echo $row['apellido1'] ?>" class="form-control col-sm-8"> 
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label p-1 mt-2" for="apellido2">2º Apellido</label>
                                <div class="div-input">
                                    <input type="text" id="apellido2" name="apellido2" value="<?php echo $row['apellido2'] ?>" class="form-control col-sm-8"> 
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label p-1 mt-2" for="email">Email</label>
                                <div class="div-input">
                                    <input type="email" id="email" name="email" value="<?php echo $row['email'] ?>" class="form-control col-sm-8">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label p-1 mt-2" for="dni">Dni</label>
                                <div class="div-input">
                                    <input type="text" id="dni" name="dni" value="<?php echo $row['dni'] ?>" class="form-control col-sm-8"> 
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label p-1 mt-2" for="direccion">Direccion</label>
                                <div class="div-input">
                                    <input type="text" id="direccion" name="direccion" value="<?php echo $row['direccion'] ?>" class="form-control col-sm-8">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label p-1 mt-2" for="tipoUser">Tipo Usuario</label>
                            <div class="div-input">
                               <select class="custom-select form-control col-sm-8" id="tipoUser" name="tipoUser">
                                    <option value="cliente">Cliente</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            </div><br><br>
                            
                            <input type="submit" value="Modificar" name="modificar" class="btn btn-warning">
                             
                        </form>
                   </div>
                       <?php
                   }
                ?>    
                    
                    
                    
            
            
       
        <?php
    }
}
?>