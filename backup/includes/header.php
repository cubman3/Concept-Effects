<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head runat="server">
    <title></title>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-replace.js"></script>
    <script type="text/javascript" src="js/Bebas_400.font.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    
    <script src="js/facebook-photo-album.js"></script>

    <script type="text/javascript" src="lightbox/js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="lightbox/css/jquery.lightbox-0.5.css" media="screen" />

    <div id="fb-root"></div>
    <script>    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=52528597048";
        fjs.parentNode.insertBefore(js, fjs);
    } (document, 'script', 'facebook-jssdk'));

$(document).ready(function(){
  var root = 'images/';
  var filename = '';
  var url = document.location.pathname.toLowerCase();

  var imgArray = [
      'new/0.jpg',
      'new/1.jpg',
      'new/2.jpg',
      'new/3.jpg',
      'new/4.jpg',
      'new/5.jpg',
      'new/6.jpg',
      'new/7.jpg',
      'new/8.jpg',
      'new/9.jpg',
      'new/10.jpg',
      'new/11.jpg',
      'new/12.jpg',
      'new/13.jpg',
      'new/14.jpg',
      'new/15.jpg',
      'new/16.jpg',
      'new/17.jpg',
      'new/18.jpg',
      'new/19.jpg',
      'new/20.jpg',
      'new/21.jpg',
    ];

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
    } else {
      filename = imgArray[random];
    }

    $('img#mainImg').attr('src', root + filename);
});
    

    </script>

    </head>
<body id="page4">
    <div class="tail-top">
   <div id="main">
      <!-- header -->
      <header>
         <div id="date"></div>
         <h1><a href="Default.php">Concept Effects</a></h1>
         <span class="subHead">Chicago's Premier Lighting and Event Company</span>
         <span class="subSubHead">"Providing creative customized events"</span>
         <nav>
            <ul>
             
              <li><a href="Default.php">Home</a></li>
               <li><a href="AboutUs.php">About Us</a></li>
               <li><a href="Services.php">Services</a></li>
               <li class="current"><a href="Gallery.php">Gallery</a></li>
               <li><a href="ContactUs.php">Contact Us</a></li>
            </ul>
         </nav>
         <ul id="login" style="display:none;">
            <li><a href="#">Login</a></li>
            <li><a href="#">register</a></li>
         </ul>
        <div id="slider">
        <ul>
         <li><img id="mainImg" src="images/0.jpg"></li>
      </ul>
        </div>
      </header>
      <!-- content -->
      <section id="content" class="wrapper">
         <div class="line-hor"></div>
         <div class="wrapper indent line-ver1" id="verLine">