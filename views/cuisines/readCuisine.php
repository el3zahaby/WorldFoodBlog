<html>


</html>
<p>Post content <?php echo $cuisine->name; ?>
    <?php
    foreach ($postsForCuisine as $post) {
        echo $post->id;
        echo $post->title;
         echo $post->image . "<br>";
    }
    ?>
</html>