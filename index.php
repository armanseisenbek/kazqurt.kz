<?php 
    require "includes/config.php";
?>
<!DOCTYPE html>
<html>

<head>

    <!-- external head file -->
    <?php require "includes/head.php"; ?>

    <title>Молочные продукты</title>
</head>

<body>

    <!-- Navigation -->
    <?php include "includes/navbar.php"; ?>

    <!-- front page image -->
    <div class="frontImage my-4">
        <div class="container">
            <h1 class="display-3">Добро пожаловать!</h1>
            <p class="lead">Мы предлагаем нашим клиентам самые натуральные молочные продукты.</p>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container" id="products">
        <h2 class="heading">Наши товары</h2>

        <!-- Page Features -->
        <div class="row text-center">

            <!-- Products catalog -->
            <?php 
                $products = mysqli_query($connection, "SELECT * FROM `products`");
            ?>

            <?php while ( $prod = mysqli_fetch_assoc($products) ) { ?>

            <div class="col-lg-4 col-md-6 mb-4">

                <a href="/pages/products.php?id=<?php echo $prod['id']; ?>">
                    <!-- background image of product card -->
                    <div class="card" style="background-image: url(img/product-covers/<?php echo $prod['cover'] ?>);">
                        <div class="card-img-overlay">
                            <!-- title of product card -->
                            <h4 class="card-title"><?php echo $prod['title']; ?></h4>  
                            <!-- text of product card -->
                            <div class="card-text">
                                <p><?php echo $prod['cover_info'] ?></p>
                                <button type="button" class="btn btn-success btn-lg">Выбрать</button>
                            </div>
                        </div>
                    </div>
                </a>

            </div>

            <?php } ?>
            <!-- / Products catalog -->

        </div>
        <!-- / Page Features -->

    </div>
    <!-- / Page Content -->

    <!-- Footer -->
    <?php include "includes/footer.php"; ?>
    <!-- ./Footer -->

</body>

</html>