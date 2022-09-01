<?php include "includes/check_login.php";

date_default_timezone_set("Asia/Colombo"); ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/calendar.css">
    <link href="css/justselect.css" rel="stylesheet">
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <script>
            function nn() {
                $('.alert').addClass("show");
                $('.alert').removeClass("hide");
                $('.alert').addClass("showAlert");
                setTimeout(function bb() {
                    $('.alert').removeClass("show");
                    $('.alert').addClass("hide");
                }, 4000);
            };
        </script>

        <!-- <button class="err">Show Alert</button> -->
        <div class="alert hide">

            <?php
            if (isset($_SESSION['notification'])) {
                $notification = $_SESSION['notification'];
                echo '<script type="text/javascript">nn();</script>';
            }
            ?>

            <!-- <span class="fas fa-exclamation-circle"></span> -->
            <span class="msg"><?php echo $notification ?></span>
            <div class="close-btn">
                <span class="fas fa-times"></span>
            </div>
        </div>
        <script>
            $('.close-btn').click(function ss() {
                $('.alert').removeClass("show");
                $('.alert').addClass("hide");
            });
        </script>

        <div class="home-content">
            <div class="upper">
                <form action="includes/availability.php" method="POST">
                    <div class="calendar-input">
                        <?php $Date = date('Y-m-d', strtotime(' +1 day')); ?>
                        <input type='Date' name="date" required min="<?php echo $Date; ?>" max="<?php echo date('Y-m-d', strtotime($Date . ' + 14 days')); ?>">
                        <select name="time" id="" class="justselect">
                            <option selected="selected">Full</option>
                            <option>Morning</option>
                            <option>Evening</option>
                        </select>
                        <button type="submit" name="date-submit" class="set_button">SET CLOSE TIME</button>
                    </div>
                </form>
            </div>
            <div class="bottom-div">

                <div id='calendar' class="calendar"></div>
                <div class="calendar-table">
                    <div class="availability-header">
                        <h1>Close Times</h1>
                    </div>
                    <div class="divider">
                        <span class="fade-effect2"> </span>
                    </div>
                    <table class="table-members">
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th></th>
                        </tr>

                        <?php
                        $sql_query = "SELECT * FROM close_times";
                        $result = mysqli_query($conn, $sql_query);
                        while ($availability_row = mysqli_fetch_assoc($result)) {
                            $date = $availability_row['date'];
                            $time_slot = $availability_row['time_slot'];
                            $time_id = $availability_row['close_time_id']
                        ?>
                            <tr>
                                <td><?php echo "$date"; ?></td>
                                <td><?php echo "$time_slot"; ?></td>
                                <td>
                                    <div class="row-action">
                                        <button class="about_btn" onclick="location.href='includes/remove-availability.php?close_time_id=<?php echo $time_id; ?>'">Remove</button>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>

                        <script>
                            var dates = [];
                        </script>
                        <?php
                        $sql_query1 = "SELECT * FROM close_times";
                        $result1 = mysqli_query($conn, $sql_query1);
                        while ($availability_row1 = mysqli_fetch_assoc($result1)) {
                            $date1 = $availability_row1['date'];
                            $time_slot1 = $availability_row1['time_slot'];
                        ?>
                            <script>
                                dates.push({
                                    time_slot: "<?php echo $time_slot1; ?>",
                                    date: "<?php echo $date1; ?>"
                                })
                            </script>
                        <?php } ?>
                        <script>
                            draw(dates.map(obj => {
                                return {
                                    title: obj.time_slot,
                                    start: obj.date
                                }
                            }))

                            function draw(data) {
                                var calendarEl = document.getElementById('calendar');
                                var calendar = new FullCalendar.Calendar(calendarEl, {
                                    initialView: 'dayGridMonth',

                                    events: data,
                                    // eventColor: 'rgb(44,62,80)'
                                });

                                calendar.render();
                            };
                        </script>
                </div>
            </div>
        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>
</body>
<script src="js/justselect.min.js"></script>

</html>

<?php
unset($_SESSION['notification']);
?>