<?php
include "includes/check_login.php";

//session_start();
unset($_SESSION['notification']);
//include "includes/db.php";




$u_image = $_FILES['quipment_name']['name'];
$image_tmp = $_FILES['quipment_name']['tmp_name'];
//$random_number = rand(1, 100);

$equipment_name = $_POST['f_name_cc'];
$equipment_count = $_POST['l_name_cc'];


echo $equipment_count;
echo $equipment_name;

move_uploaded_file($image_tmp, "media/inventory/$u_image");
$sql1 = "INSERT INTO inventory (name, image, quantity) VALUES('$equipment_name', '$u_image', '$equipment_count' )";

$run = mysqli_query($conn, $sql1);

if ($run) {
    // echo "<script>alert('Your Profile Updated')</script>";
    // echo "<script>window.open('new-profile.php?u_id=$username' , '_self')</script>";
    // $_SESSION['notification'] = "Equipment Added Successfully!";
    header('Location: inventory.php');
} else {
    mysqli_error($conn);
}
