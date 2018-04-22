
<html>  <style>
        img {
            border-radius: 50%;

            width: 70px;
            height: 70px;
        }





    </style>

       <div  class = "container" >       <div class="col-md-8">      <div style="overflow-x:auto;">
                <h4>All blog members </h4>


            <table class="RecipesTable">
                <tr>

                    <?php foreach ($users as $user) { ?>
                    <tr>    <td> 
                            <img src= <?php echo $user->image  ?> width='300' height='230'>   </td>  </a> <td> <?php echo $user->username ?></td> 
<?php } ?>
                         <?php
//            <a class="btn btn-secondary active" href='?controller=post&action=update&id=<?php echo $post->id; 

        foreach ($users as $user) {?>
      <div class='figure'> <?php echo $user->username ?> <a href= '?controller=user&action=userProfilePage&id=<?php echo $user->id ?>'> <img src= <?php echo $user->image?>  width='260' height='180'>   </a> </div>
     <?php   } ?>

                    </tr> </table></div> </div>
    </div> 
</div>


</html>