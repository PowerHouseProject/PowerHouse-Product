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

                <?php
                $selector = $_GET["selector"];
                $validator = $_GET["validator"];

                if (empty($selector) || empty($validator)) {
                    echo "Could not validate your request!";
                } else {
                    if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                ?>

                        <form action="includes/reset-password.inc.php" method="POST" class="form" id="form">
                            <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                            <input type="hidden" name="validator" value="<?php echo $validator; ?>">

                            <h1 class="form__title">RESET YOUR PASSWORD</h1>

                            <div class="form__div">
                                <input type="password" class="form__input" id="password1" placeholder=" " name="pwd" onkeyup="return passwordChanged();">
                                <label for="" class="form__label">Enter new password</label>
                                <i class="fa fa-check"></i>
                                <!-- <i class="fas fa-check-circle"></i> -->
                                <i class="fas fa-exclamation-triangle"></i>
                                <!-- <i class="fas fa-exclamation"></i> -->
                                <!-- <i class="fas fa-exclamation-circle"></i> -->
                                <small>Error message</small>
                            </div>

                            <div class="form__div">
                                <input type="password" class="form__input" id="password2" placeholder=" " name="pwd-repeat" onkeyup="return passwordChanged2();">

                                <label for="" class="form__label">Re-Enter New Password</label>
                                <i class="fa fa-check"></i>
                                <!-- <i class="fas fa-check-circle"></i> -->
                                <i class="fas fa-exclamation-triangle"></i>
                                <!-- <i class="fas fa-exclamation"></i> -->
                                <!-- <i class="fas fa-exclamation-circle"></i> -->
                                <small>Error message</small>
                            </div>

                            <label class="container">Show Password
                                <input type="checkbox" onclick="myunction()">
                                <span class="checkmark"></span>
                            </label>

                            <div class="buttondiv"><input name="reset-password-submit" type="submit" class="form__button" value="RESET PASSWORD"></div>

                        </form>

                <?php
                    }
                }
                ?>

            </div>

        </div>
    </section>

    <script type="text/javascript" src="create-new-pw.js"></script>
</body>

</html>