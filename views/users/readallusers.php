<p>Here is a list of all users:</p>

<?php foreach($users as $user) { ?>
  <p>
    <?php echo $user->username; ?> &nbsp; &nbsp;
<a href='?controller=user&action=read&id=<?php echo $user->id; ?>'>See User information</a> &nbsp; &nbsp;
    <a href='?controller=user&action=delete&id=<?php echo $user->id; ?>'>Delete User information</a> &nbsp; &nbsp;
    <a href='?controller=user&action=update&id=<?php echo $user->id; ?>'>Update User information </a> &nbsp;
   
<?php } ?>
