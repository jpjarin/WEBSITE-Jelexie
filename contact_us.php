<!DOCTYPE html>
<html>

<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
				<li class="breadcrumb-item"><a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
			</ol>
		</nav>
		<section id="contact-page" class="mt-4 pb-5">
			<div class="container bg-white" style="border-radius: 0.25rem; -moz-box-shadow: 3px 4px 10px 3px #890000;-webkit-box-shadow: 3px 4px 10px 3px #890000;box-shadow: 3px 4px 10px 3px #890000;">
				<div class="jumbotron jumbotron-fluid bg-white pt-5 pb-0 mb-0">
			        <div class="container-fluid text-center">
			          <h1 class="display-4 my-0">Send us a message</h1>
			          <p class="lead">Feel free to send us your comments and suggestions.</p>
			        </div>
			      </div>
				<div class="row py-3">
					<div class="col-sm-5">
						<div class="d-flex flex-column">
							<div class="container contact-details">
								<div class="detail">
									<div class="d-flex flex-row">
										<i class="fa fa-5x fa-envelope pr-3"></i>
										<div class="p-2 align-self-start">
											<h4 class="display-5">
												EMAIL ADDRESS
											</h4>
											<p>
												info@jelexie.com
											</p>
										</div>
									</div>
								</div>
								<div class="detail">
									<div class="d-flex flex-row">
										<i class="fa fa-5x fa-fax pr-3" aria-hidden="true"></i>
										<div class="px-2 align-self-start">
											<h4 class="display-5">
												FAX NO.
											</h4>
											<p class="number">
												+63 45 982-0256
											</p>
										</div>
									</div>
								</div>
								<div class="detail">
									<div class="d-flex flex-row">
										<i class="fa fa-5x fa-phone pr-3" aria-hidden="true"></i>
										<div class="px-2 align-self-start">
											<h4 class="display-5">
												TELEPHONE NO.
											</h4>
											<p class="number">
												+63 45 982-5598<br>
												+63 45 982-3398
											</p>
										</div>
									</div>
								</div>
								<!-- <div class="py-3">
									<div class="d-flex flex-row">
										<i class="fa fa-5x fa-store pr-3" aria-hidden="true"></i>
										<div class="px-2 align-self-start">
											<h4 class="display-5">
												FRANCHISE INQUIRY
											</h4>
											<p>
												
											</p>
										</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
					<div class="col-sm-7 order-first order-sm-1">
						<div class="contact-us">
							<div class="form">
								<!-- <div class="contact-heading text-left">
									<h3 class="mt-2">SEND US A MESSAGE</h3>
									<small style="font-size: 100%;">Feel free to send us your comments and suggestions.</small>
								</div> -->
								<form name="contact-form" id="contact-form">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group w-100">
												<label for="name">Name:</label>
												<input type="text" class="form-control" id="name" placeholder="Your name" required="required" autocomplete="name" />
											</div>
											<div class="form-group w-100">
												<label for="email">Email:</label>
												<input type="email" class="form-control" id="email" placeholder="Your email" required="required" autocomplete="email" />
											</div>
											<div class="form-group w-100">
												<!-- <label for="subject">Subject:</label>
										<input type="text" class="form-control" id="subject" placeholder="Subject" required="required" autocomplete="text" /> -->
												<label for="subject">Subject:</label>
												<select class="form-control" id="subject" name="subject" required style="padding-bottom: 9px;">
													<option disabled selected value="">Select Subject:</option>
													<option value="Inquiry">Inqury</option>
													<option value="Suggestion">Suggestion</option>
													<option value="Complaint">Complaint</option>
													<option value="Franchise">Franchise</option>
												</select>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group w-100">
												<label for="message">Message:</label>
												<textarea name="message" id="message" class="form-control" rows="8" cols="30" placeholder="Your message" required="required"></textarea>
											</div>
										</div>
										<div class="container-fluid d-flex justify-content-center">
											<div id="success"></div>
											<button type="submit" class="btn btn-primary w-100" id="sendMessageBtn">SEND MESSAGE</button>
										</div>
									</div>
							</form>
						</div>
					</div>
				</div>
			</div>
	</div>
	</section>
	</div>
	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<!-- Your customer chat code -->
	<div class="fb-customerchat" attribution=setup_tool page_id="179456868470" logged_in_greeting="Hi! Jelly Good Day!" logged_out_greeting="Hi! Jelly Good Day!"></div>
	<?php include 'assets/includes/footer.html';?>
	<script src="assets/js/pace.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/custom/contact-script.js"></script>
	<script src="assets/js/jqBootstrapValidation.min.js"></script>
	<script src="assets/js/contact.js"></script>
</body>

</html>