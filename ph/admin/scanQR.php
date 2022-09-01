<?php include "includes/check_login.php";

date_default_timezone_set("Asia/Colombo");
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/scanQR.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php";
        $member_id = $_GET['memberID'];

        $sql = "SELECT * FROM member WHERE member_id = '$member_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $f_name = $row['f_name'];
        $l_name = $row['l_name'];
        $phone_no = $row['phone_no'];
        $address = $row['address'];
        $dob = $row['dob'];
        $gender = $row['gender'];
        $inj = $row['injuries'];
        $email = $row2['email'];
        $image = $row['image'];
        $username = $row['username'];
        $assign_trainer = $row['assign_trainer'];

        $sql1 = "SELECT * FROM trainer WHERE trainer_id = '$assign_trainer'";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_assoc($result1);

        $trainer_f_name = $row1['f_name'];
        $trainer_l_name = $row1['l_name'];

        $query2 = "SELECT * FROM membership  WHERE member_id = '" . $member_id . "'";
        $result2 = mysqli_query($conn, $query2);
        $row2 = mysqli_fetch_assoc($result2);

        $membership_type = $row2['membership_type'];
        $joined_date = $row2['joined_date'];


        if ($membership_type == 12) {
            $exp_date = date('Y-m-d', strtotime("+12 month", strtotime("$joined_date")));
        } else if ($membership_type == 6) {
            $exp_date = date('Y-m-d', strtotime("+6 month", strtotime("$joined_date")));
        } else if ($membership_type == 3) {
            $exp_date = date('Y-m-d', strtotime("+3 month", strtotime("$joined_date")));
        } else if ($membership_type == 1) {
            $exp_date = date('Y-m-d', strtotime("+1 month", strtotime("$joined_date")));
        }

        $today = date('Y-m-d');
        ?>

        <div class="home-content">
            <div id="main-div" class="main">
                <div class="topic">MEMBER DETAILS</div>
                <div>
                    <div class="pic">
                        <img id="image" src="../member/media/members/<?php echo $image ?>" alt="">
                    </div>
                    <div class="separator">
                        <hr class="hr-left1" />
                        <span class="hr-text">PERSONAL DETAILS</span>
                        <hr class="hr-right1" />
                    </div>
                    <div class="details">
                        <p><span>NAME</span> - <?php echo "$f_name $l_name" ?></p>
                        <p><span>USERNAME</span> - <?php echo "$username" ?></p>
                        <p><span>DATE OF BIRTH</span> - <?php echo "$dob" ?></p>
                        <p><span>GENDER</span> - <?php echo "$gender" ?></p>
                        <p><span>ADDRESS</span> - <?php echo "$address" ?></p>
                        <p><span>CONTACT NO.</span> - <?php echo "$phone_no" ?></p>
                        <p><span>EMAIL</span> - <?php echo "$email" ?></p>
                        <p><span>ASSIGNED TRAINER</span> - <?php echo "$trainer_f_name $trainer_l_name" ?></p>
                    </div>
                    <div class="separator">
                        <hr class="hr-left2" />
                        <span class="hr-text">MEMBERSHIP DETAILS</span>
                        <hr class="hr-right2" />
                    </div>
                    <div id="check2" class="check">
                        <?php if ($exp_date >= $today) {
                            echo "VALID MEMBERSHIP"; ?>
                            <script>
                                document.getElementById('check2').style.backgroundColor = '#86ff71';
                                document.getElementById('main-div').style.border = '2px solid #86ff71';
                                document.getElementById('image').style.border = '3px solid #86ff71';
                            </script>
                        <?php
                        } else {
                            echo "EXPIRED MEMBERSHIP"; ?>
                            <script>
                                document.getElementById('check2').style.backgroundColor = '#f54a44';
                                document.getElementById('main-div').style.border = '2px solid #f54a44';
                                document.getElementById('image').style.border = '3px solid #f54a44';
                            </script>
                        <?php
                        } ?>
                    </div>
                </div>
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

</body>

</html>