<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../login/login.php");
}

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Boost your brand with these key features, We advise organizations in value creation strategies, LIfe Coaching, Facts &amp; Questions, 001-234-5678001-987-7654">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.17.5, nicepage.com">
    
    
    
    
    
    
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    
    
    
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo.png"
}</script>
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#6c8ff7">
  </head>
  <body data-home-page="Home.php" data-home-page-title="Home" class="u-body u-overlap u-overlap-transparent"><header class="u-align-center-xs u-header u-palette-5-light-2" id="sec-5d69" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-sheet-1">
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
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-hover-palette-3-light-2 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90 u-white" href="../login/logout.php" style="padding: 10px 20px;">LOGOUT</a>
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../login/logout.php" style="padding: 10px 20px;">LOGOUT</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-20"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-uploaded-video u-video u-section-1" id="sec-cfeb">
      <div class="u-background-video u-expanded u-video-contain"  style="">
        <div class="embed-responsive">
          <video class="embed-responsive-item" loop="" autoplay="autoplay" muted="" playsinline="">
            <source src="files/video2.mp4" type="video/mp4">
            <p>Your browser does not support HTML5 video.</p>
          </video>
        </div>
      </div>
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-1" data-animation-name="rollIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
          <span style="font-weight: 700;">CO<span class="u-text-body-alt-color">VID19</span> AM<span class="u-text-body-alt-color">ENIT<span style="font-weight: 700;"></span>IES
            </span>
             
            <p style="font-weight: 400;color:white;font-size:30px;">LET'S DEFEAT IT TOGETHER !</p>
          </span>
        
         
        </h1>
        <a href="https://www.covid19india.org/" class="u-border-2 u-border-white u-btn u-button-style u-hover-grey-25 u-none u-text-body-alt-color u-text-hover-white u-btn-1" target="_blank">STATISTICS</a>
        <a href="https://www.who.int/health-topics/coronavirus#tab=tab_1" class="u-border-2 u-border-white u-btn u-button-style u-hover-grey-30 u-none u-text-body-alt-color u-text-hover-white u-btn-2" target="_blank">LEARN MORE</a>
        <h4 class="u-align-center u-text u-text-2" data-animation-name="rubberBand" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">Hello, We hope you and your families are safe and healthy.Our aim is to depict real time amenities required at one place.Please, login to take benefits of our all services provided on these Webpage.</h4>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-4-light-2 u-section-2" id="carousel_7954">
      <h1 class="u-text u-text-palette-2-base u-text-1" data-animation-name="rotateIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">OUR SERVICES<span style="font-size: 3.75rem;"></span>
      </h1>
      <div class="u-expanded-width u-palette-1-base u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-clearfix u-gutter-26 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-size-20">
              <div class="u-layout-col">
                <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-20 u-layout-cell-1">
                  <div class="u-container-layout u-container-layout-1"></div>
                </div>
                <div class="u-align-center u-container-style u-layout-cell u-palette-3-light-2 u-size-40 u-layout-cell-2" data-href="../food/index.php">
                  <div class="u-container-layout u-valign-top u-container-layout-2"><span class="u-icon u-icon-circle u-palette-5-light-2 u-spacing-18 u-icon-1" data-href="../food/index.php"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 480 480" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-db70"></use></svg><svg class="u-svg-content" viewBox="0 0 480 480" x="0px" y="0px" id="svg-db70" style="enable-background:new 0 0 480 480;"><g><g><path d="M339.904,161.776l-5.136-16.904c-6.524-19.202-27.379-29.479-46.581-22.955c-10.802,3.67-19.285,12.153-22.955,22.955    l-5.136,16.904c-4.322,14.256-5.229,29.329-2.648,44c2.354,12.352,10.196,22.964,21.312,28.84L273.008,363.2    c-0.77,7.177,1.558,14.342,6.4,19.696c10.413,11.39,28.089,12.182,39.479,1.769c0.616-0.563,1.206-1.153,1.769-1.769    c4.734-5.202,7.058-12.157,6.4-19.16L321.272,234.6c11.101-5.879,18.93-16.484,21.28-28.824    C345.133,191.105,344.226,176.032,339.904,161.776z M326.792,202.992c-1.732,8.874-8.056,16.155-16.6,19.112    c-3.243,1.219-5.332,4.387-5.176,7.848L311.096,365c0.28,2.649-0.594,5.29-2.4,7.248c-4.817,4.769-12.575,4.769-17.392,0    c-1.896-2.116-2.757-4.964-2.352-7.776l6.032-134.52c0.156-3.461-1.933-6.629-5.176-7.848c-8.544-2.957-14.868-10.238-16.6-19.112    c-2.14-12.18-1.386-24.693,2.2-36.528l5.136-16.912c3.974-10.745,15.906-16.234,26.652-12.26c5.681,2.101,10.159,6.58,12.26,12.26    l5.136,16.912C328.174,178.3,328.928,190.812,326.792,202.992z"></path>
