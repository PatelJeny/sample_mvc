<?php

require("../model/user.php");

$loginUser=null;

if(isset($_POST["email"]) && isset($_POST["password"])){

        $loginUser= new User(email:$_POST["email"],password:$_POST["password"]);

        $loginUser=$loginUser->verifyCredentials();


        if($loginUser!==false){

                echo("yes1");

                if (session_status() == PHP_SESSION_NONE) {
                        session_start();
                }
                $_SESSION['id'] = $loginUser->getId();
                $_SESSION['name'] = $loginUser->getName();
                $_SESSION['email'] = $loginUser->getEmail();
                $_SESSION['password'] = $loginUser->getPassWord();
                $_SESSION['is_admin'] = $loginUser->isAdmin();

                header("Location:dashboard.php");

        }
     
}

require_once('../view/login.php');

?>