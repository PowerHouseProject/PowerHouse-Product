<?php include "includes/check_login.php" ?>

<?php
require "includes/db.php";
$username = $_SESSION['username'];
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/mealplan.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>

        <div class="welcomenote">
            <h1></h1>
        </div>
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
        <div class="uppart">
            <?php
            $query1 = "SELECT * FROM member WHERE username = '" . $username . "'";
            $result1 = mysqli_query($conn, $query1);
            $row1 = mysqli_fetch_assoc($result1);
            $member_id = $row1['member_id'];

            // getting meal plan data for each table cell from each database entry column of the relevant member
            $query2 = "SELECT * FROM meal_plan WHERE member_id = '" . $member_id . "'";
            $result2 = mysqli_query($conn, $query2);
            $row2 = mysqli_fetch_assoc($result2);
            $monday_bkft = $row2['monday_bkft'];
            $tuseday_bkft = $row2['tuseday_bkft'];
            $wednesday_bkft = $row2['wednesday_bkft'];
            $thursday_bkft = $row2['thursday_bkft'];
            $friday_bkft = $row2['friday_bkft'];
            $saturday_bkft = $row2['saturday_bkft'];
            $sunday_bkft = $row2['sunday_bkft'];
            $monday_msnk = $row2['monday_msnk'];
            $tuseday_msnk = $row2['tuseday_msnk'];
            $wednesday_msnk = $row2['wednesday_msnk'];
            $thursday_msnk = $row2['thursday_msnk'];
            $friday_msnk = $row2['friday_msnk'];
            $saturday_msnk = $row2['saturday_msnk'];
            $sunday_msnk = $row2['sunday_msnk'];
            $monday_lunch = $row2['monday_lunch'];
            $tuseday_lunch = $row2['tuseday_lunch'];
            $wednesday_lunch = $row2['wednesday_lunch'];
            $thursday_lunch = $row2['thursday_lunch'];
            $friday_lunch = $row2['friday_lunch'];
            $saturday_lunch = $row2['saturday_lunch'];
            $sunday_lunch = $row2['sunday_lunch'];
            $monday_esnk = $row2['monday_esnk'];
            $tuseday_esnk = $row2['tuseday_esnk'];
            $wednesday_esnk = $row2['wednesday_esnk'];
            $thursday_esnk = $row2['thursday_esnk'];
            $friday_esnk = $row2['friday_esnk'];
            $saturday_esnk = $row2['saturday_esnk'];
            $sunday_esnk = $row2['sunday_esnk'];
            $monday_din = $row2['monday_din'];
            $tuseday_din = $row2['tuseday_din'];
            $wednesday_din = $row2['wednesday_din'];
            $thursday_din = $row2['thursday_din'];
            $friday_din = $row2['friday_din'];
            $saturday_din = $row2['saturday_din'];
            $sunday_din = $row2['sunday_din'];
            ?>
            <div class="vboderdivider"></div>
            <div class="middle">
                <div class="note">
                    <h1>Meal Plan</h1>
                </div>
                <!-- meal plan editing popup -->
                <div id="popup1" class="overlay">
                    <div class="popup">
                        <h2>Hi <?php echo $username ?>! You may edit your meal plan now. </h2>
                        <a class="close" href="#">&times;</a>
                        <div class="content">
                            <table>
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>MONDAY</th>
                                        <th>TUSEDAY</th>
                                        <th>WEDNSEDAY</th>
                                        <th>THURSDAY</th>
                                        <th>FRIDAY</th>
                                        <th>SATURDAY</th>
                                        <th>SUNDAY</th>
                                    </tr>
                                </thead>

                                <tbody id="output">

                                    <form action="update_mealplan.php" id="meal_form " method="POST">
                                        <tr>
                                            <td class="rcat">
                                                <div class="ttag"><span class="bpart">Breakfast</span></div>
                                            </td>
                                            <td class="col_1"><textarea class="item" rows="4" cols="50" id="1" name="mon_b"><?php echo $monday_bkft ?> </textarea></td>
                                            <td class="col_2"><textarea class="item" rows="4" cols="50" id="2" name="tus_b"><?php echo $tuseday_bkft ?> </textarea></td>
                                            <td class="col_3"><textarea class="item" rows="4" cols="50" id="3" name="wed_b"><?php echo $wednesday_bkft ?> </textarea></td>
                                            <td class="col_4"><textarea class="item" rows="4" cols="50" id="4" name="thu_b"><?php echo $thursday_bkft ?> </textarea></td>
                                            <td class="col_5"><textarea class="item" rows="4" cols="50" id="5" name="fri_b"><?php echo $friday_bkft ?> </textarea></td>
                                            <td class="col_6"><textarea class="item" rows="4" cols="50" id="6" name="sat_b"><?php echo $saturday_bkft ?> </textarea></td>
                                            <td class="col_7"><textarea class="item" rows="4" cols="50" id="7" name="sun_b"><?php echo $sunday_bkft ?> </textarea></td>
                                        </tr>

                                        <tr>
                                            <td class="rcat">
                                                <div class="ttag"><span class="bpart">Snack</span></div>
                                            </td>
                                            <td class="col_1"><textarea class="item" rows="4" cols="50" id="8" name="mon_ms"><?php echo $monday_msnk ?></textarea></td>
                                            <td class="col_2"><textarea class="item" rows="4" cols="50" id="9" name="tus_ms"><?php echo $tuseday_msnk ?></textarea></td>
                                            <td class="col_3"><textarea class="item" rows="4" cols="50" id="10" name="wed_ms"><?php echo $wednesday_msnk ?></textarea></td>
                                            <td class="col_4"><textarea class="item" rows="4" cols="50" id="11" name="thu_ms"><?php echo $thursday_msnk ?></textarea></td>
                                            <td class="col_5"><textarea class="item" rows="4" cols="50" id="12" name="fri_ms"><?php echo $friday_bkft ?></textarea></td>
                                            <td class="col_6"><textarea class="item" rows="4" cols="50" id="13" name="sat_ms"><?php echo $saturday_msnk ?></textarea></td>
                                            <td class="col_7"><textarea class="item" rows="4" cols="50" id="14" name="sun_ms"><?php echo $sunday_msnk ?></textarea></td>
                                        </tr>

                                        <tr>
                                            <td class="rcat">
                                                <div class="ttag"><span class="bpart">Lunch</span></div>
                                            </td>
                                            <td class="col_1"><textarea class="item" rows="4" cols="50" id="15" name="mon_l"><?php echo $monday_lunch ?></textarea></td>
                                            <td class="col_2"><textarea class="item" rows="4" cols="50" id="16" name="tus_l"><?php echo $tuseday_lunch ?></textarea></td>
                                            <td class="col_3"><textarea class="item" rows="4" cols="50" id="17" name="wed_l"><?php echo $wednesday_lunch ?></textarea></td>
                                            <td class="col_4"><textarea class="item" rows="4" cols="50" id="18" name="thu_l"><?php echo $thursday_lunch ?></textarea></td>
                                            <td class="col_5"><textarea class="item" rows="4" cols="50" id="19" name="fri_l"><?php echo $friday_lunch ?></textarea></td>
                                            <td class="col_6"><textarea class="item" rows="4" cols="50" id="20" name="sat_l"><?php echo $saturday_lunch ?></textarea></td>
                                            <td class="col_7"><textarea class="item" rows="4" cols="50" id="21" name="sun_l"><?php echo $sunday_lunch ?></textarea>
                        </div>
                        </td>
                        </tr>

                        <tr>
                            <td class="rcat">
                                <div class="ttag"><span class="bpart">Snack</span></div>
                            </td>
                            <td class="col_1"><textarea class="item" rows="4" cols="50" id="22" name="mon_esn"><?php echo $monday_esnk ?></textarea></td>
                            <td class="col_2"><textarea class="item" rows="4" cols="50" id="23" name="tus_esn"><?php echo $tuseday_esnk ?></textarea></td>
                            <td class="col_3"><textarea class="item" rows="4" cols="50" id="24" name="wed_esn"><?php echo $wednesday_esnk ?></textarea></td>
                            <td class="col_4"><textarea class="item" rows="4" cols="50" id="25" name="thu_esn"><?php echo $thursday_esnk ?></textarea></td>
                            <td class="col_5"><textarea class="item" rows="4" cols="50" id="26" name="fri_esn"><?php echo $friday_esnk ?></textarea></td>
                            <td class="col_6"><textarea class="item" rows="4" cols="50" id="27" name="sat_esn"><?php echo $saturday_esnk ?></textarea></td>
                            <td class="col_7"><textarea class="item" rows="4" cols="50" id="28" name="sun_esn"><?php echo $sunday_esnk ?></textarea></td>
                        </tr>

                        <tr>
                            <td class="rcat">
                                <div class="ttag"><span class="bpart">Dinner</span></div>
                            </td>
                            <td class="col_1"><textarea class="item" rows="4" cols="50" id="29" name="mon_di"><?php echo $monday_din ?></textarea></td>
                            <td class="col_2"><textarea class="item" rows="4" cols="50" id="30" name="tus_di"><?php echo $tuseday_din ?></textarea></td>
                            <td class="col_3"><textarea class="item" rows="4" cols="50" id="31" name="wed_di"><?php echo $wednesday_din ?></textarea></td>
                            <td class="col_4"><textarea class="item" rows="4" cols="50" id="32" name="thu_di"><?php echo $thursday_din ?></textarea></td>
                            <td class="col_5"><textarea class="item" rows="4" cols="50" id="33" name="fri_di"><?php echo $friday_din ?></textarea></td>
                            <td class="col_6"><textarea class="item" rows="4" cols="50" id="34" name="sat_di"><?php echo $saturday_din ?></textarea></td>
                            <td class="col_7"><textarea class="item" rows="4" cols="50" id="35" name="sun_di"><?php echo $sunday_din ?></textarea></td>
                        </tr>
                        </tbody>
                        </table>
                        <div class="fixT">
                            <button class="check_btn" id="tbook" type="submit" name="time-submit" onclick="">SAVE MEAL PLAN</button>
                        </div>
                        <div class="msg" id="pop2tr_name">
                            <p></p>
                        </div>
                        <div class="later">NOTE:If you are assign with a trainer ,that specific trainer can access your these tables.</div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- meal plan display -->
            <div class="member-list">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>MONDAY</th>
                            <th>TUSEDAY</th>
                            <th>WEDNSEDAY</th>
                            <th>THURSDAY</th>
                            <th>FRIDAY</th>
                            <th>SATURDAY</th>
                            <th>SUNDAY</th>
                        </tr>
                    </thead>

                    <tbody id="output">
                        <tr>
                            <td class="rcat">
                                <div class="visul"><img src="./media/breakfast.png" alt=""></div>
                                <div class="ttag"><span class="bpart">Breakfast</span></div>
                            </td>
                            <td class="col_1">
                                <div class="item"><?php echo $monday_bkft ?></div>
                            </td>
                            <td class="col_2">
                                <div class="item"><?php echo $tuseday_bkft ?></div>
                            </td>
                            <td class="col_3">
                                <div class="item"><?php echo $wednesday_bkft ?></div>
                            </td>
                            <td class="col_4">
                                <div class="item"><?php echo $thursday_bkft ?></div>
                            </td>
                            <td class="col_5">
                                <div class="item"><?php echo $friday_bkft ?> </div>
                            </td>
                            <td class="col_6">
                                <div class="item"><?php echo $saturday_bkft ?> </div>
                            </td>
                            <td class="col_7">
                                <div class="item"><?php echo $sunday_bkft ?></div>
                            </td>
                        </tr>

                        <tr>
                            <td class="rcat">
                                <div class="visul"><img src="./media/snack1.png" alt=""></div>
                                <div class="ttag"><span class="bpart">Snack</span></div>
                            </td>
                            <td class="col_1">
                                <div class="item"><?php echo $monday_msnk ?></div>
                            </td>
                            <td class="col_2">
                                <div class="item"><?php echo $tuseday_msnk ?></div>
                            </td>
                            <td class="col_3">
                                <div class="item"><?php echo $wednesday_msnk ?></div>
                            </td>
                            <td class="col_4">
                                <div class="item"><?php echo $thursday_msnk ?></div>
                            </td>
                            <td class="col_5">
                                <div class="item"><?php echo $friday_msnk ?> </div>
                            </td>
                            <td class="col_6">
                                <div class="item"><?php echo $saturday_msnk ?> </div>
                            </td>
                            <td class="col_7">
                                <div class="item"><?php echo $sunday_msnk ?></div>
                            </td>
                        </tr>

                        <tr>
                            <td class="rcat">
                                <div class="visul"><img src="./media/lunch.png" alt=""></div>
                                <div class="ttag"><span class="bpart">Lunch</span></div>
                            </td>
                            <td class="col_1">
                                <div class="item"><?php echo $monday_lunch ?></div>
                            </td>
                            <td class="col_2">
                                <div class="item"><?php echo $tuseday_lunch ?></div>
                            </td>
                            <td class="col_3">
                                <div class="item"><?php echo $wednesday_lunch ?></div>
                            </td>
                            <td class="col_4">
                                <div class="item"><?php echo $thursday_lunch ?></div>
                            </td>
                            <td class="col_5">
                                <div class="item"><?php echo $friday_lunch ?> </div>
                            </td>
                            <td class="col_6">
                                <div class="item"><?php echo $saturday_lunch ?> </div>
                            </td>
                            <td class="col_7">
                                <div class="item"><?php echo $sunday_lunch ?></div>
                            </td>
                        </tr>

                        <tr>
                            <td class="rcat">
                                <div class="visul"><img src="./media/snack2.png" alt=""></div>
                                <div class="ttag"><span class="bpart">Snack</span></div>
                            </td>
                            <td class="col_1">
                                <div class="item"><?php echo $monday_esnk ?></div>
                            </td>
                            <td class="col_2">
                                <div class="item"><?php echo $tuseday_esnk ?></div>
                            </td>
                            <td class="col_3">
                                <div class="item"><?php echo $wednesday_esnk ?></div>
                            </td>
                            <td class="col_4">
                                <div class="item"><?php echo $thursday_esnk ?></div>
                            </td>
                            <td class="col_5">
                                <div class="item"><?php echo $friday_esnk ?> </div>
                            </td>
                            <td class="col_6">
                                <div class="item"><?php echo $saturday_esnk ?> </div>
                            </td>
                            <td class="col_7">
                                <div class="item"><?php echo $sunday_esnk ?></div>
                            </td>
                        </tr>

                        <tr>
                            <td class="rcat">
                                <div class="visul"><img src="./media/dinner.png" alt=""></div>
                                <div class="ttag"><span class="bpart">Dinner</span></div>
                            </td>
                            <td class="col_1">
                                <div class="item"><?php echo $monday_din ?></div>
                            </td>
                            <td class="col_2">
                                <div class="item"><?php echo $tuseday_din ?></div>
                            </td>
                            <td class="col_3">
                                <div class="item"><?php echo $wednesday_din ?></div>
                            </td>
                            <td class="col_4">
                                <div class="item"><?php echo $thursday_din ?></div>
                            </td>
                            <td class="col_5">
                                <div class="item"><?php echo $friday_din ?> </div>
                            </td>
                            <td class="col_6">
                                <div class="item"><?php echo $saturday_din ?> </div>
                            </td>
                            <td class="col_7">
                                <div class="item"><?php echo $sunday_din ?></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="fixT">
                <button class="check_btn" id="tbook" type="submit" name="time-submit" onclick="location.href='#popup1'">EDIT MEAL PLAN</button>
            </div>
        </div>
        <div class="vboderdivider"></div>
        </div>
        <div class="divider"></div>
        <div class="dwnpart">
            <div class="vboderdivider"></div>
            <div class="lsd">
                <!-- static info section -->
                <img src="media/img.jpg">
                <div class="note2">
                    <h1>Suggestions for Meal Plan</h1>
                </div>
                <div class="con1">
                    <div class="set1">
                        <p>Foods to Focus On</p>
                        <!-- <span class="fade-effect2"></span> -->
                        <ul>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Meats, poultry and fish:</b> <br>Sirloin steak, ground beef, pork tenderloin, venison, chicken breast, salmon, tilapia and cod.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Dairy:</b> <br>Yogurt, cottage cheese, low-fat milk and cheese.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Grains:</b> <br>Bread, cereal, crackers, oatmeal, quinoa, popcorn and rice.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Fruits:</b> <br>Oranges, apples, bananas, grapes, pears, peaches, watermelon and berries.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Starchy vegetables:</b> <br>Potatoes, corn, green peas, green lima beans and cassava.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Vegetables:</b> <br>Broccoli, spinach, leafy salad greens, tomatoes, green beans, cucumber, zucchini, asparagus, peppers and mushrooms.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Seeds and nuts:</b> <br>Almonds, walnuts, sunflower seeds, chia seeds and flax seeds.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Beans and legumes:</b> <br>Chickpeas, lentils, kidney beans, black beans and pinto beans.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Oils:</b> <br>Olive oil, flaxseed oil and avocado oil.</li>
                        </ul>
                    </div>
                    <div class="set1">
                        <p>Foods to Limit</p>
                        <!-- <span class="fade-effect2"></span> -->
                        <ul class="flimit">
                            <li><i class='bx bxs-caret-right-circle'></i><b>Alcohol:</b> <br>Alcohol can negatively affect your ability to build muscle and lose fat, especially if you consume it in excess.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Added sugars:</b> <br>These offer plenty of calories but few nutrients. Foods high in added sugars include candy, cookies, doughnuts, ice cream, cake and sugar-sweetened beverages, such as soda and sports drinks.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Deep-fried foods:</b> <br>These may promote inflammation and — when consumed in excess — disease. Examples include fried fish, french fries, onion rings, chicken strips and cheese curds.</li>
                            <li><br>In addition to limiting these, you may also want to avoid certain foods before going to the gym that can slow digestion and cause stomach upset during your workout.</li>
                            <li><b>These include:</b></li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>High-fat foods:</b> <br>High-fat meats, buttery foods and heavy sauces or creams.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>High-fiber foods:</b> <br>Beans and cruciferous vegetables like broccoli or cauliflower.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Carbonated beverages:</b> <br>Sparkling water or diet soda.</li>
                        </ul>
                    </div>
                    <div class="set1">
                        <p>Bodybiliding supliments</p>
                        <!-- <span class="fade-effect2"></span> -->
                        <ul>
                            <li><br>Many bodybuilders take dietary supplements, some of which are useful while others are not.</li>
                            <li><b>The best bodybuilding supplements include:</b></li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Whey protein:</b> <br>Consuming whey protein powder is an easy and convenient way to increase your protein intake.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Creatine:</b> <br>Creatine provides your muscles with the energy needed to perform an additional rep or two. While there are many brands of creatine, look for creatine monohydrate as it’s the most effective.</li>
                            <li><i class='bx bxs-caret-right-circle'></i><b>Caffeine:</b> <br>Caffeine decreases fatigue and allows you to work harder. It’s found in pre-workout supplements, coffee or tea.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="divider3"></div>
            <div class="rsd">
                <div class="note2">
                    <h1>Tips</h1>
                </div>
                <div class="con1">
                    <div class="set1">
                        <p>How many calories do you need?</p>
                        <!-- <span class="fade-effect2"></span> -->
                        <ul>
                            <li><i class='bx bxs-hand-right'></i>You need to weigh yourself at least three times a week and record what you eat using a <a href="../">calorie calculator.</a></li>
                            <li><i class='bx bxs-hand-right'></i>If your weight stays the same, the daily number of calories you eat is your <b>maintenance calories</b>.</li>
                            <li><i class='bx bxs-hand-right'></i>During your <b>bulking phase</b>, it’s recommended to increase your calorie intake by <b>15%</b>.</li>
                            <li><i class='bx bxs-hand-right'></i>When transitioning from <b>a bulking to a cutting phase</b>, you would instead decrease your maintenance calories by <b>15%</b>.</li>
                            <li><i class='bx bxs-hand-right'></i>As you gain weight in the bulking phase or lose weight in the cutting phase, you will need to <b>adjust your calorie intake at least monthly.</b></li>
                            <li><i class='bx bxs-hand-right'></i><b>Increase</b> your calories <b>as you gain weight</b> in the bulking phase and <b>decrease</b> your calories <b>as you lose weight</b> in the cutting phase <b>for continued progression</b>.</li>
                            <li><i class='bx bxs-hand-right'></i>During either phase, it’s recommended not to lose or gain more than <b>0.5–1%</b> of your <b>body weight per week</b>.</li>
                            <!-- <div class="rightdown"><img src="./media/calories.png" alt=""></div> -->
                        </ul>
                    </div>
                    <div class="set1">
                        <p>What is Macronutrient Ratio?</p>
                        <!-- <span class="fade-effect2"></span> -->
                        <ul>
                            <li><i class='bx bxs-hand-right'></i>Once you establish the number of calories you need, you can determine your macronutrient ratio.</li>
                            <li><i class='bx bxs-hand-right'></i>It is the <b>ratio between your protein, carbohydrate and fat intake.</b></li>
                            <li><i class='bx bxs-hand-right'></i>Unlike the difference in your calorie needs between the bulking and cutting phase, your <b>macronutrient ratio does not change</b>.</li>
                            <li><i class='bx bxs-hand-right'></i><b>Protein and carbs</b> contain <b>four calories per gram</b>, and <b>fat</b> contains <b>nine</b>.</li>
                            <b>
                                <li>It’s recommended that you get:</li>
                                <li>30–35% of your calories from protein</li>
                                <li>55–60% of your calories from carbs</li>
                                <li>15–20% of your calories from fat</li>
                            </b>
                            <!-- <div class="rightdown"><img src="./media/macronutrient.png" alt=""></div> -->
                        </ul>
                    </div>
                    <div class="rightbottom">
                        <div class="intxt">
                            <p><span class="tg">EXERCISE</span> is <span class="tg">KING</span>.<br><span class="tg">NUTRITION</span> is <span class="tg">QUEEN</span>.<br>Put them together and you've got a <span class="tg">KINGDOM...!</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vboderdivider"></div>
        </div>
        <div class="HdividerL"></div>

    </section>
    <?php include "includes/footer.php" ?>

    <script>
        // page refresh popup clear function
        $(document).ready(function() {
            window.location.href = "#";
        });
    </script>
</body>

</html>

<?php
unset($_SESSION['notification']);
?>