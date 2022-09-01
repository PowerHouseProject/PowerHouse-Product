
<?php
include "includes/check_login.php";
//include "includes/db.php" 
?>
<?php $username = $_SESSION['username'] ?>

<?php
if (isset($_POST['update'])) {

    $u_image = $_FILES['u_image']['name'];
    $image_tmp = $_FILES['u_image']['tmp_name'];
    $random_number = rand(1, 100);

    if ($u_image == '') {
        echo "<script>alert('Please Select Profile Image on clicking on your profile image')</script>";
        echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
        exit();
    } else {
        move_uploaded_file($image_tmp, "media/$u_image");
        $update = "UPDATE accountant SET image='$u_image' where username='$username'";

        $run = mysqli_query($conn, $update);

        if ($run) {
            // echo "<script>alert('Your Profile Updated')</script>";
            // echo "<script>window.open('new-profile.php?u_id=$username' , '_self')</script>";
            $_SESSION['notification'] = "Profile Updated!";
            header('Location: profile.php');
        }
    }
}

if (isset($_POST['update-cover'])) {

    $u_image = $_FILES['u_image']['name'];
    $image_tmp = $_FILES['u_image']['tmp_name'];
    $random_number = rand(1, 100);

    if ($u_image == '') {
        echo "<script>alert('Please Select Profile Image on clicking on your profile image')</script>";
        echo "<script>window.open('profile.php?u_id=$user_id' , '_self')</script>";
        exit();
    } else {
        move_uploaded_file($image_tmp, "media/$u_image");
        $update = "UPDATE accountant SET cover_image='$u_image' where username='$username'";

        $run = mysqli_query($conn, $update);

        if ($run) {
            // echo "<script>alert('Your Profile Updated')</script>";
            // echo "<script>window.open('new-profile.php?u_id=$username' , '_self')</script>";
            $_SESSION['notification'] = "Profile Updated!";
            header('Location: profile.php');
        }
    }
}
