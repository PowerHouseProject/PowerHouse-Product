
AOS.init();
Chart.defaults.fontSize = 16;
    const type1 = ['D1','D2']; const  d_val1 = [1,1];  var  d_view1 = ['rgb(134, 255, 113)','rgba(24, 24, 24,0.3)']; 
    const type2 = ['D1','D2','D3']; const  d_val2 = [1,1,1];   var  d_view2 = ['rgb(134, 255, 113)','rgba(24, 24, 24,0.3)','rgba(24, 24, 24,0.3)']; 
    const type3 = ['D1','D2','D3','D4']; const  d_val3 = [1,1,1,1];  var d_view3 = ['rgb(134, 255, 113)','rgba(24, 24, 24,0.3)','rgba(24, 24, 24,0.3)','rgba(24, 24, 24,0.3)']; 
    const type4 = ['D1','D2','D3','D4','D5']; const  d_val4 = [1,1,1,1,1]; var d_view4 = ['rgb(134, 255, 113)','rgba(24, 24, 24,0.3)','rgba(24, 24, 24,0.3)','rgba(24, 24, 24,0.3)']; 
    const type5 = ['D1','D2','D3','D4','D5','D6']; const d_val5 = [1,1,1,1,1,1]; var  d_view5 = ['rgb(134, 255, 113)','rgba(24, 24, 24,0.3)','rgba(24, 24, 24,0.3)','rgba(24, 24, 24,0.3)','rgba(24, 24, 24,0.3)']; 
    
    
    var d_val = d_val2; 
    var d_view = d_view2;
    var d_type = type2;
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
        ctx = chart.chart.ctx;
        type = chart.config.type;
        
        var readmore = document.getElementById('readM');
        var pad;
        if(readmore == 'http://localhost/Group_CS21/root/member/schedule.php'){
          pad=30;
        }else{
          pad=20;
        }

    if (type == 'doughnut'){
      ctx.restore();
      var fontSize = (height / 114).toFixed(2);
      ctx.font = fontSize + "em Arial";
      ctx.textBaseline = "middle";
      if (d_type == type1)
      {
                var text = "25%",
                textX = Math.round((width - ctx.measureText(text).width) / 2),
                textY = (height / 2.2)+pad;
      }else if (d_type == type4 || d_type == type5){
                var text = "25%",
                textX = Math.round((width - ctx.measureText(text).width) / 2),
                textY = (height / 1.84)+pad;
      }else {
                var text = "25%",
                textX = Math.round((width - ctx.measureText(text).width) / 2),
                textY = (height / 2)+pad;
      }     

      ctx.fillText(text, textX, textY);
      ctx.save();
    } 
  }
}); 