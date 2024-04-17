<?php
require ("../model/product.php");


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if($_GET["id"]){
    $product=Product::getProductById($_GET["id"]);
    
    require ("../view/view_product.php");

}
else{
    header("location:dashboard.php");
}

?>