<?php
if(isset($_POST['registrar'])){
  
    echo "<script>";
    echo "MiFuncionJS();";
    echo "</script>";
    $user_data=array('nombre'=>$_POST['nombre'],'apellido1'=>$_POST['apellido1'],'apellido2'=>$_POST['apellido2'],'email'=>$_POST['email'],'pass'=>$_POST['pass1'],'dni'=>$_POST['dni'],'direccion'=>$_POST['direccion'],'tipoUser'=>'Cliente');
	$usuario=new Usuario();
	$usuario->set($user_data);
    
    $usuario=new Usuario();
	$usuario->getUser($_POST['email'],$_POST['pass1']);
    
    if($usuario->getEmail()!=null){
        $_SESSION['email'] = $usuario->getEmail();
        header("Location: index.php");
    }else{
        
    }
    
}

?>
<div class="container justify-content-center text-center border opac">
<form action="index.php?p=registro" method="POST" class="m-1 p-1 container justify-content-center">
    <h1 class="col-12">FORMULARIO DE REGISTRO</h1>
    <div class="form-group">
        <label class="p-1 mt-2" for="nombre">Nombre</label>
        <div class="div-input">    
            <input type="text" name="nombre" id="nombre" class="form-control col-sm-8 m-auto">
            <span class="help-block"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="p-1 mt-2" for="apellido1">1º Apellido</label>
        <div class="div-input"> 
            <input type="text" id="apellido1" name="apellido1" class="form-control col-sm-8 m-auto">
            <span class="help-block"></span>
        </div>
    </div>        
    <div class="form-group">
        <label class="p-1 mt-2" for="apellido2">2º Apellido</label>
        <div class="div-input"> 
            <input type="text" id="apellido2" name="apellido2" class="form-control col-sm-8 m-auto">
            <span class="help-block"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="p-1 mt-2" for="email">Email</label>
        <div class="div-input"> 
            <input type="email" id="email" name="email" class="form-control col-sm-8 m-auto">
            <span class="help-block"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="p-1 mt-2" for="pass1">Contraseña</label>
        <div class="div-input"> 
            <input type="password" id="pass1" name="pass1" class="form-control col-sm-8 m-auto">
            <span class="help-block"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="p-1 mt-2" for="pass2">Repetir Contraseña</label>
        <div class="div-input">
            <input type="password" id="pass2" name="pass2" class="form-control col-sm-8 m-auto">
            <span class="help-block"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="p-1 mt-2" for="dni">Dni</label>
        <div class="div-input"> 
            <input type="text" id="dni" name="dni" class="form-control col-sm-8 m-auto">
            <span class="help-block"></span>
        </div>
    </div>
    <div class="form-group">
        <label class="p-1 mt-2" for="direccion">Direccion</label>
        <div class="div-input">
            <input type="text" id="direccion" name="direccion" class="form-control col-sm-8 m-auto">
            <span class="help-block"></span>
        </div>
    </div>
    <br>
    <input type="button" value="Verificar" id="verificar2" name="verificar2" class="btn btn-warning">
    <input type="submit" value="Registrar" id="registrar" name="registrar" class="btn btn-warning d-none">
</form>
</div>