<?php

session_start();

require "includes/db.php";


// print_r($_POST);

$f_name_bb  = filter_var($_POST['f_name_cc'], FILTER_SANITIZE_STRING);
$l_name_bb = filter_var($_POST['l_name_cc'], FILTER_SANITIZE_STRING);
$gender_bb  = filter_var($_POST['gender_cc'], FILTER_SANITIZE_STRING);
$phone_no_bb = filter_var($_POST['phone_no_cc'], FILTER_SANITIZE_NUMBER_INT);
$dob_bb = $_POST['dob_cc'];
$address_bb = filter_var($_POST['address_cc'], FILTER_SANITIZE_STRING);
$injuries_bb = filter_var($_POST['injuries_cc'], FILTER_SANITIZE_STRING);
$email_bb = filter_var($_POST['email_cc'], FILTER_SANITIZE_EMAIL);
$username_bb = $_POST['username_cc'];

echo "$f_name_bb";

if (isset($_POST['username_cc'])) {
    echo "$username_bb";
} else {
    echo "not set";
}
