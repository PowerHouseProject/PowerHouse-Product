<?php

session_start();

require "db.php";
$username = $_SESSION['username'];


$query1 = "SELECT * FROM member WHERE username = '".$username."'";
$result1 = mysqli_query($conn, $query1);
$row1= mysqli_fetch_assoc($result1);

$member_id = $row1['member_id']; 

$query2 = "SELECT * FROM membership WHERE member_id = '".$member_id."'";
$result2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($result2);


$package_type = $row2['membership_type'];

$membership_type = $row2['membership_type']; 
$joined_date = $row2['joined_date'];
//total workout days
for ($m = 0; $m <= 6; $m++) {
    $week = array("day1_ex1", "day2_ex1", "day3_ex1", "day4_ex1", "day5_ex1", "day6_ex1", "day7_ex1");

    $column = $week[$m];
    $find = "SELECT $column FROM schedule WHERE member_id='$member_id';";
    $result2 = mysqli_query($conn, $find);

    $row = mysqli_fetch_assoc($result2);
    $en_rs = $row["$week[$m]"];

    $ex1 = unserialize(base64_decode($en_rs));
    $out[$m] = $ex1;
}

if ($out[0] == '') {
    $day1_flag = 0;
} else if ($out[0][0] != '0') {
    $day1_flag = 1;
} else if ($out[0][0] == '0') {
    $day1_flag = 0;
}
if ($out[1] == '') {
    $day2_flag = 0;
} else if ($out[1][0] != '0') {
    $day2_flag = 1;
} else if ($out[1][0] == '0') {
    $day2_flag = 0;
}
if ($out[2] == '') {
    $day3_flag = 0;
} else if ($out[2][0] != '0') {
    $day3_flag = 1;
} else if ($out[2][0] == '0') {
    $day3_flag = 0;
}
if ($out[3] == '') {
    $day4_flag = 0;
} else if ($out[3][0] != '0') {
    $day4_flag = 1;
} else if ($out[3][0] == '0') {
    $day4_flag = 0;
}
if ($out[4] == '') {
    $day5_flag = 0;
} else if ($out[4][0] != '0') {
    $day5_flag = 1;
} else if ($out[4][0] == '0') {
    $day5_flag = 0;
}
if ($out[5] == '') {
    $day6_flag = 0;
} else if ($out[5][0] != '0') {
    $day6_flag = 1;
} else if ($out[5][0] == '0') {
    $day6_flag = 0;
}
if ($out[6] == '') {
    $day7_flag = 0;
} else if ($out[6][0] != '0') {
    $day7_flag = 1;
} else if ($out[6][0] == '0') {
    $day7_flag = 0;
}




//expire date calculating according to the membership package 
if($membership_type==12){ 
    $exp_date = date('Y-m-d',strtotime("+12 month", strtotime("$joined_date")));}
else if($membership_type==6){ 
    $exp_date = date('Y-m-d',strtotime("+6 month", strtotime("$joined_date")));}
else if($membership_type==3){ 
    $exp_date = date('Y-m-d',strtotime("+3 month", strtotime("$joined_date")));}
else if($membership_type==1){ 
    $exp_date = date('Y-m-d',strtotime("+1 month", strtotime("$joined_date")));}

//making point date to get the date interval
$point_date = date('Y-m-d',strtotime("$joined_date"));
$joinpoint_date = new DateTime("$point_date");

$date = date('Y-m-d');
$today = new DateTime($date);


$mem_interval = $today->diff($joinpoint_date);

switch ($mem_interval->m) {
    case 0:$next_mon = 1;break;
    case 1:$next_mon = 2;break;
    case 2:$next_mon = 3;break;
    case 3:$next_mon = 4;break;
    case 4:$next_mon = 5;break;
    case 5:$next_mon = 6;break;
    case 6:$next_mon = 7;break;
    case 7:$next_mon = 8;break;
    case 8:$next_mon = 9;break;
    case 9:$next_mon = 10;break;
    case 10:$next_mon = 11;break;
    case 11:$next_mon = 12;break;  
}


$cur_date = date('Y-m-d');
$today_at = new DateTime("$cur_date");
$point_date = date('0000-00-00');
$today_from = new DateTime("$point_date");
$day_interval = $today_from->diff($today_at);
// making membership interval type from backword
if ($day_interval->d <= 7) {
    $active_week = 4;
} else if ($day_interval->d <= 14) {
    $active_week = 3;
} else if ($day_interval->d <= 21) {
    $active_week = 2;
} else if ($day_interval->d <= 28) {
    $active_week = 1;
}

$date = date('Y-m-d');
$today = new DateTime($date);

$point_date = date('Y-m-d',strtotime("$joined_date"));
$joinpoint_date = new DateTime("$point_date");

$mem_interval2 = $today->diff($joinpoint_date);
//making interval type from forward
if($mem_interval2->d <= 7){
    $active_week2 = 1;
}else if($mem_interval2->d <= 14){
    $active_week2 = 2;
}else if($mem_interval2->d <= 21){
    $active_week2 = 3;
}else if($mem_interval2->d <= 31){
    $active_week2 = 4;
}
$active_month=$day_interval->m;

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
  $pre = round($perc_value);

$total_workout_days = $day1_flag + $day2_flag + $day3_flag + $day4_flag + $day5_flag + $day6_flag + $day7_flag;
$total_per = $full_attendance[$next_mon - 1][$active_week2];
  
//   $active_day_count = ($total_per/100)*$total_workout_days;
// echo "$pre";
$respo = [$pre, $total_workout_days];

// $total_per = $full_attendance[$next_mon - 1][$active_week2];

// $find_prog = "SELECT * FROM {$package_type}m_package_progress WHERE member_id='$member_id';";
// $prog_result = mysqli_query($conn, $find_prog);
// $result_row = mysqli_fetch_assoc($prog_result);

// $attendance_values = $result_row['attendance'];
// $value_holder =json_decode($attendance_values);
// $respo = $value_holder[1][0];

header('Content-Type: application/json');
// $respo = $attendance_values[$next_mon - 1];

// $value_holder =json_decode($attendance_values);
// $respo = $value_holder[$next_mon - 1][$active_week2];
// $respo=$value_holder[6];

// echo "$respo nice";
echo json_encode($respo) ;

die;