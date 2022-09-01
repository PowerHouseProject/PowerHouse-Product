<?php include "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/dashboard.css">
    <link href="css/justselect.css" rel="stylesheet" />

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">


        <?php include "includes/header.php" ?>

        <?php
        $mydate = date("y-m-d");
        $month = date('m', strtotime($mydate));
        $year = date('y', strtotime($mydate));
        ?>
        <?php
        $sum2 = 0;

        $select_query = "SELECT * FROM payment";
        $select_result = mysqli_query($conn, $select_query);
        while ($row3 = mysqli_fetch_assoc($select_result)) {
            $trainer_id = $row3['trainer_id'];
            if ($trainer_id > 0) {
                $sql4 = "SELECT * FROM trainer WHERE trainer_id = '$trainer_id';";
                $select_result2 = mysqli_query($conn, $sql4);
                $row4 = mysqli_fetch_assoc($select_result2);
                $rate = $row4['rate'];
                $sum2 = $sum2 + $rate;
            }
            // $count = $row3['assignment_count'];
        } ?>

        <?php $select_query = "SELECT payment_amount FROM payment";
        $select_result = mysqli_query($conn, $select_query);
        // where payment_date>='$year-$month-01
        $sum = 0;

        if (mysqli_num_rows($select_result) > 0) {
            while ($row = mysqli_fetch_assoc($select_result)) {
                $sum = $sum + $row['payment_amount'];
            }
        }
        ?>



        <?php $select_query = "SELECT payment_amount FROM payment WHERE payment_date>='$year-$month-01'";
        $select_result = mysqli_query($conn, $select_query);
        // where payment_date>='$year-$month-01
        $sum3 = 0;

        if (mysqli_num_rows($select_result) > 0) {
            while ($row = mysqli_fetch_assoc($select_result)) {
                $sum3 = $sum3 + $row['payment_amount'];
            }
        }
        ?>

        <?php
        $sum4 = 0;

        $select_query = "SELECT * FROM payment";
        $select_result = mysqli_query($conn, $select_query);
        while ($row3 = mysqli_fetch_assoc($select_result)) {
            $trainer_id = $row3['trainer_id'];
            if ($trainer_id > 0) {
                $sql4 = "SELECT * FROM trainer WHERE trainer_id = '$trainer_id';";
                $select_result2 = mysqli_query($conn, $sql4);
                $row4 = mysqli_fetch_assoc($select_result2);
                $rate = $row4['rate'];
                $sum4 = $sum4 + $rate;
            }
            // $count = $row3['assignment_count'];
        }

        $sum5 = $sum4 * 0.2;

        ?>

        <?php $select_query = "SELECT * FROM payment WHERE payment_date>='$year-$month-01'";
        $select_result = mysqli_query($conn, $select_query);
        // where payment_date>='$year-$month-01
        $sum_new = 0;
        $sum_tr = 0;

        if (mysqli_num_rows($select_result) > 0) {
            while ($row = mysqli_fetch_assoc($select_result)) {
                $sum_new = $sum_new + $row['payment_amount'];
                $trainer_id = $row['trainer_id'];
                if ($trainer_id > 0) {
                    $sql4 = "SELECT * FROM trainer WHERE trainer_id = '$trainer_id';";
                    $select_result2 = mysqli_query($conn, $sql4);
                    $row4 = mysqli_fetch_assoc($select_result2);
                    $rate = $row4['rate'];
                    $sum_tr = $sum_tr + $rate;
                }
            }
        }
        ?>






        <div class="home-content">
            <div class="member-stats">
                <div class="one">
                    <p class="value">LKR <?php echo $sum ?></p>
                    <p class="name">Total Recieved</p>
                </div>

                <div class="two">
                    <p class="value">LKR <?php echo $sum3 ?></p>
                    <p class="name">This Month</p>
                </div>

                <div class="three">
                    <p class="value">LKR <?php echo $sum3 - ($sum4 - $sum5) ?></p>
                    <p class="name">Total Profit</p>
                </div>

                <div class="four">
                    <p class="value">LKR <?php echo $sum_new - ($sum_new - ($sum_tr * 0.2)) ?></p>
                    <p class="name">This Month Profit</p>
                </div>

            </div>
            <!-- <div class="search-bar">
                <div class="search-box">
                    <input type="text" placeholder="Search by name..." id="search">
                    <i class='bx bx-search'></i>
                </div>
                <div class="filter1">
                    <select name="Membership" id="" class="justselect">
                        <option selected="selected">Membership</option>
                        <option>1 Month</option>
                        <option>3 Months</option>
                        <option>6 Months</option>
                        <option>12 Months</option>
                    </select>
                </div>

                <div class="filter2">
                    <select name="Membership" id="" class="justselect">
                        <option selected="selected">Type</option>
                        <option>Online</option>
                        <option>Offline</option>
                    </select>
                </div>



                <div class="add_button"><button class="add_btn_filter" onclick="location.href='#'">Filter</button></div>



                <!-- <div class="add_button"><button class="add_btn" onclick="location.href='add-member.php'">Add Trainer</button></div> -->

            <!-- </div> -->

            <div class="member-list">
                <table class="table table-hover">

                    <thead>
                        <tr>

                            <th>Id</th>

                            <th>Member</th>
                            <th>Trainer</th>
                            <!-- <th>Address</th> -->
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody id="output">
                        <?php

                        //require "includes/db.php";
                        $sql = "SELECT * FROM payment";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                                $member_query = "SELECT username, image FROM member WHERE member_id = $row[member_id];";
                                $member_result = mysqli_query($conn, $member_query);
                                $member_row = mysqli_fetch_assoc($member_result);

                                $member_query = "SELECT username, image FROM member WHERE member_id = $row[member_id];";
                                $member_result = mysqli_query($conn, $member_query);
                                $member_row = mysqli_fetch_assoc($member_result);

                                if ($row['trainer_id'] == 0) {

                                    $trainer_ff = "No Trainer";
                                } else {

                                    $trainer_query = "SELECT username, image FROM trainer WHERE trainer_id = $row[trainer_id];";
                                    $trainer_result = mysqli_query($conn, $trainer_query);
                                    $trainer_row = mysqli_fetch_assoc($trainer_result);

                                    $trainer_username = $trainer_row['username'];
                                    $trainer_image = $trainer_row['image'];
                                }

                                // $trainer_query = "SELECT username, image FROM trainer WHERE trainer_id = $row[trainer_id];";
                                // $trainer_result = mysqli_query($conn, $trainer_query);
                                // $trainer_row = mysqli_fetch_assoc($trainer_result);

                                // $dateMembership = $row2['joined_date'];
                                // $membershipType = $row2['membership_type'];
                                // $dateMembership = date('Y-m-d', strtotime($dateMembership));
                                // $expireMembership = date('Y-m-d', strtotime($dateMembership . '+' . $membershipType . 'month'));
                                // $today = date("Y-m-d");
                                // $expired = "";
                                // if ($today > $expireMembership) {
                                //     $expired = "expired";
                                // }

                        ?>




                                <tr>

                                    <td><?php echo $row['payment_id'] ?> </td>
                                    <td>


                                        <div class="first-column"><span class="avatar"><img src="../media/members/<?php echo $member_row['image'] ?>"></span><?php echo " " . $member_row['username'] ?></div>
                                    </td>

                                    <td>

                                        <?php
                                        if ($row['trainer_id'] == 0) {

                                            echo "No trainer";
                                        } else {

                                            echo  "
                                        <div class='first-column'><span class='avatar'><img src='../media/trainers/$trainer_image' </span> $trainer_username </div>
                                    ";
                                        }

                                        ?>

                                    </td>


                                    <td><?php echo $row['payment_amount'] . " " .  "LKR" ?> </td>
                                    <td><?php echo  $row['payment_date'] ?> </td>
                                    <td><?php echo  $row['payment_type'] ?> </td>
                                    <td>
                                        <?php echo  $row['description'] ?>
                                    </td>



                                </tr>



                        <?php }
                        } ?>
                    </tbody>
                </table>


            </div>
        </div>


    </section>




    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>


    <script src="js/justselect.min.js"></script>


</body>

</html>