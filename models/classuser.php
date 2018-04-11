<?php
class User {

 // we define attributes
    public $id;
    public $username;
    public $password;
    public $email;
    public $typeid;
    public $create_date;
  

    public function __construct($id, $username, $password, $email, $typeid,$create_date ) {
      $this->id    = $id;
      $this->name  = $username;
      $this->password = $password;
      $this->email = $email;
      $this->typeid = $typeid;
      $this->create_date = $create_date;
    }
    
    public static function allusers() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM username');
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $user) {
        $list[] = new User ($user['id'], $user['username'], $user['typeid']);
      }
      return $list;
    }



public static function add() {
$db = Db::getInstance();
$req = $db->prepare("Insert into username(username, email,password) values (:username, :email, :password)");

$req->bindParam(':username', $username);
$req->bindParam(':username', $email);
$req->bindParam(':username', $passpword);



// set parameters and execute
if(isset($_POST['username'])&& $_POST['username']!=""){
$filteredUsername = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);

}
if(isset($_POST['email'])&& $_POST['email']!=""){
$filteredEmail = filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS);
}

if(isset($_POST['password'])&& $_POST['password']!=""){
$filteredPassword = filter_input(INPUT_POST,'password', FILTER_SANITIZE_SPECIAL_CHARS);

}


$username = $filteredUsername;
$email = $filteredEmail;
$password = $filteredPassword;

$req->execute();
}
}
?>
