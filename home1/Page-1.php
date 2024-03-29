<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ../login.php");
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
    <title>Page 1</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.17.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo.png"
}</script>
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#6c8ff7">
  </head>
  <body class="u-body"><header class="u-align-center-xs u-header u-palette-5-light-2" id="sec-5d69" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-sheet-1">
        <a href="../home1/index.php" class="u-image u-logo u-image-1" data-image-width="573" data-image-height="436" title="Logo">
          <img src="images/logo.png" class="u-logo-image u-logo-image-1" data-image-width="131.1">
        </a>
        <nav class="u-menu u-menu-dropdown u-menu-open-right u-offcanvas u-menu-1" data-responsive-from="XL" data-submenu-level="on-click">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#" style="padding: 9px 8px; font-size: calc(1em + 18px);">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-5 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-3-light-2 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90 u-white" href="../home1/index.php" style="padding: 10px 20px;">HOME</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-3-light-2 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90 u-white" href="../Services/index.php" style="padding: 10px 20px;">SERVICES</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-3-light-2 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90 u-white" href="../about/index.php" style="padding: 10px 20px;">ABOUT</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-3-light-2 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90 u-white" href="../contact/contact19.php" style="padding: 10px 20px;">CONTACT</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-3-light-2 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90 u-white" href="../logout.php" style="padding: 10px 20px;">LOGOUT</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-45 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../home1/index.php" style="padding: 10px 20px;">HOME</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Services/index.php" style="padding: 10px 20px;">SERVICES</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../about/index.php" style="padding: 10px 20px;">ABOUT</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../contact/contact19.php" style="padding: 10px 20px;">CONTACT</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../logout.php" style="padding: 10px 20px;">LOGOUT</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-20"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-1010">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-df68"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Thank You for Visiting !!<br>Please Login to Experience our Services.
        </p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/html5-template" target="_blank">
        <span>HTML5 Template</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/website-builder" target="_blank">
        <span>Free Website Builder</span>
      </a>. 
    </section>
  </body>
</html>