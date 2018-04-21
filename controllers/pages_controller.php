<?php
require_once 'models/post.php';
class PagesController {

    public function home() {
      //example data to use in the home page
      $first_name = 'Lisa';
      $last_name  = 'Simpson';
      
      $PopularPosts = Post::PopularPosts();
      $RecentPosts = Post::RecentPosts();
      require_once('views/pages/home.php');
    }

    
    public function error() {
      require_once('views/pages/error.php');
    }
 public function ContactUs() {

require_once('views/pages/Contactus.php'); 
      

    }
        public function AboutUs() {

{ require_once('views/pages/AboutUs.php'); 
      

    }   
}}