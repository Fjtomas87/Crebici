<?php
if(isset($_POST['registrar'])){
    //falta validar
    $user_data=array('nombre'=>$_POST['nombre'],'apellido1'=>$_POST['apellido1'],'apellido2'=>$_POST['apellido2'],'email'=>$_POST['email'],'pass'=>$_POST['pass1'],'dni'=>$_POST['dni'],'direccion'=>$_POST['direccion'],'tipoUser'=>'User');
	$usuario=new Usuario();
	$usuario->set($user_data);
    header("Location: index.php");
    
}

?>
<h1>FORMULARIO DE REGISTRO</h1>
<form action="index.php?p=registro" method="POST" class="container m-1 p-1">
    <label class="p-1 mt-2" for="nombre">Nombre</label><input type="text" name="nombre" id="nombre" class="form-control col-sm-6">
    <label class="p-1 mt-2" for="apellido1">1º Apellido</label><input type="text" id="apellido1" name="apellido1" class="form-control col-sm-6"> 
    <label class="p-1 mt-2" for="apellido2">2º Apellido</label><input type="text" id="apellido2" name="apellido2" class="form-control col-sm-6"> 
    <label class="p-1 mt-2" for="email">Email</label><input type="email" id="email" name="email" class="form-control col-sm-6">
    <label class="p-1 mt-2" for="pass1">Contraseña</label><input type="password" id="pass1" name="pass1" class="form-control col-sm-6">
    <label class="p-1 mt-2" for="pass2">Repetir Contraseña</label><input type="password" id="pass2" name="pass2" class="form-control col-sm-6">
    <label class="p-1 mt-2" for="dni">Dni</label><input type="text" id="dni" name="dni" class="form-control col-sm-6"> 
    <label class="p-1 mt-2" for="direccion">Direccion</label><input type="text" id="direccion" name="direccion" class="form-control col-sm-6"><br>
    <input type="submit" value="REGISTRAR" name="registrar" class="btn btn-warning"> 
</form>