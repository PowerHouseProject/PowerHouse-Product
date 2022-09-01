
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();

// if ($_SESSION['notification']) {
//     unset($_SESSION['notification']);
// }

require "includes/db.php";

$member_id = $_GET['member_id'];

$sql1 = "SELECT username from member WHERE member_id='" . $member_id . "'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);
$username = $row1['username'];

$sql3 = "SELECT email from users WHERE username='" . $username . "'";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($result3);
$userEmail = $row3['email'];

for ($m = 1; $m <= 6; $m++) {
    for ($n = 1; $n <= 7; $n++) {
        if (isset($_POST["D{$n}_{$m}1"])) {
            if ($_POST["D{$n}_{$m}1"] != '0') {
                $i = $_POST["D{$n}_{$m}1"];
                $j = $_POST["D{$n}_{$m}2"];
                $k = $_POST["D{$n}_{$m}3"];
                $l = $_POST["D{$n}_{$m}4"];

                $day_ex = array("$i", "$j", "$k", "$l");

                $dayex_rs = base64_encode(serialize($day_ex));
                $week = array("day1_ex$m", "day2_ex$m", "day3_ex$m", "day4_ex$m", "day5_ex$m", "day6_ex$m", "day7_ex$m");

                $column = $week[$n - 1];

                $schedule_insert = "UPDATE schedule SET $column ='$dayex_rs' WHERE member_id='$member_id';";
                $result2 = mysqli_query($conn, $schedule_insert);
            } else {
                $i = $_POST["D{$n}_{$m}1"];

                $day_ex = array("$i");

                $dayex_rs = base64_encode(serialize($day_ex));
                $week = array("day1_ex$m", "day2_ex$m", "day3_ex$m", "day4_ex$m", "day5_ex$m", "day6_ex$m", "day7_ex$m");

                $column = $week[$n - 1];

                $schedule_insert = "UPDATE schedule SET $column ='$dayex_rs' WHERE member_id='$member_id';";
                $result2 = mysqli_query($conn, $schedule_insert);
            }

            if (!$result2) {
                break;
            }
        } else {
            $week = array("day1_ex$m", "day2_ex$m", "day3_ex$m", "day4_ex$m", "day5_ex$m", "day6_ex$m", "day7_ex$m");

            $column = $week[$n - 1];

            $schedule_insert = "UPDATE schedule SET $column =NULL WHERE member_id='$member_id';";
            $result2 = mysqli_query($conn, $schedule_insert);
            if (!$result2) {
                break;
            }
        }
    }
    if (!$result2) {
        break;
    }
}

$url = "http://localhost/Group_CS21/root/member/mealplan.php";

$to = $userEmail;
$subject = "Meal plan and schedule updated";

$message = '<html><head>
    </head><body style="background-color:black;">
    
   
<img src="cid:logo" height="100px" style="display:block; margin-left:auto; margin-right:auto; padding-top:40px">

<p style="color:#CECECF; padding-left:100px; padding-right:100px; padding-bottom:50px; font-size:15px; text-align:center;">Please note that your Meal plan and schedule has been updated by your trainer.  
Please check the updated meal plan and schedule. Thank you, STAY WITH POWERHOUSE. ' . $url . '.
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

if ($result1 && $result2) {
    $_SESSION['notification'] = " Successfully UPDATED the schedule !";
    header("Location: meal_plan.php?member_id=" . $member_id);
} else {
    echo die(mysqli_error($conn));
}
