<?php include "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/accountant.css">
    <link href="css/justselect.css" rel="stylesheet" />

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
            <!-- <div class="member-stats">
                <div class="one">
                    <p class="value">255</p>
                    <p class="name">Total Members</p>
                </div>

                <div class="two">
                    <p class="value">5+</p>
                    <p class="name">This Month</p>
                </div>

                <div class="three">
                    <p class="value">10</p>
                    <p class="name">Expired Memberships</p>
                </div>

                <div class="four">
                    <p class="value">2-</p>
                    <p class="name">Member Drops</p>
                </div>

            </div> -->
            <div class="search-bar">
                <div class="search-box">

                </div>
                <!-- <div class="filter1">
                    <select name="Membership" id="" class="justselect">
                        <option selected="selected">Membership</option>
                        <option>Membership Valid</option>
                        <option>Membership Expired</option>
                    </select>
                </div>

                <div class="filter2">
                    <select name="Membership" id="" class="justselect">
                        <option selected="selected">Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div> -->



                <!-- <div class="add_button"><button class="add_btn_filter" onclick="location.href='#'">Filter</button></div> -->
                <!-- <div class="add_button"><button class="add_btn" onclick="location.href='add-accountant.php'">Add Accountant</button></div> -->

            </div>

            <div class="member-list">
                <table class="table table-hover">

                    <thead>
                        <tr>

                            <th>Member Name</th>

                            <th>Trainer Name</th>
                            <th>Date</th>
                            <!-- <th>Address</th> -->
                            <th>Review</th>
                            <th>Stars</th>
                            <!-- <th>Membership Type</th>
                            <th>Expiery Date</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="output">
                        <?php

                        // require "includes/db.php";
                        $sql = "SELECT * FROM review WHERE status =0";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $member_id = $row['member_id'];
                                $review_id = $row['review_id'];
                                $review = $row['review'];
                                $date = $row['date'];
                                $trainer_id = $row['trainer_id'];
                                $stars = $row['stars'];

                                $image_sql = "SELECT * FROM member WHERE member_id = '$member_id'";
                                $result2 = mysqli_query($conn, $image_sql);
                                $row2 = mysqli_fetch_assoc($result2);
                                $f_name = $row2['f_name'];
                                $l_name = $row2['l_name'];
                                $image = $row2['image'];

                                $image_sql2 = "SELECT * FROM trainer WHERE trainer_id = '$trainer_id'";
                                $result3 = mysqli_query($conn, $image_sql2);
                                $row3 = mysqli_fetch_assoc($result3);
                                $f_name_t = $row3['f_name'];
                                $l_name_t = $row3['l_name'];
                                $image_t = $row3['image'];


                                $button1 = 'location.href="accept-review.php?review_id=' . $review_id . '"';
                                $button2 = 'location.href="delete-review.php?review_id=' . $review_id . '"';

                                $action = '<div class="row-action">
                                <div class="about_button"><button class="about_btn" onclick= ' . $button1 . '>Accept</button></div> <div class="row-action">
                                <div class="about_button"><button class="about_btn" onclick= ' . $button1 . '>Decline</button></div>';



                        ?>




                                <tr>
                                    <td>
                                        <div class="first-column"><span class="avatar"><img src="../member/media/members/<?php echo $image ?>"></span><?php echo " " . $f_name . " " . $l_name ?></div>
                                    </td>
                                    <td>
                                        <div class="first-column"><span class="avatar"><img src="../trainer/media/trainers/<?php echo $image_t ?>"></span><?php echo " " . $f_name_t . " " . $l_name_t ?></div>
                                    </td>
                                    <td><?php echo $date ?> </td>
                                    <td><?php echo $review ?> </td>
                                    <td>⭐<?php echo $stars ?> </td>

                                    <td>
                                        <?php echo $action ?>
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

<?php
unset($_SESSION['notification']);
?>