

AOS.init();

var perc,perc2,respo,d_count;
var dtx = document.getElementById("dchart").getContext("2d");
$(document).ready(function () {
  $.ajax({
      url: './includes/get_provalues.php',
      type: "post",
      dataType: 'json',
      success: function (respo) {
          console.log("success");
          console.log(respo);
          perc = respo[0];
          d_count = Number(respo[1]);
          chartload3();
      },
      error: function () {
          console.log("error");
      }
  });
},);


const com = 'rgb(134, 255, 113)';
const ncom = 'rgba(24, 24, 24,0.3)';

   
var d_val , d_view, d_type ;
var data,config2;

const type1 = ['D1','D2']; const  d_val1 = [1,1];  var  d_view1 = [ncom,ncom];
const type2 = ['D1','D2','D3']; const  d_val2 = [1,1,1];   var  d_view2 = [ncom,ncom,ncom];
const type3 = ['D1','D2','D3','D4']; const  d_val3 = [1,1,1,1];  var d_view3 = [ncom,ncom,ncom,ncom]; 
const type4 = ['D1','D2','D3','D4','D5']; const  d_val4 = [1,1,1,1,1]; var d_view4 = [ncom,ncom,ncom,ncom]; 
const type5 = ['D1','D2','D3','D4','D5','D6']; const d_val5 = [1,1,1,1,1,1]; var  d_view5 = [ncom,ncom,ncom,ncom,ncom]; 

Chart.defaults.fontSize = 16;
function chartload3(){


if(d_count == 2){
  d_val = d_val1; 
  d_type = type1;
  if(perc < 50){
    d_view = d_view1;
  }else if(perc == 50){
    d_view1[0]=com;
    d_view = d_view1;
  }else if(perc > 50){
    d_view1[0]=com;d_view1[1]=com;
    d_view = d_view1;
  }
}
else if(d_count == 3){
  d_val = d_val2; 
  d_type = type2;
  if(perc < 30){
    d_view = d_view2;
  }else if(perc == 33){
    d_view2[0]=com;
    d_view = d_view2;
  }else if(perc == 67){
    d_view2[0]=com;d_view2[1]=com;
    d_view = d_view2;
  }else if(perc == 100){
    d_view2[0]=com;d_view2[1]=com;d_view2[2]=com;
    d_view = d_view2;
  }else{
    d_view = d_view2;
  }
}
else if(d_count == 4){
  d_val = d_val3; 
  d_type = type3;
  if(perc < 25){
    d_view = d_view3;
  }else if(perc == 25){
    d_view3[0]=com;
    d_view = d_view3;
  }else if(perc == 50){
    d_view3[0]=com;d_view3[1]=com;
    d_view = d_view3;
  }else if(perc == 75){
    d_view3[0]=com;d_view3[1]=com;d_view3[2]=com;
    d_view = d_view3;
  }else if(perc == 100){
    d_view3[0]=com;d_view3[1]=com;d_view3[2]=com;d_view3[3]=com;
    d_view = d_view3;
  }else{
    d_view = d_view3;
  }
}
else if(d_count == 5){
  d_val = d_val4; 
  d_type = type4;
  if(perc < 20){
    d_view = d_view4;
  }else if(perc == 20){
    d_view4[0]=com;
    d_view = d_view4;
  }else if(perc == 40){
    d_view4[0]=com;d_view4[1]=com;
    d_view = d_view4;
  }else if(perc == 60){
    d_view4[0]=com;d_view4[1]=com;d_view4[2]=com;
    d_view = d_view4;
  }else if(perc == 80){
    d_view4[0]=com;d_view4[1]=com;d_view4[2]=com;d_view4[3]=com;
    d_view = d_view4;
  }else if(perc == 100){
    d_view4[0]=com;d_view4[1]=com;d_view4[2]=com;d_view4[3]=com;d_view4[4]=com;
    d_view = d_view4;
  }else{
    d_view = d_view4;
  }
}
else if(d_count == 6){ 
  d_val = d_val5; 
  d_type = type5;
  if(perc < 16){
    d_view = d_view5;
  }else if(perc == 17){
    d_view5[0]=com;
    d_view = d_view5;
  }else if(perc == 33){
    d_view5[0]=com;d_view5[1]=com;
    d_view = d_view5;
  }else if(perc == 50){
    d_view5[0]=com;d_view5[1]=com;d_view5[2]=com;
    d_view = d_view5;
  }else if(perc == 67){
    d_view5[0]=com;d_view5[1]=com;d_view5[2]=com;d_view5[3]=com;
    d_view = d_view5;
  }else if(perc == 83){
    d_view5[0]=com;d_view5[1]=com;d_view5[2]=com;d_view5[3]=com;d_view5[4]=com;
    d_view = d_view5;
  }else if(perc == 100){
    d_view5[0]=com;d_view5[1]=com;d_view5[2]=com;d_view5[3]=com;d_view5[4]=com;d_view5[5]=com;
    d_view = d_view5;
  }else{
    d_view = d_view5;
  }
}

data = {
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
config2 = {
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
                var text = perc+"%",
                textX = Math.round((width - ctx.measureText(text).width) / 2),
                textY = (height / 2.2)+pad;
      }else if (d_type == type4 || d_type == type5){
                var text = perc+"%",
                textX = Math.round((width - ctx.measureText(text).width) / 2),
                textY = (height / 1.84)+pad;
      }else {
                var text = perc+"%",
                textX = Math.round((width - ctx.measureText(text).width) / 2),
                textY = (height / 2)+pad;
      }     

      ctx.fillText(text, textX, textY);
      ctx.save();


  
    } 
  }
});
    window.myLine = new Chart(dtx, config2);
}
