<?php

session_start();

require "db.php";
$username = $_SESSION['username'];

$query1 = "SELECT * FROM member WHERE username = '".$username."'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

$member_id = $row1['member_id'];

if(isset($_POST['day']) && isset($_POST['state'])){
    $day =  $_POST['day'];
    $state =  $_POST['state'];

    $query2 = "SELECT * FROM membership WHERE member_id = '".$member_id."'";
    $result2 = mysqli_query($conn, $query2);
    $row2 = mysqli_fetch_assoc($result2);


    $package_type = $row2['membership_type'];

    $membership_type = $row2['membership_type']; 
    $joined_date = $row2['joined_date'];

    $package_table = $membership_type.'m_package_progress';

    if($membership_type==12){ 
        $exp_date = date('Y-m-d',strtotime("+12 month", strtotime("$joined_date")));}
    else if($membership_type==6){ 
        $exp_date = date('Y-m-d',strtotime("+6 month", strtotime("$joined_date")));}
    else if($membership_type==3){ 
        $exp_date = date('Y-m-d',strtotime("+3 month", strtotime("$joined_date")));}
    else if($membership_type==1){ 
        $exp_date = date('Y-m-d',strtotime("+1 month", strtotime("$joined_date")));}

    $point_date = date('Y-m-d',strtotime("$joined_date"));
    $joinpoint_date = new DateTime("$point_date");

    $date = date('Y-m-d');
    $today = new DateTime($date);

    $mem_interval = $today->diff($joinpoint_date);

    if($mem_interval->d <= 7){
        $active_week = 1;
    }else if($mem_interval->d <= 14){
        $active_week = 2;
    }else if($mem_interval->d <= 21){
        $active_week = 3;
    }else if($mem_interval->d <= 31){
        $active_week = 4;
    }


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
    echo $next_mon; echo $active_week;

    $find_attendance = "SELECT * FROM {$package_type}m_package_progress WHERE member_id='$member_id';";
    $attendance_result = mysqli_query($conn, $find_attendance);

    $result_row = mysqli_fetch_assoc($attendance_result);
    $attendace = $result_row['attendance'];

    $full_attendance = json_decode($attendace);

    for($m=0;$m<=6;$m++){ 
        $week=array("day1_ex1","day2_ex1","day3_ex1","day4_ex1","day5_ex1","day6_ex1","day7_ex1");

        $column = $week[$m];
        $find = "SELECT $column FROM schedule WHERE member_id='$member_id';";
        $result2 = mysqli_query($conn, $find);

        $row = mysqli_fetch_assoc($result2);
        $en_rs = $row["$week[$m]"];

        $ex1 = unserialize(base64_decode($en_rs));
        $out[$m]=$ex1;
    }

    if($out[0]==''){$day1_flag=0;}else if($out[0][0]!='0'){$day1_flag=1;}else if($out[0][0]== '0'){$day1_flag=0;}
    if($out[1]==''){$day2_flag=0;}else if($out[1][0]!='0'){$day2_flag=1;}else if($out[1][0]== '0'){$day2_flag=0;}
    if($out[2]==''){$day3_flag=0;}else if($out[2][0]!='0'){$day3_flag=1;}else if($out[2][0]== '0'){$day3_flag=0;}
    if($out[3]==''){$day4_flag=0;}else if($out[3][0]!='0'){$day4_flag=1;}else if($out[3][0]== '0'){$day4_flag=0;}
    if($out[4]==''){$day5_flag=0;}else if($out[4][0]!='0'){$day5_flag=1;}else if($out[4][0]== '0'){$day5_flag=0;}
    if($out[5]==''){$day6_flag=0;}else if($out[5][0]!='0'){$day6_flag=1;}else if($out[5][0]== '0'){$day6_flag=0;}
    if($out[6]==''){$day7_flag=0;}else if($out[6][0]!='0'){$day7_flag=1;}else if($out[6][0]== '0'){$day7_flag=0;}

    $total_workout_days = $day1_flag + $day2_flag + $day3_flag + $day4_flag + $day5_flag + $day6_flag + $day7_flag;


    if ($state == true) {
            $percentage = ((int)$day*100)/$total_workout_days;
            $full_attendance[$next_mon - 1][$active_week] = $percentage;

            for($i=1; $i<=$active_week;$i++){
                $total_p_val = $total_p + $full_attendance[$next_mon - 1][$i];
            }
            $total_p = ($total_p_val)/$active_week;
            $full_attendance[$next_mon - 1][0]=$total_p;

            $input_list = json_encode($full_attendance);

            $query4 = "UPDATE $package_table SET attendance='$input_list' WHERE member_id= '".$member_id."'";
            $result4 = mysqli_query($conn, $query4);


    }else{
            $percentage = (((int)$day-1)*100)/$total_workout_days;
            $full_attendance[$next_mon - 1][$active_week] = $percentage;

            for($i=1; $i<=$active_week;$i++){
                $total_p_val = $total_p + $full_attendance[$next_mon - 1][$i];
            }
            $total_p = ($total_p_val)/$active_week;
            $full_attendance[$next_mon - 1][0]=$total_p;

            $input_list = json_encode($full_attendance);

            $query4 = "UPDATE $package_table SET attendance='$input_list' WHERE member_id= '".$member_id."'";
            $result4 = mysqli_query($conn, $query4);
    }
}else{
    echo "post request failed!";
}

    header('Content-Type: application/json');


    die;