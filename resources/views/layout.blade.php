<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>MU Online Season 1 Progressive</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
<div class="smoke"></div>
	<!-- header section start -->
	<div class="header_section">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="/"><img src="images/site_logo.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <!--<li class="nav-item">
                  <a class="nav-link" href="index.html">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">ABOUT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="product.html">OUR PRODUCTS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="video.html">VIDEO GAMES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="remot.html">REMOT CONTROL</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">CONTACT US</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><img src="images/search-icon.png"></a>
                </li>-->
                <li class="nav-item">
                  <a class="nav-link" href="/">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/register">REGISTER</a>
                </li>
				<li class="nav-item">
                  <a class="nav-link" href="/roadmap">ROADMAP</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://drive.google.com/file/d/1BFBze-rSaIADoJ0y0vY3wNy-0p7ZFTtk/view?usp=share_link" target="_blank">DOWNLOAD CLIENT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/rankings">RANKINGS</a>
                </li>
              </ul>
            </div>
            
        </nav>
	</div>
	<!-- header section end -->
  <!-- banner section start -->
  <div id="middle-section">
	@yield('content')
  </div>
  <!-- footer section start -->
  <div class="section_footer ">
      <div class="container"> 
          <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4">
                  <h2 class="account_text">About Us</h2>
                  <p class="ipsum_text_2">We are group of MU Players that is passionate on bringing the old school gameplay to you</p>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                  <h2 class="account_text">Useful Link</h2>
                  <div class="useful_link">
                    <ul>
                      <li><a href="/rankings">Rankings</a></li>
                      <li><a href="/register">Register</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                <h2 class="account_text">Contact Us</h2>
                <p class="ipsum_text_2">For more information, please visit our <a href="https://web.facebook.com/worldofmuasia" target="_blank">Facebook Page</a> to know more</p>
                </div>
          <div class="col-sm-6 col-md-6 col-lg-3">

        </div>
      </div>
      <div class="social_icon">
        <ul>
          <li><a href="#"><img src="images/fb-icon.png"></a></li>
          <li><a href="#"><img src="images/twitter-icon.png"></a></li>
          <li><a href="#"><img src="images/linkdin-icon.png"></a></li>
          <li><a href="#"><img src="images/instagram-icon.png"></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- footer section end -->
  
  <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
        });
    });
    </script>
</body>
</html>