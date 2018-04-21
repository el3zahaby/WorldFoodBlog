<?php

require 'models/cuisine.php';
require 'models/comment.php';

class PostController {

    public function readAllPosts() {
        // we store all the posts in a variable
        $posts = Post::all();
        require_once('views/posts/readAllPosts.php');
    }

    public function read() {
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (isset($_GET['id'])) {

            // we use the given id to get the correct post

            $post = Post::find($_GET['id']);
//             $post = Post::findComment($_GET['id']);
//              $comments = Comment::allComments();
            $comments = Comment::findByPostId($_GET['id']);
//      $postsForCuisine = Post::PostsByCuisine($_GET['id']);
            require_once('views/posts/read.php');


            if (isset($_POST['submit'])) {

                Comment::addComment();
              require_once('index.php');
              
        
            }
        }
    }

    public function create() {
        // we expect a url of form ?controller=posts&action=create
        // if it's a GET request display a blank form for creating a new post
        // else it's a POST so add to the database and redirect to readAllPosts action
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            $cuisines = Cuisine::all();
            require_once('views/posts/create.php');
        } else {
            Post::add();

            $posts = Post::all(); //$posts is used within the view
            require_once('views/posts/readAllPosts.php');
        }
    }

    public function update() {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (!isset($_GET['id']))
                return call('pages', 'error');

            // we use the given id to get the correct post
            $post = Post::find($_GET['id']);

            require_once('views/posts/update.php');
        }
        else {
            $id = $_GET['id'];
            Post::update($id);

            $posts = Post::all();
            require_once('views/posts/readAllPosts.php');
        }
    }

    public function delete() {
        Post::remove($_GET['id']);

        $posts = Post::all();
        require_once('views/posts/readAllPosts.php');
    }

}

?>