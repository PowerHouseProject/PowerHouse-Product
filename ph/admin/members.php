<?php include "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/dashboard.css">
    <link href="css/justselect.css" rel="stylesheet" />
    <link href="css/nice-select2.scss" rel="stylesheet" />



    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <script>
            function nn() {
                $('.alert').addClass("show");
                $('.alert').removeClass("hide");
                $('.alert').addClass("showAlert");
                setTimeout(function bb() {
                    $('.alert').removeClass("show");
                    $('.alert').addClass("hide");
                }, 4000);
            };
        </script>

        <!-- <button class="err">Show Alert</button> -->
        <div class="alert hide">

            <?php
            if (isset($_SESSION['notification'])) {
                $notification = $_SESSION['notification'];
                echo '<script type="text/javascript">nn();</script>';
            }
            ?>

            <!-- <span class="fas fa-exclamation-circle"></span> -->
            <span class="msg"><?php echo $notification ?></span>
            <div class="close-btn">
                <span class="fas fa-times"></span>
            </div>
        </div>
        <script>
            $('.close-btn').click(function ss() {
                $('.alert').removeClass("show");
                $('.alert').addClass("hide");
            });
        </script>




        <div class="home-content">
            <div class="member-stats">

                <?php

                // include 'includes/db.php';
                $count_sql1 = "SELECT COUNT(username) FROM users WHERE user_type = 'member'";
                $count_result1 = mysqli_query($conn, $count_sql1);
                $count_row1 = mysqli_fetch_array($count_result1);

                $count_total1 = $count_row1[0] + 1;

                $count_sql2 = "SELECT * FROM member";
                $count_result2 = mysqli_query($conn, $count_sql2);
                $new_members = 0;
                $count_sql2 = "SELECT DATEDIFF(NOW(),joined_date) FROM member";
                $count_result2 = mysqli_query($conn, $count_sql2);
                // $new_members = 0;
                // $time = strtotime('10/16/2003');

                // $newformat = date('Y-m-d', $time);
                while ($count_row2 = mysqli_fetch_array($count_result2)) {

                    // $my_date = date('Y-m-d', strtotime($count_row2['joined_date']));
                    // //echo $my_date . " ";
                    // $date1 = date_create("2013-03-15");
                    // $date2 = date_create("2013-12-12");
                    // $diff = date_diff($date1, $date2);
                    // $final_range = round($date_difference / (60 * 60 * 24));
                    // if ($final_range > 30) {
                    //     echo $date_difference . " ";
                    //     $new_members++;
                    // }S

                    if ($count_row2[0] < 30) {
                        $new_members++;
                    }
                }

                $count_sql3 = "SELECT * FROM member";
                $count_result3 = mysqli_query($conn, $count_sql3);
                $expired_members = 0;
                // $count_sql3 = "SELECT DATEDIFF(NOW(),joined_date) FROM member";
                $count_result3 = mysqli_query($conn, $count_sql3);

                while ($count_row3 = mysqli_fetch_array($count_result3)) {

                    $member_id = $count_row3['member_id'];

                    $count_sql31 = "SELECT * FROM membership WHERE member_id = $member_id";
                    $count_result31 = mysqli_query($conn, $count_sql31);

                    $row_31 = mysqli_fetch_assoc($count_result31);
                    if ($row_31['status'] == 'invalid') {

                        $expired_members++;
                    }

                    $count_sql4 = "SELECT * FROM member_drops";
                    $count_result4 = mysqli_query($conn, $count_sql4);
                    $count_drops = mysqli_fetch_assoc($count_result4);

                    $member_drops = $count_drops['count'];




                    // $my_date = date('Y-m-d', strtotime($count_row2['joined_date']));
                    // //echo $my_date . " ";
                    // $date1 = date_create("2013-03-15");
                    // $date2 = date_create("2013-12-12");
                    // $diff = date_diff($date1, $date2);
                    // $final_range = round($date_difference / (60 * 60 * 24));
                    // if ($final_range > 30) {
                    //     echo $date_difference . " ";
                    //     $new_members++;
                    // }S

                    // if ($count_row2[0] < 30) {
                    //     $new_members++;
                    // }
                }








                ?>
                <div class="one">
                    <p class="value"><?php echo $count_total1 ?></p>
                    <p class="name">Total Members</p>
                </div>

                <div class="two">
                    <p class="value"><?php echo $new_members ?>+</p>
                    <p class="name">This Month</p>
                </div>

                <div class="three">
                    <p class="value"><?php echo $expired_members ?></p>
                    <p class="name">Expired Memberships</p>
                </div>

                <div class="four">
                    <p class="value"><?php echo $member_drops ?>-</p>
                    <p class="name">Member Drops</p>
                </div>

            </div>
            <div class="search-bar">
                <div class="search-box">
                    <input type="text" placeholder="Search by first name..." id="search">
                    <i class='bx bx-search'></i>
                </div>
                <div class="filter1">
                    <select name="Membership" class="justselect" id="membership">
                        <option selected="selected" value=all1>Membership</option>
                        <option value="valid">Membership Valid</option>
                        <option value="invalid">Membership Expired</option>
                    </select>
                </div>

                <div class="filter2">
                    <select name="Membership" class="justselect" id="gender">
                        <option selected="selected" value="all">Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>



                <div class="add_button"><button class="add_btn_filter" id="btn">Filter</button></div>
                <div class="add_button"><button class="add_btn" onclick="location.href='add-member.php'">Add Member</button></div>

            </div>




            <div class="member-list">
                <table class="table table-hover">

                    <thead>
                        <tr>

                            <th>Name</th>

                            <th>Username</th>
                            <th>Phone Number</th>
                            <!-- <th>Address</th> -->
                            <th>Date Joined</th>
                            <th>Membership Type</th>
                            <th>Expiery Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="output">
                        <?php



                        // echo "asfsdfd";

                        $sql = "SELECT * FROM member";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                                $query = "SELECT membership_type, joined_date FROM membership WHERE member_id = $row[member_id];";
                                $result2 = mysqli_query($conn, $query);
                                $row2 = mysqli_fetch_assoc($result2);
                                $username = $row['username'];
                                $dateMembership = $row2['joined_date'];
                                $membershipType = $row2['membership_type'];
                                $dateMembership = date('Y-m-d', strtotime($dateMembership));
                                $expireMembership = date('Y-m-d', strtotime($dateMembership . '+' . $membershipType . 'month'));
                                $today = date("Y-m-d");
                                $expired = "";
                                if ($today > $expireMembership) {
                                    $expired = "expired";
                                }
                                $button = 'location.href="update-member.php?username=' . $username . '"';

                                $action = '<div class="row-action">
                                <div class="about_button"><button class="about_btn" onclick= ' . $button . '>View/Update/Delete</button></div>';


                        ?>




                                <tr class=<?php $expired ?>>
                                    <td>
                                        <div class="first-column"><span class="avatar"><img src="../media/members/<?php echo $row['image'] ?>"></span><?php echo " " . $row['f_name'] . " " . $row['l_name'] ?></div>
                                    </td>
                                    <td><?php echo $row['username'] ?> </td>
                                    <td><?php echo $row['phone_no'] ?> </td>
                                    <td><?php echo $dateMembership ?> </td>
                                    <td><?php echo  $row2['membership_type'] . ' months' ?> </td>
                                    <td><?php echo  $expireMembership ?> </td>
                                    <td><?php echo $action ?></td>




                                </tr>



                        <?php }
                        }
                        ?>


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




    <script type="text/javascript">
        $(document).ready(function() {
            $("#search").keydown(function() {
                $.ajax({
                    type: 'POST',
                    url: 'search.php',
                    data: {
                        name: $("#search").val(),
                    },
                    success: function(data) {
                        $("#output").html(data);
                    }
                });
            });
        });
    </script>

    <script src="js/justselect.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function()

            {


                $('#btn').click(function() {
                    // var gender = $('#gender :selected').val();
                    $.ajax({
                        type: 'POST',
                        url: 'filter.php',
                        data: {
                            gender: $('#gender :selected').val(),
                            membership: $('#membership :selected').val(),
                        },
                        success: function(data) {
                            $("#output").html(data);
                        }
                    });

                });

            });
    </script>




</body>

</html>

<?php
unset($_SESSION['notification']);
?>