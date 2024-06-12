<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

if (isset($_POST['submit'])) {
    include_once 'db-include.php';

    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $uid = $_REQUEST['uid'];
    $pwd = $_REQUEST['pwd'];
    $cpwd = $_REQUEST['cpwd'];

    if (empty($fname) || empty($lname) || empty($email) || empty($uid) || empty($pwd) || empty($cpwd)) {
        echo '<script>alert("All Fields are Mandatory")</script>';
    } else {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)) {
            echo '<script>alert("Please enter valid username")</script>';
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo '<script>alert("Please enter valid email")</script>';
            } else {
                if ($pwd != $cpwd) {
                    echo '<script>alert("Password does not match")</script>';
                } else {
                    if ($conn) {
                        $sql = "SELECT * FROM users WHERE user_uid='$uid'";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);
                        if ($resultCheck > 0) {
                            echo '<script>alert("Please enter valid username")</script>';
                        } else {
                            $pwdHash = password_hash($pwd, PASSWORD_DEFAULT);
                            $sql_ins = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd, datee) VALUES ('$fname', '$lname', '$email', '$uid', '$pwdHash', current_timestamp());";
                            mysqli_query($conn, $sql_ins);
                            echo '<script>alert("Successful")</script>';
                            header("Location: ../login.php");
                            exit();
                        }
                    } else {
                        echo '<script>alert("We are experiencing technical difficulties. Please try again later.")</script>';
                    }
                }
            }
        }
    }
} else {
    header("Location: ./signup.php");
    exit();
}
?>
