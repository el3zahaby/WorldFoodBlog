<p>Fill in the following form to update an existing user profile:</p>
<form action="" method="POST" class="w3-container" enctype="multipart/form-data">
    <h2>Update User</h2>
    <p>
        <input class="w3-input" type="text" name="username" value="<?= $user->username; ?>">
        <label>Username</label>
    </p>
    <p>
        <input class="w3-input" type="text" name="email" value="<?= $user->email; ?>" >
        <label>Email</label>
    </p>
            
  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<?php 
$file = 'views/images/' . $user->username . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_nouserimage.png' width='150' />";
}

?>
  <br/>
  <input type="file" name="myUploader" class="w3-btn w3-pink" />
  <p>
    <input class="w3-btn w3-gray" type="submit" value="Update User information">
    </p>
</form>