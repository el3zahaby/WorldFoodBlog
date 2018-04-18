
    <html>  <style>
        .floating-box {
            display: inline-block;
            width: 280px;
            height: 250px;
            margin: 10px;
            border: 0px solid #717068;  
        }



    </style>
    <div class="container">
      <h2>All Contributors</h2>
        <?php
//            <a class="btn btn-secondary active" href='?controller=post&action=update&id=<?php echo $post->id; 

        foreach ($users as $user) {?>
      <div class='floating-box'> <?php echo $user->username ?> <a href= '?controller=user&action=read&id=<?php echo $user->id ?>'> <img src= <?php echo $user->image?>  width='290' height='200'>   </a> </div>
     <?php   } ?>
      
    </div>



</html>