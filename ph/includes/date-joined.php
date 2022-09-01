<?php

function date_registered($trainer_id)
{
    global $connection;
    $query = "SELECT `joined_date` FROM `trainer` WHERE `trainer_id` = $trainer_id";
    $sqldate = mysqli_fetch_array(mysqli_query($connection,  $query));
    $date = strtotime($sqldate['joined_date']);
    $formattedValue = date("F Y", $date);
    return $formattedValue;
}
