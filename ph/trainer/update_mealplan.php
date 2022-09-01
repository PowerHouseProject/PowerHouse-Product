<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();

if ($_SESSION['notification']) {
    unset($_SESSION['notification']);
}

require "includes/db.php";

$member_id = $_GET['member_id'];

               
$monday_bkft = $_POST['mon_b'];$tuseday_bkft = $_POST['tus_b'];$wednesday_bkft = $_POST['wed_b'];$thursday_bkft = $_POST['thu_b'];$friday_bkft = $_POST['fri_b'];$saturday_bkft = $_POST['sat_b'];$sunday_bkft = $_POST['sun_b'];
$monday_msnk = $_POST['mon_ms'];$tuseday_msnk = $_POST['tus_ms'];$wednesday_msnk = $_POST['wed_ms'];$thursday_msnk = $_POST['thu_ms'];$friday_msnk = $_POST['fri_ms'];$saturday_msnk = $_POST['sat_ms'];$sunday_msnk = $_POST['sun_ms'];
$monday_lunch = $_POST['mon_l'];$tuseday_lunch = $_POST['tus_l'];$wednesday_lunch = $_POST['wed_l'];$thursday_lunch = $_POST['thu_l'];$friday_lunch = $_POST['fri_l'];$saturday_lunch = $_POST['sat_l'];$sunday_lunch = $_POST['sun_l'];
$monday_esnk = $_POST['mon_esn'];$tuseday_esnk = $_POST['tus_esn'];$wednesday_esnk = $_POST['wed_esn'];$thursday_esnk = $_POST['thu_esn'];$friday_esnk = $_POST['fri_esn'];$saturday_esnk = $_POST['sat_esn'];$sunday_esnk = $_POST['sun_esn']; 
$monday_din = $_POST['mon_di'];$tuseday_din = $_POST['tus_di'];$wednesday_din = $_POST['wed_di'];$thursday_din = $_POST['thu_di'];$friday_din = $_POST['fri_di'];$saturday_din = $_POST['sat_di'];$sunday_din = $_POST['sun_di'];


$mealplan_insert = "UPDATE meal_plan SET monday_bkft='$monday_bkft', tuseday_bkft='$tuseday_bkft',wednesday_bkft='$wednesday_bkft',thursday_bkft='$thursday_bkft',friday_bkft='$friday_bkft',saturday_bkft='$saturday_bkft',sunday_bkft='$sunday_bkft',
monday_msnk='$monday_msnk', tuseday_msnk='$tuseday_msnk',wednesday_msnk='$wednesday_msnk',thursday_msnk='$thursday_msnk',friday_msnk='$friday_msnk',saturday_msnk='$saturday_msnk',sunday_msnk='$sunday_msnk',
monday_lunch='$monday_lunch', tuseday_lunch='$tuseday_lunch',wednesday_lunch='$wednesday_lunch',thursday_lunch='$thursday_lunch',friday_lunch='$friday_lunch',saturday_lunch='$saturday_lunch',sunday_lunch='$sunday_lunch',
monday_esnk='$monday_esnk', tuseday_esnk='$tuseday_esnk',wednesday_esnk='$wednesday_esnk',thursday_esnk='$thursday_esnk',friday_esnk='$friday_esnk',saturday_esnk='$saturday_esnk',sunday_esnk='$sunday_esnk',
monday_din='$monday_din', tuseday_din='$tuseday_din',wednesday_din='$wednesday_din',thursday_din='$thursday_din',friday_din='$friday_din',saturday_din='$saturday_din',sunday_din='$sunday_din'
WHERE member_id='$member_id';";


$result2 = mysqli_query($conn, $mealplan_insert);

$sql1= "SELECT username from member WHERE member_id='" .$member_id. "'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$username = $row1['username'];

$sql3= "SELECT email from users WHERE username='" .$username. "'";
$result3 = mysqli_query($conn,$sql3);
$row3 = mysqli_fetch_assoc($result3);
$userEmail = $row3['email'];

$url = "http://localhost/Group_CS21/root/member/mealplan.php";

$to = $userEmail;
    $subject = "Meal plan and schedule updated";

    $message = '<html><head>
    </head><body style="background-color:black;">
    
   
<img src="cid:logo" height="100px" style="display:block; margin-left:auto; margin-right:auto; padding-top:40px">

<p style="color:#CECECF; padding-left:100px; padding-right:100px; padding-bottom:50px; font-size:15px; text-align:center;">Please note that your Meal plan and schedule has been updated by your trainer.  
Please check the updated meal plan and schedule. Thank you, STAY WITH POWERHOUSE. '.$url.'.
 </p>
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
    $mail->send();
    echo 'Message has been sent';

if ($result2) {
    $_SESSION['notification'] = "Successfully UPDATED the meal plan!";
    header('location: meal_plan.php?member_id='.$member_id.'');
} else {
    echo die(mysqli_error($conn));
}

?>