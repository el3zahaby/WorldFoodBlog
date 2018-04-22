<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  margin-right:600px;

}

.title {
  color: grey;
 
}

button {
  border: solid, grey;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: black;
  background-color: white;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}



button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

  <div class="container"> 

<div class="card">
    <h2 style="text-align:center"><?php echo $user->username; ?> </h2>
  <img src="<?php echo $user->image; ?> " alt="user" style="width:100%">
  
  <p class="title">Member since: <?php echo $user->create_date; ?></p>
 

  
  <p> This member has registered their interests as cooking, travel and adventure! 
      They are from the middle-east and have a special interest in ingredients from the Mediterranean region.
      This type of cuisine contains aromatic ingredients such as olives,.
      Fresh herbs include rosemary, basil, cilantro, parsley, mint, dill, fennel, and oregano. 
       
   <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div></div>
  </p>
  


</body>
</html>