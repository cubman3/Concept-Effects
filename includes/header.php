<html>

  <head>
    <title><?php echo $page_name; ?>Concept Effects</title>

    <meta name="description" content="Chicago's Premier Lighting and Event Company">

    <meta name="keywords" content="lighting, weddings, event, chicago, chicagoland,fashion, planning, bride, promoter, theater, professional, entertainment, designers, chicagos">

    <link rel="canonical" href="http://www.seomoz.org/blog" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" />

  </head>

  <body>

  <header>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <h1>Concept<span>Effects</span></h1>
          <h2>Chicago’s Premier Lighting & Event Company</h2>
          <span class="decoration"></span>
        </div>
        <div class="col-sm">
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
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link <? if ($_SERVER[REQUEST_URI] == '/default.php') { echo 'active'; } ?>" href="/default.php">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <? if ($_SERVER[REQUEST_URI] == '/aboutus.php') { echo 'active'; } ?>" href="/aboutus.php">
            About Us
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <? if ($_SERVER[REQUEST_URI] == '/services.php') { echo 'active'; } ?>" href="/services.php">
            Services
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <? if ($_SERVER[REQUEST_URI] == '/eventpackages.php') { echo 'active'; } ?>" href="/eventpackages.php">
            Event Packages
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <? if ($_SERVER[REQUEST_URI] == '/gallery.php') { echo 'active'; } ?>" href="/gallery.php">
          Gallery
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <? if ($_SERVER[REQUEST_URI] == '/contactus.php') { echo 'active'; } ?>" href="/contactus.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>


  

     