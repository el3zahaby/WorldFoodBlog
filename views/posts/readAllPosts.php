<html><p>Here is a list of all posts:</p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->title; ?> &nbsp; &nbsp;
    <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>Read more</a> &nbsp; &nbsp;
    <button value = "Delete" onclick="ConfirmDelete()">Delete</button> &nbsp; &nbsp;
    <a href='?controller=post&action=update&id=<?php echo $post->id; ?>'>Update Product</a> &nbsp;
  </p>
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
</html>