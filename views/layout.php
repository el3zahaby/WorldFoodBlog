

<!DOCTYPE html>
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Pangolin" >
<link rel="stylesheet" href="views/css/styles.css">

<title>Layout</title>
  </head>
  <body>
    <header class="w3-container w3-gray">
<a href='/WorldFoodBlog'>Home</a>
      
           <a href='?controller=post&action=readAllPosts'>Recipes</a>
            <a href='?controller=post&action=create'>Create Post</a>
    
       <a href='?controller=user&action=register'>Register</a>

       <a href='?controller=user&action=login'>LOG IN</a>
      

            <a href='?controller=user&action=readallusers'>All users</a>

      
    


    </header>
<div class="w3-container w3-pink">
    <?php require_once('routes.php');
  
    ?>
</<div>
<div class="w3-container w3-gray">
    <footer >
        Copyright &COPY; <?= date('Y'); ?>
    </footer>
</div>
 
  </body>
</html>