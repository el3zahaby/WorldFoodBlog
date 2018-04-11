<p>Here is a list of all users:</p>

<?php foreach($users as $user) { ?>
  <p>
    <?php echo $user->username; ?> &nbsp; &nbsp;
    <a href='?controller=user&action=read&id=<?php echo $user->id; ?>'>See user information </a> &nbsp; &nbsp;
    <a href='?controller=product&action=delete&id=  <?php echo $user->id; ?>'>Delete user</a> &nbsp; &nbsp;
    <a href='?controller=product&action=update&id=<?php echo $user->id; ?>'>Update user</a> &nbsp;
  </p>
<?php } ?>
