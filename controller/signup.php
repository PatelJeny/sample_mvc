<?php

require("../model/user.php");

$message=null;

//step 1 - check if post method - paramters -> name,email,password
if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])){

    $signupUser=new User($_POST["name"],$_POST["email"],$_POST["password"]);
    
    $message = $signupUser->save()==true?"account created":"failed to create account";
    


}

require_once('../view/signup.php');




//create object -> save


//send the response

?>