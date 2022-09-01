<!-- <html>

<body>
    <form method="post" action="https://sandbox.payhere.lk/pay/checkout">
        <input type="hidden" name="merchant_id" value="1218759"> 
        <input type="hidden" name="return_url" value="http://localhost/Group_CS21/root/">
        <input type="hidden" name="cancel_url" value="http://localhost/Group_CS21/root/">
        <input type="hidden" name="notify_url" value="http://localhost/Group_CS21/root/">
        <br><br>Item Details<br>
        <input type="text" name="order_id" value="ItemNo12345">
        <input type="text" name="items" value="Door bell wireless"><br>
        <input type="text" name="currency" value="LKR">
        <input type="text" name="amount" value="1000">
        <br><br>Customer Details<br>
        <input type="text" name="first_name" value="Saman">
        <input type="text" name="last_name" value="Perera"><br>
        <input type="text" name="email" value="samanp@gmail.com">
        <input type="text" name="phone" value="0771234567"><br>
        <input type="text" name="address" value="No.1, Galle Road">
        <input type="text" name="city" value="Colombo">
        <input type="hidden" name="country" value="Sri Lanka"><br><br>
        <input type="submit" value="Buy Now">
    </form>
</body>

</html> -->

<!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<script src="jquery.redirect.js"></script>
<script>
    $(document).ready(function() redirect("https://sandbox.payhere.lk/pay/checkout", {
                    merchant_id: '1218759',
                    return_url: 'http://localhost/Group_CS21/root/',
                    cancel_url: 'http://localhost/Group_CS21/root/',
                    notify_url: 'http://localhost/Group_CS21/root/',
                    order_id: 'ItemNo12345',
                    items: 'Door bell wireless',
                    currency: 'LKR',
                    amount: '1000',
                    first_name: 'Bimsara',
                    last_name: 'Kulasekara',
                    email: 'kulasekarakmbs@gmail.com',
                    phone: '0785619959',
                    address: '11, Mirigama',
                    city: 'Mirigama',
                    country: 'Sri Lanka'

                },

                "POST", "_blank");
</script> -->

<script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
<button type="submit" id="payhere-payment">PayHere Pay</button>
<script>
    // Called when user completed the payment. It can be a successful payment or failure
    payhere.onCompleted = function onCompleted(orderId) {
        console.log("Payment completed. OrderID:" + orderId);
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

    var cc = 40

    var bb = cc.toString();

    // Put the payment variables here
    var payment = {
        "sandbox": true,
        "merchant_id": "1218759", // Replace your Merchant ID
        "return_url": undefined, // Important
        "cancel_url": undefined, // Important
        "notify_url": "http://sample.com/notify",
        "order_id": "ItemNo12345",
        "items": "Door bell wireles",
        "amount": bb,
        "currency": "LKR",
        "first_name": "Saman",
        "last_name": "Perera",
        "email": "samanp@gmail.com",
        "phone": "0771234567",
        "address": "No.1, Galle Road",
        "city": "Colombo",
        "country": "Sri Lanka",
        "delivery_address": "No. 46, Galle road, Kalutara South",
        "delivery_city": "Kalutara",
        "delivery_country": "Sri Lanka",
        "custom_1": "",
        "custom_2": ""
    };

    // Show the payhere.js popup, when "PayHere Pay" is clicked
    document.getElementById('payhere-payment').onclick = function(e) {
        payhere.startPayment(payment);
    };

    var vell = 10;

    let username = 'Max Brown';

    // Set a Cookie
    function setCookie(cName, cValue, expDays) {
        let date = new Date();
        date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
    }

    // Apply setCookie
    setCookie('username', username, 30);
    // document.cookie = ''
    // profile_viewer_uid ' = vell;
</script>

<?php


$profile_viewer_uid = $_COOKIE['username'];
echo $profile_viewer_uid;



?>