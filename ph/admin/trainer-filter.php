<?php
include "includes/check_login.php";

//require "includes/db.php";
$gender = $_POST['gender'];
$rating = $_POST['rating'];

$sql;
if ($rating == "all1" && $gender != "all") {
    $sql = "SELECT * FROM trainer WHERE gender = '$gender'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {

        $username = $row['username'];

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

        // $rating = (int)$rating;






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

    // $sql = "SELECT * FROM member";
} else if ($rating != "all1" && $gender == "all") {
    $sql = "SELECT * FROM trainer";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {

        $username = $row['username'];

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

        $rating = (int)$rating;


        if ($final_rating == $rating) {



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
                                    <td>⭐" . $rating . " </td>
                                    <td>" . $row['assigned_members'] . " </td>
                                    <td>" .
                $action
                . "</td>
                                   



                                </tr>";
        }
    }


    // $sql = "SELECT * FROM member WHERE gender='" . $gender . "'";
} else if ($rating == "all1" && $gender == "all") {
    $sql = "SELECT * FROM trainer";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {

        $username = $row['username'];

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

        // $rating = (int)$rating;






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
} else {
    $sql = "SELECT * FROM trainer";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {

        $username = $row['username'];

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

        $rating = (int)$rating;


        if ($final_rating == $rating && $row['gender'] == $gender) {


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
                                    <td>⭐" . $rating . " </td>
                                    <td>" . $row['assigned_members'] . " </td>
                                    <td>" .
                $action
                . "</td>
                                   



                                </tr>";
        }
    }
}
