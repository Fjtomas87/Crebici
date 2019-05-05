<?php

if(isset($_SESSION['email'])){
    $user_data=array('email'=>$_SESSION['email']);
	$usuario=new Usuario();
	$usuario->get($user_data);
    
    ?>
    <div class="col mx-auto p-3 m-3 pl-5">
     
        
           <h2>Datos usuario</h2>
           
                <p class="">Nombre: <?php echo $usuario->getNombre() ?></p>
                <p class="">Apellidos: <?php echo $usuario->getApellido1()," ",$usuario->getApellido2() ?></p>
                <p class="">DNI: <?php echo $usuario->getDni() ?></p>
                <p class="">Direccion: <?php echo $usuario->getDireccion() ?></p>
                <p class="">Email: <?php echo $usuario->getEmail() ?></p>
    </div>
    <?php
    
    
    
    
}
?>



