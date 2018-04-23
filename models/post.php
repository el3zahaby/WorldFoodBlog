<?php

require_once('models/Exception.php');

use function models\Exception\logException;

class Post {

    // we define 3 attributes
    public $id;
    public $title;
    public $content;
    public $image;
    public $DateAdded;
    public $cuisine_id;
    public $user_id;

    public function __construct($id, $title, $content, $image, $DateAdded, $cuisine_id, $user_id) {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->DateAdded = $DateAdded;
        $this->cuisine_id = $cuisine_id;
        $this->user_id = $user_id;
    }

//    Static belongs to the general class not to instance
    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM post');
        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $post) {
            $list[] = new Post($post['id'], $post['title'], $post['content'], $post['image'], $post['DateAdded'], $post['cuisine_id'], $post['user_id']);
        }
        return $list;
    }

    public static function PopularPosts() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT comment.post_id, count(*), post.title, post.image, cuisine.name, username.username
from comment 
inner join post on post.id= comment.post_id
inner join cuisine on post.cuisine_id= cuisine.id
inner join username on post.user_id= username.id


group by comment.post_id
order by count(*) DESC limit 6


');
        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $post) {
            $list[] = new Post($post['post_id'], $post['title'], '', $post['image'], '' , $post['name'], $post['username']);
        }
        return $list;
    }
//    SELECT comment.post_id, count(*) 
//from comment 
//group by post_id
//order by count(*) DESC limit 6
//




    public static function RecentPosts() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT post.id, post.title,post.content, post.image, post.DateAdded, cuisine.name , username.username FROM post 
inner join cuisine on post.cuisine_id = cuisine.id
inner join username on post.user_id = username.id
ORDER BY post.id DESC LIMIT 6 ;');
        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $post) {
            $list[] = new Post($post['id'], $post['title'], $post['content'], $post['image'], $post['DateAdded'], $post['name'], $post['username']);
        }
        return $list;
    }

    public static function PostsByContributor($user_id) {

        $list = [];
        $db = Db::getInstance();
        //use intval to make sure $id is an integer
        $user_id = intval($user_id);
        $req = $db->prepare('SELECT  post.image as image ,post.title as title, post.id as post_id FROM `username` 
inner join post on post.user_id = username.id
where post.user_id = :user_id; ');

        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('user_id' => $user_id));
//          foreach ($req->fetchAll() as $post) {
        $results = $req->fetchAll();
        foreach ($results as $result) {
            $list [] = new Post($result['post_id'], $result['title'], '', $result['image'], '', '', '', $user_id, '');
        }
        return $list;
    }

    public static function find($id) {
        $db = Db::getInstance();
        //use intval to make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('
SELECT post.id, post.title,post.content, post.image, post.DateAdded, cuisine.name , username.username
FROM post
INNER JOIN cuisine ON post.cuisine_id = cuisine.id
inner join username on post.user_id = username.id
WHERE post.id=:id; ');

        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
        $post = $req->fetch();
        if ($post) {
            return new Post($post['id'], $post['title'], $post['content'], $post['image'], $post['DateAdded'], $post['name'], $post['username']);
        } else {
            //replace with a more meaningful exception
            //post with that id not found
            throw new Exception('A real exception should go here');
        }
    }

    public static function findComment($id) {
        $db = Db::getInstance();
        //use intval to make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('
 SELECT * FROM comment inner join post where comment.post_id = :id  ORDER BY comment.id DESC limit 6; ');

        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
        $post = $req->fetch();
        if ($post) {
            return new Post($post['id'], $post['title'], $post['content'], $post['image'], $post['DateAdded'], $post['name'], $post['comment']);
        } else {
            //replace with a more meaningful exception
            //post with that id not found
            throw new Exception('A real exception should go here');
        }
    }

    public static function PostsByCuisine($cuisine_id) {

        $list = [];
        $db = Db::getInstance();
        //use intval to make sure $id is an integer
        $cuisine_id = intval($cuisine_id);
        $req = $db->prepare('SELECT  post.image as image ,post.title as title, post.id as post_id FROM `cuisine` 
inner join post on post.cuisine_id = cuisine.id
where post.cuisine_id =:cuisine_id;');

        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('cuisine_id' => $cuisine_id));
//          foreach ($req->fetchAll() as $post) {
        $results = $req->fetchAll();
        foreach ($results as $result) {
            $list [] = new Post($result['post_id'], $result['title'], '', $result['image'], '', '', '', '', $cuisine_id);
        }
        return $list;
    }

//update by id
    public static function update($id) {
        $db = Db::getInstance();
        $req = $db->prepare("Update post set title=:title, content=:content, image=:image  where id=:id");
        $req->bindParam(':id', $id);
        $req->bindParam(':title', $title);
        $req->bindParam(':content', $content);
        $req->bindParam(':image', $image);
// set name and price parameters and execute
        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['content'])) {
            $filteredContent = $_POST['content'];
        }
