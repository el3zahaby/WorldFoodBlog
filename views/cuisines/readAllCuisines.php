<html><p>Here is a list of all posts:</p>
<style>
.floating-box {
    display: inline-block;
    width: 200px;
    height: 200px;
    margin: 20px;
    border: 1px solid #717068;  
}



</style>
<div class="container">
<?php 
foreach($cuisine as $cuisine) {
echo "<div class='floating-box'>". $cuisine->name . "</div>"; }
    ?>
</div>
    


 
</html>