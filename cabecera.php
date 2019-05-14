<?php
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SEO incompleto">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="estilo.css" />
    <!-- JavaScript Jquery -->
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <!-- Add fancyBox -->
	<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <!-- Optionally add helpers - button, thumbnail and/or media -->
	<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
    <title>Cribici</title>
  </head>
<head>

</head>
 
<body class="container">
  
    
    <header class="row mt-5 pt-3">
        <nav class="col-12 navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a href="index.php" class="navbar-brand ml-sm-5"><img src="imagen/logo.jpg" style="width:50px"></a>
            <a href="index.php" class="navbar-brand ">CREBICI</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ">
                    <li class="nav-item"><a href="index.php?p=catalogo" class="nav-link">Catalogo</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Link 2</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Link 3</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Link 4</a></li>
                    <?php
                    
                    if(isset($_SESSION['email'])){
                        if(isset($_SESSION['usuario'])){
                            if($_SESSION['usuario']=="admin"){
                            ?>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop1"><?php echo $_SESSION['usuario']; ?> </a>
                                        <div class="dropdown-menu">
                                            <a href="index.php?p=cuentas" class="dropdown-item">Cuentas</a>
                                            <a href="index.php?p=user" class="dropdown-item">Alquileres</a>
                                            <a href="index.php?p=user" class="dropdown-item">Facturacion</a>
                                            <a href="index.php?d=1" class="dropdown-item">Cerrar sesion</a>
                                        </div>
                                </li>
                        
                        
                            <?php
                            }
                        }else{
                            ?>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop1"><?php echo $_SESSION['email']; ?> </a>
                                    <div class="dropdown-menu">
                                        <a href="index.php?p=user" class="dropdown-item">Cuenta</a>
                                        <a href="index.php?d=1" class="dropdown-item">Cerrar sesion</a>
                                    </div>
                            </li>
                        
                        
                        <?php
                    }
                    
                    }else{
                        ?>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop2">Cuenta</a>
                                <div class="dropdown-menu">
                                    <a href="index.php?p=registro" class="dropdown-item">Registrar</a>
                                    <a href="index.php?p=login" class="dropdown-item">Acceder</a>
                                </div>
                        </li>
                        <?php
                    }
                    ?>
                    
                </ul>
            </div> 
        </nav>  
    </header>
    <div class="row">
        <section class="p-4 col-12 col-md-10 border  container justify-content-center">
           <article class="row p-3 m-3">