<!-- configurations -->
<?php require "includes/config.php"; ?>

<!DOCTYPE html>
<html>

<head>

    <!-- external head file -->
    <?php require "includes/head.php"; ?>

    <title>Молочные продукты</title>

</head>

<body>

    <!-- navigation bar -->
    <?php include "includes/navbar.php"; ?>

    <!-- front page banner -->
    <div class="pageBanner my-4">
        <div class="container">
            <h1 class="display-3">Добро пожаловать!</h1>
            <p class="lead">Мы предлагаем нашим клиентам самые натуральные молочные продукты.</p>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">

        <h2 class="heading">Наши товары</h2>

        <!-- Page Features -->
        <div class="row text-center">

            <!-- Products catalog -->
            <?php 
            $products = mysqli_query($connection, "SELECT * FROM `products`");
            while ( $prod = mysqli_fetch_assoc($products) ) { ?>

            <div class="col-lg-4 col-md-6 mb-4">

                <a href="/pages/products.php?id=<?php echo $prod['id']; ?>">
                    <!-- background image of product card -->
                    <div class="card" style="background-image: url( img/product-covers/<?php echo $prod['cover'] ?> );">
                        <div class="card-img-overlay">
                            <!-- title of product card -->
                            <h4 class="card-title"><?php echo $prod['title']; ?></h4>  
                            <!-- text of product card -->
                            <div class="card-text">
                                <p><?php echo $prod['cover_info'] ?></p>
                                <!-- button -->
                                <div class="text-center">
                                    <button type="button" class="btn btn-success btn-lg">Выбрать</button>
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
            <h2 class="heading">Отзывы наших покупателей</h2>
            <p class="mySlides">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p class="mySlides">
                dfaksjdfhasdjfasdlfkas;ldj
            </p>

            <button class="slideButton btn btn-success" onclick="plusDivs(-1)">Другой отзыв</button>
            <!-- js script for slide -->
            <script src="scripts/slide.js"></script>
        </div>
        <!-- / Review -->

    </div>
    <!-- / Page Content -->

    <!-- jquery -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <!-- Bootstrap 4 js cdn -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <!-- Footer -->
    <?php include "includes/footer.php"; ?>
    <!-- ./Footer -->

</body>

</html>