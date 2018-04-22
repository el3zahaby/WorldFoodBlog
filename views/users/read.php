<html>

    <body><style>
            div.a {
                text-align: center;
            }
            div.container{
                margin: 3px;




            }
        </style>
       <div class="col-md-3">          <div  class = "container" >       <div style="overflow-x:auto;">
                    <h4>By <?php echo $user->username; ?> </h4></div>


                <table class="RecipesTable">
                    <tr>

                        <?php foreach ($postsForContributor as $post) { ?>
                        <tr>    <td> 
                              <?php echo " <a href='?controller=post&action=read&id=" . $post->id . "'>  <img src=" . $post->image . ' width="140" height="100"/> </a>' ?> </td>
                            <td><?php echo $post->title; ?></td> 
                            <td> <a class="btn btn-secondary active" href='?controller=post&action=read&id=<?php echo $post->id; ?>'>Read more</a></td> 
                        <?php } ?>  </tr> </table></div>
        </div> </div>

</div>
</body>
</html>