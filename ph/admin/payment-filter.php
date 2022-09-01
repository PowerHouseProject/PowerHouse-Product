<?php
include "includes/check_login.php";

//require "includes/db.php";
$sql = "SELECT * FROM payment WHERE f_name LIKE '" . $_POST['name'] . "%'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        // $query = "SELECT membership_type, joined_date FROM membership WHERE member_id = $row[member_id];";
        // $result2 = mysqli_query($conn, $query);
        $username = $row['username'];
        // $row2 = mysqli_fetch_assoc($result2);
        $dateMembership = $row['joined_date'];

        $query = "SELECT * FROM review WHERE trainer_id = '$row[trainer_id]'";
        $result2 = mysqli_query($conn, $query);
        $review_count = mysqli_num_rows($result2);
        if ($review_count == 0) {
            $final_rating = 'No Reviews Yet';
        } else {
            $review_value = 0;
            while ($row2 = mysqli_fetch_assoc($result2)) {
                $review_value += $row2['stars'];
            }
            $final_rating = $review_value / $review_count;
        }
        // $membershipType = $row2['membership_type'];
        // $dateMembership = date('Y-m-d', strtotime($dateMembership));
        // $expireMembership = date('Y-m-d', strtotime($dateMembership . '+' . $membershipType . 'month'));
        // $today = date("Y-m-d");
        // $expired = "";
        // if ($today > $expireMembership) {
        //     $expired = "expired";
        // }



        $str = '<div class="first-column"><span class="avatar"><img src="../media/trainers/' . $row["image"] . '"></span>' . $row['f_name'] . ' ' . $row['l_name'] . '</div>';

        $button = 'location.href="update-trainer.php?username=' . $username . '"';

        $action = '<div class="row-action">
        <div class="about_button"><button class="about_btn" onclick= ' . $button . '>View/Update/Delete</button></div>';


        echo "<tr>

        <td>" .
            $str
            . "</td>
                                
                                    
                                    <td>" . $row['username'] . "</td>
                                    <td>" . $row['joined_date'] . "</td>
                                    <td>" . $row['phone_no'] . " </td>
                                    <td>" . $row['rate'] . "</td>
                                    <td>⭐" . $final_rating . " </td>
                                    <td>" . $row['assigned_members'] . " </td>
                                    <td>" .
            $action
            . "</td>
                                   



                                </tr>";
    }
}
