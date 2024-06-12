<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

if (isset($_POST['submit'])) {
    session_unset(); // Only the data is truncated here
    session_destroy(); // Whole session is destroyed
    header("Location: ../home.html");
    exit();
} else {
    header("Location: ../home.html");
    exit();
}
?>