</g>
</g><g><g><path d="M216,120c-4.418,0-8,3.582-8,8v68.688l-21.656,21.656c-1.602,1.596-2.454,3.797-2.344,6.056l7,140    c0.167,3.019-0.929,5.972-3.024,8.152c-4.379,4.418-11.511,4.45-15.93,0.07c-0.024-0.023-0.047-0.047-0.07-0.07    c-2.096-2.18-3.191-5.133-3.024-8.152l7.048-140c0.112-2.258-0.737-4.458-2.336-6.056L152,196.688V128c0-4.418-3.582-8-8-8    s-8,3.582-8,8v72c0,2.122,0.844,4.156,2.344,5.656l21.488,21.496l-6.824,136.472c-0.726,14.907,10.77,27.581,25.677,28.307    c14.907,0.726,27.581-10.77,28.307-25.677c0.043-0.876,0.043-1.753,0-2.629l-6.824-136.472l21.488-21.496    c1.5-1.5,2.344-3.534,2.344-5.656v-72C224,123.582,220.418,120,216,120z"></path>
</g>
</g><g><g><path d="M168,120c-4.418,0-8,3.582-8,8v64c0,4.418,3.582,8,8,8s8-3.582,8-8v-64C176,123.582,172.418,120,168,120z"></path>
</g>
</g><g><g><path d="M192,120c-4.418,0-8,3.582-8,8v64c0,4.418,3.582,8,8,8s8-3.582,8-8v-64C200,123.582,196.418,120,192,120z"></path>
</g>
</g><g><g><path d="M240,0C107.452,0,0,107.452,0,240s107.452,240,240,240s240-107.452,240-240C479.85,107.514,372.486,0.15,240,0z M240,464    C116.288,464,16,363.712,16,240S116.288,16,240,16s224,100.288,224,224C463.859,363.653,363.653,463.859,240,464z"></path>
</g>
</g><g><g><path d="M265.969,390.172c-0.429-4.397-4.342-7.614-8.74-7.185c-0.103,0.01-0.206,0.022-0.309,0.036l0.032-0.008    c-11.263,1.308-22.641,1.308-33.904,0c-4.39-0.515-8.365,2.626-8.88,7.016c-0.515,4.39,2.626,8.365,7.016,8.88    c12.491,1.459,25.109,1.459,37.6,0C263.181,398.483,266.398,394.57,265.969,390.172z"></path>
</g>
</g><g><g><path d="M362.4,136.912c-2.839-3.385-7.885-3.828-11.27-0.988c-0.011,0.009-0.022,0.019-0.034,0.028    c-3.377,2.848-3.807,7.894-0.96,11.272c48.235,57.26,44.545,141.929-8.488,194.776c-3.13,3.119-3.139,8.186-0.02,11.316    c3.119,3.13,8.186,3.139,11.316,0.02C411.881,294.623,415.991,200.541,362.4,136.912z"></path>
</g>
</g><g><g><g><path d="M186.392,105.744c-0.005,0-0.01-0.001-0.015-0.001c-0.008,0-0.016,0.001-0.025,0.001H186.392z"></path><path d="M277.736,84.472c-31.265-7.493-64.055-5.479-94.168,5.784c-4.136,1.555-6.227,6.169-4.672,10.304     c1.172,3.117,4.152,5.18,7.481,5.183c0.957-0.005,1.905-0.18,2.799-0.519c27.118-10.141,56.646-11.952,84.8-5.2     c4.295,1.038,8.618-1.601,9.656-5.896C284.67,89.833,282.031,85.51,277.736,84.472z"></path>
</g>
</g>
</g><g><g><path d="M137.992,341.6C111.023,314.677,95.908,278.108,96,240c-0.079-30.446,9.565-60.122,27.528-84.704    c2.655-3.532,1.944-8.547-1.588-11.202s-8.547-1.944-11.202,1.588c-0.047,0.063-0.093,0.126-0.138,0.19    c-46.253,63.588-39.447,151.359,16.056,207.056c3.128,3.13,8.202,3.132,11.332,0.004C141.118,349.804,141.12,344.73,137.992,341.6    z"></path>
</g>
</g></svg></span>
                    <h5 class="u-text u-text-2">FOOD</h5>
                    <p class="u-text u-text-palette-5-dark-2 u-text-3">This section contains vegetable vendors contact numbers  by which user will easily know the availability of fresh vegetable to their respective area.By which no one will face difficulty in buying vegetables at high rates and also it will help vegetable vendors to sell their veggies at reasonable rates.</p>
                    <a href="../food/index.php" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-20">
              <div class="u-layout-col">
                <div class="u-align-center u-container-style u-layout-cell u-palette-3-light-1 u-size-40 u-layout-cell-3" data-href="../hospital/index.php">
                  <div class="u-container-layout u-valign-top u-container-layout-3"><span class="u-icon u-icon-circle u-palette-5-light-2 u-spacing-18 u-icon-2" data-href="../hospital/index.php"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 64 64" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4457"></use></svg><svg class="u-svg-content" viewBox="0 0 64 64" id="svg-4457"><path d="m61 20h-13v-17c0-.553-.448-1-1-1h-30c-.552 0-1 .447-1 1v17h-13c-.552 0-1 .447-1 1v40c0 .553.448 1 1 1h58c.552 0 1-.447 1-1v-40c0-.553-.448-1-1-1zm-57 2h12v38h-12zm31 28v10h-6v-10zm11 10h-9v-10h2v-2h-14v2h2v10h-9v-56h28zm14 0h-12v-38h12z"></path><path d="m51 32h6c.552 0 1-.447 1-1v-6c0-.553-.448-1-1-1h-6c-.552 0-1 .447-1 1v6c0 .553.448 1 1 1zm1-6h4v4h-4z"></path><path d="m51 42h6c.552 0 1-.447 1-1v-6c0-.553-.448-1-1-1h-6c-.552 0-1 .447-1 1v6c0 .553.448 1 1 1zm1-6h4v4h-4z"></path><path d="m51 52h6c.552 0 1-.447 1-1v-6c0-.553-.448-1-1-1h-6c-.552 0-1 .447-1 1v6c0 .553.448 1 1 1zm1-6h4v4h-4z"></path><path d="m13 24h-6c-.552 0-1 .447-1 1v6c0 .553.448 1 1 1h6c.552 0 1-.447 1-1v-6c0-.553-.448-1-1-1zm-1 6h-4v-4h4z"></path><path d="m21 28h4c.552 0 1-.447 1-1v-4c0-.553-.448-1-1-1h-4c-.552 0-1 .447-1 1v4c0 .553.448 1 1 1zm1-4h2v2h-2z"></path><path d="m34 22h-4c-.552 0-1 .447-1 1v4c0 .553.448 1 1 1h4c.552 0 1-.447 1-1v-4c0-.553-.448-1-1-1zm-1 4h-2v-2h2z"></path><path d="m38 23v4c0 .553.448 1 1 1h4c.552 0 1-.447 1-1v-4c0-.553-.448-1-1-1h-4c-.552 0-1 .447-1 1zm2 1h2v2h-2z"></path><path d="m21 36h4c.552 0 1-.447 1-1v-4c0-.553-.448-1-1-1h-4c-.552 0-1 .447-1 1v4c0 .553.448 1 1 1zm1-4h2v2h-2z"></path><path d="m34 30h-4c-.552 0-1 .447-1 1v4c0 .553.448 1 1 1h4c.552 0 1-.447 1-1v-4c0-.553-.448-1-1-1zm-1 4h-2v-2h2z"></path><path d="m43 30h-4c-.552 0-1 .447-1 1v4c0 .553.448 1 1 1h4c.552 0 1-.447 1-1v-4c0-.553-.448-1-1-1zm-1 4h-2v-2h2z"></path><path d="m21 44h4c.552 0 1-.447 1-1v-4c0-.553-.448-1-1-1h-4c-.552 0-1 .447-1 1v4c0 .553.448 1 1 1zm1-4h2v2h-2z"></path><path d="m34 38h-4c-.552 0-1 .447-1 1v4c0 .553.448 1 1 1h4c.552 0 1-.447 1-1v-4c0-.553-.448-1-1-1zm-1 4h-2v-2h2z"></path><path d="m43 38h-4c-.552 0-1 .447-1 1v4c0 .553.448 1 1 1h4c.552 0 1-.447 1-1v-4c0-.553-.448-1-1-1zm-1 4h-2v-2h2z"></path><path d="m13 34h-6c-.552 0-1 .447-1 1v6c0 .553.448 1 1 1h6c.552 0 1-.447 1-1v-6c0-.553-.448-1-1-1zm-1 6h-4v-4h4z"></path><path d="m13 44h-6c-.552 0-1 .447-1 1v6c0 .553.448 1 1 1h6c.552 0 1-.447 1-1v-6c0-.553-.448-1-1-1zm-1 6h-4v-4h4z"></path><path d="m26 16h3v3c0 .553.448 1 1 1h4c.552 0 1-.447 1-1v-3h3c.552 0 1-.447 1-1v-4c0-.553-.448-1-1-1h-3v-3c0-.553-.448-1-1-1h-4c-.552 0-1 .447-1 1v3h-3c-.552 0-1 .447-1 1v4c0 .553.448 1 1 1zm1-4h3c.552 0 1-.447 1-1v-3h2v3c0 .553.448 1 1 1h3v2h-3c-.552 0-1 .447-1 1v3h-2v-3c0-.553-.448-1-1-1h-3z"></path><path d="m42 56h2v2h-2z"></path><path d="m42 52h2v2h-2z"></path><path d="m42 48h2v2h-2z"></path></svg></span>
                    <h5 class="u-text u-text-4">HOSPITAL</h5>
                    <p class="u-text u-text-palette-5-dark-2 u-text-5">This section contains the contact numbers of every district's civil/government hospital. These hospital's would be able to provide precise information regarding availability of medical assistance, beds, oxygen, etc.</p>
                    <a href="../hospital/index.php" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2">more</a>
                  </div>
                </div>
                <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-20 u-layout-cell-4">
                  <div class="u-container-layout u-container-layout-4"></div>
                </div>
              </div>
            </div>
            <div class="u-size-20">
              <div class="u-layout-col">
                <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-20 u-layout-cell-5">
                  <div class="u-container-layout u-container-layout-5"></div>
                </div>
                <div class="u-align-center u-container-style u-layout-cell u-palette-3-light-2 u-size-40 u-layout-cell-6" data-href="../medicines/index.php">
                  <div class="u-container-layout u-valign-top u-container-layout-6"><span class="u-icon u-icon-circle u-palette-5-light-2 u-spacing-18 u-icon-3" data-href="../medicines/index.php"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-dde7"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-dde7" style="enable-background:new 0 0 512 512;"><g><g><path d="M125.696,125.994c-5.52,0-10,4.48-10,10s4.48,10,10,10c5.52,0,10-4.48,10-10S131.216,125.994,125.696,125.994z"></path>
