<?php

session_start();

require "db.php";
$username = $_SESSION['username'];



$response = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

date_default_timezone_set('Asia/Colombo');
$date = date("Y");

$query2 = "SELECT * FROM payment WHERE YEAR(payment_date) = $date;";
$result2 = mysqli_query($conn, $query2);

while ($row2 = mysqli_fetch_assoc($result2)) {

  $amount = $row2['payment_amount'];
  $temp_date = $row2['payment_date'];

  $month = date("m", strtotime($temp_date));

  $m = (int)$month;
  switch ($m) {
    case 1:
      $response[0] = $amount + $response[0];
      break;
    case 2:
      $response[1] = $amount + $response[1];
      break;
    case 3:
      $response[2] = $amount + $response[2];
      break;
    case 4:
      $response[3] = $amount + $response[3];
      break;
    case 5:
      $response[4] = $amount + $response[4];
      break;
    case 6:
      $response[5] = $amount + $response[5];
      break;
    case 7:
      $response[6] = $amount + $response[6];
      break;
    case 8:
      $response[7] = $amount + $response[7];
      break;
    case 9:
      $response[8] = $amount + $response[8];
      break;
    case 10:
      $response[9] = $amount + $response[9];
      break;
    case 11:
      $response[10] = $amount + $response[10];
      break;
    case 12:
      $response[11] = $amount + $response[11];
      break;
  }
}

$response[0] = 75000;
$response[1] = 100000;

header('Content-Type: application/json');
$respo = $response;

echo json_encode($respo);

die;
