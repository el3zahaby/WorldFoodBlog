
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
        .form-control{
            display: block;
            float: right;

        }
        .btn{
            background-color: #7F2989; 
            color: white;

        }
        .add-on .input-group-btn > .btn {
            border-left-width:0;left:-2px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }
        /* stop the glowing blue shadow */
        .add-on .form-control:focus {
            box-shadow:none;
            -webkit-box-shadow:none; 
            border-color:#cccccc; 
        }
        .form-control{width:20%}
    </style>

    <div class="container">
        <form role="form" method="GET" id="form-buscar">




            <div class="input-group add-on">
                <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>  </div>

    </div>
        </form>
           <div class="container">
        <a href= '/WorldFoodBlog'>  <img class="center" src="views/images/WFood.png" alt="" width='290' height='180'/></a>
        <h2>Most Popular Posts</h2>

        <?php foreach ($PopularPosts as $post) { ?>
            <p>

            <div class="figure">  

                <?php echo "<a href='?controller=post&action=read&id=" . $post->id . "'><img src=" . $post->image . ' width="260" height="180"/> </a>' ?> &nbsp; &nbsp;
                <div class="caption"> <p><?php echo $post->title; ?> - By: <?php echo $post->user_id; ?><p><?php echo $post->cuisine_id; ?> Cuisine</p1></div>
            </div>
        <?php } ?> 

        <h2>Recent Posts</h2>
        <?php foreach ($RecentPosts as $post) { ?>
            <p>

            <div class="figure2">  

                <?php echo "<a href='?controller=post&action=read&id=" . $post->id . "'><img src=" . $post->image . ' width="500" height="300"/> </a>' ?> &nbsp; &nbsp;
                <div class="caption"> <p><?php echo $post->title; ?> - By: <?php echo $post->user_id; ?><p><?php echo $post->cuisine_id; ?> Cuisine</p1></div>
            </div>
        <?php } ?> 
    </div>




</body>
