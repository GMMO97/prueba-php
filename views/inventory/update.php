<?php global $ruta ?>
<div class="card">
    <div class="card-header">
        Actualizar productos
    </div>
    <div class="card-body">
        <form action="" method="post" onsubmit="return validateForm()">
            <div class="mb-3">
              <input type="hidden"
                class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="" value=" <?php echo $product->id; ?>" onkeypress="return soloTexto(event);" required>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Nombre:</label>
              <input type="text"
                class="form-control" autocomplete="off" name="name" id="name" aria-describedby="helpId" placeholder="" value=" <?php echo $product->name; ?>" onkeypress="return soloTexto(event);" required >
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Referencia:</label>
              <input type="text"
                class="form-control" autocomplete="off" name="reference" id="reference" aria-describedby="helpId" placeholder="" value=" <?php echo $product->reference; ?>" onkeypress="return soloTexto(event);" required>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Precio:</label>
              <input type="text"
                class="form-control" autocomplete="off" name="price" id="price" aria-describedby="helpId" placeholder="" value=" <?php echo $product->price; ?>" onkeypress="return soloNumero(event);" required>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Peso:</label>
              <input type="text"
                class="form-control" autocomplete="off" name="weight" id="weight" aria-describedby="helpId" placeholder="" value=" <?php echo $product->weight; ?>" onkeypress="return soloNumero(event);" required>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Categoria:</label>
              <input type="text"
                class="form-control" autocomplete="off" name="category" id="category" aria-describedby="helpId" placeholder="" value=" <?php echo $product->category; ?>" onkeypress="return soloTexto(event);" required>
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Stock</label>
              <input type="text"
                class="form-control" autocomplete="off" name="stock" id="stock" aria-describedby="helpId" placeholder="" value=" <?php echo $product->stock; ?>" onkeypress="return soloTexto(event);" required>
            </div>

            <input name="actulizar" id="actulizar" class="btn btn-success text-center" type="submit" value="Actualizar producto">
            <a  class="btn btn-warning text-center" href="<?php echo $ruta ?>/inventory/home">Volver</a>
        </form>
    </div>
    
</div>