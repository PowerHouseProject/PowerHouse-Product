<?php

//require "includes/db.php";
?>
<?php require "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/footer.css">
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
                <span class="hr-text" >PAYABLES</span>
            </div>
            <div class="search-bar">
                <div class="search-box" id="search-bar">
                    <input type="text" placeholder="Search by name..." id="search-1" onkeyup="searchPayee('search-1','output-1')">
                    <i class='bx bx-search'></i>
                </div>
                <!-- <div class="search-box">
                    <button class="see-more2"><a href="member_payment_form.php">+ ADD PAYMENT</a></button>
                </div> -->
            </div>
            

            <div class="member-list">
                <table class="table table-hover">
                    <thead>
                        

                        <th style="display:flex ;"><p style="width: 120px;">Trainer ID</p>
                          <p style="width: 170px;"> Firstname</p>
                           <p style="width: 170px;">Lastname</p>
                           <p style="width: 120px;">Phone Number</p>
                           <p style="width: 170px;">Completed Members</p>
                           <p style="width: 100px;">Payment Amount</p>
                           <p style="width: 100px;"></p>
                        </th>

                            <!-- <th>Trainer ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Phone Number</th>
                            <th>Completed Members</th> -->
                            <!-- <th>Payment Date</th> -->
                            <!-- <th>Payment Amount</th>
                            <th> </th> -->
                        </tr>
                    </thead>
                    <tbody id="output-1" style = "display:block; max-height: 300px;  overflow-y:scroll; overflow-x:hidden; ">

                    <?php
        $mydate=date("y-m-d");
        $month=date('m',strtotime($mydate));
        $year=date('y',strtotime($mydate));
        ?>
                        <?php


                        $sql1 = "SELECT * FROM trainer_receviables" ;
                        $result1 = mysqli_query($conn, $sql1);

                        // $sql = "SELECT * FROM trainer";
                        // $result = mysqli_query($conn, $sql);
                        $sql2 = "SELECT * FROM trainer_payables";
                        $result2 = mysqli_query($conn, $sql2);

                        // if(empty(mysqli_fetch_assoc($result1))){
                        //     $text="text";
                        // }
                        // else{
                        //     $text="";
                        // }
                       

                        

                        while ($trainer_row2 = mysqli_fetch_assoc($result1) ) {
                            if($trainer_row2['assignment_count']!=0){

                                $trainer_id = $trainer_row2['trainer_id'];

                           
                            $sql = "SELECT * FROM trainer WHERE trainer_id = '" . $trainer_id . "'";
                            $result = mysqli_query($conn, $sql);
                            $trainer_row = mysqli_fetch_assoc($result);

                            $sql3 = "SELECT * FROM users WHERE username = '" . $trainer_row["username"] . "'";
                            $result3 = mysqli_query($conn, $sql3);
                            $trainer_row3 = mysqli_fetch_assoc($result3);

                            

                            $f_name = $trainer_row['f_name'];
                            $l_name = $trainer_row['l_name'];
                            $phone_no = $trainer_row['phone_no'];
                            $username=$trainer_row['username'];

                            $email=$trainer_row3['email'];
                            $assigned_members = $trainer_row2['assignment_count'];
                            $payment_amount = $assigned_members * $trainer_row['rate']*80/100;


                        ?>
                        
                        
                            <tr>
                                <td  style="width:200px"><?php echo "$trainer_id" ?></td>
                                <td style="width:200px"><?php echo "$f_name" ?></td>
                                <td style="width:200px"><?php echo "$l_name" ?></td>
                                <td style="width:200px"><?php echo "$phone_no" ?></td>
                                <td style="width:200px"><?php echo "$assigned_members" ?></td>
                                <!-- <td><?php echo "$payment_date" ?></td> -->
                                <td style="width:200px"><?php echo "$payment_amount" ?></td>
                                <td style="width:200px"> <button type="button" class="hero_btn" style="width:100px ; heigth:20px; padding:0px; margin:0px ;font-size: 13px;" onclick="location.href='trainer_payment_form.php?username=<?=$username?>&&payment_amount=<?=$payment_amount?>&&email=<?=$email?>'">Pay Now</button> </td>
                                
                            </tr>
                            

                            <?php } ?>
                            
                        <?php } ?>
                        <tr>
                                
                                <!-- <td><?php echo "$text"  ?></td> -->
                            </tr>
                    </tbody>
                </table>


            </div>
            <div class="separator1" style="margin-top:50px; margin-bottom:20px; text-decoration:underline;">
                <span class="hr-text" >PAYMENTS</span>
            </div>
            <div class="search-bar" style = "margin-top:30px;">
                <div class="search-box" id="search-bar">
                    <input type="text" placeholder="Search by name..." id="search-2" onkeyup="searchPayee('search-2','output-2')">
                    <i class='bx bx-search'></i>
                </div>
                <!-- <div class="search-box">
                    <button class="see-more2"><a href="member_payment_form.php">+ ADD PAYMENT</a></button>
                </div> -->
            </div>

            <div class="member-list">
                <table class="table table-hover">
                    <thead>

                    
                        <tr>

                        <th style="display:flex ;"><p style="width:190px;">Trainer ID</p>
                          <p style="width: 220px;"> Name</p>
                           <p style="width: 220px;">Phone Number</p>
                           <p style="width: 230px;">Payment Date</p>
                           <!-- <p style="width: 220px;">Payment Date</p> -->
                           <p style="width: 100px;">Payment Amount</p>
                        </th>

                        </tr>
                    </thead>
                    <tbody id="output-2"  style = "display:block; max-height: 300px;  overflow-y:scroll; overflow-x:hidden;">
                        <?php


                        $sql1 = "SELECT * FROM trainer_receviables";
                        $result1 = mysqli_query($conn, $sql1);

                        $sql2 = "SELECT * FROM trainer_payables  WHERE payment_date >='$year-$month-01'";
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
                            $phone_no = $trainer_row['phone_no'];
                            $username=$trainer_row['username'];
                            $payment_date=$trainer_row2['payment_date'];

                            $email=$trainer_row3['email'];
                            $payment_amount = $trainer_row2['amount'];


                        ?>

                            <tr>
                                <td  style="width:270px"><?php echo "$trainer_id" ?></td>
                                <td style="width:300px"><?php echo "$f_name"." ".$l_name ?></td>
                                
                                <td style="width:300px"><?php echo "$phone_no" ?></td>
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

    function searchPayee(search_id,tbody){
        var input = document.getElementById(search_id);
        var filter = input.value.toUpperCase();
        var tbody = document.getElementById(tbody);
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

</body>

</html>