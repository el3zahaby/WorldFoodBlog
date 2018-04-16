
<?php>
if($count>0){
$_SESSION['username']=$username;
$_SESSION['logged-in'] = true;
header("index");
exit; 
}
?>