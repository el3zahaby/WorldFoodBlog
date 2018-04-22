<?php
if(isset($_POST['submit']))
{
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
  
 if($user->login($username,$email,$password))
 {
  $user->redirect('index.php');
 }
 else
 {
  $error = "Wrong Details !";
}}
 ?>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login : WorldFoodBlog</title>

</head>

<body>
    <style>
        .btn{
         display: flex;
  align-items: center;
  justify-content: center;
}
    </style>

    <div class="container">
     <div class="form-container">
        <form method="post">
            <h2>World Food Blog: Sign in.</h2><hr />
            <?php
            if(isset($error))
            {
                  ?>
                  <div class="alert alert-danger">
                      <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?> !
                  </div>
                  <?php
            }
            ?>
            <div class="form-group">
             <input type="text" class="form-control" name="username" placeholder="Username" required />
            </div>
            <div class="form-group">
             <input type="password" class="form-control" name="password" placeholder="Your Password" required />
            </div>
            <div class="clearfix"></div><hr />
        
            <div class="form-group">
             <button type="submit" name="submit" class="btn btn-default">
                 <i class="glyphicon glyphicon-log-in"></i>&nbsp;SIGN IN
                </button>
            </div>
            <br/>
        
        </form>
       </div>
</div>

</body>
</html>