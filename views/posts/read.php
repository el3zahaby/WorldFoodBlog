
<style>
    div.a {
        
    }
   .container
{
    min-height: 100%;
    min-height: -webkit-calc(100% - 186px);
    min-height: -moz-calc(100% - 186px);
    min-height: calc(100% - 186px);
}

    .like, .dislike {
        display: inline-block;
        margin-bottom: 0;
        font-weight: normal;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        background: purple;
        color: white;
        border: 1px solid transparent;
        white-space: nowrap;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.428571429;
        border-radius: 4px;
    }
    .qty1, .qty2 {
        border: none;
        width:20px;
        background: transparent;
    }
    div.col-sm-11{
        margin: 10px;

    }




</style>
<bod>

    <div  class = "container" id="get-data-form">

        <div class="col-sm-9">
            <div class="a">
                <h2><?php echo $post->title; ?></h2>

                <p>Date posted: <?php echo $post->DateAdded; ?></p>


                <p>Cuisine: <?php echo $post->cuisine_id; ?></p>

                <p><?php echo $post->content; ?></p>



            </div>
        </div>

        <div class="col-sm-11">

            <h3>leave us a comment</h3>
            <?php
require_once('views/comments/add.php');?>

    



    </div>
    </div>
</body>