<!DOCTYPE html>
<html>
<head>
	<title>Madalin's Outlet</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width = device-width, initial-scale = 1, user-scalable = no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	

	<style>

	.img-thumb {
		height:200px;
		width: auto;
	}

	#footer {
		margin-top: 50px;
	}

	img.details {
		width:33%;
		margin:15px auto;
	}

	</style> 

</head>
<body>
	<!-- Top Nav Bar -->
	<nav class="navbar navbar-default navbar-fixed-up">
		<div class="container">
			<a href="index.php" class="navbar-brand">Madalin's Outlet</a>
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Shirts</a></li>
						<li><a href="#">Pants</a></li>
						<li><a href="#">Shoes</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
				</li>
			</ul>	
		</div>
	</nav>

	<!-- Header -->
	<div id="headerWrapper">
		<div id="back-flower"></div>
		<div id="logoText"></div>
		<div id="for-flower"></div>
	</div>
	
	<div class="container-fluid">
		<!-- left side bar -->
		<div class="col-md-2">Left Side Bar</div>

		<!-- main content -->
		<div class="col-md-8">
			<div class="row">
				<h2 class="text-center">Feature Products</h2>
				
				<div class="col-md-3">
					<h4>Levis Jeans</h4>
					<img src="images/products/men4.png" alt = "Levis Jeans" class="img-thumb" />
					<p class="list-price text-danger">List Price: <s>$54.99</s> </p>
					<p class="price"> Our price: $34.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1"> Details </button>
				</div>


				<div class="col-md-3">
					<h4>Woman's Shirt</h4>
					<img src="images/products/women4.png" alt = "Woman's Shirt"  class="img-thumb" />
					<p class="list-price text-danger">List Price: <s>$45.99</s> </p>
					<p class="price"> Our price: $29.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1"> Details </button>
				</div>


				<div class="col-md-3">
					<h4>Hollister Shirt</h4>
					<img src="images/products/men1.png" alt = "Holliester Shirt" class="img-thumb" />
					<p class="list-price text-danger">List Price: <s>$25.99</s> </p>
					<p class="price"> Our price: $19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1"> Details </button>
				</div>

				<div class="col-md-3">
					<h4>Fancy Shoes</h4>
					<img src="images/products/women6.png" alt = "Fancy Shoes" class="img-thumb" />
					<p class="list-price text-danger">List Price: <s>$69.99</s> </p>
					<p class="price"> Our price: $49.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1"> Details </button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<h4>Boys Hoodie</h4>
					<img src="images/products/boys5.png" alt = "Boys Hoodie" class="img-thumb" />
					<p class="list-price text-danger">List Price: <s>$24.99</s> </p>
					<p class="price"> Our price: $18.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1"> Details </button>
				</div>

				<div class="col-md-3">
					<h4>Girls Dress</h4>
					<img src="images/products/girls3.png" alt = "Girls Dress" class="img-thumb" />
					<p class="list-price text-danger">List Price: <s>$54.99</s> </p>
					<p class="price"> Our price: $19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1"> Details </button>
				</div>

				<div class="col-md-3">
					<h4>Women's Skirt</h4>
					<img src="images/products/women3.png" alt = "Women's Skirt" class="img-thumb" />
					<p class="list-price text-danger">List Price: <s>$29.99</s> </p>
					<p class="price"> Our price: $19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1"> Details </button>
				</div>

				<div class="col-md-3">
					<h4>Purse</h4>
					<img src="images/products/women5.png" alt = "Purse"  class="img-thumb" />
					<p class="list-price text-danger">List Price: <s>$49.99</s> </p>
					<p class="price"> Our price: $19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1"> Details </button>
				</div>
			</div>
		</div>

		<!-- right side bar -->
		<div class="col-md-2">Right Side Bar </div>	
	</div>

	<!--footer -->
	<footer class="text-center" id="footer">&copy; Copyright 2013-2018 Shaunta's Boutique</footer>
	
	<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true">
		<div class="modal-dialog modal-lg">
		  <div class="modal-content">
			<div class="modal-header">
				<button class="close" type="button"  data-dismiss="modal" aria-label = "Close">
					<span aria-hidden="true">&times;</span>
				</button> 
				<h4 class="modal-title text-center">Levis Jeans</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<div class="center-block">
								<img src="images/products/men4.png"  alt="Levis Jeans" class="details img-responsive">
							</div>
						</div>
						<div class="col-sm-6">
							<h4>Details</h4>
							<p>These jeans are amazing! They are straight leg, fit great and look sexy. Get a pair while they last!</p>
							<hr>
							<p>Price: $34.99</p>
							<p>Brand: Levis</p>
							<form action="add_cart.php" method="post">
								<div class="form-group">
									<div class="col-xs-3">
										<label for="quantity">Quantity:</label>
										<input type="text" class="form-control" id="quantity" name="quantity">
									</div>
									<p> Available: 3 </p>
								</div><br>
								<div class="form-group">
									<label for="size"></label>
									<select name="size" id="size" class="form-cotrol">
										<option value="28"></option>
										<option value="28">28</option>
										<option value="32">32</option>
										<option value="36">36</option>
									</select>
								</div>		
							</form>	
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal">Close</button>
				<button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>
			</div>
		  </div>
	    </div>
	</div>
	<script>
		jQuery(window).scroll(function(){

			var vscroll = jQuery(this).scrollTop();
			jQuery('#logoText').css({
				"transform" : "translate(0px, "+vscroll/2 +"px)"
			});

			var vscroll = jQuery(this).scrollTop();
			jQuery('#back-flower').css({
				"transform" : "translate("+vscroll/5+"px, -"+vscroll/12 +"px)"
			});

			var vscroll = jQuery(this).scrollTop();
			jQuery('#for-flower').css({
				"transform" : "translate(0px, -"+vscroll/2 +"px)"
			});
		});
	</script>
</body>
</html>