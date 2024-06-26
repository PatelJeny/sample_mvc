<?php
require '../utils/db.php';
class User {
   private $id,$name,$email,$password,$isAdmin ,$userID;

    public function __construct($id=null,$name=null,$email=null,$password=null,$isAdmin=null,$userID=null)
    {
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;
        $this->isAdmin=$isAdmin;
        $this->userID=$userID;

    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassWord(){
        return $this->password;
    }
    public function isAdmin(){
        return $this->isAdmin;
    }
   
    public function save(){
        return executeQuery("INSERT INTO user (name,email,password) values ('$this->name','$this->email','$this->password')");
    }

    public function verifyCredentials(){
        $result=executeQuery("SELECT * FROM user where email='$this->email' AND password='$this->password'");
        if($result->num_rows>0){
            $userRow=$result->fetch_assoc();
            return new User($userRow["id"],$userRow["name"],$userRow["email"],$userRow["password"],$userRow["is_admin"]);
        }
        else{
            return false;
        }
    }
    public static function checkUser(){
        global $userID;
        global $isAdmin;

        if(!isset($_COOKIE["userID"])){
            header("location:index.php");
     
         }
         else{
            $userID=$_COOKIE["userID"];
            $userResult=executeQuery("SELECT * FROM where id='$userID'");
            $userRow= $userResult->fetch_assoc();

            $isAdmin=$userRow['is_admin']=='0'?false:true;
         }
        
    

    }
}
?>