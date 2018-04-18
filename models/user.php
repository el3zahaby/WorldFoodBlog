<?php

class User {

    // we define attributes
    //public $id;
    public $username;
    public $password;
    public $email;
    public $image;
    public $create_date;

    // public $typeid;
    //public $create_date;

    public function __construct($username, $password, $email, $image, $create_date) {
        // $this->id    = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->image = $image;
        $this->create_date = $create_date;

        //$this->typeid = $typeid;
        //$this->create_date = $create_date;
    }

    public static function userModel($username) {
        $this->username = $username;
    }

    public static function getUsername() {
        return $this->username;
    }

//
//    public static function setUsername($username) {
//        $this->username = $username;
//    }


    public static function allusers() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM username');
        // we create a list of Product objects from the database results
        foreach ($req->fetchAll() as $user) {

            $list[] = new User($user['username'], $user['password'], $user['email'], $user['image'], $user['create_date']);
        }
        return $list;
    }

    public static function add() {
$db = Db::getInstance();
//$hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$req = $db->prepare("Insert into username(username, email, password) values (:username, :email, :password)");
$req->bindParam(':username', $username);
$req->bindParam(':email', $email);
$req->bindParam(':password', $password);
// set parameters and execute
if(isset($_POST['username'])&& $_POST['username']!=""){
$filteredUsername = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);
}
if(isset($_POST['email'])&& $_POST['email']!=""){
$filteredEmail = filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS);
}
if(isset($_POST['password'])&& $_POST['password']!=""){
$filteredPassword = filter_input(INPUT_POST,'password');
}
 
$username = $filteredUsername;
$email = $filteredEmail;
$password = $filteredPassword;
$req->execute();
}


    public static function login() {


        $db = Db::getInstance();
        if (isset($_POST['submit'])) {
            $sqlquery = "SELECT username, password from username WHERE username=:username AND password= :password";
            $querystring = $db->prepare($sqlquery);
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            $querystring->bindParam(':username', $username, PDO::PARAM_INT);
            $querystring->bindParam(':password', $password, PDO::PARAM_INT);
            $querystring->execute(
                    array(
                        'username' => $_POST["username"], 'password' => $_POST["password"])
            );
//if invalid user
            $count = $querystring->rowCount();
            if ($count > 0) {


                $_SESSION["username"] = $username;

                header("location:index.php");
            } else {
                $result = '
       <div  style="margin-top: 2%;">
            <div class="col-md-6 col-md-offset-3">  
                <div class="row">
                    <div id="logo" class="text-center">
                        <h2>Whoops, you are not registered yet!</h2><p></p>
                    </div> </div> </div></div>';
                echo "<h6>$result</h6>";
            }
        }
    }

    public static function logout() {
        unset($_SESSION["username"]);
        session_destroy();
        

  
    }
    
 public static function find($id) {
        $db = Db::getInstance();
        //use intval to make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare(' SELECT user.id, post.title,post.content, post.image, post.DateAdded, cuisine.name
FROM post
INNER JOIN cuisine ON post.cuisine_id = cuisine.id
WHERE post.id=:id; ');
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
        $post = $req->fetch();
        if ($post) {
            return new Post($post['id'], $post['title'], $post['content'], $post['image'], $post['DateAdded'], $post['name']);
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
             $list [] =new Post($result['post_id'], $result['title'], '',$result['image'], '', '','','',$cuisine_id);
       
        }
         return $list;
//    $list = [];
//        $db = Db::getInstance();
//        $req = $db->query('SELECT * FROM post');
//        // we create a list of Post objects from the database results
//        foreach ($req->fetchAll() as $post) {
//            $list[] = new Post($post['id'], $post['title'], $post['content'], $post['image'], $post['DateAdded'], $post['cuisine_id']);
//        }
//        return $list;
//    }
//        


}


//update by id
    public static function update($id) {
        $db = Db::getInstance();
        $req = $db->prepare("Update user set username=:username, email=:email, image=:image  where id=:id");
        $req->bindParam(':id', $id);
        $req->bindParam(':username', $username);
        $req->bindParam(':email', $email);
        $req->bindParam(':image', $image);
// set name and price parameters and execute
        if (isset($_POST['username']) && $_POST['username'] != "") {
            $filteredUserName = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['email'])) {
            $filteredEmail = $_POST['email'];
        }
//        filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
        $username = $filteredUserName;
        $email = $filteredEmail;
        $image = Post::updateFile($username);
        $req->execute();
        if (($_POST['username'] = "") && ($_POST['email'] = "")) {
            return "null";
        }
    }



}
?>
