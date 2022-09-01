<?php

session_start();

if ($_SESSION['notification']) {
    unset($_SESSION['notification']);
}

require "includes/db.php";
//getting required data for queries
$username = $_SESSION['username'];
$amount = $_POST['amount'];
$payment_type = "Online";


$query1 = "SELECT * FROM member WHERE username = '".$username."'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

$member_id = $row1['member_id'];
$trainer = $row1['assign_trainer'];

date_default_timezone_set('Asia/Colombo');
$date = date('Y-m-d');

//getting the membership package from the payment value for membership
if($amount =='2500'){$membership_type=1;}else if($amount =='7000'){$membership_type=3;}else if($amount =='10000'){$membership_type=6;}else if($amount =='20000'){$membership_type=12;}   

//renew membership after the payment inserting
$payment_insert = "INSERT INTO payment (member_id, description, payment_amount, trainer_id, payment_type) VALUES('$member_id', 'Renew Membership','$amount', '$trainer','$payment_type');";
$result2 = mysqli_query($conn, $payment_insert);

$query4 = "UPDATE membership SET membership_type = '$membership_type', joined_date='$date' WHERE member_id = '".$member_id."'";
$result4 = mysqli_query($conn, $query4);

if ($result1 && $result2 && $result4) {
    $_SESSION['notification'] = "Successfully Extended the period !";
    $_SESSION['subscription'] = "Valid";
    header('Location: membership.php');
} else {
    echo die(mysqli_error($conn));
}