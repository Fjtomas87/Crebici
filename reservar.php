<?php
setlocale(LC_ALL,"es_ES");
$mes=date("m");
$dia=date("d");
$anyo=date("Y");
if(isset($_POST['alquiler'])){
    //no es necesario validar
    
    $alquiler_data=array('fecha'=>$_POST['fechaIni'],'idC'=>$_SESSION['idC'],'idBici'=>$_GET['b'],'estado'=>"reservado");
    $alquiler = new Alquiler();
    $alquiler->set();
    
}

if(isset($_SESSION['email'])){
    if(isset($_POST['reservar'])){
        $bici = new Bici();
        $bici->get($_GET['b']);
        ?>
        <div class="container">
           <h1 class="m-sm-3 p-sm-3 text-center">Formulario de reserva</h1>
            <form action="index.php?p=reserva&b=<?php echo $_GET['b'] ?>" method="post" class="">
                <div class="form-group row">
                    <label for="fechaIni" class="col-3 col-sm-2 col-form-label">Fecha</label>
                    <div class="col-9">
                        <input class="form-control  w-md-25" type="date" min="<?php echo $anyo,"-",$mes,"-",$dia; ?>" value="<?php echo $anyo,"-",$mes,"-",$dia; ?>" id="fechaIni">
                    </div>
                </div>
                <div class=" row form-group">
                    <label for="fechaIni" class="col-3 col-sm-2 col-form-label mr-3">Duracion</label>
                    <select class="col-5 form-control custom-select ml-3 ml-sm-0" name="dias" id="dias">
                        <option value="1">Uno</option>
                        <option value="2">Dos</option>
                        <option value="3">Tres</option>
                        <option value="4">Cuatro</option>
                        <option value="5">Cinco</option>
                        <option value="6">Seis</option>
                        <option value="7">1 Semana</option>
                    </select>
                </div>
                <div class="row form-group justify-content-center w-md-25  ">
                <input type="submit" id="reservarB" class="btn-warning" value="Reservar" name="alquiler">
                </div>
            </form>
        </div>
        <?php
    }
}else{
?>
<div class="container">
    <h1 class="m-3 p-3">Registrate para acceder a nustro servicio de reserva</h1>
    <div class=" m-3 p-3 justify-content-center">
        <a href="index.php?p=registro" class="bg-warning p-2">Registrar</a>
        <a href="index.php?p=login" class="bg-warning p-2">Acceder</a>
    </div>
                       
</div>
<?php
}
?>