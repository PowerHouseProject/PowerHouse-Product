<?php
include "includes/check_login.php";

//require "includes/db.php";
$gender = $_POST['gender'];
$membership = $_POST['membership'];
$sql;
if ($membership == "all1" && $gender != "all") {
    $sql = "SELECT * FROM member WHERE gender='" . $gender . "'";

    // $sql = "SELECT * FROM member";
} else if ($membership != "all1" && $gender == "all") {
    $sql = "SELECT * FROM member INNER JOIN membership ON member.member_id=membership.member_id AND membership.status='" . $membership . "'";
    // $sql = "SELECT * FROM member WHERE gender='" . $gender . "'";
} else if ($membership == "all1" && $gender == "all") {
    $sql = "SELECT * FROM member";
} else {
    $sql = "SELECT * FROM member INNER JOIN membership ON member.member_id=membership.member_id AND membership.status='$membership' AND member.gender='" . $gender . "'";
}



$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $query = "SELECT membership_type, joined_date FROM membership WHERE member_id = $row[member_id];";
        $result2 = mysqli_query($conn, $query);
        $username = $row['username'];
        $row2 = mysqli_fetch_assoc($result2);
        $dateMembership = $row2['joined_date'];
        $membershipType = $row2['membership_type'];
        $dateMembership = date('Y-m-d', strtotime($dateMembership));
        $expireMembership = date('Y-m-d', strtotime($dateMembership . '+' . $membershipType . 'month'));
        $today = date("Y-m-d");
        $expired = "";
        if ($today > $expireMembership) {
            $expired = "expired";
        }



        $str = '<div class="first-column"><span class="avatar"><img src="../media/members/' . $row["image"] . '"></span>' . $row['f_name'] . ' ' . $row['l_name'] . '</div>';

        $button = 'location.href="update-member.php?username=' . $username . '"';

        $action = '<div class="row-action">
        <div class="about_button"><button class="about_btn" onclick= ' . $button . '>View/Update/Delete</button></div>';


        echo "<tr class=<?php $expired ?>>

        <td>" .
            $str
            . "</td>
                                
                                    
                                    <td>" . $row['username'] . "</td>
                                    <td>" . $row['phone_no'] . " </td>
                                    <td>" . $dateMembership . "</td>
                                    <td>" . $row2['membership_type'] . ' months' . " </td>
                                    <td>" . $expireMembership . " </td>
                                    <td>" .
            $action
            . "</td>
                                   



                                </tr>";
    }
}
