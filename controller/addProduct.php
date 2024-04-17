<?php
require("../model/product.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['id'])) {

    $isAdmin = $_SESSION["is_admin"] == 0 ? false : true;

    if($isAdmin===false){
        header("Location:dashboard.php");
    }

    $productAdded=null;
    //data also submit
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST["pro_name"] && $_POST["pro_price"] && $_FILES["pro_image"] && $_POST["description"]) {

        $pathToSave="../assets/img/product_img/".basename($_FILES["pro_image"]["name"]);
        if(move_uploaded_file($_FILES["pro_image"]["tmp_name"], $pathToSave)==TRUE){
            $originalFileName= basename($_FILES["pro_image"]["name"]);
        }

        //save 

        //get name saved fie

        //insert
        $newProduct=new Product(name:$_POST["name"],price: $_POST["price"],img: $_FILES["img"],description:["description"]);
        if($newProduct->save()==true){
            $productAdded=true;
        }
        else{
            $productAdded=false;
        }
    }
    require_once("../view/addProduct.php");

} else {
    header("Location:dashboard.php");
}


