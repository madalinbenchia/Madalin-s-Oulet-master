<?php 
include 'includees/head.php'; 
include 'includees/navigation.php';
include 'includees/headerfull.php';
include 'includees/leftbar.php';

?>
		
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

<?php 
include 'includees/detailsmodal.php';
include 'includees/rightbar.php';
include 'includees/footer.php';
?>