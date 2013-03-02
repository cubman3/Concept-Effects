(function() {

	var weekday=new Array(7);
	weekday[0]="SUN";
	weekday[1]="MON";
	weekday[2]="TUE";
	weekday[3]="WED";
	weekday[4]="THU";
	weekday[5]="FRI";
	weekday[6]="SAT";

	var month=new Array();
	month[0]="January";
	month[1]="February";
	month[2]="March";
	month[3]="April";
	month[4]="May";
	month[5]="June";
	month[6]="July";
	month[7]="August";
	month[8]="September";
	month[9]="October";
	month[10]="November";
	month[11]="December";


	$(document).ready(function() {
		changeCurrentNavItem();
		setCopyrightYear();
		//setHeaderDate();


	});

	function changeCurrentNavItem() {
		var uri = $(location).attr('href');
		$('header>nav>ul li').removeClass('current');

		$('header>nav>ul li a').each(function() {
			if (uri.indexOf($(this).attr('href')) != -1) {
				$(this).parent().addClass('current')
			}
		});
	}

	function setCopyrightYear(){
		var year = new Date();
		$('#year').html(year.getFullYear());
	}

	function setHeaderDate(){
		var d = new Date();

		var dateStr = weekday[d.getDay()] + ', ' + month[d.getMonth()] + ' ' + d.getDate() + ', ' + d.getFullYear();

		$('#date').html(dateStr);

	}

})();
