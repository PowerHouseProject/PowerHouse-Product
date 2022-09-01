<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reset password</title>
    <!-- <link rel="shortcut icon" href="media/TabIcon.jpg">  -->

    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <section>
        <div class="img">
            <p>
            <h1 class="head">POWER HOUSE</h1>
            <h3 class="head3">FITNESS ACADEMY</h3>
            <!-- <h5 class="head4">Feel good breath</h5> -->
            <h5 class="head5">BUILD PERFECT BODY <br> SHAPE FOR <span>GOOD</span> AND <br><span>HEALTHY</span> LIFE.
            </h5>
            </p>
            <!-- <div class="homeIcon">
                <a href="../home/index.html" class="fas fa-backward"></a>
                <a href="../home/index.html">Back to home</a>
            </div> -->
        </div>
        <div class="login">
            <div class="l-form">
                <form action="includes/reset-request.inc.php" method="POST" class="form" id="form">
                    <h1 class="form__title">RESET YOUR PASSWORD</h1>

                    <div class="form__div">
                        <input type="text" class="form__input" id="email" placeholder=" " name="email">

                        <label for="" class="form__label">ENTER YOUR E-MAIL ADDRESS</label>
                        <i class="fa fa-check"></i>
                        <!-- <i class="fas fa-check-circle"></i> -->
                        <i class="fas fa-exclamation-triangle"></i>
                        <!-- <i class="fas fa-exclamation"></i> -->
                        <!-- <i class="fas fa-exclamation-circle"></i> -->
                        <small>Error message</small>
                    </div>
                    <div class="buttondiv"><input type="submit" name="reset-request-submit" class="form__button" value="SEND AN E-MAIL"></div>
                </form>


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
                    if (isset($_SESSION["notification"])) {

                        $notification = $_SESSION["notification"];

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



            </div>

        </div>
    </section>

    <script type="text/javascript" async src="forget_pw.js"></script>
</body>


</html>

<?php
unset($_SESSION['notification']);
?>