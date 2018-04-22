<html>

    <body><style>
            div.a {
                text-align: center;
            }
            div.container{
                margin: 3px;




            }
        </style>


        <div  class = "container" >     <div class="col-md-7">           <div style="overflow-x:auto;">


                    <h4>Search results for "<?php echo $_POST['search']; ?>"</h4></div>


                <table class="RecipesTable">
                    <tr>

                        <?php foreach ($posts as $post) { ?>
                    <tr>    <td> 
                            <?php echo "<a href='?controller=post&action=read&id=" . $post->id . "'><img src=" . $post->image . ' width="140" height="100"/> </a>' ?> </td>&nbsp; &nbsp;
                        <td>  <?php echo $post->title; ?> </td> &nbsp; &nbsp;
                        <td>   <a class="btn btn-secondary active" href='?controller=post&action=read&id=<?php echo $post->id; ?>'>Read more</a> </td>  &nbsp; &nbsp;
                        <?php }?>

                    </tr> </table></div>
        </div> </div>
</body>
</html>