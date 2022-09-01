<?php

session_start();

if ($_SESSION['notification']) {
    unset($_SESSION['notification']);
}

require "db.php";

$username = $_SESSION['username'];
// print_r($_POST);

$f_name_bb  = filter_var($_POST['f_name_cc'], FILTER_SANITIZE_STRING);
$l_name_bb = filter_var($_POST['l_name_cc'], FILTER_SANITIZE_STRING);
$gender_bb  = filter_var($_POST['gender_cc'], FILTER_SANITIZE_STRING);
$phone_no_bb = filter_var($_POST['phone_no_cc'], FILTER_SANITIZE_NUMBER_INT);
//$dob_bb = $_POST['dob_cc'];
$address_bb = filter_var($_POST['address_cc'], FILTER_SANITIZE_STRING);
//$injuries_bb = filter_var($_POST['injuries_cc'], FILTER_SANITIZE_STRING);

$admin_insert = "UPDATE trainer SET f_name = '$f_name_bb', l_name='$l_name_bb', gender='$gender_bb', phone_no='$phone_no_bb',  address='$address_bb' WHERE username = '$username';";

$result1 = mysqli_query($conn, $admin_insert);

if ($result1) {
    $_SESSION['notification'] = "Profile updated successfully !";
    header('Location: ../profile.php');
} else {
    $_SESSION['notification'] = "Profile update failed !";
    header('Location: ../profile.php');
    echo die(mysqli_error($conn));
}
