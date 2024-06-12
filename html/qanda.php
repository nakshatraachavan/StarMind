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
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <style>
    .quest{
        text-align:left;
        padding-top:5px;
        padding-bottom: 0px;
        padding-left:35%;
        margin-top: 20px;
        } 
        .question{
        	color: #FFF;
        }
        .question:hover{
        	text-decoration: none;
        	color: #66FF99;
        	font-size:120%;
        }
        .quid{
        text-align:right;
        font-size:16px;
        opacity: 0.5;
        padding-right:40%;
        padding-top: 0%;
        }


    </style>


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
        
        <h2><a href="askquestion.php" class="myclass" style="float: right">ASK A QUESTION.</a></h2>
</div>


   <div class="container-fluid" style="background-image: linear-gradient(to left bottom, #0066cc, #0095ee, #00beea, #00e2c8, #66ff99)">
   	<h1 style="text-align: center; margin-top:3%;padding-bottom: 0%; margin-bottom: 0px;padding-bottom: 0%; font-family: 'Abril Fatface', cursive; color: #FFF; font-size: 300%">ALL   YOUR   QUESTIONS</h1>
   		<form class="form-container" >
            <?php 
            session_start();
              
            if (!isset($_SESSION['count']))
            {
              $_SESSION['count'] = 1;
            }
            else
            {
              ++$_SESSION['count'];
            }
              
            
                //DISPLAYING TABLE
                $conn = mysqli_connect("localhost", "root", "", "loginsystem");
                $sql = "SELECT ques_id,ques,ques_uid,datee FROM questions;";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        
echo '<form class="form-container" ><div class="quest" style="font-family: Crete Round, s"erif;font-size: 300%"><a href="getanswers.php?ques_id='.$row['ques_id'].'&ques='.$row['ques'].'&ques_uid='.$row['ques_uid'].'" class="question style="color: #FFF"">'.$row['ques'].'</a><br>Asked by-   '.$row['ques_uid'];
echo '<div class="quest" style="font-family: Crete Round, serif;font-size: 100%">'.$row['datee'].' </div></div><br></form>';
}
                } 
            ?>
          </form>
        </div>
        </body>
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
