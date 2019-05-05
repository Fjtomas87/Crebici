<?php
if(isset($_GET['b'])){
    $bici = new Bici();
    $bici->get($_GET['b']);
?>
    
<div class="row mt-4" >
    <div class="col-4">
        <img src="<?php echo $bici->getFoto(); ?>" alt="Bicicleta Madison" class="img-fluid rounded img-thumbnail">
    </div>
    <div class="col-8">
        <h3>Bicicleta <?php echo $bici->getMarca(), " ", $bici->getModelo(); ?> </h3>
        <span><?php echo $bici->getDescrip() ?></span>
        <h3>Precio: <?php echo $bici->getPvp() ?> €/dia</h3>
        <button class="btn-outline-primary bg-warning" type="button">Reservar</button>
    </div> 
</div> 
<div class="row m-2 mt-5">
  <h2>Productos relacionados</h2>
   <div>
       
       VAS POR AKI
   </div>
    
</div>   
    
  <?php  
}
?>