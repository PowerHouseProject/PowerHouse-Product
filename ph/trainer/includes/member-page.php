<?php

require "db.php";
$sql = "SELECT * FROM member WHERE f_name LIKE '" . $_POST['name'] . "%'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>" . $row['username'] . "</td>
        <td>" . $row['f_name'] . "</td>
        <td>" . $row['l_name'] . "</td>
        <td>" . $row['phone_no'] . "</td>
        <td>" . $row['address'] . "</td>
        <td>" . $row['joined_date'] . "</td>
        
        
        <td>" . $row['dob'] . "</td>
        <td> <div class = 'dsdsd'><p>sfsdff</p></div> </td>
      </tr>";
    }
} else {
    echo "<tr><td>0 result's</td></tr>";
}
