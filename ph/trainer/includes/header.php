<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="../admin/includes/dist/css/pignose.calendar.css" />
<link rel="stylesheet" type="text/css" href="../admin/css/header.css" />

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
<script type="text/javascript" src="../admin/includes/dist/js/pignose.calendar.full.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

<?php
// include "includes/db.php";
//session_start();

$my_username = $_SESSION['username'];
$my_user_type = $_SESSION['user_type'];
$academy_open = 0;
$open_flag = 0;

$my_image_sql = "SELECT image FROM $my_user_type WHERE username = '$my_username'";
$my_image_sql_run = mysqli_query($conn, $my_image_sql);
$my_row = mysqli_fetch_array($my_image_sql_run);

$my_image = $my_row[0];

$sql = "SELECT * FROM close_times";
$result = mysqli_query($conn, $sql);
$schedules = '';

$schedule_array = array();
while ($row = mysqli_fetch_assoc($result)) {

    $schedules .= "{name: . '{$row["time_slot"]}' ., . date: . '{$row["date"]}' .}*";

    //$schedule_array("name => $row[time_slot]", "date => $row[date]");
}

//echo $schedule_array;

//$schedules = '[' . $schedules . ']';

//echo $schedules;



date_default_timezone_set("Asia/Colombo");



// function isWithInTime($start, $end, $time)
// {
//     //echo $start . $end . $time;
//     if (($time > $start) && ($time < $end)) {
//         echo 'OK';
//         //return TRUE;
//         global $academy_open;

//         $academy_open = 1;
//         //return true;
//     } else {
//         global $academy_open;

//         //echo "not ok";

//         $academy_open = 0;
//         //return false;
//     }
// }

// function isNotWithInTime($start, $end, $time)
// {

//     if (($time > $start) && ($time < $end)) {
//         // echo 'OK';
//         //return TRUE;

//         global $academy_open;
//         $academy_open = 0;
//     } else {

//         echo "jk";
//         global $academy_open;
//         $academy_open = 1;
//     }
// }

// $nowDate = date("Y-m-d h:i:sa");

// $time = date("H:i:s", strtotime($nowDate));

// $today = date("2021-10-30 01:00:00");

// $time2 = date("H:i:s", strtotime($today));

// if ($time > $time2) {
//     echo "ok";
// } else {
//     echo "not ok";
// }

$today = date("Y-m-d");
$today_time = strtotime($today);
//echo $today_time;
$sql2 = "SELECT * FROM close_times";


$result2 = mysqli_query($conn, $sql2);

$nowDate = date("Y-m-d h:i:sa");
//echo '<br>' . $nowDate;

$start_time = date("2021-10-30 06:00:00");
$end_time = date("2021-10-30 22:00:00");

$start = date("H:i:s", strtotime($start_time));;
$end   = date("H:i:s", strtotime($end_time));;;
$time = date("H:i:s", strtotime($nowDate));
if (($time > $start) && ($time < $end)) {

    if (mysqli_num_rows($result2) == 0) {

        // $nowDate = date("Y-m-d h:i:sa");
        // //echo '<br>' . $nowDate;

        // $start_time = date("2021-10-30 06:00:00");
        // $end_time = date("2021-10-30 22:00:00");

        // $start = date("H:i:s", strtotime($start_time));;
        // $end   = date("H:i:s", strtotime($end_time));;;
        // $time = date("H:i:s", strtotime($nowDate));
        // isWithInTime($start, $end, $time);
        echo "dfsdf";
        $academy_open = 1;
    } else {
        //echo "qq";

        while ($row2 = mysqli_fetch_assoc($result2)) {

            if ($today_time == strtotime($row2['date'])) {

                $open_flag = 1;

                if ($row2['time_slot'] == 'Full') {
                    // echo "dd";
                    $academy_open = 0;
                    //echo $academy_open;
                } elseif ($row2['time_slot'] == 'Morning') {

                    $nowDate = date("Y-m-d h:i:sa");
                    //echo '<br>' . $nowDate;

                    //echo "df";

                    $start_time = date("2021-10-30 06:00:00");
                    $end_time = date("2021-10-30 14:00:00");

                    $start = date("H:i:s", strtotime($start_time));;
                    $end   = date("H:i:s", strtotime($end_time));;;
                    $time = date("H:i:s", strtotime($nowDate));
                    if (($time > $start) && ($time < $end)) {
                        $academy_open = 0;
                    } else {
                        echo "sdfdg";
                        $academy_open = 1;
                    }
                    //isNotWithInTime($start, $end, $time);
                } elseif ($row2['time_slot'] == 'Evening') {

                    $nowDate = date("Y-m-d h:i:sa");
                    //echo '<br>' . $nowDate;

                    $start_time = date("2021-10-30 14:00:00");
                    $end_time = date("2021-10-30 22:00:00");

                    $start = date("H:i:s", strtotime($start_time));;
                    $end   = date("H:i:s", strtotime($end_time));;;
                    $time = date("H:i:s", strtotime($nowDate));

                    if (($time > $start) && ($time < $end)) {
                        $academy_open = 0;
                    } else {
                        echo "sss";
                        $academy_open = 1;
                    }
                }
                // else {
                // }
            }
            // else {

            //     // $nowDate = date("Y-m-d h:i:sa");
            //     // //echo '<br>' . $nowDate;

            //     // $start_time = date("2021-10-30 06:00:00");
            //     // $end_time = date("2021-10-30 22:00:00");

            //     // $start = date("H:i:s", strtotime($start_time));;
            //     // $end   = date("H:i:s", strtotime($end_time));;;
            //     // $time = date("H:i:s", strtotime($nowDate));
            //     // isWithInTime($start, $end, $time);
            //     echo "ww";
            //     $academy_open = 1;
            // }
        }
        //$row = mysqli_fetch_assoc($result2);



        //echo "dfsdf333";
        if ($open_flag == 0) {
            $academy_open = 1;
        } else {
            $open_flag = 0;
        }
    }
} else {
    //echo "sdfdsf";
    $academy_open = 0;
}




