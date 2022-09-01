<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
?>

<?php
session_start();
require "db.php";
date_default_timezone_set("Asia/Colombo");

$book_id = $_GET['book_id'];

$sql1= "SELECT * from book WHERE book_id='" .$book_id. "'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$member_id = $row1['member_id'];
$date= $row1['date'];
$time = $row1['time'];

$sql2= "SELECT username,phone_no from member WHERE member_id='" .$member_id. "'";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result2);
$username = $row2['username'];
$phone_no= $row2['phone_no'];

$sql3= "SELECT email from users WHERE username='" .$username. "'";
$result3 = mysqli_query($conn,$sql3);
$row3 = mysqli_fetch_assoc($result3);
$userEmail = $row3['email'];

$to = $userEmail;
    $subject = "Booking cancelled";

    $message = '<html><head>
    </head><body style="background-color:black;">
    
   
<img src="cid:logo" height="100px" style="display:block; margin-left:auto; margin-right:auto; padding-top:40px">

<p style="color:#CECECF; padding-left:100px; padding-right:100px; padding-bottom:50px; font-size:15px; text-align:center;">Please note that your booking for the POWER HOUSE (Date : '.$date.' Time: '.$time.') has been cancelled by your trainer.  
We are sorry about the inconvenience. Thank you, STAY WITH POWERHOUSE.
 </p>
</body></html>';

    require '../vendor/autoload.php';

    $mail = new PHPMailer(true);

    // try {
    $mail->SMTPDebug = 1;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'powerhouse.fitness.academy@gmail.com';                     //SMTP username
    $mail->Password   = 'Power@1234';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('powerhouse.fitness.academy@gmail.com');
    $mail->addAddress($to);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->addEmbeddedImage('logo.jpg', 'logo');
    $mail->send();
    echo 'Message has been sent';

require_once('sms/autoload.php');

$api_instance = new NotifyLk\Api\SmsApi();
$user_id = "15842"; // string | API User ID - Can be found in your settings page.
$api_key = "lzjrr3jD4OsH4lbqVqPj"; // string | API Key - Can be found in your settings page.
$message = "Please note that your booking for the POWER HOUSE (Date: $date Time: $time) has been cancelled by your trainer  "; // string | Text of the message. 320 chars max.
$to = "94$phone_no"; // string | Number to send the SMS. Better to use 9471XXXXXXX format.
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

$sql = "DELETE FROM book WHERE book_id= '".$book_id."'";
mysqli_query($conn,$sql);

header("location: ../bookings.php");  
$_SESSION['notification'] = "Successfully cancelled";
?>