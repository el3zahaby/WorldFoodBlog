<?php
require 'models/user.php';

class UserController {
    public function readAllUsers (){
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
require_once('index.php');
}
//$users = User::allusers(); //$products is used within the view


}




public function login() {


if($_SERVER['REQUEST_METHOD'] == 'GET'){
 
require_once('views/users/login.php');
}
else { 


User::login ();

}
}
////session_start();
//
//if ((isset($_SESSION['username'])))
//{
//require_once ('views/users/login.php');   
//}
//
// else
// {
//  return call ('pages', 'error');


}


//}