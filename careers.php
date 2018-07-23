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

<nav id="breadcrumb" aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Hiring</li>
  </ol>
</nav>
<section id="careers-section" class="mb-3">
	<div class="container bg-white pb-4" style="border-radius: 0.25rem; -moz-box-shadow: 3px 4px 10px 3px #890000;-webkit-box-shadow: 3px 4px 10px 3px #890000;box-shadow: 3px 4px 10px 3px #890000;">
      <div class="jumbotron jumbotron-fluid bg-white pt-4 pb-0 mb-0">
        <div class="container-fluid text-center">
          <h1 class="display-4 my-0">Join our team now!</h1>
          <p class="lead"></p>
        </div>
      </div>
      <div class="hiring">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 align-self-center">
              <img src="assets/img/join-us-now-min.png" class="img-fluid">
            </div>
            <div class="col-md-6 p-0">
              <div class="available-positions">
                <div>
                  <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <h1 class="my-2">ACCOUNTING OFFICER</h1>
                    <h6 class="mb-3">Responsible for processing accounting transactions and preparation of accounting reports on sales, financial statements, budget variance and other reports pertaining to the operations. </h6>
                    <h5 class="font-weight-bold">Job Qualification</h5>
                    <ul class="list-group pl-4">
                      <li>Must be graduate of Accountancy / Finance / Banking or Equivalent</li>
                      <li>Has good analytical Skills</li>
                      <li>Keen on Details</li>
                      <li>Having SAP Knowledge is an advantage</li>
                    </ul>
                    <button class="btn btn-apply hvr-bob mt-3" data-toggle="modal" data-target="#apply">Apply Now</button>
                  </li>
                  
                  <li class="list-group-item">
                    <h1 class="my-2">MANAGEMENT ENGINEER</h1>
                    <h6 class="mb-3"></h6>
                    <h5 class="font-weight-bold">Job Qualification</h5>
                    <ul class="list-group pl-4">
                      <li>Candidates must be a graduate of BS MANAGEMENT ENGINEERING</li>
                      <li>Must have at least 2 years relevant experience</li>
                      <li>Must possess excellent leadership skills and organizational skill</li>
                      <li>Have basic knowledge in business process and development</li>
                      <li>Advanced mathematical and analytical skill is required</li>
                    </ul>
                    <button class="btn btn-apply hvr-bob mt-3">Apply Now</button>
                  </li>

                  <li class="list-group-item">
                    <h1 class="my-2">WAREHOUSE OFFICER</h1>
                    <h6 class="mb-3">Responsible for making sure supplies, stock, materials, packages, and/or products are processed through the delivery and/or warehouse system efficiently and safely.</h6>
                    <h5 class="font-weight-bold">Job Qualification</h5>
                    <ul class="list-group pl-4">
                      <li>Should have a previous working experience in a same position </li>
                      <li>Honest and hardworking</li>
                      <li>Keen on Details</li>
                      <li>Have Basic Knowledge in MS Office</li>
                    </ul>
                    <button class="btn btn-apply hvr-bob mt-3">Apply Now</button>
                  </li>

                </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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


<!-- MODALS -->
<div class="modal fade" id="apply" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog mx-auto" role="document">
    <div class="modal-content">
      <div class="modal-header align-self-center">
        <img src="assets/img/logo-min-2.png" class="img-fluid pr-2" style="width: 15%">
        <h5 class="modal-title" id="exampleModalLabel">Application Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit Application</button>
      </div>
    </div>
  </div>
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