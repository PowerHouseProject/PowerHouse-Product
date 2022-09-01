
draw(dates.map(obj=>{
  return{
      title:obj.time_slot,
      start:obj.date,
      color:obj.colorT,
      textColor:obj.txtclr,
  }
}))

function draw(data) {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      events : data
  });

  calendar.render();
};




