<?php
require '../utils/db.php';
class Product{
    private $id,$name,$price,$img,$description;

    public function __construct($id,$name,$price,$img,$description)
    {
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
        $this->img=$img;
        $this->description=$description;
        
    }
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getImg(){
        return $this->img;
    }
    public function getDescription(){
        return $this->description;
    }
    
    public function save(){
       //$result=executeQuery("SELECT * FROM product");
       //return $result;
    }

    public static function getAllProducts(){
        $result=executeQuery("SELECT * FROM product");
        return $result;
    }
    public static function getProductById($id){
        $result=executeQuery("SELECT * FROM product where id='$id'");
        $productRow=$result->fetch_assoc();
        return new Product($productRow["id"],$productRow["name"],$productRow["price"],$productRow["img"],$productRow["description"]);
    }
    
       
    
}
?>