//$academy_open = 1;
//echo $academy_open;




?>

<nav>
    <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
    </div>
    <!-- <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div> -->
    <div class="profile-details" id="cv">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class='admin_name' id="open_id"> Academy is open now </span>

        <i class='bx bx-chevron-down' class="btn-calendar" id="cvc"></i>
    </div>
    <div class="tooltip"><i class="fas fa-question-circle"></i>
        <span class="tooltiptext">How to read the calendar?<br><br>You can check the close times of the academy within two weeks from today<br><br>
            <div class="red">
                <p><i class="fas fa-circle "> </i>&nbsp All day closed</p>
            </div><br>
            <div class="orange">
                <p><i class="fas fa-circle "> </i>&nbsp Morning Closed (6 A.M to 2 P.M)</p>
            </div><br>
            <div class="yellow">
                <p><i class="fas fa-circle "> </i>&nbsp Evening Closed (2 P.M to 10 P.M)</p>
            </div>


        </span>
    </div>

    <div class="header-img">
        <a href="./profile.php"><img src="./media/trainers/<?php echo $my_image ?>" alt=" no image"></a>
    </div>
</nav>

<script>
    var academy_open = "<?php print($academy_open); ?>";
    if (academy_open == 0) {
        document.getElementById("cv").classList.add('profile-details2');
        document.getElementById("open_id").textContent = "Academy is closed now";
        document.getElementById("open_id").classList.add('admin_name2');
        document.getElementById("cvc").classList.add('icon2');

    }


    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    var fortnightAway = new Date(Date.now() + 12096e5);

    var dd2 = String(fortnightAway.getDate()).padStart(2, '0');
    var mm2 = String(fortnightAway.getMonth() + 1).padStart(2, '0');
    var yyyy2 = fortnightAway.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;
    todayafter = yyyy2 + '-' + mm2 + '-' + dd2;

    var javaScriptVar = "<?php echo $schedules; ?>";
    //var outputstr = javaScriptVar.replace(/'/g, '');

    dotsRemoved = javaScriptVar.replaceAll('.', '');
    usingSplit = dotsRemoved.split('*');

    // json object.
    contents = '{"firstName":"John", "lastName":"Doe"}';

    var myArray = [];

    for (i in usingSplit) {

        console.log(usingSplit[i]);

        //var obj = JSON.parse(JSON.stringify(usingSplit[i]));
        // console.log(obj);
        // console.log(typeof(obj));
        myArray.push(usingSplit[i]);

    }

    myArray.pop();

    console.log(myArray)

    var newArray = myArray.map(s => eval('null,' + s));

    console.log(newArray);

    // Option 1: through the use of an array.
    // $jsonArray = json_decode($contents, true);

    // var obj = {};
    // for (var i = 0; i < usingSplit.length; i++) {
    //     var split = usingSplit[i].split(':');
    //     obj[usingSplit[0].trim()] = usingSplit[1].trim();
    // }

    var $btn = $('.profile-details').pignoseCalendar({
        //apply: onApplyHandler,
        modal: true, // It means modal will be showed when you click the target button.
        buttons: false,
        minDate: today,
        maxDate: todayafter,
        theme: 'dark',
        schedules: newArray,
        scheduleOptions: {

            colors: {
                'Full': '#FF0000',
                'Morning': '#FFA500',
                'Evening': '#FFFF00',
            }
        },

        contents: {



        },


        // select: function(date, context) {
        //     alert('events for this date', toString(context.storage.schedules));
        //     console.log('events for this date', toString(context.storage.schedules));
        // }
    });

    // document.getElementsByClassName("pignose-calendar-top-year").textContent += " This is the text from javascript.";


    //console.log(dotsRemoved);
    //// console.log(typeof(usingSplit[0]));
    //onsole.log(usingSplit[1]);

    // var myJsonString = JSON.stringify(usingSplit);
    //console.log(myArray);

    // let data = ["{lat:-8.089057558100306,lng:112.15251445770264}", "{lat:-8.100954123313068,lng:112.15251445770264}", "{lat:-8.100954123313068,lng:112.1782636642456}", "{lat:-8.087867882261257,lng:112.17800617218018}", "{lat:-8.089057558100306,lng:112.15251445770264}"];



    //console.log(myArray.map(s => eval('null,' + s)));
    // var myJsonString2 = JSON.stringify(dotsRemoved);
    // console.log(typeof(dotsRemoved))

    // var removed = usingSplit.replace(/"/g, '');
    //console.log($jsonArray)
</script>