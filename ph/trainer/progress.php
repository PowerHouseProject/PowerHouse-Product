<?php include "includes/check_login.php" ?>

<?php
require "includes/db.php";
$member_id = $_GET['member_id'];
$sql1 = "SELECT username,f_name,l_name FROM member WHERE member_id='" . $member_id . "'";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
$f_name = $row['f_name'];
$l_name = $row['l_name'];
$_SESSION['mem_id'] = $member_id;
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/progress_dashboard.css">
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
            ?>

        </div>
        <div class="Hdivider"></div>

        </div>
        <div class="Hdivider"></div>
        <div class="note">
            <h1><?php echo "$f_name $l_name" ?> - Progress</h1>
        </div>
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
                    <p><i class='bx bxs-pin'></i> Weight status category <i class='bx bx-tag-alt'></i><span id=" bmi_c" class="ob"> OBESITY</span></p>
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
                    <p><i class='bx bxs-pin'></i> Body Fat category <i class='bx bx-tag-alt'></i><span id=" bf_c" class="avg"> AVERAGE </span></p>
                </div>
            </div>
            <div class="vboderdivider"></div>
        </div>
        <div class="Hdivider"></div>

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