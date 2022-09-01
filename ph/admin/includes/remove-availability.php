<?php

include "check_login.php";

$close_time_id = $_GET['close_time_id'];

//echo $close_time_id;

$sql1 = "DELETE FROM close_times WHERE close_time_id= '$close_time_id'";
$result = mysqli_query($conn, $sql1);

if ($result) {

    header("location: ../close-times.php");
    $_SESSION['notification'] = "Successfully removed";
}
