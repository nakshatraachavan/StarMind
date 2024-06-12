<?php
session_start();
include "dbconnect.php";
$conn = mysqli_connect("localhost", "root", "", "loginsystem");
$uid = $_SESSION['u_uid'];
$u_email=$_SESSION['u_email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
    <link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse"> 
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#NavMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.html"><img src="../Homeimg/logo.png" height="50" width="60"/></a>
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
    <div class="page-content page-container" id="page-content">
        <div class="padding">
        <div class="row container d-flex justify-content-center">
        <div class="col-xl-6 col-md-12">
            <div class="card user-card-full">
                <div class="row m-l-0 m-r-0">
                    <div class="col-sm-4 bg-c-lite-green user-profile">
                        <div class="card-block text-center text-white">
                            <div class="m-b-25">
                                <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                            </div>
                            <?php 
                            $sql_up = "SELECT * FROM users WHERE user_uid= '$uid' OR user_email='$uid';";
                            $result= mysqli_query($conn, $sql_up);
                            $resultCheck= mysqli_num_rows($result);
                            // echo $resultCheck;
                                while($row = mysqli_fetch_assoc($result)) {
                                    $_SESSION['u_first'] = $row['user_first'];
                                    $_SESSION['u_last'] = $row['user_last'];
                                    $_SESSION['u_email'] = $row['user_email'];
                                    $_SESSION['u_uid'] = $row['user_uid'];
                                    $_SESSION['u_bio']=$row['bio'];
                                    echo'<h3 style="color:#fff">'.$row['user_uid'].'</h3>';		
                                    echo "</br>";	
                            
                            ?>
                        
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card-block">
                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Profile</h6>
                            <div class="row">
                            <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Name</p>
                                    <?php
                                    echo'<p class="text-muted f-w-400">'.$row['user_first'].' '.$row['user_last'].'</p>';
                                        
                                ?>
                                </div>
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Email</p>
                                    <?php
                                    echo '<p class="text-muted f-w-400">'.$row['user_email'].'</p>';
                                
                                    ?>
                                </div>
                                
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Bio </p>
                                    <form class="form-container " action="profile.php" method="POST">
                                    <div class="form-group">
                                    <?php 
                                    echo '<p class="text-muted f-w-400">'.$row['bio'].'</p>';}?>
                                        <?php 
                                        // $bio_nm=$row['bio'];
                                        // echo "bio=".$u_bio;
                                
                                        // $sql = "UPDATE users SET bio='$bio' WHERE user_uid='$uid'";
                                        // $resultl = mysqli_query($conn, $sql);
                                        // $resultCheck = mysqli_num_rows($resultl);
                                        // echo $resultCheck;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Questions</h6>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Recent</p>
                                    <?php
                                //     $sqlq = "SELECT * FROM questions WHERE user_uid= '$uid'";
                                //     $result= mysqli_query($conn, $sqlq);
                                //     $resultCheck= mysqli_num_rows($result);
                                //     // echo $resultCheck;
                                //         while($roww = mysqli_fetch_assoc($result)) {
                                //             $_SESSION['u_ques'] = $roww['ques'];
                                    
                                //     echo'<h6 class="text-muted f-w-400">'.$row['ques'].'</h6>';
                                // }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <p class="m-b-10 f-w-600">Most Viewed</p>
                                    <h6 class="text-muted f-w-400">Dinoter husainm</h6>
                                </div>
                            </div>
                            <ul class="social-link list-unstyled m-t-40 m-b-10">
                                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
            </div>
        </div>

</body>
</html>