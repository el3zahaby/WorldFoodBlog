<html>

    <body>
        <style>
            div.a {
                text-align: center;
            }
            div.container{
                margin: 1px;
            }
            .btn{
                font-family: "Comic Sans MS", cursive, sans-serif; 
            }


</style>
        </style
      <div class="col-md-7">            <div  class = "container" >    <div style="overflow-x:auto;">
                <h4>Here is a list of all posts:</h4></div>
  
  
                <table class="RecipesTable">
                    <tr>


                        <?php foreach ($posts as $post) { ?>
                        <p>

                        <tr>    <td>      <?php echo "<a href='?controller=post&action=read&id=" . $post->id . "'><img src=" . $post->image . ' width="150" height="100"/> </a>' ?></td> 
                            <td>   <?php echo $post->title; ?> </td>
                            <td> <a class="btn btn-default"  href='?controller=post&action=read&id=<?php echo $post->id; ?>'>Read more</a> </td>
                            <?php if (isset($_SESSION['username'])) { ?>
                                <td>       <button class="btn btn-default" value = "Delete" onclick="ConfirmDelete()">Delete Post</button> </td>
                                <td>    <a class="btn btn-default" href='?controller=post&action=update&id=<?php echo $post->id; ?>> '>Update Post</a> </td>
                            <?php } ?> 
                            </p>

                            </div>
                        <?php } ?>
                    <script>
                        function ConfirmDelete() {
                            var txt;
                            var r = confirm("Are you sure you want to delete this post?");
                            if (r == true) {
                                txt = "You pressed OK! ";
                                window.location.href = ("?controller=post&action=delete&id=<?php echo $post->id; ?>");
                            } else {
                                txt = "You pressed Cancel!";
                            }
                            document.getElementById("demo").innerHTML = txt;
                        }
                    </script>
                    </tr> </table></div>
            </div>
    </body>

</html>