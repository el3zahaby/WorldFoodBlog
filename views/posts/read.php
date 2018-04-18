
<style>
    div.a {
        text-align: center;
    }
    div.container{
        margin: 10px;
       
   
        
        
    }
</style>
<div  class = "container" id="get-data-form">
<div class="a">
    <h2><?php echo $post->title; ?></h2>

    <p>Date posted: <?php echo $post->DateAdded; ?></p>


    <p>Cuisine: <?php echo $post->cuisine_id; ?></p></div>

    <p><?php echo $post->content; ?></p>



    <?php
//    $file = $post->image;
//    if (file_exists($file)) {
//        $img = "<img src='$file' width='150' />";
//        echo $img;
//    } else {
//        echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
//    }
    ?>
</div>