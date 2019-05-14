<?php
if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario']=="admin"){
        $usuario = new Usuario();
        $usuario->getTodos($_SESSION['email']);
        $rows=$usuario->getUsers();
        ?>
        
           <div class="col">
              <h2 class="text-center">Cuentas Usuarios</h2>
               <table class="table table-hover bg-info p-3 m-3" id="tablaUsuarios">
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
            <div class="col showUser">
                    
            </div>
            
       
        <?php
    }
}
?>