<?php

if(isset($_SESSION['email'])){
    $user_data=array('email'=>$_SESSION['email']);
	$usuario=new Usuario();
	$usuario->get($user_data);
    
    ?>
    <div class="col mx-auto p-3 m-3 pl-5">
     
        
           <h2>Datos usuario</h2><br>
           
                <div class="row">
                        <form action="index.php?p=cuentas" method="POST" id="userData" class="perfil col-11  m-3 p-3 border">
                            <label class="p-1 mt-2" for="nombre">Id</label><input type="text" name="idC" id="idC" value="<?php echo $usuario->getIdC() ?>" class="form-control  col-sm-8" disabled>
                            <label class="p-1 mt-2" for="nombre">Nombre</label><input type="text" name="nombre" id="nombre" value="<?php echo $usuario->getNombre() ?>" class="form-control col-sm-8">
                            <label class="p-1 mt-2" for="apellido1">1º Apellido</label><input type="text" id="apellido1" name="apellido1" value="<?php echo $usuario->getApellido1() ?>" class="form-control col-sm-8"> 
                            <label class="p-1 mt-2" for="apellido2">2º Apellido</label><input type="text" id="apellido2" name="apellido2" value="<?php echo $usuario->getApellido2() ?>" class="form-control col-sm-8"> 
                            <label class="p-1 mt-2" for="email">Email</label><input type="email" id="email" name="email" value="<?php echo $usuario->getEmail() ?>" class="form-control col-sm-8">
                            <label class="p-1 mt-2" for="dni">Dni</label><input type="text" id="dni" name="dni" value="<?php echo $usuario->getDni() ?>" class="form-control col-sm-8"> 
                            <label class="p-1 mt-2" for="direccion">Direccion</label><input type="text" id="direccion" name="direccion" value="<?php echo $usuario->getDireccion() ?>" class="form-control col-sm-8"><br>
                            <select class="custom-select form-control col-sm-8" id="tipoUser" name="tipoUser">
                                <option value="cliente">Cliente</option>
                                <option value="admin">Admin</option>
                            </select><br><br>
                            <input type="submit" value="Modificar" name="modificar" class="btn btn-warning">
                             
                        </form>
                   </div>
    </div>
    <?php
}
?>