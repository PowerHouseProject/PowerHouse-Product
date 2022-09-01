<?php
// $connection = mysqli_connect('localhost', 'root', '');
// if(!$connection){
// 	die("Database Connection Failed" . mysqli_error($connection));
// }

require "includes/db.php";
// $selectdb = mysqli_select_db($conn, 'phpajax');
// if(!$selectdb){
// 	die("Database Selection Failed" . mysqli_error($connection));
// }

$search = $_GET['search'];
$sql = "SELECT * FROM users WHERE username LIKE '$search%' LIMIT 5";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "<li value=" . $row['username'] . ">" . $row['username'] . "</a>";
}
