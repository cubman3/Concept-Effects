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

      var imgArray = ['b/0.jpg', 'b/1.jpg', 'b/2.jpg', 'b/3.jpg', 'b/4.jpg', 'b/5.jpg', 'b/6.jpg', 'b/7.jpg', 'b/8.jpg', 'b/9.jpg', 'b/10.jpg', 'b/11.jpg', 'b/12.jpg', 'b/13.jpg', 'b/14.jpg', 'b/15.jpg', 'b/16.jpg', 'b/17.jpg', 'b/18.jpg', 'b/19.jpg', 'b/20.jpg', 'b/21.jpg', ];

      var random = Math.floor((Math.random()*(imgArray.length-1))+1);

      if(url.indexOf('djentertainment') != -1){
        filename = 'dj.jpg';
      } else if(url.indexOf('lighting') != -1) {
        filename = 'lighting.jpg';
      } else if(url.indexOf('decor') != -1) {
        filename = 'decor.jpg';
      } else if(url.indexOf('transport') != -1) {
        filename = 'transportation.jpg';
      } else if(url.indexOf('floral') != -1) {
        filename = 'floral.jpg';
      } else if(url.indexOf('travel') != -1) {
        filename = 'travel3.jpg';
      } else if(url.indexOf('services') != -1) {
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



