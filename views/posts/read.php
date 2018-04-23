<head>
  <title>Your Website Title</title>

  <meta property="og:url"           content="http://localhost:8080/WorldFoodBlog/index.php?controller=post&amp;action=read&amp;id=76" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
</head>
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



<body>  
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>    
    <script>
        

        window.twttr = (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0],
                    t = window.twttr || {};
            if (d.getElementById(id))
                return t;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);

            t._e = [];
            t.ready = function (f) {
                t._e.push(f);
            };

            return t;
        }(document, "script", "twitter-wjs"));
            </script>

    <div  class = "container" id="get-data-form">

        <div class="col-sm-9">
            <div class="a">
                <h2><?php echo $post->title; ?></h2>

                <p>Date posted: <?php echo $post->DateAdded; ?></p>


                <p>Cuisine: <?php echo $post->cuisine_id; ?></p>
                <p>By: <?php echo $post->user_id; ?></p>
                <p><?php echo $post->content; ?></p>




            </div>
        </div>


        <div class="col-sm-11">
            
            <h5>Share it on social media</h5>
<div class='containrer'>
    <a class="twitter-share-button"
       href="http://localhost:8080/WorldFoodBlog/index.php?controller=post&amp;amp;action=read&amp;amp;id=<?php echo $post->id; ?>"><
      Tweet</a>
            <div class="fb-like" data-href="http://localhost:8080/WorldFoodBlog/index.php?controller=post&amp;action=read&amp;id=76" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
</div>      <h5>leave us a comment</h5>
            <?php require_once('views/comments/add.php'); ?>




 
    </div>
</body>