//        filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        $random = uniqid('image');

        $title = $filteredTitle;
        $content = $filteredContent;
        $image = Post::updateFile($random);
        $req->execute();
        if (($_POST['title'] = "") && ($_POST['content'] = "")) {
            return "null";
        }
    }

    public static function add() {
        $db = Db::getInstance();
        $req = $db->prepare("Insert into post(title, content, image,  DateAdded, cuisine_id, user_id) values  (:title, :content, :image, :DateAdded, :cuisine_id ,:user_id)");
        $req->bindParam(':title', $title);
        $req->bindParam(':content', $content);
        $req->bindParam(':image', $image);
        $req->bindParam(':cuisine_id', $cuisine_id);
        $req->bindParam(':DateAdded', $DateAdded);
        $req->bindParam(':user_id', $user_id);


// set parameters and execute
        if (isset($_POST['title']) && $_POST['title'] != "") {
            $filteredTitle = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['content']) && $_POST['content'] != "") {
            $filteredContent = $_POST['content'];
        }
        $random = uniqid('image');

//        filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        $title = $filteredTitle;
        $content = $filteredContent;
        $image = Post::uploadFile($random);
        $DateAdded = Post::AddDate();
        $cuisine_id = $_POST['cuisine_id'];
        $user_id = $_POST['user_id'];
        $req->execute();
//upload post image
    }

    public static function AddDate() {

        return date("Y/m/d");
    }

    const AllowedTypes = ['image/jpeg', 'image/jpg'];
    const InputKey = 'image';

//die() function calls replaced with trigger_error() calls
//replace with structured exception handling
    public static function uploadFile(string $imageFileName) {
        if (empty($_FILES[self::InputKey])) {
            //die("File Missing!");
            trigger_error("Please upload an image for this post");
        }
        if (empty($_FILES[self::InputKey])) {
            //die("File Missing!");
            trigger_error("Please upload an image for this post");
        }
        if ($_FILES[self::InputKey]['error'] > 0) {
            trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
        }
        if (!in_array($_FILES[self::InputKey]['type'], self::AllowedTypes)) {
            trigger_error("This File Type Not Allowed: " . $_FILES[self::InputKey]['type']);
        }
        $tempFile = $_FILES[self::InputKey]['tmp_name'];
        $path = "/Applications/XAMPP/xamppfiles/htdocs/WorldFoodBlog/uploads/";
        $destinationFile = $path . $imageFileName . '.jpeg';
        $imagePath = "uploads/" . $imageFileName . '.jpeg';
        if (!move_uploaded_file($tempFile, $destinationFile)) {
            trigger_error("Handle Error");
        }
        //Clean up the temp file
        if (file_exists($tempFile)) {
            unlink($tempFile);
        }
        return $imagePath;
    }

    const AllowedTypess = ['image/jpeg', 'image/jpg', ''];
    const InputKeys = 'image';

    public static function updateFile(string $imageFileName) {
        if ($_FILES[self::InputKeys] == "") {

            return $imagePath;
        }

        if (empty($_FILES[self::InputKeys])) {
            //die("File Missing!");
            trigger_error("Please upload an image for this post");
        }
//        if ($_FILES[self::InputKeys]['error'] > 0) {
//            trigger_error("Handle the error! " . $_FILES[InputKey]['error']);
//        }
        if (!in_array($_FILES[self::InputKeys]['type'], self::AllowedTypess)) {
            trigger_error("This File Type Not Allowed: " . $_FILES[self::InputKeys]['type']);
        }
        $tempFile = $_FILES[self::InputKeys]['tmp_name'];
        $path = "/Applications/XAMPP/xamppfiles/htdocs/WorldFoodBlog/uploads/";
        $destinationFile = $path . $imageFileName . '.jpeg';
        $imagePath = "uploads/" . $imageFileName . '.jpeg';
        if (!move_uploaded_file($tempFile, $destinationFile)) {
//            trigger_error("Handle Error");
            return $imagePath;
        }
        //Clean up the temp file
        if (file_exists($tempFile)) {
            unlink($tempFile);
        }
        return $imagePath;
    }

    public static function remove($id) {


        try {

            $db = Db::getInstance();
            //make sure $id is an integer
            $id = intval($id);
            $req = $db->prepare('delete FROM post WHERE id = :id');
            // the query was prepared, now replace :id with the actual $id value
            $req->execute(array('id' => $id));
        } catch (Exception $e) {

            call('pages', 'error');
            logException($e);
            die("");
        }

        $db = Db::getInstance();
        //make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('delete FROM post WHERE id = :id');
        // the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
    }

    public static function searchPost() {

        $list = [];
        $search = $_POST['search'];
        $db = Db::getInstance();

        $req = $db->prepare("SELECT * FROM post WHERE title LIKE '%$search%';");
        $req->execute();

        $rows = $req->rowCount();

        if ($rows > 0) {
            $results = $req->fetchAll();
            foreach ($results as $result) {
                $list [] = new Post($result['id'], $result['title'], '', $result['image'], '', '', '', '', $result['cuisine_id']);
            }
            return $list;
        } else {
            echo "  <div class='container'> <div id='logo' class='text-cente'> 
                        <h2>0 results found!</h2><p></p>
                    </div></div>'" . " <div class='container'> <h4> Continue searching</h4>

        <form class='searchbar'method='POST'>
            <input type='text' placeholder='Search..'required name='search'>
            <button type='submit'> <i class='fa fa-search'></i></button>
        </form> </div>";
            exit();
        }
    }

}
