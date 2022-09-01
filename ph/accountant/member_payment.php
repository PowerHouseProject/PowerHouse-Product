<?php

//require "includes/db.php";
?>
<?php require "includes/check_login.php"?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>
        <?php
        $mydate=date("y-m-d");
        $month=date('m',strtotime($mydate));
        $year=date('y',strtotime($mydate));
        ?>

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
            <div class="search-bar">
                <div class="search-box" id="search-bar">
                    <input type="text" placeholder="Search by name..." id="search" onkeyup="searchUser()">
                    <i class='bx bx-search'></i>
                </div>

                <div class="search-container">


</div>


                <div class="search-box">
                    <button class="see-more2"><a href="member_payment_form.php">+ ADD PAYMENT</a></button>
                </div>
            </div>
            

            <div class="member-list">
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th>Payment ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Phone Number</th>
                            <th>Description</th>
                            <th>Assigned Trainer</th>
                            <th>Payment Amount</th>
                            <th>Payment Date</th>
                            <th>Payment Type</th>
                        </tr>
                    </thead>
                    <tbody class="output" id="output">
                        <?php
                            $sql = "SELECT * FROM payment WHERE payment_date>='$year-$month-01'";
                            $result = mysqli_query($conn, $sql);
                            while ($payment_row = mysqli_fetch_assoc($result)) {
                                $payment_id = $payment_row['payment_id'];
                                $member_id = $payment_row['member_id'];
                                $payment_date = $payment_row['payment_date'];
                                $payment_amount = $payment_row['payment_amount'];
                                $trainer_id = $payment_row['trainer_id'];
                                $payment_type = $payment_row['payment_type'];
                                $description = $payment_row['description'];
                                
                                $sql2 = "SELECT * FROM member WHERE member_id = $member_id";
                                $result2 = mysqli_query($conn, $sql2);
                                $payment_row2 = mysqli_fetch_assoc($result2);
                                $f_name = $payment_row2['f_name'];
                                $l_name = $payment_row2['l_name'];
                                $phone_no = $payment_row2['phone_no'];
                                $assign_trainer = $payment_row2['assign_trainer'];
                                if ($assign_trainer >= 1){
                                    $sql3 = "SELECT username FROM trainer WHERE trainer_id = '$assign_trainer'";
                                    $result3 = mysqli_query($conn, $sql3);
                                    $payment_row3 = mysqli_fetch_assoc($result3);
                                    $trainer_name = $payment_row3['username'];
                                }
                                else{
                                    $trainer_name = "N/A";
                                }

                                // $sql4 = "SELECT membership_type FROM membership WHERE member_id = $member_id";
                                // $result4 = mysqli_query($conn, $sql4);
                                // $payment_row4 = mysqli_fetch_assoc($result4);
                                // $membership_type = $payment_row4['membership_type'];
                        ?>
                        <tr>
                            <td><?php echo "$payment_id"?></td>
                            <td><?php echo "$f_name"?></td>
                            <td><?php echo "$l_name"?></td>
                            <td><?php echo "$phone_no"?></td>
                            <td><?php echo "$description"?></td>
                            <td><?php echo "$trainer_name"?></td>
                            <td><?php echo "$payment_amount"?></td>
                            <td><?php echo "$payment_date"?></td>
                            <td><?php echo "$payment_type"?></td>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table>


            </div>
        </div>

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

    function searchUser(){
        var input = document.getElementById("search");
        var filter = input.value.toUpperCase();
        var tbody = document.getElementById("output");
        var row = tbody.getElementsByTagName("tr");
        for(let i = 0;i < row.length; i++){
            var td = row[i].getElementsByTagName('td')[1];
            var txtValue = td.textContent || td.innerText;
            if(txtValue.toUpperCase().indexOf(filter) > -1){
                row[i].style.display = "";
            }
            else{
                row[i].style.display = "none";
            }
        }

    }


</script>


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