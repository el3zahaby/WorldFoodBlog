<?php

Class Comment {

    // we define 3 attributes
    public $id;
    public $name;
    public $email;
    public $comment;
    public $post_id;
    public $date_posted;

    public function __construct($id, $name, $email, $comment, $post_id, $date_posted) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->comment = $comment;
        $this->post_id = $post_id;
        $this->date_posted = $date_posted;
    }

    public static function addComment() {
        $db = Db::getInstance();
        $req = $db->prepare("Insert into comment(name, email, comment, post_id) values (:name, :email, :comment, :post_id)");
        $req->bindParam(':name', $name);
        $req->bindParam(':email', $email);
        $req->bindParam(':comment', $comment);
        $req->bindParam(':post_id', $post_id);



// set parameters and execute
        if (isset($_POST['name']) && $_POST['name'] != "") {
            $filteredName = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['email']) && $_POST['email'] != "") {
            $filteredEmail = $_POST['email'];
        }
        if (isset($_POST['comment']) && $_POST['comment'] != "") {
            $filteredComment = $_POST['comment'];
        }
        if (isset($_POST['post_id']) && $_POST['post_id'] != "") {
            $filteredPostID = $_POST['post_id'];
        }


//        filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        $name = $filteredName;
        $email = $filteredEmail;
        $comment = $filteredComment;
        $post_id = $filteredPostID;
        $req->execute();
//upload post image
    }
//
//    public static function allComments() {
//        $list = [];
//        $db = Db::getInstance();
//        $req = $db->query('SELECT * FROM comment inner join post where comment.post_id = post.id  ORDER BY comment.id DESC limit 6;');
//        // we create a list of Post objects from the database results
//        foreach ($req->fetchAll() as $comment) {
//            $list[] = new Comment($comment['id'], $comment['name'], $comment['email'], $comment['comment'], $comment['post_id'], $comment['date_posted']);
//        }
//        return $list;
//    }
    
  public static function findByPostId($post_id) {
       $list = [];
        $db = Db::getInstance();
        //use intval to make sure $id is an integer
        $post_id = intval($post_id);
        $req = $db->prepare('select * from comment where post_id = :post_id; ');
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('post_id' => $post_id));
      foreach ($req->fetchAll() as $comment) {
          
             $list[]= new  Comment($comment['id'], $comment['name'], $comment['email'], $comment['comment'], $comment['post_id'], $comment['date_posted']);
      } return $list ;  
    }
}
