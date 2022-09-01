<?php

include "includes/check_login.php";

//session_start();




//require "includes/db.php";
$inventory_id = $_POST['inventory_id'];
$pin = $_POST['pin'];

if ($pin == 9999) {
    $delete_query = "DELETE from inventory WHERE inventory_id = $inventory_id";
    $delete_result = mysqli_query($conn, $delete_query);

    if ($delete_result) {
        // $_SESSION['notification'] = "Removed The Equipment";
        // // $_SESSION['username'] = $username_bb;
        // header('Location: inventory.php');
        // echo "done";

        echo "Removed The Equipment";
    } else {
        // header("Location: index.php");
        echo die(mysqli_error($conn));
    }
} else {

    echo "PIN is incorrect";
}


// $delete_row = mysqli_fetch_assoc($select_result);

// $quantity = $select_row['quantity'];
// $quantity = $quantity - 1;

// $insert_query = "UPDATE inventory SET quantity = $quantity WHERE inventory_id = $inventory_id";
// $select_result = mysqli_query($conn, $insert_query);
