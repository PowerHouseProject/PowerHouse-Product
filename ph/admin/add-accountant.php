<?php include "includes/check_login.php"; ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">


    <link rel="stylesheet" href="css/add-trainer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/add-accountant.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>


        <div class="home-content">

            <div class="login">
                <div class="l-form">
                    <form action="add-accountant-php.php" class="form" id="signup_form" method="POST">
                        <h1 class="form__title">ADD ACCOUNTANT</h1>



                        <div class="separator">
                            <hr class="hr-left1" />
                            <span class="hr-text">ACCOUNTANT DETAILS</span>
                            <hr class="hr-right1" />
                        </div><br>

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
                            <input type="text" class="form__input" id="address" placeholder=" " name="address_cc">
                            <label for="" class="form__label">Address</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>



                        <br>

                        <div class="separator">
                            <hr class="hr-left2" />
                            <span class="hr-text">ACCOUNT DETAILS</span>
                            <hr class="hr-right2" />
                        </div>
                        <br>




                        <div class="form__div">
                            <input type="text" class="form__input" id="email" placeholder=" " name="email_cc">
                            <label for="" class="form__label">Email</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                            <small>Error message</small>
                        </div>



                        <div class="form__div" id="uname">
                            <input type="text" class="form__input" id="username" placeholder=" " name="username_cc">
                            <label for="" class="form__label">Username</label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <div id="uname_response"></div>
                            <!-- <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i> -->
                            <small></small>
                        </div>
                        <div class="name">
                            <div class="form__div">
                                <input type="password" class="name_input" id="password1" placeholder=" " onkeyup="return passwordChanged();" name="password_cc">
                                <label for="" class="form__label">Password</label>
                                <i class="fa fa-check"></i>
                                <i class="fas fa-exclamation-triangle"></i>
                                <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                                <small>Error message</small>
                            </div>
                            <div class="form__div">
                                <input type="password" class="name_input" id="password2" placeholder=" " onkeyup="return passwordChanged2();">
                                <label for="" class="form__label">Confirm Password</label>
                                <i class="fa fa-check"></i>
                                <i class="fas fa-exclamation-triangle"></i>
                                <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                                <small>Error message</small>
                            </div>
                        </div>

                        <!-- <input type="checkbox" onclick="myunction()">Show Password -->

                        <label class="container">Show Password
                            <input type="checkbox" onclick="myunction()">
                            <span class="checkmark"></span>
                        </label>



                        <div class="remember">
                            <label class="container"> Accountant accepts the <span>Terms of Use</span> & <span>Privacy
                                    Policy</span>.
                                <input type="checkbox" id="mycheck">
                                <span class="checkmark"></span>
                            </label>
                            <label></label>

                        </div>

                        <div class="buttondiv"><input type="button" class="form__button" value="ADD ACCOUNTANT" name="form_submit" id="form_submit" onclick="submitFunction()"></div>

                        <script>
                            $(document).ready(function() {
                                $("#username").keyup(function() {
                                    var username = $(this).val().trim();
                                    if (username != '') {
                                        $.ajax({
                                            url: 'includes/ajaxfile.php',
                                            type: 'post',
                                            data: {
                                                username: username
                                            },
                                            success: function(response) {

                                                if (response == "<span style='color: #86ff71;'><b>Available</b></span>") {
                                                    $('#uname').removeClass("form_div error").addClass("form__div success")
                                                } else {
                                                    $('#uname').removeClass("form_div success")
                                                    $('#uname').addClass("form__div error")
                                                }

                                                $('#uname_response').html(response);
                                            }
                                        });
                                    } else {
                                        $("#uname_response").html("");
                                    }
                                });
                            });
                        </script>


                        <!-- <div class="payhere">
                            <p>Payments are securely processed by&nbsp;</p> <img src="payherelogo.png" width="80px">
                        </div> -->




                        <!-- <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script> -->

                        <script>
                            function myunction() {
                                var x = document.getElementById("password1");
                                var y = document.getElementById("password2");
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
                            }


                            function submitFunction() {
                                var result = checkInputs();

                                if (result == true) {
                                    // e.preventDefault();


                                    document.getElementById("signup_form").submit();




                                    // }
                                }
                            }
                        </script>




                        <!-- 
                        <div class="signup">
                            <p>Have an account? <a href="../login/index.php" class="hover"> Login</a></p>
                        </div> -->

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

</html>