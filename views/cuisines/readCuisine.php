<html>

    <body><style>
            div.a {
        text-align: center;
    }
    div.container{
        margin: 3px;
       
     
  
        
    }
</style>

  <div class="col-md-7">            <div  class = "container" >    <div style="overflow-x:auto;">
                <h4>You have selected the <?php echo $cuisine->name; ?> cuisine </h4></div>
  
  
                <table class="RecipesTable">
                    <tr>
    <?php
    
    foreach ($postsForCuisine as $post) { ?>
     <tr>    <td> 
<?php
echo "<a href='?controller=post&action=read&id=". $post->id  ."'><img src=" . $post->image. ' width="140" height="100"/> </a>'?></td> &nbsp; &nbsp;
      <td>    <?php echo $post->title; ?> </td> &nbsp; &nbsp;
    <td>   <a class="btn btn-secondary active" href='?controller=post&action=read&id=<?php echo $post->id; ?>'>Read more</a> </td>  &nbsp; &nbsp;
    <?php }?>
<!--        echo $post->title;
         echo $post->image . "<br>";-->
        </tr> </table></div>
            </div> </div>
  </body>
</html>