</g>
</g><g><g><path d="M215.691,312.984h-29.998v-29.998c0-5.522-4.478-10-10-10s-9.999,4.478-9.999,10v29.998h-29.998    c-5.522,0-10,4.478-10,9.999s4.478,10,10,10h29.998v29.998c0,5.522,4.478,10,9.999,10s10-4.478,10-10v-29.998h29.998    c5.522,0,10-4.478,10-10S221.214,312.984,215.691,312.984z"></path>
</g>
</g><g><g><path d="M485.578,321.984c-22.105-38.286-70.981-51.389-109.274-29.279l-40.618,23.45v-86.836c0-10.735-3.55-21.388-9.999-29.998    l-49.997-66.661v-28.386c11.638-4.128,19.999-15.242,19.999-28.279V29.998C295.687,13.457,282.23,0,265.689,0H85.698    C69.157,0,55.699,13.457,55.699,29.998v45.998c0,13.035,8.361,24.151,19.999,28.279v28.386l-50.001,66.665    c-6.446,8.606-9.996,19.258-9.996,29.993v193.66c0,27.569,22.429,49.997,49.997,49.997h160.702    c22.421,37.583,70.767,50.161,108.664,28.279L456.3,431.258C494.255,409.34,507.794,360.479,485.578,321.984z M75.698,29.998    c0-5.514,4.486-10,9.999-10h179.991c5.514,0,10,4.486,10,10v45.998c0,5.514-4.486,9.999-10,9.999H85.698    c-5.514,0-9.999-4.486-9.999-9.999V29.998z M41.701,211.319l51.996-69.326c1.298-1.73,2-3.836,2-6v-29.998h159.992v19.999h-89.995    c-5.522,0-10,4.478-10,10s4.478,10,10,10h94.995l48.993,65.322c3.202,4.275,5.191,9.39,5.792,14.674H35.913    C36.513,220.705,38.502,215.59,41.701,211.319z M65.699,452.977c-16.541,0-29.998-13.457-29.998-29.998v-10.099h181.675    c-3.171,12.965-3.15,26.813,0.481,40.098H65.699z M225.219,392.98H35.7V245.987h279.986V327.7l-60.619,35.002    C242.428,370.003,232.212,380.396,225.219,392.98z M325.066,483.935c-28.697,16.571-65.367,6.771-81.949-21.946    c-16.661-28.994-6.564-65.498,21.952-81.969l54.277-31.338l59.997,103.915L325.066,483.935z M446.3,413.939l-49.637,28.659    l-59.998-103.917l49.638-28.656c28.716-16.578,65.373-6.761,81.955,21.957C484.913,360.844,474.785,397.49,446.3,413.939z"></path>
</g>
</g></svg></span>
                    <h5 class="u-text u-text-6">MEDICINES</h5>
                    <p class="u-text u-text-palette-5-dark-2 u-text-7">This section contains the details of medical stores around the user area according to his/her prescription.<br>&nbsp;Medication of covid and the other diseases like Mucromycosis which are recently increased their availability to the medical stores.
                    </p>
                    <a href="../medicines/index.php" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-3">more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-4-light-2 u-section-3" id="sec-1c2b">
      <div class="u-expanded-width u-palette-1-base u-shape u-shape-rectangle u-shape-1"></div>
      <div class="u-clearfix u-gutter-26 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-size-20">
              <div class="u-layout-col">
                <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-20 u-layout-cell-1">
                  <div class="u-container-layout u-container-layout-1"></div>
                </div>
                <div class="u-align-center u-container-style u-layout-cell u-palette-3-light-2 u-size-40 u-layout-cell-2" data-href="../consultancy/index.php">
                  <div class="u-container-layout u-valign-top u-container-layout-2"><span class="u-icon u-icon-circle u-palette-5-light-2 u-spacing-18 u-icon-1" data-href="../consultancy/index.php"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 496 496" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8568"></use></svg><svg class="u-svg-content" viewBox="0 0 496 496" id="svg-8568"><path d="m248 129.078125 58.894531-49.078125h77.105469v-80h-192v80h56zm-40-65.078125v-48h160v48h-66.894531l-37.105469 30.921875v-30.921875zm0 0"></path><path d="m224 32h16v16h-16zm0 0"></path><path d="m256 32h64v16h-64zm0 0"></path><path d="m336 32h16v16h-16zm0 0"></path><path d="m407.238281 480-6.46875-64.761719c26.710938-4.222656 47.230469-27.351562 47.230469-55.238281v-104h-32v-11.054688c0-10.875-5.976562-20.640624-15.585938-25.648437 9.554688-8.777344 15.585938-21.328125 15.585938-35.296875v-16c0-26.472656-21.527344-48-48-48s-48 21.527344-48 48v16c0 20.710938 13.207031 38.34375 31.625 45.0625l-42.9375 42.9375h-44.863281c-.894531-13.335938-10.054688-24.960938-23.03125-28.671875l-32.792969-9.359375v-14.289062c9.792969-8.792969 16-21.503907 16-35.679688v-16c0-26.472656-21.527344-48-48-48s-48 21.527344-48 48v16c0 14.167969 6.207031 26.878906 16 35.679688v14.296874l-32.792969 9.359376c-13.664062 3.894531-23.207031 16.550781-23.207031 30.769531v29.894531h-32v48h16v128h-72v16h496v-16zm-71.238281-128v-36.6875l56.6875-56.6875c4.097656-4.097656 6.535156-9.601562 7.082031-15.34375.070313.558594.230469 1.085938.230469 1.664062v99.054688c0 13.230469-10.769531 24-24 24h-64v-16zm-24 64h40.761719l6.398437 64h-47.160156zm56.839844 0h15.921875l6.398437 64h-15.921875zm47.160156-72v-72h16v88c0 22.054688-17.945312 40-40 40h-80v-16h64c22.054688 0 40-17.945312 40-40zm-80-160v-16c0-17.648438 14.351562-32 32-32s32 14.351562 32 32v16c0 17.648438-14.351562 32-32 32s-32-14.351562-32-32zm-20.6875 104 53.375-53.375c1.671875-1.671875 3.984375-2.625 6.34375-2.625 4.945312 0 8.96875 4.023438 8.96875 8.96875 0 2.359375-.953125 4.671875-2.625 6.34375l-56.6875 56.6875h-84.6875c-4.414062 0-8-3.585938-8-8s3.585938-8 8-8zm-171.3125-120c0-17.648438 14.351562-32 32-32s32 14.351562 32 32v16c0 17.648438-14.351562 32-32 32s-32-14.351562-32-32zm32 64c5.617188 0 10.984375-1.023438 16-2.800781v8.59375c-1.984375 3.0625-7.496094 10.207031-16 10.207031s-14.015625-7.144531-16-10.207031v-8.59375c5.015625 1.777343 10.382812 2.800781 16 2.800781zm-72 42.105469c0-7.113281 4.777344-13.433594 11.601562-15.386719l32.957032-9.414062c4.640625 6.046874 13.671875 14.695312 27.441406 14.695312s22.800781-8.648438 27.441406-14.703125l32.957032 9.414063c6.128906 1.753906 10.402343 7.082031 11.257812 13.28125h-7.65625c-13.230469 0-24 10.769531-24 24 0 2.816406.574219 5.488281 1.472656 8h-113.472656zm-32 45.894531h248v16h-248zm16 64h24v-16h-24v-16h208v16h-168v16h168v96h-19.054688l-16-32h-137.890624l-16 32h-19.054688zm171.054688 96h-134.109376l8-16h118.109376zm0 0"></path></svg></span>
                    <h5 class="u-text u-text-1">CONSULTANCY</h5>
                    <p class="u-text u-text-palette-5-dark-2 u-text-2">This section contains the details of doctors of various region having expertise in their respective field. So no one will face the problem of improper medical consultancy and will recover and know early what actually happen to them instead of changing doctor and having lots of troubles in the patient mind.</p>
                    <a href="../consultancy/index.php" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-20">
              <div class="u-layout-col">
                <div class="u-align-center u-container-style u-layout-cell u-palette-3-light-1 u-size-40 u-layout-cell-3" data-href="../helpdesk/index.php">
                  <div class="u-container-layout u-valign-top u-container-layout-3"><span class="u-icon u-icon-circle u-palette-5-light-2 u-spacing-18 u-icon-2" data-href="../helpdesk/index.php"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d8d6"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-d8d6"><g><circle cx="255.999" cy="63.75" r="63.75"></circle><path d="m477.741 337.91v-30h-66.98l-96.385-117.437c-12.896-18.405-34.247-30.473-58.377-30.473-24.209 0-45.624 12.147-58.506 30.656l-95.935 117.254h-67.299v30zm-150.491-30v-54.464l44.701 54.464zm-186.929 0 44.429-54.302v54.302z"></path><path d="m173.775 512h77.594v-30h-47.594v-26.477h44.085v-30h-44.085v-26.475h47.594v-30h-77.594z"></path><path d="m312.242 368.103h-30v143.897h69.917v-30h-39.917z"></path><path d="m113.026 423.049h-48.885v-55.042h-30v143.993h30v-58.951h48.885v58.951h30v-143.993h-30z"></path><path d="m430.06 368.007h-46.741-.048l.048 143.993h30v-49.596c6.196-.031 12.86-.059 16.741-.059 26.356 0 47.799-21.16 47.799-47.169s-21.442-47.169-47.799-47.169zm0 64.338c-3.869 0-10.445.027-16.603.059-.031-6.386-.076-27.723-.095-34.396h16.697c9.648 0 17.799 7.862 17.799 17.169.001 9.305-8.15 17.168-17.798 17.168z"></path>
