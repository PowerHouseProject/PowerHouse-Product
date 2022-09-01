<?php include "includes/check_login.php" ?>

<?php 
    require "includes/db.php";
    $username = $_SESSION['username'];
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/schedule.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <div class="welcomenote"><h1></h1></div>
        <div class="HdividerL">
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
        </div>
        <div class="up">
            <div class="vboderdivider"></div>
            <div class="middle">
                <div class="note"><h1>Workout Schedule</h1></div>
                <?php 
                    //schedule value initializing
                    $query1 = "SELECT * FROM member WHERE username = '".$username."'";
                    $result1 = mysqli_query($conn, $query1);
                    $row1 = mysqli_fetch_assoc($result1);
                    
                    $member_id = $row1['member_id']; 

                   
                for($m=0;$m<=6;$m++){ 
                    $week=array("day1_ex1","day2_ex1","day3_ex1","day4_ex1","day5_ex1","day6_ex1","day7_ex1");

                    $column = $week[$m];
                    $find = "SELECT $column FROM schedule WHERE member_id='$member_id';";
                    $result2 = mysqli_query($conn, $find);

                    $row = mysqli_fetch_assoc($result2);
                    $en_rs = $row["$week[$m]"];
   
                    $ex1 = unserialize(base64_decode($en_rs));
                    $out[$m]=$ex1;
                }

                    if($out[0]==''){$day1_flag=0;}else if($out[0][0]!='0'){$day1_flag=1;}else if($out[0][0]== '0'){$day1_flag=0;}
                    if($out[1]==''){$day2_flag=0;}else if($out[1][0]!='0'){$day2_flag=1;}else if($out[1][0]== '0'){$day2_flag=0;}
                    if($out[2]==''){$day3_flag=0;}else if($out[2][0]!='0'){$day3_flag=1;}else if($out[2][0]== '0'){$day3_flag=0;}
                    if($out[3]==''){$day4_flag=0;}else if($out[3][0]!='0'){$day4_flag=1;}else if($out[3][0]== '0'){$day4_flag=0;}
                    if($out[4]==''){$day5_flag=0;}else if($out[4][0]!='0'){$day5_flag=1;}else if($out[4][0]== '0'){$day5_flag=0;}
                    if($out[5]==''){$day6_flag=0;}else if($out[5][0]!='0'){$day6_flag=1;}else if($out[5][0]== '0'){$day6_flag=0;}
                    if($out[6]==''){$day7_flag=0;}else if($out[6][0]!='0'){$day7_flag=1;}else if($out[6][0]== '0'){$day7_flag=0;}

                ?>

                <!-- schedule editor -->
                <div id="popup1" class="overlay">
                    <div class="popup">
                        <h2>Hi <?php echo $username ?>! You may edit your Schedule now. </h2>
                        <a class="close" href="#">&times;</a>
                        <h3><i class="fas fa-exclamation-circle"></i>Please use the checkboxes under each day to orgnize the workout days.</h3>
                        <div class="content">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>DAY 01<label class="container"><input type="checkbox"  id="1" onclick="changemode(1);" <?php echo $day1_flag==1 ? "checked" : "";?>><span class="checkmark"></span></label></th>
                                    <th>DAY 02<label class="container"><input type="checkbox"  id="2" onclick="changemode(2);" <?php echo $day2_flag==1 ? "checked" : "";?>><span class="checkmark"></span></label></th>
                                    <th>DAY 03<label class="container"><input type="checkbox"  id="3" onclick="changemode(3);" <?php echo $day3_flag==1 ? "checked" : "";?>><span class="checkmark"></span></label></th>
                                    <th>DAY 04<label class="container"><input type="checkbox"  id="4" onclick="changemode(4);" <?php echo $day4_flag==1 ? "checked" : "";?>><span class="checkmark"></span></label></th>
                                    <th>DAY 05<label class="container"><input type="checkbox"  id="5" onclick="changemode(5);" <?php echo $day5_flag==1 ? "checked" : "";?>><span class="checkmark"></span></label></th>
                                    <th>DAY 06<label class="container"><input type="checkbox"  id="6" onclick="changemode(6);" <?php echo $day6_flag==1 ? "checked" : "";?>><span class="checkmark"></span></label></th>
                                    <th>DAY 07<label class="container"><input type="checkbox"  id="7" onclick="changemode(7);" <?php echo $day7_flag==1 ? "checked" : "";?>><span class="checkmark"></span></label></th>
                                </tr>
                            </thead>

                            <tbody id="output">
                                <form action="update_schedule.php"  id="schedule_form " method="GET">

                                <?php 
                                    for($i=1; $i<=6 ; $i++){
                                    
                                        for($m=0;$m<=6;$m++){ 
                                            $week=array("day1_ex$i","day2_ex$i","day3_ex$i","day4_ex$i","day5_ex$i","day6_ex$i","day7_ex$i");

                                            $column = $week[$m];
                                            $find = "SELECT $column FROM schedule WHERE member_id='$member_id';";   
                                            $result2 = mysqli_query($conn, $find);
                        
                                            $row = mysqli_fetch_assoc($result2);
                                            $en_rs = $row["$week[$m]"];

                                            $ex1 = unserialize(base64_decode($en_rs));
                                            $out[$m]=$ex1;
                                        }
                                        
                                        echo "<tr>";
                                        echo "<td class='col_1' id='d1ex".$i."'>";if($day1_flag==1){
                                                if($out[0][0] == ''){echo "<b><span class ='bpart'><input type='text' class='muscle_input' id='1_".$i."1' placeholder='Muscle>' name='D1_".$i."1' value='' ";if($i <= 3){echo "required";}echo"></input></span><br><input type='text' class='exercise_input' id='1_".$i."2' placeholder='exercise' name='D1_".$i."2' value=''";if($i <= 3){echo "required";}echo"> </input> </b><br><input type='number' class='num_input' id='1_".$i."3' name='D1_".$i."3' min ='1' max='10' value=''></input>  sets of &nbsp<input type='number' class='num_input' id='1_".$i."4' name='D1_".$i."4' min ='1' max='80' value=''></input> reps";}
                                                else{echo "<b><span class ='bpart'><input type='text' class='muscle_input' id='1_".$i."1' placeholder='Muscle>' name='D1_".$i."1' value='".$out[0][0]."' ";if($i <= 3){echo "required";}echo"></input></span><br><input type='text' class='exercise_input' id='1_".$i."2' placeholder='exercise' name='D1_".$i."2' value='".$out[0][1]."' ";if($i <= 3){echo "required";}echo"> </input> </b><br><input type='number' class='num_input' id='1_".$i."3' name='D1_".$i."3' min ='1' max='10' value='".$out[0][2]."'></input>  sets of &nbsp<input type='number' class='num_input' id='1_".$i."4' name='D1_".$i."4' min ='1' max='80' value='".$out[0][3]."'></input> reps";}
                                            }else if($day1_flag==0){echo"<b>Rest</b><input type='text' class='rest_input' id='1_".$i."1' name='D1_".$i."1' value='0'> </input>";}             
                                            echo "</td>";

                                            echo "<td class='col_2' id='d2ex".$i."'>";if($day2_flag==1){
                                                if($out[1][0] == '') {echo "<b><span class ='bpart'><input type='text' class='muscle_input' id='2_".$i."1' placeholder='Muscle>' name='D2_".$i."1' value='' ";if($i <= 3){echo "required";}echo"></input></span><br><input type='text' class='exercise_input' id='1_".$i."2' placeholder='exercise' name='D2_".$i."2' value='' ";if($i <= 3){echo "required";}echo"> </input> </b><br><input type='number' class='num_input' id='1_".$i."3' name='D2_".$i."3' min ='1' max='10' value=''></input>  sets of &nbsp<input type='number' class='num_input' id='1_".$i."4' name='D2_".$i."4' min ='1' max='80' value=''></input> reps";}                  
                                                else{echo "<b><span class ='bpart'><input type='text' class='muscle_input' id='2_".$i."1' placeholder='Muscle>' name='D2_".$i."1' value='".$out[1][0]."'";if($i <= 3){echo "required";}echo"></input></span><br><input type='text' class='exercise_input' id='1_".$i."2' placeholder='exercise' name='D2_".$i."2' value='".$out[1][1]."' ";if($i <= 3){echo "required";}echo"> </input> </b><br><input type='number' class='num_input' id='1_".$i."3' name='D2_".$i."3' min ='1' max='10' value='".$out[1][2]."'></input>  sets of &nbsp<input type='number' class='num_input' id='1_".$i."4' name='D2_".$i."4' min ='1' max='80' value='".$out[1][3]."'></input> reps";}
                                            }else if($day2_flag==0){echo"<b>Rest</b><input type='text' class='rest_input' id='2_".$i."1' name='D2_".$i."1' value='0'> </input>";}    
                                            echo "</td>";

                                            echo "<td class='col_3' id='d3ex".$i."'>";if($day3_flag==1){
                                                if($out[2][0] == '') { echo "<b><span class ='bpart'><input type='text' class='muscle_input' id='3_".$i."1' placeholder='Muscle>' name='D3_".$i."1' value='' ";if($i <= 3){echo "required";}echo"></input></span><br><input type='text' class='exercise_input' id='1_".$i."2' placeholder='exercise' name='D3_".$i."2' value='' ";if($i <= 3){echo "required";}echo"> </input> </b><br><input type='number' class='num_input' id='1_".$i."3' name='D3_".$i."3' min ='1' max='10' value=''></input>  sets of &nbsp<input type='number' class='num_input' id='1_".$i."4' name='D3_".$i."4' min ='1' max='80' value=''></input> reps";}
                                                else{echo "<b><span class ='bpart'><input type='text' class='muscle_input' id='3_".$i."1' placeholder='Muscle>' name='D3_".$i."1' value='".$out[2][0]."' ";if($i <= 3){echo "required";}echo"></input></span><br><input type='text' class='exercise_input' id='1_".$i."2' placeholder='exercise' name='D3_".$i."2' value='".$out[2][1]."' ";if($i <= 3){echo "required";}echo"> </input> </b><br><input type='number' class='num_input' id='1_".$i."3' name='D3_".$i."3' min ='1' max='10' value='".$out[2][2]."'></input>  sets of &nbsp<input type='number' class='num_input' id='1_".$i."4' name='D3_".$i."4' min ='1' max='80' value='".$out[2][3]."'></input> reps";}
                                            }else if($day3_flag==0){echo"<b>Rest</b><input type='text' class='rest_input' id='3_".$i."1' name='D3_".$i."1' value='0'> </input>";}   
                                            echo "</td>";

                                            echo "<td class='col_4' id='d4ex".$i."'>";if($day4_flag==1){
                                                if($out[3][0] == ''){ echo "<b><span class ='bpart'><input type='text' class='muscle_input' id='4_".$i."1' placeholder='Muscle>' name='D4_".$i."1' value='' ";if($i <= 3){echo "required";}echo"></input></span><br><input type='text' class='exercise_input' id='1_".$i."2' placeholder='exercise' name='D4_".$i."2' value='' ";if($i <= 3){echo "required";}echo"> </input> </b><br><input type='number' class='num_input' id='1_".$i."3' name='D4_".$i."3' min ='1' max='10' value=''></input>  sets of &nbsp<input type='number' class='num_input' id='1_".$i."4' name='D4_".$i."4' min ='1' max='80' value=''></input> reps";}
                                                else{echo "<b><span class ='bpart'><input type='text' class='muscle_input' id='4_".$i."1' placeholder='Muscle>' name='D4_".$i."1' value='".$out[3][0]."' ";if($i <= 3){echo "required";}echo"></input></span><br><input type='text' class='exercise_input' id='1_".$i."2' placeholder='exercise' name='D4_".$i."2' value='".$out[3][1]."' ";if($i <= 3){echo "required";}echo"> </input> </b><br><input type='number' class='num_input' id='1_".$i."3' name='D4_".$i."3' min ='1' max='10' value='".$out[3][2]."'></input>  sets of &nbsp<input type='number' class='num_input' id='1_".$i."4' name='D4_".$i."4' min ='1' max='80' value='".$out[3][3]."'></input> reps";}
                                            }else if($day4_flag==0){echo"<b>Rest</b><input type='text' class='rest_input' id='4_".$i."1' name='D4_".$i."1' value='0'> </input>";}    
                                            echo "</td>";

                                            echo "<td class='col_5' id='d5ex".$i."'>";if($day5_flag==1){
                                                if($out[4][0] == ''){echo "<b><span class ='bpart'><input type='text' class='muscle_input' id='5_".$i."1' placeholder='Muscle>' name='D5_".$i."1' value='' ";if($i <= 3){echo "required";}echo"></input></span><br><input type='text' class='exercise_input' id='1_".$i."2' placeholder='exercise' name='D5_".$i."2' value='' ";if($i <= 3){echo "required";}echo"> </input> </b><br><input type='number' class='num_input' id='1_".$i."3' name='D5_".$i."3' min ='1' max='10' value=''></input>  sets of &nbsp<input type='number' class='num_input' id='1_".$i."4' name='D5_".$i."4' min ='1' max='80' value=''></input> reps";}                                         
                                                else{echo "<b><span class ='bpart'><input type='text' class='muscle_input' id='5_".$i."1' placeholder='Muscle>' name='D5_".$i."1' value='".$out[4][0]."' ";if($i <= 3){echo "required";}echo"></input></span><br><input type='text' class='exercise_input' id='1_".$i."2' placeholder='exercise' name='D5_".$i."2' value='".$out[4][1]."' ";if($i <= 3){echo "required";}echo"> </input> </b><br><input type='number' class='num_input' id='1_".$i."3' name='D5_".$i."3' min ='1' max='10' value='".$out[4][2]."'></input>  sets of &nbsp<input type='number' class='num_input' id='1_".$i."4' name='D5_".$i."4' min ='1' max='80' value='".$out[4][3]."'></input> reps";}
                                            }else if($day5_flag==0){echo"<b>Rest</b><input type='text' class='rest_input' id='5_".$i."1' name='D5_".$i."1' value='0'> </input>";}
                                            echo "</td>";

                                            echo "<td class='col_6' id='d6ex".$i."'>";if($day6_flag==1){
                                                if($out[5][0] == ''){echo "<b><span class ='bpart'><input type='text' class='muscle_input' id='6_".$i."1' placeholder='Muscle>' name='D6_".$i."1' value='' ";if($i <= 3){echo "required";}echo"></input></span><br><input type='text' class='exercise_input' id='1_".$i."2' placeholder='exercise' name='D6_".$i."2' value='' ";if($i <= 3){echo "required";}echo"> </input> </b><br><input type='number' class='num_input' id='1_".$i."3' name='D6_".$i."3' min ='1' max='10' value=''></input>  sets of &nbsp<input type='number' class='num_input' id='1_".$i."4' name='D6_".$i."4' min ='1' max='80' value=''></input> reps";}
                                                else{echo "<b><span class ='bpart'><input type='text' class='muscle_input' id='6_".$i."1' placeholder='Muscle>' name='D6_".$i."1' value='".$out[5][0]."'";if($i <= 3){echo "required";}echo"></input></span><br><input type='text' class='exercise_input' id='1_".$i."2' placeholder='exercise' name='D6_".$i."2' value='".$out[5][1]."' ";if($i <= 3){echo "required";}echo"> </input> </b><br><input type='number' class='num_input' id='1_".$i."3' name='D6_".$i."3' min ='1' max='10' value='".$out[5][2]."'></input>  sets of &nbsp<input type='number' class='num_input' id='1_".$i."4' name='D6_".$i."4' min ='1' max='80' value='".$out[5][3]."'></input> reps";}
                                            }else if($day6_flag==0){echo"<b>Rest</b><input type='text' class='rest_input' id='6_".$i."1' name='D6_".$i."1' value='0'> </input>";}    
                                            echo "</td>";

                                            echo "<td class='col_7' id='d7ex".$i."'>";if($day7_flag==1){
                                                if($out[6][0] == ''){echo "<b><span class ='bpart'><input type='text' class='muscle_input' id='7_".$i."1' placeholder='Muscle>' name='D7_".$i."1' value='' ";if($i <= 3){echo "required";}echo"></input></span><br><input type='text' class='exercise_input' id='1_".$i."2' placeholder='exercise' name='D7_".$i."2' value='' ";if($i <= 3){echo "required";}echo"> </input> </b><br><input type='number' class='num_input' id='1_".$i."3' name='D7_".$i."3' min ='1' max='10' value=''></input>  sets of &nbsp<input type='number' class='num_input' id='1_".$i."4' name='D7_".$i."4' min ='1' max='80' value=''></input> reps";}     
                                                else{echo "<b><span class ='bpart'><input type='text' class='muscle_input' id='7_".$i."1' placeholder='Muscle>' name='D7_".$i."1' value='".$out[6][0]."' ";if($i <= 3){echo "required";}echo"></input></span><br><input type='text' class='exercise_input' id='1_".$i."2' placeholder='exercise' name='D7_".$i."2' value='".$out[6][1]."' ";if($i <= 3){echo "required";}echo"> </input> </b><br><input type='number' class='num_input' id='1_".$i."3' name='D7_".$i."3' min ='1' max='10' value='".$out[6][2]."'></input>  sets of &nbsp<input type='number' class='num_input' id='1_".$i."4' name='D7_".$i."4' min ='1' max='80' value='".$out[6][3]."'></input> reps";}
                                            }else if($day7_flag==0){echo"<b>Rest</b><input type='text' class='rest_input' id='7_".$i."1' name='D7_".$i."1' value='0'> </input>";}  
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                
                                ?>
                                <tr>
                            </tbody>
                        </table>
                            <div class="fixT">
                                <button class="check_btn" id="tbook" type="submit" name="time-submit" onclick="">SAVE SCHEDULE</button>
                            </div>
                            <div class="msg" id="pop2tr_name"><p></p></div><div class="later">NOTE:If you are assign with a trainer ,that specific trainer can access your these tables.</div>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- schedule dispaly -->
                <div class="member-list">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>DAY 01</th>
                                <th>DAY 02</th>
                                <th>DAY 03</th>
                                <th>DAY 04</th>
                                <th>DAY 05</th>
                                <th>DAY 06</th>
                                <th>DAY 07</th>
                            </tr>
                        </thead>

                        <tbody id="output">
                            <?php 
                                for($k=1; $k<=6 ; $k++){
                                        for($m=0;$m<=6;$m++){    
                                            $week=array("day1_ex$k","day2_ex$k","day3_ex$k","day4_ex$k","day5_ex$k","day6_ex$k","day7_ex$k");
                                           
                                            $column = $week[$m];

                                            $find2 = "SELECT $column FROM schedule WHERE member_id='$member_id';";   
                                            $result3 = mysqli_query($conn, $find2);
                            
                                            $row = mysqli_fetch_assoc($result3);
                                            $en_rs = $row["$week[$m]"];
                           
                                            $ex1 = unserialize(base64_decode($en_rs));
                        
                                            $out[$m]=$ex1;
                                        }
                                    echo "<tr>
                                        <td class='col_1'>";if($day1_flag==1){
                                            if($out[0][0] == '' || $out[0][0] == '0'){echo"";}else{echo"<b><span class ='bpart'>".$out[0][0]."&nbsp; ></span><br>".$out[0][1]."</b><br>".$out[0][2]." sets of&nbsp;".$out[0][3]." reps</td>";}
                                        }else{echo"<b>Rest</b>";}
                                        echo "</td>";
                                        echo "<td class='col_2'>";if($day2_flag==1){
                                            if($out[1][0] == '' || $out[1][0] == '0'){echo"";}else{echo"<b><span class ='bpart'>".$out[1][0]."&nbsp;  ></span><br> ".$out[1][1]."</b><br>".$out[1][2]." sets of&nbsp;".$out[1][3]." reps</td>";}
                                        }else{echo"<b>Rest</b>";}
                                        echo "</td>";
                                        echo "<td class='col_3'>";if($day3_flag==1){
                                            if($out[2][0] == '' || $out[2][0] == '0'){echo"";}else{echo"<b><span class ='bpart'>".$out[2][0]."&nbsp;  ></span><br> ".$out[2][1]."</b><br> ".$out[2][2]." sets of&nbsp;".$out[2][3]." reps</td>";}
                                        }else{echo"<b>Rest</b>";}
                                        echo "</td>";
                                        echo "<td class='col_4'>";if($day4_flag==1){
                                            if($out[3][0] == '' || $out[3][0] == '0'){echo"";}else{echo"<b><span class ='bpart'>".$out[3][0]."&nbsp;  ></span><br>".$out[3][1]."</b><br> ".$out[3][2]." sets of&nbsp;".$out[3][3]." reps</td>";}
                                        }else{echo"<b>Rest</b>";}
                                        echo "</td>";
                                        echo "<td class='col_5'>";if($day5_flag==1){
                                            if($out[4][0] == '' || $out[4][0] == '0'){echo"";}else{echo"<b><span class ='bpart'>".$out[4][0]."&nbsp;  ></span><br>".$out[4][1]."</b><br> ".$out[4][2]." sets of&nbsp;".$out[4][3]." reps</td>";}
                                        }else{echo"<b>Rest</b>";}
                                        echo "</td>";
                                        echo "<td class='col_6'>";if($day6_flag==1){
                                            if($out[5][0] == '' || $out[5][0] == '0'){echo"";}else{echo"<b><span class ='bpart'>".$out[5][0]."&nbsp;  ></span><br>".$out[5][1]."</b><br> ".$out[5][2]." sets of&nbsp;".$out[5][3]." reps</td>";}
                                        }else{echo"<b>Rest</b>";}
                                        echo "</td>";
                                        echo "<td class='col_7'>";if($day7_flag==1){
                                            if($out[6][0] == '' || $out[6][0] == '0'){echo"";}else{ echo"<b><span class ='bpart'>".$out[6][0]."&nbsp;  ></span><br> ".$out[6][1]."</b><br> ".$out[6][2]." sets of&nbsp;".$out[6][3]." reps</td>";}
                                        }else{echo"<b>Rest</b>";}          
                                        echo "</td>";
                                    echo "</tr>";
                                    }
                            ?>
                                

                        </tbody>
                    </table>
                </div>
                <div class="fixT">
                    <button class="check_btn" id="tbook" type="submit" name="time-submit" onclick="location.href='#popup1'">EDIT SCHEDULE</button>
                </div>
            </div>
            
            <div class="vboderdivider"></div>
        </div>

        <div class="HdividerL"></div>

           
    </section>
    <?php include "includes/footer.php" ?>

    <script>   


        $( document ).ready(function() {
            window.location.href = "#";
        });


        //schedule day changer
        var i;
        function changemode(i) {                         

            var value = document.getElementById(i).checked;
            //alert(i);
            //alert(value);
            if (value === true){
                for(j=1;j<=6;j++){
                    if(j <= 3){
                        // alert("hi");
                        $("#d"+i+"ex"+j).empty();$("#d"+i+"ex"+j).html("<b><span class ='bpart'><input type='text' class='muscle_input' id='"+i+"_"+j+"1' placeholder='Muscle>' name='D"+i+"_"+j+"1' value='0' required ></input></span><br><input type='text' class='exercise_input' id='"+i+"_"+j+"2' placeholder='exercise' name='D"+i+"_"+j+"2' value='' required> </input> </b><br><input type='number' class='num_input' id='"+i+"_"+j+"3' name='D"+i+"_"+j+"3' min ='1' max='10' value='1' required></input>  sets of <input type='number' class='num_input' id='"+i+"_"+j+"4' name='D"+i+"_"+j+"4' min ='1' max='80' value='1' required></input> reps");
                        // document.getElementById("d"+i+"ex"+j).innerHTML= "<b><span class ='bpart'><input type='text' class='muscle_input' id='"+i+"_"+j+"1' placeholder='Muscle>' name='D"+i+"_"+j+"1' value='0' required ></input></span><br><input type='text' class='exercise_input' id='"+i+"_"+j+"2' placeholder='exercise' name='D"+i+"_"+j+"2' value='' required> </input> </b><br><input type='number' class='num_input' id='"+i+"_"+j+"3' name='D"+i+"_"+j+"3' min ='1' max='10' value='1' required></input>  sets of <input type='number' class='num_input' id='"+i+"_"+j+"4' name='D"+i+"_"+j+"4' min ='1' max='80' value='1' required></input> reps";
                    }
                    else{
                        document.getElementById("d"+i+"ex"+j).innerHTML= "<b><span class ='bpart'><input type='text' class='muscle_input' id='"+i+"_"+j+"1' placeholder='Muscle>' name='D"+i+"_"+j+"1' value='0' ></input></span><br><input type='text' class='exercise_input' id='"+i+"_"+j+"2' placeholder='exercise' name='D"+i+"_"+j+"2' value='' > </input> </b><br><input type='number' class='num_input' id='"+i+"_"+j+"3' name='D"+i+"_"+j+"3' min ='1' max='10' value='1'></input>  sets of <input type='number' class='num_input' id='"+i+"_"+j+"4' name='D"+i+"_"+j+"4' min ='1' max='80' value='1'></input> reps";
                    }
                }
            }else if(value === false){
                for(j=1;j<=6;j++){
                    $("#d"+i+"ex"+j).empty();$("#d"+i+"ex"+j).html("<b>Rest</b><input type='text' class='rest_input' id='"+i+"_"+j+"1' name='D"+i+"_"+j+"1' value='0'> </input>");
                    // document.getElementById("d"+i+"ex"+j).innerHTML="";
                    // document.getElementById("d"+i+"ex"+j).innerHTML= "<b>Rest</b><input type='text' class='rest_input' id='"+i+"_"+j+"1' name='D"+i+"_"+j+"1' value='0'> </input>";
                   
                }
            } 
            
        }
    </script>

</body>

</html>

<?php
unset($_SESSION['notification']);
?>