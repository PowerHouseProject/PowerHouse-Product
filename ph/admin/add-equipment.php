<?php
include "includes/check_login.php";

//session_start();
//include 'includes/db.php';

?>


<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">


    <link rel="stylesheet" href="css/add-equipment.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/jquery-confirm.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/add-equipment.js"></script>
    <style>
        .jconfirm.jconfirm-my-theme .jconfirm-bg {
            background-color: rgba(0, 0, 0, 0.2);

        }

        .jconfirm.jconfirm-my-theme .jconfirm-box {
            background-color: #121317;
            padding-top: 20px !important;
            padding-left: 20px !important;
            padding-right: 20px !important;
            padding-bottom: 20px !important;
            border-radius: 5px !important;
            /* border: #86ff71 3px solid !important; */

        }

        .jconfirm.jconfirm-my-theme .jconfirm-closeIcon {
            color: white !important;
        }

        .jconfirm.jconfirm-my-theme .jconfirm-title {
            color: #86ff71;
            font-family: "Azonix" !important;
        }

        .jconfirm.jconfirm-my-theme .jconfirm-content {
            color: #ffffff;
            font-family: "Rubik" !important;
        }

        /* .jconfirm.jconfirm-my-theme .jconfirm-buttons {
            background-color: #86ff71;
            font-family: "Rubik" !important;
            border-radius: 50px;
            color: black;
        } */

        .hi {
            background-color: transparent;
            font-family: "Azonix" !important;
            border-radius: 50px !important;
            color: white;
            border: #89898B 2px solid !important;
        }

        .hi :hover {

            border: #86ff71 2px solid !important;
            /* transition: 0.5s; */

        }

        .jconfirm.jconfirm-my-theme .jconfirm-box.loading {}

        .jconfirm.jconfirm-my-theme .jconfirm-box.loading:before {}

        .jconfirm.jconfirm-my-theme .jconfirm-box.loading:after {}

        .jconfirm.jconfirm-my-theme .jconfirm-box .jconfirm-closeIcon {}

        .jconfirm.jconfirm-my-theme .jconfirm-box .jconfirm-title-c {}

        .jconfirm.jconfirm-my-theme .jconfirm-box .jconfirm-content-pane {}

        .jconfirm.jconfirm-my-theme .jconfirm-box .jconfirm-content {}

        .jconfirm.jconfirm-my-theme .jconfirm-box .jconfirm-buttons {}

        .jconfirm.jconfirm-my-theme .jconfirm-box .jconfirm-buttons button {}
    </style>

</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>
        <script src="js/jquery-confirm.min.js"></script>
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
            <div class="login">
                <div class="l-form">

                    <form action="add-equipment-php.php" class="form" id="signup_form" method="POST" enctype="multipart/form-data">
                        <h1 class="form__title">ADD NEW EQUIPMENT</h1>


                        <br>

                        <div class="name">
                            <div class="form__div">
                                <input type="text" class="name_input" id="fname" value="" name="f_name_cc" required>
                                <label for="" class="form__label">Equipment Name</label>
                                <i class="fa fa-check"></i>
                                <i class="fas fa-exclamation-triangle"></i>
                                <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                                <small>Error message</small>
                            </div>
                            <div class="form__div">
                                <input type="text" class="name_input" id="lname" value="" name=" l_name_cc" required>
                                <label for="" class="form__label">Quantity</label>
                                <i class="fa fa-check"></i>
                                <i class="fas fa-exclamation-triangle"></i>
                                <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                                <small>Error message</small>
                            </div>
                        </div>

                        <input type="file" class="custom-file-input" name="quipment_name" required>


                        <div class="buttondiv"><input type="button" class="form__button" value="ADD NEW EQUIPMENT" name="form_submit" id="form_submit"></div>

                    </form>




                    <script>
                        function submitFunction() {
                            // var result = checkInputs();

                            //if (result == true) {
                            // e.preventDefault();
                            document.getElementById("signup_form").submit();

                            // document.getElementById("signup_form").submit();

                            // }
                        }
                        //}
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

</html>