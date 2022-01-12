<?php
    include_once("controllers/Controller".ucfirst($controller).".php");
global $ruta ;


    $objectController = "Controller".ucfirst($controller);

    $controller = new $objectController();

    $controller->$action();
?>