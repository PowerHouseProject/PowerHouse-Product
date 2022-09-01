<?php

include "includes/check_login.php";

//require "includes/db.php";


// print_r($_POST);

$f_name_bb  = filter_var($_POST['f_name_cc'], FILTER_SANITIZE_STRING);
$l_name_bb = filter_var($_POST['l_name_cc'], FILTER_SANITIZE_STRING);
$gender_bb  = filter_var($_POST['gender_cc'], FILTER_SANITIZE_STRING);
$phone_no_bb = filter_var($_POST['phone_no_cc'], FILTER_SANITIZE_NUMBER_INT);
$dob_bb = $_POST['dob_cc'];
$address_bb = filter_var($_POST['address_cc'], FILTER_SANITIZE_STRING);
//$injuries_bb = filter_var($_POST['injuries_cc'], FILTER_SANITIZE_STRING);
$email_bb = filter_var($_POST['email_cc'], FILTER_SANITIZE_EMAIL);
$username_bb = $_POST['username_cc'];
// $password_bb = password_hash($_POST['password_cc'], PASSWORD_DEFAULT);
// $membership_bb = $_POST['membership_cc'];
// $trainer_bb = $_POST['trainer_cc'];
// $amount = $_COOKIE['amount'];



// if ($trainer_bb > 0) {
//     $assign_trainer_bb = 1;
// } else {
//     $assign_trainer_bb = 0;
// }

// $membership_type;

// switch ($membership_bb) {
//     case 2500:
//         $membership_type = 1;
//         break;

//     case 7000:
//         $membership_type = 3;
//         break;

//     case 13500:
//         $membership_type = 6;
//         break;

//     case 20000:
//         $membership_type = 12;
//         break;
// }

// echo 'trainer check done';

$user_update = "UPDATE users SET email = '$email_bb' WHERE username = '$username_bb'";

$result0 = mysqli_query($conn, $user_update);

$member_update = "UPDATE accountant SET f_name = '$f_name_bb' , l_name= '$l_name_bb' , gender = '$gender_bb', address = '$address_bb' , phone_no = '$phone_no_bb' WHERE username = '$username_bb'";
// echo 'query check done';

$result1 = mysqli_query($conn, $member_update);

// $member_select = "SELECT member_id FROM member WHERE username = '$username_bb'";

// $result2 = mysqli_query($conn, $member_select);
// $row2 = mysqli_fetch_array($result2);
// $member_id = $row2['member_id'];

// $payment_insert = "INSERT INTO payment (member_id, payment_amount, trainer_id, payment_type) VALUES('$member_id', '$amount', '$trainer_bb', 'offline');";

// $result3 = mysqli_query($conn, $payment_insert);

// $membership_insert = "INSERT INTO membership (member_id, membership_type) VALUES('$member_id', '$membership_type');";
// $result4 = mysqli_query($conn, $membership_insert);

// echo $result;

if ($result0 && $result1) {
    $_SESSION['notification'] = "Details updated successfully!";
    // $_SESSION['username'] = $username_bb;
    header("Location: update-accountant.php?username=$username_bb");
    // echo "done";
} else {
    //header("Location: index.php");
    echo die(mysqli_error($conn));
}

// if ($result0) {
//     echo "one done";
// } else {
//     echo "one not done";
// }

// if ($result1) {
//     echo "two done";
// } else {
//     echo "two not done";
// }
