<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

        <!-- Kazqurt.kz -->
        <a class="navbar-brand" href="/">
            <img src="/favicon.ico" style="height: 18px">
            <?php echo $config['title']; ?>
        </a>

        <!-- burger for mobile devices -->
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <!-- hamburger icon -->
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <!-- navigation links -->
                <li class="nav-item">
                    <a class="nav-link" href="/index.php"> Home </a>
                </li>

                <li>
                    <a class="nav-link" href="../pages/about.php"> About us </a>
                </li>

                <?php if($_COOKIE['user'] == ''): ?>

                <li>
                    <div class="btn btn-outline-light loginButton">Login</div>
                </li>

                <li>
                    <div class="btn btn-light signupButton">Sign up</div>
                </li>

                <?php else: ?>

                <li>
                    <p><?=$_COOKIE['user']?>, <a href="../includes/exit.php">log out</a> </p>
                </li>

                <?php endif; ?>

            </ul>
        </div>

    </div>
</nav>

<!-- login form styling -->
<link rel="stylesheet" href="../css/popup.css">


<!-- сам настрой стайлинг -->
<div class="loginResult" style="display: <?php echo $_GET['display']; ?>;">
    <div class="messageWindow">
        <?php echo "<h1>" . $_GET['message'] . "</h1>";?>
    </div>
</div>


<!-- sign up -->
<div class="overlay signupDiv">
  <div class="popup js-popup-campaign">

    <form class="" action="../login.inc.php?id=<?php echo $_GET['id'] ?>" method="POST">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" oninput="checkPassword(this, 'warning1'); checkConfirm();" class="signupPassword" required>
      <p id="warning1"></p>
      <input type="password" name="confirm" placeholder="Confirm Password" oninput="checkConfirm()" class="signupConfirm" required>
      <p id="ConfirmWarning"></p>
      <button type="submit" name="signup">Sign Up</button>
    </form>
    <p class="loginButton" onclick="resetWarnings()">Login</p>
  </div>
</div>

<div class="overlay loginDiv">
  <div class="popup js-popup-campaign">
    <form class="" action="../login.inc.php?id=<?php echo $_GET['id'] ?>" method="POST">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" oninput="checkPassword(this, 'warning2')" required>
      <p id="warning2"></p>
      <button type="submit" name="login">Login</button>
    </form>
    <p class="signupButton" onclick="resetWarnings()">Sign Up</p>
  </div>
</div>


<!-- popup js and jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../scripts/popup.js"></script>
