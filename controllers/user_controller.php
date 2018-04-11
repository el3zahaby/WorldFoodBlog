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
require_once('views/users/signinuser.php');
}

}



 public function login() {
// we expect a url of form ?controller=products&action=create
// if it's a GET request display a blank form for creating a new product
// else it's a POST so add to the database and redirect to readAll action
if($_SERVER['REQUEST_METHOD'] == 'GET'){
require_once('views/users/signinuser.php');
}
else { 
User::login();


}
 }
 }






    
    ?>