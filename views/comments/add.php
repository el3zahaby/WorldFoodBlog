

<!--     <div class="form-group">
                   <div name="post_id" id='cmntbox'><?php 
//     echo $post->id;
//     echo '</br><hr'
//     . '>';?>   
<!--form  method="POST" -->
<style>.friend #friend-image {
    border: 1px solid #F0F2F8;
    display: inline-block;
    float: left;
   
  
}
#main #friend #friend-bio {
    float: left;
    font-size: 14px;
    margin-right: 20px;
      border: 1px solid #F0F2F8;

}
#main #friend #friend-bio h4 {
    font-size: 18px;
    font-weight: normal;
    margin-right: 14px;
    
}
</style>



        
<form  method="POST" >
        
                <div class="form-group">
                    <input type="hidden" class="hi" name="post_id" value="<?php echo $post->id;?>">

                    <label for="exampleFormControlInput1">Name </label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" required placeholder="your name here">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required placeholder="name@example.com">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Comment</label>
                    <textarea name="comment" class="form-control" id="exampleFormControlTextarea1"required   rows="3"></textarea>
                </div>
                <button name='submit' type='submit'> Comment </button>
            </form>


         
   <h3>Comments</h3>


<?php foreach($comments as $comment) { ?>
  <p>

 
<div class="media">
  <img class="align-self-start mr-3" src='uploads/a.png ' width="50" height="50" alt="Generic placeholder image" style='width: 6%;'>
  <div class="media-body">
                <div id="friend-bio">
                  <h5 class="mt-0"> Name: <?php echo $comment->name;?></h5>
                    <p>Comment: <?php echo $comment->comment;?></p>
                    <p>  Date posted: <?php echo $comment->date_posted;?></p>
                 
             

<?php }?>
                       </div>
</div>
</div>