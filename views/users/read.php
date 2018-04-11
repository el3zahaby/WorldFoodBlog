<p>This is the requested users:</p>

<p>User ID: <?php echo $user->id; ?></p>
<p>Username: <?php echo $user->username; ?></p>
<p>User Type: £<?php echo $user->typeid; ?></p>
<?php 
$file = 'views/images/' . $user->username . '.jpeg';
if(file_exists($file)){
    $img = "<img src='$file' width='150' />";
    echo $img;
}
else
{
echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}

?>
	
