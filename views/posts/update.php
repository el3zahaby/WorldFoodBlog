
<html> <head> 
        
        <title>Edit Blog Pos</title> </head>
    <body>
<p>Update post here</p>
    <form id="get-data-form" method="POST"  class="w3-container" enctype="multipart/form-data">
    <h2>Update Post</h2>
    <p>
                 <label>Title</label>
        <input class="form-group" type="text" name="title" value="<?= $post->title; ?>">
      
    </p>
    <p>
         <label>Content</label>
        <textarea  class="tinymce" id="texteditor" type="text" name="content" value="" > <?php echo $post->content;?> 
           
        </textarea> 
       
    </p>
            
  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<?php 
  $file = $post->image;
if (file_exists($file)) {
    $img = "<img src='$file' width='150' />";
    echo $img;
} else {
    echo "<img src='views/images/standard/_noproductimage.png' width='150' />";
}
?>
  <br/>
   <input type="hidden" 
               name="MAX_FILE_SIZE" 
               value="10000000"
               />
        <input type="file" name="image" class="w3-btn w3-pink" id="texteditor" /> <br>
      <input type="submit" value="Update Post">
</form>

<script src="views/Javascript/js/jquery.min.js" type="text/javascript"></script>
    <script src="views/Javascript/plugin/tinymce/tinymce.min.js" type="text/javascript"></script>
    <script src="views/Javascript/plugin/tinymce/init-tinymce.js" type="text/javascript"></script>

    

</body>
</html>