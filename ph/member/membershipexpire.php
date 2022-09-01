<?php
include "includes/check_expireduser.php"
?>

<?php
require "includes/db.php";
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>RENEW MEMBERSHIP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/membership.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <!-- expire payment window -->
    <div class="expire_payment">
        <div class="expire_img"><img src="./media/timeup.png" alt=""></div>
        <div class="situation">
            <p>Oops...! Looks like your membership has experied !</p>
        </div>
        <div class="opinion">
            <h4>Please <span class="hlight">RENEW</span> your <span class="hlight">MEMBERSHIP</span> and try again.</h4><img src="./media/okay.png" alt="">
        </div>

        <div class="note2">
            <h1>Renew Membership</h1>
        </div>

        <div class="selpack">
            <div class="bt"><button class="readmore_btn" id="mon1" data-value=2500>01 MONTH</button></div>
            <div class="bt"><button class="readmore_btn" id="mon3" data-value=7000>03 MONTH</button></div>
            <div class="bt"><button class="readmore_btn" id="mon6" data-value=10000>06 MONTH</button></div>
            <div class="bt"><button class="readmore_btn" id="mon12" data-value=20000>12 MONTH</button></div>
        </div>
        <div class="amount">
            <p><span id="mval">0</span>.00 LKR</p>
        </div>
        <div class="pay">
            <button class="hero_btn" onclick="expsubFunction()">GO FOR PAYMENT</button>
        </div>
        <div class="homeIcon">
            <a href="index.html" class=" fas fa-chevron-left"> </a>
            <a href="../index.php">&nbsp Back to home</a>
        </div>
    </div>

    <?php
    $query1 = "SELECT * FROM member WHERE username = '" . $username . "'";
    $result1 = mysqli_query($conn, $query1);
    $row1 = mysqli_fetch_assoc($result1);

    $member_id = $row1['member_id'];
    $f_name = $row1['f_name'];
    $l_name = $row1['l_name'];
    $p_no = $row1['phone_no'];
    $address = $row1['address'];

    $query3 = "SELECT email FROM users WHERE username = '" . $username . "'";
    $result3 = mysqli_query($conn, $query3);
    $row3 = mysqli_fetch_assoc($result3);

    $email = $row3['email'];
    ?>
    <!-- payment submiting form -->
    <div class="udetails">
        <div class="paralist" id="email"></div>
        <form id="amount_form" action="add-payment.php" method="POST">
            <input type="text" id="passamount" name="amount" value="">
        </form>
    </div>

    <?php include "includes/footer.php" ?>

    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

    <script>
        var cost = 0;
        var pack;
        $("#mon1").click(function() {
            cost = 2500;
            pack = "1 Month Membership";
            $("#mval").text(cost);
            $("#passamount").val(cost);
        });
        $("#mon3").click(function() {
            cost = 7000;
            pack = "3 Month Membership";
            $("#mval").text(cost);
            $("#passamount").val(cost);
        });
        $("#mon6").click(function() {
            cost = 10000;
            pack = "6 Month Membership";
            $("#mval").text(cost);
            $("#passamount").val(cost);
        });
        $("#mon12").click(function() {
            cost = 20000;
            pack = "12 Month Membership";
            $("#mval").text(cost);
            $("#passamount").val(cost);
        });

        function checkpackin() {
            var amountval = document.getElementById("mval").innerText;

            if (amountval === '0') {
                return false;
            } else {
                return true;
            }
        }

        payhere.onCompleted = function onCompleted(orderId) {
            document.getElementById("amount_form").submit();
            console.log("Payment completed");
            //Note: validate the payment and show success or failure page to the customer
        };

        // Called when user closes the payment without completing
        payhere.onDismissed = function onDismissed() {
            //Note: Prompt user to pay again or show an error page
            console.log("Payment dismissed");
        };

        // Called when error happens when initializing payment such as invalid parameters
        payhere.onError = function onError(error) {
            // Note: show an error page
            console.log("Error:" + error);
        };

        var payment;

        function calctotal() {

            var fname1 = "<?php echo "$f_name"; ?>";
            var lname1 = "<?php echo "$l_name"; ?>";
            var mnumber1 = "<?php echo "$p_no"; ?>";
            var address1 = "<?php echo "$address"; ?>";
            var email1 = "<?php echo "$email"; ?>";

            var amount1 = document.getElementById('mval').innerText;
            var membership1;

            if (amount1 == '2500') {
                membership1 = "1 Month Membership";
            } else if (amount1 == '7000') {
                membership1 = "3 Month Membership";
            } else if (amount1 == '10000') {
                membership1 = "6 Month Membership";
            } else if (amount1 == '20000') {
                membership1 = "12 Month Membership";
            }

            payment = {
                "sandbox": true,
                "merchant_id": "1218759", // Replace your Merchant ID
                "return_url": undefined, // Important
                "cancel_url": undefined, // Important
                "notify_url": "http://sample.com/notify",
                "order_id": "ItemNo12345",
                "items": membership1,
                "amount": amount1,
                "currency": "LKR",
                "first_name": fname1,
                "last_name": lname1,
                "email": email,
                "phone": mnumber1,
                "address": address1,
                "city": "Mirigama",
                "country": "Sri Lanka",
            };

        }

        function expsubFunction() {
            var result = checkpackin();

            if (result == true) {
                calctotal();
                payhere.startPayment(payment);
            }
        }
    </script>

</body>



</html>