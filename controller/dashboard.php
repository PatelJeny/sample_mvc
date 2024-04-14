<?php
require '../model/product.php';

$result = Product::getAllProducts();

$isAdmin=false;

require_once('../view/dashboard.php');
