<?php require "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/trainer_payment_from.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>
        <div class="main_class">

            <form action="includes/trainer_payment_submit.php" class="form" id="signup_form" method="POST">

                <div class="separator1">

                    <span class="hr-text">TRAINER PAYMENT </span>

                </div><br>


                <div class="form__div" id="main_address1">
                    <input type="text" class="form__input" id="address1" name="username" placeholder=" " value=<?= $_GET["username"] ?> readonly>
                    <label for="" class="form__label">Username</label>

                </div>
                <!-- <ul id="results">
                    <li><a href="#">India</a>
                    <li><a href="#">US</a>
                    <li><a href="#">UK</a>
                    <li><a href="#">Australia</a>
                </ul> -->
                <script type="text/javascript">
                    var results = document.getElementById("results");
                    var search = document.getElementById("address1");

                    function getSearchResults() {
                        var searchVal = search.value;

                        if (searchVal.length < 1) {
                            results.style.display = 'none';
                            return;
                        }

                        console.log('searchVal : ' + searchVal);
                        var xhr = new XMLHttpRequest();
                        var url = 'searchresults.php?search=' + searchVal;
                        // open function
                        xhr.open('GET', url, true);

                        xhr.onreadystatechange = function() {
                            if (xhr.readyState == 4 && xhr.status == 200) {
                                var text = xhr.responseText;
                                //console.log('response from searchresults.php : ' + xhr.responseText);
                                results.innerHTML = text;
                                results.style.display = 'block';
                            }
                        }

                        xhr.send();
                    }

                    address1.addEventListener("input", getSearchResults);

                    // $("#results li").click(function() {
                    //     var a = $(this).attr("value");
                    //     alert(a);
                    // });
                </script>


                <div class="form__div" id="main_address1">
                    <input type="text" class="form__input" id="address2" placeholder=" " name="email" value=<?= $_GET["email"] ?> readonly>
                    <label for="" class="form__label">Email</label>
                </div>

                <script>
                    $('#address1').on('keyup', function() {
                        var given_name = $(this).val();
                        //alert(given_name);
                        $.ajax({
                            url: 'find-email.php',
                            type: 'POST',
                            data: {
                                "myData": given_name
                            }
                        }).done(function(data) {
                            $('#address2').val(data);
                        });
                    })
                </script>


                <div class="form__div" id="main_address1">
                    <input type="text" class="form__input" id="address2" placeholder=" " name="amount" value=<?= $_GET["payment_amount"] ?> readonly>
                    <label for="" class="form__label">Amount</label>
                </div>




                <script>
                    $('#address1').on('keyup', function() {
                        var given_name = $(this).val();
                        //alert(given_name);
                        $.ajax({
                            url: 'find-email.php',
                            type: 'POST',
                            data: {
                                "myData": given_name
                            }
                        }).done(function(data) {
                            $('#address2').val(data);
                        });
                    })
                </script>

                <div class="buttondiv">
                    <input type="submit" class="form__button" value="PAY" name="form_submit" id="form_submit1">
                </div>

            </form>
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


    var selectedTrainer;
    var selectedMembership;
    var cost = 0;
    var temp1 = 0;
    var temp2 = 0;
    var button = $(".form__button");

    $(document).ready(function() {
        $("select#trainer").change(function() {
            temp1 = selectedTrainer;
            selectedTrainer = $(this).find('option:selected').data('trainer');
            selectedTrainer = parseInt(selectedTrainer, 10);
            if (temp1 > 0) {
                cost = cost - temp1;
                cost = cost + selectedTrainer;
            } else {
                cost = cost + selectedTrainer;
            }



            button.val("PAY" + " " + cost + "/=");

        });

        $("#amount_pass").val(cost);


    });

    $(document).ready(function() {
        $("select#membership1").change(function() {
            selectedMembership = $(this).children("option:selected").val();
            selectedMembership = parseInt(selectedMembership, 10);

            if (temp2 > 0) {
                cost = cost - temp2;
                cost = cost + selectedMembership;
            } else {
                cost = cost + selectedMembership;
            }
            temp2 = selectedMembership;

            button.val("PAY" + " " + cost + "/=");

            $("#amount_pass").val(cost);


        });

    });
    $(document).ready(function() {
        $("#pay_form").submit(function(e) {
            alert(cost);
            if (cost === 0) {
                e.preventDefault(e);
            }
        });
    });
</script>
<script type="text/javascript" src="./../signup/signup.js"></script>
<script src="js/justselect.min.js"></script>


<script>
    document.getElementById("amountId").addEventListener("onClick", myFunction);

    function myFunction() {

        var x = document.getElementById("form_submit1");
        x.value = getElementById("amountId").value;

    }
</script>



</body>

</html>