<p>Here is a list of all posts:</p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->title; ?> &nbsp; &nbsp;
    <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>Read more</a> &nbsp; &nbsp;
    <a href='?controller=post&action=delete&id=<?php echo $post->id; ?>'>Delete Product</a> &nbsp; &nbsp;
    <a href='?controller=post&action=update&id=<?php echo $post->id; ?>'>Update Product</a> &nbsp;
  </p>
<?php } ?>