<?php include "includes/check_login.php" ?>

<?php 
    $username = $_SESSION['username'];
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.1.0/main.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">
        <?php require "includes/db.php" ?>
        <?php include "includes/header.php" ?>
        

        <div class="welcomenote"><h1></h1></div>

        <?php 
            // calender constraints setting 
            date_default_timezone_set('Asia/Colombo');
            $date = date('Y-m-d');
            $maxdate = date('Y-m-d',strtotime("+1 week", strtotime($date)));
            $yesterday = date('Y-m-d',strtotime("-1 day", strtotime($date)));
            $overmaxdate = date('Y-m-d',strtotime("+8 day", strtotime($date)));
            $today = $date;
           
            $query1 = "SELECT * FROM member WHERE username = '".$username."'";
            $result1 = mysqli_query($conn, $query1);
            $row1 = mysqli_fetch_assoc($result1);
            
            $member_id = $row1['member_id']; 
        ?>
        <div class="HdividerL">
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
            <div class="alert hide">
                <?php
                    if (isset($_SESSION['notification'])) {
                        $notification = $_SESSION['notification'];
                        echo '<script type="text/javascript">nn();</script>';
                    }
                ?>
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
        </div>
        <div class="uppart">
            <div class="vboderdivider"></div>
            <div class="middle">
                <div class="note"><h2>Booking</h2></div>
                <div class="cont">
                    <div class="left">
                        <div class="bkstatus">
                            <h1>Availability Checker</h1>
                            <div class="avail">
                                <div class="calendar-input">
                                    <input type="date" class="date__input" value=<?php echo $date?> id="bk_date" placeholder=" " name="date" min=<?php echo $date?> max=<?php echo $maxdate?> required>
                                    <button type="submit" class="check_btn"  name="date-submit" id="check_date">CHECK</button>
                                </div>
                                <script>
                                    // check time slots and update the ui view according to that
                                    function slot_update(respo){
                                        if(respo.slot1== true){var i = 1; $('#time_slot option[value='+i+']').prop('disabled',false);}else if(respo.slot1== false){var i = 1; $('#time_slot option[value='+i+']').prop('disabled',true);}
                                        if(respo.slot2== true){var i = 2;  $('#time_slot option[value='+i+']').prop('disabled',false);}else if(respo.slot2== false){var i = 2 ; $('#time_slot option[value='+i+']').prop('disabled',true);}
                                        if(respo.slot3== true){var i = 3;  $('#time_slot option[value='+i+']').prop('disabled',false);}else if(respo.slot3== false){var i = 3 ; $('#time_slot option[value='+i+']').prop('disabled',true);}
                                        if(respo.slot4== true){var i = 4;  $('#time_slot option[value='+i+']').prop('disabled',false);}else if(respo.slot4== false){var i = 4 ; $('#time_slot option[value='+i+']').prop('disabled',true);}
                                        if(respo.slot5== true){var i = 5; $('#time_slot option[value='+i+']').prop('disabled',false);}else if(respo.slot5== false){var i = 5; $('#time_slot option[value='+i+']').prop('disabled',true);}
                                        if(respo.slot6== true){var i = 6;  $('#time_slot option[value='+i+']').prop('disabled',false);}else if(respo.slot6== false){var i = 6 ; $('#time_slot option[value='+i+']').prop('disabled',true);}
                                        if(respo.slot7== true){var i = 7;  $('#time_slot option[value='+i+']').prop('disabled',false);}else if(respo.slot7== false){var i = 7 ; $('#time_slot option[value='+i+']').prop('disabled',true);}
                                        if(respo.slot8== true){var i = 8;  $('#time_slot option[value='+i+']').prop('disabled',false);}else if(respo.slot8== false){var i = 8 ; $('#time_slot option[value='+i+']').prop('disabled',true);}
                                    }

                                    $(document).ready(function() {
                                        $("#check_date").click(function(e) {
                                            var date = $("#bk_date").val();
                                             
                                            if (date != '') {
                                                // alert(date);
                                                $.ajax({
                                                    url: './includes/check-availability.php',
                                                    type: 'post',
                                                    data: {
                                                        date:date
                                                    },
                                                    dataType:'json',
                                                    success: function(respo) {
                                                        console.log("success");
                                                        $('#day').text("in "+date);
                                                        $('#input_date').val(date)
                                                        if( respo.set == 'None'){
                                                                $('#show').removeClass('bx bxs-message-square-check'); $('#show').addClass('bx bxs-message-square-error');
                                                                $('.statbx').css('color','red');
                                                                $('.txtvi').css('display','inline-block');
                                                                $('#unavailable').css('display','inline-block');
                                                                $('#display_slots').children().removeClass("active_grid-item").addClass("deactive_grid-item");
                                                                slot_update(respo);
                                                        }else if( respo.set == 'Done'){
                                                                $('#show').removeClass('bx bxs-message-square-error'); $('#show').addClass('bx bxs-message-square-check');
                                                                $('.statbx').css('color','#86ff71');
                                                                $('.txtvi').css('display','block');
                                                                $('#unavailable').css('display','none');
                                                            if (respo.Main_Slot== "All day") {
                                                            $('#display_slots').children().removeClass("deactive_grid-item").addClass("active_grid-item");
                                                            slot_update(respo);
                                                            } else if ( respo.Main_Slot == "Morning"){
                                                                $('#display_slots').children().removeClass("active_grid-item").addClass("deactive_grid-item");
                                                                $('#slot1').removeClass("deactive_grid-item"); $('#slot1').addClass("active_grid-item");
                                                                $('#slot2').removeClass("deactive_grid-item"); $('#slot2').addClass("active_grid-item");
                                                                $('#slot3').removeClass("deactive_grid-item"); $('#slot3').addClass("active_grid-item");
                                                                $('#slot4').removeClass("deactive_grid-item"); $('#slot4').addClass("active_grid-item");
                                                                slot_update(respo);
                                                            }else if ( respo.Main_Slot == "Evening"){
                                                                $('#display_slots').children().removeClass("active_grid-item").addClass("deactive_grid-item");   
                                                                $('#slot5').removeClass("deactive_grid-item"); $('#slot5').addClass("active_grid-item");
                                                                $('#slot6').removeClass("deactive_grid-item"); $('#slot6').addClass("active_grid-item");
                                                                $('#slot7').removeClass("deactive_grid-item"); $('#slot7').addClass("active_grid-item");
                                                                $('#slot8').removeClass("deactive_grid-item"); $('#slot8').addClass("active_grid-item");
                                                                slot_update(respo);
                                                            }
                                                        }
                                                    },
                                                    error: function(){
                                                        console.log("error");
                                                    }
                                                });
                                            }
                                        });
                                    });
                                </script>
                                <div class="statbx"><i id="show"></i></div>
                                <div class="txtvi">
                                    <p><span id="unavailable"><b>NOT </b></span>Avilable for booking</p>
                                </div>
                            </div>
                        </div>

                        <!-- calender view -->
                        <div id="calendar-t" class="calendar-top">
                            <h1>Calendar</h1>
                            <div id="calendar" class="calendar"></div>
                        </div>
                        <script>
                            var dates = [];
                        </script>
                        <?php
                            $book_query = "SELECT * FROM book Where member_id = '".$member_id."'";
                            $booking_results = mysqli_query($conn,$book_query);
                            while($bookings_row = mysqli_fetch_assoc($booking_results)){
                                $date1 = $bookings_row['date'];
                                $time_slot1 = $bookings_row['time'];
                        ?>
                        <script>
                            dates.push({time_slot:'<?php echo $time_slot1; ?>', date:"<?php echo $date1; ?>",txtclr:"<?php if(date($date1) < $today){echo 'white';}else{echo 'black';} ?>",colorT:"<?php if(date($date1) < $today){echo '#5B5C5F';}else{echo '#86FF71';} ?>"})
                        </script>
                        <?php } ?>
                    </div>


                    <div class="midvdiv"></div>
                    <div class="right">
                        <!-- available time slot  listing section -->
                        <h1>Time slots</h1>
                        <div class="tslotlist">
                            <div class="grid-container" id="display_slots">
                                <div id="slot1" class="deactive_grid-item"> 06.00 a.m. - 08.00 a.m.</div>
                                <div id="slot2" class="deactive_grid-item"> 08.00 a.m. - 10.00 a.m.</div>
                                <div id="slot3" class="deactive_grid-item"> 10.00 a.m. - 12.00 a.m.</div>
                                <div id="slot4" class="deactive_grid-item"> 12.00 a.m. - 02.00 p.m.</div>
                                <div id="slot5" class="deactive_grid-item"> 02.00 p.m. - 04.00 p.m.</div>
                                <div id="slot6" class="deactive_grid-item"> 04.00 p.m. - 06.00 p.m.</div>
                                <div id="slot7" class="deactive_grid-item"> 06.00 p.m. - 08.00 p.m.</div>
                                <div id="slot8" class="deactive_grid-item"> 08.00 p.m. - 10.00 p.m.</div>
                            </div>
                            
                            
                            <div class="selectslot">
                                <form action="makebooking.php" id="form" method="POST" >
                                    <h1>Booking for a time slot</h1> 
                                    <div class="select__div">
                                        <p><i class='bx bxs-time'></i>Select a Time Slot <span id="day"></span></p>
                                        <input type="text" id="input_date" name="date_cc" required>
                                        <label>
                                            <select id="time_slot" class="form_input" name="time_cc" required >
                                                <option value="" disabled selected> Prefer time slot </option>
                                                <option value=1 disabled id="op1"> 6.00 a.m. -  8.00 a.m. </option>
                                                <option value=2 disabled id="op2"> 8.00 a.m. - 10.00 a.m. </option>
                                                <option value=3 disabled id="op3">10.00 a.m. - 12.00 a.m.</option>
                                                <option value=4 disabled id="op4">12.00 a.m. -  2.00 p.m.</option>
                                                <option value=5 disabled id="op5"> 2.00 p.m. -  4.00 p.m.</option>
                                                <option value=6 disabled id="op6"> 4.00 p.m. -  6.00 p.m.</option>
                                                <option value=7 disabled id="op7"> 6.00 p.m. -  8.00 p.m.</option>
                                                <option value=8 disabled id="op8"> 8.00 p.m. - 10.00 p.m.</option>
                                            </select>
                                        </label>  
                                    </div>
                                    <div class="fixT">
                                        <button type="submit" class="check_btn" id="tbook"  name="time-submit">MAKE BOOKING</button>
                                    </div>
                                </form>
                            </div>

                            
                            <div >
                                <div><h1>Fixed Booking List</h1></div>
                                <!-- listed view of fixed bookings -->
                                <table>
                                    <tr>
                                        <th>Date</th>
                                        <th>Time slot</th>
                                        <th></th>
                                    </tr>
                                    <tbody>
                                    <?php
                                        $sql_query = "SELECT * FROM book Where member_id = '".$member_id."' AND date >= '".$date."'";
                                        $result = mysqli_query($conn,$sql_query);
                                        while($availability_row = mysqli_fetch_assoc($result)){
                                            $date = $availability_row['date'];
                                            $time_slot = $availability_row['time'];
                                    ?>
                                        <tr>
                                            <td><?php echo "$date"; ?></td>
                                            <td><?php echo "$time_slot"; ?></td>
                                            <td><div class="row-action"><button class="about_btn" onclick="location.href='includes/cancel_booking.php?book_id=<?php echo $availability_row['book_id'];?>'">Cancel</button></div></td>
                                        </tr>
                                    <?php }?>
                                    <tbody>
                                </table>
        
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="vboderdivider"><?php 
    // $pw = 'AB1234c#s';
    // $password_bb = password_hash("$pw", PASSWORD_DEFAULT);

    // echo "$password_bb";
?>

<p> <?php //echo "$password_bb"; ?></p></div>
        </div>
        <div></div>

        <div class="HdividerL"></div>   
    </section>
    
    <?php include "includes/footer.php" ?>


</body>

   <script type="text/javascript" src="js/calendar.js"> </script>

</html>

<?php
unset($_SESSION['notification']);
?>