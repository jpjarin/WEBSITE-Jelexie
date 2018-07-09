<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
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
</head>
<body>

<?php include 'assets/includes/navbar.html';?>
<div class="bg-white">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb container">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
  </ol>
</nav>

<section id="contact-page" class="container">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				
			</div>
			<div class="col-md-6">
				<div class="contact-us">
					<div class="contact-heading container-fluid text-center">
						<h3 class="mt-2">SEND US A MESSAGE</h3>
					</div>
					<div class="form container-fluid">
						<form name="" id="contact-form">
							<div class="row">
								<div class="form-group">
									<label for="name">Name:</label>
									<input type="text" class="form-control" id="name" placeholder="Enter name" required="required" autocomplete="name" />
								</div>
								<div class="form-group">
									<label for="email">Email:</label>
									<input type="email" class="form-control" id="email" placeholder="Enter email" required="required" autocomplete="email" />
								</div>
								<div class="form-group">
										<label for="message">Message:</label>
										<textarea name="message" id="message" class="form-control" rows="10" cols="30" required="required" placeholder="Message"></textarea>
								</div>
								<div id="success"></div>
								<button type="submit" class="btn btn-primary btn-block" id="">SEND MESSAGE</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>	
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>

<?php include 'assets/includes/footer.html';?>


<script src="assets/js/pace.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/wow.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.sticky.js"></script>
  <script src="assets/js/custom/contact-script.js"></script>
</body>
</html>