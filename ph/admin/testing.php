<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>

<script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>

<script>
    // Turn input element into a pond
    $('.my-pond').filepond();

    // Turn input element into a pond with configuration options
    $('.my-pond').filepond({
        allowMultiple: true,
    });

    // Set allowMultiple property to true
    $('.my-pond').filepond('allowMultiple', false);

    // Listen for addfile event
    $('.my-pond').on('FilePond:addfile', function(e) {
        console.log('file added event', e);
    });

    // Manually add a file using the addfile method
    $('.my-pond')
        .filepond('addFile', 'index.html')
        .then(function(file) {
            console.log('file added', file);
        });
</script> -->

<?php
include "includes/check_login.php";

//include 'includes/db.php';
// $count_sql1 = "SELECT COUNT(username) FROM users WHERE user_type = 'member'";
// $count_result1 = mysqli_query($conn, $count_sql1);
// $count_row1 = mysqli_fetch_array($count_result1);

// $count_total1 = $count_row1[0];

// $count_sql2 = "SELECT DATEDIFF(NOW(),joined_date) FROM member";
// $count_result2 = mysqli_query($conn, $count_sql2);
// // $new_members = 0;
// // $time = strtotime('10/16/2003');

// // $newformat = date('Y-m-d', $time);
// while ($count_row2 = mysqli_fetch_array($count_result2)) {

//     // $my_date = date('Y-m-d', strtotime($count_row2['joined_date']));
//     // //echo $my_date . " ";
//     // $date1 = date_create("2013-03-15");
//     // $date2 = date_create("2013-12-12");
//     // $diff = date_diff($date1, $date2);
//     // $final_range = round($date_difference / (60 * 60 * 24));
//     // if ($final_range > 30) {
//     //     echo $date_difference . " ";
//     //     $new_members++;
//     // }S

//     echo $count_row2[0] . " ";
// }


// include "includes/db.php";
//session_start();

// $username = $_SESSION['username'];
// $user_type = $_SESSION['user_type'];

// $image_sql = "SELECT image FROM $user_type WHERE username = '$username'";
// $image_sql_run = mysqli_query($conn, $image_sql,);
// $row = mysqli_fetch_array($image_sql_run);

// $image = $row[0];

// $sql = "SELECT * FROM close_times";
// $result = mysqli_query($conn, $sql);
// while ($row = mysqli_fetch_assoc($result)) {

//     $schedules .= "'{name:' . {$row["time_slot"]} .',' . 'date:' . {$row["date"]} . '},' ";
// }

// echo $schedules;
date_default_timezone_set("Asia/Colombo");
$nowDate = date("Y-m-d h:i:sa");
//echo '<br>' . $nowDate;
$start = '12:39:35';
$end   = '24:39:35';
$time = date("H:i:s", strtotime($nowDate));
isWithInTime($start, $end, $time);


function isWithInTime($start, $end, $time)
{

    if (($time >= $start) && ($time <= $end)) {
        echo 'OK';
        return TRUE;
    } else {
        echo 'Not OK';
        return FALSE;
    }
}








?>