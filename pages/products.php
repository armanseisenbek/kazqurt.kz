<?php
require "../includes/config.php";
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Milk products</title>

	<!-- Bootstrap CSS cdn -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- icon link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Custom styles for this template -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">

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
		if (mysqli_num_rows($products) <= 0) { ?>

			<p>The page you requested was not found!</p>

		<?php
		} else {
			// get information in the database as an array and set in the variable
			$prod = mysqli_fetch_assoc($products);

			if (!empty($_COOKIE['user']))
				$isLogin = true;
			else
				$isLogin = false;

		?>
			<!-- Jumbotron Header -->
			<header class="jumbotron" id="qurt-jumb" style="background-image: url(../img/product-banners/<?php echo $prod['banner']; ?>);">
				<!-- title of product -->
				<!-- link to jump to add to cart button -->
				<a href="#submit-button">
					<h1 class="display-3 text-center"><?php echo $prod['title']; ?></h1>
				</a>
				<!-- text on product banner -->
				<p class="lead"><?php echo $prod['banner_info']; ?></p>
			</header>
			<!-- grid column -->
			<div class="mb-4" id="anchor">
				<div class="cover_info1">
					<!-- Display information about current product -->
					<p>
						<?php
						echo $prod['info'];
						?>
					</p>
					<!-- link to About us page -->
					<p>
						You can see information About us <a href="../pages/about.php">here</a>!
					</p>

				</div>



				<!-- Gallery -->
				<section class="gallery-block compact-gallery">
					<!-- Gallery heading -->
					<div class="heading">
						<h2>Gallery</h2>
					</div>
					<div class="row no-gutters">

						<?php
						// 9 gallery images with loop 
						for ($i = 1; $i <= 9; $i++) {
						?>
							<!-- grid column -->
							<div class="col-md-6 col-lg-4 item zoom-on-hover">
								<!-- show gallery with 9 images of current product -->
								<a class="lightbox" href="../img/product-gallery/<?php echo $prod['gallery_title']; ?>/<?php echo $prod['gallery_title'] . $i . '.jpg'; ?>">
									<img class="img-fluid image" src="../img/product-gallery/<?php echo $prod['gallery_title']; ?>/<?php echo $prod['gallery_title'] . $i . '.jpg'; ?>">
								</a>
							</div>

						<?php
						}
						?>

						<!-- create link for jump to order section -->
						<div id="submit-button"></div>
						<div class="order-section">
							<form action="cart.php?id=<?php echo $prod['title'] ?>" method="POST">
								<!-- button with icon of bag -->
								<button type="submit" name="send" class="btn btn-success btn-lg btn-block" <? echo $isLogin == true ? '' : 'disabled'; ?>>
									<? echo $isLogin == true ? 'Add to cart <i class="fa fa-shopping-bag"></i>' : '<span style="color: red">Please login</span>'; ?>
								</button>
							</form>
						</div>
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
									if ($counter > 3)
										break;

									$counter++;

									// SQL query for extract data from the database via ID 
									$productid = mysqli_query($connection, "SELECT * FROM `products` WHERE `id` = " . $i);
									$product = mysqli_fetch_assoc($productid);


								?>
									<!-- grid  -->
									<div class="col-md-6 col-lg-4 item zoom-on-hover">
										<a href="/pages/products.php?id=<?php echo $i; ?>">
											<img class="img-fluid image" src="../img/product-gallery/<?php echo $product['gallery_title']; ?>/<?php echo $product['gallery_title'] . 1 . '.jpg'; ?>">

										</a>
									</div>
								<?php
								}
								?>
							</div>

						</div>

					</div>

				</section>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
				<script>
					baguetteBox.run('.compact-gallery', {
						animation: 'slideIn'
					});
				</script>
				<!-- / Gallery -->
			<?php
		}
			?>


			</div>
	</div>
	<!-- Footer -->
	<?php include "../includes/footer.php"; ?>
	<!-- ./Footer -->
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<!-- Bootstrap 4 js cdn  -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

</body>

</html>