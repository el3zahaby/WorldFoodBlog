<?php

class User {

    // we define attributes
    public $id;
    public $username;
    public $password;
    public $email;
    public $create_date;
    public $image;

    public function __construct($id, $username, $password, $email, $create_date, $image) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->create_date = $create_date;
        $this->image = $image;
    }

    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM username');
        // we create a list of Post objects from the database results
        foreach ($req->fetchAll() as $user) {
            $list[] = new User($user['id'], $user['username'], $user['image']);
        }
        return $list;
    }

    public static function allusers() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM username limit 6');
        // we create a list of Product objects from the database results
        foreach ($req->fetchAll() as $user) {

            $list[] = new User($user['id'], $user['username'], $user['password'], $user['email'], $user['create_date'], $user['image']);
        }
        return $list;
    }

    public static function add() {
        $db = Db::getInstance();
//$hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sqlquery = "SELECT username, password from username WHERE username=:username";
        $querystring = $db->prepare($sqlquery);
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $querystring->execute(
                array(
                    'username' => $_POST["username"])
        );

        $count = $querystring->rowCount();

        if ($count > 0) {
            echo "
             <div class='container'> <div id='logo' class='text-center'> 
                        <h4>Sorry! This username already exists</h4><p></p>
                    </div></div>";
        } else {
            $req = $db->prepare("Insert into username(username, email, password) values (:username, :email, :password)");
            $req->bindParam(':username', $username);
            $req->bindParam(':email', $email);
            $req->bindParam(':password', $password);
// set parameters and execute
            if (isset($_POST['username']) && $_POST['username'] != "") {
                $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
            }
            if (isset($_POST['email']) && $_POST['email'] != "") {
                $filteredEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
            }

            $password = $_POST['password'];
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $username = $filteredUsername;
            $email = $filteredEmail;
            $password = $hashed_password;
            $req->execute();
        }
    }

    public static function login() {
        $db = Db::getInstance();
        if (isset($_POST['submit'])) {
            $sqlquery = "SELECT username, password , id from username WHERE username=:username";
            $querystring = $db->prepare($sqlquery);
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
            $querystring->bindParam(':username', $username, PDO::PARAM_INT);
//            $querystring->bindParam(':password', $password, PDO::PARAM_INT);
            $querystring->execute(
                    array(
                        'username' => $_POST["username"])
            );

            $count = $querystring->rowCount();

            if ($count > 0) {

                $result = $querystring->fetch();



                if (password_verify($_POST["password"], $result['password'])) {

                    echo 'correct';
                    $_SESSION["username"] = $username;
                    $_SESSION["id"]=$result ['id'];
                    header("location:index.php");
                } else {
                    echo ' <div class="container"> <div id="logo" class="text-center"> 
                        <h2>invalid username or password!</h2><p></p>
                    </div></div>';
                }
            } else {
                echo '
        <div class="container"> <div id="logo" class="text-center"> 
                        <h2>Whoops, you are not registered yet!</h2><p></p>
                    </div></div>';
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
        $req = $db->prepare(' SELECT * FROM username
where id =:id;');

        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
        $result = $req->fetch();
        if ($result) {
            return new User($result['id'], $result['username'], '', '', $result['create_date'], $result['image']);
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
