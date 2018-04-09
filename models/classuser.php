<?php
class USER {

 // we define 4 attributes
    public $id;
    public $uname;
    public $upass;
    public $umail;
  

    public function __construct($id, $uname, $upass, $umail, $typeid,$create_date ) {
      $this->id    = $id;
      $this->name  = $uname;
      $this->password = $upass;
      $this->email = $umail;
      $this->typeid = $typeid;
      $this->create_date = $create_date;
    }
    
    public static function allusers() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM username');
      // we create a list of Product objects from the database results
      foreach($req->fetchAll() as $user) {
        $list[] = new User ($user['id'], $username['username'], $typeid['typeid']);
      }
      return $list;
    }


    public function register($uname,$umail,$upass)
    {
       try
       {
           $new_password = password_hash($upass, PASSWORD_DEFAULT);
   
           $stmt = $this->db->prepare("INSERT INTO username(username,email,password) 
                                                       VALUES(:uname, :umail, :upass)");
              
           $stmt->bindparam(":uname", $uname);
           $stmt->bindparam(":umail", $umail);
           $stmt->bindparam(":upass", $new_password);            
           $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
 
    public function login($uname,$umail,$upass)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM username WHERE username=:uname OR email=:umail LIMIT 1");
          $stmt->execute(array(':uname'=>$uname, ':umail'=>$umail));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($upass, $userRow['password']))
             {
                $_SESSION['user_session'] = $userRow['id'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }
 
   public function is_loggedin()
   {
      if(isset($_SESSION['user_session']))
      {
         return true;
      }
   }
 
   public function redirect($url)
   {
       header("Location: $url");
   }
 
   public function logout()
   {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
   }
}
?>