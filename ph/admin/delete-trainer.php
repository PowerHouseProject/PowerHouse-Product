<?php
include "includes/check_login.php";
//session_start();

//require "includes/db.php";


$username = $_POST['username'];

$sql = "DELETE FROM users where username = '$username'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $_SESSION['notification'] = "Trainer Deleted!";
    // $_SESSION['username'] = $username_bb;
    header('Location: trainers.php');
    // echo "done";
} else {
    // header("Location: index.php");
    echo die(mysqli_error($conn));
}
