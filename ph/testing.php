<!DOCTYPE html>
<html lang="en">

<head>

    <title>PIGNOSE Calendar</title>
    <link rel="stylesheet" type="text/css" href="dist/css/pignose.calendar.min.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"></script>
    <script type="text/javascript" src="dist/js/pignose.calendar.full.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

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
    <!-- <?php phpinfo(); ?> -->


    <button class="example1">Click Me</button>




    <script>
        // var $btn = $('.btn-calendar').pignoseCalendar({
        //     // apply: onApplyHandler,
        //     modal: true, // It means modal will be showed when you click the target button.
        //     buttons: true
        // });


        $('.example1').on('click', function() {
            $.confirm({
                title: 'Confirm',
                animateFromElement: false,
                animation: 'RotateX',
                closeAnimation: 'RotateX',
                content: 'Are you sure you want to delete? This action cannot be undone.',
                boxWidth: '30%',
                theme: 'my-theme',
                useBootstrap: false,
                // closeIcon: true,
                buttons: {
                    Confirm: {
                        btnClass: 'hi',
                        action: function() {}
                    },
                    Cancel: {
                        btnClass: 'hi', // multiple classes.

                    },
                }
            });
        });
    </script>




</body>

</html>