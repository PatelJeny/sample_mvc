<?php
require("../model/product.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['id'])) {

    $isAdmin = $_SESSION["is_admin"] == 0 ? false : true;

    if ($isAdmin === false) {
        header("Location:dashboard.php");
    }

    $productAdded = null;
    //data also submit
    if ($_SERVER['REQUEST_METHOD'] == 'POST' &&  isset($_POST["pro_name"]) && isset($_POST["pro_price"]) && isset($_FILES["pro_image"]) && isset($_POST["description"]))  {

        $pathToSave = "../assets/img/product_img/" . basename($_FILES["pro_image"]["name"]);
        if (move_uploaded_file($_FILES["pro_image"]["tmp_name"], $pathToSave) == TRUE) {

            $newProduct = new Product(name: $_POST["pro_name"], price: $_POST["pro_price"], img: basename($_FILES["pro_image"]["name"]), description: $_POST["description"]);

            //insert
            if ($newProduct->save() == true) {
                $productAdded = true;
            } else {
                $productAdded = false;
            }
        }
        else{
            $productAdded = false;

        }

        //get name saved fie


    }
    require_once("../view/addProduct.php");
} else {
    header("Location:dashboard.php");
}
