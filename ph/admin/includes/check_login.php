<?php session_start();

include 'db.php';

// include "db.php";

if (!(isset($_SESSION['username']) && $_SESSION['user_type'] == 'admin')) {
    header('Location: ../../root/login/index.php');
    exit;
}

// global $conn;

// $username = $_SESSION['username'];
// $query = "SELECT user_type from users WHERE username ='" . $username . "'";
// $result = mysqli_query($conn, $query);
// $row = mysqli_fetch_assoc($result);

// if (!$result) {
//     echo die(mysqli_error($conn));
// }
// if ($row['user_type'] != 'admin') {

//     header('Location: ../../root/login/index.php');
//     exit;
// }
