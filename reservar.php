<?php
setlocale(LC_ALL,"es_ES");
$mes=date("m");
$dia=date("d");
$anyo=date("Y");
if(isset($_POST['alquiler'])){
    $alquiler_data=array('fechaIni'=>$_POST['fechaIni'],'dias'=>$_POST['dias'],'idC'=>$_SESSION['idC'],'idBici'=>$_GET['b'],'estado'=>"reservado");
    $alquiler = new Alquiler();
    $alquiler->set($alquiler_data);
    header("Location: index.php?p=mreservas");
}

if(isset($_SESSION['email'])){
    if(isset($_POST['reservar'])){
        $bici = new Bici();
        $bici->get($_GET['b']);
        ?>
        <div class="container mt-5 text-center rounded border opac">
           <h1 class="mt-5 ">Formulario de reserva</h1>
            <form action="index.php?p=reserva&b=<?php echo $_GET['b'] ?>" method="post" class="">
                <div class="form-group row">
                    <label for="fechaIni" class="p-1 mt-2 mx-auto">Fecha</label>
                    <div class="col-12 div-input">
                        <input class="form-control col-8 col-sm-4 m-auto" type="date" min="<?php echo $anyo,"-",$mes,"-",$dia; ?>" value="<?php echo $anyo,"-",$mes,"-",$dia; ?>" id="fechaIni" name="fechaIni">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="fechaIni" class="p-1 mt-2 mx-auto text-center">Duracion</label>
                    <div class="col-12 div-input">
                        <select class="col-8 form-control custom-select col-sm-4 m-auto" name="dias" id="dias">
                            <option value="1">Uno</option>
                            <option value="2">Dos</option>
                            <option value="3">Tres</option>
                            <option value="4">Cuatro</option>
                            <option value="5">Cinco</option>
                            <option value="6">Seis</option>
                            <option value="7">1 Semana</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group justify-content-center w-md-25  ">
                <input type="submit" id="alquiler" class="mt-5 btn-warning" value="Reservar" name="alquiler">
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