<?php

session_start();

require "db.php";

if (isset($_POST['tr_id'])) {

    $trainer_id =  $_POST['tr_id'];

    $response = "NULL";
   
    $query1 = "SELECT assigned_members FROM trainer WHERE trainer_id = $trainer_id ";
    $result1 = mysqli_query($conn, $query1);
    $row = mysqli_fetch_array($result1);
    $tr_count = $row['assigned_members'];

    if ($tr_count < 20) {
        $response="true";
        
    }else { 
        $response="false";
    }
        
    echo $response ;

    die;
}