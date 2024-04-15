<?php
require '../model/product.php';

$result = Product::getAllProducts();

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_SESSION['id']) ){
   
    $isAdmin = $_SESSION["is_admin"]==0?false:true;
   
    require_once('../view/dashboard.php');

}
else{
    header("Location:login.php");
}
  
