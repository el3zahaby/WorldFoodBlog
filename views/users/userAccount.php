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



<div class="card">
    <h2 style="text-align:center">Cute Cat</h2>
  <img src="uploads/cat.jpg" alt="Cat" style="width:100%">
  <h1>Cat</h1>
  <p class="title">I'm a cat!</p>
  <p>Cat Kingdom</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
 </div>
 <p><button>Contact</button></p>
</div>
    
    
    
    
              <div>
             <form id="get-data-form" method="POST"  class="w3-container" enctype="multipart/form-data">
   <input type="hidden" 
               name="MAX_FILE_SIZE" 
               value="10000000"
               />
        <input type="file" name="image" class="w3-btn w3-pink" id="texteditor" required /> <br>
               <input type="hidden" class="hi" name="id" value="<?php echo $_SESSION['id'];?>">
            <input type="submit" value="Upload image">
            </form>

            </div>

</body>
</html>