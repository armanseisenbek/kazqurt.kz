<!-- configurations -->
<?php require "../includes/config.php"; ?>

<!DOCTYPE html>
<html>

<head>

	<!-- external head file -->
    <?php require "../includes/head.php"; ?>

	<title>Milk products</title>

	<!-- Gallery styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
	<link rel="stylesheet" href="../css/compact-gallery.css">

</head>

<body>

	<!-- Navigation -->
	<?php include "../includes/navbar.php"; ?>

	<!-- Page Content -->
	<div class="container">

		<?php
		// query on the database to get information about the product by id
		$products = mysqli_query($connection, "SELECT * FROM `products` WHERE `id` = " . (int) $_GET['id']);
		// checks that this product is exist 
		if (mysqli_num_rows($products) <= 0) {
			echo "<p>The page you requested was not found!</p>";
		} else {

			// get information in the database as an array and set in the variable
			$prod = mysqli_fetch_assoc($products);
		?>
			<!-- Jumbotron Header -->
			<header 
				class="jumbotron"
				style="background-image: url(../img/product-banners/product-banner-<?php echo $prod['title']; ?>.jpg);"
			>
				<!-- title of product -->
				<h1 class="display-3 text-center" style="text-transform: uppercase;"><?php echo $prod['title']; ?></h1>
				<!-- text on product banner -->
				<p class="lead text-center"><?php echo $prod['banner_info']; ?></p>
			</header>

			<!-- grid column -->
			<div class="mb-4">

				<!-- Display information about current product -->
				<p class="productInfo">
					<?php echo $prod['info']; ?>
				</p>

				<!-- create link for jump to order section -->
					<div id="submit-button"></div>
					<div class="order-section">
						<!-- link to the to cart -->
						<a href="/my_purchases.php?id=<?php echo $prod['title'] ?>">
							<!-- button with icon of bag -->
							<button type="submit" name="send" class="btn btn-success btn-lg btn-block">
								Add to cart <i class="fa fa-shopping-bag"></i>
							</button>
						</a>
					</div>

				<!-- Gallery -->
				<div class="gallery-block compact-gallery">
					<!-- Gallery heading -->
					<h2 class="heading">Gallery</h2>
					
					<div class="row no-gutters">

						<?php 
						// 9 gallery images through the loop 
						for ($i = 1; $i <= 9; $i++) { ?>

							<!-- grid column -->
							<div class="col-md-6 col-lg-4 item zoom-on-hover">
								<!-- show gallery with 9 images of current product -->
								<a class="lightbox" 
								href="../img/product-gallery/<?php echo $prod['title']; ?>/<?php echo $prod['title'] . $i . '.jpg'; ?>">
									<img class="img-fluid image" src="../img/product-gallery/<?php echo $prod['title']; ?>/<?php echo $prod['title'] . $i . '.jpg'; ?>">
								</a>
							</div>

						<?php } // end of the for loop ?>

					</div>

				</div>

				<!-- / Gallery -->

				<!-- bottom section -->
				<div class="bottom-section">
					<h2 class="heading">Our other products</h2>

					<div class="row no-gutters">
						<?php
						// SQL query for get count of products
						$products_get_count = mysqli_query($connection, "SELECT COUNT(id) FROM `products`");
						// extract data from the database to the array 
						$prod1 = mysqli_fetch_assoc($products_get_count);

						$counter = 0;

						for ($i = 1; $i <= $prod1['COUNT(id)']; $i++) {

							// now we have only 3 product if add more products remove this comment
							// skip the current product
							// if ((int) $_GET['id'] == $i)
							// 	continue;

							//display only 3 product
							if ($counter > 3) break;

							$counter++;

							// SQL query for extract data from the database via ID 
							$productid = mysqli_query($connection, "SELECT * FROM `products` WHERE `id` = " . $i);
							$product = mysqli_fetch_assoc($productid);

						?>
							<!-- grid  -->
							<div class="col-md-6 col-lg-4 item zoom-on-hover">
								<a href="/pages/products.php?id=<?php echo $i; ?>">
									<img
										class="img-fluid image bottomProducts" 
										src="../img/product-gallery/<?php echo $product['title']; ?>/<?php echo $product['title'] . 1 . '.jpg'; ?>"
									>
								</a>
							</div>

						<?php } // end of for loop ?>
					</div>

				</div>
				<!-- / bottom section -->
			</div>
		<?php } ?>

	</div>
	<!-- / Page container -->

	<!-- Footer -->
	<?php include "../includes/footer.php"; ?>
	<!-- ./Footer -->

	<!-- Gallery scripts for sliding -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
	<script> baguetteBox.run('.compact-gallery', { animation: 'slideIn' }); </script>
	
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<!-- Bootstrap 4 js cdn  -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

</body>

</html>