<?php include "includes/check_login.php";
        require "includes/db.php";
        date_default_timezone_set("Asia/Colombo");
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

            <?php
                $Date = date("Y-m-d");
                $trainer_id = $_SESSION['trainer_id'];
                $sql1 = "DELETE from book WHERE date < '$Date' AND trainer_id = $trainer_id";
                mysqli_query($conn,$sql1);
            ?>

        <div class="home-content">
            <div class="header-div">
            <?php
                    $trainer_id = $_SESSION['trainer_id'];
                    $date = date("y-m-d");

                    $sql1 = "SELECT * FROM book WHERE trainer_id = '".$trainer_id."' AND date = '".$date."'";
                    $result1 = mysqli_query($conn,$sql1);
                    $count = mysqli_num_rows($result1);
            ?>
                <h1 class="top-header">Today Bookings : <?php echo $count ?></h1>
            </div>

            <div class="members-div">
                <table class="table-members">
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Contact No.</th>
                        <th></th>
                    </tr>
                    <?php
                    $sql2 = "SELECT * FROM book WHERE trainer_id = '".$trainer_id."'";
                    $result2 = mysqli_query($conn,$sql2);
                    while($book_row2=mysqli_fetch_assoc($result2)){
                        $book_id = $book_row2['book_id'];
                        $member_id = $book_row2['member_id'];
                        $date = $book_row2['date'];
                        $time = $book_row2['time'];

                        $sql3 = "SELECT f_name,l_name,phone_no,image FROM member WHERE member_id= '".$member_id."'";
                        $result3 = mysqli_query($conn, $sql3);
                        $book_row3 = mysqli_fetch_assoc($result3);

                        $f_name = $book_row3['f_name'];
                        $l_name = $book_row3['l_name'];
                        $phone_no = $book_row3['phone_no'];
                        $image = $book_row3['image'];
                    ?>
                    <tr>
                        <td>
                        <div class="first-column"><span class="avatar"><img src="../media/members/<?php echo $image ?>"></span><?php echo " " . $f_name . " " . $l_name ?></div>
                        </td>
                        <td><?php echo $date; ?></td>
                        <td><?php echo $time; ?></td>
                        <td><?php echo $phone_no; ?></td>
                        <td><div class="row-action">
                            <button class="about_btn" onclick="myfunction()">Cancel booking</button> 
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>

        </div>
        <script>
            function myfunction(){
                let action = confirm("Do you really want to cancel this booking?")
                if(action){
                    location.href='includes/cancel_booking.php?book_id=<?php echo $book_id; ?>'
                }
            }
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#search").keypress(function() {
                    $.ajax({
                        type: 'POST',
                        url: 'includes/member-page.php',
                        data: {
                            name: $("#search").val(),
                        },
                        success: function(data) {
                            $("#output").html(data);
                        }
                    });
                });
            });
        </script>




    </section>
    <?php include "includes/footer.php" ?>

</body>

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

<?php
unset($_SESSION['notification']);
?>