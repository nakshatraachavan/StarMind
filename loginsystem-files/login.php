<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log In:)</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale= 1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="sidebar.css">
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link rel="stylesheet" href="login.css" type="text/css">

</head>
<body>

<div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
       <div class="col-md-4 col-sm-12 col-xs-12">
            <form class="form-container" action="includes/login-include.php" method="POST">
                <h2><center>Welcome Back</center><br> </h2>
                <div class="form-group">
                    <label for="uid">Enter Username/Email :</label>
                    <input type="name" class="form-control" placeholder="Username/Email" name="uid" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="pwd">Enter Password :</label>
                    <input type="Password" class="form-control" placeholder="Password" name="pwd">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Remember Me
                    </label>
                </div>
                <button type="submit" name="submit" class="btn btn-success btn-block">Log In</button>
                <div class="form-group">
                <p><center>Don't have an account<br></p><button class="signin-btn"style="margin: 7px;text-decoration: none"><a href="signup.php">Sign Up</a></button>
                    </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>