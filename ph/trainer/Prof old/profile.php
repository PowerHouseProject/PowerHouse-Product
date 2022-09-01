<?php include "includes/check_login.php" ?>
<?php require "includes/db.php";
    require "includes/date-joined.php"; ?>

<?php
    $username= $_SESSION['username'];

    $query = "SELECT * FROM trainer WHERE username = '" . $username . "'";
    $trainer_result = mysqli_query($conn, $query);
    $trainer_row = mysqli_fetch_assoc($trainer_result);
    $f_name = $trainer_row['f_name'];
    $l_name = $trainer_row['l_name'];
    $image = $trainer_row['image'];
    $trainer_id = $trainer_row['trainer_id'];
    $about = $trainer_row['about'];
    $rate = $trainer_row['rate'];
    $phone_no = $trainer_row['phone_no'];
    $qualifications = $trainer_row['qualifications'];
    $date_joined = date_registered($trainer_id);

    $_SESSION['trainer_id']= $trainer_row['trainer_id'];

    $query2 = "SELECT * FROM review WHERE trainer_id = $trainer_id";
    $review_query = mysqli_query($conn, $query2);

    $review_count = mysqli_num_rows($review_query);
    $review_value = 0;

    while ($review_row = mysqli_fetch_assoc($review_query)) {
        $review_value += $review_row['stars'];
    }

    $today = date("Y-m-d");
    $diff = date_diff(date_create($date_joined), date_create($today));

    $qualifies = explode(',', $qualifications);
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/profedit.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <div class="seperator"></div>
        <div class="dwnpart">
            <div class="left">
                <div class="avatar">
                    <img src="../media/trainers/<?php echo $image ?>">
                </div>
                <div class="joined-date">
                    <p>Joined <?php echo $date_joined ?></p>
                </div>
                <div class="name-trainer">
                    <p><?php echo $f_name . " " . $l_name ?> ⭐ <?php echo $review_value / $review_count ?> </p>
                </div>
                <div class="stat">
                    <div class="exp">
                        <p><?php echo $diff->format('%y') . 'yrs'; ?><br>EXPERIENCE</p>
                    </div>
                    <div class="rate">
                        <p><?php echo $rate ?>/=<br>Per Month</p>
                    </div>
                    <div class="review-count">
                        <p><?php echo $review_count ?><br>Reviews</p>
                    </div>
                </div>
                <div class="about">
                    <h4>ABOUT</h4>
                    <p><?php echo "$about"; ?></p>
                </div>

                <div class="divider">
                <span class="fade-effect2"> </span>
                </div>

                <div class="qualifications">
                    <h4>Qualifications</h4>
                    <ul>
                    <?php foreach ($qualifies as $item) { ?>
                        <li><?php echo $item ?> </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="rsd">
                    <form action="signup.php" class="form" id="signup_form" method="POST">
                                <span class="hr-text">PERSONAL INFO </span>
                                <div class="divider">
                                <span class="fade-effect2"> </span>
                                </div>

                    <div class="name">
                        <div class="form__div">
                            <input type="text" class="name_input" id="fname" placeholder=" " name="f_name_cc">
                            <label for="" class="form__label">First Name</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>
                        <div class="form__div">
                            <input type="text" class="name_input" id="lname" placeholder=" " name="l_name_cc">
                            <label for="" class="form__label">Last Name</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>
                    </div>
                    <div class="name">
                        <div class="select__div">
                            <label>
                                <select class="form_input" id="gender" required name="gender_cc">
                                    <option value="" disabled selected> Gender </option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>
                        <div class="form__div">
                            <input type="text" class="name_input2" id="mnumber" placeholder=" " name="phone_no_cc">
                            <label for="" class="form__label">Mobile Number</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>
                    </div>

                    <div class="form__div">
                        <input type="date" class="form__input" value="2000-10-20" id="dateofbirth" placeholder=" " name="dob_cc" min="1920-10-01" max="2010-10-20">
                        <label for="" class="form__label">Date Of Birth</label>
                        <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                        <small>Error message</small>
                        <script>
                            $("input[type='date']").keydown(function(event) {
                                event.preventDefault();
                            });
                        </script>
                    </div>

                    <div class="form__div">
                        <input type="text" class="form__input" id="address" placeholder=" " name="address_cc">
                        <label for="" class="form__label">Address</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                        <small>Error message</small>
                    </div>
                    <div class="inj__div">
                        <textarea type="text" cols="40" rows="5" class="injury" id="inj" placeholder=" " name="injuries_cc"></textarea>
                        <label for="" class="form__label">About you...</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                        <small>Error message</small>
                    </div>
                    <br>

                    <div class="buttondiv"><input type="button" class="form__button" value="UPDATE PROFILE" name="form_submit" id="form_submit" onclick="submitFunction()"></div>


                        <span class="hr-text">ACCOUNT INFO</span>
                        <div class="divider">
                            <span class="fade-effect2"> </span>
                        </div>

                    <div class="topic"><h2><i class='bx bx-pen'></i>Change E-mail</h2></div>
                    <div class="form__div">
                        <input type="text" class="form__input" id="email" placeholder=" " name="email_cc">
                        <label for="" class="form__label">Email</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                        <small>Error message</small>
                    </div>

                    <div class="buttondiv"><input type="button" class="form__button" value="UPDATE EMAIL" name="form_submit" id="form_submit" onclick="submitFunction()"></div>

                    <div class="topic"><h2><i class='bx bx-pen'></i>Change Rate</h2></div>
                    <div class="form__div" id="Rate_div">
                        <input type="text" class="form__input" id="Rate" placeholder=" ">
                        <label for="" class="form__label">Rate</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <div id="uname_response" ></div>
                        <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                        <small></small>
                    </div>

                    <div class="buttondiv"><input type="button" class="form__button" value="UPDATE RATE" name="form_submit" id="form_submit" onclick="submitFunction()"></div>

                    <div class="topic"><h2><i class='bx bx-pen'></i>Change Password</h2></div>
                    <div class="form__div">
                            <input type="password" class="name_input" id="password1" placeholder=" " onkeyup="return passwordChanged();" name="password_cc">
                            <label for="" class="form__label">Current Password</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <small>Error message</small>
                    </div>

                    <div class="name">
                        <div class="form__div">
                            <input type="password" class="name_input" id="password1" placeholder=" " onkeyup="return passwordChanged();" name="password_cc">
                            <label for="" class="form__label">New Password</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <small>Error message</small>
                        </div>
                        <div class="form__div">
                            <input type="password" class="name_input" id="password2" placeholder=" " onkeyup="return passwordChanged2();">
                            <label for="" class="form__label">Confirm New Password</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <small>Error message</small>
                        </div>
                    </div>

                    <label class="container">Show Password
                        <input type="checkbox" onclick="myunction()">
                        <span class="checkmark"></span>
                    </label> 

                    <div class="buttondiv"><input type="button" class="form__button" value="UPDATE PASSWORD" name="form_submit" id="form_submit" onclick="submitFunction()"></div>
                </div>
        </div>
           
    </section>
    <!-- <script type="text/javascript" src="./../signup/signup.js"></script> -->
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

</html>