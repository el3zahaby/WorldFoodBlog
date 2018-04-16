<?php //
//include_once 'connection.php';
//if(!$user->is_loggedin())
//{
// $user->redirect('login.php');
//}
//$id = $_SESSION['user_session'];
//$stmt = $db->prepare("SELECT * FROM username WHERE id=:id");
//$stmt->execute(array(":id"=>$id));
//$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
<title>Welcome - <?php print($userRow['email']); ?></title>
</head>

<body>

<div class="header">
 <div class="left">
     <h1>World Food Blog</h1>
    </div>
    <div class="right">
     
    </div>
</div>
<div class="content">
<h1>Welcome : <?php print (['username']); ?><h1>
      
                <br>
                    <h3>You are an approved user and can now start uploading your own contributions to World Food Blog. Welcome to the team!</h3>
                    <br>
                        <h3> OR </h3> 
                <br>
                                    
                                          
          <h3>You can comment on other posts and once you are approved you will be able to contribute your own post to the World Food Blog. Please await an email confirmation from Admin</h3>

          

 
</div>
</body>
</html