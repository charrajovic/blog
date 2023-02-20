<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login</h3>
                    <form action="controller.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email  or Username*" name="email" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" name="password" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Register</h3>
                    <form action="controller.php" method="post" style="padding-top:15px">
                    <?php if(!isset($_REQUEST['email']) && !isset($_REQUEST['username']) && !isset($_REQUEST['error']) && !isset($_REQUEST['us'])){ ?>
            <div class="alert alert-info" role="alert">
            Account activation does not need to verify the email, you must remember the username to log in
            </div>
            <?php }else if(isset($_REQUEST['email'])){ ?>
                <div class="alert alert-danger" role="alert">
                    Email already exist
                </div>
                <?php }else if(isset($_REQUEST['us'])){ ?>
                <div class="alert alert-danger" role="alert">
                    Username already exist
                </div>
                <?php }else if(isset($_REQUEST['error'])){ ?>
                <div class="alert alert-danger" role="alert">
                The value must be 3 or more characters long
                </div>
                <?php }else if(isset($_REQUEST['username'])){ ?>
                <div class="alert alert-danger" role="alert">
                    Username must be 3 or more characters long
                </div>
            <?php } ?>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username *" name="username"  value="<?php if(isset($_REQUEST['email']) || isset($_REQUEST['username']) || isset($_REQUEST['error']) || isset($_REQUEST['us'])){ if(isset($_SESSION['username']))
            {
                echo $_SESSION['username'];
            }} ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name *" name="first"  value="<?php if(isset($_REQUEST['email']) || isset($_REQUEST['username']) || isset($_REQUEST['error']) || isset($_REQUEST['us'])){
             if(isset($_SESSION['prov']))
            {
                echo $_SESSION['prov']->get_name();
            }} ?>"/>
                        </div>
                        <div class="form-group" style="display:none">
                            <input type="text" class="form-control" placeholder="Full Name *" name="last" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email *" name="email" value="<?php if(isset($_REQUEST['email']) || isset($_REQUEST['username']) || isset($_REQUEST['error']) || isset($_REQUEST['us'])){ if(isset($_SESSION['prov']))
            {
                echo $_SESSION['prov']->get_email();
            }} ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" name="password" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Register" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>