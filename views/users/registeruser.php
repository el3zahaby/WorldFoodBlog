<html >
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Sign up </title>

        <style type="text/css">
            body{ font: 14px sans-serif; text-align: center; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="form-container">
                <form method="post"  name="formname">
                    <h2>World Food Blog:Sign up.</h2><hr />
                    <?php
                    if (isset($error)) {
                        foreach ($error as $error) {
                            ?>
                            <div class="alert alert-danger">
                                <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                            </div>
                            <?php
                        }
                    } {
                        ?>

                        <?php
                    }
                    ?>
                    <div class="form-group">

                        <input type="text" class="form-control" name="username" placeholder="Enter Username" required value="<?php
                    if (isset($error)) {
                        echo $username;
                    }
                    ?>" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Enter E-Mail" required value="<?php
                        if (isset($error)) {
                            echo $email;
                        }
                    ?>" />

                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                    <div class="form-group">
                        <input id="password1" onKeyUp="check_pass()" type="password" class="form-control" name="password"required  placeholder="Enter Password" />
                    </div>
                    <div class="form-group">
                        <input  id="password2" onKeyUp="check_pass()" type="password" name="confirm_password" class="form-control"required  placeholder="Confirm Password" />
                    </div>
                    <div class="clearfix"></div><hr />
                    <div class="form-group">
                        <button  type="submit" value="Submit" id="submit" disabled class="btn btn-default" >-->
                            <i class="glyphicon glyphicon-open-file"></i>&nbsp;SIGN UP
                        </button>
                    </div>
                    <br />
<span id='message'></span>
                </form>


            </div>
        </div>
        <script>
//         
            function check_pass() {
                if (document.getElementById('password1').value ==
                        document.getElementById('password2').value) {
                    document.getElementById('submit').disabled = false;

                    $('#message').html('Matching').css('color', 'green');
                } else {
                    document.getElementById('submit').disabled = true;
                     $('#message').html('Not Matching').css('color', 'red');

                }
            }

        </script>



    </body>
</html>

