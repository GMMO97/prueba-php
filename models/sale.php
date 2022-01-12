<?php
    class Sale{

        public $id;
        public $id_product;
        public $count_sale;
        public $date_sale;
        public $name;


        public function __construct($id,$id_product,$count_sale,$date_sale,$name){
            $this->id = $id;
            $this->id_product = $id_product;
            $this->count_sale = $count_sale;
            $this->date_sale = $date_sale;
            $this->name = $name;

        }

        public static function toList(){
            $listSale = [];
            $connetion = BD::createInstance();
            $sql = $connetion->query("SELECT * FROM sales");
            
            foreach($sql->fetchAll() as $sale){
                $listSale[]= new Sale(
                    $sale["id"],
                    $sale["id_product"],
                    $sale["count_sale"],
                    $sale["date_sale"],
                    $sale["name"]
                );
            }

            return $listSale;

        }
        
        public static function create($product,$count){

            $date = date("Y-m-d"); 
            $connetion = BD::createInstance();
            $updateCountInventory = self::updateCountInventory($product,$count);
            $name_product = self::nameProduct($product);

            $cod = $updateCountInventory["cod"];
            if($cod == -1){
                echo $updateCountInventory["html"];die;
            }

            $sql = $connetion->prepare("INSERT INTO sales(id_product, count_sale, date_sale,name) VALUES (?,?,?,?)");
            $sql->execute(array($product,$count,$date,$name_product));

        }

        public static function updateCountInventory($product,$count){
            global $ruta;

            $ruta_2 = $ruta.""."sales/home";

            $connetion = BD::createInstance();

            $sql = $connetion->prepare("SELECT * FROM inventory WHERE id=?");
            $sql->execute(array($product));
            $product_list = $sql->fetchAll();

            $stock_inventory = $product_list[0]["stock"];

            if($stock_inventory == 0){

                $html = <<<HTML
                <div class="p-5 bg-light">
                    <div class="container">
                        <h1 class="display-3">Alerta!</h1>
                        <p class="lead">Actualmente no hay stock </p>
                        <hr class="my-2">
                        
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="$ruta_2" role="button">Regresar</a>
                        </p>
                    </div>
                </div>              
HTML;
               
                return array("cod"=> -1,"html"=>$html);

            }else if($stock_inventory < $count){

                $html = <<<HTML
                <div class="p-5 bg-light">
                    <div class="container">
                        <h1 class="display-3">Alerta!</h1>
                        <p class="lead">Actualmente no hay stock suficiente para la venta ingresada</p>
                        <hr class="my-2">
                        
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="$ruta_2" role="button">Regresar</a>
                        </p>
                    </div>
                </div>              
HTML;
              
                return array("cod"=> -1,"html"=>$html);

            }else{

                $count = $stock_inventory - $count;

                $sql = $connetion->prepare("UPDATE inventory SET  stock = ? WHERE id = ?");
                $sql->execute(array($count,$product,));

                return array("cod"=> 1,"html"=>"");

            }
 

        }

        public static function delete($id){

            $date = date("Y-m-d"); 
            $connetion = BD::createInstance();

            $sql = $connetion->prepare("DELETE FROM  inventory WHERE id=?");
            $sql->execute(array($id));
        }


        public static function toListId($id){

            $connetion = BD::createInstance();
            $sql = $connetion->prepare("SELECT * FROM inventory WHERE id=?");
            $sql->execute(array($id));
            $inventory = $sql->fetchAll();
            
            $listInventoryId= new Sale(
                $inventory[0]["id"],
                $inventory[0]["name"],
                $inventory[0]["reference"],
                $inventory[0]["price"],
                $inventory[0]["weight"],
                $inventory[0]["category"],
                $inventory[0]["stock"],
                $inventory[0]["date"]
            );
            
            return $listInventoryId;

        }


        public static function selectProducts(){
            $divs = "";
            $connetion = BD::createInstance();
            $sql = $connetion->query("SELECT * FROM inventory");
            foreach($sql->fetchAll() as $inventory){
                $id = $inventory["id"];
                $name = $inventory["name"];

                $divs .= <<<HTML
                  <option value="$id">$name</option>
HTML;
            }

            $html = <<<HTML
            <label for="" class="form-label">Producto</label>
              <select class="form-control" name="product" id="product" require>
                    <option value="0">Seleccione</option>
                    $divs
              </select>
HTML;

            return $html;

        }
        public static function nameProduct($id){

            $connetion = BD::createInstance();
            $sql = $connetion->prepare("SELECT * FROM inventory WHERE id= ?");
            $sql->execute(array($id));
            $sql = $sql->fetchAll();

            $name = $sql[0]["name"];
            return $name;

        }
    }

 
    

?>