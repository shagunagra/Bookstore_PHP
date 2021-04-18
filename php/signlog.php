<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup/Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/signlog.css">
</head>
<body>

<header>
    <div class="mynav">
        <div class="navbar navbar-expand-md navbar-light bg-white">
            <a class="navbar-brand">MyBookStore</a>
            <div id="mybar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<div class="forms">
    <ul class="tab-group">
        <li class="tab active"><a href="#login">Log In</a></li>
        <li class="tab"><a href="#signup">Sign Up</a></li>
    </ul>
    <form action="signlog.php" id="login" method="POST">
        <h1>Login on MyBookStore</h1>
        <div class="input-field">
        <label for="username">Username</label>
        <input type="text" name="username"/>
        <label for="password">Password</label> 
        <input type="password" name="password"/>
        <span style="color: red;"><?php include('errors.php'); ?></span>
        <input type="submit" value="Login" class="button" name="login_user"/>
        <p class="text-p"> <a href="#">Forgot password?</a> </p>
        </div>
    </form>

    <form method="POST" action="signlog.php" id="signup">
        <h1>Sign Up on MyBookStore</h1>
        <div class="input-field">
        <label for="username">Username</label>
        <input type="text" name="name" id="name" value="<?php echo $username;?>"/>
        <label for="email">Email</label> 
        <input type="email" name="email" id="email" value="<?php echo $email; ?>"/>
        <label for="password">Password</label> 
        <input type="password" name="password" id="pass"/>
        <label for="password">Confirm Password</label> 
        <input type="password" name="confirmpassword" id="conpass"/>
        <span style="color: red;"><?php include('errors.php'); ?></span>
        <input type="submit" value="Sign up" name = 'reg_user' class="button"/>
        </div>
    </form>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
        $('.tab a').on('click', function (e) {
        e.preventDefault();
        
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
        
        var href = $(this).attr('href');
        $('.forms > form').hide();
        $(href).fadeIn(500);
    });
});

</script>
</body>
</html>