</g></svg></span>
                    <h5 class="u-text u-text-3">HELPDESK</h5>
                    <p class="u-text u-text-palette-5-dark-2 u-text-4">This section contains emergency helpline numbers of every individual district. The helpline numbers include District Control Room and Women Child Helpline. These numbers are to be contacted for covid 19 emergency purposes</p>
                    <a href="../helpdesk/index.php" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2">more</a>
                  </div>
                </div>
                <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-20 u-layout-cell-4">
                  <div class="u-container-layout u-container-layout-4"></div>
                </div>
              </div>
            </div>
            <div class="u-size-20">
              <div class="u-layout-col">
                <div class="u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-20 u-layout-cell-5">
                  <div class="u-container-layout u-container-layout-5"></div>
                </div>
                <div class="u-align-center u-container-style u-layout-cell u-palette-3-light-2 u-size-40 u-layout-cell-6" data-href="../ngo/index.php">
                  <div class="u-container-layout u-valign-top u-container-layout-6"><span class="u-icon u-icon-circle u-palette-5-light-2 u-spacing-18 u-icon-3" data-href="../ngo/index.php"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e146"></use></svg><svg class="u-svg-content" viewBox="0 0 512 512" id="svg-e146"><g><path d="m134.156 392.044c-3.134.977-5.27 3.878-5.27 7.161v67.078c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-42.999l31.667 45.9c2.248 3.226 5.969 4.595 9.473 3.495 3.588-1.128 5.907-4.528 5.907-8.735l-.623-64.952c-.04-4.117-3.389-7.428-7.498-7.428-.024 0-.049 0-.073 0-4.142.04-7.468 3.43-7.428 7.572l.421 43.892-33.172-48.081c-1.865-2.705-5.273-3.876-8.404-2.903z"></path><path d="m258.521 406.564c5.202 0 10.246 1.547 14.586 4.474 3.436 2.317 8.096 1.409 10.412-2.025 2.315-3.435 1.408-8.096-2.025-10.412-6.827-4.603-14.771-7.036-22.973-7.036-22.658 0-41.093 18.448-41.093 41.124 0 22.66 18.434 41.095 41.093 41.095 21.477 0 36.477-16.899 36.477-41.095 0-4.143-3.357-7.5-7.5-7.5h-20.082c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h11.837c-1.982 9.698-8.121 18.595-20.732 18.595-14.387 0-26.092-11.706-26.092-26.095-.001-14.406 11.704-26.125 26.092-26.125z"></path><path d="m394.218 432.688c0-22.676-18.422-41.124-41.065-41.124-22.658 0-41.093 18.448-41.093 41.124 0 22.66 18.435 41.095 41.093 41.095 22.643 0 41.065-18.435 41.065-41.095zm-67.158 0c0-14.405 11.705-26.124 26.093-26.124 14.372 0 26.065 11.719 26.065 26.124 0 14.389-11.692 26.095-26.065 26.095-14.388 0-26.093-11.706-26.093-26.095z"></path><path d="m437.334 353.347-152.81-.028h-.001c-4.142 0-7.499 3.357-7.5 7.499s3.356 7.5 7.499 7.501l150.382.028v128.653h-346.704v-128.653l155.962-.028c4.142-.001 7.5-3.359 7.499-7.501-.001-4.143-3.359-7.5-7.502-7.499l-158.389.028c-6.931 0-12.57 5.642-12.57 12.575v133.503c0 6.934 5.639 12.575 12.57 12.575h351.563c6.932 0 12.57-5.642 12.57-12.575v-133.503c.001-6.934-5.638-12.575-12.569-12.575z"></path><path d="m494.846 235.686c-11.361-11.769-30.097-11.692-44.413-.161-14.331-11.535-33.057-11.602-44.411.16-13.53 14.009-13.533 36.829-.007 50.87.043.045.087.089.131.133l36.242 35.963c2.097 2.087 5.009 3.879 8.031 3.879 3.032 0 5.956-1.785 8.06-3.879l36.242-35.963c.044-.044.088-.088.131-.133 13.526-14.041 13.524-36.861-.006-50.869zm-10.737 40.401-33.675 33.415-29.385-29.177-4.291-4.238c-7.932-8.3-7.915-21.732.054-29.983 6.975-7.223 18.327-4.272 25.481 2.186.533.479.959.885 1.307 1.216 1.387 1.32 3.45 3.286 6.762 3.286.037.001.075.001.116 0 3.332 0 5.419-1.983 6.82-3.314.343-.326.759-.723 1.291-1.2 7.14-6.446 18.491-9.398 25.468-2.172 7.967 8.249 7.983 21.681.052 29.981z"></path><path d="m105.854 286.688c.046-.046.092-.093.138-.14 13.488-14.037 13.485-36.852-.012-50.863-11.347-11.754-30.081-11.687-44.425-.171-14.327-11.522-33.046-11.59-44.399.17-13.531 14.009-13.534 36.829-.007 50.87.038.039.075.077.113.115l36.261 35.983c2.103 2.084 5.003 3.877 8.03 3.877 3.042 0 5.919-1.787 8.03-3.877l31.91-31.656zm-10.616-10.598-33.685 33.4-33.653-33.395c-7.941-8.3-7.927-21.737.046-29.991 6.975-7.224 18.326-4.272 25.48 2.187.534.479.959.885 1.307 1.216 1.387 1.32 3.45 3.285 6.761 3.285h.059c3.358.062 5.425-1.957 6.82-3.285.348-.331.773-.737 1.314-1.223 7.16-6.445 18.53-9.399 25.496-2.186 7.949 8.253 7.967 21.688.055 29.992z"></path><path d="m110.594 187.219 22.093 21.943c2.938 2.918 7.687 2.901 10.607-.036 2.919-2.938 2.903-7.688-.036-10.607l-22.035-21.886c-37.126-38.569-37.107-101.273.055-139.817 34.755-36.036 89.292-23.231 122.959 7.112 2.105 1.897 3.829 3.538 5.214 4.855 4.25 4.042 7.057 6.713 11.393 6.713 4.312 0 7.103-2.656 11.327-6.678 1.394-1.326 3.127-2.976 5.25-4.89 33.668-30.345 88.206-43.151 122.96-7.114 37.162 38.545 37.179 101.253.054 139.821l-16.081 15.983-56.797 56.334-28.466-28.617c20.143-20.599 34.739-37.137 40.126-56.229 6.298-22.319-1.487-45.216-24.498-72.058-.018-.021-.04-.038-.059-.059-10.763-13.014-30.854-20.781-53.83-20.781-22.979 0-43.072 7.769-53.833 20.786-.017.02-.037.035-.054.054-23.01 26.839-30.791 49.736-24.488 72.059 5.386 19.076 19.976 35.617 40.117 56.227l-28.461 28.611-27.77-27.55c-2.94-2.916-7.689-2.897-10.607.042-2.918 2.94-2.898 7.689.042 10.607l32.984 32.722c.032.033.059.069.092.101.034.034.072.063.107.096l27.819 27.598c.007.007.012.014.019.021.008.008.016.014.024.021l28.517 28.291c1.456 1.445 7.247 7.104 11.497 8.477 4.95 1.6 10.301-.239 14-3.707 1.809-1.696 3.718-3.016 5.488-4.769l118.6-117.633 16.146-16.047c.038-.037.075-.075.112-.114 42.714-44.304 42.714-116.393-.001-160.698-18.459-19.138-43.96-28.393-71.785-26.045-25.633 2.159-51.209 13.676-72.018 32.43-2.273 2.051-4.089 3.778-5.547 5.166-.329.312-.667.635-1 .949-.346-.326-.699-.662-1.041-.987-1.45-1.38-3.254-3.096-5.509-5.129-20.807-18.753-46.383-30.27-72.016-32.429-27.833-2.347-53.325 6.905-71.784 26.046-42.716 44.305-42.716 116.394 0 160.699.037.039.075.078.114.116zm205.802-67.939c21.82 34.986 5.516 56.248-27.859 90.394l-17.181-17.44 15.142-15.367c20.277-20.602 28.169-34.256 29.898-57.587zm-55.568 62.267-14.973-15.199c-11.502-11.7-18.289-20.297-22.026-30.252 8.758-6.548 22.195-10.368 37-10.368 14.809 0 28.249 3.822 37.007 10.374-3.735 9.959-10.521 18.55-22.026 30.24zm-40.8-81.644c8.271-8.497 23.606-13.695 40.801-13.695 17.196 0 32.531 5.198 40.802 13.695.279 7.996.216 14.691-.364 20.582-22.766-13.013-58.104-13.022-80.874-.011-.581-5.888-.644-12.58-.365-20.571zm-15.27 159.607 28.334-28.484 17.186 17.432-28.204 28.23zm61.289 50.45s-4.118 3.705-5.218 4.456c-1.103-.75-5.218-4.456-5.218-4.456l-22.889-22.708 28.12-28.145 28.099 28.146zm33.544-33.27-62.916-63.396c-35.732-36.311-53.974-57.825-31.411-94.015 1.731 23.309 9.626 36.968 29.9 57.591l81.742 82.646z"></path>
