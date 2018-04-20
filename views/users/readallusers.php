
    <html>  <style>
  .floating-box {
            display: inline-block;
          
            margin: 10px;
            border: 0px solid #717068;  
        }

        img {
  border-radius: 50%;
  margin-left: 40px;
  margin-right: 30px;
}
</style>
    <div class="container">
      <h2>All Contributors</h2>
      
        <?php
        foreach ($users as $user) {?>
      <div class='floating-box'> <?php echo $user->username ?> <br> <a href= '?controller=user&action=read&id=<?php echo $user->id ?>'> <img src= <?php echo $user->image?> width='200' height='190' > </a> </div>
     <?php   } ?>
      
    </div>


</html>

      