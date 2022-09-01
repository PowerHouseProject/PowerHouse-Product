<?php include "includes/check_login.php" ?>
<?php require "includes/db.php";
require "includes/date-joined.php";
date_default_timezone_set("Asia/Colombo"); ?>

<?php
$username = $_SESSION['username'];

$query = "SELECT * FROM trainer WHERE username = '" . $username . "'";
$trainer_result = mysqli_query($conn, $query);
$trainer_row = mysqli_fetch_assoc($trainer_result);
$f_name = $trainer_row['f_name'];
$l_name = $trainer_row['l_name'];
$image = $trainer_row['image'];
$_SESSION['image'] = $image;
$trainer_id = $trainer_row['trainer_id'];
$about = $trainer_row['about'];
$rate = $trainer_row['rate'];
$phone_no = $trainer_row['phone_no'];
$qualifications = $trainer_row['qualifications'];
$date_joined = date_registered($trainer_id);

$_SESSION['trainer_id'] = $trainer_row['trainer_id'];

$query2 = "SELECT * FROM review WHERE trainer_id = $trainer_id AND status=1";
$review_query = mysqli_query($conn, $query2);

$review_count = mysqli_num_rows($review_query);
$review_value = 0;

while ($review_row = mysqli_fetch_assoc($review_query)) {
    $review_value += $review_row['stars'];
}

$today = date("Y-m-d");
$diff = date_diff(date_create($date_joined), date_create($today));

$qualifies = explode(',', $qualifications);

$query3 = "SELECT * FROM member WHERE assign_trainer = $trainer_id";
$assign_query = mysqli_query($conn, $query3);
$assign_members = mysqli_num_rows($assign_query);

$today = date("Y-m-d");

$sql1 = "SELECT * FROM book WHERE trainer_id = '" . $trainer_id . "' AND date = '" . $today . "'";
$result1 = mysqli_query($conn, $sql1);
$count = mysqli_num_rows($result1);
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php";
        $sql1 = "SELECT * FROM member WHERE assign_trainer='" . $trainer_id . "'";
        $result1 = mysqli_query($conn, $sql1);

        $count_row1 = mysqli_num_rows($result1);
        $month_earning = $rate * $count_row1;
        ?>


        <div class="home-content">
            <div class="trainer-stats">
                <div class="one">
                    <p class="value"><?php echo $assign_members ?></p>
                    <a class="name" href="members.php">Assigned members</a>
                </div>

                <div class="two">
                    <p class="value"><?php echo $month_earning * .8; ?></p>
                    <a href="earnings.php" class="name">Earnings(This month)</a>
                </div>

                <div class="three">
                    <p class="value"><?php echo $count ?></p>
                    <a href="bookings.php" class="name">Bookings(Today)</a>
                </div>

                <div class="four">
                    <p class="value"><?php echo $today ?></p>
                    <a href="calendar.php" class="name">Calendar</a>
                </div>
            </div>
            <div class="dashboard-bottom">
                <div class="left">
                    <div class="avatar">
                        <img src="../media/trainers/<?php echo $image ?>">
                    </div>
                    <div class="joined-date">
                        <p>Joined <?php echo $date_joined ?></p>
                    </div>
                    <div class="name">
                        <p><?php echo $f_name . " " . $l_name ?> ⭐<?php echo $review_value / $review_count ?> </p>
                    </div>
                    <div class="stat">
                        <div class="exp">
                            <p><?php echo $diff->format('%y') . 'yrs'; ?><br>Expirience</p>
                        </div>
                        <div class="rate">
                            <p><?php echo $rate ?>/=<br>Per Month</p>
                        </div>
                        <div class="review-count">
                            <p><?php echo $review_count ?><br>Reviews</p>
                        </div>
                    </div>
                    <div calss="divider">
                        <span class="fade-effect3"> </span>
                    </div>

                    <div class="button-profile">
                        <div><button class="about_btn1" onclick="location.href='profile.php'">My Profile</button></div>
                    </div>

                </div>
                <div class="review">
                    <h1>REVIEWS</h1>
                    <div class="divider">
                        <span class="fade-effect3"> </span>
                    </div>
                    <?php
                    $query2 = "SELECT * FROM review WHERE trainer_id = $trainer_id AND status=1";
                    $review_query = mysqli_query($conn, $query2);

                    while ($review_row = mysqli_fetch_assoc($review_query)) {
                        $review_id = $review_row['review_id'];
                        $review = $review_row['review'];
                        $stars = $review_row['stars'];
                        $member_id = $review_row['member_id'];

                        $review_date = date_reviewed($review_id);

                        $query4 = "SELECT * FROM member WHERE member_id='" . $member_id . "'";

                        $member_query = mysqli_query($conn, $query4);
                        $member_row = mysqli_fetch_assoc($member_query);
                        $member_username = $member_row['username'];
                        $member_f_name = $member_row['f_name'];
                        $member_l_name = $member_row['l_name'];
                        $member_avatar = $member_row['image'];
                    ?>
                        <div class="review-content">
                            <div class="member">
                                <div class="member-avatar"> <img src="../media/members/<?php echo $member_avatar ?>"></div>
                                <div class="member-name">
                                    <p><?php echo $member_username ?> ⭐<?php echo $stars ?></p>
                                </div>
                            </div>
                            <p class="published-date"><?php echo $review ?></p>
                            <p>Published on <?php echo $review_date ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <?php include "includes/footer.php" ?>

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