</g></svg></span>
                    <h5 class="u-text u-text-5">NGO's</h5>
                    <p class="u-text u-text-palette-5-dark-2 u-text-6">This section contains contact numbers and donation links for various ngo's available across the country. This section can be used to either donate in any form or also request help from the available ngo's.</p>
                    <a href="../ngo/index.php" class="u-align-center u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-3">more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-custom-color-2 u-section-4" id="carousel_d7ee">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-33-md u-size-33-sm u-size-33-xs u-size-38-lg u-size-38-xl u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-text u-text-1">EXPERIENCE OUR SERVICES</h2>
                  <p class="u-align-justify u-text u-text-2">This website is very benefit and Created to provide hospitals information and other care providers like ngo's,PM relief fund, and women and child help number ,control room number , also helpline no of all states and union territories  to communicate their space needs; and for hotels and others with multi-unit or high-occupancy residential facilities to indicate their capacity and willingness to consider these urgent needs.The Center for Health Design’s website, as well as from partner organizations,&nbsp;to help healthcare facilities address near-term needs related to the current COVID-19 pandemic, as well as to better inform plans and projects in development now and in the future.Website also facilitates docter concenties,medicals enquiry number and also food vendors .&nbsp;While these resources were created to help minimize the impact of infections and transmittable diseases in healthcare facilities, much of the research and guidance is relevant and useful in any built environment.We surely guarantee you  this website will benefit you in all your needs and make ur life easy.<br>&nbsp;<br>We hope you find these resources informative and helpful as you navigate these uncertain days, and that you and yours remain in good health.
                  </p>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-palette-1-base u-size-22-lg u-size-22-xl u-size-27-md u-size-27-sm u-size-27-xs u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <h4 class="u-text u-text-3">Benefits of our Covid 19 Amenities Webpage for Users</h4>
                  <ul class="u-custom-list u-spacing-10 u-text u-text-4">
                    <li>
                      <div class="u-list-icon u-text-white">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-311a"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>
                    </li>
                    <li>1. Safe and Secure login system</li>
                    <li>
                      <div class="u-list-icon u-text-white">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-311a"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>
                      <br>2. Day to Day knowledege of Covid&nbsp;
                    </li>
                    <li>
                      <div class="u-list-icon u-text-white">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-311a"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>
                      <br>3. Reliable and Supportive doctors for consultancy
                    </li>
                    <li>
                      <div class="u-list-icon u-text-white">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-311a"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>
                      <br>4. Ngo's and Donation Links
                    </li>
                    <li>
                      <div class="u-list-icon u-text-white">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-311a"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>
                      <br>5. Hospital information ,medicines&nbsp;
                    </li>
                    <li>
                      <div class="u-list-icon u-text-white">
                        <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-311a"><path d="m433.1 67.1-231.8 231.9c-6.2 6.2-16.4 6.2-22.6 0l-99.8-99.8-78.9 78.8 150.5 150.5c10.5 10.5 24.6 16.3 39.4 16.3 14.8 0 29-5.9 39.4-16.3l282.7-282.5z" fill="currentColor"></path></svg>
                      </div>
                      <br>6. Women and child ,control helpline no.<br>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="carousel_966c" class="u-carousel u-slide u-block-3514-1" data-u-ride="carousel" data-interval="5000">
      <ol class="u-absolute-hcenter u-carousel-indicators u-block-3514-2">
        <li data-u-target="#carousel_966c" data-u-slide-to="0" class="u-active u-grey-30"></li>
        <li data-u-target="#carousel_966c" class="u-grey-30" data-u-slide-to="1"></li>
        <li data-u-target="#carousel_966c" class="u-grey-30" data-u-slide-to="2"></li>
        <li data-u-target="#carousel_966c" class="u-grey-30" data-u-slide-to="3"></li>
        <li data-u-target="#carousel_966c" class="u-grey-30" data-u-slide-to="4"></li>
        <li data-u-target="#carousel_966c" class="u-grey-30" data-u-slide-to="5"></li>
      </ol>
      <div class="u-carousel-inner" role="listbox">
        <div class="u-active u-carousel-item u-clearfix u-palette-4-light-2 u-section-5-1">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-custom-font u-font-oswald u-text u-text-palette-2-dark-2 u-text-1" data-animation-name="jackInTheBox" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">MEET OUR ​TEAM</h2>
            <div class="u-container-style u-group u-palette-3-light-1 u-group-1" data-href="https://www.instagram.com/riteshpokarne/" data-target="_blank">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <div alt="" class="u-align-left u-image u-image-circle u-image-1" data-image-width="668" data-image-height="697" data-href="https://www.instagram.com/riteshpokarne/" data-target="_blank"></div>
                <p class="u-align-center u-large-text u-text u-text-variant u-text-2">"Hello, I am Ritesh Pokarne Captain of our Group. A highly energetic and enthusiastic student pursuing   B-TECH in VIT PUNE."</p>
                <h3 class="u-align-center u-text u-text-3">RITESH&nbsp;<span style="font-weight: 700;"></span> POKARNE
                </h3>
                <h6 class="u-align-center u-text u-text-4">LEADER</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="u-carousel-item u-clearfix u-palette-4-light-2 u-section-5-2">
          <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-custom-font u-font-oswald u-text u-text-palette-2-dark-2 u-text-1" data-animation-name="jackInTheBox" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">MEET OUR ​TEAM</h2>
            <div class="u-container-style u-group u-palette-3-light-1 u-group-1" data-href="https://www.instagram.com/_piyush_snr/" data-target="_blank">
              <div class="u-container-layout u-container-layout-1">
                <div alt="" class="u-align-left u-image u-image-circle u-image-1" data-image-width="635" data-image-height="734" data-href="https://www.instagram.com/_piyush_snr/" data-target="_blank"></div>
                <p class="u-align-center u-large-text u-text u-text-variant u-text-2">Hello, I am Piyush Sonar Tech-Ninja of our Group. A Creative, Honest and Flexible student pursuing   B-TECH in VIT PUNE</p>
                <h5 class="u-align-center u-text u-text-3">PIYUSH SONAR</h5>
                <h6 class="u-align-center u-text u-text-4">CO - LEADER</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="u-carousel-item u-clearfix u-palette-4-light-2 u-section-5-3">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-container-style u-group u-palette-3-light-1 u-group-1" data-href="https://www.instagram.com/harshpoddar20/" data-target="_blank">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <div alt="" class="u-align-left u-image u-image-circle u-image-1" data-image-width="1111" data-image-height="1280" data-href="https://www.instagram.com/harshpoddar20/"></div>
                <p class="u-align-center u-large-text u-text u-text-variant u-text-1">Hello, I am Harsh Poddar Coder of our Group. A Helpfull, love coding and Polite student pursuing   B-TECH in VIT PUNE."</p>
                <h5 class="u-align-center u-text u-text-2">HARSH PODDAR</h5>
                <h6 class="u-align-center u-text u-text-3">CODER</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="u-carousel-item u-clearfix u-palette-4-light-2 u-section-5-4">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-container-style u-group u-palette-3-light-1 u-group-1" data-href="https://www.instagram.com/jastronile/" data-target="_blank">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <div alt="" class="u-align-left u-image u-image-circle u-image-1" data-image-width="959" data-image-height="1280" data-href="https://www.instagram.com/jastronile/" data-target="_blank"></div>
                <p class="u-align-center u-large-text u-text u-text-variant u-text-1">"Hello, I am Parikshit Pohane Executive Assistant of our Group. A Bold, Chivalrous and Prime  student pursuing  B-TECH in VIT PUNE."</p>
                <h5 class="u-align-center u-text u-text-2">PARIKSHIT POHANE</h5>
                <h6 class="u-align-center u-text u-text-3">EXECUTIVE ASSISTANT</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="u-carousel-item u-clearfix u-palette-4-right-2 u-section-5-5">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-container-style u-group u-palette-3-light-1 u-group-1" data-href="https://www.instagram.com/tanmaypol1004/" data-target="_blank">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <div alt="" class="u-align-left u-image u-image-circle u-image-1" data-image-width="861" data-image-height="1280" data-href="https://www.instagram.com/tanmaypol1004/" data-target="_blank"></div>
                <p class="u-align-center u-large-text u-text u-text-variant u-text-1">"Hello, I am Tanmay Pol Project Meanie of our Group. A student pursuing B-TECH in VIT PUNE."</p>
                <h5 class="u-align-center u-text u-text-2">TANMAY POL</h5>
                <h6 class="u-align-center u-text u-text-3">PROJECT MEANIE</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="u-carousel-item u-clearfix u-palette-4-light-2 u-section-5-6">
          <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-container-style u-group u-palette-3-light-1 u-group-1" data-href="https://www.instagram.com/ronit_pokharna108/" data-target="_blank">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <div alt="" class="u-align-left u-image u-image-circle u-image-1" data-image-width="456" data-image-height="448" data-href="https://www.instagram.com/ronit_pokharna108/" data-target="_blank"></div>
                <p class="u-align-center u-large-text u-text u-text-variant u-text-1">Hello, I am Ronit Pokharna Researcher of our Group.&nbsp;An Optimistic&nbsp; student pursuing&nbsp; &nbsp;B-TECH in VIT PUNE.</p>
                <h5 class="u-align-center u-text u-text-2">RONIT POKHARNA</h5>
                <h6 class="u-align-center u-text u-text-3">RESEARCHER</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-icon-circle u-palette-1-base u-spacing-10 u-block-3514-5" href="#carousel_966c" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-icon-circle u-palette-1-base u-spacing-10 u-block-3514-6" href="#carousel_966c" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </section>
  <section class="u-clearfix u-palette-3-light-2 u-section-7" id="sec-baea">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-left u-social-icons u-spacing-20 u-social-icons-1">
          <a class="u-social-url" target="_blank" href="https://drive.google.com/file/d/1-LkstWKZ6UY4CH1s3Mw11nFZJR923nPf/view?usp=sharing"><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b746"></use></svg>
          <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-b746" class="u-svg-content"><path d="M56.1,0C25.1,0,0,25.1,0,56.1c0,31,25.1,56.1,56.1,56.1c31,0,56.1-25.1,56.1-56.1C112.2,25.1,87.1,0,56.1,0z M71.6,34.3h-8.2c-1.3,0-3.2,0.7-3.2,3.5v7.6h11.3l-1.3,12.9h-10V95H45V58.3h-7.2V45.4H45v-8.3c0-6,2.8-15.3,15.3-15.3l11.2,0V34.3z "></path></svg>
        </span>
          </a>
          <a class="u-social-url" target="_blank" href="https://drive.google.com/file/d/1rZFsQdeYMaBexvCIg5mBWb7H0E1VIxKW/view?usp=sharing"><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ee89"></use></svg>
          <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-ee89" class="u-svg-content"><path d="M56.1,0C25.1,0,0,25.1,0,56.1s25.1,56.1,56.1,56.1s56.1-25.1,56.1-56.1S87.1,0,56.1,0z M83.8,47.3 c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2c-7.6,0-14.6-2.2-20.6-6c1,0.1,2.1,0.2,3.2,0.2c6.3,0,12.1-2.1,16.7-5.7 c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1c0-0.1,0-0.1,0-0.2 c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14c-0.2-1-0.3-2-0.3-3.1 c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4c2.7-0.3,5.3-1,7.7-2.1 C88.7,43,86.4,45.4,83.8,47.3z"></path></svg>
        </span>
          </a>
          <a class="u-social-url" target="_blank" href="https://drive.google.com/file/d/1MfDfmaRxNNIctZ4UQieABK_ra9Hia9v7/view?usp=sharing"><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1a1a"></use></svg>
          <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-1a1a" class="u-svg-content"><path d="M56.1,0C25.1,0,0,25.1,0,56.1c0,31,25.1,56.1,56.1,56.1c31,0,56.1-25.1,56.1-56.1C112.2,25.1,87.1,0,56.1,0z M90.6,73.4c0,9.6-7.8,17.5-17.5,17.5H38.6c-9.6,0-17.5-7.9-17.5-17.6V38.8c0-9.6,7.8-17.5,17.5-17.5h34.5c9.6,0,17.5,7.8,17.5,17.5 V73.4z"></path><path d="M73.1,28.9H38.6c-5.4,0-9.9,4.4-9.9,9.9v34.5c0,5.4,4.4,9.9,9.9,9.9h34.5c5.4,0,9.9-4.4,9.9-9.9V38.8 C83,33.4,78.6,28.9,73.1,28.9z M55.9,74C46,74,38,66,38,56.1c0-9.9,8-17.9,17.9-17.9c9.9,0,17.9,8,17.9,17.9 C73.8,66,65.8,74,55.9,74z M74.3,41.9c-2.3,0-4.2-1.9-4.2-4.2s1.9-4.2,4.2-4.2c2.3,0,4.2,1.9,4.2,4.2S76.6,41.9,74.3,41.9z"></path><path d="M55.9,45.8c-5.7,0-10.4,4.6-10.3,10.3c0,5.7,4.6,10.3,10.3,10.3s10.3-4.6,10.3-10.3 C66.2,50.4,61.6,45.8,55.9,45.8z"></path></svg>
        </span>
          </a>
          <a class="u-social-url" target="_blank" href="https://drive.google.com/file/d/1DYBYx9EKKHYZaNT3bkSL_oe8MXrVhNCU/view?usp=sharing"><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-4">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-91b0"></use></svg>
          <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-91b0" class="u-svg-content"><path d="M62.1,49.3v-0.1C62.1,49.2,62,49.2,62.1,49.3L62.1,49.3z"></path><path d="M56.1,0C25.1,0,0,25.1,0,56.1s25.1,56.1,56.1,56.1c31,0,56.1-25.1,56.1-56.1S87.1,0,56.1,0z M41.3,83.7H27.9 V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7c4.6,0,7.4,3,7.5,7C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5H48.7c0,0,0.2-36.5,0-40.3h13.4 v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg>
        </span>
          </a>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-df68"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Thank You for Visiting !!<br>Please Experience our Services.
        </p>
      </div></footer>
   
  </body>
</html>