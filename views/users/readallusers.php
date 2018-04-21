
    <html>  <style>
  .floating-box {
            display: inline-block;
          margin-left: 30px;
           margin-top: 30px;
            margin-right: 30px;
            border: 0px solid #717068;  
            text-align: center;
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
      <div class='floating-box'> <h4><?php echo $user->username ?>  </h4><a href= '?controller=user&action=read&id=<?php echo $user->id ?>'> <img src= <?php echo $user->image?> width='160' height='140' > </a> </div>
     <?php   } ?>
      
    </div>



</html>

      