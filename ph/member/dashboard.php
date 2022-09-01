<?php include "includes/check_login.php" ?>

<?php
require "includes/db.php";
$username = $_SESSION['username'];
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <div class="welcomenote">
            <h1></h1>
        </div>
        <div class="dubar">
            <?php

            date_default_timezone_set('Asia/Colombo');

            $query1 = "SELECT * FROM member WHERE username = '" . $username . "'";
            $result1 = mysqli_query($conn, $query1);
            $row1 = mysqli_fetch_assoc($result1);

            $member_id = $row1['member_id'];
            $trainer_assignment = $row1['assign_trainer'];

            $query2 = "SELECT * FROM membership  WHERE member_id = '" . $member_id . "'";
            $result2 = mysqli_query($conn, $query2);
            $row2 = mysqli_fetch_assoc($result2);

            $package_type = $row2['membership_type'];

            $membership_type = $row2['membership_type'];
            $joined_date = $row2['joined_date'];

            //echo $joined_date;
            if ($membership_type == 12) {
                $exp_date = date('Y-m-d', strtotime("+12 month", strtotime("$joined_date")));
            } else if ($membership_type == 6) {
                $exp_date = date('Y-m-d', strtotime("+6 month", strtotime("$joined_date")));
            } else if ($membership_type == 3) {
                $exp_date = date('Y-m-d', strtotime("+3 month", strtotime("$joined_date")));
            } else if ($membership_type == 1) {
                $exp_date = date('Y-m-d', strtotime("+1 month", strtotime("$joined_date")));
            }

            //echo $exp_date;

            $date = date('Y-m-d');
            $today = new DateTime($date);

            $mem_date = new DateTime("$joined_date");
            $membexp_date = new DateTime("$exp_date");

            $point_date = date('Y-m-d', strtotime("$joined_date"));
            $joinpoint_date = new DateTime("$point_date");

            $mem_interval2 = $today->diff($joinpoint_date);

            if ($mem_interval2->d <= 7) {
                $active_week = 1;
            } else if ($mem_interval2->d <= 14) {
                $active_week = 2;
            } else if ($mem_interval2->d <= 21) {
                $active_week = 3;
            } else if ($mem_interval2->d <= 31) {
                $active_week = 4;
            }


            switch ($mem_interval2->m) {
                case 0:
                    $next_mon = 1;
                    break;
                case 1:
                    $next_mon = 2;
                    break;
                case 2:
                    $next_mon = 3;
                    break;
                case 3:
                    $next_mon = 4;
                    break;
                case 4:
                    $next_mon = 5;
                    break;
                case 5:
                    $next_mon = 6;
                    break;
                case 6:
                    $next_mon = 7;
                    break;
                case 7:
                    $next_mon = 8;
                    break;
                case 8:
                    $next_mon = 9;
                    break;
                case 9:
                    $next_mon = 10;
                    break;
                case 10:
                    $next_mon = 11;
                    break;
                case 11:
                    $next_mon = 12;
                    break;
            }

            $find_attendance = "SELECT * FROM {$package_type}m_package_progress WHERE member_id='$member_id';";
            $attendance_result = mysqli_query($conn, $find_attendance);

            $result_row = mysqli_fetch_assoc($attendance_result);
            $attendace = $result_row['attendance'];

            $full_attendance = json_decode($attendace);
            $perc_value = $full_attendance[$next_mon - 1][0];
            // membership duration
            $mem_interval = $today->diff($membexp_date);

            if ($mem_date  == $today) {

                if ($membership_type == 12) {
                    $mem_interval->y = 00;
                    $mem_interval->m = 12;
                    $mem_interval->d = 00;
                }
            }

            if ($trainer_assignment == 0) {
                $flag = 0;
            } else {
                $assignment_query = "SELECT * FROM assignment WHERE member_id =$member_id AND trainer_id =$trainer_assignment ORDER BY assignment_id DESC LIMIT 1;";
                $assignment_result = mysqli_query($conn, $assignment_query);
                $assignment_row = mysqli_fetch_assoc($assignment_result);

                $t_assign_d = $assignment_row['start_date'];
                $t_exp_d = $assignment_row['end_date'];
                $date = date('Y-m-d');

                if ($t_exp_d > $date) {
                    $today = new DateTime($date);
                    $t_assign_date = new DateTime($t_assign_d);
                    $t_exp_date = new DateTime($t_exp_d);
                    $tr_interval = $today->diff($t_exp_date);

                    $flag = 1;
                } else {

                    $assignment_updatequery = "UPDATE member SET assign_trainer=0 WHERE member_id =$member_id;";
                    $newassign_result = mysqli_query($conn, $assignment_updatequery);

                    $tr_query2 = "SELECT * FROM trainer WHERE trainer_id = '$trainer_assignment'";
                    $tr_result2 = mysqli_query($conn, $tr_query2);
                    $tr_row2 = mysqli_fetch_assoc($tr_result2);
                    $count2 = $tr_row2['assigned_members'];
                    $count2 -= 1;

                    $tr_payment_insert2 = "UPDATE trainer SET assigned_members = '$count2' WHERE trainer_id='$trainer_assignment';";
                    $rece_update2 = mysqli_query($conn, $tr_payment_insert2);

                    $flag = 0;
                }
            }

            ?>

        </div>
        <div class="Hdivider"></div>
        <?php
        if ($trainer_assignment != 0) {
            $trainer_id = $trainer_assignment;
            $assign_trainer_query = "SELECT * FROM trainer WHERE trainer_id = $trainer_id";
            $trainer_result = mysqli_query($conn, $assign_trainer_query);
            $trainer_row = mysqli_fetch_assoc($trainer_result);

            $trainer_f_name = $trainer_row['f_name'];
            $trainer_l_name = $trainer_row['l_name'];

            $rate_tr_query = "SELECT * FROM review WHERE trainer_id = $trainer_id";
            $review_query = mysqli_query($conn, $rate_tr_query);

            $review_count = mysqli_num_rows($review_query);
            if ($review_count == 0) {
                $final_rating = 'No Reviews Yet';
            } else {
                $review_value = 0;
                while ($row6 = mysqli_fetch_assoc($review_query)) {
                    $review_value += $row6['stars'];
                }
                $final_rating = $review_value / $review_count;
            }

            $query2 = "SELECT * FROM book  WHERE member_id = '" . $member_id . "' AND date >='" . $date . "' LIMIT 2";
            $result2 = mysqli_query($conn, $query2);
            $current_time = date("H:i:s");
            // echo mysqli_num_rows($result2);
            if (mysqli_num_rows($result2) != 0) {

                $result2 = mysqli_query($conn, $query2);
                $row2 = mysqli_fetch_assoc($result2);
                //echo $row2['date'];
                $bk_date = $row2['date'];
                $bk_time = $row2['time'];
                $fixed_bk = new DateTime("$bk_date");
                $exp_time = date('H:i:s', strtotime("+2 hours", strtotime("$bk_time")));
               
                if (mysqli_num_rows($result2) == 1) {
                    if($bk_date == $date){
                        if ($exp_time > $current_time) {
                  
                            $bookingflag = 1;
                        }else {
                            $bookingflag = 0;
                        }
                    }
                    else{
                        $bookingflag = 1;
                    }
                    }
                } else if (mysqli_num_rows($result2) == 2) {

                    $query3 = "SELECT * FROM book  WHERE member_id = '" . $member_id . "' AND date >'" . $date . "' LIMIT 1";
                    $result3 = mysqli_query($conn, $query3);

                    $row2 = mysqli_fetch_assoc($result2);

                    $bk_date = $row2['date'];
                    $bk_time = $row2['time'];
                    $fixed_bk = new DateTime("$bk_date");
                    $exp_time = date('H:i:s', strtotime("+2 hours", strtotime("$bk_time")));
                    $bookingflag = 1;
                } else {
                    $bookingflag = 0;
                }
            } else {
                $bookingflag = 0;
            }

        ?>
        <!-- dashboard upper details view -->
        <div class="member-stats">
            <div class="one">
                <p class="value"><?php echo "$mem_interval->m"  ?><span id="mon_tg"> Months</span> <?php echo "$mem_interval->d" ?><span id="mon_tg"> Days</span></p>
                <p class="name">Membership</p>
            </div>
            <?php
            if ($flag != 0) {
                echo "
                <div class='two'>
                    <p class='value'>";
                if ($tr_interval->m == 1) {
                    echo "30";
                } else {
                    echo "$tr_interval->d";
                }
                echo "<span id='mon_tg'> Days</span></p>
                    <p class='name'>Trainer</p>
                </div>

                <div class='three'>
                    <p class='value'>";
                echo $trainer_f_name;
                echo " ⭐$final_rating";
                echo "</p>
                    <p class='name'>Assigned With</p>
                </div>";

                if ($bookingflag != 0) {
                    echo "
                    <div class='four'>
                        <p class='value'>";
                    echo $fixed_bk->format("d/m/Y");
                    echo "</p>
                        <p class='name'>Booking Fixed on</p>
                    </div>";
                } else {
                    echo "
                    <div class='four'>
                        <p class='value'>NO</p>
                        <p class='name'>Fixed Bookings</p>
                    </div>";
                }
            } else {
                echo "
                    <div class='two'>
                        <p class='value'>NO</p>
                        <p class='name'>Trainer</p>
                    </div>

                    <div class='three'>
                        <p class='value'>NO</p>
                        <p class='name'>Assignment</p>
                    </div>

                    <div class='four'>
                            <p class='value'>NO</p>
                            <p class='name'>Bookings</p>
                    </div>";
            }
            ?>

        </div>
        <div class="Hdivider"></div>
        <div class="analy">
            <div class="vboderdivider"></div>
            <div class="lpanel">
                <div class="btag">
                    <p>BMI STATISTICS</p>
                </div>

                <div class="bmi">
                    <canvas id="canvas"></canvas>
                </div>

                <div class="bmistatus">
                    <!-- <p><i class='bx bxs-pin'></i> Weight status category <i class='bx bx-tag-alt'></i><span id=" bmi_c" class="ob"> OBESITY</span></p> -->
                    <div class="pgo">
                        <a href="./progress.php#updatebmi" class="readmore_btn" id="readMore">UPDATE BMI</a>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="lpanel">
                <div class="btag">
                    <p>BODY FAT STATISTICS</p>
                </div>
                <div class="bmi">
                    <canvas id="canvas2"></canvas>
                </div>
                <div class="bmistatus">
                    <!-- <p><i class='bx bxs-pin'></i> Body Fat category <i class='bx bx-tag-alt'></i><span id=" bf_c" class="avg"> AVERAGE </span></p> -->
                    <div class="pgo">
                        <a href="./progress.php#updatebf" class="readmore_btn" id="readMore">UPDATE BODY FAT</a>
                    </div>
                </div>
            </div>
            <div class="vboderdivider"></div>
        </div>
        <div class="Hdivider"></div>
        <div class="analy2">
            <div class="vboderdivider"></div>
            <div class="rpanel">
                <div class="progcon">
                    <div class="progcon">
                        <div class="pchart">
                            <div class="weekpro">
                                <h2>BMI value categorizer</h2>
                                <div class="bc">
                                    <div class="cathead">
                                        <div class="cimg"></div>
                                        <div class="tx">
                                            <div class="ty">
                                                <p>CATEGORY</p>
                                            </div>
                                            <div class="val">VALUE</div>
                                        </div>
                                    </div>
                                    <div class="cat1">
                                        <div class="cimg"><img src="./media/1.png" alt="Under weight"></div>
                                        <div class="tx">
                                            <div class="ty">
                                                <p>UNDER</p>
                                            </div>
                                            <div class="val">
                                                < 18.5</div>
                                            </div>
                                        </div>
                                        <div class="cat1">
                                            <div class="cimg"><img src="./media/2.png" alt="Healthy weight"></div>
                                            <div class="tx">
                                                <div class="ty">
                                                    <p>HEALTHY</p>
                                                </div>
                                                <div class="val">18.5-24.9</div>
                                            </div>
                                        </div>
                                        <div class="cat1">
                                            <div class="cimg"><img src="./media/3.png" alt="Over weight"></div>
                                            <div class="tx">
                                                <div class="ty">
                                                    <p>OVER</p>
                                                </div>
                                                <div class="val">25-29.9</div>
                                            </div>
                                        </div>
                                        <div class="cat1">
                                            <div class="cimg"><img src="./media/4.png" alt="Obese weight"></div>
                                            <div class="tx">
                                                <div class="ty">
                                                    <p>OBESE</p>
                                                </div>
                                                <div class="val">> 30</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dividerin"></div>
                            <div class="comwork">
                                <h2>UPCOMING DAY</h2>
                                <div class="wlist">
                                    <ul>
                                        <?php


                                        for ($i = 1; $i <= 6; $i++) {
                                            $cur_point = 3;
                                            for ($m = 0; $m <= 6; $m++) {
                                                $cur_point = $cur_point + 1;

                                                if ($cur_point > 6) {
                                                    $cur_point = $cur_point % 6;
                                                }

                                                $week = array("day1_ex$i", "day2_ex$i", "day3_ex$i", "day4_ex$i", "day5_ex$i", "day6_ex$i", "day7_ex$i");

                                                $column = $week[$cur_point];
                                                $find = "SELECT $column FROM schedule WHERE member_id='$member_id';";
                                                $result2 = mysqli_query($conn, $find);

                                                $row = mysqli_fetch_assoc($result2);
                                                $en_rs = $row["$week[$cur_point]"];

                                                $ex1 = unserialize(base64_decode($en_rs));
                                                $out = $ex1;
                                                if ($out == '') {
                                                    continue;
                                                } else if ($out[0] == '0') {
                                                    continue;
                                                } else if ($out[0] != '0') {
                                                    echo "<b><li><i class='bx bx-dumbbell bx-rotate-90' ></i>&nbsp";
                                                    echo $out[0];
                                                    echo "</li></b>";
                                                    break;
                                                }
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="bt"><a href="./schedule.php" class="readmore_btn" id="readM">View More</a></div>
                            </div>
                        </div>
                        <div class="dividerin"></div>
                        <div class="pchart">
                            <div class="weekpro">
                                <h2>Weekly Progress</h2>
                                <div class="wp">
                                    <canvas id="dchart" height="80px" width="80px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rpanelbf">
                    <div class="pchart">
                        <div class="weekpro">
                            <h2>Monthly Attendance</h2>
                            <div <?php
                                    if ($perc_value > 65) {
                                        echo "class='st'";
                                    } else {
                                        echo "class='st2'";
                                    } ?>>
                                <p><?php if ($perc_value > 65) {
                                        echo "GOOD";
                                        // $pre = round($perc_value);
                                        // echo "$pre";
                                    } else {
                                        echo "BAD";
                                        // $pre = round($perc_value);
                                        // echo "$pre";
                                    } ?></p>
                            </div>

                        </div>
                        <div class="bt"><a href="./progress.php#weekprgs" class="readmore_btn" id="readMore">View More</a></div>
                    </div>
                    <div class="dividerin"></div>
                    <div class="book">
                        <div class="weekpro">
                            <h2>Body Fat value categorizer</h2>
                        </div>
                        <div class="status">
                            <div class="bfc">
                                <div class="bcathead">
                                    <div class="tx">
                                        <div class="ty"><i class='bx bx-female'></i></div>
                                        <div class="val"><i class='bx bx-male'></i></div>
                                    </div>
                                    <div class="ctag"></div>
                                </div>
                                <div class="bcat1">
                                    <div class="tx">
                                        <div class="val">10-13%</div>
                                        <div class="val">2-5%</div>
                                    </div>
                                    <div class="ctag">ESSANTIAL FAT</div>
                                </div>
                                <div class="bcat1">
                                    <div class="tx">
                                        <div class="val">14-20%</div>
                                        <div class="val">6-13%</div>
                                    </div>
                                    <div class="ctag">ATHLETES</div>
                                </div>
                                <div class="bcat1">
                                    <div class="tx">
                                        <div class="val">21-24%</div>
                                        <div class="val">14-17%</div>
                                    </div>
                                    <div class="ctag">FITNESS</div>
                                </div>
                                <div class="bcat1">
                                    <div class="tx">
                                        <div class="val">25-31%</div>
                                        <div class="val">18-24%</div>
                                    </div>
                                    <div class="ctag">AVERAGE</div>
                                </div>
                                <div class="bcat1">
                                    <div class="tx">
                                        <div class="val">>31%</div>
                                        <div class="val">>25%</div>
                                    </div>
                                    <div class="ctag">OBESE</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vboderdivider"></div>
            </div>
            <div class="HdividerL"></div>
    </section>
    <?php include "includes/footer.php" ?>

    <script src="js/bmichart.js" type="text/javascript"></script>
    <script src="js/bfchart.js" type="text/javascript"></script>

    <script src="js/progchart.js" type="text/javascript"></script>
    <script>
        var dtx = document.getElementById("dchart").getContext("2d");
        window.myLine = new Chart(dtx, config2);
    </script>

</body>

</html>