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

    }
    


    

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



      public function login(){
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
                        header("location:index.php");
                    } else {
                        $result = '
       <div  style="margin-top: 2%;">
            <div class="col-md-6 col-md-offset-3">  
                <div class="row">
                    <div id="logo" class="text-center">
                        <h2>Sorry! you are not registered!</h2><p></p>
                    </div> </div> </div></div>';
                        echo "<h6>$result</h6>";
                    }
       }
    }
}     
           
           
         
//   public function is_loggedin()
//   {
//      if(isset($_SESSION['username']))
//      {
//         return true;
//      }
//   }
// 
//  
// 
//   public function logout()
//   {
//        session_destroy();
//        unset($_SESSION['username']);
//        return true;
//   }