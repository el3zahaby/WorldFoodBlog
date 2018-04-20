
    <html>  <style>
   img {
  border-radius: 50%;

        width: 50px;
    height: 50px;
}

        



    </style>
    <div class="container">
      <h2>All Contributors</h2>
        <?php
//            <a class="btn btn-secondary active" href='?controller=post&action=update&id=<?php echo $post->id; 

        foreach ($users as $user) {?>
      <div class='floating-box'> <a href= '?controller=user&action=read&id=<?php echo $user->id ?>'> <img src= <?php echo $user->image?>   width='290' height='200'>   </a><?php echo $user->username ?> </div>
     <?php   } ?>
      
    </div>



</html>