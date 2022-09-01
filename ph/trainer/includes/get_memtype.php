<?php

session_start();

require "db.php";
$member_id = $_SESSION['mem_id'];
$sql1 = "SELECT username,f_name,l_name FROM member WHERE member_id='" . $member_id . "'";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);
$username = $row['username'];


$query1 = "SELECT * FROM member WHERE username = '" . $username . "'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

$member_id = $row1['member_id'];

$query2 = "SELECT * FROM membership WHERE member_id = '" . $member_id . "'";
$result2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($result2);


$membership_type = $row2['membership_type'];

header('Content-Type: application/json');
$respo2 = $membership_type;

echo json_encode($respo2);

die;
