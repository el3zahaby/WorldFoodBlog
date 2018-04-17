<html>


</html>
<p>You have selected the  <?php echo $cuisine->name; ?> cuisine<p>
    <?php
    
    foreach ($postsForCuisine as $post) { ?>
  <p>
<?php
     echo "<a href='?controller=post&action=read&id=". $post->id  ."'><img src=" . $post->image. ' width="140" height="100"/> </a>'?> &nbsp; &nbsp;
    <?php echo $post->title; ?> &nbsp; &nbsp;
        <a class="btn btn-secondary active" href='?controller=post&action=read&id=<?php echo $post->id; ?>'>Read more</a> &nbsp; &nbsp;
    <?php }?>
<!--        echo $post->title;
         echo $post->image . "<br>";-->
    
  
</html>