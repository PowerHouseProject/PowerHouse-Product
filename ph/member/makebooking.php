<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();

if (isset($_SESSION['notification'])) {
    unset($_SESSION['notification']);
}

require "includes/db.php";
// getting booking data
$username = $_SESSION['username'];
$slot = $_POST['time_cc'];
$date = $_POST['date_cc'];

// do queries for the relevant data which required to make the booking complete
$query1 = "SELECT * FROM member WHERE username = '".$username."'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

$member_id = $row1['member_id'];
$trainer_id = $row1['assign_trainer'];

$query3 = "SELECT * FROM trainer WHERE trainer_id = '".$trainer_id."'";
$result3 = mysqli_query($conn, $query3);
$row3 = mysqli_fetch_assoc($result3);

$trainer_name=$row3['username'];
$phone_no = $row3['phone_no'];

$query2 = "SELECT * FROM users WHERE username = '".$trainer_name."'";
$result2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($result2);

$userEmail=$row2['email'];

// selecting the assignment duration to avoid booking days after the trainer assignment
$assignment_query = "SELECT * FROM assignment WHERE member_id =$member_id AND trainer_id =$trainer_id ORDER BY assignment_id DESC LIMIT 1;";
$assignment_result = mysqli_query($conn, $assignment_query);
$assignment_row = mysqli_fetch_assoc($assignment_result);

$t_assign_d = $assignment_row['start_date'];
$t_exp_d = $assignment_row['end_date'];

$check_date = new DateTime($date);
$t_assign_date = new DateTime($t_assign_d);
$t_exp_date = new DateTime($t_exp_d); 


$tr_interval = $check_date->diff($t_exp_date);

if($tr_interval->y > 0 || $tr_interval->m > 0 || $tr_interval->d >0){
    date_default_timezone_set('Asia/Colombo');
    $today = date('Y-m-d');
    $time = date('H:i:s');

//time slot formating for the booking
    if($slot == 1){ 
        $sel_Time = DateTime::createFromFormat('H\h i\m s\s','06h 00m 00s')->format('H:i:s');}
    else if($slot == 2){ 
        $sel_Time = DateTime::createFromFormat('H\h i\m s\s','08h 00m 00s')->format('H:i:s');}
    else if($slot == 3){ 
        $sel_Time = DateTime::createFromFormat('H\h i\m s\s','10h 00m 00s')->format('H:i:s');}
    else if($slot == 4){ 
        $sel_Time = DateTime::createFromFormat('H\h i\m s\s','12h 00m 00s')->format('H:i:s');}
    else if($slot == 5){ 
        $sel_Time = DateTime::createFromFormat('H\h i\m s\s','14h 00m 00s')->format('H:i:s');}
    else if($slot == 6){ 
        $sel_Time = DateTime::createFromFormat('H\h i\m s\s','16h 00m 00s')->format('H:i:s');}
    else if($slot == 7){ 
        $sel_Time = DateTime::createFromFormat('H\h i\m s\s','18h 00m 00s')->format('H:i:s');}
    else if($slot == 8){ 
        $sel_Time = DateTime::createFromFormat('H\h i\m s\s','20h 00m 00s')->format('H:i:s');}

    if( $sel_Time <= $time && date($date) == $today ){
            $_SESSION['notification'] = "Selected Time slot is Unavailable !";
            header('Location: booking.php');
    }else{
        $bookingforDay = "SELECT * FROM `book` WHERE member_id='".$member_id."' AND trainer_id='".$trainer_id."' AND date='".$date."';";
        $bk_result = mysqli_query($conn, $bookingforDay);

        if(mysqli_num_rows($bk_result) == 0){

            echo(mysqli_num_rows($bk_result));
            if($slot == 1){ $slot = '06:00:00';}else if($slot == 2){ $slot = '08:00:00';}else if($slot == 3){ $slot = '10:00:00';}else if($slot == 4){ $slot = '12:00:00';}else if($slot == 5){ $slot = '14:00:00';}else if($slot == 6){ $slot = '16:00:00';}else if($slot == 7){ $slot = '18:00:00';}else if($slot == 8){ $slot = '20:00:00';}

            $make_booking = "INSERT INTO book (trainer_id,member_id, date, time) VALUES('$trainer_id', '$member_id', '$date','$slot');";
            $result4 = mysqli_query($conn, $make_booking);
            
            if ($result1 && $result2 && $result3 && $result4) {
                    $to = $userEmail;
                    $subject = "You have a new booking";

                    $message = '<html><head>
    </head><body style="background-color:black;">
    
   
<img src="cid:logo" height="100px" style="display:block; margin-left:auto; margin-right:auto; padding-top:40px">

<p style="color:#CECECF; padding-left:100px; padding-right:100px; padding-bottom:50px; font-size:15px; text-align:center;">Please note that you have a new booking for the POWER HOUSE (Date: '.$date.') from '.$username.'. Thank you, STAY WITH POWERHOUSE.
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

                    require_once('sms/autoload.php');

                    $api_instance = new NotifyLk\Api\SmsApi();
                    $user_id = "15842"; // string | API User ID - Can be found in your settings page.
                    $api_key = "lzjrr3jD4OsH4lbqVqPj"; // string | API Key - Can be found in your settings page.
                    $message = "Please note that you have a new booking for the POWER HOUSE (Date: $date Time: $slot) from $username"; // string | Text of the message. 320 chars max.
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

                $_SESSION['notification'] = "Successfully Completed the booking !";
                header('Location: booking.php');          
            }else if(mysqli_num_rows($bk_result) != 0){
                $_SESSION['notification'] = "Unable to do the booking !";
                echo die(mysqli_error($conn));
            }
        }else{
            $_SESSION['notification'] = "Selected date already have a booking!";
            header('Location: booking.php');
        }
    }
}else{
    if ($result2 && $assignment_result) {
        $_SESSION['notification'] = "Sorry! Booking is out of assignment period!";
        header('Location: booking.php');          
    } else {
        $_SESSION['notification'] = "Unable to do the booking !";
        echo die(mysqli_error($conn));
    }
}





