<!DOCTYPE html>
<html>
<head>
	<title>Careers</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="icon" href="favicon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/pre-loader.css">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/fontawesome/css/all.css" media="all">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/hover.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<noscript>
		<meta http-equiv="refresh" content="0;url=noscript.html">
	</noscript>
</head>
<body>

<?php include 'assets/includes/navbar.html';?>
<div class="bg-red">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Hiring</li>
  </ol>
</nav>
<section class="mb-3">
	<div class="container bg-white" style="border-radius: 0.25rem;">
		
	</div>
</section>
<script>
      window.fbMessengerPlugins = window.fbMessengerPlugins || {
        init: function () {
          FB.init({
            appId            : '1678638095724206',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.10'
          });
        }, callable: []
      };
      window.fbAsyncInit = window.fbAsyncInit || function () {
        window.fbMessengerPlugins.callable.forEach(function (item) { item(); });
        window.fbMessengerPlugins.init();
      };
      setTimeout(function () {
        (function (d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) { return; }
          js = d.createElement(s);
          js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      }, 0);
      </script>
      
      <div
        class="fb-customerchat"
        page_id="1807026922930469"
        ref="live-chat" 
        logged_in_greeting="Hi! Jelly Good Day!" 
        logged_out_greeting="Hi! Jelly Good Day!">
      </div>


<?php include 'assets/includes/footer.html';?>


<script src="assets/js/pace.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/wow.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.sticky.js"></script>
  <script src="assets/js/custom/careers-script.js"></script>
</body>
</html>