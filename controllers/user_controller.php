<?php

class UserController {
    public function readAll (){
        //we store all the users in a variable
        $users = User:: allusers();
        require_once ('views/users/readallusers.php');
        
    }


public function register() {
// we expect a url of form ?controller=products&action=create
// if it's a GET request display a blank form for creating a new product
// else it's a POST so add to the database and redirect to readAll action
if($_SERVER['REQUEST_METHOD'] == 'GET'){
require_once('views/users/registeruser.php');
}
else { 
User::add();

$users = User::allusers(); //$products is used within the view
require_once('views/users/login.php');
}

}




public function login() {



session_start();

if($user->is_loggedin()!="")
{
 $user->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
  
 if($user->login($username,$email,$password))
 {
  $user->redirect('index.php');
 }
 else
 {
  $error = "Wrong Details !";

}
}
}}
require_once('views/users/login.php');
