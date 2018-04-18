<html>
    
<body>
   <style>
    div.a {
        text-align: center;
    }
    div.container{
        margin: 1px;
    }
/*    a {
    color: black;
    text-decoration: none;
}*/

</style>
<div  class = "container" >
   <p>Here is a list of all posts:</p>



<?php foreach($posts as $post) { ?>
  <p>

   <div claiss="container">
  <?php  echo "<a href='?controller=post&action=read&id=". $post->id  ."'><img src=" . $post->image. ' width="150" height="100"/> </a>'?> &nbsp; &nbsp;
<?php echo $post->title; ?> &nbsp; &nbsp;

    <a class="btn btn-secondary active" href='?controller=post&action=read&id=<?php echo $post->id; ?>'>Read more</a> &nbsp; &nbsp;
    <?php
    if (isset($_SESSION['username'])) {   ?>
    <button class="btn btn-secondary active" value = "Delete" onclick="ConfirmDelete()">Delete Post</button> &nbsp; &nbsp;
    <a class="btn btn-secondary active" href='?controller=post&action=update&id=<?php echo $post->id; ?>> '>Update Post</a> &nbsp;
    <?php }?> 
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
</div>
</body>
</html>