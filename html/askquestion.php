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
    <link rel="stylesheet" href="../css/qanda.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Coda+Caption:800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">

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
                <li><a href="index.html">About</a></li>
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
<div class=" container-fluid text-justify" style="font-family: 'Black Han Sans',sans-serif; font-size: 200%">
     <?php
        session_start();
        if(isset($_SESSION['u_id'])){
            echo strtoupper ("HEY! HI ".$_SESSION['u_first'].":)" ."<div style='text-align: center'>QUESTION EVERYTHING</div>");
        }
    ?>
</div>
<div class="container-fluid" style="background-image: url(background-ques.jpg);background-repeat: no-repeat;">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <form class="form-container" action="includes/askquestion-include.php" method="POST">
            <br><br><br>    
            <h1 style="text-align: center;color: #000; font-family: 'Coda Caption', sans-serif;margin-top: 5px">ALL YOUR QUESTIONS WILL BE ANSWERED </h1>
            <br><br> 
            <div class="form-group">
            <textarea class="form-control" style="min-width:100%;color: #FFF;border-color: black; background-color: transparent;font-size: 30px;border-width: medium; text-align: center;margin-left: 0% ;height: 20vh; font-family: 'Baloo Paaji', cursive;
                " type="text" id="form1" class="md-textarea form-control" rows="15" placeholder="ENTER YOUR QUESTION HERE" name="ques"></textarea><br>
            <button type="submit" name="submit" class="btn" style="background-color: #000;float: right ;margin-bottom: 3vh">SUBMIT</button>
        </form>
    </div>
</div>
</div>

</body>
</html>