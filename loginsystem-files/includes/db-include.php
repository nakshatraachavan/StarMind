<?php
error_reporting(E_ERROR | E_PARSE);

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("We are experiencing technical difficulties. Please try again later.");
}
?>
