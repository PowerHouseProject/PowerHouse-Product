<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact_Us</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <section class="contact">
            <div class="container">
                    <div class="content">
                        <h2>Contact US</h2>
                        <p>
                            Contact us if you have any question or feedback about our POWER HOUSE Fitness academy. We would be happy to answer your questions.                          
                        </p>
                    </div>
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><a href="https://www.google.com/maps/place/Power+House+Gym/@7.2439452,80.1224739,
                            17z/data=!3m1!4b1!4m5!3m4!1s0x3ae31ddf621d5831:0xeaffb58665171584!8m2!3d7.2439452!4d80.1246626"
                            target="_blank" class="fas fa-map-marker-alt"></a></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>43 Vidyala Mawatha,<br>Mirigama</p>
                        </div>
                        </div>
                    <div class="box">
                        <div class="icon"><a href="tel:+94778234904" class="fas fa-phone"></a></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>0778234904</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><a href="mailto:thusithakekulawala21@gmail.com" class="fas fa-envelope"></a></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>thusithakekulawala21@gmail.com</p>
                        </div>
                    </div>
                    </div>
                </div>
                    <div class="contactform">
                        <form action="contact.php" method="POST">
                            <h2>Send message</h2>
                            <div class="inputbox">
                                <input type="text" name="name" required="required" placeholder="Your name">
                            </div>
                            <div class="inputbox">
                                <input type="text" name="email" required="required" placeholder="Your Email">
                            </div>
                            <div class="inputbox">
                                <textarea required="required" placeholder="Type your message" name="msg"></textarea>
                            </div>
                            <div>
                               <input type="submit" value="Send" name="contact_form">
                            </div>
                        </form>
                    </div>   
        </section>
    </body>

</html>