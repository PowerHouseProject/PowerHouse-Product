<?php

require "db.php";
require "date-joined.php";

$trainer_id = $_GET['trainer_id'];

$query = "SELECT * FROM trainer WHERE trainer_id = $trainer_id";
$trainer_result = mysqli_query($conn, $query);
$trainer_row = mysqli_fetch_assoc($trainer_result);
$f_name = $trainer_row['f_name'];
$l_name = $trainer_row['l_name'];
$image = $trainer_row['image'];
$trainer_id = $trainer_row['trainer_id'];
$about = $trainer_row['about'];
$rate = $trainer_row['rate'];
$phone_no = $trainer_row['phone_no'];
$qualifications = $trainer_row['qualifications'];
$date_joined = date_registered($trainer_id);

$query2 = "SELECT * FROM review WHERE trainer_id = $trainer_id AND status=1";
$review_query = mysqli_query($conn, $query2);

$review_count = mysqli_num_rows($review_query);
if ($review_count == 0) {
    $final_rating = 'No Reviews Yet';
} else {
    $review_value = 0;
    while ($row2 = mysqli_fetch_assoc($review_query)) {
        $review_value += $row2['stars'];
    }
    $final_rating = $review_value / $review_count;
}


$today = date("Y-m-d");
$diff = date_diff(date_create($date_joined), date_create($today));

$qualifies = explode(',', $qualifications);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="trainer-profile.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

    <title>Trainer Profile - PH Fitness</title>
</head>

<body>

    <div class="main">
        <div class="left">
            <div class="avatar">
                <img src="../media/trainers/<?php echo $image ?>">
            </div>
            <div class="joined-date">
                <p>Joined <?php echo $date_joined ?> </p>
            </div>
            <div class="name">
                <p><?php echo $f_name . " " . $l_name ?> ⭐<?php echo $final_rating ?> </p>
            </div>
            <div class="button-inner">

                <div class="about_button"><button class="about_btn" onclick="location.href='tel:<?php echo $phone_no ?>'">CALL</button></div>
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
            <div class="about">
                <h4>ABOUT</h4>
                <p><?php echo $about ?></p>
            </div>

            <div calss="divider">
                <span class="fade-effect1"> </span>
            </div>

            <div class="qualifications">
                <h4>Qualifications</h4>
                <ul>
                    <?php foreach ($qualifies as $item) { ?>
                        <li><?php echo $item ?> </li>
                    <?php } ?>
                </ul>
            </div>

        </div>


        <div class=" right">
            <div class="title">
                <p>Reviews as a Trainer ⭐<?php echo $final_rating ?> (<?php echo $review_count ?> Reviews) </p>
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

                // $query3 = "SELECT f_name , l_name FROM member WHERE review.member_id = member.member_id AND review.review_id = $review_id";
                $member_query = mysqli_query($conn, $query4);
                $member_row = mysqli_fetch_assoc($member_query);
                $member_username = $member_row['username'];
                $member_f_name = $member_row['f_name'];
                $member_l_name = $member_row['l_name'];
                $member_avatar = $member_row['image'];


            ?>

                <div class="review">
                    <div class="member">
                        <div class="member-avatar"> <img src="../media/members/<?php echo $member_avatar ?>"></div>
                        <div class="member-name">
                            <p><?php echo $member_username ?> ⭐<?php echo $stars ?></p>
                        </div>

                    </div>
                    <div class="review-content">
                        <p><?php echo $review ?></p>
                        <p>Published on <?php echo $review_date ?></p>
                    </div>

                    <div calss="divider">
                        <span class="fade-effect2"> </span>
                    </div>


                </div>

            <?php } ?>


        </div>
    </div>

</body>

</html>