<?php
session_start();
include "dbconnect.php";
$conn = mysqli_connect("localhost", "root", "", "loginsystem");
$uid = $_SESSION['u_uid'];
$u_email=$_SESSION['u_email'];
$sql = "SELECT * FROM users WHERE user_uid= '$uid' OR user_email='$uid';";
		$result= mysqli_query($conn, $sql);
		$resultCheck= mysqli_num_rows($result);
        echo $resultCheck;
            while($row = mysqli_fetch_assoc($result)) {
			    $_SESSION['u_first'] = $row['user_first'];
				$_SESSION['u_last'] = $row['user_last'];
				$_SESSION['u_email'] = $row['user_email'];
				$_SESSION['u_uid'] = $row['user_uid'];
                echo"hello".$row['user_email'];			
        }
