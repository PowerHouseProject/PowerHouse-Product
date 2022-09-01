<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "../includes/db.php";

$username = $_SESSION['username'];
$sql1 = "SELECT member_id from member where username = '" . $username . "'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);

$member_id = $row1['member_id'];

$sql2 = "SELECT email FROM users WHERE username = '" . $username . "'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);

$userEmail = $row2['email'];

require_once 'phpqrcode/qrlib.php';

$path = 'QRimages/';
$file = $path . "$member_id" . "468.png";

$text = "http://localhost/Group_CS21/root/admin/scanQR.php?memberID=$member_id";

QRcode::png($text, $file, 'L', 10, 2);

"<cenetr><img src='" . $file . "'><center>";

$to = $userEmail;
$url = "https//:powerhouse.fitness.com";
$subject = "WELCOME TO THE POWER HOUSE";

$message = '<html><head>
    </head><body style="background-color:black;">
    
   
<img src="cid:logo" height="100px" style="display:block; margin-left:auto; margin-right:auto; padding-top:40px">

<p style="color:#CECECF; padding-left:100px; padding-right:100px; font-size:15px; text-align:center;">Hello ' . $username . ', Thanks for joining POWER HOUSE 
FITNESS ACADEMY – we’re excited to have you on board! You’ve taken the first step towards achieving your fitness goals. You’ll find our opening times, class timetable,
 and a list of what to bring on our ' . $url . '. If you have any questions, then please don’t hesitate to get in touch. 
 Simply call us on +9477 823 4904 or reply to this email and we’ll respond asap.

 Please provide this QR code to the academy staff in case they require.
 </p>
    
 <img src="cid:qr" height="100px" style="display:block; margin-left:auto; margin-right:auto; padding-top:20px; padding-bottom:30px;">
</body></html>';

require 'vendor/autoload.php';

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
$mail->addEmbeddedImage('QRimages/' . $member_id . '468.png', 'qr');
$mail->send();

?>
<script>
    window.location.assign('../../member/dashboard.php')
</script>