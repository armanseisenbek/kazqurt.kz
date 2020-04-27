<?php 
  require "includes/config.php";
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Молочные продукты</title>

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->  
  <link rel="stylesheet" type="text/css" href="css/style.css">

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

        <?php 
          while ( $prod = mysqli_fetch_assoc($products) ) {
        ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <a href="/pages/products.php?id=<?php echo $prod['id']; ?>">
                <div class="card" style="background-image: url(img/product-covers/<?php echo $prod['cover'] ?>);">
                  <div class="card-img-overlay">
                    <h4 class="card-title"><?php echo $prod['title']; ?></h4>
                    <div class="card-text">
                      <p><?php echo $prod['cover_info'] ?></p>
                      <button type="button" class="btn btn-success btn-lg">Выбрать</button>
                    </div>
                  </div>
                </div>
              </a>
            </div>
        <?php
          }
        ?>
      <!-- / Products catalog -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include "includes/footer.php"; ?>
  <!-- ./Footer -->

  <!-- Bootstrap JS and jquery -->
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

</body>

</html>