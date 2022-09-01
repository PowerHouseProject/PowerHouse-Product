<?php

require "db.php";
$sql = "SELECT * FROM member WHERE f_name LIKE '" . $_POST['name'] . "%'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $query = "SELECT membership_type, joined_date FROM membership WHERE member_id = $row[member_id];";
        $result2 = mysqli_query($conn, $query);
        $row2 = mysqli_fetch_assoc($result2);
        $dateMembership = $row2['joined_date'];
        $membershipType = $row2['membership_type'];
        $dateMembership = date('Y-m-d', strtotime($dateMembership));
        $expireMembership = date('Y-m-d', strtotime($dateMembership . '+' . $membershipType . 'month'));
        echo "<tr>
        
        <td>" . $row['f_name'] .  $row['l_name'] . "</td>
        
        <td>" . $row['username'] . "</td>
        <td>" . $row['phone_no'] . "</td>
        
        <td>" . $dateMembership . "</td>
        <td>" . $row2['membership_type'] . ' months' . "</td>
        <td>" . $expireMembership . "</td>
        
        
       
      </tr>";
    }
} else {
    echo "<tr><td>0 result's</td></tr>";
}
