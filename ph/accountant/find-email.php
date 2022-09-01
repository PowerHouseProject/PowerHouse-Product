<?php
require "includes/db.php";
$key = $_POST['myData'];
$sql = "SELECT * FROM users WHERE username= '$key'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['email'];
    }
} else {
    echo "Incorrect Username";
}
