<?php

include "includes/check_login.php";

if ($_SESSION['notification']) {
    unset($_SESSION['notification']);
}

$review_id = $_GET['review_id'];

//echo "ggg";

$sql = "DELETE FROM review WHERE review_id ='$review_id'";
$result0 = mysqli_query($conn, $sql);

if ($result0) {
    $_SESSION['notification'] = "Operation successfull";
    // $_SESSION['username'] = $username_bb;
    header('Location: reviews.php');
    // echo "done";
} else {
    // header("Location: index.php");
    echo die(mysqli_error($conn));
}
