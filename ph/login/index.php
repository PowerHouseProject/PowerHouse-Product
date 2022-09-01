<?php session_start();

if (isset($SESSION['username'])) {
    header('Location: ../trainer/dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - PH Fitness</title>
    <!-- <link rel="shortcut icon" href="media/TabIcon.jpg">  -->

    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
            <div class="homeIcon">
                <a href="index.html" class=" fas fa-chevron-left"> </a>
                <a href="../index.php">&nbsp Back to home</a>
            </div>
        </div>
        <div class="login">
            <div class="l-form">
                <form action="login.php" class="form" id="form" method="POST">
                    <h1 class="form__title">POWER HOUSE LOGIN<span id="Mem"></span></h1>

                    <div class="form__div" id="name">
                        <input type="text" class="form__input" id="username" placeholder=" " name="username">
                        <label for="" class="form__label">Username or Email</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <small>Error message</small>
                    </div>

                    <div class="form__div">
                        <input type="password" class="form__input" id="password" placeholder=" " name="password">

                        <label for="" class="form__label">Password</label>
                        <i class="fa fa-check"></i>
                        <i class="fas fa-exclamation-triangle"></i>
                        <small>Error message</small>
                    </div>

                    <div class="buttondiv"><input type="submit" class="form__button" value="Login" name="submit"></div>


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


                    <div class="remember">
                        <!-- <label><input type="checkbox" name=""> Remember me</label>
                        <span class="checkmark"></span> -->

                        <a href="forget-pw.php" class="hover">Forget password?</a>
                    </div>



                    <div class="signup">
                        <p>Don't have an account? <a href="../signup/index.php" class="hover"> Sign up</a></p>
                    </div>

                    <div class="icon">
                        <a href="#" class="fa fa-facebook"></a>
                        <!-- <a href="#" class="fa fa-google"></a> -->
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-whatsapp"></a>
                    </div>
                </form>
            </div>




        </div>
    </section>

    <script type="text/javascript" src="login.js"></script>
</body>

</html>

<?php
unset($_SESSION['notification']);
?>