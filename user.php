<?php
if(isset($_POST['modificar'])){
        $user_data=array('idC'=>$_GET['e'],'nombre'=>$_POST['nombre'],'apellido1'=>$_POST['apellido1'],'apellido2'=>$_POST['apellido2'],'email'=>$_POST['email'],'pass'=>$_POST['pass1'],'dni'=>$_POST['dni'],'direccion'=>$_POST['direccion']);
        $usuario=new Usuario();
	    $usuario->edit($user_data);
        $_SESSION['email'] = $_POST['email'];
        header("Location: ".$_SERVER['PHP_SELF']."?p=user");
    }
if(isset($_SESSION['email'])){
    $user_data=array('email'=>$_SESSION['email']);
	$usuario=new Usuario();
	$usuario->get($user_data);
    
    
    
    ?>
    <div class="col p-3 pl-5">
           
           
                <div class="row">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=user&e=<?php echo $usuario->getIdC() ?>" method="POST" id="userData" class="perfil col-11  m-3 p-3 m-auto border opac text-center" id="formVista">
                          <h2>Datos usuario</h2><br>
                           <div class="form-group">
                                <label class="p-1 mt-2" for="nombre">Nombre</label>
                                <div class="div-input">
                                    <input type="text" name="nombre" id="nombre" value="<?php echo $usuario->getNombre() ?>" class="form-control col-sm-8 m-auto">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="p-1 mt-2" for="apellido1">1º Apellido</label>
                                <div class="div-input">
                                    <input type="text" id="apellido1" name="apellido1" value="<?php echo $usuario->getApellido1() ?>" class="form-control col-sm-8 m-auto">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="p-1 mt-2" for="apellido2">2º Apellido</label> 
                                <div class="div-input">
                                    <input type="text" id="apellido2" name="apellido2" value="<?php echo $usuario->getApellido2() ?>" class="form-control col-sm-8 m-auto">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="p-1 mt-2" for="email">Email</label>
                                <div class="div-input">
                                    <input type="email" id="email" name="email" value="<?php echo $usuario->getEmail() ?>" class="form-control col-sm-8 m-auto">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="p-1 mt-2" for="pass">Nueva Contraseña</label>
                                <div class="div-input">
                                    <input type="password" id="pass1" name="pass1" value="" class="form-control col-sm-8 m-auto">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="p-1 mt-2" for="pass">Repetir Contraseña</label>
                                <div class="div-input">
                                    <input type="password" id="pass2" name="pass2" value="" class="form-control col-sm-8 m-auto">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="p-1 mt-2" for="dni">Dni</label>
                                <div class="div-input">
                                    <input type="text" id="dni" name="dni" value="<?php echo $usuario->getDni() ?>" class="form-control col-sm-8 m-auto">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="p-1 mt-2" for="direccion">Direccion</label>
                                <div class="div-input">
                                    <input type="text" id="direccion" name="direccion" value="<?php echo $usuario->getDireccion() ?>" class="form-control col-sm-8 m-auto">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <input type="button" value="Verificar" id="verificar2" name="verificar2" class="btn btn-warning">
                            <input type="submit" value="Modificar" id="modificar" name="modificar" class="btn btn-warning d-none">
                        </form>
                </div>    
    </div>
    <?php
}
?>