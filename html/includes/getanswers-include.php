<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

if (isset($_POST['submit'])) {
    include_once 'db-include.php';
    $ques_id = $_COOKIE["ques_id"];
    $ans = $_REQUEST['ans'];
    $uid = $_COOKIE["u_uid"];

    if (empty($ques_id)) {
        header("Location: ../qanda.php");
        exit();
    }

    if (empty($ans) || empty($uid)) {
        header("Location: ../qanda.php");
        exit();
    }

    if ($conn) {
        $sql_ins = "INSERT INTO answers (ques_id, ans, ans_uid) VALUES ('$ques_id', '$ans', '$uid');";
        mysqli_query($conn, $sql_ins);
    } else {
        echo "We are experiencing technical difficulties. Please try again later.";
    }

    header("Location: ../qanda.php");
    exit();
} else {
    header("Location: ../qanda.php");
    exit();
}
?>
