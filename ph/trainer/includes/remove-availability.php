<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();
require "db.php";

$time_id = $_GET['time_id'];
$sql = "SELECT * FROM availability WHERE time_id= '".$time_id."'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$trainer_id=$row['trainer_id'];
$date = $row['date'];

$sql2= "SELECT * FROM book where trainer_id='".$trainer_id."' AND date='".$date."'";
$result2=mysqli_query($conn,$sql2);

while($row2=mysqli_fetch_assoc($result2)){
    $member_id=$row2['member_id'];
    $sql3 = "SELECT username,phone_no FROM member where member_id='".$member_id."'";
    $result3 = mysqli_query($conn, $sql3);
    $row3=mysqli_fetch_assoc($result3);
    $username=$row3['username'];
    $phone_no= $row3['phone_no'];

    $sql4 = "SELECT email FROM users where username='".$username."'";
    $result4 = mysqli_query($conn, $sql4);
    $row4=mysqli_fetch_assoc($result4);
    $userEmail = $row4['email'];

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
    $message = "Please note that your booking for the POWER HOUSE (Date: $date) has been cancelled by your trainer  "; // string | Text of the message. 320 chars max.
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
    
    
}
$sql1 = "DELETE FROM availability WHERE time_id= '".$time_id."'";
mysqli_query($conn,$sql1);

$sql5= "DELETE FROM book where trainer_id='".$trainer_id."' AND date='".$date."'";
mysqli_query($conn,$sql5);

header("location: ../calendar.php");  
$_SESSION['notification'] = "Successfully removed";
?>