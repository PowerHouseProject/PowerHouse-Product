<?php

//session_start();
include "includes/check_login.php";



//require "includes/db.php";
$inventory_id = $_POST['inventory_id'];

$pin = $_POST['pin'];

if ($pin == 9999) {

    $select_query = "SELECT quantity from inventory WHERE inventory_id = $inventory_id";
    $select_result = mysqli_query($conn, $select_query);
    $select_row = mysqli_fetch_assoc($select_result);

    $quantity = $select_row['quantity'];
    $quantity = $quantity - 1;

    $insert_query = "UPDATE inventory SET quantity = $quantity WHERE inventory_id = $inventory_id";
    $select_result = mysqli_query($conn, $insert_query);

    if ($select_result) {
        echo "Removed 1 equipment";
    }
}

// $select_query = "SELECT quantity from inventory WHERE inventory_id = $inventory_id";
// $select_result = mysqli_query($conn, $select_query);
// $select_row = mysqli_fetch_assoc($select_result);

// $quantity = $select_row['quantity'];
// $quantity = $quantity - 1;

// $insert_query = "UPDATE inventory SET quantity = $quantity WHERE inventory_id = $inventory_id";
// $select_result = mysqli_query($conn, $insert_query);

else {
    echo "PIN is incorrect";
}


// if ($select_result) {
//     $_SESSION['notification'] = "Removed 1 Equipment";
//     // $_SESSION['username'] = $username_bb;
//     header('Location: inventory.php');
//     // echo "done";
// } else {
//     // header("Location: index.php");
//     echo die(mysqli_error($conn));
// }
