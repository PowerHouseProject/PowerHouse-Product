<?php include "includes/check_login.php" ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/inventory.css">
    <link href="css/justselect.css" rel="stylesheet" />

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/jquery-confirm.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>






    <style>
        .jconfirm.jconfirm-my-theme .jconfirm-bg {
            background-color: rgba(0, 0, 0, 0.2);

        }

        .jconfirm.jconfirm-my-theme .jconfirm-box {
            background-color: #121317;
            padding-top: 20px !important;
            padding-left: 20px !important;
            padding-right: 20px !important;
            padding-bottom: 20px !important;
            border-radius: 5px !important;
            /* border: #86ff71 3px solid !important; */

        }

        .jconfirm.jconfirm-my-theme .jconfirm-closeIcon {
            color: white !important;
        }

        .jconfirm.jconfirm-my-theme .jconfirm-title {
            color: #86ff71;
            font-family: "Azonix" !important;
        }

        .jconfirm.jconfirm-my-theme .jconfirm-content {
            color: #ffffff;
            font-family: "Rubik" !important;
        }

        /* .jconfirm.jconfirm-my-theme .jconfirm-buttons {
            background-color: #86ff71;
            font-family: "Rubik" !important;
            border-radius: 50px;
            color: black;
        } */

        .hi {
            background-color: transparent;
            font-family: "Azonix" !important;
            border-radius: 50px !important;
            color: white;
            border: #89898B 2px solid !important;
        }

        .hi :hover {

            border: #86ff71 2px solid !important;
            /* transition: 0.5s; */

        }

        .jconfirm.jconfirm-my-theme .jconfirm-box.loading {}

        .jconfirm.jconfirm-my-theme .jconfirm-box.loading:before {}

        .jconfirm.jconfirm-my-theme .jconfirm-box.loading:after {}

        .jconfirm.jconfirm-my-theme .jconfirm-box .jconfirm-closeIcon {}

        .jconfirm.jconfirm-my-theme .jconfirm-box .jconfirm-title-c {}

        .jconfirm.jconfirm-my-theme .jconfirm-box .jconfirm-content-pane {}

        .jconfirm.jconfirm-my-theme .jconfirm-box .jconfirm-content {}

        .jconfirm.jconfirm-my-theme .jconfirm-box .jconfirm-buttons {}

        .jconfirm.jconfirm-my-theme .jconfirm-box .jconfirm-buttons button {}
    </style>

</head>

