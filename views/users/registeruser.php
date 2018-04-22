<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign up </title>

    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<div class="container">
     <div class="form-container">
        <form method="post">
            <h2>World Food Blog:Sign up.</h2><hr />
            <?php
            if(isset($error))
            {
               foreach($error as $error)
               {
                  ?>
                  <div class="alert alert-danger">
                      <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                  </div>
                  <?php
               }
            }
           // else if(isset($_GET['joined']))
            {
                 ?>
                
                 <?php
            }
            ?>
            <div class="form-group">

            <input type="text" class="form-control" name="username" placeholder="Enter Username" value="<?php if(isset($error)){echo $username;}?>" />
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Enter E-Mail" value="<?php if(isset($error)){echo $email;}?>" />

            </div>
            <div class="form-group">
             <input type="password" class="form-control" name="password" placeholder="Enter Password" />
            </div>
            <div class="clearfix"></div><hr />
            <div class="form-group">
             <button type="submit" class="btn btn-default">
                 <i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
                </button>
            </div>
            <br />
            
        </form>
       </div>
</div>

</body>
</html>