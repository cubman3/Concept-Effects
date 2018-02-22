<html>

  <head>
    <title><?php echo $page_name; ?>Concept Effects</title>

    <meta name="description" content="Chicago's Premier Lighting and Event Company">

    <meta name="keywords" content="lighting, weddings, event, chicago, chicagoland,fashion, planning, bride, promoter, theater, professional, entertainment, designers, chicagos">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="canonical" href="http://concepteffects.com/" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" />

  </head>

  <body>

  <header>
    <div class="container">
      <div class="row">
        <div class="col-md">
          <h1><a href="default.php">Concept<span>Effects</span></a></h1>
          <h2>Chicago's Premier Lighting & Event Company</h2>
          <span class="decoration"></span>
          <a href="#" class="ss-rows hamburger" data-action="toggle-mobile-nav"></a>
        </div>
        <div class="col-md">
              <ul class="header-right">
                <li class="social-icons">
                  <?php include 'includes/social-icons.php'; ?>
                </li>
                <li class="client-login">
                  <a href="https://concepteffectslogin.com/clientlogon.asp" class="btn btn-primary">Client Login</a>
                </li>
              </ul>
        </div>
      </div>
    </div>
  </header>

  <nav class="site-nav">
    <div class="container">
      <ul class="nav justify-content-center" data-context="site-nav">
        <li class="nav-item mobile-client-login"><a href="https://concepteffectslogin.com/clientlogon.asp" class="btn btn-primary">Client Login</a></li>
        <li class="nav-item">
          <a class="nav-link <? if ($_SERVER[REQUEST_URI] == '/default.php') { echo 'active'; } ?>" href="default.php">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <? if ($_SERVER[REQUEST_URI] == '/aboutus.php') { echo 'active'; } ?>" href="aboutus.php">
            About Us
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <? 
            if ($_SERVER[REQUEST_URI] == '/services.php' || 
              $_SERVER[REQUEST_URI] == '/djentertainment.php' ||
              $_SERVER[REQUEST_URI] == '/lighting.php' ||
              $_SERVER[REQUEST_URI] == '/photobooths.php' ||
              $_SERVER[REQUEST_URI] == '/decor.php' ||
              $_SERVER[REQUEST_URI] == '/transport.php' ||
              $_SERVER[REQUEST_URI] == '/audiovideo.php' ||
              $_SERVER[REQUEST_URI] == '/makeup.php') { 
              echo 'active'; 
            } ?>" href="services.php">
            Services
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <? if ($_SERVER[REQUEST_URI] == '/eventpackages.php') { echo 'active'; } ?>" href="eventpackages.php">
            Event Packages
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <? if ($_SERVER[REQUEST_URI] == '/gallery.php') { echo 'active'; } ?>" href="gallery.php">
          Gallery
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <? if ($_SERVER[REQUEST_URI] == '/contactus.php') { echo 'active'; } ?>" href="contactus.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>


  

     