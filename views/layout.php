<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Pangolin" >-->

  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="views/css/styles.css">


        <title>Layout</title>
    </head>
    <body>

        <nav class="navbar-custom ">

            <div class="container">
                <div class="navbar-header">
                    <div class="serif">
                        <nav>                     
                            <ul class="nav navbar-nav">
                                <li    <a <img src="views/images/Delicious.png"  width="120" height="100" alt="">     
                                    </a></li>
                                <li class="active">    <a href='/WorldFoodBlog'>Home</a></li>

                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Recipes <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href='?controller=post&action=readAllPosts'>By Cuisine</a></li>
                                        <li><a href="#">By Contributors</a></li>
                                        <li><a href="#">Most Popular</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contributors</a></li>
                                <li><a href="#">Contact us</a></li>
                                   </ul>
                        </nav>
                     
                    </div>
                </div>
                <ul class="nav navbar-nav navbar-right">

  <li> <a href='?controller=post&action=create' class="glyphicon glyphicon-edit"> Create Post </a></li>
                    <li>  <a href='?controller=user&action=register'><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>

        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="views/images/Delicious.png"  width="120" height="100"class="d-inline-block align-top" alt="">


            </a> 





            <!--    <header class="w3-container w3-gray">
            
                  <a href='/MVC_Skeleton'>Home</a>
                  <a href='?controller=product&action=readAll'>Products</a>
                  <a href='?controller=product&action=create'>Add Product</a>
                   <a href='?controller=user&action=register'>Register</a>
                        <a href='?controller=user&action=readallusers'>All users</a>
            =======
                  <a href='/WorldFoodBlog'>Home</a>
                
                       <a href='?controller=post&action=readAllPosts'>Recipes</a>
                        <a href='?controller=post&action=create'>Create Post</a>
            
                </header>-->
            <div class="w3-container w3-pink">
                <?php require_once('routes.php'); ?>
                </<div>
                    <div class="w3-container w3-gray">
                        <footer >
                            Copyright &COPY; <?= date('Y'); ?>
                        </footer>
                    </div>

                    </body>
                    </html>