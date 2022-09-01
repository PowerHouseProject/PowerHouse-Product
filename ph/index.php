<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Power House Fitness - Champions Make No Execuses.</title>


    <link rel="stylesheet" href="css/header_hero.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="css/bmi-calc.css">
    <link rel="stylesheet" href="css/calori-calc.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/testimonials.css">
    <link rel="stylesheet" href="css/popup2.css">
    <link rel="stylesheet" href="css/bmr-calc.css">
    <link rel="stylesheet" href="css/popup3.css">
    <link rel="stylesheet" href="css/bfc-calc.css">
    <link rel="stylesheet" href="css/popup4.css">


    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body>


    <!-- header ////////////////////////////////////////////////////////// -->

    <div class="header">
        <div class="left">

            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li value="0"><a href="#/" id="myBtn" class="dropdown">Fitness Calculators</a>
                    <div class="dropdown-menu" id="down" value="se">
                        <div class="dropdown-links" id="xc">
                            <a href="#/" class="link" id=myBtn1>BMI Calculator</a>
                            <a href="#/" class="link" id="myBtn2">Calorie Calculator</a>
                            <a href="#/" class="link" id=myBtn3>BMR Calculator</a>
                            <a href="#/" class="link" id="myBtn4">Body Fat Calculator</a>

                        </div>
                    </div>
                </li>
                <li><a href="#testim">Testimonials</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="contact/index.php">Contact</a></li>
            </ul>


        </div>

        <div class="center">
            <h1>POWER HOUSE</h1><br>
            <h2>FITNESS ACADEMY</h2>
        </div>
        <div class="rside">

            <!-- <div class="dropdown"> -->
                <!-- <button class="header_btn2" onclick="location.href='login.html'">LOGIN</button> -->
                <!-- <div id="myDropdown" class="dropdown-content">

                    <a href="./login/member/index.php">MEMBER</a>
                    <a href="./login/trainer/index.php">TRAINER</a>
                </div>
            </div> -->

            <!-- <button class="header_btn2" onclick="location.href='login.html'">LOGIN</button> -->
            <button class="header_btn2" onclick="location.href='./login/index.php'">LOGIN</button>
            <button class="header_btn" onclick="location.href='./signup/index.php'">SIGN UP</button>

        </div>

    </div>

    <div class="showcase">
        <div class="video-container">
            <video src="media/video.mp4" autoplay muted loop></video>
        </div>
        <div class="content">
            <h1>Champions make no excuses.</h1>
            <p>Power House Fitness Academy is a top of the line fitness facility serving the city of Mirigama and
                surrounding areas including Pasyala, Giriulla, Nittambuwa and more.
            <p>
                <button class="hero_btn" onclick="location.href='./signup/index.php'">JOIN THE ACADEMY</button>
        </div>
    </div>

    <div class="media">
        <audio id="myAudio" src="media/music.mp3" preload="auto">
        </audio>
        <a onClick="togglePlay()"><i class="fas fa-headphones-alt"></i> <span class='label-menu'> Background Music
            </span></a>

    </div>


    <!-- CALC ////////////////////////////////////////////////////////// -->

    <?php include "includes/bmi-calc.php" ?>
    <?php include "includes/clori-calc.php" ?>
    <?php include "includes/bmr-calc.php" ?>
    <?php include "includes/bfc-calc.php" ?>
    <script>
        $("#myBtn1").click(function() {
            $("#myModal").fadeIn();
        });
        $("#myBtn2").click(function() {
            $("#myModal2").fadeIn();
        });
        $("#myBtn3").click(function() {
            $("#myModal3").fadeIn();
        });
        $("#myBtn4").click(function() {
            $("#myModal4").fadeIn();
        });
    </script>


    <!-- ABOUT SECTION  ////////////////////////////////////////////////////////// -->

    <div class="section" id="about">
        <div class="container">
            <div class="content-section">
                <div class="about_title">
                    <h1>WE’RE WAY MORE THAN A GYM
                    </h1>
                </div>
                <div class="about_content">
                    <!-- <h3>
                        WE’RE WAY MORE THAN A GYM
                    </h3> -->
                    <p>
                        You’ve never experienced a fitness facility like Next Level! If you want to become a better
                        version of yourself, you need our workouts, our meal plans, and our love for holding each
                        other accountable as a community.<span id="dots">...</span>

                        <span id="more">Our
                            trainers specialize in teaching individuals at all stages of the health and fitness
                            spectrum, including individuals at the very beginning stages of transforming
                            themselves! Once you start, you won’t want to stop! Find the promotion that suits you,
                            meet with one of
                            our amazing trainers, and get started on your body transformation! </span>

                    </p>


                    <button class="readmore_btn" id="readMore" onclick="readFunction()">Read More</button>
                </div>
                <div class=" stat" id="statid">
                    <div class="stat_left">
                        <img src="media/icons/shoe.svg" alt="Kiwi standing on oval">
                        <h5>Our priority is to help you become the best version of YOU </h5>
                        <h1 id="count1"></h1>
                        <p>Members</p>
                    </div>
                    <div class="stat_center">
                        <img src="media/icons/abs.svg" alt="Kiwi standing on oval">
                        <h5>Our trainers are passionate, friendly and experienced </h5>
                        <h1 id="count2"></h1>
                        <p>Trainers</p>
                    </div>
                    <div class="stat_right">
                        <h2 class="third">PH</h2>
                        <h5>We are in the business of helping you achieve your goals</h5>
                        <h1 id="count3"></h1>
                        <p>Years Of Experience</p>
                    </div>
                </div>
                <!-- <div class="social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </div> -->
            </div>
        </div>

        <div calss="divider">
            <span class="fade-effect1"></span>
        </div>


        <div class="con1">
            <div class="im" id="im1">
                <img src="media/lol.png" alt="i1">
            </div>
            <div class="ph" id="ph1" data-aos="fade-up" data-aos-duration="1000">
                <h3>
                    ALL IN ONE FITNESS MANAGEMENT SYSTEM.
                </h3>

                <p>
                    Power House Fitness Academy Management System provides you all the necessary tools to manage, track
                    and analyze your progress online. The system allows you to book your trainer, check open/close
                    times, manage your schedule and many MORE!
                </p>
                <div class="about_button"><button class="about_btn" onclick="location.href='./signup/index.php'">SIGN
                        UP</button></div>


            </div>
        </div>

        <div calss="divider">
            <span class="fade-effect1"></span>
        </div>

        <div class="con2">
            <div class="ph" id="ph2" data-aos="fade-up" data-aos-duration="1000">

                <h3>
                    TRACK. ANALYZE. PLAN.
                </h3>

                <p>

                    The system provides visual data representations of your progress such as BMI graph, weight graph and
                    more. Also you can update your schedule as you are progressing.

                </p>
                <!-- <div class="about_button"><a href="" id="myBtn"><button class="about_btn">SIGN
                            UP</button></a></div> -->

            </div>
            <div class="im" id="im2">
                <canvas id="canvas"></canvas>
            </div>
        </div>

        <div calss="divider">
            <span class="fade-effect1"> </span>
        </div>

        <div class="con1" id="sec3">
            <div class="im" id="im3">
                <img src="media/payhere.png" alt="PayHere" />
            </div>
            <div class="ph" id="ph3" data-aos="fade-up" data-aos-duration="1000">
                <h3>
                    <i>PAY SECURELY, ONLINE.</i>
                </h3>

                <p>
                    Now you can pay online securely with our system using the PayHere payment gateway. You can renew
                    your membership through the system as well.
                </p>
                <div class="about_button"><button class="about_btn2" id="myBtn" onclick="window.location.href = '#faq'">VIEW PRICING</button>
                </div>
            </div>
        </div>

        <div calss="divider">
            <span class="fade-effect1"> </span>
        </div>

        <div class="con2">
            <div class="ph" id="ph2" data-aos="fade-up" data-aos-duration="1000">

                <h3>
                    OUR TRAINERS GOT YOU!
                </h3>

                <p>
                    Our trainers' programs are focused on building speed, strength, and stamina, which we believe is
                    effective for long term overall health and wellness. Our priority is to help you become the best
                    version of YOU – fitter, healthier, and happier!
                </p>
                <div class="about_button"><button class="about_btn2" onclick="window.open('http://localhost/Group_CS21/root/trainers.php', '_blank');">VIEW TRAINERS</button></div>
            </div>
            <div class="im" id="im4">
                <img src="media/trainer2.png" alt="i1">
                <div calss="divider">
                    <span class="fade-effect1"> </span>
                </div>
            </div>
        </div>

    </div>


    <!-- testimonial ///////////////////////////////////////////////////////////////////// -->

    <section class="testim" id="testim">

        <div class="wrap">
            <div class="testim_head">
                <h1>SATISFACTION THAT SPEAKS</h1>
            </div>

            <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
            <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>

            <div class="trav">
                <ul class="dots" id="testim-dots">
                    <li class="dot active"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                    <li class="dot"></li>
                </ul>
            </div>

            <div class="cont" id="testim-content">

                <div>
                    <!-- <div class="img"><img src="media/testi/1.png"></div> -->
                    <h2>Ovin D.</h2>
                    <p>
                        ⭐⭐⭐⭐⭐<br> A real sense of community, positivity, and encouragement.

                        After only my second week everyone I’ve met has made me feel like family! Knowledgeable and
                        extremely helpful coaches have encouraged and kicked my butt in
                    </p>
                </div>

                <div>
                    <!-- <div class="img"><img src="media/testi/2.png"></div> -->
                    <h2>Natasha N.</h2>
                    <p>
                        ⭐⭐⭐⭐⭐<br>I started with Fitness Within a couple of months ago. Best decision ever.
                        Great workouts in both the small group and bootcamps. The staff is great and they really know
                        their stuff.
                        It is a great facility, clean and well equipped and the people are the best!!
                    </p>
                </div>

                <div>
                    <!-- <div class="img"><img src="media/testi/p3.png"></div> -->
                    <h2>Nuwan N.</h2>
                    <p>
                        ⭐⭐⭐⭐<br>I truly love the boot camp workouts at fitness within. I’ve been coming to fitness
                        within
                        for about a year now and the workouts are always different and challenging. You will sweat and
                        you will also feel
                        amazing after your workout. I’m hooked.
                    </p>
                </div>

                <div>
                    <!-- <div class="img"><img src="media/testi/profile.png"></div> -->
                    <h2>Pasindu D.</h2>
                    <p>
                        ⭐⭐⭐⭐⭐<br>I have been coming here for 5 months now and everyday I love it more, I do small group
                        and I love all of my trainers. They are always changing things up and work muscles I didn’t even
                        know I had..
                        It’s like a family, you really get to know the people training with you also.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div calss="divider">
        <span class="fade-effect1"> </span>
    </div>



    <!-- faq ///////////////////////////////////////////////////////////////////////////// -->


    <div class="box" id="faq">
        <h1 class="faq_heading">FAQs</h1>
        <div class="faqs">
            <details>
                <summary>Where we are located?</summary>
                <p class="text">We are located at 33, Walawwatta, Pasyala - Giriulla Rd, Mirigama <a href="https://www.google.com/maps/place/Power+House+Gym/@7.2439452,80.1224739,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae31ddf621d5831:0xeaffb58665171584!8m2!3d7.2439452!4d80.1246626" target="_blank">Get
                        Directions.</a></p>
            </details>
            <details>
                <summary>When the academy is open?</summary>
                <p class="text">We are open 5 A.M to 10 P.M on all days. Closed on poya days.</p>
            </details>
            <details>
                <summary>What is the memebership price?</summary>
                <p class="text">We have 4 types of membership plans. One month : 2500/= , Three months : 7000/= , Six months : 13500/= and One year : 20000/=. If you are taking a trainer, trainer fees may also be added to
                    the membership. See trainer prcing <a href="http://localhost/Group_CS21/root/trainers.php" target="_blank">Here.</a> </p>
            </details>
            <details>
                <summary>Do I need to select a trainer to join tha academy?</summary>
                <p class="text">No. You can join the academy without a trainer if you don't need one.</p>
            </details>
            <details>
                <summary>How do I select a trainer</summary>
                <p class="text">You can select your trainer when signing up. Before that you can see all trainer
                    details
                    <a href="http://localhost/Group_CS21/root/trainers.php" target="_blank">Here.</a>
                </p>
            </details>
            <details>
                <summary>Didn't find the answer to your question?</summary>
                <p class="text">No worries! We're here to help you. Simply <a href="contact/index.php" target="_blank">Contact us</a>
                    and we will get back to you as soon as possible.</p>
            </details>
        </div>
    </div>



    <!-- footer ///////////////////////////////////////////////////////////////////// -->

    <div class="footer_container">
        <div class="sec-aboutus">
            <h1>POWER HOUSE</h1>
            <h2>FITNESS ACADEMY</h2>
            <p>
                We know walking through the door is the hardest part. You take the first step and we’ll meet you where
                you are.
            </p>
            <div class="icon">
                <a href="https://www.facebook.com/pages/Powerhouse-Gym-Mirigama/265815320243223" class="fa fa-facebook"></a>
                <a href="" class="fa fa-instagram"></a>
                <a href="+94785619959" class="fa fa-whatsapp"></a>

            </div>
        </div>
        <div class="quickLinks">
            <h2>Quick Links</h2>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="http://localhost/Group_CS21/root/includes/legal/privacy.pdf" target="_blank">Privacy Policy</a></li>
                <!-- <li><a href="#">Help</a></li> -->
                <li><a href="http://localhost/Group_CS21/root/includes/legal/terms.pdf" target="_blank">Terms & Conditions</a></li>
                <li><a href="contact/index.php">Contact</a></li>
                <li><a href="#" class="back"><i class="fas fa-chevron-up"></i>&nbspBack to top</a></li>
            </ul>
        </div>
        <div class="contact">
            <h2>Contact Info</h2>
            <ul class="info">
                <li>
                    <a href="tel:+94778234904">Text: +94 77 823 4904</a>
                </li>
                <li>
                    <a href="mailto:thusithakekulawala21@gmail.com">Mail: thusithakekulawala21@gmail.com</a>
                </li>
                <li>

                    <a href="https://www.google.com/maps/place/Power+House+Gym/@7.2439452,80.1224739,
                        17z/data=!3m1!4b1!4m5!3m4!1s0x3ae31ddf621d5831:0xeaffb58665171584!8m2!3d7.2439452!4d80.1246626" target="_blank">Address: 43 Vidyala Mawatha,<br> Mirigama,<br> Sri Lanka.</a>
                </li>


            </ul>
        </div>
    </div>


    <div class="copyrightText">

        <p><span class="cp">&nbsp;POWER&nbsp; HOUSE&nbsp; FITNESS&nbsp; ALL RIGHTS RESERVED. </span></p>
    </div>

    <!-- //FOOTER/////////////////////////////////////////////////////// -->




    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/calori-calc.js"></script>
    <script src="js/bmr-calc.js"></script>
    <script src="js/bfc-calc.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
        // Chart.defaults.global.defaultFontFamily = "Rubik";

        var chartColors = {
            red: 'rgb(255, 99, 132)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            green: 'rgb(75, 192, 192)',
            blue: 'rgb(54, 162, 235)',
            purple: 'rgb(153, 102, 255)',
            grey: 'rgb(231,233,237)'
        };

        var randomScalingFactor = function() {
            return (Math.random() > 0.5 ? 2.0 : 1.0) * Math.round(Math.random() * 100);
        }
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var config = {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: "white",
                    borderColor: "#86ff71",
                    data: [40, 38, 33, 30, 29, 25, 22],
                    fill: false,
                }, ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                title: {
                    text: 'BMI Analysis',
                    fontSize: 18,
                    fontStyle: '100',
                    fontColor: 'rgba(230, 230, 230, 0.67)',
                    padding: 10,
                    display: true
                },


                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: false,
                        },
                        gridLines: {
                            display: true,
                            zeroLineColor: 'green',
                            color: "#e6e6e644",
                            lineWidth: 1
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            beginAtZero: false
                        },
                        gridLines: {
                            display: true,
                            color: "#e6e6e644",
                            lineWidth: 1
                        }
                    }]
                }
            }
        };


        var ctx = document.getElementById("canvas").getContext("2d");
        window.myLine = new Chart(ctx, config);
    </script>


</body>

</html>