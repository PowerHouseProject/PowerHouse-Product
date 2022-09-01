

var val_set;

$(document).ready(function () {
    $.ajax({
        url: './includes/get_month_income.php',
        type: "post",
        dataType: 'json',
        success: function (respo) {
            console.log("success");
            console.log(respo);
            val_set = respo;
            chartload();
            console.log(respo);
        },
        error: function () {
            console.log("error");
        }
    });
});



var config;

function chartload() {
    // Chart.defaults.global.defaultFontFamily = "Rubic";
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
    config = {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            datasets: [{
                label: "Monthly Income",
                backgroundColor: "rgba(134, 255, 113, 0.8)",
                borderColor: "#86ff71",
                data: val_set,
                fill: false,
            },]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            title: {
                text: 'Monthly Income Analysis',
                fontSize: 19,
                fontStyle: '600',
                fontColor: 'rgba(240,250,237,1)',
                padding: 10,
                display: true
            },

            layout: {
                padding: 20
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
                        display: false,
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
                        display: false,
                        color: "#e6e6e644",
                        lineWidth: 1
                    }
                }]
            }
        }
    };

    var ctx = document.getElementById("canvas").getContext("2d");
    window.myLine = new Chart(ctx, config);
}


AOS.init();
