<?php
if(isset($_POST['login'])){
    $usuario=new Usuario();
	$usuario->getUser($_POST['email'],$_POST['pass1']);
    
    if($usuario->getEmail()!=null){
        //Si a tenido existo el INSERT creamos las sesiones segund el tipo de user 
        if($usuario->getTipoUser()=="admin"){
            $_SESSION['usuario'] = $usuario->getTipoUser();
            $_SESSION['email'] = $usuario->getEmail();
            $_SESSION['idC'] = $usuario->getIdC();
        }else{
            $_SESSION['email'] = $usuario->getEmail();
        }
        
        
        
        //cambio host
        header("Location: index.php");
    }else{
        echo "<script>";
        echo "loginFail();";
        echo "</script>";
        
        ?>
        
        <form action="index.php?p=login" method="POST" class="container">
            <h2 class="" id="msgOculto">Email o contraseña Incorrectos</h2>
            <div>
            <label class="p-1" for="email">Email</label><input type="email" id="email" name="email" class="form-control col-sm-6">
            </div>
            <label class="p-1" for="pass1">Contraseña</label><input type="password" id="pass1" name="pass1" class="form-control col-sm-6">
            <br>
            <input type="submit" value="ENTRAR" id="entrar" name="login" class="btn btn-warning"> 
    </form>
       
        <?php
        
    }
}else{
    ?>
    <form action="index.php?p=login" method="POST" class="container">
       <h2 class="d-none" id="msgOculto">hola</h2>
        <label class="p-1" for="email">Email</label><input type="email" id="email" name="email" class="form-control col-sm-6">
        <label class="p-1" for="pass1">Contraseña</label><input type="password" id="pass1" name="pass1" class="form-control col-sm-6">
        <br>
        <input type="submit" value="ENTRAR" id="entrar" name="login" class="btn btn-warning"> 
    </form>
    <?php
}

?>
