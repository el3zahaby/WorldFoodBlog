
    <html>  <style>
      div.figure {

            float: left;
            width: 30%;

            text-align: center;
            font-style: italic;
            font-size: smaller;
            text-indent: 0;

            margin: 13px;
            padding: 1%;
            display:block;

        }

  h2{
            margin: 10px;
            margin-left: 3%;
            text-align: left;

        } 

    </style>
    <div class="container">
      <h2>All Cuisines</h2>
        <?php
//            <a class="btn btn-secondary active" href='?controller=post&action=update&id=<?php echo $post->id; 

        foreach ($cuisines as $cuisine) {?>
      <div class='figure'> <?php echo $cuisine->name ?> <a href= '?controller=cuisine&action=readCuisine&id=<?php echo $cuisine->id ?>'> <img src= <?php echo $cuisine->image?>  width='260' height='180'>   </a> </div>
     <?php   } ?>
      
    </div>
    




</html>