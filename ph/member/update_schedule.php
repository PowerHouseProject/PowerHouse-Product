<!-- //easier to read use a foreach loop to loop through the $_POST collection and print the values.POST method all passed value checking -->

<!-- <table> -->
<?php 
    // foreach ($_GET as $key => $value) {
    //     echo "<tr>";
    //     echo "<td>";
    //     echo $key;
    //     echo "</td>";
    //     echo "<td>";
    //     echo $value;
    //     echo "</td>";
    //     echo "</tr>";
    // }

?>
<!-- </table> -->

<?php

session_start();

if ($_SESSION['notification']) {
    unset($_SESSION['notification']);
}

require "includes/db.php";


$username = $_SESSION['username'];

$query1 = "SELECT * FROM member WHERE username = '".$username."'";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);

$member_id = $row1['member_id'];

for($m=1;$m<=6;$m++){
    for($n=1;$n<=7;$n++){
        if(isset($_GET["D{$n}_{$m}1"])){
               if($_GET["D{$n}_{$m}1"] != '0'){
                    $i = $_GET["D{$n}_{$m}1"];
                    $j = $_GET["D{$n}_{$m}2"];
                    $k = $_GET["D{$n}_{$m}3"];
                    $l = $_GET["D{$n}_{$m}4"];
                
                    $day_ex = array("$i","$j","$k","$l");
                
                    $dayex_rs = base64_encode(serialize($day_ex));
                    $week=array("day1_ex$m","day2_ex$m","day3_ex$m","day4_ex$m","day5_ex$m","day6_ex$m","day7_ex$m");

                    $column = $week[$n-1];

                    $schedule_insert = "UPDATE schedule SET $column ='$dayex_rs' WHERE member_id='$member_id';";
                    $result2 = mysqli_query($conn, $schedule_insert);
                    
                }else{
                    $i = $_GET["D{$n}_{$m}1"];

                    $day_ex = array("$i");

                    $dayex_rs = base64_encode(serialize($day_ex));
                    $week=array("day1_ex$m","day2_ex$m","day3_ex$m","day4_ex$m","day5_ex$m","day6_ex$m","day7_ex$m");

                    $column = $week[$n-1];

                    $schedule_insert = "UPDATE schedule SET $column ='$dayex_rs' WHERE member_id='$member_id';";
                    $result2 = mysqli_query($conn, $schedule_insert);
                }

            if (!$result2) {
            break;
            }
        }else{
            $week=array("day1_ex$m","day2_ex$m","day3_ex$m","day4_ex$m","day5_ex$m","day6_ex$m","day7_ex$m");

            $column = $week[$n-1];
            
            $schedule_insert = "UPDATE schedule SET $column =NULL WHERE member_id='$member_id';";
            $result2 = mysqli_query($conn, $schedule_insert);
            if (!$result2) {
                break;
            }
        }
    }
    if (!$result2) {
        break;
    }
}


if ($result1 && $result2) {
    $_SESSION['notification'] = " Successfully UPDATED the schedule !";
    header('Location: schedule.php');
} else {
    echo die(mysqli_error($conn));
}