<?php
session_start();
?>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<?php
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
$username_bb = filter_var($_POST['username_cc'], FILTER_SANITIZE_STRING);
$password_bb = password_hash($_POST['password_cc'], PASSWORD_DEFAULT);
$membership_bb = $_POST['membership_cc'];
$trainer_bb = $_POST['trainer_cc'];
$amount = $_COOKIE['amount'];



if ($trainer_bb > 0) {
    $description = "New Membership(with trainer)";
} else {
    $description = "New Membership";
}

$membership_type;

switch ($membership_bb) {
    case 2500:
        $membership_type = 1;
        break;

    case 7000:
        $membership_type = 3;
        break;

    case 13500:
        $membership_type = 6;
        break;

    case 20000:
        $membership_type = 12;
        break;
}

//echo 'trainer check done';

$user_insert = "INSERT INTO users (email, username, password, user_type ) VALUES ('$email_bb', '$username_bb', '$password_bb', 'member');";
$result0 = mysqli_query($conn, $user_insert);

$member_insert = "INSERT INTO member (f_name, l_name, gender, phone_no, dob, address, injuries,  username, assign_trainer ) VALUES ('$f_name_bb', '$l_name_bb', '$gender_bb', '$phone_no_bb', '$dob_bb', '$address_bb', '$injuries_bb', '$username_bb', '$trainer_bb');";
//echo 'query check done';
$result1 = mysqli_query($conn, $member_insert);

$member_select = "SELECT member_id FROM member WHERE username = '" . $username_bb . "'";
$result2 = mysqli_query($conn, $member_select);
$row2 = mysqli_fetch_array($result2);
$member_id = $row2['member_id'];

$payment_insert = "INSERT INTO payment (member_id, description, payment_amount, trainer_id, payment_type) VALUES('$member_id', '$description','$amount', '$trainer_bb', 'online');";
$result3 = mysqli_query($conn, $payment_insert);

$membership_insert = "INSERT INTO membership (member_id, membership_type) VALUES('$member_id', '$membership_type');";
$result4 = mysqli_query($conn, $membership_insert);

if ($trainer_bb > 0) {
    $tr_query = "SELECT * FROM trainer_receviables WHERE trainer_id = '" . $trainer_bb . "'";
    $tr_result = mysqli_query($conn, $tr_query);
    $tr_row = mysqli_fetch_assoc($tr_result);

    $count = $tr_row['assignment_count'];

    date_default_timezone_set('Asia/Colombo');
    $date = date('Y-m-d');
    $exp_date = date('Y-m-d', strtotime("+30 day", strtotime("$date")));

    $assignment_insert = "INSERT INTO assignment (member_id, trainer_id, start_date, end_date) VALUES('$member_id','$trainer_bb', '$date','$exp_date');";
    $result5 = mysqli_query($conn, $assignment_insert);

    $count = $count + 1;

    $tr_payment_insert = "UPDATE trainer_receviables SET assignment_count = '$count' WHERE trainer_id='$trainer_bb';";
    $rece_update = mysqli_query($conn, $tr_payment_insert);

    $tr_query2 = "SELECT * FROM trainer WHERE trainer_id = '$trainer_bb'";
    $tr_result2 = mysqli_query($conn, $tr_query2);
    $tr_row2 = mysqli_fetch_assoc($tr_result2);
    $count2 = $tr_row2['assigned_members'];
    $count2 += 1;

    $tr_payment_insert2 = "UPDATE trainer SET assigned_members = '$count2' WHERE trainer_id='$trainer_bb';";
    $rece_update2 = mysqli_query($conn, $tr_payment_insert2);
}
//echo $result;

// if ($membership_type == 1) {
//     $peogress_sql = "INSERT INTO 1m_package_progrss (member_id) VALUES ('$member_id');";
//     $progress_sql_result = mysqli_query($conn, $progress_sql);
// }

switch ($membership_type) {
    case 1:
        $progress_sql = "INSERT INTO 1m_package_progress (member_id) VALUES ('$member_id');";
        $progress_sql_result = mysqli_query($conn, $progress_sql);
        break;

    case 3:
        $progress_sql = "INSERT INTO 3m_package_progress (member_id) VALUES ('$member_id');";
        $progress_sql_result = mysqli_query($conn, $progress_sql);
        break;

    case 6:
        $progress_sql = "INSERT INTO 6m_package_progress (member_id) VALUES ('$member_id');";
        $progress_sql_result = mysqli_query($conn, $progress_sql);
        break;

    case 12:
        $progress_sql = "INSERT INTO 12m_package_progress (member_id) VALUES ('$member_id');";
        $progress_sql_result = mysqli_query($conn, $progress_sql);
        break;
}

if ($trainer_bb > 0) {

    $meal_plan_sql = "INSERT INTO meal_plan (member_id, trainer_id) VALUES ('$member_id' , '$trainer_bb');";
    $meal_plan_sql_result = mysqli_query($conn, $meal_plan_sql);
} else {

    $meal_plan_sql = "INSERT INTO meal_plan (member_id) VALUES ('$member_id');";
    $meal_plan_sql_result = mysqli_query($conn, $meal_plan_sql);
}

$schedule_insert = "INSERT INTO schedule (member_id) VALUES ('$member_id');";
$scedule_insert_result = mysqli_query($conn, $schedule_insert);

if ($result0 && $result1 && $result3 && $result4) {
    $_SESSION['notification'] = "Account successfully created";
    $_SESSION['username'] = $username_bb;

    header('Location: QRcode/index.php');
} else {
    header("Location: index.php");
    echo die(mysqli_error($conn));
}
?>