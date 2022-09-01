<?php

session_start();

require "db.php";
$username = $_SESSION['username'];


$query1 = "SELECT * FROM member WHERE username = '".$username."'";
$result1 = mysqli_query($conn, $query1);
$row1= mysqli_fetch_assoc($result1);

$member_id = $row1['member_id']; 

$query2 = "SELECT * FROM membership WHERE member_id = '".$member_id."'";
$result2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($result2);


$package_type = $row2['membership_type'];

$find_prog = "SELECT * FROM {$package_type}m_package_progress WHERE member_id='$member_id';";
$prog_result = mysqli_query($conn, $find_prog);
$result_row = mysqli_fetch_assoc($prog_result);

$bmi_values = $result_row['bmi_values'];


header('Content-Type: application/json');
$respo = $bmi_values;

echo json_encode($respo) ;

die;