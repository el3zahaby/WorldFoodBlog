<?php

require 'models/user.php';

class UserController {

    public function readAllUsers() {

        $users = User:: allusers();

        require_once ('views/users/readallusers.php');
    }


    public function read() {
     
      if (!isset($_GET['id']))
        return call('pages', 'error');

      try{
      // we use the given id to get the correct post
      $post = Post::find($_GET['id']);
      require_once('views/cuisine/read.php');
      }
 catch (Exception $ex){
     return call('pages','error');
 }
    }

    public function register() {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/users/registeruser.php');
        } else {

            User::add();
            require_once('index.php');
        }

}
 public function login() {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/users/login.php');
        } else {

            User::login();
            require_once('index.php');
        }


}

public function logout() {



            User::logout();
   
              header("location:index.php");


}


        }