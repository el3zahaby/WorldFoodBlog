
<?php
Class CuisineController {
    public function readAllCuisines() {
      // we store all the posts in a variable
      $cuisine = Cuisine::all();
      require_once('views/cuisines/readAllCuisines.php');
    }

    public function read() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      try{
      // we use the given id to get the correct post
      $post = Post::find($_GET['id']);
      require_once('views/cuisines/read.php');
      }
 catch (Exception $ex){
     return call('pages','error');
    }}
        public function delete() {
            Cuisine::remove($_GET['id']);
            
            $cuisine = Cuisine::all();
            require_once('views/posts/readAllPosts.php');
      }
      
 }