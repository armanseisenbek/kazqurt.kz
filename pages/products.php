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

  <!-- login form styling -->
  <link rel="stylesheet" href="../css/popup.css">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <!-- Gallery styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css"/>
  <link rel="stylesheet" href="../css/compact-gallery.css">

</head>

<body>

  <!-- сам настрой стайлинг -->
  <div class="loginResult" style="display: <?php echo $_GET['display']; ?>;">
    <div class="messageWindow">
      <?php
      echo "<h1 style=\"text-align:center;\">" . $_GET['message'] . "</h1>";
      ?>
      <h1 class="js-close-window">ok</h1>
    </div>
  </div>

  <!-- sign up -->
  <main>
    <div class="button js-reg-button-campaign"><span>Login</span></div>
  </main>
  <div class="overlay js-reg-overlay-campaign">
    <div class="popup js-popup-campaign">

      <form class="" action="../login.inc.php?id=<?php echo $_GET['id'] ?>" method="POST">
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" pattern="^(?=.*[A-Z])(?=.*[A-Za-z])(?=.*[0-9])(?=.*[!@#$%&*?])[A-Za-z0-9!@#$%&*?]{8,}$" required>
        <input type="password" name="confirm" placeholder="Confirm Password" pattern="^(?=.*[A-Z])(?=.*[A-Za-z])(?=.*[0-9])(?=.*[!@#$%&*?])[A-Za-z0-9!@#$%&*?]{8,}$" required>
        <button type="submit" name="signup">Sign Up</button>
      </form>
      <p class="js-log-button-campaign">Login</p>
      <p id="res">d</p>
    </div>
  </div>

  <div class="overlay js-log-overlay-campaign">
    <div class="popup js-popup-campaign">
      <?php
      echo "<h1 style=\"text-align:center;\">" . $_GET['error'] . "</h1>";
      ?>
      <form class="" action="../login.inc.php?id=<?php echo $_GET['id'] ?>" method="POST">
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" pattern="^(?=.*[A-Z])(?=.*[A-Za-z])(?=.*[0-9])(?=.*[!@#$%&*?])[A-Za-z0-9!@#$%&*?]{8,}$" required>
        <button type="submit" name="login">Login</button>
      </form>
      <p class="js-reg-button-campaign">Sign Up</p>
    </div>
  </div>


  <!-- Navigation -->
  <?php include "../includes/navbar.php"; ?>

  <!-- Page Content -->
  <div class="container">

    <?php
    $products = mysqli_query($connection, "SELECT * FROM `products` WHERE `id` = " . (int) $_GET['id']);

    if ( mysqli_num_rows($products) <= 0 ) { ?>

      <p>Запрашиваемая вами страница не найдена!</p>

      <?php
    } else {
      $prod = mysqli_fetch_assoc($products);
      ?>
      <!-- Jumbotron Header -->
      <header class="jumbotron" id="qurt-jumb"
      style="background-image: url(../img/product-banners/<?php echo $prod['banner']; ?>);">
      <!-- title of product -->
      <h1 class="display-3 text-center"><?php echo $prod['title']; ?></h1>
      <!-- text on product banner -->
      <p class="lead"><?php echo $prod['banner_info'];?></p>
    </header>

    <!--Section: Contact v.2-->
    <div class="mb-4" id="anchor">

      <div class="row">

        <!--Grid column-->
        <div class="col-md-6 mb-md-0 mb-5" >

          <!--Section heading-->
          <h2 class="heading">Оставьте свою заявку, чтобы мы могли связаться с вами</h2>

          <!-- send -->
          <?php
          if ( isset($_POST['send']) ) {
            // array for errors
            $errors = array();

            // checking for empty name or phone entry
            if ($_POST['name'] == '') $errors[] = "Введите имя!";
            if ($_POST['phone'] == '') $errors[] = "Введите номер!";

            // if there are no errors
            if ( empty($errors) ){
              mysqli_query($connection, "INSERT INTO  `customers` (`product_id`, `name`, `phone`, `message`, `date`) VALUES ('". $prod['id'] ."', '". $_POST['name'] ."','". $_POST['phone'] ."','". $_POST['message'] ."', NOW() )");

              echo '<span style="color:green;"> Заявка отправлена! Ждите когда с вами свяжутся! </span>';
            } else { // print out errors
              echo '<span style="color:red;">' . $errors['0'] . '</span>';
            }
          }
          ?>
          <!-- / send -->

          <form  id="contact-form"  name="contact-form" action="products.php?id=<?php echo $prod['id']; ?>#anchor" method="POST">

            <label for="subject" class="">Ваши контактные данные</label>
            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="name" name="name" class="form-control" placeholder="Имя" value="<?php echo $_POST['name'];?>">
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="phone" name="phone" class="form-control" placeholder="Ваш телефонный номер" value="<?php echo $_POST['phone'];?>">
                </div>
              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

              <!--Grid column-->
              <div class="col-md-12">
                <div class="md-form">
                  <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Комментарий (не обязательно)"></textarea>
                </div>
              </div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

            <div class="text-center">
              <input type="submit" name="send" class="btn btn-primary" value="Оставить заявку"></input>
            </div>
          </form>

        </div>
        <!--Grid column-->

        <div class="col-md-6 mb-md-0 mb-5">

          <h2 class="heading">Или свяжитесь с нами по:</h2>
          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-md-12">
              <div class="contacts">
                <p><i class="fa fa-whatsapp" style="color: #4FCE5D;"></i> WHATSAPP: 8-777-777-77-77</p>
                <p><i class="fa fa-telegram" style="color: #0088cc"></i> TELEGRAM: 8-777-777-77-77</p>
                <p><i class="fa fa-phone"></i> ТЕЛЕФОН: 8-777-777-77-77</p>
                <p><i class="fa fa-envelope"></i> ПОЧТА: kazqurtkz@gmail.com</p>
              </div>


            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->
        </div>

      </div>

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
            <a class="lightbox" href="../img/product-gallery/<?php echo $prod['gallery_title'];?>/<?php echo $prod['gallery_title'] . $i . '.jpg'; ?>">
              <img class="img-fluid image" src="../img/product-gallery/<?php echo $prod['gallery_title'];?>/<?php echo $prod['gallery_title'] . $i . '.jpg'; ?>">
            </a>
          </div>

          <?php
        }
        ?>

      </div>

    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
    baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
    </script>
    <!-- / Gallery -->
    <?php
  }
  ?>

</div>

<!-- Footer -->
<?php include "../includes/footer.php"; ?>
<!-- ./Footer -->

<!-- jquery -->
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<!-- Bootstrap 4 js cdn  -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

<!-- popup js and jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../scripts/popup.js"></script>

</body>

</html>
