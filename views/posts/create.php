
<html> <head> 

        <title>Create A Blog Post</title> </head>
    <body>

        <form id="get-data-form" method="POST"  class="w3-container" enctype="multipart/form-data">
            <div class="form-group">  
                <label>Title</label>
                <input type="text"  name="title" class="form-control" id="texteditor" placeholder="Post Title Here">
            </div>
      
            <label >Select cuisine</label>
            <select name="cuisine_id">
                <?php
                foreach ($cuisines as $cuisine) {
                    echo "<option role='presentation' role='menuitem'  value ='" . $cuisine->id . "'tabindex='-1'>" . $cuisine->name . "</option>";
                }
                ?>
            </select>
        </div>

        <label>Content</label>

        <textarea name= "content" class="tinymce" id="texteditor"></textarea>


        <input type="hidden" 
               name="MAX_FILE_SIZE" 
               value="10000000"
               />
        <input type="file" name="image" class="w3-btn w3-pink" id="texteditor" required /> <br>
               <input type="hidden" class="hi" name="user_id" value="<?php echo $_SESSION['id'];?>">
            <input type="submit" value="Create Post">
            </form>



            <script src="views/Javascript/js/jquery.min.js" type="text/javascript"></script>
            <script src="views/Javascript/plugin/tinymce/tinymce.min.js" type="text/javascript"></script>
            <script src="views/Javascript/plugin/tinymce/init-tinymce.js" type="text/javascript"></script>

            <script>
                $(function () {

                    $(".dropdown-menu li a").click(function () {

                        $(".btn:first-child").text($(this).text());
                        $(".btn:first-child").val($(this).text());

                    });

                });
            </script>

            </body>

</html>