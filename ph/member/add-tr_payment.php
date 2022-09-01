<?php

session_start();

// if (isset($_SESSION['notification'])) {
//     unset($_SESSION['notification']);
// }

require "includes/db.php";
//get required data
$username = $_SESSION['username'];
$trainer = $_GET['trainer_id'];
$payment_type = "Online";

// do queries to get data to do the trainer payment
$query2 = "SELECT * FROM trainer WHERE trainer_id = '".$trainer."'";
$result2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($result2);

$amount = $row2['rate'];

$query1 = "SELECT * FROM member WHERE username = '".$username."'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

$member_id = $row1['member_id'];

$tr_query = "SELECT * FROM trainer_receviables WHERE trainer_id = '".$trainer."'";
$tr_result = mysqli_query($conn, $tr_query);
$tr_row = mysqli_fetch_assoc($tr_result);
// need to update assignment count
$count = $tr_row['assignment_count'];
// completing the payment
$payment_insert = "INSERT INTO payment (member_id, description, payment_amount, trainer_id, payment_type) VALUES('$member_id', 'Trainer Assignment','$amount', '$trainer','$payment_type');";
$result2 = mysqli_query($conn, $payment_insert);

date_default_timezone_set('Asia/Colombo');
$date = date('Y-m-d');
$exp_date = date('Y-m-d',strtotime("+30 day", strtotime("$date")));

$assignment_insert = "INSERT INTO assignment (member_id, trainer_id, start_date, end_date) VALUES('$member_id','$trainer', '$date','$exp_date');";
$result3 = mysqli_query($conn, $assignment_insert);

$count = $count + 1;
//update receviable table
$tr_payment_insert = "UPDATE trainer_receviables SET assignment_count = '$count' WHERE trainer_id='$trainer';";
$rece_update = mysqli_query($conn, $tr_payment_insert);

$assignment_update = "UPDATE member set assign_trainer=$trainer WHERE member_id=$member_id";
$result4 = mysqli_query($conn, $assignment_update);

$tr_query2 = "SELECT * FROM trainer WHERE trainer_id = '$trainer'";
$tr_result2 = mysqli_query($conn, $tr_query2);
$tr_row2 = mysqli_fetch_assoc($tr_result2);
$count2 = $tr_row2['assigned_members'];
$count2 += 1;

$tr_payment_insert2 = "UPDATE trainer SET assigned_members = '$count2' WHERE trainer_id='$trainer';";
$rece_update2 = mysqli_query($conn, $tr_payment_insert2);

if ($result2 && $result3 && $result4 && $tr_result && $rece_update && $tr_result2 && $rece_update2) {
    $_SESSION['notification'] = "Successfully made the Assignment !";
    header('Location: membership.php');
} else {
    echo die(mysqli_error($conn));
}