<?php require "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/profedit.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>




        <div class="home-content">


            <div class="separator1" style="margin-bottom:20px; text-decoration:underline;">
                <span class="hr-text">RECIEVABLES</span>
            </div>

            <div class="search-bar">
                <div class="search-box" id="search-bar">
                    <input type="text" placeholder="Search by name..." id="search-1" onkeyup="searchUsers('search-1','output-1')">
                    <i class='bx bx-search'></i>
                </div>
            </div>

            <div class="member-list">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="display:flex ;">
                                <p style="width: 200px;">USERNAME</p>
                                <p style="width: 200px;"> Payment Date</p>
                                <p style="width: 200px;">Description</p>
                                <p style="width: 200px;">Payment Amount</p>
                                <p style="width: 200px;">Payment Method</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="output-1" style="display:block; max-height: 300px;  overflow-y:scroll; overflow-x:hidden;">
                        <?php


                        $sql1 = "SELECT * FROM payment";
                        $result1 = mysqli_query($conn, $sql1);

                        // $sql = "SELECT * FROM trainer";
                        // $result = mysqli_query($conn, $sql);
                        $sql2 = "SELECT * FROM trainer_payables";
                        $result2 = mysqli_query($conn, $sql2);



                        while ($trainer_row2 = mysqli_fetch_assoc($result1)) {


                            $trainer_id = $trainer_row2['trainer_id'];
                            if ($trainer_id > 0) {
                                $sql = "SELECT * FROM trainer WHERE trainer_id = '" . $trainer_id . "'";
                                $result = mysqli_query($conn, $sql);
                                $trainer_row = mysqli_fetch_assoc($result);
                                $trainer_id_cc =  $trainer_row['username'];

                                $sql3 = "SELECT * FROM users WHERE username = '$trainer_id_cc'";
                                $result3 = mysqli_query($conn, $sql3);
                                $trainer_row3 = mysqli_fetch_assoc($result3);



                                $payment_date = $trainer_row2['payment_date'];
                                $description = $trainer_row2['description'];

                                $username = $trainer_row['username'];
                                $payment_amount = $trainer_row2['payment_amount'];
                                $payment_type = $trainer_row2['payment_type'];
                        ?>
                                <tr>

                                    <td style="width:400px"><?php echo "$username" ?></td>
                                    <td style="width:400px"><?php echo "$payment_date" ?></td>
                                    <td style="width:400px"><?php echo "$description" ?></td>
                                    <td style="width:400px"><?php echo "$payment_amount" ?></td>
                                    <td style="width:600px"><?php echo "$payment_type" ?></td>
                                </tr>

                        <?php
                            }
                        } ?>


                    </tbody>
                </table>


            </div>

            <div class="separator1" style="margin-top:50px; margin-bottom:20px; text-decoration:underline;">
                <span class="hr-text">PAYMENTS</span>
            </div>

            <div class="search-bar">
                <div class="search-box" id="search-bar">
                    <input type="text" placeholder="Search by name..." id="search-2" onkeyup="searchUsers('search-2','output-2')">
                    <i class='bx bx-search'></i>
                </div>
            </div>

            <div class="member-list">
                <table class="table table-hover" style="width: 900px;">
                    <thead style="width: 900px;">
                        <tr>

                            <th style="display:flex ;">
                                <p style="width: 300px;">USERNAME</p>
                                <p style="width: 300px;"> PAYMENT DATE</p>
                                <p style="width: 300px;">Payment Amount</p>
                            </th>
                            <!-- <th>PAYMENT DATE</th>
                            <th>Payment Amount</th> -->
                        </tr>
                    </thead>
                    <tbody id="output-2" style="display:block; max-height: 300px; width:1000px; overflow-y:scroll; overflow-x:hidden;">
                        <?php


                        $sql1 = "SELECT * FROM trainer_receviables";
                        $result1 = mysqli_query($conn, $sql1);

                        // $sql = "SELECT * FROM trainer";
                        // $result = mysqli_query($conn, $sql);
                        $sql2 = "SELECT * FROM trainer_payables";
                        $result2 = mysqli_query($conn, $sql2);



                        while ($trainer_row2 = mysqli_fetch_assoc($result2)) {
                            $trainer_id = $trainer_row2['trainer_id'];


                            $sql = "SELECT * FROM trainer WHERE trainer_id = '" . $trainer_id . "'";
                            $result = mysqli_query($conn, $sql);
                            $trainer_row = mysqli_fetch_assoc($result);

                            $sql3 = "SELECT * FROM users WHERE username = '" . $trainer_row["username"] . "'";
                            $result3 = mysqli_query($conn, $sql3);
                            $trainer_row3 = mysqli_fetch_assoc($result3);



                            $f_name = $trainer_row['f_name'];
                            $l_name = $trainer_row['l_name'];
                            $payment_date = $trainer_row2['payment_date'];
                            $username = $trainer_row['username'];

                            $email = $trainer_row3['email'];
                            $payment_amount = $trainer_row2['amount'];


                        ?>



                            <tr>
                                <td style="width:300px"><?php echo "$username" ?></td>
                                <td style="width:300px"><?php echo "$payment_date" ?></td>
                                <td style="width:300px"><?php echo "$payment_amount" ?></td>
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
                        url: 'includes/member-page1.php',
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

    function searchUsers(search_id, tbody) {
        var input = document.getElementById(search_id);
        var filter = input.value.toUpperCase();
        var tbody = document.getElementById(tbody);
        var row = tbody.getElementsByTagName("tr");
        for (let i = 0; i < row.length; i++) {
            var td = row[i].getElementsByTagName('td')[0];
            var txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                row[i].style.display = "";
            } else {
                row[i].style.display = "none";
            }
        }
    }
</script>

</body>

</html>