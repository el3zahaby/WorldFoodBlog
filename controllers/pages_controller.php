<?php

require_once 'models/post.php';

class PagesController {

    public function home() {


        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            $PopularPosts = Post::PopularPosts();
            $RecentPosts = Post::RecentPosts();
            require_once('views/pages/home.php');
        } else {
            $search = $_POST['search'];
            $posts = Post::searchPost($search);

            require_once('views/pages/searchResult.php');
        }
    }

    public function error() {
        require_once('views/pages/error.php');
    }

    public function ContactUs() {

        require_once('views/pages/Contactus.php');
    }

    public function AboutUs() { {
            require_once('views/pages/AboutUs.php');
        }
    }

}
