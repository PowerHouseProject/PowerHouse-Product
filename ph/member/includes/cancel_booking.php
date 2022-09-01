<?php

session_start();
require "db.php";

$time_id = $_GET['book_id'];



$sql2 = "SELECT * FROM book WHERE book_id = '$time_id'";

$sqlrr = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($sqlrr);

$trainer_id = $row['trainer_id'];
$member_id = $row['member_id'];
$date = $row['date'];


$sql3 = "SELECT * FROM trainer WHERE trainer_id = '$trainer_id'";

$sqlrrr = mysqli_query($conn, $sql3);
$row2 = mysqli_fetch_assoc($sqlrrr);
$phone_no = $row2['phone_no'];

$sql4 = "SELECT * FROM member WHERE member_id = '$member_id'";

$sqlrrrr = mysqli_query($conn, $sql4);
$row3 = mysqli_fetch_assoc($sqlrrrr);

$f_name = $row3['f_name'];

if ($sqlrr && $sqlrrr && $sqlrrrr) {
    echo "Done";
} else {
    echo "Not done";
}



$member_message = "Dear trainer, please note that your member $f_name has cancelled your booking on $date";

// $trainer_message = "Dear Power Housian, please note that Power House will be closed on $seted_date ($slot time slot). All bookings of the closed time slot will be cancelled. Sorry for the inconvienience.";

require_once('../sms/autoload.php');




// //

//echo "sdfsf";
$api_instance = new NotifyLk\Api\SmsApi();
//$phone_no = $row_cancel['phone_no'];
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
//}

$sql1 = "DELETE FROM book WHERE book_id= '" . $time_id . "'";
mysqli_query($conn, $sql1);



header("location: ../booking.php");
$_SESSION['notification'] = "Successfully Canceled the booking !";
