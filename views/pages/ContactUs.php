<html>
<head>
    <title>Contact Us Page</title>
    

</head>

<body>
    <style>

    </style>

 <div style="text-align:center">



        <h3>Contact Us </h3>   
        
       <div class="container">
            <img class="center" src="views/images/WFBlogTeam.png" name="slide" alt="" width='250' height='200'/>
 
           
           
        <h4>If there is anything we can help with or you have any questions, we'd love to help!</h4>
        <h4>Please fill in the form below and we shall get back to you. </h4>
        <p> </p>

</div> 
 </div>

<div class="container">

    <form class="form-horizontal" role="form" method="post" action="index.php">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Message</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="4" name="message"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                   <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                    
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <!Will be used to display an alert to the user>
                </div>
            </div>
        </form> 
</div>
      
   

</body>
</html>