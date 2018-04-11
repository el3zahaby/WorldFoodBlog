<p>Here is a list of all users:</p>

<?php foreach($users as $user) { ?>
  <p>
    <?php echo $user->username; ?> &nbsp; &nbsp;
    <a href='?controller=user&action=read&username=<?php echo $user->username; ?>'>See user information </a> &nbsp; &nbsp;
    <!--<a href='?controller=product&action=delete&id=  <?php // echo $user->username; ?>'>Delete Product</a> &nbsp; &nbsp;
    <a href='?controller=product&action=update&id=<?php// echo $user->username; ?>'>Update Product</a> &nbsp;
  </p>
<?php } ?>