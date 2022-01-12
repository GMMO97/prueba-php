
<!doctype html>
<html lang="en">
  <head>
    <title>Prueba|PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="<?php echo $ruta ?>/resources/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav ">
            <a class="nav-item nav-link active" href="<?php echo $ruta ?>">Sistema de inventario <span class="visually-hidden">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $ruta ?>inventory/home">Inventario</a>
            <a class="nav-item nav-link" href="<?php echo $ruta ?>sales/home">Ventas</a>
        </div>
    </nav>
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
            <?php include_once("router.php") ?>
        </div>
        
      </div>
    </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="<?php echo $ruta ?>/resources/js/sweetalert2.all.min.js" ></script>

    <script src="<?php echo $ruta ?>/resources/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="<?php echo $ruta ?>/resources/js/main.js" ></script>
  </body>
</html>

