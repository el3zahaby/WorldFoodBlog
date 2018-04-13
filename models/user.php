<?php

class User {
 // we define attributes
    //public $id;
    public $username;
    public $password;
    public $email;
   // public $typeid;
    //public $create_date;
  
    public function __construct($username, $password, $email) {
     // $this->id    = $id;
      $this->username  = $username;
      $this->password = $password;
      $this->email = $email;
      //$this->typeid = $typeid;
      //$this->create_date = $create_date;

    
    public static function allusers() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM username');
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $user) {

        $list[] = new User ($user['username'], $user['password'], $user['email']);
      }
      return $list;
    }
      
public static function add() {
$db = Db::getInstance();
$hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$req = $db->prepare("Insert into username(username, email, password) values (:username, :email, :password)");
$req->bindParam(':username', $username);
$req->bindParam(':email', $email);
$req->bindParam(':password', $hashed_password);
// set parameters and execute
if(isset($_POST['username'])&& $_POST['username']!=""){
$filteredUsername = filter_input(INPUT_POST,'username', FILTER_SANITIZE_SPECIAL_CHARS);

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
    session_start();
    if (isset($_SESSION['username']))
    {
        
     $req = $db->prepare("SELECT * FROM username WHERE username=:username OR email=:email LIMIT 1");
          $req->execute(array(':username'=>$username, ':email'=>$email));
          $userRow=$req->fetch(PDO::FETCH_ASSOC);
          if($req->rowCount() > 0)
          {
             if(password_verify($password, $userRow['password']))
             {
                $_SESSION['username'] = $userRow['id'];
                return true;
             }
             else
             {
                return false;
             }
          }$req->execute();
       }
 
       
}
}




