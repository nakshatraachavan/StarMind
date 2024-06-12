<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Engineering Portal</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale= 1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="sidebar.css">
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/loginaboutUs.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Bowlby+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
</head>
<body>
<!--The navigation bar-->
<nav class="navbar navbar-inverse"> 
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#NavMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="loginHome.php"><img src="../Homeimg/logo.png" height="50" width="60"/></a>
        </div>
        <div class = "collapse navbar-collapse" id="NavMenu">
            <ul class="nav navbar-nav navbar-left" style="margin-top: 7px">
            <li class="active"><a href="loginHome.php">Home</a></li>
                <li><a href="loginaboutUs.php">About</a></li>
                <li><a href="qanda.php">Ask a Question</a></li>
                
                <li><a href="profile.php">profile</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <form action="includes/logout-include.php" method="POST">
                    <li><button class="button-5" role="button"" type="submit" name="submit">Log out</button></li>
                
                </form>
            </ul>
        </div>
    </div>
</nav>
<div class="text-justify" style="font-family: 'Black Han Sans',sans-serif; font-size: 130%">
            <?php
                session_start();
                if(isset($_SESSION['u_id'])){
                     echo strtoupper ("HEY! HI ".$_SESSION['u_first']." :)");
                }
            ?>
 </div>
<div class="container-fluid">
    <div class="row bg" id="box1">
    <div class="col-md-12 col-sm-12" style="text-align: center">
        <h1 class="text-align"  >FOR ENGINEERS</h1>
        <p class="textalign">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid</p>
        <p class="textalign">unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    </div>
    <div class="row bg" id="box2">
        <div class="col-md-12 col-sm-12" style="text-align: center">
                <h1 class="text-align">BY ENGINEERS</h1>
            <p class="textalign">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid</p>
            <p class="textalign">unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>
    </div>
    <div class="row bg" id="box3">
        <div class="col-md-12 col-sm-12" style="text-align: center">
            <h1 class="text-align">GET ALL YOU QUESTIONS ANSWERED</h1>
            <p class="textalign">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid</p>
            <p class="textalign">unt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>
<footer class="container-fluid text-center">
    <div class="row">
        <div class="col-sm-4">
            <h3>StarMind</h3>
            <br>
            <h4>StarMind is a Q&A platform that empowers people to share and grow the world’s knowledge. 
            <br>People can come to StarMind to ask questions about various subject, 
            read high quality knowledge that's personalized<br>and relevant to them,
             and share their own knowledge with others. StarMind is a place to share knowledge 
             and<br> better understand the world.</h4>
        </div>
        <div class="col-sm-4">
            <h3>Connect </h3>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-twitter"></a>
        </div>
        <div class="col-sm-4">
            <img src="../Homeimg/logo7.png" class="icon">
        </div>
    </div>
</footer>
</body>
</html>

