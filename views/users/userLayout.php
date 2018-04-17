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
                                <li><a href="#">Contributors</a></li>

                                <li><a href='?controller=user&action=readallusers'>All users</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
                <ul class="nav navbar-nav navbar-right">

                    <li> <a href='?controller=post&action=create' class="glyphicon glyphicon-edit"> Create Post </a></li>
                
          <li><a href='?controller=user&action=logout'><span class="glyphicon glyphicon-user"></span><?php 
          
echo  $_SESSION['username']; ?></a></li>
                  <li><a href='?controller=user&action=logout'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                   
                </ul>
            </div>
        </nav>

