<html> <head> 
        
        <title>Create A Blog Post</title> </head>
    <body>
        <p>Create a new post right here :D</p>
    <form action="" method="POST" class="w3-container" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Post Title</label>
                <input type="text"  name="title" class="form-control" id="exampleFormControlInput1" placeholder="Post Title Here">
            </div>
       

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example text area</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="10"></textarea>
            </div>

                    
  <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />

  <input type="file" name="image" class="w3-btn w3-pink" required />
  <p>
          
            <input class="w3-btn w3-pink" type="submit" value="Create post">
 
        </form>


    </body> </html>
