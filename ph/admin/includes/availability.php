<?php
include "check_login.php";
date_default_timezone_set("Asia/Colombo");

// if ($_SESSION['notification']) {
//     unset($_SESSION['notification']);
// }

if (isset($_POST['date-submit'])) {
    // $trainer_id = $_SESSION['trainer_id'];
    $date = $_POST['date'];
    $date = date("Y-m-d", strtotime($date));
    $slot = $_POST['time'];
    $currentTime = time();
    $check = 0;

    $date_check = "SELECT * FROM close_times";
    $date_check_result = mysqli_query($conn, $date_check);

    while ($date_check_row = mysqli_fetch_assoc($date_check_result)) {
        $seted_date = $date_check_row['date'];
        $seted_date_id = $date_check_row['close_time_id'];
        //$time_slot = $availability_row['time_slot'];

        if ($seted_date == $date) {
            $update_query = "UPDATE close_times SET time_slot = '$slot' WHERE close_time_id = '$seted_date_id'";
            $sql_result0 = mysqli_query($conn, $update_query);




            // if ($sql_result0) {
            //     echo "Done";
            // } else {
            //     echo "awl";
            // }
            $check = 1;
        }
    }


    //if ($date !== date("Y-m-d")) {

    if ($check == 0) {

        $sql_query = "INSERT INTO close_times( date, time_slot) VALUES('$date','$slot')";
        $sql_result = mysqli_query($conn, $sql_query);
    }

    $member_message = "Dear member, please note that Power House will be closed on $seted_date ($slot time slot). All bookings of the closed time slot will be cancelled. Sorry for the inconvienience.";

    $trainer_message = "Dear Power Housian, please note that Power House will be closed on $seted_date ($slot time slot). All bookings of the closed time slot will be cancelled. Sorry for the inconvienience.";

    require_once('../sms/autoload.php');




    $sql_cancel = "SELECT * FROM member";
    $sql_cancel_reult = mysqli_query($conn, $sql_cancel);
    while ($row_cancel = mysqli_fetch_assoc($sql_cancel_reult)) {

        //echo "sdfsf";
        $api_instance = new NotifyLk\Api\SmsApi();
        $phone_no = $row_cancel['phone_no'];
        $user_id = "15842"; // string | API User ID - Can be found in your settings page.
        $api_key = "lzjrr3jD4OsH4lbqVqPj"; // string | API Key - Can be found in your settings page.
        $message = $member_message; // string | Text of the message. 320 chars max.
        $to = "94" . $phone_no; // string | Number to send the SMS. Better to use 9471XXXXXXX format.
        $sender_id = "NotifyDEMO"; // string | This is the from name recipient will see as the sender of the SMS. Use \\\"NotifyDemo\\\" if you have not ordered your own sender ID yet.
        $contact_fname = "Bim"; // string | Contact First Name - This will be used while saving the phone number in your Notify contacts (optional).
        $contact_lname = "Sak"; // string | Contact Last Name - This will be used while saving the phone number in your Notify contacts (optional).
        $contact_email = ""; // string | Contact Email Address - This will be used while saving the phone number in your Notify contacts (optional).
        $contact_address = ""; // string | Contact Physical Address - This will be used while saving the phone number in your Notify contacts (optional).
        $contact_group = 0; // int | A group ID to associate the saving contact with (optional).
        $type = null; // string | Message type. Provide as unicode to support unicode (optional).

        try {
            $api_instance->sendSMS($user_id, $api_key, $message, $to, $sender_id, $contact_fname, $contact_lname, $contact_email, $contact_address, $contact_group, $type);
        } catch (Exception $e) {
            echo 'Exception when calling SmsApi->sendSMS: ', $e->getMessage(), PHP_EOL;
        }
    }

    $sql_cancel2 = "SELECT * FROM trainer";
    $sql_cancel_reult2 = mysqli_query($conn, $sql_cancel2);
    while ($row_cancel2 = mysqli_fetch_assoc($sql_cancel_reult2)) {

        //echo "sdfsf";
        $api_instance = new NotifyLk\Api\SmsApi();
        $phone_no = $row_cancel2['phone_no'];
        $user_id = "15842"; // string | API User ID - Can be found in your settings page.
        $api_key = "lzjrr3jD4OsH4lbqVqPj"; // string | API Key - Can be found in your settings page.
        $message = $member_message; // string | Text of the message. 320 chars max.
        $to = "94" . $phone_no; // string | Number to send the SMS. Better to use 9471XXXXXXX format.
        $sender_id = "NotifyDEMO"; // string | This is the from name recipient will see as the sender of the SMS. Use \\\"NotifyDemo\\\" if you have not ordered your own sender ID yet.
        $contact_fname = "Bim"; // string | Contact First Name - This will be used while saving the phone number in your Notify contacts (optional).
        $contact_lname = "Sak"; // string | Contact Last Name - This will be used while saving the phone number in your Notify contacts (optional).
        $contact_email = ""; // string | Contact Email Address - This will be used while saving the phone number in your Notify contacts (optional).
        $contact_address = ""; // string | Contact Physical Address - This will be used while saving the phone number in your Notify contacts (optional).
        $contact_group = 0; // int | A group ID to associate the saving contact with (optional).
        $type = null; // string | Message type. Provide as unicode to support unicode (optional).

        try {
            $api_instance->sendSMS($user_id, $api_key, $message, $to, $sender_id, $contact_fname, $contact_lname, $contact_email, $contact_address, $contact_group, $type);
        } catch (Exception $e) {
            echo 'Exception when calling SmsApi->sendSMS: ', $e->getMessage(), PHP_EOL;
        }
    }



    if ($sql_result0 || $sql_result) {

        header("location: ../close-times.php");
        $_SESSION['notification'] = "Successfully set close time";
    }

    // } elseif (((int) date('H', $currentTime)) <= 06 && ($slot == "All day" || $slot == "Morning" || $slot == "Evening")) {
    //     $sql_query = "INSERT INTO availability(trainer_id, date, time_slot) VALUES('$trainer_id','$date','$slot')";
    //     mysqli_query($conn, $sql_query);
    //     header("location: ../calendar.php");
    //     $_SESSION['notification'] = "Successfully set availability";
    // } elseif (((int) date('H', $currentTime)) <= 14 && $slot == "Evening") {
    //     $sql_query = "INSERT INTO availability(trainer_id, date, time_slot) VALUES('$trainer_id','$date','$slot')";
    //     mysqli_query($conn, $sql_query);
    //     header("location: ../calendar.php");
    //     $_SESSION['notification'] = "Successfully set availability";
    // } else {
    //     header("location: ../calendar.php");
    //     $_SESSION['notification'] = "Please select a valid time-slot";
    // }
}
