<?php
    class BD{
         private static $instance = null;
         
         public static function createInstance(){

            if(!isset(self::$instance)){
                $optionsPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

                self::$instance = new PDO('mysql:host=localhost;dbname=prueba-php','root','',$optionsPDO);
                // echo "conexión correcta...";
            }

            return self::$instance;
         }
    }
?>