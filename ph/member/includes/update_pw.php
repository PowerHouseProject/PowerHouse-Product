<?php

session_start();

if ($_SESSION['notification']) {
    unset($_SESSION['notification']);
}

require "db.php";

$username = $_SESSION['username'];

$current_password = mysqli_real_escape_string($conn, $_POST['current_pw']);
$password_bb = password_hash($_POST['password_cc'], PASSWORD_DEFAULT);

if ($current_password != "" && $password_bb != "") {

    $sql_query = "SELECT password FROM users WHERE username='" . $username . "'";
    $result = mysqli_query($conn, $sql_query);
    $row = mysqli_fetch_array($result);
    $password_hash = $row['password'];

    $verify = password_verify($current_password, $password_hash);

    if ($verify) {
        $user_pw_update = "UPDATE users SET password = '$password_bb' WHERE username = '$username';";
        $result1 = mysqli_query($conn, $user_pw_update);

        if ($result1) {
            $_SESSION['notification'] = "Profile updated successfully !";
            header('Location: ../profile.php');
        } else {
            $_SESSION['notification'] = "Profile update failed !";
            header('Location: ../profile.php');
            echo die(mysqli_error($conn));
        }
       
    } else {
        $_SESSION['notification'] = "Incorrect Password.Try again!";
        header('Location: ../profile.php');
    }
}

