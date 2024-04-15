<?php
require '../utils/db.php';
class Product{
    private $id,$name,$price,$img,$description,$isAdmin;

    public function __construct($name,$price,$img,$description,$isAdmin)
    {
        $this->name=$name;
        $this->price=$price;
        $this->img=$img;
        $this->description=$description;
        $this->isAdmin=$isAdmin;
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
    public function getisAdmin(){
        return $this->isAdmin;
    }
    public function save(){
       //$result=executeQuery("SELECT * FROM product");
       //return $result;
    }

    public static function getAllProducts(){
        $result=executeQuery("SELECT * FROM product");
        return $result;
    }
    
       
    
}
?>