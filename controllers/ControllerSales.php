<?php

    include_once("models/sale.php");
    include_once("connection/connection.php");


    class ControllerSales{

        public function home(){

            $salesList = sale::toList();
            include_once("views/sales/home.php");
        }

        public function create(){
            global $ruta;

            if($_POST){
                $product = $_POST["product"];
                $count = $_POST["count"];
                Sale::create($product,$count);
                $ruta = $ruta.""."sales/home";
                header("Location: $ruta");
            }

            include_once("views/sales/create.php");
        }

        public function update(){
            global $ruta;

            $id = $_GET["id"];
            $product =Sale::toListId($id);

            if($_POST){
                $id = $_POST["id"];
                $name = $_POST["name"];
                $reference = $_POST["reference"];
                $price = $_POST["price"];
                $weight = $_POST["weight"];
                $category = $_POST["category"];
                $stock = $_POST["stock"];
                
                Sale::update($id,$name,$reference,$price,$weight,$category,$stock);
                $ruta = $ruta.""."sales/home";
                header("Location: $ruta");
            }

            include_once("views/sales/update.php");
        }

        public function delete(){
            global $ruta;

            $id = $_GET["id"];
            Sale::delete($id);
            $ruta = $ruta.""."sales/home";

            header("Location: $ruta");
        }
    }

?>