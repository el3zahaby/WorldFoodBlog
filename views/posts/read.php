

<div  id="get-data-form">

 <p>Post title:I'm here<?php echo $post->title; ?></p>
    <p>Date Posted:  <?php echo $post->DateAdded; ?></p>
    <p>Post content: <?php echo $post->content; ?></p>
     <p>Post cuisine: <?php echo $post->cuisine_id ; ?></p>
</div>

<?php
$file = $post->image;
if (file_exists($file)) {
    $img = "<img src='$file' width='150' />";
    echo $img;
} else {
    echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}
?>
