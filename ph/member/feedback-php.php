<?php include "includes/check_login.php";
//session_start();

?>



<?php
require "includes/db.php";
$username = $_SESSION['username'];
?>

<?php

$feedback = $_POST['feedback_cc'];

$sql = "INSERT INTO feedback (feedback, username) VALUES('$feedback' , '$username');";

$result1 = mysqli_query($conn, $sql);
// $row1 = mysqli_fetch_assoc($result1);

if ($result1) {

    $_SESSION['notification'] = "Thank you for your feedback!";
    header('Location: feedback.php');
}




?>
