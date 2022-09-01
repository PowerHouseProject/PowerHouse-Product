

        AOS.init();

        var val_set2;

        $(document).ready(function (){
                $.ajax({                                      
                url: './includes/get_bfvalues.php',              
                type: "post",          
                dataType: 'json',                
                success: function(respo2) {
                    console.log("success");
                    val_set2 = JSON.parse(respo2);
                    chartload2();
                    console.log(respo2);
                },
                error: function(){
                    console.log("error");
                }
            });
        });
    function chartload2(){

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

                var randomScalingFactor = function() {
                    return (Math.random() > 0.5 ? 2.0 : 1.0) * Math.round(Math.random() * 100);
                }


        var config3 = {
            type: 'line',
            data: {
            labels: ["Month 01", "Month 02", "Month 03", "Month 04", "Month 05", "Month 06", "Month 07","Month 08","Month 09","Month 10","Month 11","Month 12"],
            datasets: [{
            label: "Body Fat value",
            backgroundColor: "rgba(134, 255, 113, 0.5)",
            borderColor: "#86ff71",
            data: val_set2,
            fill: true,
            }, ]
        },
        options: {
        responsive: true,
        maintainAspectRatio: true,
        title: {
            text: 'Body Fat Analysis',
            fontSize: 20,
            fontStyle: '600',
            fontColor: 'rgba(240,250,237,1)',
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

         var bftx = document.getElementById("canvas2").getContext("2d");

        $.ajax({
            type: "POST",
            url: "./includes/get_memtype.php",
            success: function(response)
            {

                membership = response; 
                if(membership == 12){
                    config3.data.labels= ["Month 01", "Month 02", "Month 03", "Month 04", "Month 05", "Month 06", "Month 07","Month 08","Month 09","Month 10","Month 11","Month 12"];
                }else if(membership == 6){
                    config3.data.labels= ["Month 01", "Month 02", "Month 03", "Month 04", "Month 05", "Month 06"];
                }else if(membership == 3){
                    config3.data.labels= ["Month01 1st 2-Weeks", "Month01 2nd 2-Weeks", "Month02 1st 2-Weeks", "Month02 2nd 2-Weeks", "Month03 1st 2-Weeks", "Month03 2nd 2-Weeks"];
                }else if(membership == 1){
                    config3.data.labels= ["Week 01", "Week 02", "Week 03", "Week 04"];
                }
        
                window.myLine = new Chart(bftx, config3);
            }
        });

    }