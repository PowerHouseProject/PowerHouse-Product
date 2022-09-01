AOS.init();
// Chart.defaults.global.defaultFontFamily = "Rubic";

var val_set;

$(document).ready(function () {
    $.ajax({
        url: './includes/get_bmivalues.php',
        type: "post",
        dataType: 'json',
        success: function (respo) {
            console.log("success");
            val_set = JSON.parse(respo);
            chartload();
            console.log(respo);
        },
        error: function () {
            console.log("error");
        }
    });
});

function chartload() {


    Chart.defaults.fontSize = 16;
    var chartColors = {
        red: 'rgb(255, 99, 132)',
        orange: 'rgb(255, 159, 64)',
        yellow: 'rgb(255, 205, 86)',
        green: 'rgb(75, 192, 192)',
        blue: 'rgb(54, 162, 235)',
        purple: 'rgb(153, 102, 255)',
        grey: 'rgb(231,233,237)'
    };

    var randomScalingFactor = function () {
        return (Math.random() > 0.5 ? 2.0 : 1.0) * Math.round(Math.random() * 100);
    }

    var config = {
        type: 'line',
        data: {
            labels: ["Month 01", "Month 02", "Month 03", "Month 04", "Month 05", "Month 06", "Month 07", "Month 08", "Month 09", "Month 10", "Month 11", "Month 12"],
            datasets: [{
                label: "BMI value",
                backgroundColor: "#86ff71",
                borderColor: "#86ff71",
                data: val_set,
                fill: false,
            },]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            title: {
                text: 'BMI Analysis',
                fontSize: 20,
                fontStyle: '600',
                fontColor: 'rgba(239,249,236,1)',
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


    $.ajax({
        type: "POST",
        url: "./includes/get_memtype.php",
        success: function (response) {
            membership = response;
            if (membership == 12) {
                config.data.labels = ["Month 01", "Month 02", "Month 03", "Month 04", "Month 05", "Month 06", "Month 07", "Month 08", "Month 09", "Month 10", "Month 11", "Month 12"];
            } else if (membership == 6) {
                config.data.labels = ["Month 01", "Month 02", "Month 03", "Month 04", "Month 05", "Month 06"];
            } else if (membership == 3) {
                config.data.labels = ["Month01 1st 2-Weeks", "Month01 2nd 2-Weeks", "Month02 1st 2-Weeks", "Month02 2nd 2-Weeks", "Month03 1st 2-Weeks", "Month03 2nd 2-Weeks"];
            } else if (membership == 1) {
                config.data.labels = ["Week 01", "Week 02", "Week 03", "Week 04"];
            }

            window.myLine = new Chart(ctx, config);
        }
    });

}