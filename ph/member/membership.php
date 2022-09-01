<?php include "includes/check_login.php" ?>

<?php
require "includes/db.php";
$username = $_SESSION['username'];
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/membership.css">
    <link rel="stylesheet" href="css/rate.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <div class="welcomenote">
            <h1></h1>
        </div>
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
        <?php

        date_default_timezone_set('Asia/Colombo');

        $query1 = "SELECT * FROM member WHERE username = '" . $username . "'";
        $result1 = mysqli_query($conn, $query1);
        $row1 = mysqli_fetch_assoc($result1);

        $member_id = $row1['member_id'];
        $trainer_assignment = $row1['assign_trainer'];

        $query2 = "SELECT * FROM membership  WHERE member_id = '" . $member_id . "'";
        $result2 = mysqli_query($conn, $query2);
        $row2 = mysqli_fetch_assoc($result2);

        $membership_type = $row2['membership_type'];
        $joined_date = $row2['joined_date'];

        $exp_date;

        // membership expiery calculation
        if ($membership_type == 12) {
            $exp_date = date('Y-m-d', strtotime("+12 month", strtotime("$joined_date")));
        } else if ($membership_type == 6) {
            $exp_date = date('Y-m-d', strtotime("+6 month", strtotime("$joined_date")));
        } else if ($membership_type == 3) {
            $exp_date = date('Y-m-d', strtotime("+3 month", strtotime("$joined_date")));
        } else if ($membership_type == 1) {
            $exp_date = date('Y-m-d', strtotime("+1 month", strtotime("$joined_date")));
        }

        $date = date('Y-m-d');
        $today = new DateTime($date);

        $mem_date = new DateTime("$joined_date");
        $membexp_date = new DateTime("$exp_date");

        //membership duration calculation
        $mem_interval = $today->diff($membexp_date);

        if ($mem_date  == $today) {

            if ($membership_type == 12) {
                $mem_interval->y = 00;
                $mem_interval->m = 12;
                $mem_interval->d = 00;
            }
        }

        //trainer assignment flag setting
        if ($trainer_assignment == 0) {
            $flag = 0;
        } else {
            $flag = 1;

            $assignment_query = "SELECT * FROM assignment WHERE member_id =$member_id AND trainer_id =$trainer_assignment ORDER BY assignment_id DESC;";
            $assignment_result = mysqli_query($conn, $assignment_query);
            $assignment_row = mysqli_fetch_assoc($assignment_result);

            $t_assign_d = $assignment_row['start_date'];
            $t_exp_d = $assignment_row['end_date'];
            $date = date('Y-m-d');

            $today = new DateTime($date);
            $t_assign_date = new DateTime($t_assign_d);
            $t_exp_date = new DateTime($t_exp_d);

            //trainer duartion calculation
            $tr_interval = $today->diff($t_exp_date);
        }

        ?>
        <div class="board">
            <div class="vboderdivider"></div>
            <div class="dubar">
                <!-- dashboard detail view -->
                <div class="duhead">
                    <h2>Membership</h2>
                </div>
                <div class="mainbar">
                    <div class="duline1">
                        <div class="typ1">
                            <h1><?php echo $membership_type ?> Month Membership</h1>
                        </div>
                        <div class="remain">
                            <h2>MONTHS</h2>
                            <div class="time">
                                <h1><?php echo $mem_interval->m ?></h1>
                            </div>
                        </div>
                        <div class="remain">
                            <h2>DAYS</h2>
                            <div class="time">
                                <h1><?php echo $mem_interval->d ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="duline2">
                        <?php
                        if ($flag == 1) {
                            $icon = "'bx bxs-user-check'";
                            $t_assign_status = "Trainer Assignment";
                        } else {
                            $icon = "'bx bxs-user-x'";
                            $t_assign_status = "No Trainer Assignment";
                        }
                        ?>
                        <div class="typ1"><i class=<?php echo $icon ?>></i>
                            <h1><?php echo $t_assign_status ?></h1>
                        </div>
                        <?php if ($flag != 0) {
                            echo "<div class='remain'><h2>DAYS</h2><div class='time'><h1>";
                            if ($tr_interval->m == 1) {
                                echo "30";
                            } else {
                                echo "$tr_interval->d";
                            }
                            echo "</h1></div></div>";
                        } ?>
                    </div>
                </div>
                <div class="duhead">
                    <?php

                    $query3 = "SELECT * FROM extend_membership  WHERE member_id = '" . $member_id . "'";
                    $result3 = mysqli_query($conn, $query3);

                    if (mysqli_num_rows($result3) != 0) {
                        $result3 = mysqli_query($conn, $query3);
                        $row3 = mysqli_fetch_assoc($result3);

                        $membership_type = $row3['membership_type'];

                        echo " 
                                <div class='success'>
                                    <p><strong>ACTIVE $membership_type MONTH</strong> <i> EXTEND packge</i></p>
                                </div>";
                    } else {
                        echo " 
                                <div class='not_success'>
                                    <p><strong>NO any ACTIVE </strong> <i> EXTEND packge</i></p>
                                </div>";
                    }

                    ?>
                </div>
            </div>
            <div class="vboderdivider"></div>
        </div>
        <div class="divid"></div>
        <?php
        // iff there is a assign trainer get relavent data  
        if ($trainer_assignment != 0) {
            $trainer_id = $trainer_assignment;
            $assign_trainer_query = "SELECT * FROM trainer WHERE trainer_id = $trainer_id";
            $trainer_result = mysqli_query($conn, $assign_trainer_query);
            $trainer_row = mysqli_fetch_assoc($trainer_result);

            $trainer_f_name = $trainer_row['f_name'];
            $trainer_l_name = $trainer_row['l_name'];
            $trainer_image = $trainer_row['image'];
            $trainer_rate = $trainer_row['rate'];
            $trainer_phone_no = $trainer_row['phone_no'];
            $date_joined = $trainer_row['joined_date'];


            $today = date("Y-m-d");
            $diff = date_diff(date_create($date_joined), date_create($today));

            $rate_tr_query = "SELECT * FROM review WHERE trainer_id = $trainer_id";
            $review_query = mysqli_query($conn, $rate_tr_query);

            $review_count = mysqli_num_rows($review_query);
            if ($review_count == 0) {
                $final_rating = 'No Reviews Yet';
            } else {
                $review_value = 0;
                while ($row6 = mysqli_fetch_assoc($review_query)) {
                    $review_value += $row6['stars'];
                }
                $final_rating = $review_value / $review_count;
            }
        }
        ?>
        <!-- popups for scenarios -->
        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Hi <?php echo $username ?> </h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <div class="msg">You are already assigned with <b><?php echo $trainer_f_name . " " . $trainer_l_name ?> </b><?php echo $final_rating ?>(⭐).</div>
                    <div class="later">Try again after the assignment duration.</div>
                </div>
            </div>
        </div>
        <div id="popup2" class="overlay">
            <div class="popup">
                <h2>Hi <?php echo $username ?> </h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <div class="msg" id="pop2tr_name">
                        <p></p>
                    </div>
                    <div class="later">Try to assign with another trainer who is available at the moment.</div>
                </div>
            </div>
        </div>
        <div id="popup5" class="overlay">
            <div class="popup">
                <h2>Sorry! <?php echo $username ?> </h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <div class="msg">You can <b>only</b> use this review option <b>after 15 Days</b> from trainer assignment</div>
                    <div class="later">Try again later.</div>
                </div>
            </div>
        </div>
        <div id="popup3" class="overlay">
            <div class="popup">
                <h2>Hi <?php echo $username ?> </h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <div class="aper">
                        <div class="joined-date">
                            <p>You can Assignment with </p>
                        </div>
                        <div class="name" id="pop3tr_name">
                            <p></p>
                        </div>
                        <div class="avatar">
                            <img src="" id="pop3tr_image">
                        </div>
                        <div class="button-inner">
                            <div class="about_button"><button class="about_btn" id="profile" onclick="">PROFILE</button></div>
                        </div>
                        <div class="stat">
                            <div class="exp" id="pop3tr_expi">
                                <p></p>
                            </div>
                            <div class="rate" id="pop3tr_ratei">
                                <p></p>
                            </div>
                            <div class="review-count" id="pop3tr_counti">
                                <p></p>
                            </div>
                        </div>
                        <div class="msg">So, Do you really want to make this assign with him ?</div>
                        <div class="later"><button class="about_btn" onclick="submit_for_tr();">YES</button><button class="about_btn" onclick="location.href='#'">NO</button></div>
                    </div>
                    <form action="add-tr_payment.php" id="tr_form" method="GET">
                        <input type="text" id="intr_id" name="trainer_id" value="">
                    </form>
                </div>
            </div>
        </div>

        <!-- trainer rating popup -->
        <div id="rate_popup" class="overlay">
            <div class="container">
                <div class="post">
                    <div class="text">Thanks for rating!</div>
                    <div class="edit">EDIT</div>
                </div>
                <div class="star-widget">
                    <input type="radio" name="rate" id="rate-5" onclick="changerate(5);"><label for="rate-5" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-4" onclick="changerate(4);"><label for="rate-4" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-3" onclick="changerate(3);"><label for="rate-3" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-2" onclick="changerate(2);"><label for="rate-2" class="fas fa-star"></label>
                    <input type="radio" name="rate" id="rate-1" onclick="changerate(1);"><label for="rate-1" class="fas fa-star"></label>

                    <form action="making_rating.php" id="rating_form" method="POST">
                        <header></header>
                        <div class="textarea">
                            <input type="hidden" id="trainer_id_f" name="trainer" value=<?php echo $trainer_id ?>>
                            <input type="hidden" id="trainer_rate" name="rating">
                            <textarea cols="30" placeholder="Describe your experience.." id="desc_txtb" name="review" required></textarea>
                        </div>
                        <div class="btn">
                            <button type="submit">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- renew membership section -->
        <div class="btmsec">
            <div class="vboderdivider"></div>
            <div class="meship">
                <div class="ren">
                    <div class="note2">
                        <h1>Renew Membership</h1>
                    </div>

                    <div class="selpack">
                        <div class="bt"><button class="readmore_btn" id="mon1" data-value=2500>01 MONTH</button></div>
                        <div class="bt"><button class="readmore_btn" id="mon3" data-value=7000>03 MONTH</button></div>
                        <div class="bt"><button class="readmore_btn" id="mon6" data-value=10000>06 MONTH</button></div>
                        <div class="bt"><button class="readmore_btn" id="mon12" data-value=20000>12 MONTH</button></div>
                    </div>
                    <div class="amount">
                        <p><span id="mval">0</span>.00 LKR</p>
                    </div>
                    <div class="pay">
                        <button class="hero_btn" onclick="submitFunction()">GO FOR PAYMENT</button>
                    </div>
                    <div class="note2">
                        <h1>Payment History</h1>
                    </div>
                    <div class="payment-div">
                        <table class="table-payments">
                            <thead>
                                <tr>
                                    <th>INVOICE NO.</th>
                                    <th>DATE</th>
                                    <th>PAYMENT METHOD</th>
                                    <th>DESCRIPTION</th>
                                    <!-- <th>DONE BY</th>  -->
                                    <th>AMOUNT(LKR)</th>
                                </tr>
                            </thead>

                            <?php
                            // get data for payment history
                            $query1 = "SELECT * FROM member WHERE username = '" . $username . "'";
                            $result1 = mysqli_query($conn, $query1);
                            $row1 = mysqli_fetch_assoc($result1);

                            $member_id = $row1['member_id'];
                            $f_name = $row1['f_name'];
                            $l_name = $row1['l_name'];
                            $p_no = $row1['phone_no'];
                            $address = $row1['address'];

                            $query3 = "SELECT email FROM users WHERE username = '" . $username . "'";
                            $result3 = mysqli_query($conn, $query3);
                            $row3 = mysqli_fetch_assoc($result3);

                            $email = $row3['email'];

                            $query2 = "SELECT * FROM payment WHERE member_id = '" . $member_id . "'";
                            $result2 = mysqli_query($conn, $query2);

                            while ($row2 = mysqli_fetch_assoc($result2)) {

                                $payment_id = $row2['payment_id'];
                                $date = $row2['payment_date'];
                                $method = $row2['payment_type'];
                                $amount = $row2['payment_amount'];
                                $description = $row2['description'];
                            ?>
                                <tr>
                                    <td> <?php echo "$payment_id" ?></td>
                                    <td><?php echo "$date" ?></td>
                                    <td><?php echo "$method" ?></td>
                                    <td><?php echo "$description" ?></td>
                                    <!-- <td>Pamodha98</td>{optional} -->
                                    <td><?php echo "$amount" ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="hordivid"></div>
            <div class="tassign">
                <div class="seltr">
                    <?php
                    // UI change according to the trainer assignment
                    if ($flag == 0) {
                        echo
                        "<div class='note2'><h1>Trainer Assignment</h1></div> 
                            <div class='adetails'>
                                <div class='astatus'>
                                    <p><i class='bx bxs-flag'></i>You can assign with trainers using below <b> trainer list</b> <i> ";
                        echo "</i></p> 
                                </div>
                                <div class='aper'>
                                    <div class='avatar'></div>
                                </div>
                            </div>";
                    } else {
                        echo
                        "<div class='note2'><h1>Your Trainer</h1></div>
                            <div class='adetails'>
                                <div class='astatus'>
                                    <p><i class='bx bxs-flag'></i>Assign to the trainer <b>since</b> <i>";
                        echo $t_assign_date->format("d/m/Y");
                        echo "</i> <b>till</b> <i>";
                        echo $t_exp_date->format("d/m/Y");
                        echo "</i></p> 
                                </div>
                                <div class='aper'>
                                    <div class='avatar'>
                                        <img src='../media/trainers/$trainer_image'>
                                    </div>
                                    <div class='joined-date'>
                                        <p>Assigned with </p>
                                    </div>
                                    <div class='name'>
                                        <p>$trainer_f_name $trainer_l_name ⭐$final_rating</p>
                                    </div>
                                    <div class='button-inner'>
                                        <div class='about_button'><button class='about_btn'";
                        echo 'onclick="';
                        echo "location.href='../trainer-profile/trainer-profile.php?trainer_id=$trainer_id'";
                        echo '"';
                        echo ">PROFILE</button></div>
                                        <div class='about_button'><button class='about_btn'";
                        echo 'onclick="';
                        echo "location.href='tel:$trainer_phone_no'";
                        echo '"';
                        echo ">CALL</button></div> 
                                        <div class='about_button'><button class='about_btn'";
                        echo 'onclick="';
                        if ($tr_interval->d >= 15) {
                            echo "location.href='#popup5'";
                        } else {
                            echo "location.href='#rate_popup'";
                        }
                        echo '"';
                        echo ">Review</button></div>
                                        </div>
                                <div class='stat'>
                                    <div class='exp'>
                                        <p>";
                        echo $diff->format('%y') . 'yrs';
                        echo "<br>Expirience</p>
                                     </div>
                                    <div class='rate'>
                                        <p>$trainer_rate/=<br>Per Month</p>
                                    </div>
                                    <div class='review-count'>
                                        <p>$review_count<br>Reviews</p>
                                    </div>
                                </div>
                                </div>
                            </div>";
                    }

                    ?>

                    <!-- trainer list holder -->
                    <div class="note2">
                        <h1>Trainer List</h1>
                    </div>
                    <div class="trainer-div">
                        <table class="table-trainers">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>EXPERIENCE</th>
                                    <th>RATING</th>
                                    <th>MONTHLY RATE(LKR)</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <?php

                            $query4 = "SELECT * FROM trainer";
                            $result4 = mysqli_query($conn, $query4);

                            while ($row3 = mysqli_fetch_assoc($result4)) {

                                $trainer_id = $row3['trainer_id'];
                                $t_fname = $row3['f_name'];
                                $t_lname = $row3['l_name'];
                                $image = $row3['image'];
                                $about = $row3['about'];
                                $rate = $row3['rate'];
                                $phone_no = $row3['phone_no'];
                                $date_joined = $row3['joined_date'];

                                $today = date("Y-m-d");
                                $diff = date_diff(date_create($date_joined), date_create($today));
                                $exp = $diff->format('%y');
                                $query5 = "SELECT * FROM review WHERE trainer_id = '" . $trainer_id . "'";
                                $review_query = mysqli_query($conn, $query5);
                                $review_count = mysqli_num_rows($review_query);

                                if ($review_count == 0) {
                                    $final_rating = 'No Reviews Yet';
                                } else {
                                    $review_value = 0;
                                    while ($row4 = mysqli_fetch_assoc($review_query)) {
                                        $review_value += $row4['stars'];
                                    }
                                    $final_rating = $review_value / $review_count;
                                }
                            ?>
                                <tr>
                                    <td><?php echo "$t_fname" ?></td>
                                    <td><?php echo $diff->format('%y') . 'years'; ?></td>
                                    <td><?php echo "$final_rating" ?>(⭐)</td>
                                    <td><?php echo "$rate" ?></td>
                                    <td>
                                        <div class="row-action">
                                            <button class="about_btn" onclick="location.href='../trainer-profile/trainer-profile.php?trainer_id=<?php echo $trainer_id ?>'">Profile</button>
                                            <button class="about_btn" onclick=<?php if ($flag == 1) {
                                                                                    echo ("location.href='#popup1'");
                                                                                } else {
                                                                                    echo "check_tr($trainer_id,'$t_fname',$final_rating,'$t_lname','$image',$rate,$exp,$review_count);";
                                                                                } ?>>Select</button>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="vboderdivider"></div>
        </div>
        <div class="udetails">
            <div class="paralist" id="email"></div>
            <form id="amount_form" action="extend_membership.php" method="POST">
                <input type="text" id="passamount" name="amount" value="">
            </form>
        </div>
        <div class="HdividerL"></div>
    </section>

    <?php include "includes/footer.php" ?>

    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
    <script>
        // payment handling scriptings
        var i;

        function changerate(i) {
            var tr_rate = document.getElementById("trainer_rate")
            tr_rate.value = i;
        }

        var cost = 0;
        var pack;
        $("#mon1").click(function() {
            cost = 2500;
            pack = "1 Month Membership";
            $("#mval").text(cost);
            $("#passamount").val(cost);
        });
        $("#mon3").click(function() {
            cost = 7000;
            pack = "3 Month Membership";
            $("#mval").text(cost);
            $("#passamount").val(cost);
        });
        $("#mon6").click(function() {
            cost = 10000;
            pack = "6 Month Membership";
            $("#mval").text(cost);
            $("#passamount").val(cost);
        });
        $("#mon12").click(function() {
            cost = 20000;
            pack = "12 Month Membership";
            $("#mval").text(cost);
            $("#passamount").val(cost);
        });


        function checkpackin() {
            var amountval = document.getElementById("mval").innerText;

            if (amountval === '0') {
                return false;
            } else {
                return true;
            }
        }

        var type = 0;
        payhere.onCompleted = function onCompleted(orderId) {
            if (type === 1) {
                document.getElementById("tr_form").submit();
                console.log("Payment completed");
            } else {
                document.getElementById("amount_form").submit();
                console.log("Payment completed");
            }
            //Note: validate the payment and show success or failure page to the customer
        };

        // Called when user closes the payment without completing
        payhere.onDismissed = function onDismissed() {
            //Note: Prompt user to pay again or show an error page
            console.log("Payment dismissed");
        };

        // Called when error happens when initializing payment such as invalid parameters
        payhere.onError = function onError(error) {
            // Note: show an error page
            console.log("Error:" + error);
        };

        var payment;
        var tr_payment;

        function calctotal() {

            var fname1 = "<?php echo "$f_name"; ?>";
            var lname1 = "<?php echo "$l_name"; ?>";
            var mnumber1 = "<?php echo "$p_no"; ?>";
            var address1 = "<?php echo "$address"; ?>";
            var email1 = "<?php echo "$email"; ?>";

            var amount1 = document.getElementById('mval').innerText;
            var membership1;

            if (amount1 == '2500') {
                membership1 = "1 Month Membership";
            } else if (amount1 == '7000') {
                membership1 = "3 Month Membership";
            } else if (amount1 == '10000') {
                membership1 = "6 Month Membership";
            } else if (amount1 == '20000') {
                membership1 = "12 Month Membership";
            }

            payment = {
                "sandbox": true,
                "merchant_id": "1218759", // Replace your Merchant ID
                "return_url": undefined, // Important
                "cancel_url": undefined, // Important
                "notify_url": "http://sample.com/notify",
                "order_id": "ItemNo12345",
                "items": membership1,
                "amount": amount1,
                "currency": "LKR",
                "first_name": fname1,
                "last_name": lname1,
                "email": email,
                "phone": mnumber1,
                "address": address1,
                "city": "Mirigama",
                "country": "Sri Lanka",
            };

        }

        function calctotal_fee(rate, fname, lname) {

            var fname1 = "<?php echo "$f_name"; ?>";
            var lname1 = "<?php echo "$l_name"; ?>";
            var mnumber1 = "<?php echo "$p_no"; ?>";
            var address1 = "<?php echo "$address"; ?>";
            var email1 = "<?php echo "$email"; ?>";

            var amount1 = rate;
            var description = '1 month Assignment with ' + fname + ' ' + lname;



            tr_payment = {
                "sandbox": true,
                "merchant_id": "1218759", // Replace your Merchant ID
                "return_url": undefined, // Important
                "cancel_url": undefined, // Important
                "notify_url": "http://sample.com/notify",
                "order_id": "ItemNo12345",
                "items": description,
                "amount": amount1,
                "currency": "LKR",
                "first_name": fname1,
                "last_name": lname1,
                "email": email,
                "phone": mnumber1,
                "address": address1,
                "city": "Mirigama",
                "country": "Sri Lanka",
            };
        }

        function submitFunction() {
            var result = checkpackin();

            if (result == true) {
                calctotal();
                type = 0;
                payhere.startPayment(payment);
            }
        }

        function submit_for_tr() {
            type = 1;
            payhere.startPayment(tr_payment);
        }

        // special trainer assignment function
        function check_tr(tr_id, fname, rating, lname, image, rate, exp, count) {
            var response;

            if (tr_id != '') {
                $.ajax({
                    url: './includes/check-trainer_assignments.php',
                    type: 'post',
                    data: {
                        tr_id: tr_id
                    },
                    success: function(response) {
                        console.log("success");
                        if (response == "true") {
                            $('#intr_id').val(tr_id);
                            //alert(tr_id);
                            $('#pop3tr_name').empty();
                            $('#pop3tr_name').append(fname + ' ' + lname + ' ⭐' + rating);
                            $('#pop3tr_image').empty();
                            $("#pop3tr_image").attr("src", '../media/trainers/' + image);
                            $('#pop3tr_expi').empty();
                            $('#pop3tr_expi').append('<p>' + exp + 'yrs<br>Expirience</p>');
                            $('#pop3tr_ratei').empty();
                            $('#pop3tr_ratei').append('<p>' + rate + '/=<br>Per Month</p>');
                            $('#pop3tr_counti').empty();
                            $('#pop3tr_counti').append('<p>' + count + '<br>Reviews</p>');
                            $('#profile').attr("onclick", "");
                            $("#profile").attr("onclick", "location.href='../trainer-profile/trainer-profile.php?trainer_id=" + tr_id + "'");

                            window.location.href = "#popup3";
                            calctotal_fee(rate, fname, lname);
                        } else {
                            $('#pop2tr_name').append('Sorry! At the moment this <b>' + fname + ' ' + lname + ' </b>' + rating + '(⭐) trainer is not available for the assignments.');
                            window.location.href = "#popup2";
                        }
                    },
                    error: function() {
                        console.log("error");
                    }
                });
            }
        }

        $(document).ready(function() {
            window.location.href = "#";
        });
    </script>

</body>

</html>


<?php
unset($_SESSION['notification']);
?>