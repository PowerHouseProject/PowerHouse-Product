<?php
include "includes/check_login.php";
//session_start();

//require "includes/db.php";


$username = $_POST['username'];

$sql = "DELETE FROM users where username = '$username'";
$result = mysqli_query($conn, $sql);

$count_sql4 = "SELECT * FROM member_drops";
$count_result4 = mysqli_query($conn, $count_sql4);
$count_drops = mysqli_fetch_assoc($count_result4);

$member_drops = $count_drops['count'];
$member_drops = $member_drops + 1;

$sql2 = "UPDATE member_drops SET count = '$member_drops' ";
$count_result5 = mysqli_query($conn, $sql2);



if ($result && $count_result5) {
    $_SESSION['notification'] = "Member Deleted!";
    // $_SESSION['username'] = $username_bb;
    header('Location: members.php');
    // echo "done";
} else {
    // header("Location: index.php");
    echo die(mysqli_error($conn));
}
