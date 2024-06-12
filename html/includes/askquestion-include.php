<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

if (isset($_POST['submit'])) {
    include_once 'db-include.php';
    $ques = $_REQUEST['ques'];

    if (isset($_SESSION['u_id'])) {
        $uid = $_SESSION['u_uid'];
    }

    if (empty($ques) || empty($uid)) {
        header("Location: ../qanda.php");
        exit();
    }

    if ($conn) {
        $sql_ins = "INSERT INTO questions (ques, ques_uid, datee) VALUES ('$ques', '$uid', current_timestamp());";
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
