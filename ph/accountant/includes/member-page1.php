<?php

require "db.php";
$sql = "SELECT * FROM payment WHERE member_id =  $_POST[name] ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $query = "SELECT f_name FROM member WHERE member_id = $row[member_id];";
        $result2 = mysqli_query($conn, $query);
        $row2 = mysqli_fetch_assoc($result2);
        echo "<tr>
        
        <td>" . $row2['f_name'] . "</td>
        <td>" . $row['payment_date'] . "</td>
        <td>" . $row['payment_amount'] . "</td>
      </tr>";
    }
} else {
    echo "<tr><td>0 result's</td></tr>";
}