<body>
    <?php include "includes/sidebar.php" ?>
    <section class="home-section">

        <?php include "includes/header.php" ?>
        <script src="js/jquery-confirm.min.js"></script>


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
            <span class="msg" id="hola"></span>
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
            <div class="member-stats">

                <?php

                //include 'includes/db.php';
                $count_sql1 = "SELECT SUM(quantity) FROM inventory";
                $count_result1 = mysqli_query($conn, $count_sql1);
                $count_row1 = mysqli_fetch_array($count_result1);

                $count_total1 = $count_row1[0];

                $count_sql2 = "SELECT SUM(quantity) FROM inventory WHERE name LIKE 'Dumbbell%'";
                $count_result2 = mysqli_query($conn, $count_sql2);
                $count_row2 = mysqli_fetch_array($count_result2);
                $count_total2 = $count_row2[0];

                $count_sql3 = "SELECT SUM(quantity) FROM inventory WHERE name LIKE 'Weight%'";
                $count_result3 = mysqli_query($conn, $count_sql3);
                $count_row3 = mysqli_fetch_array($count_result3);
                $count_total3 = $count_row3[0];
                //$new_trainers = 0;
                //$count_sql2 = "SELECT DATEDIFF(NOW(),joined_date) FROM trainer";
                // $count_result2 = mysqli_query($conn, $count_sql2);

                // $count_sql2 = "SELECT * FROM trainer";
                // $count_result2 = mysqli_query($conn, $count_sql2);
                // $new_trainers = 0;
                // $count_sql2 = "SELECT DATEDIFF(NOW(),joined_date) FROM trainer";
                // $count_result2 = mysqli_query($conn, $count_sql2);
                // // $new_members = 0;
                // // $time = strtotime('10/16/2003');

                // // $newformat = date('Y-m-d', $time);
                // while ($count_row2 = mysqli_fetch_array($count_result2)) {
                // }

                ?>
                <div class="one">
                    <p class="value"><?php echo $count_total1 ?></p>
                    <p class="name">Total Equipments</p>
                </div>

                <div class="two">
                    <p class="value"><?php echo $count_total2 ?></p>
                    <p class="name">Total Dumbbells</p>
                </div>

                <div class="three">
                    <p class="value"><?php echo $count_total3 ?></p>
                    <p class="name">Total Plates</p>
                </div>

                <div class="four">
                    <p class="value">15</p>
                    <p class="name">Total Barbells</p>
                </div>

            </div>
            <div class="search-bar">

                <!-- <div class="filter1">
                    <select name="Membership" id="" class="justselect">
                        <option selected="selected">Membership</option>
                        <option>Membership Valid</option>
                        <option>Membership Expired</option>
                    </select>
                </div>

                <div class="filter2">
                    <select name="Membership" id="" class="justselect">
                        <option selected="selected">Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div> -->



                <div class="add_button"><button class="add_btn" onclick="location.href='add-equipment.php'">Add Equipment</button></div>

            </div>
            <div class="member-list">
                <table class="table table-hover">

                    <thead>
                        <tr>

                            <th>Equipment</th>

                            <th>Details</th>
                            <th>Count</th>
                            <!-- <th>Address</th> -->

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="output">
                        <?php

                        // require "includes/db.php";
                        $sql = "SELECT * FROM inventory";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>




                                <tr>

                                    <td><img src="media/inventory/<?php echo $row['image'] ?>"> </td>
                                    <td>
                                        <?php echo " " . $row['name'] ?>
                                    </td>
                                    <td>

                                        <?php echo " " . $row['quantity'] ?>

                                    </td>


                                    <td>
                                        <div class="row-action">
                                            <div class="about_button"><button class="about_btn btnm" id="<?php echo $row['inventory_id'] ?>">Add 1</button></div>
                                            <? $iid = $row['inventory_id'];
                                            $myVar = "add-inventory.php?inventory_id=" . $iid . ""; ?>




                                            <div class="about_button"><button class="about_btn btnmm" id="<?php echo $row['inventory_id'] ?>">Remove 1</button></div>

                                            <div class="about_button"><button class="about_btnn btnmmm" id="<?php echo $row['inventory_id'] ?>">Remove Equipment</button></div>

                                        </div>
                                    </td>



                                </tr>



                        <?php }
                        } ?>
                        <script>
                            // var $btn = $('.btn-calendar').pignoseCalendar({
                            //     // apply: onApplyHandler,
                            //     modal: true, // It means modal will be showed when you click the target button.
                            //     buttons: true
                            // });



                            // $(document).ready(function(e) {
                            //     // var btn = $(".btnm");
                            //     // var clickHandler = btn[0].onclick;

                            //     // for (i = 0; i < 7; i++) {
                            //     //     btn[i].onclick = false;


                            // }
                            // var clickHandler = btn[1].onclick;
                            // btn[1].onclick = false;
                            $('.btnm').on('click', function() {
                                //var clickHandler = btn[i].onclick;
                                // event.preventDefault();
                                //event.stopPropagation();
                                var id = $(this).attr('id'); // $(this) refers to button that was clicked
                                //alert(id);
                                $.confirm({
                                    //title: 'Prompt!',
                                    content: 'Are you sure you want to incarese the quantity by 1?<br><br>' +
                                        '<form action="" class="formName">' +
                                        '<div class="form-group">' +
                                        '<label>Enter PIN</label><br><br>' +
                                        '<input type="text" placeholder="PIN" class="name form-control" required />' +
                                        '</div>' +
                                        '</form>',
                                    title: 'Confirm',
                                    animateFromElement: false,
                                    animation: 'RotateX',
                                    closeAnimation: 'RotateX',
                                    //content: 'Are you sure you want to remove the equipment? This action cannot be undone!',
                                    boxWidth: '30%',
                                    theme: 'my-theme',
                                    useBootstrap: false,
                                    buttons: {
                                        formSubmit: {
                                            text: 'Confirm',
                                            btnClass: 'hi',
                                            action: function() {
                                                var name = this.$content.find('.name').val();
                                                if (!name) {
                                                    // $.alert('provide a valid PIN');
                                                    return false;
                                                }
                                                $.ajax({
                                                    url: "add-inventory.php",
                                                    type: "POST",
                                                    data: {
                                                        'inventory_id': id,
                                                        'pin': name,
                                                        'ajax': true
                                                    },
                                                    success: function(data) {
                                                        document.getElementById("hola").innerHTML = data;
                                                        nn();


                                                        // You will get response from your PHP page (what you echo or print)
                                                    },
                                                    error: function(jqXHR, textStatus, errorThrown) {
                                                        console.log(textStatus, errorThrown);
                                                    }
                                                });
                                            }
                                        },
                                        cancel: {
                                            btnClass: 'hi',
                                            function() {
                                                //close
                                            },
                                        }
                                    },
                                    onContentReady: function() {
                                        // bind to events
                                        var jc = this;
                                        this.$content.find('form').on('submit', function(e) {
                                            // if the user submits the form by pressing enter in the field.
                                            e.preventDefault();
                                            jc.$$formSubmit.trigger('click'); // reference the button and click it
                                        });
                                    }
                                });
                            });
                            // });
                            $(document).ajaxStop(function() {
                                //window.setTimeout(nn, 3000);
                                //nn();

                                $(document).ready(function() {
                                    setTimeout(function() {
                                        //alert('Reloading Page');
                                        location.reload(true);
                                    }, 1000);
                                });


                            });
                        </script>
                        <script>
                            // var $btn = $('.btn-calendar').pignoseCalendar({
                            //     // apply: onApplyHandler,
                            //     modal: true, // It means modal will be showed when you click the target button.
                            //     buttons: true
                            // });



                            // $(document).ready(function(e) {
                            //     // var btn = $(".btnm");
                            //     // var clickHandler = btn[0].onclick;

                            //     // for (i = 0; i < 7; i++) {
                            //     //     btn[i].onclick = false;


                            // }
                            // var clickHandler = btn[1].onclick;
                            // btn[1].onclick = false;
                            $('.btnmm').on('click', function() {
                                //var clickHandler = btn[i].onclick;
                                // event.preventDefault();
                                //event.stopPropagation();
                                var id = $(this).attr('id'); // $(this) refers to button that was clicked
                                //alert(id);
                                $.confirm({
                                    //title: 'Prompt!',
                                    content: 'Are you sure you want to decrease the quantity by 1?<br><br>' +
                                        '<form action="" class="formName">' +
                                        '<div class="form-group">' +
                                        '<label>Enter PIN</label><br><br>' +
                                        '<input type="text" placeholder="PIN" class="name form-control" required />' +
                                        '</div>' +
                                        '</form>',
                                    title: 'Confirm',
                                    animateFromElement: false,
                                    animation: 'RotateX',
                                    closeAnimation: 'RotateX',
                                    //content: 'Are you sure you want to remove the equipment? This action cannot be undone!',
                                    boxWidth: '30%',
                                    theme: 'my-theme',
                                    useBootstrap: false,
                                    buttons: {
                                        formSubmit: {
                                            text: 'Confirm',
                                            btnClass: 'hi',
                                            action: function() {
                                                var name = this.$content.find('.name').val();
                                                if (!name) {
                                                    // $.alert('provide a valid PIN');
                                                    return false;
                                                }
                                                $.ajax({
                                                    url: "remove-inventory.php",
                                                    type: "POST",
                                                    data: {
                                                        'inventory_id': id,
                                                        'pin': name,
                                                        'ajax': true
                                                    },
                                                    success: function(data) {
                                                        document.getElementById("hola").innerHTML = data;
                                                        nn();


                                                        // You will get response from your PHP page (what you echo or print)
                                                    },
                                                    error: function(jqXHR, textStatus, errorThrown) {
                                                        console.log(textStatus, errorThrown);
                                                    }
                                                });
                                            }
                                        },
                                        cancel: {
                                            btnClass: 'hi',
                                            function() {
                                                //close
                                            },
                                        }
                                    },
                                    onContentReady: function() {
                                        // bind to events
                                        var jc = this;
                                        this.$content.find('form').on('submit', function(e) {
                                            // if the user submits the form by pressing enter in the field.
                                            e.preventDefault();
                                            jc.$$formSubmit.trigger('click'); // reference the button and click it
                                        });
                                    }
                                });
                            });
                            // });
                            $(document).ajaxStop(function() {
                                //window.setTimeout(nn, 3000);
                                //nn();

                                $(document).ready(function() {
                                    setTimeout(function() {
                                        //alert('Reloading Page');
                                        location.reload(true);
                                    }, 1000);
                                });


                            });

                            $('.btnmmm').on('click', function() {
                                //var clickHandler = btn[i].onclick;
                                // event.preventDefault();
                                //event.stopPropagation();
                                var id = $(this).attr('id'); // $(this) refers to button that was clicked
                                //alert(id);
                                // $.confirm({
                                //     title: 'Confirm',
                                //     animateFromElement: false,
                                //     animation: 'RotateX',
                                //     closeAnimation: 'RotateX',
                                //     content: 'Are you sure you want to remove the equipment? This action cannot be undone!',
                                //     boxWidth: '30%',
                                //     theme: 'my-theme',
                                //     useBootstrap: false,
                                //     // closeIcon: true,
                                //     buttons: {
                                //         Confirm: {
                                //             btnClass: 'hi',
                                //             action: function() {
                                //                 // clickHandler.call(this, event);
                                //                 $.ajax({
                                //                     url: "remove-inventory-all.php",
                                //                     type: "POST",
                                //                     data: {
                                //                         'inventory_id': id,
                                //                         'ajax': true
                                //                     },
                                //                     success: function(response) {
                                //                         document.getElementById("hola").innerHTML = "Removed The Equipment";
                                //                         nn();


                                //                         // You will get response from your PHP page (what you echo or print)
                                //                     },
                                //                     error: function(jqXHR, textStatus, errorThrown) {
                                //                         console.log(textStatus, errorThrown);
                                //                     }
                                //                 });
                                //             }
                                //         },
                                //         Cancel: {
                                //             btnClass: 'hi', // multiple classes.

                                //         },
                                //     }
                                // });

                                $.confirm({
                                    //title: 'Prompt!',
                                    content: 'Are you sure you want to remove the equipment? This action cannot be undone!<br><br>' +
                                        '<form action="" class="formName">' +
                                        '<div class="form-group">' +
                                        '<label>Enter PIN</label><br><br>' +
                                        '<input type="text" placeholder="PIN" class="name form-control" required />' +
                                        '</div>' +
                                        '</form>',
                                    title: 'Confirm',
                                    animateFromElement: false,
                                    animation: 'RotateX',
                                    closeAnimation: 'RotateX',
                                    //content: 'Are you sure you want to remove the equipment? This action cannot be undone!',
                                    boxWidth: '30%',
                                    theme: 'my-theme',
                                    useBootstrap: false,
                                    buttons: {
                                        formSubmit: {
                                            text: 'Confirm',
                                            btnClass: 'hi',
                                            action: function() {
                                                var name = this.$content.find('.name').val();
                                                if (!name) {
                                                    // $.alert('provide a valid PIN');
                                                    return false;
                                                }
                                                $.ajax({
                                                    url: "remove-inventory-all.php",
                                                    type: "POST",
                                                    data: {
                                                        'inventory_id': id,
                                                        'pin': name,
                                                        'ajax': true
                                                    },
                                                    success: function(data) {
                                                        document.getElementById("hola").innerHTML = data;
                                                        nn();


                                                        // You will get response from your PHP page (what you echo or print)
                                                    },
                                                    error: function(jqXHR, textStatus, errorThrown) {
                                                        console.log(textStatus, errorThrown);
                                                    }
                                                });
                                            }
                                        },
                                        cancel: {
                                            btnClass: 'hi',
                                            function() {
                                                //close
                                            },
                                        }
                                    },
                                    onContentReady: function() {
                                        // bind to events
                                        var jc = this;
                                        this.$content.find('form').on('submit', function(e) {
                                            // if the user submits the form by pressing enter in the field.
                                            e.preventDefault();
                                            jc.$$formSubmit.trigger('click'); // reference the button and click it
                                        });
                                    }
                                });
                            });
                            // });
                            $(document).ajaxStop(function() {
                                //window.setTimeout(nn, 3000);
                                //nn();

                                $(document).ready(function() {
                                    setTimeout(function() {
                                        //alert('Reloading Page');
                                        location.reload(true);
                                    }, 1000);
                                });


                            });
                        </script>
                    </tbody>
                </table>


            </div>

            <!-- <div class="equip">
                <div class="one">
                    <img src="media/inventory/dumbbell.png" alt="">
                </div>
            </div> -->


        </div>


    </section>






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




    <script src="js/justselect.min.js"></script>


</body>

</html>
<?php
unset($_SESSION['notification']);



// $rn = 0;
// while ($row) {
//     $rn++;
//     echo " <tr>
//     <td>" . $row['abc'] . "</td>
//     <td><a class='delete' href='delete.php?m=$m&abc=$row[abc]'>DELETE</a></td>
// </tr> ";
// }
// echo " <script>
//     $(document).ready(function(e) {
//         $('.delete').click(function(e) {
//             var conf = confirm('Sure Delete!?') if (!conf) {
//                 event.preventDefault();
//             }
//         });
//     });
// </script>";
