<?php include 'sendemail.php'; ?>
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>About</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="About.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.16.0, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.php",
		"logo": "#"
}</script>
    <meta property="og:title" content="About">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#4345e7">
    <link rel="canonical" href="index.php">
    <meta property="og:url" content="index.php">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-sticky u-header" id="sec-3cd6"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
          <img src="#" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XL">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 500;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="../../home1/index.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="../index.php" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-active-grey-5 u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="../contact/contact19.php" style="padding: 10px 20px;">Contact</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../../home1/index.php" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../index.php" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../contact/contact19.php" style="padding: 10px 20px;">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-f456"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">THANK YOU FOR VISITING !<br>Hope, we will be Helpfull to you !
        </p>
      </div></footer>
   
  </body>
</html>