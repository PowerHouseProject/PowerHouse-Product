<?php
include "db.php";
session_start();
date_default_timezone_set("Asia/Colombo");

if ($_SESSION['notification']) {
    unset($_SESSION['notification']);
}

if(isset($_POST['date-submit'])){
    $trainer_id=$_SESSION['trainer_id'];
    $date = $_POST['date'];
    $date=date("Y-m-d",strtotime($date));
    $slot = $_POST['time'];
    $currentTime = time();

    $sql1 = "SELECT * FROM close_times WHERE date = '".$date."'";
    $result1 = mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_assoc($result1);

    $time_slot=$row1['time_slot'];

    if(($time_slot!='') && ($slot!="All day")){
            if (($date !== date("Y-m-d")) && ($time_slot!=$slot) && ($time_slot != "Full")){
            $sql_query="INSERT INTO availability(trainer_id, date, time_slot) VALUES('$trainer_id','$date','$slot')";
            mysqli_query($conn,$sql_query);
            header("location: ../calendar.php");  
            $_SESSION['notification'] = "Successfully set availability";}

            elseif (((int) date('H', $currentTime)) <= 06 && ($slot == "All day" || $slot == "Morning" || $slot == "Evening") && ($time_slot!=$slot) && ($time_slot != "Full")){
            $sql_query="INSERT INTO availability(trainer_id, date, time_slot) VALUES('$trainer_id','$date','$slot')";
            mysqli_query($conn,$sql_query);
            header("location: ../calendar.php");  
            $_SESSION['notification'] = "Successfully set availability";
            }

            elseif (((int) date('H', $currentTime)) <= 14 && ($slot == "Evening") && ($time_slot!=$slot) && ($time_slot != "Full")){
                $sql_query="INSERT INTO availability(trainer_id, date, time_slot) VALUES('$trainer_id','$date','$slot')";
                mysqli_query($conn,$sql_query);
                header("location: ../calendar.php");  
                $_SESSION['notification'] = "Successfully set availability";
            }
            else{
                header("location: ../calendar.php");  
                $_SESSION['notification'] = "Academy is closed!";
            }
        }
    elseif($time_slot==''){
        if (($date !== date("Y-m-d")) && ($time_slot!=$slot) && ($time_slot != "Full")){
        $sql_query="INSERT INTO availability(trainer_id, date, time_slot) VALUES('$trainer_id','$date','$slot')";
        mysqli_query($conn,$sql_query);
        header("location: ../calendar.php");  
        $_SESSION['notification'] = "Successfully set availability";}

        elseif (((int) date('H', $currentTime)) <= 06 && ($slot == "All day" || $slot == "Morning" || $slot == "Evening") && ($time_slot!=$slot) && ($time_slot != "Full")){
        $sql_query="INSERT INTO availability(trainer_id, date, time_slot) VALUES('$trainer_id','$date','$slot')";
        mysqli_query($conn,$sql_query);
        header("location: ../calendar.php");  
        $_SESSION['notification'] = "Successfully set availability";
        }

        elseif (((int) date('H', $currentTime)) <= 14 && ($slot == "Evening") && ($time_slot!=$slot) && ($time_slot != "Full")){
            $sql_query="INSERT INTO availability(trainer_id, date, time_slot) VALUES('$trainer_id','$date','$slot')";
            mysqli_query($conn,$sql_query);
            header("location: ../calendar.php");  
            $_SESSION['notification'] = "Successfully set availability";
        }
        else{
            header("location: ../calendar.php");  
            $_SESSION['notification'] = "Please select a valid time-slot";
        }
    }
    else{
        header("location: ../calendar.php");  
        $_SESSION['notification'] = "Academy is closed!";
    }
}

?>