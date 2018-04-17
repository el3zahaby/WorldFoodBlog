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
<title>Welcome - 
    <?php // print($userRow['email']); ?>
</title>
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
Hello
 
</div>
</body>
</html