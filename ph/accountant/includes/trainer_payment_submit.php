<?php
// require "check_login.php";
require "db.php";
if (isset($_POST['form_submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];


    $sql1 = "SELECT * FROM trainer WHERE username = '" . $username . "' ";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);
    $trainer_id = $row1['trainer_id'];
    //$rate = $row1['rate'];


    date_default_timezone_set('Asia/Colombo');
    $date = date('Y-m-d');

    echo $trainer_id;
    echo $amount;
    echo $date;



    $sql3 = "INSERT INTO trainer_payables(trainer_id, amount, payment_date) VALUES('$trainer_id', '$amount', '$date')";
    $result3 = mysqli_query($conn, $sql3);


    $query4 = "UPDATE trainer_receviables SET  assignment_count = 0  WHERE trainer_id = '" . $trainer_id . "'";
    $result4 = mysqli_query($conn, $query4);

    if ($result1 && $result3 && $result4) {
        $_SESSION['notification'] = "Payment successfully";
        header("location:../trainer_payment.php");
    } else {
        echo die(mysqli_error($conn));
    }
}
