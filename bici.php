<?php
if(isset($_GET['b'])){
    $bici = new Bici();
    $bici->get($_GET['b']);
?>
    
<div class="row mt-4 p-3 m-3" >
    <div class="col-4">
        <img src=" <?php echo $bici->getFoto(); ?>" id="imagenBici" alt="Bicicleta<?php echo $bici->getMarca(); ?>" class="img-fluid rounded img-thumbnail">
    </div>
    <div class="col-6">
        <h3><?php echo $bici->getMarca(), " ", $bici->getModelo(); ?> </h3>
        <span><?php echo $bici->getDescrip() ?></span>
        <h3>Precio: <?php echo $bici->getPvp() ?> €/dia</h3>
        <form action="index.php?p=reserva&b=<?php echo $bici->getIdBici(); ?>" method="post">
            <button class="btn-outline-primary bg-warning" type="submit" name="reservar">Reservar</button>
        </form>
    </div> 
</div> 
<div class="row m-2 mt-5 bg-warning mx-auto">
  <h2 class="col-12" style="text-align:center">Productos relacionados</h2>
    
        <?php
        $tipo=$bici->getTipo();
        $idBici=$bici->getIdBici();
        $biciAux= new Bici();
        $biciAux->getBiciByTipo($tipo,$idBici);
        $rows=$biciAux->getBicis();
        foreach($rows as $row){       
        ?>
        <div class="col-12 col-md-3 m-3 p-3">
            <a href="index.php?p=bici&b=<?php echo $row['idBici'] ?>">
                <h3><?php echo $row['marca']," ", $row['modelo']; ?></h3>
                <img src="<?php echo $row['foto']; ?>" alt="Bicicleta <?php echo $row['marca']; ?>" class="img-fluid rounded img-thumbnail">
            </a>
        </div>
        <?php
        }
        ?>
   
    
</div>   
    
  <?php  
}
?>