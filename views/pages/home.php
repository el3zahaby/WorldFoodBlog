
<head>
    <title>Home Page</title>

</head>

<body>
    <style>
        img[src*="png"] {

            display: block;
            margin-left: auto;
            margin-right: auto;

        }
        img[src*="jpeg"]{

            width: 100%;
            display:block;

        }
        img[src*="jpg"]{

            width: 100%;
            display:block;

        }

        div.figure {

            float: left;
            width: 30%;

            text-align: center;
            font-style: italic;
            font-size: smaller;
            text-indent: 0;

            margin: 13px;
            padding: 1%;
            display:block;

        }
        div.figure2 {

            float: middle;
            width: 50%;

            text-align: center;
            font-style: italic;
            font-size: smaller;
            text-indent: 0;
            
            margin: auto;
            padding: 1%;
            display:block;

        }
        p1 {
            text-decoration: underline;
        }
        h2{
            margin: 10px;
            margin-left: 3%;
            text-align: center;

        } 
        @media all and (max-width: 959px) and (orientation : portrait) {
            div.figure{
                width: 100%;
                height: 100%;
            }
             div.figure2{
                width: 100%;
                height: 100%;
            }
            
            img[src*="png"] {
                width: 100%;
                height: 100%;
            }
            img[src*="jpeg"]{

                width: 100%;
                height: 100%;
            }
            img[src*="jpg"]{
                width: 100%;
                height: 100%;

            }
            h2{
                width: 100%;
                height: 100%;

            } 

        }


    </style>
</style>
<div class="container">
    <a href= '/WorldFoodBlog'>  <img class="center" src="views/images/WFood.png" alt="" width='290' height='180'/></a>
    <h2>Most Popular Posts</h2>
  
<?php foreach($PopularPosts as $post) { ?>
  <p>

     <div class="figure">  

  <?php  echo "<a href='?controller=post&action=read&id=". $post->id  ."'><img src=" . $post->image. ' width="260" height="180"/> </a>'?> &nbsp; &nbsp;
  <div class="caption"> <p><?php echo $post->title; ?> - By: <?php echo $post->user_id; ?><p><?php echo $post->cuisine_id;?> Cuisine</p1></div>
   </div>
    <?php }?> 
  
  <h2>Recent Posts</h2>
  <?php foreach($RecentPosts as $post) { ?>
  <p>

     <div class="figure2">  

  <?php  echo "<a href='?controller=post&action=read&id=". $post->id  ."'><img src=" . $post->image. ' width="500" height="300"/> </a>'?> &nbsp; &nbsp;
<div class="caption"> <p><?php echo $post->title; ?> - By: <?php echo $post->user_id; ?><p><?php echo $post->cuisine_id;?> Cuisine</p1></div>
   </div>
    <?php }?> 
</div>
  

  
      
</body>
