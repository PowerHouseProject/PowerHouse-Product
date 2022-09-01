
AOS.init();

var days_count;

// $(document).ready(function (){
//   $.ajax({                                      
//   url: './includes/get_activeweek.php',              
//   type: "post",          
//   dataType: 'json',                
//   success: function(respo2) {
//       console.log("success");
//       days_count =respo2;
//       chartload3();
//       console.log(respo2);
//   },
//   error: function(){
//       console.log("error");
//   }
// });
// });

chartload3();

function chartload3(){
Chart.defaults.fontSize = 16;

const type1 = ['D1','D2']; const  d_val1 = [1,1];  var  d_view1 = ['rgb(134, 255, 113)','rgba(24, 24, 24,0.3)']; 
const type2 = ['D1','D2','D3']; const  d_val2 = [1,1,1];   var  d_view2 = ['rgb(134, 255, 113)','rgba(24, 24, 24,0.3)','rgba(24, 24, 24,0.3)']; 
const type3 = ['D1','D2','D3','D4']; const  d_val3 = [1,1,1,1];  var d_view3 = ['rgb(134, 255, 113)','rgba(24, 24, 24,0.3)','rgba(24, 24, 24,0.3)','rgba(24, 24, 24,0.3)']; 
const type4 = ['D1','D2','D3','D4','D5']; const  d_val4 = [1,1,1,1,1]; var d_view4 = ['rgb(134, 255, 113)','rgba(24, 24, 24,0.3)','rgba(24, 24, 24,0.3)','rgba(24, 24, 24,0.3)']; 
const type5 = ['D1','D2','D3','D4','D5','D6']; const d_val5 = [1,1,1,1,1,1]; var  d_view5 = ['rgb(134, 255, 113)','rgba(24, 24, 24,0.3)','rgba(24, 24, 24,0.3)','rgba(24, 24, 24,0.3)','rgba(24, 24, 24,0.3)']; 
  
var dtx = document.getElementById("dchart").getContext("2d");

    var d_val; 
    var d_view;
    var d_type;

    // if(d_6 == true || d_6 == false){
    //   d_val = d_val5; 
    //   d_view = d_view5;
    //   d_type = type5;
    // }else if (d_5 == true || d_5.checked == false){
    //   d_val = d_val4; 
    //   d_view = d_view4;
    //   d_type = type4;
    // }else if (d_4.checked == true || d_4.checked == false){
    //   d_val = d_val3; 
    //   d_view = d_view3;
    //   d_type = type3; 
    // }else if (d_3.checked == true || d_3.checked == false){
    //   d_val = d_val2; 
    //   d_view = d_view2;
    //   d_type = type2;
    // }else if (d_2.checked == true || d_2.checked == false){
    //   d_val = d_val1; 
    //   d_view = d_view1;
    //   d_type = type1;
    // }else if ( 1 == 1){
    //   d_val = d_val1; 
    //   d_view = d_view1;
    //   d_type = type1;
    // }

    d_val = d_val1; 
    d_view = d_view1;
    d_type = type1;
    
    // var d_val = d_val2; 
    // var d_view = d_view2;
    // var d_type = type2;


var data = {
        labels: d_type,
        datasets: [{
            label: 'Attendance',
              data: d_val,
            backgroundColor: d_view,
            hoverOffset: 4
        }],
        options: {
            elements: {
              center: {
              }
            }
    }
};

var config2 = {
            type: 'doughnut',
            data: data,
};

Chart.pluginService.register({
  beforeDraw: function(chart) {
    var width = chart.chart.width,
        height = chart.chart.height,
        dtx = chart.chart.dtx;
        type = chart.config.type;
        
        var readmore = document.getElementById('readM');
        var pad;
        if(readmore == 'http://localhost/Group_CS21/root/member/schedule.php'){
          pad=30;
        }else{
          pad=20;
        }

    if (type == 'doughnut'){
      dtx.restore();
      var fontSize = (height / 114).toFixed(2);
      dtx.font = fontSize + "em Arial";
      dtx.textBaseline = "middle";
      if (d_type == type1)
      {
                var text = "25%",
                textX = Math.round((width - dtx.measureText(text).width) / 2),
                textY = (height / 2.2)+pad;
      }else if (d_type == type4 || d_type == type5){
                var text = "25%",
                textX = Math.round((width - dtx.measureText(text).width) / 2),
                textY = (height / 1.84)+pad;
      }else {
                var text = "25%",
                textX = Math.round((width - dtx.measureText(text).width) / 2),
                textY = (height / 2)+pad;
      }     

      dtx.fillText(text, textX, textY);
      dtx.save();



    } 
  }
});

  
    window.myLine = new Chart(dtx, config2);
}