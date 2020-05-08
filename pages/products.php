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

	<title>Молочные продукты</title>

	<!-- Bootstrap CSS cdn -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

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
		$products = mysqli_query($connection, "SELECT * FROM `products` WHERE `id` = " . (int) $_GET['id']);

		if (mysqli_num_rows($products) <= 0) { ?>

			<p>Запрашиваемая вами страница не найдена!</p>

		<?php
		} else {
			$prod = mysqli_fetch_assoc($products);
		?>
			<!-- Jumbotron Header -->
			<header class="jumbotron" id="qurt-jumb" style="background-image: url(../img/product-banners/<?php echo $prod['banner']; ?>);">
				<!-- title of product -->
				<a href="#submit-button">
					<h1 class="display-3 text-center"><?php echo $prod['title']; ?></h1>
				</a>
				<!-- text on product banner -->
				<p class="lead"><?php echo $prod['banner_info']; ?></p>
			</header>

			<!--Section: Contact v.2-->
			<div class="mb-4" id="anchor">
				<div class="cover_info1">
					<p>
						<?php
						echo $prod['cover_info'];
						?>
						Натуральный домашний курт. Изготовлен по древнейшим рецептам кочевников. Содержит в своем составе кальций, белки и ценные микроэлементы. Натуральный домашний курт. Изготовлен по древнейшим рецептам кочевников. Содержит в своем составе кальций, белки и цен
					</p>

				</div>
				<!-- <div class="row"> -->
				<!-- <div class="col-md-6 mb-md-0 mb-5">
					<div class="row">
						<h3 class="heading">Also connect with us on <a href="#social-icons"> social networks!</a></h3>

						<div class="col-md-auto">
							<div class="contacts">
								<p><i class="fa fa-whatsapp" style="color: #4FCE5D;"></i> WHATSAPP: 8-777-777-77-77</p>
								<p><i class="fa fa-telegram" style="color: #0088cc"></i> TELEGRAM: 8-777-777-77-77</p>
								<p><i class="fa fa-phone"></i> ТЕЛЕФОН: 8-777-777-77-77</p>
								<p><i class="fa fa-envelope"></i> ПОЧТА: kazqurtkz@gmail.com</p>
							</div>


						</div>

					</div>
				</div> -->
				<div id="submit-button"></div>
				<!--Grid column-->
				<div class="order-section">

					<!--Section heading-->
					<h2 class="heading">Оставьте свою заявку, чтобы мы могли связаться с вами</h2>

					<!-- send -->
					<?php
					if (isset($_POST['send'])) {
						// array for errors
						$errors = array();

						// checking for empty name or phone entry
						if ($_POST['name'] == '') $errors[] = "Введите имя!";
						if ($_POST['phone'] == '') $errors[] = "Введите номер!";

						// if there are no errors
						if (empty($errors)) {
							mysqli_query($connection, "INSERT INTO  `customers` (`product_id`, `name`, `phone`, `message`, `date`) VALUES ('" . $prod['id'] . "', '" . $_POST['name'] . "','" . $_POST['phone'] . "','" . $_POST['message'] . "', NOW() )");

							echo '<span style="color:green;"> Заявка отправлена! Ждите когда с вами свяжутся! </span>';
						} else { // print out errors
							echo '<span style="color:red;">' . $errors['0'] . '</span>';
						}
					}
					?>
					<!-- / send -->

					<form id="contact-form" name="contact-form" action="products.php?id=<?php echo $prod['id']; ?>#anchor" method="POST">
						<div class="text-center">
							<input type="submit" name="send" class="btn btn-outline-primary btn-lg btn-block" value="Оставить заявку"></input>
						</div>
					</form>

				</div>
				<!--Grid column-->



				<!-- </div> -->

			</div>
			<!--Section: Contact v.2-->

			<!-- Gallery -->
			<section class="gallery-block compact-gallery">

				<div class="heading">
					<h2>Галерея</h2>
				</div>
				<div class="row no-gutters">

					<?php
					// 9 gallery images with loop 
					for ($i = 1; $i <= 9; $i++) {
					?>

						<div class="col-md-6 col-lg-4 item zoom-on-hover">
							<a class="lightbox" href="../img/product-gallery/<?php echo $prod['gallery_title']; ?>/<?php echo $prod['gallery_title'] . $i . '.jpg'; ?>">
								<img class="img-fluid image" src="../img/product-gallery/<?php echo $prod['gallery_title']; ?>/<?php echo $prod['gallery_title'] . $i . '.jpg'; ?>">
							</a>
						</div>

					<?php
					}
					?>

					<div class="bottom-section">
						<!--  -->
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

	<!-- Footer -->
	<div id="social-icons"></div>
	<?php include "../includes/footer.php"; ?>
	<!-- ./Footer -->

	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<!-- Bootstrap 4 js cdn  -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

</body>

</html>