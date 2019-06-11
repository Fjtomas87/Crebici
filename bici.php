<?php
if(isset($_GET['b'])){
    $bici = new Bici();
    $bici->get($_GET['b']);
    $descrip = $bici->getDescrip();
    $desc = explode("-", $descrip);
?>
   <div class="mt-3"> 
   <h1 class="text-center mb-4" >Alquiler</h1>
<div class="row m-1 p-2 opac rounded text-center" >
    <div class="col-11 col-sm-9 col-md-5 mx-auto">
        <img src=" <?php echo $bici->getFoto(); ?>" id="imagenBici" alt="Bicicleta<?php echo $bici->getMarca(); ?>" class="img-fluid rounded mx-auto mt-3">
        <h3 class="mt-3">Precio: <?php echo $bici->getPvp() ?> €/dia</h3>
    </div>
    <div class="col-10 col-md-8 mt-3 col-lg-6 mx-auto">
        <h3><?php echo $bici->getMarca(), " ", $bici->getModelo(); ?> </h3>
        
            <div class="container rounded ">
            <h3 class="mt-3">Descripción</h3>
            <ul class="mx-auto">
            <?php
            
            for($i =0; $i< count($desc);$i++){
                
                echo "<li class='row'>";
                echo "<span class='col text-capitalize text-sm-justify'>".$desc[$i]."</span>";
                echo "</li>";
            }

            ?>
            </ul>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>?p=reserva&b=<?php echo $bici->getIdBici(); ?>" method="post">
            <button class="btn-outline-primary bg-warning my-4" type="submit" name="reservar">Reservar</button>
        </form>
    </div> 
</div> 
<div class="row mt-3 p-3 orange  mx-auto rounded">
  <h2 class="col-12 text-capitalize" style="text-align:center">Productos relacionados / <?php echo($bici->getTipo()); ?></h2>
    
        <?php
        $tipo=$bici->getTipo();
        $idBici=$bici->getIdBici();
        $biciAux= new Bici();
        $biciAux->getBiciByTipo($tipo,$idBici);
        $rows=$biciAux->getBicis();
        foreach($rows as $row){       
        ?>
        <div class="col-12 col-md-3 m-3 p-3 mx-auto opac rounded border">
            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?p=bici&b=<?php echo $row['idBici'] ?>">
                <h3><?php echo $row['marca']," ", $row['modelo']; ?></h3>
                <img src="<?php echo $row['foto']; ?>" alt="Bicicleta <?php echo $row['marca']; ?>" class="img-fluid opac-0 rounded img-thumbnail">
            </a>
        </div>
        <?php
        }
        ?>
   
    
</div> 
   </div>  
    
  <?php  
}
?>