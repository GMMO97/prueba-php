<?php
    class Inventory{

        public $id;
        public $name;
        public $reference;
        public $price;
        public $weight;
        public $category;
        public $stock;
        public $date;

        public function __construct($id,$name,$reference,$price,$weight,$category,$stock,$date){
            $this->id = $id;
            $this->name = $name;
            $this->reference = $reference;
            $this->price = $price;
            $this->weight = $weight;
            $this->category = $category;
            $this->stock = $stock;
            $this->date = $date;
        }

        public static function toList(){
            $listInventory = [];
            $connetion = BD::createInstance();
            $sql = $connetion->query("SELECT * FROM inventory");
            
            foreach($sql->fetchAll() as $inventory){
                $listInventory[]= new Inventory(
                    $inventory["id"],
                    $inventory["name"],
                    $inventory["reference"],
                    $inventory["price"],
                    $inventory["weight"],
                    $inventory["category"],
                    $inventory["stock"],
                    $inventory["date"]
                );
            }

            return $listInventory;

        }
        
        public static function create($name,$reference,$price,$weight,$category,$stock){

            $date = date("Y-m-d"); 
            $connetion = BD::createInstance();

            $sql = $connetion->prepare("INSERT INTO inventory(name, reference, price, weight, category, stock, date) VALUES (?,?,?,?,?,?,?)");
            $sql->execute(array($name,$reference,$price,$weight,$category,$stock,$date));


        }

        public static function update($id,$name,$reference,$price,$weight,$category,$stock){
            $date = date("Y-m-d"); 
            $connetion = BD::createInstance();

            $sql = $connetion->prepare("UPDATE inventory SET name = ?, reference = ?, price = ?, weight = ?, category = ?, stock = ?, date = ? WHERE id = ?");
            $sql->execute(array($name,$reference,$price,$weight,$category,$stock,$date,$id));

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
            
            $listInventoryId= new Inventory(
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
    }

?>