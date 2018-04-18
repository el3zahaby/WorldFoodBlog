
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>

            
.navbar-custom {
    color:  white;
    background-color: #7F2989;
    padding-top: 0.10;
}
p.serif {
     font-family: Sans-Serif;
    
}

a {
    color: white;
    text-decoration: none;
}


.navbar-brand,
navbar-nav li a {
    line-height: 10em;
    height: 100em;
    padding-top: 0;
    text-align:center; 
    display: inline-block;
      margin: 1em;
      
}

.footer {
   position: absolute;

   width: 100%;
   background-color: #7F2989;
   color: white;
   text-align: center;
}
</style>


  
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
                                        <li><a href='?controller=cuisine&action=readAllCuisines'>By Cuisine</a></li>
                                        <li><a href="#">By Contributors</a></li>
                                        <li><a href="#">Most Popular</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">Contact us</a></li>

                                         <li><a href="?controller=post&action=readAllPosts">All Recipes</a></li>
                             
                               
                                <li><a href="#">Contributors</a></li>
                                <li><a href='?controller=user&action=readallusers'>All users</a></li>

                               
                            </ul>
                        </nav>

                    </div>
                </div>
                <ul class="nav navbar-nav navbar-right">

                    <?php
                    session_start();

                    if (isset($_SESSION['username'])) {
                        include "views/users/userLayout.php";
                    } else {
                        ?> 
                        <li>  <a href='?controller=user&action=register'><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href='?controller=user&action=login'><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                    <?php } ?>

                </ul>
            </div>
        </nav>


        <div class="w3-container w3-pink">
            <?php require_once('routes.php'); ?>
            </<div>
                <div class="w3-container w3-gray">
                    <div class="footer">
                        Copyright &COPY; <?= date('Y'); ?> || Follow us on our social media accounts:
                        <a class="fb-ic mr-3"><i class="fa fa-lg fa-facebook"> </i></a>
                        <!--Twitter-->
                        <a class="tw-ic mr-3"><i class="fa fa-lg fa-twitter"> </i></a>

                        <!--Instagram-->
                        <a class="ins-ic mr-3"><i class="fa fa-lg fa-instagram"> </i></a>
                        <!--Pinterest-->
                        <a class="pin-ic mr-3"><i class="fa fa-lg fa-pinterest"> </i></a>

                        <!--Youtube-->
                        <a class="yt-ic mr-3"><i class="fa fa-lg fa-youtube"> </i></a>
                   
                </div>

                </body>
                </html>

