<html>

    <body><style>
            div.a {
        text-align: center;
    }
    div.container{
        margin: 3px;
       
     
        
        
    }
</style>
<div  class = "container" >
        </style>

<p>You have selected the  <?php echo $user-username; ?> User<p>
    <?php
    
    foreach ($users as $user) { ?>
  <p>
<?php
     echo "<a href='?controller=user&action=read&id=". $user->id  ."'><img src=" . $user->image. ' width="140" height="100"/> </a>'?> &nbsp; &nbsp;
    <?php echo $post->title; ?> &nbsp; &nbsp;
        <a class="btn btn-secondary active" href='?controller=user&action=read&id=<?php echo $user->id; ?>'>Read more</a> &nbsp; &nbsp;
    <?php }?>
<!--        echo $post->title;
         echo $post->image . "<br>";-->
    </div>
  </body>
</html>
