<!-- 
* Jelexie Bakeshop (http://www.jelexie.com/)
* Copyright 2018 JVP Breadking Food Corporation
* Licensed Under MIT (http://www.jelexie.com/LICENSE)
-->

<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="icon" href="favicon.png">
	<link href="assets/css/product-style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/fontawesome/css/all.css" media="all">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/hover.css">
	<link rel="stylesheet" type="text/css" href="assets/css/magnifier.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<noscript>
		<meta http-equiv="refresh" content="0;url=noscript.html">
	</noscript>
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<div id="site-update">
		<div class="site-update animated">
			<div class="alert alert-dismissible fade show text-center" role="alert" style="position: initial;">
			<div style="position: inherit;">
			  <strong>Notice:</strong> We are still undergoing our site update. Please keep in mind that our website may not function properly yet.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
		</div>
</div>

<?php include 'assets/includes/navbar.html';?>
<div class="bg-red">

	<nav id="breadcrumb" aria-label="breadcrumb">
	  <ol class="breadcrumb container">
	    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
	    <li class="breadcrumb-item active" aria-current="page">Products</li>
	  </ol>
	</nav>

<section id="product-page" class="pb-4">
	<div id="product-page-body" class="container bg-white pt-3" style="border-radius: 0.25rem; -moz-box-shadow: 3px 4px 10px 3px #890000;-webkit-box-shadow: 3px 4px 10px 3px #890000;box-shadow: 3px 4px 10px 3px #890000;">
		<div class="categories row justify-content-center">
					<div class="col-xs-4 m-1">
						<div id="pastries" class="category rounded hvr-bob" data-url="assets/category/pastries.html">
							<h4 class="p-2 mb-0">Pastries<span style="padding-left: 6px; position: relative;top: 5px;" class="icon-pastry"></span></h4>
						</div>
					</div>
					<div class="col-xs-4 m-1">
						<div id="breads" class="category rounded hvr-bob" data-url="assets/category/breads.html">
							<h4 class="p-2 mb-0">Breads<span style="padding-left: 6px; position: relative;top: 5px;" data-icon="a"></span></h4>
						</div>
					</div>
					<div class="col-xs-4 m-1">
						<div class="category rounded hvr-bob">
							<div class="cakes-dropdown">
							  <div class="dropbtn"><h4 class="p-2 mb-0">Cakes<i class="fas fa-caret-down" style="padding:3.4px 0px 0 5px;"></i></h4></div>
							  <div id="cakes-dropdown-content" class="cakes-dropdown-content pt-2">
							    <div class="cake-category" id="ref-cakes" data-url="assets/category/ref-cakes.html">Refrigerated Cakes<span style="padding-left: 10px;position: relative;top: 2px;" class="icon-ref-cake"></span></div>

							    <div class="cake-category" id="mto" data-url="assets/category/mto.html">Made-to-order cakes<span style="padding-left: 10px; position: relative;top: 2px;" class="icon-mto"></span></div>
							    
							    <div class="cake-category" id="fondant" data-url="assets/category/fondant.html">Fondant Cakes<span style="padding-left: 10px; position: relative;top: 2px;" class="icon-fondant"></span></div>
							  </div>
							</div>
						</div>
					</div>
			</div>
		<div class="container-fluid">	
			<section id="products-view" style="position: relative;">
				<div class="loader"><!-- Place at bottom of page --></div>
				<div id="category-view">
					
				</div>
			</section>
		</div>
</div>
</section>

</div>


<?php include 'assets/includes/footer.html';?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/mobile/1.5.0-alpha.1/jquery.mobile-1.5.0-alpha.1.min.js"></script> -->
<script src="assets/js/pace.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.event.ue.js"></script>
<script src="assets/js/jquery.flexslider.js"></script>
<script src="assets/js/wow.min.js"></script>
 <script src="assets/js/bootstrap.min.js"></script>
 <script src="assets/js/jquery.sticky.js"></script>
 <!-- <script src="assets/js/jqBootstrapValidation.min.js"></script> -->
 <script src="assets/js/modernizr-3.6.0.min.js"></script>
 <script src="assets/js/custom/product-script.js"></script>
 <!-- <script src="assets/js/comment.js"></script> -->
</body>
</html>