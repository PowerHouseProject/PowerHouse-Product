<?php

session_start();

if (isset($_SESSION['notification'])) {
    unset($_SESSION['notification']);
}

require "includes/db.php";
// get rating info
$username = $_SESSION['username'];
$trainer_id = $_POST['trainer'];
$tr_rating = $_POST['rating'];
$tr_review = $_POST['review'];

$query1 = "SELECT * FROM member WHERE username = '".$username."'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

$member_id = $row1['member_id'];

date_default_timezone_set('Asia/Colombo');
$today = date('Y-m-d');

// insert of update the made review
$check_reviews = "SELECT * FROM review WHERE member_id ='$member_id' AND trainer_id ='$trainer_id' LIMIT 1;";
$result = mysqli_query($conn,$check_reviews);
$review_count=mysqli_num_rows($result);

if( $review_count == 0){
    $make_review = "INSERT INTO review (member_id,trainer_id, review, date, stars, status) VALUES('$member_id', '$trainer_id', '$tr_review','$today','$tr_rating',0);";
    $review_result = mysqli_query($conn, $make_review);

    if ($review_result) {
        $_SESSION['notification'] = "Successfully Completed the Rating !";
        header('Location: membership.php');
    } else {
        $_SESSION['notification'] = "Unable to do the Rating !";
        echo die(mysqli_error($conn));
    }

}else{
    $make_review = "UPDATE review SET review='$tr_review',date='$today', stars='$tr_rating', status=0 WHERE member_id ='$member_id' AND trainer_id ='$trainer_id' LIMIT 1;;";
    $review_result = mysqli_query($conn, $make_review);

    if ($review_result) {
        $_SESSION['notification'] = "Successfully Completed the Rating !";
        header('Location: membership.php');
    } else {
        $_SESSION['notification'] = "Unable to do the Rating !";
        echo die(mysqli_error($conn));
    }

}


