// Bike Shed opening hours script
var today = new Date();
var day = today.getDay();
var dotw = new Array(7);
dotw[0]="Sunday";
dotw[1]="Monday";
dotw[2]="Tuesday";
dotw[3]="Wednesday";
dotw[4]="Thursday";
dotw[5]="Friday";
dotw[6]="Saturday";
var el = document.getElementById('isopen');
if (day === 0){
	// Sunday closed
	el.innerHTML = "It's <b>" + dotw[day] + "</b> - We are closed today";
}else if (day === 6){
    // Saturday times
  	el.innerHTML = "It's <b>" + dotw[day] + "</b> - We are open today from 10am until 6pm";
}else{
	// Weekday times
	el.innerHTML = "It's <b>" + dotw[day] + "</b> - We are open today from 9am until 7pm";
 }
