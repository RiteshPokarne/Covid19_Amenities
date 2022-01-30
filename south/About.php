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
    <meta name="generator" content="Nicepage 3.17.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta property="og:title" content="About">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-85c8"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XL">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; text-transform: uppercase; font-weight: 500;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="font-size: calc(1em + 28px); color: rgb(17, 17, 17) !important;">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 24 24" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f689"></use></svg>
              <svg class="u-svg-content" viewBox="0 0 24 24" id="svg-f689"><path d="m12 0c-6.617 0-12 5.383-12 12s5.383 12 12 12 12-5.383 12-12-5.383-12-12-12z" fill="#2196f3"></path><path d="m12 0c-6.617 0-12 5.383-12 12s5.383 12 12 12z" fill="#1d83d4"></path><path d="m10.73 18.791-6.5-6.25c-.147-.142-.23-.337-.23-.541s.083-.399.23-.541l6.5-6.25c.475-.458 1.27-.119 1.27.541v3.25h5.75c.689 0 1.25.561 1.25 1.25v3.5c0 .689-.561 1.25-1.25 1.25h-5.75v3.25c0 .664-.798.995-1.27.541z" fill="#fff"></path><path d="m19 12h-15c0 .204.083.399.23.541l6.5 6.25c.15.145.334.21.514.21.385-.001.756-.299.756-.751v-3.25h5.75c.689 0 1.25-.561 1.25-1.25z" fill="#dedede"></path></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-palette-3-base u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-hover-palette-3-light-2 u-nav-link u-palette-2-light-2 u-text-active-white u-text-grey-90 u-text-hover-white" href="../ngo/index.php" style="padding: 10px 20px;">Back</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../ngo/index.php" style="padding: 10px 0px;">Back</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-266b"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Thank You For Visiting !!</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  </body>
</html>