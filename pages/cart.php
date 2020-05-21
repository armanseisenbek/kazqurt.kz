<!-- configurations -->
<?php require "../includes/config.php"; ?>

<!DOCTYPE html>
<html>

<head>

	<!-- external head file -->
	<?php require "../includes/head.php"; ?>

	<title>My Cart</title>

	<!-- jquery -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

</head>

<body>
	<!-- Navigation -->
	<?php include "../includes/navbar.php"; ?>
	<br><br><br>
	
	<?php
	// query on the database to get information about the product by id
	$product = mysqli_query($connection, "SELECT * FROM `products` WHERE `title` = '" .  $_GET['id'] . "'");

	$prod = mysqli_fetch_assoc($product);

	if (isset($_POST['send'])) {

		mysqli_query($connection, "INSERT INTO `cart`(
			  `product_name`,
			  `customer_email`,
			  `price`
			  )
			VALUES
			  ('" . $prod['title'] . "', 
			   '" . $_COOKIE['user'] . "', "
			. $prod['price'] . " 
			  )");
	}
	?>

	<div class="row">
		<!-- This justifies column size. Our is middle size 5 first rows -->
		<div class="col-md-5">
			<h5>Customer</h5>
			<hr>
			<!-- CARD class in bootstrap is smth like container with information -->
			<div class="card card-body">
				<!-- there also table class firm BS  -->
				<table class="table table-sm">
					<!-- The <tr> tag serves as a container for creating a table row. -->
					<tr>
						<!-- Our tag headers -->
						<th></th>
						<th>Customer</th>
						<th>Phone</th>
					</tr>

					<tr>
						<td><a class="btn btn-sm btn-info" href="#">View</a></td>
						<td>Name</td>
						<td>Phone</td>
					</tr>

				</table>
			</div>
		</div>

		<!-- My Basket -->
		<div class="col-md-7">
			<h5>My Cart</h5>

			<hr>
			<div class="card card-body">
				<form method="POST" action="" id="ajax_form">
					<table class="table table-sm">

						<tr>
							<!-- We have headers like product name, date, status of purchase, entity of products and repeat button -->
							<th>Product</th>
							<th>Status</th>
							<th>Entity</th>
							<th>Price</th>
							<th>Show full price</th>
							<th>Full Price</th>
							<th>Buy</th>
							<th>Delete</th>
						</tr>
						<!-- Creating loop for all stored products in customers cart -->
						<!-- ARMA, не забудь про почту текущего юзера после слияния -->
						<?php


						$cart_get_count = mysqli_query($connection, "SELECT COUNT(id) FROM `cart`");

						// for ($i = 1; $i <= 5; $i++) {
						$current_prod_price =
							$user = mysqli_query($connection, "SELECT * FROM `cart` WHERE `customer_email` = '" . $_COOKIE['user'] . "' AND `id` = " . 1);
						// for all info as one variable
						$ord = mysqli_fetch_assoc($user);
						?>
						<tr>
							<!-- THere is all last 5 orders of user -->
							<td><?php echo $ord['product_name']; ?></td>
							<td>In Cart</td>
							<td><?php echo '<input type="number" name="entity" min="1" value="3" id= "' . $i . '" >'; ?></td>
							<td><?php echo $ord['price']; ?></td>
							<td><input type="submit" name="show_price" class="btn btn-sm btn-info" value="Show price"></td>

							<?php

							if (isset($_POST['show_price'])) {

							?>

								<td><?php echo $ord['price'] * $_POST['entity']; ?></td>
								<td><input type="submit" name="buy" class="btn btn-sm btn-info" value="Buy" onclick="" /></td>
								<td><a class="btn btn-sm btn-danger" href="#">Delete</td>

							<? }
							?>

						
						</tr>
					</table>
				</form>

			</div>
		</div>

	</div>
	<br><br>

	<div class="row">
		<div class="col-md-5"></div>
		<!-- Next table about orders -->
		<div class="col-md-7">
			<h5>Last 5 Orders</h5>

			<hr>
			<div class="card card-body">

				<table class="table table-sm">

					<tr>
						<!-- We have headers like product name, date, status of purchase, entity of products and repeat button -->
						<th>Product</th>
						<th>Date ordered</th>
						<th>Status</th>
						<th>Entity</th>
						<th>Repeat</th>
					</tr>
					<?php

					// SQL query for get count of orders
					$orders_get_count = mysqli_query($connection, "SELECT COUNT(id) FROM `orders`");
					// extract data from the database to the array 
					$orders_count = mysqli_fetch_assoc($orders_get_count);
					$counter = 0;

					for ($i = $orders_count['COUNT(id)']; $i > 0; $i--) {
						//display only 3 product
						if ($counter > 5)
							break;

						$counter++;



						// SQL query for extract data from the database via ID 
						$orders_get_id = mysqli_query($connection, "SELECT * FROM `orders` WHERE `id` = " . $i);
						$orders = mysqli_fetch_assoc($orders_get_id);

						if ($orders['customer_email'] != $_COOKIE['user'])
							continue;

					?>
						<tr>
							<!-- THere is all last 5 orders of user -->
							<td><? echo $orders['product_name'] ?></td>
							<td><? echo $orders['date'] ?></td>
							<td><? echo $orders['status'] ?></td>
							<td><? echo $orders['quantity'] ?></td>
							<td><a class="btn btn-sm btn-info" href="">Repeat</a></td>
						</tr>
					<?php } ?>

				</table>
			</div>
		</div>

	</div>

	<?php
	if (isset($_POST['buy'])) {
		$entity = $_POST['entity'];

		mysqli_query($connection, "INSERT INTO `orders`(
					  `product_name`,
					  `customer_email`,
					   `quantity`,
					    `date`,
					     `status`
					  )
					VALUES
					  ('" . $prod['title'] . "',
					   '" . $_COOKIE['user'] . "',
					   " . $entity . ",
                  			 NOW() ,
                			'requested'
					  )");
	};

	?>
	>
</body>

</html>