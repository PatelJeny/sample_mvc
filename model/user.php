<?php
require '../utils/db.php';
class User{
   private $id,$name,$email,$password;

    public function __construct($name=null,$email=null,$password=null)
    {
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;
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
   
    public function save(){
        return executeQuery("INSERT INTO user (name,email,password) values ('$this->name','$this->email','$this->password')");
    }

    public function verifyCredentials(){
        $result=executeQuery("SELECT * FROM user where email='$this->email' AND password='$this->password'");
        return $result->num_rows>0?true:false;
    }
}
?>