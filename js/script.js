(function() {

	var weekday=new Array(7); 
	weekday[0]="SUN"; weekday[1]="MON"; weekday[2]="TUE"; weekday[3]="WED"; weekday[4]="THU"; weekday[5]="FRI"; weekday[6]="SAT";
	var month=new Array(); 
	month[0]="January"; month[1]="February"; month[2]="March"; month[3]="April"; month[4]="May"; month[5]="June"; month[6]="July"; month[7]="August"; month[8]="September"; month[9]="October"; month[10]="November"; month[11]="December";

	$(document).ready(function() {
		changeCurrentNavItem();
		setCopyrightYear();


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

	(function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=52528597048";
      fjs.parentNode.insertBefore(js, fjs);
    } (document, 'script', 'facebook-jssdk'));

    $(document).ready(function(){
      var root = 'images/';
      var filename = '';
      var showVid = false;
      var url = document.location.pathname.toLowerCase();

      var imgArray = ['d/0.jpg', 'd/1.jpg', 'd/2.jpg', 'd/3.jpg', 'd/4.jpg', 'd/5.jpg', 'd/6.jpg', 'd/7.jpg', 'd/8.jpg', 'd/9.jpg', 'd/10.jpg', 'd/11.jpg', 'd/12.jpg', 'd/13.jpg'];

      var random = Math.floor((Math.random()*(imgArray.length-1))+1);

      if(url.indexOf('services') != -1) {
        showVid = true;
      } else {
        filename = imgArray[random];
      }
      if(showVid){
        $('#MainVid').show();
        $('img#mainImg').hide();
      } else {
        $('img#mainImg').attr('src', root + filename);
      }
      
    });

})();



var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-38924024-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();



