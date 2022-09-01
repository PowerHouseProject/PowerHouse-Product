<?php

session_start();

if (isset($_SESSION['notification'])) {
    unset($_SESSION['notification']);
}

require "db.php";

$username = $_SESSION['username'];

$query1 = "SELECT * FROM member WHERE username = '".$username."'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

$member_id = $row1['member_id'];

$query2 = "SELECT * FROM membership WHERE member_id = '".$member_id."'";
$result2 = mysqli_query($conn, $query2);
$row2 = mysqli_fetch_assoc($result2);

$membership_type = $row2['membership_type'];
$package_table = $membership_type.'m_package_progress';


if(isset($_GET['bf_value'])){
    $bf_val = $_GET['bf_value'];
    $month = $_GET['cur_month'];
    $day = $_GET['cur_day'];
    
    $query3 = "SELECT * FROM $package_table WHERE member_id= '".$member_id."'";
    $result3 = mysqli_query($conn, $query3);
    $row3 = mysqli_fetch_assoc($result3);

    if($membership_type == 12 || $member_type == 6){
        $bf_value_list = $row3['bf_values'];
        $value_holder = json_decode($bf_value_list);
        $value_holder[$month-1]=$bf_val;
        $input_list = json_encode($value_holder);

        $query4 = "UPDATE $package_table SET bf_values='$input_list' WHERE member_id= '".$member_id."'";
        $result4 = mysqli_query($conn, $query4);
    }else if($member_type == 3){
        if($day >=14){
            switch ($month) {
                case 0:$point = 0;break;
                case 1:$point = 0;break;
                case 2:$point = 2;break;
                case 3:$point = 4;break;
              }
        }else{
            switch ($month) {
                case 0:$point = 1;break;
                case 1:$point = 1;break;
                case 2:$point = 3;break;
                case 3:$point = 5;break;
              }
        }

        $bf_value_list = $row3['bf_values'];
        $value_holder = json_decode($bf_value_list);
        $value_holder[$point]=$bf_val;
        $input_list = json_encode($value_holder);

        $query4 = "UPDATE $package_table SET bf_values='$input_list' WHERE member_id= '".$member_id."'";
        $result4 = mysqli_query($conn, $query4);

    }else if($member_type == 1){

        if($day <= 7){
            $point = 3;
        }else if($day <= 14){
            $point = 2;
        }else if($day <= 21){
            $point = 1;
        }else{
            $point = 0;
        }
        $bf_value_list = $row3['bf_values'];
        $value_holder = json_decode($bf_value_list);
        $value_holder[$point]=$bf_val;
        $input_list = json_encode($value_holder);

        $query4 = "UPDATE $package_table SET bf_values='$input_list' WHERE member_id= '".$member_id."'";
        $result4 = mysqli_query($conn, $query4);
    }

    if ($result1 && $result2 && $result3 && $result4) {
        $_SESSION['notification'] = "Successfully update the BODY FAT value!";
        header('Location: ../progress.php');
    } else {
        echo die(mysqli_error($conn));
    }
}else{
  
    switch ($membership_type) {
        case 12:$point = 12;break;
        case 6:$point = 6;break;
        case 3:$point = 6;break;
        case 1:$point = 4;break;
      }

      $bf_value_list = $row3['bf_values'];
      $value_holder = json_decode($bf_value_list);

      for($i=1; $i<=$point;$i++){
       

        $temp_val = $_GET["M1_{$i}1"];
          if($temp_val > 0){
            $value_holder[$i-1]=$temp_val;
            $input_list = json_encode($value_holder);
    
            $query4 = "UPDATE $package_table SET bf_values='$input_list' WHERE member_id= '".$member_id."'";
            $result4 = mysqli_query($conn, $query4);

            if ($result4) {
                continue;
            } else {
                echo die(mysqli_error($conn));
            }
          }
      }

    if ($result1 && $result2 && $result4) {
        $_SESSION['notification'] = "Successfully update the BODY FAT values!";
        header('Location: ../progress.php');
    } else {
        echo die(mysqli_error($conn));
    }
}
