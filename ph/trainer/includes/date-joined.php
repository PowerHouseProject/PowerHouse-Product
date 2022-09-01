<?php

function date_registered($trainer_id)
{
    global $conn;
    $query = "SELECT `joined_date` FROM `trainer` WHERE `trainer_id` = $trainer_id";
    $sqldate = mysqli_fetch_array(mysqli_query($conn,  $query));
    $date = strtotime($sqldate['joined_date']);
    $formattedValue = date("F Y", $date);
    return $formattedValue;
}

function date_reviewed($review_id)
{
    global $conn;
    $query = "SELECT `date` FROM `review` WHERE `review_id` = $review_id";
    $sqldate = mysqli_fetch_array(mysqli_query($conn,  $query));
    $date = strtotime($sqldate['date']);
    $formattedValue = date("F Y", $date);
    return $formattedValue;
}
