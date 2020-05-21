<?php 
    require "includes/config.php";
?>
<!DOCTYPE html>
<html>

<head>

    <!-- external head file -->
    <?php require "includes/head.php"; ?>

    <title>Milk products</title>

</head>

<body>

    <!-- Navigation -->
    <?php include "includes/navbar.php"; ?>

    <!-- front page banner -->
    <div class="pageBanner blur-img my-4">
        <div class="container">
            <h1 class="display-3">Welcome!</h1>
            <p class="lead">We offer our customers the most natural dairy products.</p>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">

        <h2 class="heading">Our products</h2>

        <!-- Page Features -->
        <div class="row text-center">

            <!-- Products catalog -->
            <?php
            $products = mysqli_query($connection, "SELECT * FROM `products`");
            while ( $prod = mysqli_fetch_assoc($products) ) { ?>

            <div class="col-lg-4 col-md-6 mb-4">

                <a href="/pages/products.php?id=<?php echo $prod['id']; ?>">
                    <!-- background image of product card -->
                    <div class="card" style="background-image: url( img/product-covers/product-cover-<?php echo $prod['title'] ?>.jpg );">
                        <div class="card-img-overlay">
                            <!-- title of product card -->
                            <h4 class="card-title"><?php echo $prod['title']; ?></h4>
                            <!-- text of product card -->
                            <div class="card-text">
                                <p><?php echo $prod['cover_info'] ?></p>
                                <!-- button -->
                                <div class="text-center">
                                    <button type="button" class="btn btn-success btn-lg">Choose</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

            <?php } ?>
            <!-- / Products catalog -->

        </div>
        <!-- / Page Features -->

        <!-- Review -->
        <div class="review">
            <h2 class="heading">customer reviews</h2>
            <p class="mySlides">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p class="mySlides">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <button class="slideButton btn btn-success" onclick="plusDivs(-1)">Another review</button>
            <!-- js script for slide -->
            <script src="scripts/slide.js"></script>
        </div>
        <!-- / Review -->

    </div>
    <!-- / Page Content -->

    <!-- Footer -->
    <?php include "includes/footer.php"; ?>
    <!-- ./Footer -->

    <!-- jquery -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <!-- Bootstrap 4 js cdn -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

</body>
</html>
