<?php

    include_once("models/inventory.php");
    include_once("connection/connection.php");


    class ControllerInventory{

        public function home(){

            $inventoriList = Inventory::toList();
            include_once("views/inventory/home.php");
        }

        public function create(){
            global $ruta;

            if($_POST){
                $name = $_POST["name"];
                $reference = $_POST["reference"];
                $price = $_POST["price"];
                $weight = $_POST["weight"];
                $category = $_POST["category"];
                $stock = $_POST["stock"];
                Inventory::create($name,$reference,$price,$weight,$category,$stock);
                $ruta = $ruta.""."inventory/home";
                header("Location: $ruta");
            }

            include_once("views/inventory/create.php");
        }

        public function update(){
            global $ruta;

            $id = $_GET["id"];
            $product =Inventory::toListId($id);

            if($_POST){
                $id = $_POST["id"];
                $name = $_POST["name"];
                $reference = $_POST["reference"];
                $price = $_POST["price"];
                $weight = $_POST["weight"];
                $category = $_POST["category"];
                $stock = $_POST["stock"];
                
                Inventory::update($id,$name,$reference,$price,$weight,$category,$stock);
                $ruta = $ruta.""."inventory/home";
                header("Location: $ruta");
            }

            include_once("views/inventory/update.php");
        }

        public function delete(){
            global $ruta;

            $id = $_GET["id"];
            Inventory::delete($id);
            $ruta = $ruta.""."inventory/home";

            header("Location: $ruta");
        }
    }

?>