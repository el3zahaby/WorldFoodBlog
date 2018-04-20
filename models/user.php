<?php

class User {

    // we define attributes
    public $id;
    public $username;
    public $password;
    public $email;
    public $create_date;
    public $image;
    

    // public $typeid;
    //public $create_date;

    public function __construct($id, $username, $password, $email,  $create_date, $image ) {
        $this->id    = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->create_date = $create_date;
        $this->image = $image;

        //$this->typeid = $typeid;
        //$this->create_date = $create_date;
    }

   public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM usermame');
        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $user) {
            $list[] = new User($user['id'], $user['username'], $user[''], $user[''], $user['create_date'], $user['image']);
        }
        return $list;
    }



    public static function allusers() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM username');
        // we create a list of Product objects from the database results
        foreach ($req->fetchAll() as $user) {

            $list[] = new User($user['id'], $user['username'], $user['password'], $user['email'], $user['create_date'], $user['image'] );
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
        $req = $db->prepare(' SELECT * FROM post
INNER JOIN username ON post.user_id = username.id
WHERE post.user_id = : username.id');
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
        $user = $req->fetch();
        if ($user) {
            return new User($user['id'], $user['username'],'','', $user['create_date'], $user['image'],$user['title']);
        } else {
            //replace with a more meaningful exception
            //post with that id not found
            throw new Exception('A real exception should go here');
        }
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
