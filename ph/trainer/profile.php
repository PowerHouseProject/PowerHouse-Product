<?php include "includes/check_login.php" ?>

<?php
require "includes/db.php";
$username = $_SESSION['username'];
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/profedit.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
        <?php
        $query1 = "SELECT * FROM trainer WHERE username = '" . $username . "'";
        $result1 = mysqli_query($conn, $query1);
        $row1 = mysqli_fetch_assoc($result1);

        $trainer_id = $row1['trainer_id'];
        $f_name = $row1['f_name'];
        $l_name = $row1['l_name'];

        if ($row1['gender'] == 'male') {
            $gender = 'Male';
        } else {
            $gender = 'Female';
        }

        $p_no = $row1['phone_no'];
        $address = $row1['address'];
        // $injuries = $row1['injuries'];

        $dob = $row1['dob'];
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dob), date_create($today));


        $join_date = strtotime($row1['joined_date']);
        $formatted_date = date("F Y", $join_date);


        $query3 = "SELECT email FROM users WHERE username = '" . $username . "'";
        $result3 = mysqli_query($conn, $query3);
        $row3 = mysqli_fetch_assoc($result3);

        $email = $row3['email'];

        ?>

        <div class="home-content">
            <div class="cover">
                <?php

                $image_select1 = "SELECT cover_image FROM trainer WHERE username='$username'";
                $result1 = mysqli_query($conn, $image_select1);
                $image_row1 = mysqli_fetch_assoc($result1);
                $cover = $image_row1['cover_image'];
                ?>
                <img src="media/<?php echo $cover ?>" alt="">
            </div>
            <div class="overlayy">
                <form class="hid_form" action='profile-image-change.php?username= ' $username method='post' enctype='multipart/form-data'>
                    <label id='update_profile2'> <i class='bx bx-upload ccc'></i>
                        <input type='file' name='u_image' size='60' />

                    </label><br><br><br><br>
                    <button id='button_profile1' name='update-cover' class='upp1'>Update Cover</button>
                </form>
            </div>
            <div class="profile-img">
                <?php

                $image_select = "SELECT image FROM trainer WHERE username='$username'";
                $result2 = mysqli_query($conn, $image_select);
                $image_row = mysqli_fetch_assoc($result2);
                $avatar = $image_row['image'];

                ?>
                <img src="media/trainers/<?php echo $avatar ?>" alt="">
                <div class="overlay">
                    <form class="hid_form" action='profile-image-change.php?username=' $username method='post' enctype='multipart/form-data'>
                        <label id='update_profile'> <i class='bx bx-upload'></i>
                            <input type='file' name='u_image' size='60' />
                        </label><br><br><br><br>
                        <button id='button_profile2' name='update' class='upp2'>Update Image</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="dwnpart">
            <div class="vboderdivider"></div>
            <div class="lsd">

                <div class="con1">
                    <div class="profcov">
                        <div class="aper">
                            <div class="fulname">
                                <p><?php echo $f_name . " " . $l_name ?></p>


                            </div>



                            <div class="joined-date">
                                <p>Since <?php echo $formatted_date ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="con1">
                    <div class="profcov2">
                        <div class="aper">

                            <div class="pdetails">
                                <i class='bx bx-dumbbell'></i> NAME <p> <i class='bx bxs-right-arrow'></i><?php echo $f_name . " " . $l_name ?></p>

                                <i class='bx bx-dumbbell'></i> USERNAME <p> <i class='bx bxs-right-arrow'></i><?php echo $username ?></p>
                                <i class='bx bx-dumbbell'></i> GENDER <p><i class='bx bxs-right-arrow'></i><?php echo $gender ?></p>

                                <i class='bx bx-dumbbell'></i> LIVES IN <p> <i class='bx bxs-right-arrow'></i><?php echo $address ?></p>
                                <i class='bx bx-dumbbell'></i> CONTACT NO. <p> <i class='bx bxs-right-arrow'></i><?php echo $p_no ?></p>
                                <!-- <i class='bx bx-dumbbell'></i> E-MAIL <p><i class='bx bxs-right-arrow'></i><?php echo $email ?></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider3"></div>
            <div class="rsd">
                <div class="con1">
                    <form action="./includes/updatepersonal.php" class="form" id="form" method="POST">
                        <div class="separator">

                            <span class="hr-text">PERSONAL INFO </span>

                        </div><br>
                        <div class="name">
                            <div class="form__div">
                                <input type="text" class="name_input" id="fname" placeholder=" " name="f_name_cc" value=<?php echo $f_name ?>>
                                <label for="" class="form__label">First Name</label>
                                <i class="fa fa-check"></i>
                                <i class="fas fa-exclamation-triangle"></i>
                                <small>Error message</small>
                            </div>
                            <div class="form__div">
                                <input type="text" class="name_input" id="lname" placeholder=" " name="l_name_cc" value=<?php echo $l_name ?>>
                                <label for="" class="form__label">Last Name</label>
                                <i class="fa fa-check"></i>
                                <i class="fas fa-exclamation-triangle"></i>
                                <small>Error message</small>
                            </div>
                        </div>
                        <div class="name">
                            <div class="select__div">
                                <label>
                                    <select class="form_input" id="gender" required name="gender_cc" value="male">
                                        <option value="" disabled selected> Gender </option>
                                        <option value="male" <?php if ($gender == "Male") echo 'selected="selected"'; ?>>Male</option>
                                        <option value="female" <?php if ($gender == "Female") echo 'selected="selected"'; ?>>Female</option>
                                    </select>
                                </label>
                                <i class="fa fa-check"></i>
                                <small>Error message</small>
                            </div>
                            <div class="form__div">
                                <input type="text" class="name_input2" id="mnumber" placeholder=" " name="phone_no_cc" value=<?php echo $p_no ?>>
                                <label for="" class="form__label">Mobile Number</label>
                                <i class="fa fa-check"></i>
                                <i class="fas fa-exclamation-triangle"></i>
                                <small>Error message</small>
                            </div>
                        </div>



                        <div class="form__div">
                            <input type="text" class="form__input" id="address" placeholder=" " name="address_cc" value="<?php echo $address ?>">
                            <label for="" class="form__label">Address</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <small>Error message</small>
                        </div>



                        <div class="buttondiv"><input type="submit" class="form__button" value="SAVE PROFILE"></div>
                    </form>
                    <form action="includes/updatepersonalemail.php" class="form" id="acc_form" method="POST">
                        <div class="separator">

                            <span class="hr-text">ACCOUNT INFO</span>

                        </div>
                        <br>


                        <div class="form__div">
                            <input type="text" class="form__input" id="email" placeholder=" " name="email_cc" value=<?php echo $email ?>>
                            <label for="" class="form__label">Email</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <small>Error message</small>
                        </div>


                        <div class="buttondiv"><input type="submit" class="form__button" value="UPDATE EMAIL"></div>
                    </form>

                    <form action="./includes/update_pw.php" class="form" id="pw_form" method="POST">

                        <div class="form__div">
                            <input type="password" class="name_input" id="password" placeholder=" " name="current_pw">
                            <label for="" class="form__label">Current Password</label>
                            <i id="right" class="fa fa-check"></i>
                            <i id="wrong" class="fas fa-exclamation-triangle"></i>
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
                                <label for="" class="form__label">Confirm Password</label>
                                <i class="fa fa-check"></i>
                                <i class="fas fa-exclamation-triangle"></i>
                                <small>Error message</small>
                            </div>
                        </div>

                        <label class="container">Show Password
                            <input type="checkbox" onclick="myunction()">
                            <span class="checkmark"></span>
                        </label>

                        <div class="buttondiv"><input type="submit" class="form__button" value="UPDATE PASSWORD"></div>
                    </form>
                </div>
            </div>
            <div class="vboderdivider"></div>
        </div>

        <div class="HdividerL"></div>

    </section>
    <?php include "includes/footer.php" ?>
    <script>
        function myunction() {
            var x = document.getElementById("password1");
            var y = document.getElementById("password2");
            var z = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
            if (z.type === "password") {
                z.type = "text";
            } else {
                z.type = "password";
            }
        }
    </script>
    <script type="text/javascript" src="js/profile.js"></script>
</body>

</html>

<?php
unset($_SESSION['notification']);
?>