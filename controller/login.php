<?php

require("../model/user.php");

$isAuthorized=null;

if(isset($_POST["email"]) && isset($_POST["password"])){

        $loginUser= new User(email:$_POST["email"],password:$_POST["password"]);

        $isAuthorized=$loginUser->verifyCredentials();
}

require_once('../view/login.php');

?>