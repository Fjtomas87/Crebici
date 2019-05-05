<?php
if(isset($_POST['login'])){
    
    $user_data=array('email'=>$_POST['email'],'pass'=>$_POST['pass1']);
    $usuario=new Usuario();
	$usuario->get($user_data);
    
    if(isset($usuario->email)){
        $_SESSION['usuario'] = $usuario->getTipoUser();
        $_SESSION['email'] = $usuario->getEmail();
        
        
        //cambio host
         header("Location: index.php");
    }else{
    ?>
    <form action="index.php?p=login" method="POST" class="container">
        <label class="p-1" for="email">Email</label><input type="email" id="email" name="email" class="form-control col-sm-6">
        <label class="p-1" for="pass1">Contraseña</label><input type="password" id="pass1" name="pass1" class="form-control col-sm-6">
        <br>
        <input type="submit" value="ENTRAR" name="login" class="btn btn-warning"> 
    </form>
    <?php    
    }
}else{
    ?>
    <form action="index.php?p=login" method="POST" class="container">
        <label class="p-1" for="email">Email</label><input type="email" id="email" name="email" class="form-control col-sm-6">
        <label class="p-1" for="pass1">Contraseña</label><input type="password" id="pass1" name="pass1" class="form-control col-sm-6">
        <br>
        <input type="submit" value="ENTRAR" name="login" class="btn btn-warning"> 
    </form>
    <?php
}

?>
