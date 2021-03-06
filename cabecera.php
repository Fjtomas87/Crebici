<?php
ob_start();
session_start();
if(isset($_GET['d'])){
    if($_GET['d']==1){
        session_unset();
        session_destroy();
    }
}
require('clases/usuario_model.php');
require('clases/bici_model.php');
require('clases/alquiler_model.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="description" content="Crebici es la mejor (unica) tienda de alquiler de bicicletas en Crevillente donde podras alquilar las mejores bicicletas del mercado.">
    <meta name="keywords" content="alquiler bicicletas, bicicleta electrica, bicicleta montaña, bicicleta carretera, bh, kross, madison, cube, alquiler, alquilar, bicicleta, bici, alquiler bici, bici electrica, bici montaña, bici carretera">
    <!-- Bootstrap CSS -->
    <script src="bootstrap/js/jquery-3.2.1.slim.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
     <!-- JavaScript Jquery -->
    <script src="bootstrap/js/javaScript.js" ></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="estilo.css" />
    <title>Cribici</title>
  </head> 
<body class="container">
    <header class="row mb-4 pb-3">
        <nav class="col-12 navbar navbar-expand-md navsup navbar-light bg-light fixed-top rounded-bottom">
            <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="navbar-brand ml-sm-5"><img src="imagen/logo.jpg" style="width:50px"></a>
            <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="navbar-brand ">CREBICI</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu"><span class="bt-nav navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav d-flex justify-content-around">
                    <li class="nav-item"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=catalogo" class="nav-link btn">Catalogo</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle btn" data-toggle="dropdown" id="navbardropmarca">Marca</a>
                        <div class="dropdown-menu">
                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=catalogo&m=BH" class="dropdown-item btn">BH</a>
                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=catalogo&m=Madison" class="dropdown-item btn">Madison</a>
                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=catalogo&m=Cube" class="dropdown-item btn">Cube</a>
                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=catalogo&m=Kross" class="dropdown-item btn">Kross</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle btn" data-toggle="dropdown" id="navbardroptipo">Tipo</a>
                        <div class="dropdown-menu">
                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=catalogo&t=Carretera" class="dropdown-item btn">Carretera</a>
                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=catalogo&t=Montaña" class="dropdown-item btn">Montaña</a>
                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=catalogo&t=Electrica" class="dropdown-item btn">Electrica</a>
                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=catalogo&t=Plegable" class="dropdown-item btn">Plegable</a>
                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=catalogo&t=Niños" class="dropdown-item btn">Niños</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=mreservas" class="nav-link btn">Reservas</a></li>
                    <?php
                    
                    if(isset($_SESSION['email'])){
                        if(isset($_SESSION['usuario'])){
                            if($_SESSION['usuario']=="admin"){
                            ?>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle btn" data-toggle="dropdown" id="navbardrop1"><?php echo $_SESSION['usuario']; ?> </a>
                                        <div class="dropdown-menu">
                                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=cuentas" class="dropdown-item btn">Usuarios</a>
                                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=alquiler" class="dropdown-item btn">Alquileres</a>
                                            <a href="facturacion.php" class="dropdown-item btn">Facturacion</a>
                                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=user" class="dropdown-item btn">Cuenta</a>
                                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?d=1" class="dropdown-item btn">Cerrar sesion</a>
                                        </div>
                                </li>
                        
                        
                            <?php
                            }
                        }else{
                            ?>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link btn dropdown-toggle" data-toggle="dropdown" id="navbardrop1"><?php echo $_SESSION['email']; ?> </a>
                                    <div class="dropdown-menu">
                                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=user" class="dropdown-item btn">Cuenta</a>
                                        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?d=1" class="dropdown-item btn">Cerrar sesion</a>
                                    </div>
                            </li>
                        
                        
                        <?php
                    }
                    
                    }else{
                        ?>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle btn" data-toggle="dropdown" id="navbardrop2">Cuenta</a>
                                <div class="dropdown-menu btn">
                                    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=registro" class="dropdown-item btn">Registrar</a>
                                    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=login" class="dropdown-item btn">Acceder</a>
                                </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div> 
        </nav>  
    </header>
    <div class="row opac mt-4">
        <section class="p-4  mt-2 col-12 col-md-9 container justify-content-center">
           <article class="row">