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

               
$monday_bkft = $_POST['mon_b'];$tuseday_bkft = $_POST['tus_b'];$wednesday_bkft = $_POST['wed_b'];$thursday_bkft = $_POST['thu_b'];$friday_bkft = $_POST['fri_b'];$saturday_bkft = $_POST['sat_b'];$sunday_bkft = $_POST['sun_b'];
$monday_msnk = $_POST['mon_ms'];$tuseday_msnk = $_POST['tus_ms'];$wednesday_msnk = $_POST['wed_ms'];$thursday_msnk = $_POST['thu_ms'];$friday_msnk = $_POST['fri_ms'];$saturday_msnk = $_POST['sat_ms'];$sunday_msnk = $_POST['sun_ms'];
$monday_lunch = $_POST['mon_l'];$tuseday_lunch = $_POST['tus_l'];$wednesday_lunch = $_POST['wed_l'];$thursday_lunch = $_POST['thu_l'];$friday_lunch = $_POST['fri_l'];$saturday_lunch = $_POST['sat_l'];$sunday_lunch = $_POST['sun_l'];
$monday_esnk = $_POST['mon_esn'];$tuseday_esnk = $_POST['tus_esn'];$wednesday_esnk = $_POST['wed_esn'];$thursday_esnk = $_POST['thu_esn'];$friday_esnk = $_POST['fri_esn'];$saturday_esnk = $_POST['sat_esn'];$sunday_esnk = $_POST['sun_esn']; 
$monday_din = $_POST['mon_di'];$tuseday_din = $_POST['tus_di'];$wednesday_din = $_POST['wed_di'];$thursday_din = $_POST['thu_di'];$friday_din = $_POST['fri_di'];$saturday_din = $_POST['sat_di'];$sunday_din = $_POST['sun_di'];


$mealplan_insert = "UPDATE meal_plan SET monday_bkft='$monday_bkft', tuseday_bkft='$tuseday_bkft',wednesday_bkft='$wednesday_bkft',thursday_bkft='$thursday_bkft',friday_bkft='$friday_bkft',saturday_bkft='$saturday_bkft',sunday_bkft='$sunday_bkft',
monday_msnk='$monday_msnk', tuseday_msnk='$tuseday_msnk',wednesday_msnk='$wednesday_msnk',thursday_msnk='$thursday_msnk',friday_msnk='$friday_msnk',saturday_msnk='$saturday_msnk',sunday_msnk='$sunday_msnk',
monday_lunch='$monday_lunch', tuseday_lunch='$tuseday_lunch',wednesday_lunch='$wednesday_lunch',thursday_lunch='$thursday_lunch',friday_lunch='$friday_lunch',saturday_lunch='$saturday_lunch',sunday_lunch='$sunday_lunch',
monday_esnk='$monday_esnk', tuseday_esnk='$tuseday_esnk',wednesday_esnk='$wednesday_esnk',thursday_esnk='$thursday_esnk',friday_esnk='$friday_esnk',saturday_esnk='$saturday_esnk',sunday_esnk='$sunday_esnk',
monday_din='$monday_din', tuseday_din='$tuseday_din',wednesday_din='$wednesday_din',thursday_din='$thursday_din',friday_din='$friday_din',saturday_din='$saturday_din',sunday_din='$sunday_din'
WHERE member_id='$member_id';";


$result2 = mysqli_query($conn, $mealplan_insert);

if ($result2) {
    $_SESSION['notification'] = "Successfully UPDATED the meal plan !";
    header('Location: mealplan.php');
} else {
    echo die(mysqli_error($conn));
}