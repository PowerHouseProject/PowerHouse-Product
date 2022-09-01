<?php

session_start();

require "db.php";

$username = $_SESSION['username'];


$query1 = "SELECT * FROM member WHERE username = '".$username."'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

$member_id = $row1['member_id'];

    $query1 = "SELECT time_slot FROM availability WHERE date = '".$date."' AND trainer_id = $trainer_id ";
    $result1 = mysqli_query($conn, $query1);

    if (mysqli_num_rows($result1)) {
        $response['set'] ='Done';

        $row = mysqli_fetch_array($result1);
        $slot = $row['time_slot'];


    }

    header('Content-Type: application/json');
    $respo = json_encode($response);
    echo $respo ;

    die;