<?php

require 'models/user.php';
require 'models/post.php';

class UserController {

    public function readAllUsers() {

        $users = User:: allusers();

        require_once ('views/users/readallusers.php');
    }

    public function read() {
       
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      try{
      // we use the given id to get the correct post
      $user = User::find($_GET['id']);
      $postsForContributor = Post::PostsByContributor($_GET['id']);
      require_once('views/users/read.php');
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
   

    
 public function displayallusers() {
      // we store all the posts in a variable
      $users = User::allusers();
      require_once('views/users/displayallusers.php');
    }

    

    public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
          if (!isset($_GET['id']))
        return call('pages', 'error');

        // we use the given id to get the correct post
        $users = User::find($_GET['id']);
      
        require_once('views/users/update.php');
        }
      else
          { 
            $id = $_GET['id'];
            Post::update($id);
                        
            $User = User::all();
            require_once('views/users/readallusers.php');
      }
      
    }
 
 
public function userAccount(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
             $user = User::find($_SESSION['id']);
            require_once('views/users/userAccount.php');
        }
        else {
           
            User::addImage();

            require_once('index.php');
        }
}


}


