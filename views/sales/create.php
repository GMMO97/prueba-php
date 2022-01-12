<?php 
  global $ruta ;
  include_once("models/sale.php");

  $selectProducts = Sale::selectProducts();

?>

<div class="card">
    <div class="card-header">
        Agregar venta
    </div>
    <div class="card-body">
        <form action="" method="post" onsubmit="return validateForm2()">
          
            <div class="mb-3">
              <?php echo $selectProducts; ?>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Cantidad:</label>
              <input type="text"
                class="form-control" autocomplete="off" name="count" id="count" aria-describedby="helpId" onkeypress="return soloNumero(event);" required>
            </div>
            
            <input name="registrado" id="registrado" class="btn btn-success text-center" type="submit" value="Registrar venta">
            <a  class="btn btn-warning text-center" href="<?php echo $ruta ?>/sales/home">Volver</a>

        </form>
    </div>
    
</div>