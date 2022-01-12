<?php global $ruta ?>
<a name="" id="" class="btn btn-success" href="<?php echo $ruta?>inventory/create" role="button">Registrar prodcuctos</a>
<a name="" id="" class="btn btn-success" href="<?php echo $ruta?>sales/create" role="button">Registrar ventas</a>
<table class="table table-bordered mt-5">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre producto</th>
            <th>Cantidad</th>
            <th>Fecha de compra</th>

        </tr>
    </thead>
    <tbody>
        <?php
         foreach($salesList as $sale){ 
            
        ?>
            <tr>
                <td><?php echo $sale ->id; ?></td>
                <td><?php echo $sale ->name ?></td>
                <td><?php echo $sale ->count_sale; ?></td>
                <td><?php echo $sale ->date_sale; ?></td>
                         
            </tr>
        <?php } ?>
    </tbody>
</table>
