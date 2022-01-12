<?php global $ruta ?>
<a name="" id="" class="btn btn-success" href="<?php echo $ruta?>inventory/create" role="button">Registrar prodcuctos</a>
<a name="" id="" class="btn btn-success" href="<?php echo $ruta?>sales/create" role="button">Registrar ventas</a>
<table class="table table-bordered mt-5">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre producto</th>
            <th>Referencia</th>
            <th>Precio</th>
            <th>Peso</th>
            <th>Categoría</th>
            <th>Stock</th>
            <th>Fecha de creación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($inventoriList as $inventory){ ?>
            <tr>
                <td><?php echo $inventory ->id; ?></td>
                <td><?php echo $inventory ->name; ?></td>
                <td><?php echo $inventory ->reference; ?></td>
                <td><?php echo $inventory ->price; ?></td>
                <td><?php echo $inventory ->weight; ?></td>
                <td><?php echo $inventory ->category; ?></td>
                <td><?php echo $inventory ->stock; ?></td>
                <td><?php echo $inventory ->date; ?></td>
                
                <th>
                    <div class="btn-group" role="group" aria-label="">
                        <a type="button" class="btn btn-warning" href="<?php echo $ruta ?>inventory/update/<?php echo $inventory -> id;?>">Editar</a>
                        <a type="button" class="btn btn-danger" href="<?php echo $ruta ?>inventory/delete/<?php echo $inventory -> id;?>">Eliminar</a>
                    </div>    
                </th>
            </tr>
        <?php } ?>
    </tbody>
</table>
