<?php include "includes/check_login.php" ?>



<?php
require "includes/db.php";
$username = $_SESSION['username'];
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">



    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/feedback.css">
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


        <div class="home-content">

            <div class="rsd">
                <div class="con1">
                    <form action="feedback-php.php" class="form" id="form" method="POST">
                        <div class="separator">

                            <span class="hr-text">IF YOU HAVE A FEEDBACK, QUESTION OR A BUG IN THE SYTEM PLEASE SUBMIT THE DETAILS HERE </span>

                        </div><br>






                        <div class="inj__div">
                            <textarea type="text" cols="40" rows="15" class="injury" id="inj" placeholder=" " name="feedback_cc" required></textarea>
                            <label for="" class="form__label"></label>
                            <i class="fa fa-check"></i>
                            <i class="fas fa-exclamation-triangle"></i>
                            <small>Error message</small>
                        </div>
                        <br>

                        <div class="buttondiv"><input type="submit" class="form__button" value="SUBMIT"></div>
                    </form>


    </section>
    <?php include "includes/footer.php" ?>

</body>

</html>

<?php
unset($_SESSION['notification']);
?>